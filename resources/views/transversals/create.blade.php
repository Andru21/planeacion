@extends('layouts.app')

@section('title', 'Trasversals Create')

@section('content')

@include('common.success')

@include('common.delete')

@include('common.update')

<h2 align="center" style="margin-top: 20px">Creación de Trasnversales CGTS</h2>

<form class="form-group" method="POST" action="/transversals">
@csrf
	
	@include('forms.transversals')
	<div class="row justify-content-center" style="margin-top: 20px">
		<div class="col-1">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
		<div class="col-1">
			<a href="{{url('transversals')}}"><button type="button" class="btn btn-dark">Cancelar</button></a>
		</div>
	</div>
</form>

@endsection 