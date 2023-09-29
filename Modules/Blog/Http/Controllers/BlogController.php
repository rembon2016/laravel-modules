<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\BlogPost;
use Modules\Blog\Http\Requests\BlogPost\CreatePostRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return Renderable
     */
    public function index(): Renderable
    {
        $blog_posts = BlogPost::latest()->get();

        return view('blog::content.index', compact('blog_posts'));
    }

    /**
     * Add Blog Post.
     * 
     * @param \Modules\Blog\Http\Requests\BlogPost\CreatePostRequest $request
     * @return RedirectResponse
     */
    public function addBlogPost(CreatePostRequest $request): RedirectResponse
    {
        BlogPost::create(array_merge($request->validated(), [
            'user_id' => auth()->id(),
        ]));

        return redirect()->back()->with('success', 'Blog Post Created Successfully');
    }
}
