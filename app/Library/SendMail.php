<?php
namespace App\Library;

use DB;

use App\User;

use Mail;

class SendMail {

   /**
     * Show the edit list
     *
     * @return \Illuminate\Http\Response
     * @param subject, Body, Email
     * 
    */

  	public static function sendMailTemplete($subject, $body, $email, $templet, $attachment = "") 
    {

         Mail::send($templet, $body, function ($message) use ($email, $subject, $attachment)
         {
              $message->subject($subject);
              $message->from('info@smartassetmanagers.com', 'Questglt : '.$subject);
              $message->to($email);

              if ($attachment) {
                  $message->attachData($attachment);
              }
                          
          });
  		
    }

}