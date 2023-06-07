<?php 
    namespace App\Models;
    class Comment extends BaseModel{
        protected $comment = "comment";
        public function getComment(){
            $sql = "SELECT * FROM $this->comment";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
?>