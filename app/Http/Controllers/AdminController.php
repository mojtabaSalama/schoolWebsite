<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HomePage;
use App\Models\teacher;
use App\Models\Student;
use App\Models\User;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin ()
    {
            $teachers= teacher::all();
            $students=Student::all();
            $admins=User::all();
            return view('admin.main')-> with(array("students" => $students, "teachers" => $teachers,"admins"=>$admins));

    }
    public function allstudents ()
     {

        $students=DB::table('students')->where('accepted', null)->get();
        return view('students.allstudents')->with("students" , $students);
        
    }

    public function acceptedstudents ()
     {

        $students=DB::table('students')->where('accepted', 1)->get();
      
        return view('students.acceptedstudents')->with("students" , $students);
        
    }
    public function student ($id) 
    {

                $student=Student::find($id);
                return view('students.showstudent')->with("student" , $student);
                
    }
 
 
     public function allteachers ()
    {

                        $teachers=teacher::all();
                        return view('teachers.adminteachers.allteachers')->with("teachers" , $teachers);
                        
     }


    public function teacher ($id) 
    {

                                $teacher=teacher::find($id);
                                return view('teachers.adminteachers.showteacher')->with("teacher" , $teacher);
                                
    }
                            
                
    public function alladmins ()
     {

                                        $admins=User::all();
                                        return view('admins.alladmins')->with("admins" , $admins);
                                        
    }
                
                
    public function adminview ($id) 
    {
                
                                                $admin=User::find($id);
                                                return view('admins.showadmin')->with("admin" , $admin);
                                                
    }
    public function editadmin($id)
    {
                                                        $admin =User::find($id);
                                                        
                                                    
                                                        return view('admins.editadmin')->with('admin',$admin);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request,[

            'name'=>'required',
            'profilepic'=>'image|nullable|max:1999',
            'password' => 'required|string|min:8|confirmed',
            'oldpassword' => 'required|string|min:8',
            ]);


               
                
            $admin=User::find($id) ;
            if ($admin->pasword == request('oldpasword'))
             {
            $admin->name = $request->input('name');
        
            $admin->password = Hash::make($request->input('password'));
            $admin->save();
            return redirect('/admin/admins')->with('success','admin edited');
             }
    else{
        return redirect()->back()->with('error','wrong pasword');
    }
}
public function accept($id)
    {
 
               
                
            $student=student::find($id) ;
            
            $student->accepted = true;
            $student->save();
            return redirect('/admin/student')->with('success','student accepted');
        
        }
        public function decline($id)
        {
     
                   
                    
                $student=student::find($id) ;
                
               
                $student->delete();
                return redirect('/admin/student')->with('success','student declined');
            
            }
            public function deleteteacher($id)
            {
         
                       
                        
                    $teacher=teacher::find($id) ;
                    
                   
                    $teacher->delete();
                    return redirect('/admin/teacher')->with('success','teacher deleted');
                
        
            }
            public function editteacher($id)
    {
                                                        $teacher =teacher::find($id);
                                                        
                                                    
                                                        return view('teachers.adminteachers.editteacher')->with('teacher',$teacher);
    }
    public function addteacher()
    {
                                                    
     return view('teachers.adminteachers.addteacher');
    }
    public function storeteacher(Request $request)
    {
        $this->validate($request,[

            'name'=>'required',
            'subjict'=>'required',
           'pic'=>'image|max:1999' ,
            
            ]);


            
                $filenamewithext=$request->file('pic')->getClientOriginalName();
                $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
                $extention=$request->file('pic')->getClientOriginalExtension();
                $filenametostore=$filename.'_'.time().'.'.$extention;
                $path=$request->file('pic')->storeAs('public/home/teachers',$filenametostore);
               
                
            $teacher = new teachers;
            $teacher->name = $request->input('name');
            $teacher->subject = $request->input('subject');
            $teacher->pic = $filenametostore;
            
            $teacher->save();
            
            
            return redirect('/admin/teacher')->with('success','teacher added successfully');
            
    }
    
    
public function updateteacher(Request $request, $id)
            {
                $this->validate($request,[
        
                    'firstname'=>'required',
                    'secondname'=>'required',
                    'subjict'=>'required',
                   'pic'=>'image|required|max:1999' 
                    
                    ]);
        
        
                    if($request->hasFile('pic')){
                        $filenamewithext=$request->file('pic')->getClientOriginalName();
                        $filename= pathinfo($filenamewithext,PATHINFO_FILENAME);
                        $extention=$request->file('pic')->getClientOriginalExtension();
                        $filenametostore=$filename.'_'.time().'.'.$extention;
                        $path=$request->file('pic')->storeAs('public/home/teachers',$filenametostore);
                        }
                       
                        
                    $teacher= teacher::find($id);
                    $teacher->firstname = $request->input('firstname');
                    $teacher->secondname = $request->input('secondname');
                    $teacher->subject = $request->input('subject');
                    
                    $post->image=$filenametostore;
                    
                    $teacher->save();
                    
                    
                    return redirect()->back()->with('success','teacher edited');
                    
            }
        }
        