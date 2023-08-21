<?php

namespace Blessing\BrandsplashPackage\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('blogpackage::posts.index');
    }

    public function show()
    {

        return view('blogpackage::posts.show');
    }

    public function store()
    {
        dd('Posts Controller: \'Store\' running');
        // Let's assume we need to be authenticated
        // to create a new post
        if (! auth()->check()) {
            abort (403, 'Only authenticated users can create new posts.');
        }

        request()->validate([
            'title' => 'required',
            'body'  => 'required',
        ]);

        // Assume the authenticated user is the post's author
        $author = auth()->user();

        // $post = $author->posts()->create([
        //     'title'     => request('title'),
        //     'body'      => request('body'),
        // ]);

        // return redirect(route('posts.show', $post));
        return redirect(route('posts.show', ['title' => 'some title', 'body' => 'some body']));
    }
}


?>