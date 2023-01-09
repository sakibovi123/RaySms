<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class SendInstantSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $number;
    private $content;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $number, string $content)
    {
        $this->number = $number;
        $this->content = $content;
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

        // $body = "We apologize that your call was dropped. We have qualified you for an Energy-efficient, low-cost Window Installation & Repair Free Quote. Contact us at +18887212062 again within 1 minute to find out more about your 2023 Special New Year Discounts!";

        $client = new Client($twilio_sid, $twilio_token);
        $client->messages->create(
            $this->number,
            [
                "from" => "+14696198904",
                "body" => $this->content,
            ]
        );
    }
}
