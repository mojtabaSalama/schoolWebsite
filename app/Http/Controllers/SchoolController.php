<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\teacher;
use App\Models\Student;
use Collective\Html\FormFacade as Form;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    public function index () {
$content= HomePage::all()->first();
$teachers= teacher::all();
return view('content.home')->with(array("content" => $content, "teachers" => $teachers));

    }
  public function about () {

    $content= HomePage::all()->first();

    return view('about.about')->with('content',$content);


  } 

  public function teachers () {
    $content= HomePage::all()->first();
    $teachers= teacher::all();
    return view('teachers.teachersview')->with(array("content" => $content, "teachers" => $teachers));
    
        }
        public function sign () {

          $content= HomePage::all()->first();
      
          return view('forms.sign')->with('content',$content);
      
      
        } 

        public function signsubmit (Request $request ) {

          $this->validate($request,[

            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required',
           'ID_card'=>'required|max:1999' ,
           'additional'=>'nullable',
            
            ]);
            
         
            //ID upload
            $filenamewithext=$request->file('ID_card')->getClientOriginalName();
$filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
$extention=$request->file('ID_card')->getClientOriginalExtension();
$filenametostore=$filename.'_'.time().'.'.$extention;
$path=$request->file('ID_card')->storeAs('public/studentID',$filenametostore);


$name=$request-> input ('firstname').' '.$request-> lastname;          
      $student= Student::create([
      'name'=> $name,
      'address'=>$request->input('address'),
      'email'=>$request->input('email'),
      'phone'=>$request->input('phone'),
      'additional'=>$request->input('additional'), 

    
      'ID_card'=>$filenametostore,
      ]);
      $student->save();
    
      return redirect('/')->with('success','student been add');


        }

}
