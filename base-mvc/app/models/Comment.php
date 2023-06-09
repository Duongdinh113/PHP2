<?php 
    namespace App\Models;
    class Comment extends BaseModel{
        protected $comment = "comment";
        public function getComment(){
            $sql = "SELECT * FROM $this->comment";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function addComment($id,$comment){
            $sql = "INSERT INTO $this->comment values (?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$comment]);
        }
    }
?>