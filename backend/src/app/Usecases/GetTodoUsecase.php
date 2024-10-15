<?
namespace App\Usecases;

use App\Repositories\GetTodoRepository;

class GetTodoUsecase {

  private $getTodoRepository;

  public function __construct(GetTodoRepository $getTodoRepository)
  {
    $this->getTodoRepository = $getTodoRepository;
  }

  public function viewTodo()
  {
    return $this->getTodoRepository->getAllTodo();
  }
}
