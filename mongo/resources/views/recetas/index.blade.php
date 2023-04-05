@extends('recetas.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recetas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('recetas.create') }}"> Crear Receta</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            
            <th>fecha</th>
            <th>nombre_paciente</th>
            <th>edad</th>
            <th>peso</th>
            <th>temperatura</th>
            <th>dx</th>
            <th>medicamentos</th>
            <th>medico</th>
            <th>cedula</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($recetas as $receta)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $receta->fecha }}</td>
	        <td>{{ $receta->nombre_paciente }}</td>
            <td>{{ $receta->edad }}</td>
            <td>{{ $receta->peso }}</td>
            <td>{{ $receta->temperatura }}</td>
            <td>{{ $receta->dx }}</td>
            <td>{{ $receta->medicamentos }}</td>
            <td>{{ $receta->medico }}</td>
            <td>{{ $receta->cedula }}</td>
	        <td>
                <form action="{{ route('recetas.destroy',$receta->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('recetas.show',$receta->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('recetas.edit',$receta->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


@endsection