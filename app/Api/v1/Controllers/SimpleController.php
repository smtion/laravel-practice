<?php

namespace App\Api\v1\Controllers;

use Illuminate\Http\Request;

use App\User;

class SimpleController extends Controller
{
    public function index(Request $request)
    {
        return 'This is simple index';
    }

    public function show($id = 'Default')
    {
        return 'Echo : ' . $id;
    }

    public function sample()
    {
        return 'This is a sample';
    }
}
