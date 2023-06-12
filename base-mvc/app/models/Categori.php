<?php 
    namespace App\Models;
    class Categori extends BaseModel{
        protected $table = "category";
        public function getCategori(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function addCategory($id,$name){
            $sql="INSERT INTO $this->table values (?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$name]);
        }
        public function detailCategory($id){
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }
        public function updateCategory($id,$name){
            $sql = "UPDATE $this->table set name = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$name,$id]);
        }
        public function deleteCategory($id){
            $sql = "DELETE FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>