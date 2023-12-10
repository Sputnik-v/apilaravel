<?php

namespace App\Http\Controllers;

use App\Http\Resources\TagResources;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class TagController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return TagResources::collection(Tag::all());
    }

    public function show($id)
    {
        return new TagResources(Tag::with('posts')->findOrFail($id));
    }
}
