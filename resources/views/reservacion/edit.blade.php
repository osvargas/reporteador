@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar reservación OCS - {{$reservacion->idReserva}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($reservacion,['method'=>'PATCH','route'=>['reservaciones.edit',$reservacion->idReserva]])!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="campo">Campo</label>
				<input type="text" name="campo" class="form-control" value="{{$reservacion->cliente}}" placeholder="campo">
			</div>
			<div class="form-group">
				<label for="campo2">Campo2</label>
				<input type="text" name="campo2" class="form-control" placeholder="campo2">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{!!Form::close()!!}
		</div>
	</div>
@endsection