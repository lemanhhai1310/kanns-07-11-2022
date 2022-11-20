<?php if ($isMenu): ?>
<nav class="kanns-navbar uk-navbar-container uk-position-fixed uk-position-bottom" uk-navbar>
    <div class="uk-navbar-left uk-flex-1">

        <ul class="uk-navbar-nav uk-flex-1 uk-child-width-expand uk-grid-match">
            <li class="<?= (isset($menuActive) && $menuActive == 'onboarding')? 'uk-active' : '' ?>">
                <a href="onboarding.php">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <span class="kanns-navbar__iconNav kanns-navbar__iconNav--home"></span>
                        <div class="uk-navbar-subtitle kanns-navbar__subtitle item__2">Trang chủ</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="danhsachmau.php">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <span class="kanns-navbar__iconNav kanns-navbar__iconNav--job"></span>
                        <div class="uk-navbar-subtitle kanns-navbar__subtitle item__2">Công việc</div>
                    </div>
                </a>
            </li>

            <li>
                <a href="" class="uk-position-relative uk-position-z-index">
                    <span class="kanns-navbar__iconPlus uk-border-circle uk-flex uk-position-z-index-negative" uk-icon="icon: plus-circle; ratio: 1"></span>
                </a>
                <div class="kanns-navbar__dropdown" hidden style="" uk-drop="mode: click; pos: top-center;">
                    <div class="uk-child-width-1-2 uk-grid-12 uk-grid-match" uk-grid>
                        <div>
                            <div class="kanns-navbar__dropdown__item">
                                <span class="uk-margin-small-right kanns-navbar__dropdown__icon kanns-navbar__dropdown__icon--note" uk-icon="check"></span>
                                Quy trình
                            </div>
                        </div>
                        <div>
                            <div class="kanns-navbar__dropdown__item">
                                <span class="uk-margin-small-right kanns-navbar__dropdown__icon kanns-navbar__dropdown__icon--reminder" uk-icon="check"></span>
                                Ghi chú
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="kanns-navbar__dropdown__item" onclick="location.href='giacsodo1.php'">
                                <span class="uk-margin-small-right kanns-navbar__dropdown__icon kanns-navbar__dropdown__icon--add" uk-icon="check"></span>
                                Tạo mẫu mới
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mask_menu uk-position-z-index-zero uk-overlay uk-overlay-default" style="display: none"></div>
            </li>

            <li class="<?= (isset($menuActive) && $menuActive == 'thongbao')? 'uk-active' : '' ?>">
                <a href="thongbao.php">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <span class="kanns-navbar__iconNav kanns-navbar__iconNav--notify">
                            <span class="uk-badge kanns-navbar__badge">1</span>
                        </span>
                        <div class="uk-navbar-subtitle kanns-navbar__subtitle item__2">Thông báo</div>
                    </div>
                </a>
            </li>
            <li class="<?= (isset($menuActive) && $menuActive == 'profile')? 'uk-active' : '' ?>">
                <a href="profile.php">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <span class="kanns-navbar__iconNav kanns-navbar__iconNav--profile"></span>
                        <div class="uk-navbar-subtitle kanns-navbar__subtitle item__2">Profile</div>
                    </div>
                </a>
            </li>
        </ul>

    </div>
