<div id="spnoibat">
    <h2>Sản phẩm nổi bật</h2>
    <div id="listsp">
        <?php foreach ($spnb as $sp) : ?>
            <div class="sp">
                <h4><a href="<?= ROOT_URL . "sp?id=" . $sp['id_sp']; ?>"> <?= $sp['ten_sp'] ?> </a></h4>
                <img src="<?= $sp['hinh'] ?>">
                <b>Giá <?= number_format($sp['gia'], 0, "", ".") ?> VNĐ</b>
                <p>
                    <a class="btn btn-warning px-3" href="<?= ROOT_URL ?>addtocart?id=<?= $sp['id_sp'] ?>&soluong=1">
                        Thêm vào giỏ
                    </a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<hr>
<div id="spxemnhieu">
    <h2>Sản phẩm xem nhiều </h2>
    <div id="listsp">
        <?php foreach ($spxn as $sp) { ?>
            <div class="sp">
                <h4><a href="<?= ROOT_URL . "sp?id=" . $sp['id_sp']; ?>"> <?= $sp['ten_sp'] ?> </a></h4>
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
</div>