@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Gastos</div>

				<div class="panel-body">

				{!! Form::open(['route' => 'gastos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
				  <div class="form-group">
				    {!! Form::select('taxi_id',$taxis->lists('matricula', 'id'), null, ['class' => 'form-control']) !!}
				    {!! Form::selectMonth('mes', \Carbon\Carbon::now()->month,['class' => 'form-control']) !!}
				    {!! Form::selectYear('año', 2010, 2030, \Carbon\Carbon::now()->year,['class' => 'form-control']) !!}				    
				  </div>
				  
				{!! Form::close() !!}

				<p>
			        <a class="btn btn-info" href="{{ route('gastos.create') }}" role="button">
			            Nuevo Gasto
			        </a>
			    </p>
					<table class="table table-striped">
						<tr>
							<th>
							#
							</th>
							<th>
							Nombre
							</th>
							<th>
							Apellido
							</th>
							<th>
							Apellido 2
							</th>
							<th>
							Cédula
							</th>
							<th>
							Dirección
							</th>
							<th>
							Teléfono
							</th>
							<th>
							Acciones
							</th>
						</tr>
						<!--@foreach ($gastos as $gasto)
						<tr>
							<td>
							{{ $chofer->id }}
							</td>
							<td>
							{{ $chofer->nombre }}
							</td>
							<td>
							{{ $chofer->apellido }}
							</td>
							<td>
							{{ $chofer->apellido2 }}
							</td>
							<td>
							{{ $chofer->cedulaIdentidad }}
							</td>
							<td>
							{{ $chofer->direccion }}
							</td>
							<td>
							{{ $chofer->telefono1 }}
							</td>
							<td>
								<a href="{{ route('gastos.edit', $gasto)}}"> Editar</a>
								<a href=""> Eliminar </a>
							</td>
						</tr>
						@endforeach !-->
					</table>
					{!! $gastos->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
