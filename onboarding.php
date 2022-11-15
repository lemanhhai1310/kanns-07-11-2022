<?php $data["title"] = "Onboarding"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = true; ?>
<?php $menuActive = 'onboarding'; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="onboarding uk-height-viewport" uk-height-viewport="offset-bottom: true">
    <div class="uk-section-xsmall">
        <div class="uk-container">
            <h1 class="onboarding__title uk-h1 uk-margin-remove">Xin chào Giác sơ đồ,</h1>
            <div class="item__18 onboarding__box2">
                <div class="onboarding__box2__item">
                    <div class="uk-grid-collapse uk-child-width-expand" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'class' => 'late',
                                'icon' => 'clock',
                                'txt' => 'Trễ',
                                'count' => '10',
                            ),
                            array(
                                'class' => 'warning',
                                'icon' => 'clock',
                                'txt' => 'Cảnh báo',
                                'count' => '10',
                            ),
                            array(
                                'class' => 'doing',
                                'icon' => 'clock',
                                'txt' => 'Đang làm',
                                'count' => '4',
                            ),
                            array(
                                'class' => 'waiting',
                                'icon' => 'clock',
                                'txt' => 'Chờ xử lý',
                                'count' => '9',
                            ),
                        );
                        foreach ($data as $k=>$v): ?>
                            <div>
                                <div class="uk-flex uk-flex-column uk-flex-middle <?= $v['class'] ?>">
                                    <span class="uk-icon-button onboarding__box2__icon" uk-icon="<?= $v['icon'] ?>"></span>
                                    <div class="item__8 onboarding__box2__txt"><?= $v['txt'] ?></div>
                                    <div class="item__4 onboarding__box2__txt <?= $v['class'] ?>"><?= $v['count'] ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="onboarding__box2__item">
                    <div class="uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                        <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-border-circle uk-flex-inline">
                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                    <canvas width="23" height="23"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="onboarding__box2__title">Tạo mẫu mới</div>
                                <div class="">
                                    <span class="uk-margin-small-right onboarding__box2__code">#V16</span>
                                    <time class="onboarding__box2__time uk-text-danger">11:10 18/12</time>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="onboarding__box2__status onboarding__box2__status--new">Mới</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="onboarding__box2__item">
                    <div class="uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                        <div class="uk-grid uk-flex-middle uk-grid-10" uk-grid>
                            <div class="uk-width-auto">
                                <div class="uk-cover-container uk-border-circle uk-flex-inline">
                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                    <canvas width="23" height="23"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="onboarding__box2__title">Duyệt mẫu may</div>
                                <div class="">
                                    <span class="uk-margin-small-right onboarding__box2__code">#V16</span>
                                    <time class="onboarding__box2__time">11:10 18/12</time>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="onboarding__box2__status onboarding__box2__status--doing">Đang làm</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-text-center item__16"><a class="onboarding__box2__linkTxt" href="">Xem tất cả (10)</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>