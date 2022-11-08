<?php $data["title"] = "Onboarding"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = true; ?>
<?php $menuActive = 'onboarding'; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="onboarding uk-height-viewport" uk-height-viewport="offset-bottom: true">
    <div class="uk-section-xsmall">
        <div class="uk-container">
            <h1 class="onboarding__title uk-h1 uk-margin-remove">Xin chào Giác sơ đồ,</h1>
            <div class="item__30 onboarding__box1 onboarding__box1--doing">
                <div class="uk-flex-middle uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <div class="onboarding__box1__coverImg uk-cover-container uk-background-muted uk-border-rounded uk-background-norepeat uk-background-center-center" data-src="images/Frame1.png" uk-img>
                            <canvas width="64" height="64"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-h4 onboarding__box1__title">Mẫu đang sản xuất</h4>
                    </div>
                </div>
            </div>
            <div class="item__24 onboarding__box1 onboarding__box1--finish">
                <div class="uk-flex-middle uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <div class="onboarding__box1__coverImg uk-cover-container uk-background-muted uk-border-rounded uk-background-norepeat uk-background-center-center" data-src="images/Frame.png" uk-img>
                            <canvas width="64" height="64"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-h4 onboarding__box1__title">Mẫu đã hoàn thành</h4>
                    </div>
                </div>
            </div>
            <div class="item__24 onboarding__box2">
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
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>