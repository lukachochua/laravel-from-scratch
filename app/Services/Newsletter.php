<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email)
    {
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us12'
        ]);

        return $mailchimp->lists->AddListMember('e57712d324', [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}