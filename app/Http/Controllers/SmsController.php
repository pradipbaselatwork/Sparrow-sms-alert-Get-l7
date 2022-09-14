<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SmsController extends Controller {
        public function compose()
        {
            return view('composer');
        }
    
        public function sendSMS(Request $request)
        {
            // dd($request);
            
            $message = 'Hello!'."\n\n".'You have a message.' . "\n\n". $request->message;
    
       
            $api_url = "http://api.sparrowsms.com/v2/sms/?".
            http_build_query(array(
                'token' => 'v2_sGMn3PGpFwf9nplgIIsT7z0mnrl.gbMF',
                'from'  => 'Demo',
                'to'    => '9803122192',
                'text'  => $message));
    
                $response = file_get_contents($api_url);
    
        }
    
        public function smsResponse()
        {
            return view('sms-response');
        }
    }
    

