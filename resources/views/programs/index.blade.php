@extends('layouts.app')

@section('title', 'Programs')

@section('content')

@include('common.success')

@include('common.delete')

@include('common.update')

<h2 align="center" style="margin-top: 20px; margin-bottom: 20px">Programas Academicos CGTS</h2>
<div class="row justify-content-center">
	<table class="table table-responsive table-hover table-condensed table-bordered" id="tabla">
	    <thead>
            <th>Ficha</th>
            <th>Codigo</th>
            <th>Versión</th>
            <th>Nombre</th>
            <th>Nivel</th>
            <th>Modalidad</th>
            <th>Aprendices</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Empresa</th>
            <th>Instructor lider</th>
            <th>Horas Planta</th>
            <th>Horas Contratistas</th>
            <th>Horas Contratistas externos</th>
            <th>Total Horas</th>
            <th>Horas Diseño Curricular</th>
            <th>Acciones</th>
	    </thead>
	    <tbody>
		    @foreach ($program as $prog)
		        <tr>
		            <th> {{$prog->file_number}}</th>
		            <td> {{$prog->program_code}}</td>
		            <td> {{$prog->program_version}} </td>
		            <td> {{$prog->name}} </td>
		            <td> {{$prog->level}} </td>
		            <td> {{$prog->modality}} </td>
		            <td> {{$prog->number_apprentice}} </td>
		            <td> {{$prog->start_date}} </td>
		            <td> {{$prog->finish_date}} </td>
		            <td> {{$prog->company}} </td>
		            <td> {{$prog->lead_instructor}} </td>
		            <td> {{intval($prog->hours_plant)}}</td>
		            <td> {{intval($prog->hours_contractor)}} </td>
		            <td> {{intval($prog->hours_contractor_extern)}} </td>
		            <td> {{intval($prog->hours_total)}} </td>
		            <td> {{$prog->hours_curricular_design}} </td>
		            <td>
					    <form action="{{action('ProgramController@destroy', $prog['id'])}}" method="post">
			                @csrf
			                <input name="_method" type="hidden" value="DELETE">
			                <button class="btn btn-danger btn-sm" type="submit"><img src="img/delete.png" style="width: 15px" alt=""></button>
			                <a href="{{action('ProgramController@edit', $prog['id'])}}" class="btn btn-warning btn-sm"><img src="img/edit.png" style="width: 15px" alt=""></a>
					    </form>
				    </td>
		        </tr>
		    @endforeach
		</tbody>
	</table>
</div>


<div class="row justify-content-center" style="margin-top: 20px"> 
	<div class="col-1">
		<a href="{{ url('programs/create')}}"><button type="button" class="btn btn-primary">Crear Programa</button></a>	
	</div>
	<div class="col-1">
		<a href="{{url('/')}}"><button type="button" class="btn btn-dark">Inicio</button></a>
	</div>
</div>
@endsection 