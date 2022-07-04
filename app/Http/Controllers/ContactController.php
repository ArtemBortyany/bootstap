<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function index()
    {

    }

    public function getcontact(Request $request)
    {
        return response(['error'=>0, 'message'=>'Супер']);
    }
}

