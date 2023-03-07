<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendmail(Request $request)
    {
        $data["email"] = "shadychiri@gmail.com";
        $data["title"] = "Admission Documents";
        $data["body"] = "Hello, This is test mail with admission pdf attachment";
 
        $files = [
            public_path('ktvc_blank.pdf'),
          //  public_path('attachments/test_pdf.pdf'),
        ];
  
        Mail::send('mail.mail', $data, function($message)use($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });

        echo "Mail send successfully !!";
    }

}
