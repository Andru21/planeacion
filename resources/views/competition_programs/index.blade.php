@extends('layouts.app')

@section('title', 'Competition Programming')

@section('content')

@include('common.success')

@include('common.delete')

@include('common.update')

<h2 align="center" style="margin-top: 20px; margin-bottom: 20px">Programación Técnica CGTS</h2>
<div class="row justify-content-center">
	<table class="table table-responsive table-hover table-condensed table-bordered" id="tabla">
	    <thead>
            <th>Programa</th>
            <th>Competencia</th>
            <th>Horas Diseño Curricular</th>
            <th>Horas Programadas 2018</th>
            <th>Horas Pendientes</th>
            <th>Horas Programadas 2019</th>
            <th>Saldo de Horas</th>
            <th>Perfil del Instructor</th>
            <th>Acciones</th>
	    </thead>
	    <tbody>
		    @foreach ($competition_program as $prog)
		        <tr>
		            <th> {{$prog->program->name}}</th>
		            <td> {{$prog->competition->name}}</td>
		            <td> {{$prog->hours_curricular_design}} </td>
		            <td> {{$prog->hours_program_2018}} </td>
		            <td> {{$prog->hours_pending}} </td>
		            <td> {{$prog->hours_program_2019}} </td>
		            <td> {{$prog->hours_balance}} </td>
		            <td> {{$prog->instructor_profile}} </td>
		            <td>
					    <form action="{{action('CompetitionProgramController@destroy', $prog['id'])}}" method="post">
			                @csrf
			                <input name="_method" type="hidden" value="DELETE">
			                <button class="btn btn-danger btn-sm" type="submit"><img src="img/delete.png" style="width: 15px" alt=""></button>
			                <a href="{{action('CompetitionProgramController@edit', $prog['id'])}}" class="btn btn-warning btn-sm"><img src="img/edit.png" style="width: 15px" alt=""></a>
					    </form>
				    </td>
		        </tr>
		    @endforeach
		</tbody>
	</table>
</div>


<div class="row justify-content-center" style="margin-top: 20px"> 
	<div class="col-1">
		<a href="{{ url('competition_programs/create')}}"><button type="button" class="btn btn-primary">Programar</button></a>	
	</div>
	<div class="col-1">
		<a href="{{url('/')}}"><button type="button" class="btn btn-dark">Inicio</button></a>
	</div>
</div>
@endsection 