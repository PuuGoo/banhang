<?php
require_once "database.php";
class user extends database
{
    function luuuser($hoten, $email, $mk_mahoa)
    {
        $sql = "INSERT INTO users SET hoten =:ht, email=:em, matkhau=:mk";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":ht", $hoten, PDO::PARAM_STR);
        $stmt->bindParam(":em", $email, PDO::PARAM_STR);
        $stmt->bindParam(":mk", $mk_mahoa, PDO::PARAM_STR);
        $stmt->execute();
        $id_user = $this->conn->lastInsertId();
        return $id_user;
    } //luuuser
    function checkuser($email, $matkhau)
    {
        $sql = "SELECT * FROM users WHERE email=:em";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":em", $email, PDO::PARAM_STR);
        $stmt->execute();
        $recordnum = $stmt->rowCount();
        if ($recordnum != 1) return "Email không tồn tại";
        $user = $stmt->fetch();
        $mk_mahoa = $user['matkhau'];
        if (password_verify($matkhau, $mk_mahoa) == false) return "Mật khẩu không đúng";
        else return $user;
    } //checkuser
    function changepass($email, $matkhaumoi)
    {
        $sql = "UPDATE users SET matkhau=:mk WHERE email=:em";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":em", $email, PDO::PARAM_STR);
        $stmt->bindParam(":mk", $mk, PDO::PARAM_STR);
        $stmt->execute();
        $recordnum = $stmt->rowCount();
        if ($recordnum != 1) return "Cập nhật không thành công";
        else return true;
    } //changepass
}
