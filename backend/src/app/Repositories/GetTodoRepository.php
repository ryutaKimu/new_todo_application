<?php

namespace App\Repositories;

use App\Models\Todo;

 class GetTodoRepository implements GetTodoInterface
 {

  private $todo;

  public function __construct(Todo $todo)
  {
    $this->todo = $todo;
  }

   public function getAllTodo()
   {
    $allTodo = $this->todo->all();
    return response()->json($allTodo);
   }
 }