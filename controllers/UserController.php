<?php
require_once "models/user.php";
class userController
{
    private $model = null;
    function __construct()
    {
        $this->model = new user;
    }
    function register()
    {
        $titlePage = "Đăng ký thành viên";
        $view = "register.php";
        include "views/layout.php";
    }
    function register_()
    {
        $hoten = trim(strip_tags($_POST['hoten']));
        $email = trim(strip_tags($_POST['email']));
        $matkhau = trim(strip_tags($_POST['matkhau']));
        $mk_mahoa = password_hash($matkhau, PASSWORD_BCRYPT);
        $id_user = $this->model->luuuser($hoten, $email, $mk_mahoa);
        echo "Đã lưu xong user id_user ";
    }
    function login()
    {
        $titlePage = "Đăng nhập";
        $view = "login.php";
        include "views/layout.php";
    }
    function login_()
    {
        $email = trim(strip_tags($_POST['email']));
        $matkhau = trim(strip_tags($_POST['matkhau']));
        $kq = $this->model->checkuser($email, $matkhau);

        if (is_array($kq) == true) { //thành công
            $_SESSION['id_user'] = $kq['id_user'];
            $_SESSION['hoten'] = $kq['hoten'];
            $_SESSION['email'] = $kq['email'];
            print_r($_SESSION);
            echo "Đã đăng nhập thành công";
        } else { //không thành công
            echo $kq;
        }
    }
    function changepass()
    {
        $titlePage = "Đổi mật khẩu";
        $view = "changepass.php";
        include "views/layout.php";
    }
    function changepass_()
    {
        $email = $_SESSION['email'];
        $matkhauCu = trim(strip_tags($_POST['matkhauCu']));
        $kq = $this->model->checkuser($email, $matkhauCu);
        if (is_string($kq) == true) { //pass cũ không đúng
            echo $kq;
            return;
        }
        $matkhauMoi1 = trim(strip_tags($_POST['matkhauMoi1']));
        $matkhauMoi2 = trim(strip_tags($_POST['matkhauMoi2']));
        if ($matkhauMoi1 != $matkhauMoi2) {
            echo "Hai mật khẩu không giống nhau";
            return;
        }
        $mk_mahoa = password_hash($matkhauMoi1, PASSWORD_BCRYPT);
        $kq = $this->model->changepass($email, $mk_mahoa);
        if (is_string($kq) == true) {
            echo $kq;
            return;
        }
        echo "Đổi pass thành công";
    }
}//class