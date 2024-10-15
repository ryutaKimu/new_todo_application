<?php

namespace App\Http\Controllers\todos;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class InsertTodoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $requestData = $request->all();
        $todo = new Todo();
        $todo->fill($requestData);
        $todo->save();

        return response()->json($todo, 200);
    }
}
