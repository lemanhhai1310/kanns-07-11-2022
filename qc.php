<?php $data["title"] = "QC kiểm hàng"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Kiểm hàng-->
<div id="offcanvas-overlay-kiemhang" class="thumua__offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar thumua__offcanvas__bar uk-flex uk-flex-column">

        <div class="thumua__offcanvas__header uk-position-relative uk-text-center">
            <button class="uk-offcanvas-close thumua__offcanvas__close uk-position-center-right" type="button" uk-close></button>
            <h3 class="thumua__offcanvas__title uk-margin-remove">Kiểm hàng</h3>
        </div>
        <div class="thumua__offcanvas__body uk-flex-auto uk-overflow-auto">
            <div class="uk-padding-small thumua__offcanvas__boxForm">
                <div class="uk-grid-12 uk-grid" uk-grid>
                    <div class="uk-width-1-1">
                        <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: > * > span:first-child">
                            <select aria-label="Custom controls">
                                <option value="">Chon NPL</option>
                                <option value="1">Vải Cotton</option>
                                <option value="2">Cúc áo</option>
                                <option value="3">Khuy quần</option>
                            </select>
                            <button class="giacsodo__btn uk-width-1-1 uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="qc__box" data-txt="Size S">
                            <div class="uk-grid uk-grid-10" uk-grid>
                                <div class="uk-width-expand">
                                    <input class="uk-input giacsodo__input" type="text" placeholder="SL đóng gói: 100" value="" aria-label="Input">
                                </div>
                                <div class="uk-width-auto">
                                    <input class="uk-input giacsodo__input uk-form-width-small" type="text" placeholder="SL thực tế" value="" aria-label="Input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="qc__box" data-txt="Size M">
                            <div class="uk-grid uk-grid-10" uk-grid>
                                <div class="uk-width-expand">
                                    <input class="uk-input giacsodo__input" type="text" placeholder="SL đóng gói: 100" value="" aria-label="Input">
                                </div>
                                <div class="uk-width-auto">
                                    <input class="uk-input giacsodo__input uk-form-width-small" type="text" placeholder="SL thực tế" value="" aria-label="Input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-section-xsmall">
                <div class="uk-container uk-container-expand">
                    <textarea class="uk-textarea modal__input" rows="5" placeholder="Ghi chú:" aria-label="Textarea"></textarea>
                </div>
            </div>
        </div>
        <div class="thumua__offcanvas__footer uk-section-xsmall">
            <div class="uk-container uk-container-expand">
                <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1" disabled>Hoàn thành kiểm kê</button>
            </div>
        </div>
    </div>
