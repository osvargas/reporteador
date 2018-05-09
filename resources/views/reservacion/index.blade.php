@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<h3>Reservaciones <a href="reservaciones/create"><button class="btn btn-success">Nuevo</button></a></h3>	
	@include('reservacion.search')
	</div>
</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>IdReserva</th>
					<th>Servicio</th>
					<th>Cliente</th>
					<th>Pax</th>
					<th>Email</th>
					<th>Fecha llegada</th>
					<th>Hotel</th>
					<th>Opciones</th>
				</thead>
				@foreach($reservaciones as $res)
				<tr>
					<td>OCS-{{$res->idReserva}}</td>
					<td>{{$res->servicio}}</td>
					<td>{{$res->cliente}}</td>
					<td>{{$res->pax}}</td>
					<td>{{$res->email}}</td>
					<td>{{$res->fllegada}}</td>
					<td>{{$res->hotel}}

					<td><a href="{{URL::action('ReservacionController@edit',$res->idReserva)}}"><button class="btn btn-info">Editar</button>
						<a href="#"><button class="btn btn-danger">Eliminar</button>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$reservaciones->render()}}
		</div>
	</div>
@endsection