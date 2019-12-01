<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventsDAO.php';

class EventsController extends Controller {

  private $eventsDAO;

  function __construct() {
    $this->eventsDAO = new EventsDAO();
  }

  public function events() {
      $events = $this->eventsDAO->selectAll();
      $this->set('title', 'Events');
      $this->set('events', $events);
      $this->set('currentPage', 'events');
    }

    public function eventdetail(){
      $this->set('title', 'Detail');
      $this->set('currentPage', 'detail');
    }

    public function addevent(){

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertEvent'){
        $insertedEvent = $this->eventsDAO->insertEvent($_POST);
      }
    }

    }
}
