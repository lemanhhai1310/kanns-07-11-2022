<?php if ($isMenu): ?>
<nav class="kanns-navbar uk-navbar-container uk-position-fixed uk-position-bottom" uk-navbar>
    <div class="uk-navbar-left uk-flex-1">

        <ul class="uk-navbar-nav uk-flex-1 uk-child-width-expand uk-grid-match">
            <li class="uk-active">
                <a href="#">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <span class="kanns-navbar__iconNav kanns-navbar__iconNav--home"></span>
                        <div class="uk-navbar-subtitle kanns-navbar__subtitle item__2">Trang chủ</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
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
                                Notepad
                            </div>
                        </div>
                        <div>
                            <div class="kanns-navbar__dropdown__item">
                                <span class="uk-margin-small-right kanns-navbar__dropdown__icon kanns-navbar__dropdown__icon--reminder" uk-icon="check"></span>
                                Reminder
                            </div>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="kanns-navbar__dropdown__item">
                                <span class="uk-margin-small-right kanns-navbar__dropdown__icon kanns-navbar__dropdown__icon--add" uk-icon="check"></span>
                                Tạo mẫu mới
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mask_menu uk-position-z-index-zero" style="display: none"></div>
            </li>

            <li>
                <a href="#">
                    <div class="uk-flex uk-flex-column uk-flex-middle">
                        <span class="kanns-navbar__iconNav kanns-navbar__iconNav--notify"></span>
                        <div class="uk-navbar-subtitle kanns-navbar__subtitle item__2">Thông báo</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
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
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const app = {
        render: function () {
            const kanns_navbar = $('.kanns-navbar');
            const app = $('#app');
            const kanns_navbarHeight = kanns_navbar ? kanns_navbar.offsetHeight + 'px' : 0;
            app.style.paddingBottom = kanns_navbarHeight;
            console.log('paddingBottom App',kanns_navbarHeight);

            UIkit.util.on('.kanns-navbar__dropdown', 'show', function () {
                // do something
                $('.mask_menu').style.display = 'block';
            });

            UIkit.util.on('.kanns-navbar__dropdown', 'hide', function () {
                // do something
                $('.mask_menu').style.display = 'none';
            });
        },
        start: function () {
            this.render();
        }
    }
    app.start();
</script>
</body>
</html>