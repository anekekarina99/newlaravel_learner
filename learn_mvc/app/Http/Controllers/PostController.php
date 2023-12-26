<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    // Di dalam file PostController.php

    public function show($id)
    {
        return "Ini adalah post dengan ID: $id";
    }
    

}
