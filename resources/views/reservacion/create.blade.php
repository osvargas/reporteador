@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva reservación</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'reservaciones','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="servicio">Servicio</label>
				<select name="servicio" class="form-control">
					<option id="llegada">Llegada</option>
					<option id="salida">Salida</option>
					<option id="redondo">Redondo</option>
				</select>
			</div>
			<div class="form-group">
				<label for="hotel">Hotel</label>
				<input type="text" name="hotel" class="form-control" placeholder="Hotel">
			</div>
			<div class="form-group">
				<label for="fecha_llegada">Fecha de llegada</label>
				<input type="text" name="fecha_llegada" class="form-control" placeholder="Fecha de llegada">
			</div>
			<div class="form-group">
				<label for="fecha_salida">Fecha de salida</label>
				<input type="text" name="fecha_salida" class="form-control" placeholder="Fecha de salida"> 
			</div>

			<div class="form-group">
				
			</div>

			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			{!!Form::close()!!}
		</div>
	</div>
@endsection