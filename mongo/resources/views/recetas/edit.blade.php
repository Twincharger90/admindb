@extends('recetas.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Receta</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('recetas.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('recetas.update',$receta->id) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>fecha:</strong>
                        <input type="text" name="fecha" value = "{{$receta->fecha}}" class="form-control" placeholder="fecha">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>nombre_paciente:</strong>
                        <input type="text" name="nombre_paciente" value = "{{$receta->nombre_paciente}}" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>edad:</strong>
                        <input type="text" name="edad" value = "{{$receta->edad}}" class="form-control" placeholder="edad">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>peso:</strong>
                        <input type="text" name="peso" value = "{{$receta->peso}}" class="form-control" placeholder="peso">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>temperatura:</strong>
                        <input type="text" name="temperatura" value = "{{$receta->temperatura}}" class="form-control" placeholder="temperatura">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>dx:</strong>
                        <input type="text" name="dx" value = "{{$receta->dx}}" class="form-control" placeholder="dx">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>medicamentos:</strong>
                        <input type="text" name="medicamentos" value = "{{$receta->medicamentos}}" class="form-control" placeholder="medicamentos">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>medico:</strong>
                        <input type="text" name="medico" value = "{{$receta->medico}}" class="form-control" placeholder="medico">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>cedula:</strong>
                        <input type="text" name="cedula" value = "{{$receta->cedula}}" class="form-control" placeholder="cedula">
                    </div>
                </div>
		   
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>


@endsection