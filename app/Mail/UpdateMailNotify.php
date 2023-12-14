<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UpdateMailNotify extends Mailable
{
    use Queueable, SerializesModels;
    
    public $customers;

    public function __construct($customers)
    {
        $this->customers = $customers;
    }

    public function build( )
    {
        
        return $this->view('mail.Update_mail')
                    ->subject('Update');
    }
}
