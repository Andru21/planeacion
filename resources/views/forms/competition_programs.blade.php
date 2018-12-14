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
		   <label for="competition_id">Competencia:</label>
			<select class="form-control" name="competition_id">
				<option>SELECCIONAR...</option>
				@foreach ($competition as $compe)
                <option value="{{$compe->id}}">{{$compe->name}}</option>
			  	@endforeach
			</select>
		</div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-2">
		<div class="form-group">
			<label for="hours_curricular_design">Horas Diseño Curricular:</label>
			<input type="number" class="form-control" name="hours_curricular_design">
		</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			<label for="hours_program_2018">Horas Programadas 2018:</label>
			<input type="number" class="form-control" name="hours_program_2018">
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
			<label for="hours_program_2019">Horas a Programar 2019:</label>
			<input type="number" class="form-control" name="hours_program_2019">
		</div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-2">
		<div class="form-group">
			<label for="hours_balance">Saldo de Horas:</label>
			<input type="number" class="form-control" name="hours_balance">
		</div>
	</div>	
</div>
<div class="row justify-content-center">	
	<div class="col-4">
		<div class="form-group">
			<label for="instructor_profile">Perfil del Instructor:</label>
			<textarea name="instructor_profile" class="form-control" rows="4"></textarea>
		</div>
	</div>
</div>
