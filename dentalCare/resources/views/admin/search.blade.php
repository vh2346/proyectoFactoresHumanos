@extends('layouts.master')

@section('content')
<table>
                <tr style="background-color:#1453A6;" align="center">
                    <th style="padding:7px; font-size:13px; color:white;">Nombre Paciente</th>
                    <th style="padding:7px; font-size:13px; color:white;">Apellido Paciente</th>
                    <th style="padding:7px; font-size:13px; color:white;">Identificacion</th>
                    <th style="padding:7px; font-size:13px; color:white;">Email</th>
                    <th style="padding:7px; font-size:13px; color:white;">Fecha </th>
                    <th style="padding:7px; font-size:13px; color:white;">Doctor</th>
                    <th style="padding:7px; font-size:13px; color:white;">Especialidad</th>
                    <th style="padding:7px; font-size:13px; color:white;">Horario</th>
                    <th style="padding:7px; font-size:13px; color:white;">Teléfono</th>
                    <th style="padding:7px; font-size:13px; color:white;">Mensaje</th>
                    <th style="padding:7px; font-size:13px; color:white;">Estado</th>
                    <th style="padding:7px; font-size:13px; color:white;">Aceptar</th>
                    <th style="padding:7px; font-size:13px; color:white;">Cancelar</th>

                    

                </tr>   
                @foreach($data as $appoint)
                  <tr style="background-color:#BFD1D9;">
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->nombre}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->apellido}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->identificacion}}</td>
                    <td style="padding:7px; font-size:12px;  color:black;">{{$appoint->email}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->fecha}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->doctor}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->especialidad}}</td>
                    
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->horario}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->telefono}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->mensaje}}</td>
                    <td style="padding:7px; font-size:12px; color:black;">{{$appoint->estado}}</td>
                    <td>
                      <a class="btn btn-success btn-sm" href="{{url('approved',$appoint->id)}}">Aceptar</a>  
                    </td>  
                    <td>
                      <a class="btn btn-danger btn-sm" href="{{url('canceled',$appoint->id)}}">Cancelar</a>
                    </td>
                   
                    
                 </tr>
                @endforeach 
            </table>    



@endsection