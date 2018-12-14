@extends('layouts.app')

@section('title', 'Competition Programming Create')

@section('content')
<h2 align="center" style="margin-top: 20px">Programación Técnica CGTS</h2>

<form class="form-group" method="POST" action="/competition_programs">
@csrf
	
	@include('forms.competition_programs')
	
	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
		<div class="col-1">
			<a href="{{url('competition_programs')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>
@endsection 