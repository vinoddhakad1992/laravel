<?php
namespace App\Library;

class DateFormat {

   /**
     * Show the edit list
     *
     * @return Date Format
     * @param Date
     * 
    */

  	public static function dateTimeFormat ($date) 
    {
        return date("y-m-d h:i:s",strtotime($date));
  		
    }

    /**
     * Show the edit list
     *
     * @return Date Format
     * @param Date
     * 
    */

      public static function dateFormat ($date) 
    {
        return date("y-m-d",strtotime($date));
      
    }


}