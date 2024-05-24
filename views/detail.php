<h1>Chi tiết sản phẩm</h1>
<div id="chitietsp">
      <div id="trai"> <img src="<?= $sp['hinh'] ?>"> </div>
      <div id="phai">
          <h1><?= $sp['ten_sp']; ?> </h1>
          <p>Giá gốc : <?= number_format($sp['gia'], 0, "", "."); ?> VNĐ</p>
          <p>Khuyến mãi: <?= number_format($sp['gia_km'], 0, "", "."); ?> VNĐ</p>
          <p>Ngày: <?= date('d/m/Y', strtotime($sp['ngay'])); ?> </p>
          <form> <button type="button">Quay lại </button>
                <button type="submit">Thêm vào giỏ</button>
              </form>
          </div>
</div>