<?php

namespace App\Repositories\contact;

use App\Models\Contact;
use App\User;
use DB;

use App\Repositories\Interfaces\ContactRepositoryInterface;

class ContactRepository implements ContactRepositoryInterface
{
	 /**
     * Show the edit list
     *
     * @return all data
     * @param id,
     * 
     */

    public function all()
    {
        return Contact::get();
    }

     /**
     * Show the edit list
     *
     * @return Last inserted id
     * @param data array,
     * 
     */
    public function insert($data)
    {
        $data["created_at"] = date("Y-m-d H:i:s");
        return Contact::insertGetId($data);
    }

    /**
     * Show the edit list
     *
     * @return update the record return null
     * @param $data array and $where condition array,
     * 
     */
    public function updateData($data, $id)
    {
    	$newId	=	(int)$id;
         Contact::where("id", $newId)
         			->update($data);
    }
    /**
     * Show the edit list
     *
     * @return date for array
     * @param $id for contact table id
     * 
     */
    public function getById($id)
    {
    	
        return Contact::where("id",$id)
        				->first();
    }

     /**
     * Show the edit list
     *
     * @return date for array
     * @param $id for contact table id
     * 
     */

    public function getDataByWhere($where)
    {
    	return Contact::where($where)
        				->get();
    }

    
}