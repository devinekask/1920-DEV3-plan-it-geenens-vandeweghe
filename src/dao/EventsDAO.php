<?php

require_once( __DIR__ . '/DAO.php');

class EventsDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT *,E.id as eventid ,P.name as petname, E.name as eventname FROM `petevents` as E
    inner join pets as P
    on E.petid = P.id";
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

  public function selectByPetId($petId){
    $sql = "SELECT * FROM `petevents` WHERE `petid` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $petId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function updatePetById($ventid){
    $sql = "UPDATE `petevents` SET `name` = :name , `description` = :desc, `petid` = :petid, `date` = :date, `location` = :location WHERE `petevents`.`id` = :id;";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $eventid);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function delete($id){
    $sql = "DELETE FROM `petevents` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function insertEvent($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `petevents` (`id`, `name`, `description`, `petid`, `date`, `type`, `location`) VALUES (NULL, :name, :description, :petid, :date, :type, :location);";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':name', $data['ename']);
      $stmt->bindValue(':description', $data['edescription']);
      $stmt->bindValue(':petid', $data['epetid']);
      $stmt->bindValue(':date', $data['edate']);
      $stmt->bindValue(':type', $data['etype']);
      $stmt->bindValue(':location', $data['elocation']);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['ename'])) {
      $errors['name'] = 'Gelieve het onderwerp in te vullen';
    }
    return $errors;
  }

}
