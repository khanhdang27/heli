<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $body;

    public function title($title)
    {
        $this->title = $title;

        return $this;
    }

    public function body($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this;
    }
}
