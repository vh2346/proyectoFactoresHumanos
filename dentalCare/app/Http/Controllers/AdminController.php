<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{   

   
    //
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->file;

    $imagename = time().'.'.$image->getClientoriginalExtension();

    $request->file->move('doctorimage',$imagename);
    $doctor->image=$imagename;

    $doctor->nombre=$request->nombre;
    $doctor->apellido=$request->apellido;
    $doctor->identificacion=$request->identificacion;
    $doctor->email=$request->email;
    $doctor->telefono=$request->telefono;
    $doctor->especialidad=$request->especialidad;
    $doctor->horario=$request->horario;


    $doctor->save();

    return redirect()->back()->with('message','Doctor añadido exitosamente');

    
    }
    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }
    public function approved($id)
    {
        $data = appointment::find($id);
        $data->estado='Aceptada';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->estado='Cancelada';
        $data->save();
        return redirect()->back();
    }
    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
    }

    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatedoctor($id)
    {
        $data=doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }
    public function editdoctor(Request $request , $id)
    {
        $doctor=doctor::find($id);
        $doctor->nombre=$request->nombre;
        $doctor->apellido=$request->apellido;
        $doctor->identificacion=$request->identificacion;
        $doctor->email=$request->email;
        $doctor->telefono=$request->telefono;
        $doctor->especialidad=$request->especialidad;
        $doctor->horario=$request->horario;

        $image = $request->file;

        if($image)
        {

        
    $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        }
        $doctor->save();

        return redirect()->back()->with('message','Datos del doctor actualizados');
    }

    public function add_user_view()
    {
        return view('admin.add_user');
    }

    public function upload_user(Request $request)
    {
        $user = new user;
      
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->identificacion=$request->identificacion;
        $user->edad=$request->edad;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->telefono=$request->telefono;
        $user->direccion=$request->direccion;


    $user->save();

    return redirect()->back()->with('message','Usuario añadido exitosamente');

    
    }
    public function showuser()
    {
        $data = user::all();
        return view('admin.showuser',compact('data'));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateuser($id)
    {
        $data=user::find($id);
        return view('admin.update_user',compact('data'));
    }
    public function edituser(Request $request , $id)
    {
        $user=user::find($id);
        $user->nombre=$request->nombre;
        $user->apellido=$request->apellido;
        $user->identificacion=$request->identificacion;
        $user->edad=$request->edad;
        $user->email=$request->email;
        $user->telefono=$request->telefono;
        $user->direccion=$request->direccion;
       

       
        $user->save();

        return redirect()->back()->with('message','Datos del usuario actualizados');
    }
   
}
