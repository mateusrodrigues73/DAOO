<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function create()
    {
        return view('forums.create');
    }

    public function store(Request $request)
    {
        $newForum = $request->all();
        if (!Forum::create($newForum)) {
            dd("Error ao criar fórum!!");
        }
        return redirect('/forums');
    }

    public function edit($id)
    {
        return view('forums.edit',[
            'forum'=>Forum::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $newForum = $request->all();
        if (!Forum::find($id)->update($newForum)) {
            dd("Error ao criar fórum!!");
        }
        return redirect('/forums');
    }

    public function delete($id)
    {
        return view('forums.delete',[
            'forum'=>Forum::find($id)
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if($request->has('confirmar'))
            if (!Forum::destroy($id))
                dd("Error ao deletar fórum!!");

        return redirect('/forums');
    }
}
