<?php

namespace App\controller;

use App\repository\PostRepository;
use App\view\View;

class PostController
{
    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function create()
    {
        var_dump('Création d\'un post');
    }

    public function read(int $id)
    {
        $postRepository = new PostRepository();
        $post = $postRepository->get($id);

        $this->view->render('/post/read', ['post' => $post, 'name' => 'Yassin']);
    }
}