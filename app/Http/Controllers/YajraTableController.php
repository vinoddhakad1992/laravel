<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use App\User;

class YajraTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         return view('yajratable');
    }

    public function ajaxList()
    {
        return Datatables::of(User::get())->make(true);
    }
}
