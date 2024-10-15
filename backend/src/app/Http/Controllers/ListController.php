<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ListController extends Controller
{
  private $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }
  public function index()
  {
    $users = $this->user->all();
    return response()->json(
      $users,
      200,
      [],
      JSON_UNESCAPED_UNICODE //文字化け対策
    );
  }

  public function insert(Request $request)
  {
    $users = $this->user;
    $inputs = $request->all();
    $insertUser = $users->fill($inputs)->save();
    
    return response()->json(
      $insertUser,
      200,
      [],
      JSON_UNESCAPED_UNICODE
    );
  }
}
