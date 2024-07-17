<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blogs;
class AdminController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        //$logins=DB::table('logins')->paginate(2);
       $blogs=blogs::paginate(2);
      
        return view('insertdata',compact('blogs'));
   
    }
    
  

    function insert(Request $request){
        $request->validate([
            'username'=>'required|max:50',
            'content'=>'required'
        ]);

        $data = ([
            'username'=>$request->username,
            'content'=>$request->content
        ]);

        blogs::Insert($data);
        return redirect('/author/insertdata');
    }

    function Delete($id){
        blogs::find($id)->delete();
        return redirect('/author/insertdata');
    }

    function Update(Request $request,$id){
        $request->validate([
            'username'=>'required|max:50',
            'content'=>'required'
        ]);

        $data = ([

            'username'=>$request->username,
            'content'=>$request->content
        ]);

        blogs::find($id)->update($data);
        return redirect('/author/insertdata');
       
    }

    function edit($id){
        $logins=blogs::find($id);
        return view('edit',compact('logins'));
    }
}
