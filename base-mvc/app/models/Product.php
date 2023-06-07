<?php
    namespace App\Models;

    class Product extends BaseModel{
        protected $table = "product";
        public function getProduct(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows(); // lấy tất cả
        }
        public function EditAdd(){
    
        }
          // xây dựng hàm thêm sản phẩm
        public function addProduct($id,$tenSp,$gia){
            $sql = "INSERT INTO $this->table values (?,?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$tenSp,$gia]);
        }   
    }
  
?>