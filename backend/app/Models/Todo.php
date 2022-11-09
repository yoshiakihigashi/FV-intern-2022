<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todos';

    //protected $primaryKey = '{{$todo->id}}';

    // protected $fillable = [
    //     'todo_title'
    // ];
    
    protected $guarded = array('id'); 

    // public function findAlltodos()
    // {
    //     return Todo::all();
    // }

    // public function Inserttodo($request)
    // {
    //     return $this->create([
    //         'todo_name' => $request->todo_name,
    //     ]);
    // }

    // public function updateTodo($request, $todo)
    // {
    //     $result = $todo->fill([
    //         'todo_name' => $request->todo_name
    //     ])->save();

    //     return $result;
    // }
}
