<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TwilioService;

class NotificationController extends Controller
{
    // protected $twilioService;

    // public function __construct(TwilioService $twilioService)
    // {
    //     $this->twilioService = $twilioService;
    // }

    // public function sendSms(Request $request)
    // {
    //     $request->validate([
    //         'phone' => 'required',
    //         'message' => 'required',
    //     ]);

    //     $to = $request->input('phone');
    //     $message = $request->input('message');

    //     try {
    //         $this->twilioService->sendSms($to, $message);
    //         return response()->json(['success' => 'SMS sent successfully.']);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => 'Failed to send SMS.'], 500);
    //     }
    // }
    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}
