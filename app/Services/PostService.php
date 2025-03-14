<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Models\Post;

class PostService
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
    public function getAllPosts()
    {
        return $this->postRepository->getAll();
    }
    public function getPostById(int $id): ?Post
    {
        return $this->postRepository->getById($id);
    }
    public function getLatestPosts(int $limit = 9)
    {
        return $this->postRepository->getLatestPosts($limit);
    }
    public function createPost($data)
    {
        if (isset($data['images'])) {
            $data['images'] = json_decode($data['images']);
        }
        Post::create($data);
    }
    public function updatePost(int $id, array $data): ?Post
    {
        return $this->postRepository->update($id, $data);
    }
    public function deletePost(int $id): bool
    {
        return $this->postRepository->delete($id);
    }
}
