<?php 
    namespace App\Models;
    class Comment extends BaseModel{
        protected $comment = "comment";
        public function getComment(){
            $sql = "SELECT * FROM $this->comment ORDER BY id DESC";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function addComment($id,$comment){
            $sql = "INSERT INTO $this->comment values (?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$comment]);
        }
        public function edit($id){
            $sql = "SELECT * FROM $this->comment WHERE id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }
        public function update($id,$comment){
            $sql = "UPDATE  $this->comment set comment = ? WHERE id =?";
            $this->setQuery($sql);
            return $this->execute([$comment,$id]);
        }
        public function delete($id){
            $sql ="DELETE FROM $this->comment WHERE id=?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>