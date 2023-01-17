<?php $data["title"] = "Báo cáo"; ?>
<?php $bodyClass = ''; ?>
<?php $isMenu = false; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex uk-flex-column" uk-height-viewport="offset-bottom: true">
    <div class="uk-flex-auto danhsachmau__content uk-section-xsmall">
        <div class="uk-container">
            <div class="uk-margin">
                <div class="uk-inline uk-width">
                    <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                    <input class="uk-input baocao__input uk-border-rounded" type="datetime-local" value="01/02/2022 to 18/02/2022" aria-label="Not clickable icon">
                </div>
            </div>
            <div class="uk-grid uk-grid-8 uk-child-width-1-2 uk-grid-match uk-margin" uk-grid>
                <div>
                    <div class="uk-card baocao__card uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                        <div class="baocao__card__txt">Số mẫu tạo mới</div>
                        <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="baocao__card__percent up">+3,2 %</div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="baocao__card__number uk-text-primary">10</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card baocao__card uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                        <div class="baocao__card__txt">Số mẫu hoàn thành </div>
                        <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="baocao__card__percent up">+3,2 %</div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="baocao__card__number uk-text-danger">8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card baocao__card uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                        <div class="baocao__card__txt">Số mẫu tái tạo mới</div>
                        <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="baocao__card__percent up">+3,2 %</div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="baocao__card__number uk-text-primary">10</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card baocao__card uk-card-default uk-card-body uk-padding-small uk-border-rounded">
                        <div class="baocao__card__txt">Số mẫu tái hoàn thành </div>
                        <div class="uk-grid uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="baocao__card__percent up">+3,2 %</div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="baocao__card__number uk-text-danger">8</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-card baocao__card uk-margin uk-card-default uk-border-rounded uk-card-body uk-padding-small uk-height-min-small">
                <h3 class="uk-card-title baocao__card__title">Tiến độ mẫu sản xuất</h3>
                <div class="item__15">
                    <div class="uk-grid uk-grid-10 uk-flex-middle uk-child-width-auto" uk-grid>
                        <div class="uk-width-expand">
                            <span class="baocao__card__process__txt1">V10</span>
                        </div>
                        <div>
                            <span class="baocao__card__process__txt2">3/20</span>
                        </div>
                    </div>
                    <div class="uk-position-relative baocao__card__process item__4" style="--colorBar: #9D1CB2; --colorValue: #D459E8; --value: 40%">

                    </div>
                </div>
                <div class="item__15">
                    <div class="uk-grid uk-grid-10 uk-flex-middle uk-child-width-auto" uk-grid>
                        <div class="uk-width-expand">
                            <span class="baocao__card__process__txt1">A20</span>
                        </div>
                        <div>
                            <span class="baocao__card__process__txt2">6/20</span>
                        </div>
                    </div>
                    <div class="uk-position-relative baocao__card__process item__4" style="--colorBar: #34A770; --colorValue: #46BD84; --value: 40%">

                    </div>
                </div>
                <div class="item__15">
                    <div class="uk-grid uk-grid-10 uk-flex-middle uk-child-width-auto" uk-grid>
                        <div class="uk-width-expand">
                            <span class="baocao__card__process__txt1">B60</span>
                        </div>
                        <div>
                            <span class="baocao__card__process__txt2">2/20</span>
                        </div>
                    </div>
                    <div class="uk-position-relative baocao__card__process item__4" style="--colorBar: #08A0F7; --colorValue: #08A0F7; --value: 40%">

                    </div>
                </div>
            </div>
            <div class="uk-card baocao__card uk-margin uk-card-default uk-border-rounded uk-card-body uk-padding-small uk-height-min-small">
                <h3 class="uk-card-title baocao__card__title">Tiến độ các bộ phận</h3>
                <table class="uk-table uk-table-small baocao__card__table">
                    <thead>
                    <tr>
                        <th>Tên bộ phận</th>
                        <th>SL hoàn thành</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Giác sơ đồ </td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Thu mua</td>
                        <td>6</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>