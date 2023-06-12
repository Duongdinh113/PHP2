<?php 
    namespace App\Models;
    class Cart extends BaseModel{
        protected $table = "cart";
        public function list(){
            $sql ="SELECT * FROM $this->table ORDER BY id DESC";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function order($id,$status){
            $sql = "UPDATE $this->table set status = ?  WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$status,$id]);
        }
    }
?>