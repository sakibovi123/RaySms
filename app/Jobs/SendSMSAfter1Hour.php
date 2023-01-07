<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class SendSMSAfter1Hour implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $number;
    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_token = getenv("TWILIO_TOKEN");

        $body = "Still not Happy with our 20% discount? We have reserved several special Window Installation & Repair opportunities just for you and your beautiful home - Free Quote, 25% Discount, Buy/Repair 1 Window Get 1 Offer! Grab the ultimate visual experience from today. Call Now: +18887212062 before the offer expires Today!";

        $client = new Client($twilio_sid, $twilio_token);
        $client->messages->create(
            $this->number,
            [
                "from" => "+14696198904",
                "body" => $body
            ]
        );

    }
}
