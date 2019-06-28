<?php

namespace App\Http\Controllers\Management;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ManagerRepositories\PostInterface;

class PostController extends Controller
{
    public $post;

    public function __construct(PostInterface $post)
    {
        $this->post = $post;
    }
    
    public function index()
    {
        $posts = $this->post->getAll();
        return view('management.admin_page.post', compact('posts'));
    }


}
