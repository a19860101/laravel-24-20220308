<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        //
        $this->params = $params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->params->mail)
        ->subject('subject')
        ->view('mail')
        ->with([
            'name' => $this->params->name,
            'phone' => $this->params->phone,
            'mail' => $this->params->mail,
            'content' => $this->params->content
        ]);
    }
}
