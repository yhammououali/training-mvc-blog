<?php

namespace App;

use App\controller\PostController;

class Router
{
    public function run()
    {
        if (isset($_GET['action'])) {
            $action = $_GET['action'];

            if ('post' === $action) {
                return (new PostController())->read();
            } elseif ('contact' === $action) {
                var_dump('contact');
            }
        } else {
            var_dump('hello');
            require_once 'index.php';
        }
    }
}
