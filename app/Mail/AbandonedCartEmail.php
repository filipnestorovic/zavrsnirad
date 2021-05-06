<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class AbandonedCartEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

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
        if($this->data->country_shortcode != "rs") {
            $country_slug = $this->data->slug;
            $slug = substr($country_slug, 3);
        } else {
            $slug = $this->data->slug;
        }

        $buttonUrl = $this->data->brand_url.'/'.$slug.'/checkout/'.$this->data->uuid;

        $this->data->buttonUrl = $buttonUrl;

        $abandoned1 = "abandoned1";
        $abandoned2 = "abandoned2";

        if($this->data->country_shortcode != null) {
            $country = $this->data->country_shortcode;
            $abandoned1 = $country.'_'.$abandoned1;
            $abandoned2 = $country.'_'.$abandoned2;
        }

        if($this->data->country_shortcode == "bg") {
            if($this->data->level==1){
                return $this->markdown('mails.bg_abandoned1')
                    ->from('info@wombatsbrand.com', $this->data->brand_name)
                    ->with('data', $this->data)
                    ->subject('Вие сте пропуснали да завършите Вашата покупка | '.$this->data->brand_name);
            }
            else if($this->data->level==2){
                return $this->markdown('mails.bg_abandoned2')
                    ->from('info@wombatsbrand.com', $this->data->brand_name)
                    ->with('data', $this->data)
                    ->subject('Все още не е твърде късно да завършите Вашата покупка с допълнителна 20% отстъпка | '.$this->data->brand_name);
            }
        } else if($this->data->country_shortcode == "ro") {
            if($this->data->level==1){
                return $this->markdown('mails.ro_abandoned1')
                    ->from('info@wombatsbrand.com', $this->data->brand_name)
                    ->with('data', $this->data)
                    ->subject('Ai uitat să finalizezi achiziția | '.$this->data->brand_name);
            }
            else if($this->data->level==2){
                return $this->markdown('mails.ro_abandoned2')
                    ->from('info@wombatsbrand.com', $this->data->brand_name)
                    ->with('data', $this->data)
                    ->subject('Încă nu este prea târziu pentru a-ți finaliza comanda cu o reducere suplimentară de 20% | '.$this->data->brand_name);
            }
        } else {
            if($this->data->level==1){
                return $this->markdown('mails.abandoned1')
                    ->from('info@wombatsbrand.com', $this->data->brand_name)
                    ->with('data', $this->data)
                    ->subject('Zaboravili ste da kompletirate kupovinu | '.$this->data->brand_name);
            }
            else if($this->data->level==2){
                return $this->markdown('mails.abandoned2')
                    ->from('info@wombatsbrand.com', $this->data->brand_name)
                    ->with('data', $this->data)
                    ->subject('Još uvek nije kasno da završite kupovinu sa 20% dodatnog popusta | '.$this->data->brand_name);
            }
        }
    }
}