</nav>
<?php endif; ?>
</div>
<!--/app-->
<script>
    const x = document.querySelector.bind(document);
    const xx = document.querySelectorAll.bind(document);

    const app = {
        render: function () {
            const kanns_navbar = x('.kanns-navbar');
            const app = x('#app');
            const thongbao__navbar = x('.thongbao__navbar');
            const mask_menu = x('.mask_menu');
            const html = x('html');
            const danhsachmau__box = x('.danhsachmau__box');
            const giacsodo__boxBottom = x('.giacsodo__boxBottom');
            const giacsodo__nhiemvu__checkBox = x('.giacsodo__nhiemvu__checkBox');
            const giacsodo__boxBottom__btn = x('.giacsodo__boxBottom__btn');
            const offcanvas_overlay_chonnguyenlieu = x('#offcanvas-overlay-chonnguyenlieu');
            const slElement = x('.thumua__offcanvas__body__label1--sl');
            const priceElement = x('.thumua__offcanvas__body__label1--price');
            const labelElement = xx('.thumua__offcanvas__body__label1');
            const modaltuchoi = x('#modal-example-tuchoi');
            const modalduyet = x('#modal-example-duyet');
            const offcanvas_overlay_kiemhang = x('#offcanvas-overlay-kiemhang');

            if (offcanvas_overlay_kiemhang){
                // UIkit.offcanvas(offcanvas_overlay_kiemhang).show();
            }

            if (modaltuchoi){

            }
            if (modalduyet){

            }

            UIkit.util.on('.thumua__offcanvas', 'shown', function () {
                // do something
                if (labelElement){
                    console.log('labelElement',labelElement);
                    labelElement.forEach((element,index)=>{
                        console.log(''+index+'',element.offsetWidth);
                        element.nextElementSibling.style.paddingLeft = element.offsetWidth + 'px';
                    });
                }
            });

            if (slElement && priceElement){
                // const sl = slElement.nextElementSibling;
                // const price = priceElement.nextElementSibling;
                //
                // console.log(sl,price);
                //
                // sl.style.paddingLeft = slElement.offsetWidth + 'px';
                // price.style.paddingLeft = priceElement.offsetWidth + 'px';
            }

            if (offcanvas_overlay_chonnguyenlieu){
                // UIkit.offcanvas(offcanvas_overlay_chonnguyenlieu).show();
            }

            if (giacsodo__boxBottom__btn){
                setTimeout(()=>{
                    giacsodo__boxBottom__btn.removeAttribute('disabled');
                },3000);
            }

            if (giacsodo__nhiemvu__checkBox){
                var checkedValue = giacsodo__nhiemvu__checkBox.checked;
                if (checkedValue){
                    console.log(checkedValue);
                }else {
                    console.log(checkedValue);
                }
            }

            if (kanns_navbar){
                const kanns_navbarHeight = kanns_navbar ? kanns_navbar.offsetHeight + 'px' : 0;
                app.style.paddingBottom = kanns_navbarHeight;
                console.log('paddingBottom App',kanns_navbarHeight);
            }

            if (giacsodo__boxBottom){
                const giacsodo__boxBottomHeight = giacsodo__boxBottom ? giacsodo__boxBottom.offsetHeight + 'px' : 0;
                app.style.paddingBottom = giacsodo__boxBottomHeight
                console.log('paddingBottom App',giacsodo__boxBottomHeight);
            }

            const thongbao__navbarHeight = thongbao__navbar ? (thongbao__navbar.offsetHeight/2) + 'px' : 0;
            if (danhsachmau__box){
                danhsachmau__box.setAttribute("uk-sticky","offset:" + thongbao__navbarHeight);
            }


            if (kanns_navbar){
                UIkit.util.on('.kanns-navbar__dropdown', 'show', function () {
                    // do something
                    mask_menu.style.display = 'block';
                    html.style.overflowY = 'hidden';
                    html.style.touchAction = 'none';
                    html.style.paddingRight = 0;
                    if (thongbao__navbar){
                        thongbao__navbar.classList.add('uk-position-z-index-zero');
                    }
                });

                UIkit.util.on('.kanns-navbar__dropdown', 'hide', function () {
                    // do something
                    mask_menu.style.display = 'none';
                    html.style.removeProperty('overflow-y');
                    html.style.removeProperty('touch-action');
                    html.style.removeProperty('padding-right');
                    if (thongbao__navbar){
                        thongbao__navbar.classList.remove('uk-position-z-index-zero');
                    }
                });
            }
        },
        start: function () {
            this.render();
        }
    }

    window.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM fully loaded and parsed');
        app.start();
    });
</script>
</body>
</html>