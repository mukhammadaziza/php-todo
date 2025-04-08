<?php 

namespace Src\App\Controllers;

use Src\Core\Controller;
use Src\Core\Request;
use Src\App\Models\ToDo;

/**
 * ToDo controller responsible for CRUD operation
 */
class ToDoController extends Controller
{
    /**
     * Global request method
     */
    protected $request;

    /**
     * Model binding
     */
    protected $model;

    public function __construct()
    {
        $this->request = new Request();
        $this->model = new ToDo();
    }
    /**
     * Vieving all tasks
     * Index file
     */
    public function index()
    {
        $todos = $this->model->getAllToDo();
        return $this->view('views/todo/index.php', ['todos' => $todos]);
    }

    /**
     * Show a form to create a task
     */
    public function create()
    {
        return $this->view('views/todo/create.php');
    }

    /**
     * Store a task
     */
    public function store()
    {
        
        $data = [
            'title' => $this->request->post['title'],
            'completed' => 0
        ];
        
        if($this->model->create($data)){
            header("Location: /php-todo");
        } else {
            die('Something went wrong');
        };
    }

    /**
     * Show edit page for a single task
     */
    public function edit($id)
    {
        $todo = $this->model->getToDoById($id);
        return $this->view('views/todo/edit.php', ['todo' => $todo]);
    }
    
    /**
     * Update single task
     */
    public function update($id)
    {
        $data = [
            'title' => $this->request->post['title']
        ];

        if ($this->model->update($id, $data)) {
            header("Location: /php-todo");
            exit;
        } else {
            die('Update failed');
        }
    }

    /**
     * Delete a single task
     */
    public function delete($id)
    {
        if ($this->model->delete($id)) {
            header("Location: /php-todo");
            exit;
        } else {
            die('Update failed');
        }
    }

    public function completeTask($id)
    {
        $data = [
            'completed' => 1
        ];

        if ($this->model->completed($id, $data)) {
            header("Location: /php-todo");
            exit;
        } else {
            die('Update failed');
        }
    }
}