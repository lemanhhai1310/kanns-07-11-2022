<?php $data["title"] = "Danh sách Mẫu"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-column" uk-height-viewport="offset-bottom: true" uk-filter="target: .js-filter">
    <nav class="uk-navbar-container uk-navbar-transparent thongbao__navbar uk-light" uk-sticky uk-navbar>
        <div class="nav-overlay uk-navbar-left">
            <a href="onboarding.php" class="uk-navbar-item thongbao__navbar__icon thongbao__navbar__icon--back" uk-icon="icon: arrow-left"></a>
        </div>
        <div class="nav-overlay uk-navbar-center">
            <div class="uk-navbar-item">
                <h1 class="uk-h1 thongbao__navbar__title">Danh sách Mẫu</h1>
            </div>
        </div>
        <div class="nav-overlay uk-navbar-right">
            <a class="uk-navbar-toggle thongbao__navbar__icon thongbao__navbar__icon--search" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>
        <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
            <a class="uk-navbar-toggle thongbao__navbar__icon thongbao__navbar__icon--back" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            <div class="uk-navbar-item uk-width-expand">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input thongbao__navbar__searchInput" type="search" placeholder="Search" aria-label="Search" autofocus>
                </form>
            </div>
        </div>
    </nav>
    <div class="uk-background-default danhsachmau__box">
        <div class="uk-container">
            <div class="danhsachmau__boxspace uk-overflow-auto danhsachmau__boxspace__scrollbar">
                <ul class="danhsachmau__filterControl uk-subnav uk-subnav-pill uk-margin-remove-bottom uk-grid-8 uk-flex-nowrap" uk-grid>
                    <li class="uk-active danhsachmau__filterControl__li" uk-filter-control><a href="#" class="danhsachmau__filterControl__a">Tất cả (33)</a></li>
                    <?php
                    $data = array(
                        array(
                            'key' => 'hoanthanh',
                            'value' => 'Hoàn thành',
                            'count' => '6',
                        ),
                        array(
                            'key' => 'moi',
                            'value' => 'Mới',
                            'count' => '10',
                        ),
                        array(
                            'key' => 'dapthietke',
                            'value' => 'Dập thiết kế',
                            'count' => '23',
                        ),
                        array(
                            'key' => 'inmau',
                            'value' => 'In mẫu',
                            'count' => '20',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                        <li class="danhsachmau__filterControl__li" uk-filter-control="[data-item='<?= $v["key"] ?>']"><a href="#" class="danhsachmau__filterControl__a"><?= $v['value'] ?> (<?= $v['count'] ?>)</a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="uk-flex-auto danhsachmau__content uk-section-xsmall">
        <div class="uk-container">
            <div class="uk-margin-small-bottom uk-flex uk-flex-right">
                <div class="danhsachmau__sortControl" uk-form-custom="target: > * > span:first-child">
                    <select aria-label="Custom controls">
                        <option value="1">Mới nhất</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <span class="uk-link danhsachmau__sortControl__link">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </span>
                </div>
            </div>
            <ul class="js-filter uk-child-width-1-1 uk-grid-14 uk-margin-remove-bottom" uk-grid>
                <?php
                $data = array(
                    array(
                        'key' => 'hoanthanh',
                        'value' => 'Hoàn thành',
                        'title' => 'V16',
                        'class' => 'inprogress',
                    ),
                    array(
                        'key' => 'dapthietke',
                        'value' => 'Dập thiết kế',
                        'title' => 'A1',
                        'class' => 'inprogress',
                    ),
                    array(
                        'key' => 'moi',
                        'value' => 'Mới',
                        'title' => 'BL30',
                        'class' => 'success',
                    ),
                    array(
                        'key' => 'inmau',
                        'value' => 'In mẫu',
                        'title' => 'A30',
                        'class' => 'warning',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <li data-item="<?= $v['key'] ?>">
                        <div class="danhsachmau__card uk-card uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                            <div class="danhsachmau__card__item">
                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="danhsachmau__card__title"><?= $v['title'] ?></div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="uk-label danhsachmau__card__label <?= $v['class'] ?>"><?= $v['value'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="danhsachmau__card__item">
                                <ul class="uk-list danhsachmau__card__list uk-margin-remove-bottom">
                                    <li class="shop">HKD: ALPHA</li>
                                    <li class="time">21/06/2022</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>