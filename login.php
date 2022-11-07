<?php $data["title"] = "Login"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-height-viewport uk-flex uk-flex-column">
    <div class="login__cover uk-cover-container uk-flex-auto">
        <img src="images/Rectangle470.png" alt="" uk-cover="">

        <div class="login__cover__overlay uk-position-cover"></div>
    </div>
    <div class="login__card uk-position-z-index uk-section-small" uk-height-viewport="expand: true">
        <div class="uk-container">
            <form>
                <fieldset class="uk-fieldset">

                    <legend class="uk-legend uk-text-center"><img src="images/logo-2.webp" alt=""></legend>

                    <div class="item__25">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                            <input class="login__card__input uk-input uk-form-large" type="tel" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="item__16">
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: lock"></span>
                            <input class="login__card__input uk-input uk-form-large" type="password" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="item__51">
                        <button class="login__card__btn uk-button uk-button-primary uk-width-1-1 uk-button-large">Đăng nhập</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>