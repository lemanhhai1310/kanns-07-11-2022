<?php $data["title"] = "Lên định mức và gửi sơ đồ"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-default" uk-height-viewport="offset-bottom: true">
    <nav class="uk-navbar uk-navbar-container uk-navbar-transparent thongbao__navbar uk-light" uk-sticky uk-navbar>
        <div class="uk-navbar-left">
            <a href="onboarding.php" class="uk-navbar-item thongbao__navbar__icon thongbao__navbar__icon--back" uk-icon="icon: arrow-left"></a>
        </div>
        <div class="uk-navbar-center">
            <div class="uk-navbar-item">
                <h1 class="uk-h1 thongbao__navbar__title">V16</h1>
            </div>
        </div>
        <div class="uk-navbar-right">

        </div>
    </nav>
    <div class="uk-section-xsmall uk-background-box">
        <div class="uk-container">
            <div class="uk-grid-12 uk-grid" uk-grid>
                <div class="uk-width-1-1">
                    <div class="giacsodo__label">Trạng thái: <span>Lên định mức và gửi sơ đồ</span></div>
                </div>
                <div class="uk-width-1-2">
                    <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: > * > span:first-child">
                        <select aria-label="Custom controls">
                            <option value="">Chọn hệ thống</option>
                            <option value="1" selected>Hệ thống Kanns</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="giacsodo__btn uk-width-1-1 uk-button uk-button-default" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: > * > span:first-child">
                        <select aria-label="Custom controls">
                            <option value="">Chọn HKD</option>
                            <option value="1" selected>ALPHA</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="giacsodo__btn uk-width-1-1 uk-button uk-button-default" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <input class="uk-input giacsodo__input" type="text" placeholder="Mã sản phẩm" value="V16" aria-label="Input">
                </div>
                <div class="uk-width-1-2">
                    <input class="uk-input giacsodo__input" type="text" placeholder="" value="Xưởng in A" aria-label="Input">
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall uk-height-min-small">
        <div class="uk-container">
            <div class="uk-margin">
                <div class="giacsodo__title">Ảnh sản phẩm</div>
                <div class="item__12">
                    <div class="uk-child-width-auto uk-grid-12" uk-grid>
                        <?php require "template-parts/layouts/image.php"; ?>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <div class="giacsodo__title">Nhiệm vụ của bạn</div>
                <div class="item__12">
                    <!--Lên định mức-->
                    <div class="giacsodo__nhiemvu__box uk-padding-small uk-border-rounded">
                        <div class="giacsodo__nhiemvu__item">
                            <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="giacsodo__nhiemvu__box__label">Lên định mức</div>
                                </div>
                                <div class="uk-width-auto">
                                    <label><input class="uk-checkbox giacsodo__nhiemvu__checkBox" type="checkbox" hidden> <span class="giacsodo__nhiemvu__checkSpan uk-border-pill" uk-toggle="target: #my-show-lendinhmuc"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="giacsodo__nhiemvu__item" id="my-show-lendinhmuc" hidden>
                            <div class="item__12">
                                <div class="uk-child-width-auto uk-grid-12" uk-grid>
                                    <?php require "template-parts/layouts/image.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Lên định mức-->

                    <!--Gửi sơ đồ-->
                    <div class="item__12 giacsodo__nhiemvu__box uk-padding-small uk-border-rounded">
                        <div class="giacsodo__nhiemvu__item">
                            <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="giacsodo__nhiemvu__box__label">Gửi sơ đồ</div>
                                </div>
                                <div class="uk-width-auto">
                                    <label><input class="uk-checkbox giacsodo__nhiemvu__checkBox" type="checkbox" hidden> <span class="giacsodo__nhiemvu__checkSpan uk-border-pill" uk-toggle="target: #my-show-guisodo"></span></label>
                                </div>
                            </div>
                        </div>
                        <div class="giacsodo__nhiemvu__item" id="my-show-guisodo" hidden>
                            <div class="item__12">
                                <div class="uk-child-width-auto uk-grid-12" uk-grid>
                                    <?php require "template-parts/layouts/image.php"; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Gửi sơ đồ-->

                    <div class="item__12 giacsodo__hoanthanh__box">
                        <div class="giacsodo__hoanthanh__box__item">
                            <div class="uk-grid-10 uk-flex-middle uk-grid" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="giacsodo__hoanthanh__box__txt">Kho nhận hàng: Kho Thanh Trì</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <div class="giacsodo__title">Thời gian</div>
                <?php require "template-parts/layouts/time.php"; ?>
            </div>
            <div class="uk-margin">
                <div class="giacsodo__title">Tiến độ</div>
                <div class="item__12 giacsodo__tiendo__box">
                    <ul class="giacsodo__tiendo__navStep uk-grid uk-grid-collapse uk-child-width-expand">
                        <li class="uk-active giacsodo__tiendo__navStep__li">
                            <a href="" class="giacsodo__tiendo__navStep__a">
                                <span class="uk-icon giacsodo__tiendo__navStep__icon new" uk-icon="icon: check; ratio: .8"></span>
                                Mới
                            </a>
                        </li>
                        <li class="giacsodo__tiendo__navStep__li">
                            <a href="" class="giacsodo__tiendo__navStep__a">
                                <span class="uk-icon giacsodo__tiendo__navStep__icon doing" uk-icon="icon: check; ratio: .8"></span>
                                Đang làm
                            </a>
                        </li>
                        <li class="giacsodo__tiendo__navStep__li">
                            <a href="" class="giacsodo__tiendo__navStep__a">
                                <span class="uk-icon giacsodo__tiendo__navStep__icon finish" uk-icon="icon: check; ratio: .8"></span>
                                Hoàn thành
                            </a>
                        </li>
                    </ul>
                </div>
                <?php require "template-parts/layouts/history.php"; ?>
            </div>
        </div>
    </div>
</div>
<div class="giacsodo__boxBottom uk-section-xsmall uk-background-default uk-position-fixed uk-position-bottom">
    <div class="uk-container uk-container-expand">
        <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1">Lưu</button>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>