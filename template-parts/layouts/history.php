<div class="item__20 giacsodo__tiendo__boc1 uk-border-pill">
    <ul class="uk-subnav uk-child-width-expand uk-grid-collapse uk-grid" uk-switcher="connect: .my-class">
        <li class="uk-active"><a href="#" class="uk-border-pill"><span class="comment" uk-icon="icon: heart"></span> Bình luận</a></li>
        <li><a href="#" class="uk-border-pill"><span class="history" uk-icon="icon: clock"></span> Lịch sử</a></li>
    </ul>
</div>
<div class="item__12">
    <ul class="uk-switcher my-class">
        <li>
            <div class="uk-margin-small">
                <textarea class="uk-textarea giacsodo__tiendo__comment__input" rows="4" placeholder="Nhập bình luận..." aria-label="Textarea"></textarea>
            </div>
            <div class="uk-margin-small uk-text-right">
                <button class="giacsodo__tiendo__comment__btn uk-button uk-button-default uk-border-rounded">Gửi</button>
            </div>
            <div class="uk-margin">
                <?php for ($i=0;$i<=2;$i++): ?>
                <div class="history__item">
                    <div class="uk-grid uk-grid-10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="uk-cover-container uk-border-circle uk-flex-inline">
                                <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                <canvas width="24" height="24"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="history__name">PHẠM NGỌC ANH</div>
                            <div class="history__txt">OK</div>
                        </div>
                        <div class="uk-width-auto">
                            <time class="giacsodo__tiendo__historyList__time">11/11/2022 20:28</time>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </li>
        <li>
            <ul class="uk-list giacsodo__tiendo__historyList">
                <?php
                $data = array(
                    array(
                        'txt1' => 'Đang làm - thiết kế mẫu',
                        'txt2' => 'Rập',
                    ),
                    array(
                        'txt1' => 'Đang làm - Xác nhận lên mẫu',
                        'txt2' => 'Giác sơ đồ',
                    ),
                    array(
                        'txt1' => 'Hoàn thành - Huỷ lên mẫu',
                        'txt2' => 'Giác sơ đồ',
                    ),
                    array(
                        'txt1' => 'Hoàn thành - Duyệt lên mẫu',
                        'txt2' => 'Giác sơ đồ',
                    ),
                    array(
                        'txt1' => 'Mới - Xác nhận lên mẫu',
                        'txt2' => 'Giác sơ đồ',
                    ),
                    array(
                        'txt1' => 'Hoàn thành - Tạo mẫu A12',
                        'txt2' => 'Giác sơ đồ',
                    ),
                    array(
                        'txt1' => 'Đang làm - Tạo mẫu A12',
                        'txt2' => 'Giác sơ đồ',
                    ),
                    array(
                        'txt1' => 'Mới - Tạo mẫu A12',
                        'txt2' => 'Giác sơ đồ',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                    <li class="giacsodo__tiendo__historyList__li">
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giacsodo__tiendo__historyList__txt1"><?= $v['txt1'] ?></div>
                            </div>
                            <div class="uk-width-auto">
                                <time class="giacsodo__tiendo__historyList__time">09:34 16/10/2022</time>
                            </div>
                        </div>
                        <div class="item__4 giacsodo__tiendo__historyList__txt2">
                            <?= $v['txt2'] ?>
                        </div>
                    </li>
                <?php endforeach; ?>
                <li class="uk-text-center">
                    <div uk-spinner></div>
                </li>
            </ul>
        </li>
    </ul>
</div>