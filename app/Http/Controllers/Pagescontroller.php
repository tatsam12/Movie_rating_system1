<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\image;

class PagesController extends Controller
{
    public function home() {

  Mail::to('sushant.nepal@sifal.deerwalk.edu.np')
            ->send(new ContactMail('Sushant'));

        $data = [
            'name'=>'Tatsam',
            'age'=>18
        ];
        return view('welcome')->with($data);
    }

    public function index() {
        return view(('index'));
    }

    public function profile(){
        $data1=[
            'username'=>'Tatsam'
        ];
        return view('profile')->with($data1);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student= new Student();
        $student->name =$request->name;
        $student->address =$request->address;
        $student->age =$request->age;
        $student->dob =$request->dob;

        $filenameWithExt = $request->file('image')->getClientOriginalName(); //Image ko name taneko like .png, .jpg etc.
        $img = Image::make($request->file('image'));  //Image load gareko
        $img->save('storage/image/'.$filenameWithExt);
        $student->image = $filenameWithExt;
        $student->save();
        return redirect('/list');

    }
    public function list(){
        $students=Student::orderby('name','asc')->get();
        return view('list')->with('students',$students);
    }
    public function edit($id) {
        $student = Student::where('id',$id)->first();
        return view('update')->with('student',$student);
//        $student = Student::find($id);
    }

    public function update(Request $request) {
        $student = Student::where('id',$request->id)->first();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->age = $request->age;
        $student->save();
        return redirect('/list');
    }
public function delete($id){

        $student =Student::where("id",$id)->first();


    if (File::exists ('storage/image/'. $student->image)){
        File::delete('storage/image/'. $student->image);
    }
         $student->delete();
        return redirect('/list');

}
    public function login() {
        return view(('login'));
    }

    public function register() {
        return view(('register'));
    }

    public function stored (Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }}

