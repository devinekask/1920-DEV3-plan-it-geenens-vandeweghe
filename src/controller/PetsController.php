<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PetsDAO.php';
require_once __DIR__ . '/../dao/EventsDAO.php';

class PetsController extends Controller {

  private $petDAO;
  private $eventsDAO;

  function __construct() {
    $this->petDAO = new PetsDAO();
    $this->eventsDAO = new EventsDAO();
  }

  public function index() {
      $pets = $this->petDAO->selectAll();
      $events = $this->eventsDAO->selectAll();
      $this->set('title', 'Home');
      $this->set('pets', $pets);
      $this->set('events', $events);
      $this->set('currentPage', 'index');
    }


  public function pets() {
      $pets = $this->petDAO->selectAll();
      $this->set('title', 'Pets');
      $this->set('pets', $pets);
      $this->set('currentPage', 'pets');
    }

  public function events() {
      $events = $this->eventsDAO->selectAll();
      $this->set('title', 'Events');
      $this->set('events', $events);
      $this->set('currentPage', 'events');
    }

    public function petdetail(){
      if(!empty($_GET['id'])){
        $pet = $this->petDAO->selectById($_GET['id']);
        $events = $this->eventsDAO->selectByPetId($_GET['id']);
      }
  //error als er geen afl gevonden werd
      if(empty($pet)){
        $_SESSION['error'] = 'The pet you were looking for is no where to be found';
        header('Location:index.php');
        exit();
      }

      $this->set('title', 'Detail');
      $this->set('pet', $pet);
      $this->set('events', $events);
      $this->set('currentPage', 'petdetail');

    }
    public function updatepet(){
      $pets = $this->petsDAO->updatePetById($_GET['petid']);
      $this->set('title', 'Update Pet');
      $this->set('pets', $pets);
      $this->set('currentPage', 'updatepet');
    }

    public function addpet(){

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertPet'){
        $insertedPet = $this->petDAO->insertPet($_POST);
      }
    }

    }
}
