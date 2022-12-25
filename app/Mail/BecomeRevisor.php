<?php

namespace App\Mail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Contracts\Mail\Mailable;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->from('fast.revisor@noreplay.es')->view('mail.become-revisor');
    }
    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(subject: 'Become Revisor');
    }

    /* *
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    /*public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }*/

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
