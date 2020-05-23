<?php
namespace App\Library;


class ImageUpload {

   /**
     * Show the edit list
     *
     * @return Upload image name
     * @param file, upload path
     * 
    */

  	public static function uploadFile($file, $path)
    {
       if ($file != '') {

           $image = $file; 
           $filename = $image->getClientOriginalName();
           $without_ext = substr($filename, 0, strrpos($filename, "."));
           $imagename = $without_ext.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = public_path($path);
           $image->move($destinationPath, $imagename);

       }  else  {
          $imagename = '';  
       } 
    
       return $imagename;
    }

    /**
     * Show the edit list
     *
     * @return public upload path
     * 
    */
    public static function imagePath()
    {
       return url('public');
    }
}