<?php
    namespace App\Controllers;
    use App\Models\Categori;
    class CategoriController extends BaseController{
        public $categori;
        public function __construct()
        {
            $this->categori = new Categori();
        }
        public function index(){
            $categoris = $this->categori->getCategori(); // đón giá trị từ model trả về
            // var_dump($categoris);
            // die;
            // echo "<pre>";
    
            return $this->render('categori.index', compact('categoris')); // ['ten'=>$products]
        }
            
      
    }
?>