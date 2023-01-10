<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class SendSMSAfter24Hours implements ShouldQueue
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

        $body = "We do not want to bother you, just following up about your Window Installation & Repair interest. We can help get your window installed or fixed within a day with our 20 years experienced professional team. If you call today, you might be able to get 2 Year Warranty with 35% Discount. Call us +18887212062";

        $client = new Client($twilio_sid, $twilio_token);
        $client->messages->create(
            $this->number,
            [
                "from" => "+14696198904",
                "body" => $this->content
            ]
        );
    }
}