</div>
<!--/Kiểm hàng-->

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
                    <div class="giacsodo__label">Trạng thái: <span>Đang chờ duyệt</span></div>
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
            <ul class="donggoi__accordion" uk-accordion="multiple: true">
                <li class="uk-open">
                    <a class="uk-accordion-title giacsodo__title" href="#">Nguyên phụ liệu sử dụng</a>
                    <div class="uk-accordion-content">
                        <div class="ketoan__box uk-padding-small">
                            <div class="thumua__chonmua">
                                <?php
                                $data = array(
                                    array(
                                        'title' => 'Vải cotton',
                                        'count' => '1',
                                    ),
                                    array(
                                        'title' => 'Cúc óng ánh',
                                        'count' => '10',
                                    ),
                                );
                                foreach ($data as $k=>$v): ?>
                                    <div class="thumua__chonmua__item">
                                        <div class="item__8">
                                            <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="thumua__chonmua__count">x<?= $v['count'] ?></span>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="thumua__chonmua__name"><?= $v['title'] ?></div>
                                                </div>
                                                <div class="uk-width-auto">
                                                    <span class="thumua__chonmua__name">890.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item__8">
                                            <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="thumua__chonmua__brand">Nhà cung cấp Lacoste</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="uk-open">
                    <a class="uk-accordion-title giacsodo__title" href="#">Số lượng cần đóng gói </a>
                    <div class="uk-accordion-content">
                        <div class="ketoan__box uk-padding-small">
                            <div class="uk-margin-small">
                                <span class="thumua__chonmua__count uk-margin-small-right">x1</span>
                                <span class="thumua__chonmua__name">Size S</span>
                            </div>
                            <div class="uk-margin-small">
                                <span class="thumua__chonmua__count uk-margin-small-right">x1</span>
                                <span class="thumua__chonmua__name">Size M</span>
                            </div>
                            <div class="uk-margin-small-top">
                                <span class="thumua__chonmua__count uk-margin-small-right">x1</span>
                                <span class="thumua__chonmua__name">Size L</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="uk-open">
                    <a class="uk-accordion-title giacsodo__title" href="#">Nhiệm vụ của bạn</a>
                    <div class="uk-accordion-content">
                        <div class="giacsodo__nhiemvu__box uk-padding-small uk-border-rounded">
                            <div class="giacsodo__nhiemvu__item">
                                <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="giacsodo__nhiemvu__box__label">Đóng gói</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a href="#offcanvas-overlay-kiemhang" uk-toggle uk-icon="icon: file-edit"></a>
                                    </div>
                                    <div class="uk-width-auto">
                                        <label><input class="uk-checkbox giacsodo__nhiemvu__checkBox" type="checkbox" checked hidden> <span class="giacsodo__nhiemvu__checkSpan uk-border-pill" uk-toggle="target: #my-show"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="giacsodo__nhiemvu__item" id="my-show">
                                <div class="uk-grid item__8 uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <div class="giacsodo__nhiemvu__box__label">Size S</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <input class="uk-input uk-form-width-xsmall uk-form-small uk-border-rounded uk-text-center" type="text" placeholder="" value="" aria-label="Small">
                                    </div>
                                </div>
                                <div class="uk-grid item__8 uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <div class="giacsodo__nhiemvu__box__label">Size M</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <input class="uk-input uk-form-width-xsmall uk-form-small uk-border-rounded uk-text-center" type="text" placeholder="" value="" aria-label="Small">
                                    </div>
                                </div>
                                <div class="uk-grid item__8 uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <div class="giacsodo__nhiemvu__box__label">Size L</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <input class="uk-input uk-form-width-xsmall uk-form-small uk-border-rounded uk-text-center" type="text" placeholder="" value="" aria-label="Small">
                                    </div>
                                </div>
                                <div class="uk-grid item__8 uk-flex-middle" uk-grid="">
                                    <div class="uk-width-expand">
                                        <div class="giacsodo__nhiemvu__box__label"><strong>Tổng</strong></div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <input class="uk-input uk-form-width-small uk-form-small uk-border-rounded uk-text-center" type="text" placeholder="" value="100" disabled aria-label="Small">
                                    </div>
                                </div>
                            </div>
                        </div>
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
                </li>
            </ul>
            <div class="uk-margin">
                <div class="giacsodo__title">Thời gian</div>
                <div class="item__14 giacsodo__hoanthanh__box">
                    <div class="giacsodo__hoanthanh__box__item">
                        <div class="uk-grid-10 uk-flex-middle uk-grid" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__hoanthanh__box__txt">Thời gian tiếp nhận</div>
                            </div>
                            <div class="uk-width-auto">
                                <input type="datetime-local" class="thumua__thoigian__input uk-input uk-width-small uk-form-small uk-border-rounded">
                            </div>
                        </div>
                    </div>
                    <div class="giacsodo__hoanthanh__box__item">
                        <div class="uk-grid-10 uk-flex-middle uk-grid" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__hoanthanh__box__txt">Dự kiến hoàn thành</div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="giacsodo__hoanthanh__box__time">08:30 12/09/2022</span>
                            </div>
                        </div>
                    </div>
                </div>
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