<?php

namespace App\Http\Controllers\todos;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use App\Usecases\InsertTodoUsecase;
use Illuminate\Http\Request;

class InsertTodoController extends Controller
{

    protected $insertTodoUsecase;

    public function __construct(InsertTodoUsecase $insertTodoUsecase)
    {
        $this->insertTodoUsecase = $insertTodoUsecase;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $todo = $request->all();
        return $this->insertTodoUsecase->InsertTodo($todo);
    }
}
