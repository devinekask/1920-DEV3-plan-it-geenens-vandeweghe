<?php

require_once( __DIR__ . '/DAO.php');

class EventDAO extends DAO {

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
      $sql = "INSERT INTO `petevents` (`id`, `name`, `description`, `petid`, `date`, `time`, `type`) VALUES (:id, :name, :description, :petid), :date, :time, :type";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':id', $data['id']);
      $stmt->bindValue(':name', $data['name']);
      $stmt->bindValue(':description', $data['description']);
      $stmt->bindValue(':petid', $data['petid']);
      $stmt->bindValue(':date', $data['date']);
      $stmt->bindValue(':time', $data['time']);
      $stmt->bindValue(':type', $data['type']);
      if ($stmt->execute()) {
        return $this->selectById($this->pdo->lastInsertId());
      }
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['created'])) {
      $errors['created'] = 'Gelieve created in te vullen';
    }
    if (!isset($data['modified'])) {
      $errors['modified'] = 'Gelieve modified in te vullen';
    }
    if (!isset($data['checked'])) {
      $errors['checked'] = 'Gelieve checked in te vullen';
    }
    if (empty($data['text']) ){
      $errors['text'] = 'Gelieve een text in te vullen';
    }
    return $errors;
  }

}
