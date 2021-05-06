<?php

namespace App\Jobs;

use App\Mail\NewOrderEmail;
use App\Models\AbandonedCart;
use App\Mail\AbandonedCartEmail;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\OrderController;
use Carbon\Carbon;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    private $data;
    private $emailType;
    private $orderControllerObj;
    private $modelAbandonedCart;
    private $modelOrder;
    private $abandonedInfo;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($passedData, $emailType)
    {
        $this->data = $passedData;
        $this->emailType = $emailType;
        $this->orderControllerObj = new OrderController();
        $this->modelAbandonedCart = new AbandonedCart();
        $this->modelOrder = new Order();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Config::set('app.name', $this->data->brand_name);
        Config::set('app.url', $this->data->brand_url);
        Config::set('mail.from.name', $this->data->brand_name);

        if($this->emailType=='newOrder'){
            $emailObj = new NewOrderEmail($this->data);
        }

        if($this->emailType=='abandonedFirst'){

            $uuid = $this->data->uuid;
            $email = $this->data->email;
            $product_id = $this->data->product_id;

            $resultAbandoned = $this->modelAbandonedCart->getAbandonedUuidIfNotRecoveredByProduct($uuid, $product_id);

            if($resultAbandoned){

                $resultIfOrderExists = $this->modelOrder->getOrderByEmailAndProductIdByDate($resultAbandoned->email, $resultAbandoned->product_id);

//                Log::info("Result about order from SendEmail \nResult: " . json_encode($resultIfOrderExists, JSON_PRETTY_PRINT));

                if(count($resultIfOrderExists)>0) {
                    $resultDelete = $this->orderControllerObj->checkAndDeleteAbandonedIfOrderExists($resultAbandoned->email, $resultAbandoned->product_id);
//                    Log::info("Abandoned deleted on sending email \nResult: " . json_encode($resultDelete, JSON_PRETTY_PRINT));
                } else {
                    if($resultAbandoned->level<=2){
                        $emailObj = new AbandonedCartEmail($resultAbandoned);
                        $this->release(Carbon::now()->addDay());
                        if($emailObj) {
                            $this->modelAbandonedCart->increaseAbandonedLevelByProduct($resultAbandoned->uuid, $resultAbandoned->product_id);
                        }
                    }
                    else {
                        $this->delete();
//                        Log::info("Abandoned email - Job deleted after 3rd attempt \nInfo: " . json_encode($this->data, JSON_PRETTY_PRINT));
                    }
                }
            }
        }

        try {
            if(isset($emailObj)){
                Mail::to($this->data->email)
                    ->send($emailObj);
            }
        }
        catch(\Exception $exception){
            Log::error('Error on sending email: ' . $exception->getMessage());
//            Log::warning('Email Details:'. json_encode($resultAbandoned, JSON_PRETTY_PRINT));
        }

    }

}
