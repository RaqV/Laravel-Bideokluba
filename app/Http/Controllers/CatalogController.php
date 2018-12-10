<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class CatalogController extends Controller
{
    //
    public function getIndex()
    {
      $arrayPeliculas = Movie::all();

      return view('catalog.index', array('arrayPeliculas'=> $arrayPeliculas));

    }

    public function getShow($id)
	  {
		$filmea = Movie::findOrFail($id);

    	return view('catalog.show', array('Pelicula'=> $filmea));
	  }

	  public function getCreate()
    {
      return view('catalog.create');
    }

    public function postCreate(Request $request)
    {
      //Sortuko dugu filmea databasean
      $p = new Movie;
      $p->title = $request->title;
      $p->year = $request->urtea;
      $p->director = $request->zuzendaria;
      $p->poster = $request->irudia;
      $p->rented = false;
      $p->synopsis = $request->synopsis;
      $p->save();
     
      return redirect('/catalog');
    }

    public function getEdit($id)
    {
      $filmea = Movie::findOrFail($id);

      return view('catalog.edit', array('film'=> $filmea));
    }
    
     public function putEdit(Request $request)
    {

      //Bilatzen dugu aldatu nahi dugun filmea
      $filmea = Movie::findOrFail($request->id);
       

      $filmea->title = $request->title;
      $filmea->year = $request->urtea;
      $filmea->director = $request->zuzendaria;
      $filmea->poster = $request->irudia;
      $filmea->synopsis = $request->synopsis;
      $filmea->save();

      return redirect('/catalog');
    }
}
