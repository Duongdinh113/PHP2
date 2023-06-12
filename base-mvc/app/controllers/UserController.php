<?php
    namespace App\Controllers;
    use App\Models\User;
    class UserController extends BaseController{
        public $user;
        public function __construct()
        {
            $this->user = new User();
        }
        public function index(){
            $users = $this->user->listUser();
            $this->render('user.index',compact('users'));
        }
        public function addUser(){
            return $this->render('user.add');
        }
        public function postUser(){
            if(isset($_POST['btn'])){
                $errors = [];
                if(empty($_POST['name'])){
                    $errors[] = "vui lòng nhập tên tài khoản";
                }
                if(empty($_POST['pass'])){
                    $errors[] = "vui lòng nhập mật khẩu";
                }
                if(count($errors) > 0){
                    redirect('errors',$errors,'add-user');
                }else{
                    $result = $this->user->addUser(NULL,$_POST['name'],$_POST['pass']);
                    if($result){
                        redirect('success','thêm thành công','add-user');
                    }
                }
               
            }
        }
        public function edit($id){
            // echo 123;die;
            $user = $this->user->edit($id);
            return $this->render('user.edit',compact('user'));
        }
        public function update($id){    
            if(isset($_POST['btn'])){
                $result = $this->user->update($id,$_POST['name'],$_POST['pass']);
                if($result){
                    redirect('success','cập nhật thành công','edit-user/'.$id);
                }
            }
        }
        public function delete($id){
            // echo 123;
            $result = $this->user->delete($id);
            if($result){
                redirect('success','xóa thành công','list-user');
            }
        }
    }
?>