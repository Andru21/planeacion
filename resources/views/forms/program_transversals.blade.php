<div class="row justify-content-center">
	<div class="col-4">
		<div class="form-group">
		   <label for="program_id">Programa:</label>
			<select class="form-control" name="program_id">
				<option>SELECCIONAR...</option>
				@foreach ($program as $pro)
                <option value="{{$pro->id}}">{{$pro->name}}</option>
			  	@endforeach
			</select>
		 </div>
	</div>
</div>
<div class="row justify-content-center">	
	<div class="col-4">
		<div class="form-group">
		   <label for="transversal_id">Transversal:</label>
			<select class="form-control" name="transversal_id">
				<option>SELECCIONAR...</option>
				@foreach ($transversal as $trans)
                <option value="{{$trans->id}}">{{$trans->name}}</option>
			  	@endforeach
			</select>
		</div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-2">
		<div class="form-group">
			<label for="hours_pending">Horas Pendientes:</label>
			<input type="number" class="form-control" name="hours_pending">
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			<label for="hours_program">Horas a Programar:</label>
			<input type="number" class="form-control" name="hours_program">
		</div>
	</div>
</div>
