<?php

namespace App\Http\Controllers;

use App\Http\Resources\SportResources;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SportController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return SportResources::collection(Sport::all());
    }

    public function show($id)
    {
        return new SportResources(Sport::findOrFail($id));
    }
}
