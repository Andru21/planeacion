@extends('layouts.app')

@section('title', 'Transversal Programming')

@section('content')

@include('common.success')

@include('common.delete')

@include('common.update')

<h2 align="center" style="margin-top: 20px; margin-bottom: 20px">Programación Transversal CGTS</h2>
<div class="row justify-content-center">
	<table class="table table-responsive table-hover table-condensed table-bordered" id="tabla">
	    <thead>
            <th>Programa</th>
            <th>Transversal</th>
            <th>Horas Pedientes</th>
            <th>Horas a Programar</th>
            <th>Acciones</th>
	    </thead>
	    <tbody>
		    @foreach ($program_transversal as $prog)
		        <tr>
		            <th> {{$prog->program->name}}</th>
		            <td> {{$prog->transversal->name}}</td>
		            <td> {{$prog->hours_pending}} </td>
		            <td> {{$prog->hours_program}} </td>
		            <td>
					    <form action="{{action('ProgramTransversalController@destroy', $prog['id'])}}" method="post">
			                @csrf
			                <input name="_method" type="hidden" value="DELETE">
			                <button class="btn btn-danger btn-sm" type="submit"><img src="img/delete.png" style="width: 15px" alt=""></button>
			                <a href="{{action('ProgramTransversalController@edit', $prog['id'])}}" class="btn btn-warning btn-sm"><img src="img/edit.png" style="width: 15px" alt=""></a>
					    </form>
				    </td>
		        </tr>
		    @endforeach
		</tbody>
	</table>
</div>


<div class="row justify-content-center" style="margin-top: 20px"> 
	<div class="col-1">
		<a href="{{ url('program_transversals/create')}}"><button type="button" class="btn btn-primary">Programar</button></a>	
	</div>
	<div class="col-1">
		<a href="{{url('/')}}"><button type="button" class="btn btn-dark">Inicio</button></a>
	</div>
</div>
@endsection 