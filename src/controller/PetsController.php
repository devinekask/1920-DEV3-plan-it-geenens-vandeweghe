<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PetsDAO.php';

class PetsController extends Controller {

  private $petDAO;

  function __construct() {
    $this->petDAO = new PetsDAO();
  }

  public function index() {
      $pets = $this->petDAO->selectAll();
      $this->set('title', 'Home');
      $this->set('pets', $pets);
      $this->set('currentPage', 'index');
    }

  public function pets() {
      $pets = $this->petDAO->selectAll();
      $this->set('title', 'Pets');
      $this->set('pets', $pets);
      $this->set('currentPage', 'pets');
    }

    public function detail(){
      $this->set('title', 'Detail');
      $this->set('currentPage', 'detail');
    }

  public function events() {

      $this->set('title', 'Events');
    }

    public function addpet(){

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertPet'){
        $insertedPet = $this->petDAO->insertPet($_POST);
      }
    }

    }
}
