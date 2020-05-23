<?php
namespace App\Library;
use DB;
use App\User;
use Mail;
use PDF;

class PdfLibrary {

   /**
     * Show the edit list
     *
     * @return \Illuminate\Http\Response
     * @param data, views
     * 
    */

  	public static function download ($views, $data) 
    {
        $data["data"] = $data;
         // Send data to the view using loadView function of PDF facade
          $pdf = PDF::loadView($views, $data);
        // If you want to store the generated pdf to the server then you can use the store function
          $pdf->save(storage_path().'_filename.pdf');
         // return $pdf;
  		
    }

}