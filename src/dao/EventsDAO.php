<?php

require_once( __DIR__ . '/DAO.php');

class EventsDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `petevents`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `petevents` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function delete($id){
    $sql = "DELETE FROM `petevents` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }
  

  public function insert($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `petevents` (`id`, `name`, `description`, `petid`, `date`, `time`, `type`) VALUES (NULL, :name, :description, :petid), :date, :time, :type";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':id', $data['id']);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':description', $data['description']);
      $stmt->bindValue(':petid', $data['petid']);
      $stmt->bindValue(':date', $data['date']);
      $stmt->bindValue(':time', $data['time']);
      $stmt->bindValue(':type', $data['type']);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['name'])) {
      $errors['name'] = 'Gelieve het onderwerp in te vullen';
    }
    if (!isset($data['description'])) {
      $errors['description'] = 'Gelieve beschrijving in te vullen';
    }
    if (empty($data['date']) ){
      $errors['date'] = 'Gelieve een datum in te vullen';
    }
    if (!isset($data['time'])) {
      $errors['time'] = 'Gelieve tijdstip in te vullen';
    }
    if (empty($data['type']) ){
      $errors['type'] = 'Gelieve een type te selecteren';
    }
    return $errors;
  }

}
