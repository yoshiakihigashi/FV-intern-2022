<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('todo.index',['todos' => $todos]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new Todo();
        $form = $request -> all();
        unset($form['_token']);

        $todo->fill($form)->save();

        return redirect('todos')->with(
            'success',
            'ID : ' . $todo->id . '「' . $todo->title . '」を登録しました！'
        );
    }

    public function edit(Request $request , $id)
    {
        $todo = Todo::find($id);
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->_method);
        $todo = Todo::find($id);
        $todo->title = $request->todo_name;
        $todo->save();
        

        return redirect()->route('todo.index');
    }

    public function complete(Request $request , $id)
    {
       $todo = Todo::find($id);
       $todo->is_complete = 1;
       $todo->save();
       return redirect()->route('todo.index');
    }

    public function delete(Request $request , $id)
    {
       $todo = Todo::find($id);
       $todo->delete();
       return redirect()->route('todo.index');
    }
}
