<?php

namespace App\Jobs;

use App\Mail\OrderEmail;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailOrder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try
        {
            Mail::to($this->order->email)->send(new OrderEmail($this->order->name, $this->order->mobile, $this->order->code_tag));
            $order = Order::where('id', $this->order->id)->first();
            if($order) {
                $order->send_order_email = 1;
                $order->save();
            }
        }
        catch (\Exception $e)
        {
            Log::error('Job SendEmail failed: '. $e->getMessage());
        }
    }
}
