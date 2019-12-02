<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventsDAO.php';
require_once __DIR__ . '/../dao/PetsDAO.php';


class EventsController extends Controller {
  private $petDAO;
  private $eventsDAO;

  function __construct() {
    $this->eventsDAO = new EventsDAO();
    $this->petDAO = new PetsDAO();
  }


  public function events() {
      $events = $this->eventsDAO->selectAll();
      $this->set('title', 'Events');
      $this->set('events', $events);
      $this->set('currentPage', 'events');
  }

  public function eventdetail(){
    $event = $this->eventsDAO->selectById($_GET['id']);
    $pet = $this->petDAO->selectById($event['petid']);


    if(!empty($_POST['action'])){
      if($_POST['action'] == 'deleteThisEvent'){
        $deletedevent = $this->eventsDAO->deleteEventById($_GET['id']);
        header('Location: index.php?page=events');
      }
    }

    $this->set('title', 'Detail');
    $this->set('event', $event);
    $this->set('pet', $pet);
    $this->set('currentPage',  'detail');
  }

  public function addevent(){
    $petse = $this->petDAO->selectAll();
    $this->set('title', 'Add Event');
    $this->set('petse', $petse);
    // $this->set('events', $events);
    $this->set('currentPage', 'addevent');

  if(!empty($_POST['action'])){
    if($_POST['action'] == 'insertEvent'){
      $insertedEvent = $this->eventsDAO->insertEvent($_POST);
    }
  }

  }
}
