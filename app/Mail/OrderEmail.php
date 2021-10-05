<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name, $mobile, $code_tag;

    public function __construct($name, $mobile, $code_tag)
    {
        $this->name = $name;
        $this->mobile = $mobile;
        $this->code_tag = $code_tag;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.sendOrderEmail')->with([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'code_tag' => $this->code_tag
        ]);
    }
}
