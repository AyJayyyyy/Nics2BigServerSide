<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendsms(){
      $sid = getenv("TWILIO_SID");
      $token = getenv("TWILIO_TOKEN");
      $sendernumber = getenv("TWILIO_PHONE");

      $twilio = new Client($sid, $token);

      $message = $twilio->messages
                  ->create("+63 916 468 1183", // to
                           [
                               "body" => "This is the ship that made the Kessel Run in fourteen parsecs?",
                               "from" => $sendernumber
                           ]
                  );
                  dd("message send succesfuly");
    }
}
