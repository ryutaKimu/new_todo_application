<?php

namespace App\Usecases;

use App\Repositories\InsertTodoRepository;

class InsertTodoUsecase
{
  protected $insertTodoRepository;

  public function __construct(InsertTodoRepository $insertTodoRepository)
  {
    $this->insertTodoRepository = $insertTodoRepository;
  }

  public function InsertTodo($todo)
  {
   return  $this->insertTodoRepository->insertTodo($todo);
  }
}
