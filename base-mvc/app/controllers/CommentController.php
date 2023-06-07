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
    }
?>