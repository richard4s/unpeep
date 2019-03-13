<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName,
            $lastName,
            $telephone,
            $email,
            $venue,
            $adults,
            $time,
            $dates,
            $event,
            $notes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstName, $lastName, $telephone, $email, $venue, $adults, $time, $dates, $event, $notes)
    {
        //
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->venue = $venue;
        $this->adults = $adults;
        $this->time = $time;
        $this->dates = $dates;
        $this->event = $event;
        $this->notes = $notes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.appointmentmail')->subject('Booked Peeper Appointment!')->bcc('hello@unpeep.com');
    }
}
