<div class="row justify-content-center">
	<div class="col-4">
		<div class="form-group">
		   <label for="competition_id">Competencia</label>
			<select class="form-control" name="competition_id">
				<option>SELECCIONAR...</option>
				@foreach ($compe as $com)
                <option value="{{$com->id}}">{{$com->name}}</option>
			  	@endforeach
			</select>
		 </div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-4">
		<div class="form-group">
			<label style="margin-top: 20px" for="">Nombre del Resultado:</label>
			<textarea name="name" class="form-control" rows="4"></textarea>
		</div>
	</div>
</div>
