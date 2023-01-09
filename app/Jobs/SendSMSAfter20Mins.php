<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class SendSMSAfter20Mins implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $number, $content;

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

        // $sms = "Hi, Congratulations! As an apology for the dropped call, We are currently offering you a limited time 20% discount on the Window Installation & Repair Service, just for you! Please reach us again at +18887212062. Think twice before ignoring our exclusive offer, Winter is Coming!";

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
