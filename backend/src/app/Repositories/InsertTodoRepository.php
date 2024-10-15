<?php

namespace App\Repositories;

use App\Models\Todo;

class InsertTodoRepository implements InsertTodoInterface{

  private $todo;

  public function __construct(Todo $todo)
  {
    $this->todo = $todo;
  }
  public function insertTodo($todos)
  {
    $this->todo->fill($todos);
    $this->todo->save();

    return response()->json($this->todo);
  }
}