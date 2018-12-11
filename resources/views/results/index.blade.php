@extends('layouts.app')

@section('title', 'Results')

@section('content')

@include('common.success')

@include('common.delete')

@include('common.update')

<h2 align="center" style="margin-top: 20px; margin-bottom: 20px">Resultados de Aprendizaje CGTS</h2>
<div class="row justify-content-center">
	<table class="table table-responsive table-hover table-condensed table-bordered" id="tabla">
	    <thead>
            <th>Nombre</th>
            <th>Competencia</th>
            <th>Acciones</th>
	    </thead>
	    <tbody>
		    @foreach ($result as $res)
		        <tr>
		            <th> {{$res->name}}</th>
		            <td> {{$res->competition->name}}</td>
		            <td>
					    <form action="{{action('ResultController@destroy', $res['id'])}}" method="post">
			                @csrf
			                <input name="_method" type="hidden" value="DELETE">
			                <button class="btn btn-danger btn-sm" type="submit"><img src="img/delete.png" style="width: 15px" alt=""></button>
			                <a href="{{action('ResultController@edit', $res['id'])}}" class="btn btn-warning btn-sm"><img src="img/edit.png" style="width: 15px" alt=""></a>
					    </form>
				    </td>
		        </tr>
		    @endforeach
		</tbody>
	</table>
</div>


<div class="row justify-content-center" style="margin-top: 20px"> 
	<div class="col-1">
		<a href="{{ url('results/create')}}"><button type="button" class="btn btn-primary">Crear Resultados</button></a>	
	</div>
	<div class="col-1">
		<a href="{{url('/')}}"><button type="button" class="btn btn-dark">Inicio</button></a>
	</div>
</div>
@endsection 