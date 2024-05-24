<ul id="thanhmenu">
    <li><a href="<?= ROOT_URL ?>"> Trang chủ </a> </li>
    <?php foreach ($this->listloai as $loai) { ?>
        <li>
            <a href="<?= ROOT_URL . "loai?idloai=" . $loai['id_loai']; ?>">
                <?= $loai['ten_loai'] ?>
            </a>
        </li>
    <?php } ?>
</ul>