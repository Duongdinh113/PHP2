<?php
  namespace App\Models;
    class User extends BaseModel{
        protected $table = "user";
      public function listUser(){
        $sql ="SELECT * FROM $this->table ORDER BY id DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
      }
      public function addUser($id,$name,$pass){
        $sql = "INSERT INTO $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$name,$pass]);
      }
      public function edit($id){
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
      }
      public function update($id,$name,$pass){
          $sql = "UPDATE  $this->table set password = ?, name = ?  WHERE id =?";
          $this->setQuery($sql);
          return $this->execute([$pass,$name,$id]);
      }
      public function delete($id){
          $sql ="DELETE FROM $this->table WHERE id=?";
          $this->setQuery($sql);
          return $this->execute([$id]);
      }
    }
?>