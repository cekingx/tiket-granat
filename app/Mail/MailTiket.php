<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Storage;
use App\Tiket;

class MailTiket extends Mailable
{
    use Queueable, SerializesModels;
    public $tiket;
    public $receipt;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Tiket $tiket, $receipt)
    {
        $this->tiket = $tiket;
        $this->receipt = $receipt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@granatsmft.com')
                    ->view('mail.mail')
                    ->attachData($this->receipt, 'receipt.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
