<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Datatables;
Use DB;

use App\Models\Contact;

use App\Repositories\contact\ContactRepository;


use App\Library\SendMail;

use App\Library\ImageUpload;

use App\Library\DateFormat;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        return view('contact/contact');
    }

    /**
     * Show the form for creating a new conatct.
     *
     * @return redirect to back after submit
     */
    public function contact(Request $request)
    
    {
        $imageName = ImageUpload:: uploadFile($request->file('image'),'/uploads');

        $data = array(
                        "name"  =>  $request->name,
                        "email" =>  $request->email,
                        "image" =>  $imageName,
                        );

        $this->contactRepository->insert($data);
        return redirect()->route('Clist');
    }


    /**
     * Show the contact list
     *
     * @return \Illuminate\Http\Response
     */

    public function list()
    
    {
       return view('contact/contactList');
    } 

     /**
     * Show the contact list using yajra package
     *
     * @return \Illuminate\Http\Response
     */

    public function ajaxList()
    
    {
        
        $data = $this->contactRepository->all()
                            ->map(function ($value) {
                                $value->image       = ImageUpload:: imagePath()."/uploads/".$value->image;
                                $value->created_at  = DateFormat::dateTimeFormat("2020-02-19");
                                $value->test  = "test";
                                return $value;
                            });

        return Datatables::of($data)
                            ->addColumn('action', function($data){
                                $button = '<a href="'.route('contactEdit',$data->id).'" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</a>';
                                $button .= '&nbsp;&nbsp;';
                           
                                return $button;
                            })
                    ->rawColumns(['action'])
                    ->make(true);
    }

     /**
     * Show the edit list
     *
     * @return \Illuminate\Http\Response
     * @param id,
     * 
     */
     public function edit($id) 
     
     {
            $data["id"]         = $id;
            $data["record"]     = $this->contactRepository->getById($id);

            return view('contact/contactEdit', $data);
     }

    /**
     * Show the edit list
     *
     * @return \Illuminate\Http\Response
     * @param id,
     * 
     */

     public function editStore(Request $request)
    
    {
        
        $data = array(
                        "name"  =>   $request->name,
                        "email" =>  $request->email,
                        );
        $where = ["id" => (int)$request->id];
        $this->contactRepository->updateData($data, $where);
        
        return redirect()->route('Clist');

     }

     /**
     * Show the edit list
     *
     * @return \Illuminate\Http\Response
     * @param id,
     * 
     */

     public function getDataWhere() 

     {
         $where = ["id"=>1];
         
         $record = $this->contactRepository->getDataByWhere($where);
         
         dd($record);
     }

    /**
     * Show the edit list
     *
     * @return \Illuminate\Http\Response
     * 
     */
     public function sendmail() 

     {
        
        SendMail::sendMailTemplete("test", ["name" => "vinod","body" => "Hi team" ], "vinoddhakad@questglt.com", 'emails.comman_library');
     }
}
