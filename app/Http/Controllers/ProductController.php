<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function trangchu()
    {
        $latestPosts = $this->productService->getLatestPosts();
        return view('homepage.index', compact('latestPosts'));
    }
    public function trangchuJson()
    {
        $latestPosts = $this->productService->getLatestPosts();
        return response()->json($latestPosts);
    }
    public function index()
    {
        $posts = $this->productService->getAllPosts();
        return view('posts.index', compact('posts'));
    }
    public function indexJson()
    {
        $posts = $this->productService->getAllPosts();
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
            'hashtag' => 'nullable|url',
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
        $this->productService->createPost($data);
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = $this->productService->getPostById($id);
        return view('posts.show', compact('post'));
    }
    public function trangchuShow($id)
    {
        $post = $this->productService->getPostById($id);
        return view('homepage.detail', compact('post'));
    }
    public function edit($id)
    {
        $post = $this->productService->getPostById($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'nullable',
            'content' => 'nullable|string',
            'hashtag' => 'nullable|url',
            'posted_at' => 'nullable|date',
            'images' => 'nullable|array'
        ]);
        if ($request->hasFile('images')) {
            $data['images'] = $request->file('images')->store('public/images');
        }

        $this->productService->updatePost($id, $data);

        return redirect()->route('posts.index');
    }
    public function destroy($id)
    {
        $this->productService->deletePost($id);

        return redirect()->route('posts.index');
    }
}
