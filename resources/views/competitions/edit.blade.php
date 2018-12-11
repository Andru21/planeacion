
@extends('layouts.app')

@section('title', 'Competitions Edit')

@section('content')
<h2 align="center" style="margin-top: 20px">Edición de Competencias Academicas CGTS</h2>

<form class="form-group" method="POST" action="/competitions/{{$competition->id}}">
@method('PUT')
@csrf
	
	@include('forms.competitions')
	
	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-warning">Actualizar</button>
		</div>
		<div class="col-1">
			<a href="{{url('competitions')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>
@endsection 