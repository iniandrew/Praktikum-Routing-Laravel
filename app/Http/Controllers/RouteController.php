<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(): string
    {
        return "This is from Controller";
    }

    public function profile($profileId): string
    {
        return "This is Profile from Controller, profile id: ".$profileId;
    }
}
