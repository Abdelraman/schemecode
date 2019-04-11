<?php

namespace App\Http\Controllers\Dashboard;

use App\BlogPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    public function index(Request $request)
    {
        $blog_posts = BlogPost::when($request->search, function($q) use ($request) {
            
            return $q->where('title', 'like', '%' . $request->search . '%');
            
        })->paginate(5);
        
        return view('dashboard.blog_posts.index', compact('blog_posts'));
    
    }//end of index
    
    public function create()
    {
        return view('dashboard.blog_posts.create');
    
    }//end of create
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);

        $request_data = $request->all();

        if ($request->image) {

            $request->image->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        BlogPost::create($request_data);

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('dashboard.blog_posts.index');
    
    }//end of store
    
    public function edit(BlogPost $blog_post)
    {
        return view('dashboard.blog_posts.edit', compact('blog_post'));
    
    }//end of edit
    
    public function update(Request $request, BlogPost $blog_post)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $request_data = $request->all();

        if ($request->image) {

            Storage::disk('public_uploads')->delete('/uploads/' . $blog_post->image);
            $request->image->store('/uploads', 'public_uploads');
            $request_data['image'] = $request->image->hashName();

        }//end of if

        $blog_post->update($request_data);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.blog_posts.index');
    
    }//end of update
    
    public function destroy(BlogPost $blog_post)
    {
        Storage::disk('public_uploads')->delete('/uploads/' . $blog_post->image);
        $blog_post->delete();

        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.blog_posts.index');
    
    }//end of destroy
    
}//end of controller
