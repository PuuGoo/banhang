<form class="col-md-11 m-auto my-3 border border-info shadow-lg" id="frmchangepass" action="changepass_" method="post">
    <div class="m-3"> Email
        <input class="form-control border-info shadow-none" type="email" name="email" disabled value="<?= $_SESSION['email'] ?>">
    </div>
    <div class="m-3"> Mật khẩu cũ
        <input class="form-control border-info shadow-none" type="password" name="matkhauCu">
    </div>
    <div class="m-3"> Mật khẩu mới
        <input class="form-control border-info shadow-none" type="password" name="matkhauMoi1">
    </div>
    <div class="m-3"> Nhập lại mật khẩu mới
        <input class="form-control border-info shadow-none" type="password" name="matkhauMoi2">
    </div>
    <div class="m-3">
        <button class="btn btn-warning px-4" type="submit">Đổi mật khẩu</button>
    </div>
</form>