<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $post = Post::all();

        return view('post.index',['posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        echo "create";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        echo "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //\
        echo "show";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo "edit";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        echo "update";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        echo "destroy";

    }
}
