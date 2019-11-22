<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/TodoDAO.php';

class TodosController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->todoDAO = new TodoDAO();
  }

  public function index() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'insertTodo') {
        $this->handleInsertTodo();
      }
    }

    $todos = $this->todoDAO->selectAll();
    $this->set('todos', $todos);
    $this->set('title', 'Overview');

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($todos);
      exit();
    }
  }

  private function handleInsertTodo() {
    $data = array(
      'created' => date('Y-m-d H:i:s'),
      'modified' => date('Y-m-d H:i:s'),
      'checked' => 0,
      'text' => $_POST['text']
    );
    $insertTodoResult = $this->todoDAO->insert($data);
    if (!$insertTodoResult) {
      $errors = $this->todoDAO->validate($data);
      $this->set('errors', $errors);
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        exit();
      }
      $_SESSION['error'] = 'De todo kon niet toegevoegd worden!';
    } else {
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'todo' => $insertTodoResult
        ));
        exit();
      }
      $_SESSION['info'] = 'De todo is toegevoegd!';
      header('Location: index.php');
      exit();
    }
  }

}
