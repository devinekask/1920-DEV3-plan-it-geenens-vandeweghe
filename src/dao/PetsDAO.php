<?php

require_once( __DIR__ . '/DAO.php');

class PetsDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * from pets";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `pets` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function delete($id){
    $sql = "DELETE FROM `pets` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
  }

  public function updatePetById($petId){
    $sql = "UPDATE `pets` SET `name` = :name, `gender` = :gender, `type` = :type, `birthday` = :bday, `owner` = :owner, `chipid` = :chip WHERE `pets`.`id` = :petid";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':petid', $petId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insertPet($data) {
    $errors = $this->validate( $data );
    if (empty($errors)) {
      $sql = "INSERT INTO `pets` (`id`, `name`, `gender`, `type`, `birthday`, `owner`, `chipid`) VALUES (NULL, :name, :gender, :kind, :birthd, :owner, :chipid);";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':name', $data['aname']);
      $stmt->bindValue(':gender', $data['agender']);
      $stmt->bindValue(':kind', $data['animal']);
      $stmt->bindValue(':birthd', $data['abirthdate']);
      $stmt->bindValue(':owner', $data['aowner']);
      $stmt->bindValue(':chipid', $data['achipid']);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return false;
  }

  public function validate( $data ){
    $errors = [];
    if (!isset($data['aname'])) {
      $errors['aname'] = 'Gelieve name in te vullen';
    }
    return $errors;
  }

}
