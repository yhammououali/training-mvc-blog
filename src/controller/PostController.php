<?php

namespace App\controller;

use App\repository\PostRepository;
use App\view\View;

class PostController
{
    private View $view;
    private PostRepository $postRepository;

    public function __construct()
    {
        $this->view = new View();
        $this->postRepository = new PostRepository();
    }

    public function create()
    {
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            $this->postRepository->create($_POST);
        }
        
        $this->view->render('/post/create');
    }

    public function read(int $id)
    {
        $this->view->render('/post/read', [
            'post' => $this->postRepository->get($id),
            'name' => 'Yassin'
        ]);
    }

    public function update(int $id) 
    {
        if ('PUT' === $_SERVER['REQUEST_METHOD']) {
            $this->postRepository->update($_POST);
        }

        $this->view->render('/post/update', [
            'post' => $this->postRepository->get($id),
        ]);
    }
}