<?php

namespace App\Mail;

use Illuminate\Support\Facades\DB;
use App\Model\personal_info;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailReviewRatingAnnual extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($personal_info)
    {
        $this->personal_info = $personal_info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = 'Department Manager';
        $address = 'department_managers@ihrdc.com';
        $subject = 'Annual Rating From Supervisor';
        return $this->view('email.review_rating_annual')->from($address, $name)->subject($subject);
    }
}
