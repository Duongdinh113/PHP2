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
    }
?>