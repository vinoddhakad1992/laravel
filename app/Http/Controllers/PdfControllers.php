<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\User;
use App\Library\PdfLibrary;
use Mail;


class PdfControllers extends Controller
{
	/**
	* pds save and download
	*
	* @return \Illuminate\Http\Response
	*/

    public function index()
    {
        	// Fetch all customers from database
		    $data["data"] 	= User::limit(10)->get();
        	 // Send data to the view using loadView function of PDF facade
          	$pdf = PDF::loadView("pdf.pdf", $data);
        	// If you want to store the generated pdf to the server then you can use the store function
          	$pdf->save(storage_path().'_filename.pdf');
		    return $pdf->download('customers.pdf');
    }

    /**
    * pdf send to mail
    * @return 
    */
    public function  sendMail() {

    	// Fetch all customers from database
	    $data["data"] 	= User::limit(10)->get();
    	 // Send data to the view using loadView function of PDF facade
      	$pdf = PDF::loadView("pdf.pdf", $data);

       	$email = "vinoddhakaad@questglt.com";
        $subject = "Confidential Patient Questionnaire and Medical History Form";
        
        Mail::send('emails.comman_library', ["name" => "vinod","body" => "Hi team" ], function ($message) use ($email, $subject, $pdf) {
            $message->subject($subject);
            $message->from('info@smartassetmanagers.com', 'Smart Asset Managers : ' . $subject);
            $message->to("vinoddhakad@questglt.com");
            $message->attachData($pdf->output(), "forms.pdf");
        });

    }
}
