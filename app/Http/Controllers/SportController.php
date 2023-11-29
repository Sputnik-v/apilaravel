<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index(): array
    {
        $sports = Sport::all();
        return $sports->toArray();
    }
}
