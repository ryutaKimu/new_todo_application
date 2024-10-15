<?php

namespace App\Http\Controllers\todos;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use App\Usecases\GetTodoUsecase;
use Illuminate\Http\Request;

class GetTodoController extends Controller
{
    private $getTodoUsecase;

    public function __construct(GetTodoUsecase $getTodoUsecase)
    {
        $this->getTodoUsecase = $getTodoUsecase;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {

       return $this->getTodoUsecase->viewTodo();
    }
}
