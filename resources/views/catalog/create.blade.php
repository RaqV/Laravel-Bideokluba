@extends('layouts.master')

@section('content')

   <div class="row" style="margin-top:40px">
	   <div class="offset-md-3 col-md-6">
	      <div class="card">
	         <div class="card-header text-center">
	            Filme bat sortu
	         </div>
	         <div class="card-body" style="padding:30px">

	         	<form method="POST">
		            {{-- TODO: Protección contra CSRF --}}
		            {{ csrf_field() }}

		            <div class="form-group">
		               <label for="title">Izenburua</label>
		               <input type="text" name="title" id="title" class="form-control">
		            </div>

		            <div class="form-group">
		               <label for="urtea">Urtea</label>
		               <input type="text" name="urtea" id="urtea" class="form-control">
		            </div>

		            <div class="form-group">
		               <label for="zuzendaria">Zuzendaria</label>
		               <input type="text" name="zuzendaria" id="zuzendaria" class="form-control">
		            </div>

		            <div class="form-group">
		               <label for="irudia">Irudia</label>
		               <input type="text" name="irudia" id="irudia" class="form-control">
		            </div>

		            <div class="form-group">
		               <label for="synopsis">Laburpena</label>
		               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
		            </div>

		            <div class="form-group text-center">
		               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
		                   Filmea gehitu
		               </button>
		            </div>

	            </form>

	         </div>
	      </div>
	   </div>
	</div>

@stop
