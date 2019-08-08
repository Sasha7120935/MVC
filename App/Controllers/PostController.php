<?php
namespace App\Controllers;

use App\Models\Post;
use Core\Controller;
use Core\View;

class PostController extends Controller
{
    public function index()
    {
       View::render('posts/index.php');
    }
    public function create()
    {
        View::render('posts/create.php');
    }
    public function store()
    {
        if(empty($_POST['title'])) {
            $this->validation = false;
            $this->data = [
                'data' => $_POST,
                'title_error' => 'Title should not be empty!'
            ];
        }
        if($this->validation) {
            View::render('posts/creat.php', $this->data);
        }
        $modelData = [
          'title' => $_POST['title'],
            'content' => !empty($_POST['content']) ? $_POST['content'] : ''
        ];
       $post = new Post();
       $postId = $post->insert($modelData);

       http_redirect('posts/' . $postId);
    }

    public function show(int $id)
    {
        $postModel = new Post();
        $post = $postModel->getPost($id);

        View::render('posts/show.php', ['post'=> $post]);
    }
}