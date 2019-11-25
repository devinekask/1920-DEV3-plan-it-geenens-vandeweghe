<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PetsDAO.php';

class PetsController extends Controller {

  private $petDAO;

  function __construct() {
    $this->petDAO = new PetsDAO();
  }

  public function index() {
      $this->set('title', 'Home');
      $this->set('currentPage', 'index');
    }

  public function pets() {

      $this->set('title', 'Pets');
    }

  public function events() {

      $this->set('title', 'Events');
    }
}
