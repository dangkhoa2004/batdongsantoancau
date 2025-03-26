<?php

namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository
{
    public function getAll(): Collection
    {
        return Product::all();
    }
    public function getById(int $id): ?Product
    {
        return Product::find($id);
    }
    // Lấy bài đăng theo thời gian tạo
    public function getLatestPosts(int $limit = 9)
    {
        return Product::orderBy('created_at', 'desc')->take($limit)->get();
    }
    public function create(array $data): Product
    {
        return Product::create($data);
    }

    public function update(int $id, array $data): ?Product
    {
        $post = Product::find($id);
        if ($post) {
            $post->update($data);
            return $post;
        }

        return null;
    }
    public function delete(int $id): bool
    {
        $post = Product::find($id);
        if ($post) {
            return $post->delete();
        }

        return false;
    }
}
