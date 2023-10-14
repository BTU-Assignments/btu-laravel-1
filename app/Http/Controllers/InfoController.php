<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
   {
        $info = [
            'name' => 'Giorgi',
            'surname' => 'Kalatozishvili',
            'age' => 20,
            'hobby' => 'Software Developer',
        ];

        return response()->json($info);
    }

    public function whoami()
    {
         $info = [
            'full_name' => 'Giorgi Kalatozishvili',
        ];

        return response()->json($info);
    }


    public function age()
    {
         $info = [
            'age' => '20',
        ];

        return response()->json($info);
    }
    public function hobby()
    {
         $info = [
            'hobby' => 'Coding and Sleeping',
        ];

        return response()->json($info);
    }

    public function funfact()
    {
         $info = [
            'funfact' => 'I love lobio',
        ];

        return response()->json($info);
    }

    public function create()
    {
         return response()->json(['message' => 'წარმატებით დაემატა']);
    }

    public function update()
    {
         return response()->json(['message' => 'წარმატებით განახლდა']);
    }

    public function destroy()
    {
        return response()->json(['message' => 'წარმატებით წაიშალა']);
    }
}