<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Twilio\Rest\Client;

class SendSMSAfter26Hours implements ShouldQueue
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

        $body = "Hey there! It’s our final follow-up from our end. Are you dissatisfied with the appearance of your house? Is your window plain and boring, out-of-date or deteriorating? Think twice before Winter. We are always here to assist you. Call us +18887212062 without any hesitation.";

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
