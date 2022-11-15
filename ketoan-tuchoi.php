<?php $data["title"] = "Kế toán từ chối"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!-- Từ chối -->
<div id="modal-example-tuchoi" class="uk-flex-top modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical modal__body modal__dialog">
        <figure class="uk-text-center">
            <img src="images/modal1.png" alt="">
        </figure>
        <div class="item__24 modal__txt">Bạn có chắc muốn từ chối yêu cầu mua hàng này?</div>
        <div class="item__20">
            <textarea class="uk-textarea modal__input" rows="3" placeholder="* Vui lòng nhập lý do từ chối" aria-label="Textarea"></textarea>
        </div>
        <div class="uk-grid item__20 uk-child-width-expand uk-grid-small" uk-grid>
            <div>
                <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1 uk-modal-close">Không</button>
            </div>
            <div>
                <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1">Xác nhận</button>
            </div>
        </div>
    </div>
</div>

<!-- Duyệt -->
<div id="modal-example-duyet" class="uk-flex-top modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical modal__body modal__dialog">
        <figure class="uk-text-center">
            <img src="images/modal1.png" alt="">
        </figure>
        <div class="item__24 modal__txt">Bạn có chắc muốn duyệt yêu cầu mua hàng này?</div>
        <div class="uk-grid item__33 uk-child-width-expand uk-grid-small" uk-grid>
            <div>
                <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1 uk-modal-close">Không</button>
            </div>
            <div>
                <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1">Xác nhận</button>
            </div>
        </div>
    </div>
</div>

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
    <div class="uk-alert-danger uk-margin-remove" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    </div>
    <div class="uk-section-xsmall uk-background-box">
        <div class="uk-container">
            <div class="uk-grid-12 uk-grid" uk-grid>
                <div class="uk-width-1-1">
                    <div class="giacsodo__label">Trạng thái: <span>Từ chối</span></div>
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
                <div class="uk-width-1-1">
                    <input class="uk-input giacsodo__input" type="text" placeholder="Mã sản phẩm" value="V16" aria-label="Input">
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
                <div class="giacsodo__nhiemvu__box uk-padding-small uk-border-rounded item__11">
                    <div class="giacsodo__nhiemvu__item">
                        <div class="uk-flex-middle uk-grid-10 uk-grid" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__nhiemvu__box__label">Duyệt yêu cầu mua nguyên phụ liệu mẫu</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item__12 ketoan__box uk-padding-small">
                    <div class="thumua__chonmua item__12">
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
                <div class="item__12 giacsodo__hoanthanh__box">
                    <div class="giacsodo__hoanthanh__box__item">
                        <div class="uk-grid-10 uk-flex-middle uk-grid" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__hoanthanh__box__txt">Kho nhận hàng: Kho Royal City</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <div class="uk-grid uk-child-width-expand uk-grid-small">
            <div>
                <button class="login__card__btn login__card__btn--logout uk-button uk-button-primary uk-width-1-1 uk-button-large" uk-toggle="target: #modal-example-tuchoi">Từ chối</button>
            </div>
            <div>
                <button class="giacsodo__boxBottom__btn uk-button uk-button-primary uk-border-rounded uk-button-large uk-width-1-1" uk-toggle="target: #modal-example-duyet">Duyệt</button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>