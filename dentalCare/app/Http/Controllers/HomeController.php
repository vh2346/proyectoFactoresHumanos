<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->tipo_usuario=='0')
            {   
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }

        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else{

        
        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
    }
    }
    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->nombre=$request->nombre;
        $data->apellido=$request->apellido;
        $data->identificacion=$request->identificacion;
        $data->email=$request->email;
        $data->fecha=$request->fecha;
        $data->doctor=$request->doctor;
        $data->especialidad=$request->especialidad;
        $data->horario=$request->horario;
        $data->telefono=$request->telefono;
        $data->mensaje=$request->mensaje;
        $data->estado='En curso';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }
        if (appointment::where('horario', $request->horario)->exists()) {
            return redirect()->back()->with('message','Horario no disponible');
        }

       

        $data->save();

        return redirect()->back()->with('message','Cita agendada exitosamente. Nos contactaremos contigo muy pronto');
        
    }
    public function myappointment()
    {
        if(Auth::id())

        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->get();
            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
        
    }
    public function cancel_appoint($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function myprofile()
    {
        if(Auth::id())

        {
            $id=Auth::user()->id;
            $user=user::where('id',$id)->get();
            return view('user.my_profile',compact('user'));
        }
        else
        {
            return redirect()->back();
        }
        
    }
   
    public function update_profile($id)
    {
        $data=user::find($id);
        return view('user.update_user',compact('data'));
    }

    public function edit_profile(Request $request , $id)
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
