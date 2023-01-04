<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class SendSMSAfter2Hours implements ShouldQueue
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

        $body = "We think you haven't noticed our previous offer yet. Don't worry, the offer is still available. There are more opportunities this time for you and your family to receive a 30% discount on ACA health insurance. Call Now: +18883470772 and secure your discounted ACA plan today! ";

        $client = new Client($twilio_sid, $twilio_token);
        $client->messages->create(
            $this->number,
            [
                "from" => "+13085299517",
                "body" => $body
            ]
        );
    }
}
