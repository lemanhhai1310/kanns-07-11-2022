<?php $data["title"] = "Thông báo"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = true; ?>
<?php $menuActive = 'thongbao'; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-column" uk-height-viewport="offset-bottom: true">
    <nav class="uk-navbar-container uk-navbar-transparent thongbao__navbar uk-light" uk-sticky uk-navbar>
        <div class="uk-navbar-left">
            <a href="" class="uk-navbar-item thongbao__navbar__icon thongbao__navbar__icon--back uk-invisible" uk-icon="icon: arrow-left"></a>
        </div>
        <div class="uk-navbar-center">
            <div class="uk-navbar-item">
                <h1 class="uk-h1 thongbao__navbar__title">Thông báo</h1>
            </div>
        </div>
        <div class="uk-navbar-right">
            <a href="" class="uk-navbar-item thongbao__navbar__icon thongbao__navbar__icon--search uk-invisible" uk-icon="icon: search"></a>
        </div>
    </nav>
    <div class="uk-background-default uk-flex-auto thongbao__overflow">
        <ul class="uk-nav uk-nav-default thongbao__nav">
            <?php
            $data = array(
                array(
                    'img' => 'images/z2032371069305_544563fc84ad35bf51d1f57b974e8148-11.png',
                    'time' => '',
                    'title' => 'Giác sơ đồ đã xác nhận lên mẫu V16',
                    'desc' => 'Xem chi tiết để thực hiện ra mẫu rập, thiết kế giấy nhé',
                    'isRead' => false,
                ),
                array(
                    'img' => '',
                    'time' => '',
                    'title' => 'Thu mua đã tạo yêu cầu mua hàng V16',
                    'desc' => 'Xem chi tiết để thực hiện duyệt yêu cầu mua hàng nhé',
                    'isRead' => true,
                ),
                array(
                    'img' => '',
                    'time' => '',
                    'title' => 'Thu mua đã tạo yêu cầu mua hàng V16',
                    'desc' => 'Xem chi tiết để thực hiện duyệt yêu cầu mua hàng nhé',
                    'isRead' => true,
                ),
                array(
                    'img' => '',
                    'time' => '',
                    'title' => 'Thu mua đã tạo yêu cầu mua hàng V16',
                    'desc' => 'Xem chi tiết để thực hiện duyệt yêu cầu mua hàng nhé',
                    'isRead' => true,
                ),
                array(
                    'img' => '',
                    'time' => '',
                    'title' => 'Thu mua đã tạo yêu cầu mua hàng V16',
                    'desc' => 'Xem chi tiết để thực hiện duyệt yêu cầu mua hàng nhé',
                    'isRead' => true,
                ),
            );
            foreach ($data as $k=>$v): ?>
            <li class="thongbao__nav__li <?= ($v['isRead']) ? '' : 'uk-active' ?>">
                <a href="" class="thongbao__nav__a">
                    <div class="uk-grid-12" uk-grid>
                        <div class="uk-width-auto">
                            <?php if ($v['img'] !== ''): ?>
                            <div class="uk-cover-container uk-border-circle">
                                <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                                <canvas width="36" height="36"></canvas>
                            </div>
                            <?php else: ?>
                                <div class="thongbao__nav__userImg uk-cover-container uk-border-circle uk-background-primary">
                                    <canvas width="36" height="36"></canvas>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-expand">
                            <div class="thongbao__nav__time">3 giờ trước</div>
                            <h4 class="uk-h4 thongbao__nav__title item__4"><?= $v['title'] ?></h4>
                            <div class="item__8 thongbao__nav__desc">
                                <?= ($v['desc'] == '')? 'Nhắc nhở về việc quy định mới cho phụ huynh học sinh đưa các bé tới trường...': $v['desc'] ?>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>