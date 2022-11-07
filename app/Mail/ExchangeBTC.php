<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Invoice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExchangeBTC extends Mailable
{
    use Queueable, SerializesModels;

        /**
     * The order instance.
     *
     * @var \App\Models\Order
     */
    public $invoice;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Invoice  $order
     * @return void
     */
    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Exchange BTC',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email-template.exchange',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
