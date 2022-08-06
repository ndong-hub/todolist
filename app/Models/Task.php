<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //use HasFactory;
    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|max:100',
        'detail' => 'required|max:500',
    ]);
    $task = new Task;
    $task->title = $request->title;
    $task->detail = $request->detail;
    $task->save();
    return back()->with('message', "La tâche a bien été créée !");
}   
}


