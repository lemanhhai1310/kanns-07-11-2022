<?php $data["title"] = "Tài khoản"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = true; ?>
<?php $menuActive = 'profile'; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-column" uk-height-viewport="offset-bottom: true">
    <nav class="uk-navbar-container uk-navbar-transparent thongbao__navbar uk-light" uk-sticky uk-navbar>
        <div class="uk-navbar-left">
            <a href="" class="uk-navbar-item thongbao__navbar__icon thongbao__navbar__icon--back uk-invisible" uk-icon="icon: arrow-left"></a>
        </div>
        <div class="uk-navbar-center">
            <div class="uk-navbar-item">
                <h1 class="uk-h1 thongbao__navbar__title"><?= $data["title"] ?></h1>
            </div>
        </div>
        <div class="uk-navbar-right">
            <a href="" class="uk-navbar-item thongbao__navbar__icon thongbao__navbar__icon--search uk-invisible" uk-icon="icon: search"></a>
        </div>
    </nav>
    <div class="uk-background-default uk-flex-auto uk-flex uk-flex-column">
        <div class="uk-flex-auto uk-section-small profile__top">
            <div class="uk-container uk-container-expand">
                <div class="uk-text-center">
                    <div class="uk-position-relative uk-flex-inline">
                        <div class="profile__avatar uk-cover-container uk-border-circle uk-flex-inline">
                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                            <canvas width="120" height="120"></canvas>
                        </div>
                        <div class="uk-position-bottom-right profile__edit" uk-form-custom>
                            <input type="file">
                            <a class="" href="#" uk-icon="icon: file-edit"></a>
                        </div>
                    </div>
                </div>
                <div class="item__38 giacsodo__hoanthanh__box">
                    <div class="giacsodo__hoanthanh__box__item">
                        <div class="uk-grid-10 uk-flex-middle uk-grid" uk-grid>
                            <div class="uk-width-1-3">
                                <b class="profile__label">Bộ phận</b>
                            </div>
                            <div class="uk-width-expand">
                                <div class="giacsodo__hoanthanh__box__txt">Giác sơ đồ</div>
                            </div>
                        </div>
                    </div>
                    <div class="giacsodo__hoanthanh__box__item">
                        <div class="uk-grid-10 uk-flex-middle uk-grid" uk-grid>
                            <div class="uk-width-1-3">
                                <b class="profile__label">Tài khoản</b>
                            </div>
                            <div class="uk-width-expand">
                                <div class="giacsodo__hoanthanh__box__txt">gsd_kann</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-section-xsmall profile__bottom">
            <div class="uk-container uk-container-expand">
                <button onclick="location.href='login.php'" class="login__card__btn login__card__btn--logout uk-button uk-button-primary uk-width-1-1 uk-button-large">Đăng xuất</button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>