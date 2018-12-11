@extends('layouts.app')

@section('title', 'Transversals')

@section('content')

@include('common.success')

@include('common.delete')

@include('common.update')

<h2 align="center" style="margin-top: 20px; margin-bottom: 20px">Transversales CGTS</h2>
<div class="row justify-content-center">
	<table class="table table-responsive table-hover table-condensed table-bordered" id="tabla">
	    <thead>
            <th>Nombre</th>
            <th>Horas Diseño Curricular: Tecnico</th>
            <th>Horas Diseño Curricular: Tecnologo</th>
            <th>Horas Diseño Curricular: Auxiliar</th>
            <th>Acciones</th>
	    </thead>
	    <tbody>
		    @foreach ($data as $trans)
		        <tr>
		            <th> {{$trans->name}}</th>
		            <td> {{$trans->technical_hours}}</td>
		            <td> {{$trans->technologist_hours}}</td>
		            <td> {{$trans->auxiliary_hours}}</td>
		            <td>
		            	<form action="{{action('TransversalController@destroy', $trans['id'])}}" method="post">
			                @csrf
			                <input name="_method" type="hidden" value="DELETE">
			                <button class="btn btn-danger btn-sm" type="submit"><img src="img/delete.png" style="width: 15px" alt=""></button>
		                	<a href="{{action('TransversalController@edit', $trans['id'])}}" class="btn btn-warning btn-sm"><img src="img/edit.png" style="width: 15px" alt=""></a>
					    </form>
			        </td>
		        </tr>
		    @endforeach
		</tbody>
	</table>
</div>

<div class="row justify-content-center" style="margin-top: 20px"> 
	<div class="col-1">
		<a href="{{ url('transversals/create')}}"><button type="button" class="btn btn-primary">Crear Transversal</button></a>
	</div>
	<div class="col-1">
		<a href="{{url('/')}}"><button type="button" class="btn btn-dark">Inicio</button></a>
	</div>
</div>
@endsection 