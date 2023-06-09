<?php 
    namespace App\Controllers;
    use App\Models\Comment;
    class CommentController extends BaseController{
        public $comment;
        public function __construct()
        {
            $this->comment = new Comment();

        }
        public function index(){
            $comments = $this->comment->getComment();
            return $this->render('comment.index',compact('comments'));
        }
        public function addComment(){
            // echo 123;
           return $this->render('comment.add');die;
        }
        public function postComment(){
            
            if(isset($_POST['btn'])){
                $errors = [];
                if(empty($_POST['comment'])){
                    $errors[] = "bạn vui lòng nhập bình luận";
                }
                if(count($errors) > 0){
                    redirect('errors',$errors,'add-comment');
                }
                $result = $this->comment->addComment(NULL,$_POST['comment']);
                if($result){
                    redirect('success','Thêm thành công','add-comment');
                }
            }
        }
    }
?>