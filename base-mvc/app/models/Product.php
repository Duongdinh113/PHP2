<?php
    namespace App\Models;

    class Product extends BaseModel{
        protected $table = "product";
        public function getProduct(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows(); // lấy tất cả
        }
     
          // xây dựng hàm thêm sản phẩm
        public function addProduct($id,$tenSp,$gia){
            $sql = "INSERT INTO $this->table values (?,?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$tenSp,$gia]);
        }   
        // xây dựng hàm lấy chi tiết sản phẩm
        public function editUpdate($id){
            $sql = "SELECT * FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }
        public function updeteProduct($id,$tensp,$gia){
            $sql ="UPDATE $this->table set ten_sp = ?,gia = ? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$tensp,$gia,$id]);
        }
        public function deleteProduct($id){
            $sql = "DELETE FROM $this->table WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
    }
}
?>