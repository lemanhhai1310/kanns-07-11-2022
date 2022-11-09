<?php $data["title"] = "Giác sơ đồ"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-background-default" uk-height-viewport="offset-bottom: true">
    <nav class="uk-navbar-container uk-navbar-transparent thongbao__navbar uk-light" uk-sticky uk-navbar>
        <div class="uk-navbar-left">
            <a href="" class="uk-navbar-item thongbao__navbar__icon thongbao__navbar__icon--back" uk-icon="icon: arrow-left"></a>
        </div>
        <div class="uk-navbar-center">
            <div class="uk-navbar-item">
                <h1 class="uk-h1 thongbao__navbar__title">Tạo mẫu mới</h1>
            </div>
        </div>
        <div class="uk-navbar-right">

        </div>
    </nav>
    <div class="uk-section-xsmall uk-background-box">
        <div class="uk-container">
            <div class="uk-grid-12" uk-grid>
                <div class="uk-width-1-1">
                    <div class="giacsodo__label">Trạng thái: <span>Mới</span></div>
                </div>
                <div class="uk-width-1-2">
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select aria-label="Custom controls">
                            <option value="">Chọn hệ thống</option>
                            <option value="1">Option 01</option>
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
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select aria-label="Custom controls">
                            <option value="">Chọn HKD</option>
                            <option value="1">Option 01</option>
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
                    <input class="uk-input giacsodo__input" type="text" placeholder="Mã sản phẩm" aria-label="Input">
                </div>
                <div class="uk-width-1-2">
                    <input class="uk-input giacsodo__input" type="text" placeholder="Tên xưởng in (nếu có)" aria-label="Input">
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall uk-height-min-small">
        <div class="uk-container">
            <div class="uk-margin">
                <div class="giacsodo__title">Nhiệm vụ của bạn</div>
                <div class="giacsodo__nhiemvu__box uk-padding-small uk-border-rounded item__11">
                    <div class="giacsodo__nhiemvu__item">
                        <div class="uk-flex-middle uk-grid-10" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__nhiemvu__box__label">Nhận mẫu ảnh từ bên thương mại</div>
                            </div>
                            <div class="uk-width-auto">
                                <label><input class="uk-checkbox giacsodo__nhiemvu__checkBox" type="checkbox" checked hidden> <span class="giacsodo__nhiemvu__checkSpan uk-border-pill"></span></label>
                            </div>
                        </div>
                    </div>
                    <div class="giacsodo__nhiemvu__item">
                        <div class="giacsodo__nhiemvu__box__label">Ảnh mẫu sản phẩm</div>
                        <div class="item__13">
                            <div uk-form-custom>
                                <input type="file" aria-label="Custom controls">
                                <div class="giacsodo__nhiemvu__boxUpfile uk-cover-container">
                                    <canvas width="90" height="90"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <div class="giacsodo__title">Hạn hoàn thành</div>
                <div class="item__14 giacsodo__hoanthanh__box">
                    <div class="giacsodo__hoanthanh__box__item">
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__hoanthanh__box__txt">Thời gian tiếp nhận</div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="giacsodo__hoanthanh__box__time">08:30 12/09/2022</span>
                            </div>
                        </div>
                    </div>
                    <div class="giacsodo__hoanthanh__box__item">
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__hoanthanh__box__txt">Dự kiến hoàn thành</div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="giacsodo__hoanthanh__box__time">08:30 12/09/2022</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-text-center item__14 giacsodo__hoanthanh__txt">Bạn có <span>5,5 giờ</span> để hoàn thành công việc này</div>
            </div>
            <div class="uk-margin">
                <div class="giacsodo__title">Tiến độ</div>
                <div class="item__12 giacsodo__tiendo__box">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="giacsodo__boxBottom uk-section-xsmall uk-background-default uk-position-fixed uk-position-bottom">
    <div class="uk-container uk-container-expand">
        <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1" disabled>Tạo mới</button>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>