<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\Gender;
use App\Color;


class CatController extends Controller
{
    public function insertOne(Request $request)
    {
      $cat = new Cat;
      $cat->name = $request->name;
      $cat->size = $request->size;
      $cat->weight = $request->weight;
      $cat->age = $request->age;
      $cat->gender_id = $request->gender;
      $cat->save();
      $cat->colors()->attach($request->colors);
      return redirect('/');
    }
    public function deleteOne(Request $request, $id)
    {
      $cat = Cat::find($id);
      $cat->colors()->detach(); //Enlève les entrées dans la table intermédiaire ! IMPORTANT !
      $cat->delete();
      return redirect ('/');
    }
    public function updateOne(Request $request, $id)
    {
      $cat = Cat::find($id);
      $gendersAll = Gender::all();
      // pour gérer le formulaire
      $genders = []; // array vide
      foreach ($gendersAll as $value) {
        $genders[$value->id] = $value->gender; // on met les genders dans l'array
      }

      $colorsAll = Color::all();
      // pour gérer le formulaire
      $colors = []; // array vide
      foreach ($colorsAll as $value) {
        $colors[$value->id] = $value->color; // on met les genders dans l'array
      }
      return view('update', ['genders' => $genders, 'colors' => $colors, 'cat' => $cat]);
      dd($id);
    }
    public function updateOneAction(Request $request)
    {
      $cat = Cat::find($request->id);
      $cat->name = $request->name;
      $cat->size = $request->size;
      $cat->weight = $request->weight;
      $cat->age = $request->age;
      $cat->gender_id = $request->gender;
      $cat->colors()->detach();
      $cat->colors()->attach($request->colors);
      $cat->save();
      return redirect('/');
    }
}
