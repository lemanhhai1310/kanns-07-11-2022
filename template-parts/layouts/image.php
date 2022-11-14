<div>
    <div class="uk-position-relative">
        <a href="" class="thumua__anhsp__trash uk-box-shadow-large uk-position-top-right uk-position-z-index" uk-icon="icon: trash"></a>
        <div class="giacsodo__nhiemvu__boxImg uk-cover-container">
            <img src="images/z3785090915946_22e2c917097d8af0f19c492e810ca0c9-2.png" alt="" uk-cover="">
            <canvas width="91" height="91"></canvas>
        </div>
    </div>
</div>
<div>
    <div class="giacsodo__nhiemvu__boxImg uk-cover-container uk-background-muted">
        <div class="thumua__anhsp__box uk-position-cover uk-padding-small uk-flex uk-flex-center uk-flex-middle uk-flex-column">
            <div class="thumua__anhsp__txtsmall">Uploading...</div>
            <progress id="js-progressbar" class="thumua__anhsp__progress uk-border-pill uk-progress item__4 uk-margin-remove-bottom" value="10" max="100"></progress>
        </div>
        <canvas width="91" height="91"></canvas>
        <script>

            UIkit.util.ready(function () {

                var bar = document.getElementById('js-progressbar');

                var animate = setInterval(function () {

                    bar.value += 10;

                    if (bar.value >= bar.max) {
                        clearInterval(animate);
                    }

                }, 1000);

            });

        </script>
    </div>
</div>
<div>
    <div class="uk-form-custom" uk-form-custom>
        <input type="file" aria-label="Custom controls">
        <div class="giacsodo__nhiemvu__boxUpfile uk-cover-container">
            <canvas width="88" height="88"></canvas>
        </div>
    </div>
</div>