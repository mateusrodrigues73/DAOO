<?php

namespace App\Http\Controllers;

use App\Models\Forum;

class ForumController extends Controller
{
    private $forum;

    public function __construct()
    {
        $this->forum = new Forum();
    }

    public function index()
    {
        return view('forums.index', ['forums'=>$this->forum->all()]);
    }

    public function show($id)
    {
        return view('forums.show', ['forum'=>$this->forum->find($id)]);
    }
}
