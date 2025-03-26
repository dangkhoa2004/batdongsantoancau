<?php

namespace App\Services;

use App\Repositories\productRepository;
use App\Models\Product;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function getAllPosts()
    {
        return $this->productRepository->getAll();
    }
    public function getPostById(int $id): ?Product
    {
        return $this->productRepository->getById($id);
    }
    public function getLatestPosts(int $limit = 9)
    {
        return $this->productRepository->getLatestPosts($limit);
    }
    public function createPost($data)
    {
        if (isset($data['images'])) {
            $data['images'] = json_decode($data['images']);
        }
        Product::create($data);
    }
    public function updatePost(int $id, array $data): ?Product
    {
        return $this->productRepository->update($id, $data);
    }
    public function deletePost(int $id): bool
    {
        return $this->productRepository->delete($id);
    }
}
