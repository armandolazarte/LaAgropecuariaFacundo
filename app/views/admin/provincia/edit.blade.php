@extends('admin.layout.default')

@section('migasPan')
	<h1>
		Provincia <small>Editar</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><a href="{{ url('admin/provincia') }}"><i class="fa fa-globe"></i> Provincia</a></li>
		<li class="active">Editar</li>
	</ol>
@stop

@section('contenido')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">Editar Provincia</h3>
			</div>

			{{ Form::model($provincia, array('url' => 'admin/provincia/' . $provincia->id, 'method' => 'PUT', 'role' => 'form')) }}
				<div class="box-body">

					@include('admin.layout.mensaje')

					<div class="form-group">
						{{ Form::label('nombre', 'Nombre de Provincia') }}
						{{ Form::text('nombre', null, array('class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la provincia')) }}
					</div>
				</div>

				<div class="box-footer">
					<input class="btn btn-success" type="submit" value="Actualizar">
					<a href="{{ url('admin/provincia') }}" class="btn btn-danger">Cancelar</a>
				</div>
			{{ Form::close() }}

		</div>
	</div>
</div>
@stop