<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/EventsDAO.php';

class EventController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventsDAO();
  }

  public function index() {
    $events = $this->eventDAO->selectAll();
    $this->set('title', 'Home');
    $this->set('events', $events);
    $this->set('currentPage', 'index');
  }

}
