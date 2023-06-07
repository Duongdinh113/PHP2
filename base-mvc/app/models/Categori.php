<?php 
    namespace App\Models;
    class Categori extends BaseModel{
        protected $table = "category";
        public function getCategori(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
?>