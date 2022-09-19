<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class JsonController extends Controller
{
    //
    public function index()
    {
        $data = json_encode(['Text One','Text Two','Text Three']);
        $name = time(). '_file.txt';
        File::put(public_path('/upload/'.$name),$data);

        return response()->download(public_path('upload/'.$name));

    }
}
