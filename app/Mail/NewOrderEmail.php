<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderEmail extends Mailable
{
    use Queueable, SerializesModels;


    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($passedDataForEmail)
    {
        $this->data = $passedDataForEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->markdown('mails.neworder')
            ->from('info@wombatsbrand.com', $this->data->brand_name)
            ->with('data', $this->data)
            ->subject('Vaša porudžbina je primljena | '.$this->data->brand_name);

    }
}
