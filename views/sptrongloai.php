<div id="sptrongloai">
    <h2>Sản phẩm trong loại <?= $ten_loai ?> </h2>
    <div id="listsp">
        <?php foreach ($listsp as $sp) { ?>
            <div class="sp">
                <h4>
                    <a href="<?= ROOT_URL . "sp?id=" . $sp['id_sp']; ?>"> <?= $sp['ten_sp'] ?> </a>
                </h4>
                <img src="<?= $sp['hinh'] ?>">
                <b>Giá <?= number_format($sp['gia'], 0, "", ".") ?> VNĐ</b>
                <p>
                    <a class="btn btn-warning px-3" href="<?= ROOT_URL ?>addtocart?id=<?= $sp['id_sp'] ?>&soluong=1">
                        Thêm vào giỏ
                    </a>
                </p>
            </div>
        <?php } ?>
    </div>
    <!-- phân trang -->
    <div id="pagination">
        <?php if ($pageNum >= 2) { ?>
            <a href='<?= ROOT_URL . "loai?idloai=$idloai&page=1"; ?>'>Trang đầu</a>
        <?php } ?>
        <?php if ($pagePrev >= 1) { ?>
            <a href='<?= ROOT_URL . "loai?idloai=$idloai&page=$pagePrev"; ?>'>Trang trước</a>
        <?php } ?>
        <?php if ($pageNext < $tongSoTrang) { ?>
            <a href='<?= ROOT_URL . "loai?idloai=$idloai&page=$pageNext"; ?>'>Trang sau</a>
        <?php } ?>
        <?php if ($pageNum < $tongSoTrang) { ?>
            <a href='<?= ROOT_URL . "loai?idloai=$idloai&page=$tongSoTrang"; ?>'>Trang cuối</a>
        <?php } ?>
    </div>
</div>