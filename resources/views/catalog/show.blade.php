@extends('layouts.master')

@section('content')

    <div class="row">
	    <div class="col-sm-4">
	    	<h1>
	    		<img src="{{ $Pelicula->poster}}" style="height:400px"/>
	        </h1>

	    </div>
	    <div class="col-sm-8">
	    	<h1> {{ $Pelicula->title}}</h1>
	        <h2> Urtea: {{ $Pelicula->year }}</h2>
	        <h2> Zuzendaria: {{ $Pelicula->director }}</h2>
	        <p><b> Laburpena: </b> {{ $Pelicula->synopsis}}</p>
	        <br>
	        <h2> Egoera: </h2>
	        @if ($Pelicula->rented )
	        	<b> Filme hau alokatuta dago </b>
	        	<br><br>
	        	<button class="btn btn-danger">Bueltatu Filma</button>
	        @else
	        	<b> Filme hau alokatu ahal da </b>
	        	<br><br>
	        	<button class="btn btn-primary">Alokatu Filma</button>
	        @endif
	        <a href="{{ url('/catalog/edit/'. $Pelicula->id) }}" class="btn btn-warning">Filma editatu</a>
	        <a href="{{ url('/catalog') }}" class="btn btn-secondary">Katalogora itzuli</a>
	    </div>
	</div>
@endsection
