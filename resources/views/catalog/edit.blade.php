@extends('layouts.master')

@section('content')

      <div class="row" style="margin-top:40px">
	   <div class="offset-md-3 col-md-6">
	      <div class="card">
	         <div class="card-header text-center">
	            Filmea aldatzea
	         </div>
	         <div class="card-body" style="padding:30px">

	         	<form method="POST">
		            {{ method_field('PUT') }}
		            {{-- TODO: Protección contra CSRF --}}
		            {{ csrf_field() }}

		            <div class="form-group">
		               <label for="title">Izenburua</label>
		               <input type="text" name="title" id="title" class="form-control" value="{{ $film->title }}">
		            </div>

		            <div class="form-group">
		               <label for="urtea">Urtea</label>
		               <input type="text" name="urtea" id="urtea" class="form-control" value="{{ $film->year }}">
		            </div>

		            <div class="form-group">
		               <label for="zuzendaria">Zuzendaria</label>
		               <input type="text" name="zuzendaria" id="zuzendaria" class="form-control" value="{{ $film->director }}">
		            </div>

		            <div class="form-group">
		               <label for="irudia">Irudia</label>
		               <input type="text" name="irudia" id="irudia" class="form-control" value="{{ $film->poster }}">
		            </div>

		            <div class="form-group">
		               <label for="synopsis">Laburpena</label>
		               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"> {{ $film->synopsis }}</textarea>
		            </div>

		            <div class="form-group text-center">
		            	<input type="hidden" name="id" id="id" value="{{ $film->id }}">
		               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
		                   Filmea aldatu
		               </button>
		            </div>
	            </form>
	         </div>
	      </div>
	   </div>
	</div>


@stop
