<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\Color;

class CreateController extends Controller
{
    public function index()
    {
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
        return view('create', ['genders' => $genders, 'colors' => $colors]);
    }
}
