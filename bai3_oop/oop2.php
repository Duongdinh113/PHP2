<?php 
    class conNguoi{
        public $chan;
        public $tay;
        public $mat;
        public $mui;
        public function setChan($chan){
            $this->chan = $chan;
        }
        public function setTay($tay){
        
            $this->tay =$tay;
        }
        public function an(){
            echo "an bang mom";
        }
       
    }
    class nguoiLon extends conNguoi{
   
        public $longNach;
        
        public function di(){
            echo "di bang:".$this->chan."chan";
        }
       
        public function noi(){
            
        }
    }
    class treCon extends conNguoi{
       
        public $bo;

        public function bo(){
            echo "bo bang:".$this->tay." tay ".$this->chan." chan ";
        }
       
      
    }
    // khởi tạo đối tượng
    $NL = new nguoiLon();
    $NL->an();
    echo "<pre>";
    $NL->setChan(2);
    $NL->di();
    echo "<pre>";
    $TC = new treCon();
    $TC->setTay(2);
    $TC->setChan(2);
    $TC->bo();
    // $TC->di();
    
?>