<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    public function trangchu()
    {
        $latestPosts = $this->postService->getLatestPosts();
        return view('homepage.index', compact('latestPosts'));
    }
    public function trangchuJson()
    {
        $latestPosts = $this->postService->getLatestPosts();
        return response()->json($latestPosts);
    }
    public function index()
    {
        $posts = $this->postService->getAllPosts();
        return view('posts.index', compact('posts'));
    }
    public function indexJson()
    {
        $posts = $this->postService->getAllPosts();
        return response()->json($posts);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function createv2()
    {
        return view('posts.createv2');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable|string',
            'price' => 'nullable|numeric',
            'link' => 'nullable|url',
            'code' => 'nullable',
            'info' => 'nullable',
            'document_type' => 'nullable',
            'area_mb' => 'nullable|numeric',
            'area_sd' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'length' => 'nullable|numeric',
            'floors' => 'nullable|integer',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'direction' => 'nullable',
            'feng_shui_direction' => 'nullable',
            'location' => 'nullable',
            'posted_at' => 'nullable|date',
            'images' => 'nullable|array'
        ]);
        if (!isset($data['content'])) {
            $data['content'] = '';
        }
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('images', 'public');
            }
            $data['images'] = json_encode($images);
        }
        $this->postService->createPost($data);
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = $this->postService->getPostById($id);
        return view('posts.show', compact('post'));
    }
    public function trangchuShow($id)
    {
        $post = $this->postService->getPostById($id);
        return view('homepage.detail', compact('post'));
    }
    public function edit($id)
    {
        $post = $this->postService->getPostById($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable',
            'link' => 'nullable|url',
            'code' => 'nullable',
            'info' => 'nullable',
            'document_type' => 'nullable',
            'area_mb' => 'nullable|numeric',
            'area_sd' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'length' => 'nullable|numeric',
            'floors' => 'nullable|integer',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'price' => 'nullable|integer',
            'direction' => 'nullable',
            'feng_shui_direction' => 'nullable',
            'location' => 'nullable',
            'posted_at' => 'nullable|date',
            'images' => 'nullable|image'
        ]);
        if ($request->hasFile('images')) {
            $data['images'] = $request->file('images')->store('public/images');
        }

        $this->postService->updatePost($id, $data);

        return redirect()->route('posts.index');
    }
    public function destroy($id)
    {
        $this->postService->deletePost($id);

        return redirect()->route('posts.index');
    }
}
