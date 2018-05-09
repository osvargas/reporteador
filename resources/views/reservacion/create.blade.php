@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		{!!Form::open(array('url'=>'reservaciones','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<label for="servicio">Servicio</label>
				<select name="servicio" class="form-control" id="servicio">
					<option value="" disabled selected> -- Tipo de servicio -- </option>
					<option id="llegada" value="llegada">Llegada</option>
					<option id="salida" value="salida">Salida</option>
					<option id="redondo" value="redondo">Redondo</option>
				</select>
			</div>
		</div>

		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<div class="form-group">
				<label for="hotel">Hotel</label>
				<input type="text" name="hotel" class="form-control" placeholder="Hotel">
			</div>
			<div class="form-group">
				<label for="nombre">Nombre del cliente</label>
				<input type="text" name="nombre" class="form-control" placeholder="Nombre del cliente">
			</div>
			<div class="form-group">
				<label for="telefono">Teléfono del Cliente</label>
				<input type="text" name="telefono" class="form-control" placeholder="Teléfono del cliente">
			</div>
			<div class="form-group">
				<label for="adultos">Adultos</label>
				<input type="number" name="adultos" class="form-control" placeholder="Número de adultos">
			</div>
			<div class="form-group">
				<label for="niños">Niños</label>
				<input type="number" name="niños" class="form-control" placeholder="Número de niños">
			</div>

		</div>
	<div id="principal">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="llegada">
			
			<div class="form-group">
				<label for="fecha_llegada">Fecha de llegada</label>
				<input type="text" name="fecha_llegada" class="form-control" placeholder="Fecha de llegada">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="salida">
			<div class="form-group">
				<label for="fecha_salida">Fecha de salida</label>
				<input type="text" name="fecha_salida" class="form-control" placeholder="Fecha de salida"> 
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="redondo">
			
			<div class="form-group">
				<label for="fecha_llegada">Fecha de llegada</label>
				<input type="text" name="fecha_llegada" class="form-control" placeholder="Fecha de llegada">
			</div>
			<div class="form-group">
				<label for="fecha_salida">Fecha de salida</label>
				<input type="text" name="fecha_salida" class="form-control" placeholder="Fecha de salida"> 
			</div>
		</div>
	</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}
		</div>
</div>
@endsection