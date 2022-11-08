<?php $data["title"] = "Menu"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-middle uk-background-default" uk-height-viewport="">
    <div class="uk-width-1-1 uk-section-xsmall">
        <div class="uk-container">
            <div class="menu__grid uk-child-width-1-2 uk-grid-collapse uk-grid-row-medium" uk-grid>
                <?php
                $data = array(
                    array(
                        'icon' => 'images/nhan-hang.png',
                        'txt' => 'Nhận hàng',
                    ),
                    array(
                        'icon' => 'images/xuat-hang.png',
                        'txt' => 'Xuất hàng',
                    ),
                    array(
                        'icon' => 'images/kiem-kho.png',
                        'txt' => 'Kiểm kho',
                    ),
                    array(
                        'icon' => 'images/san-xuat.png',
                        'txt' => 'Sản xuất',
                    ),
                    array(
                        'icon' => 'images/ton-kho.png',
                        'txt' => 'Tồn kho',
                    ),
                    array(
                        'icon' => 'images/cau-hinh.png',
                        'txt' => 'Cấu hình',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-flex uk-flex-column uk-flex-middle" style="cursor: pointer">
                        <div class="menu__coverImg uk-cover-container" style="--background: url(<?= $v['icon'] ?>)">
                            <canvas width="100" height="100"></canvas>
                        </div>
                        <div class="item__16 menu__txt"><?= $v['txt'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>