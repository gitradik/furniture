<?= get_header(); ?>

    <style>
        <?= include 'done.css'; ?>
    </style>

    <div class="done" style="background-image: url('<?= get_template_directory_uri(); ?>/images/photoeditorsdk.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-column align-items-center">
                    <div class="done-text">
                        <h3>Спасибо за заявку!</h3>
                        <p>Наш менеджер свяжется с Вами в течении нескольких минут.</p>
                    </div>
                    <div class="time-back text-center pt-5">
                        <p>На главную через...</p>
                        <p id="timeBackId"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let tCount = 5;
        const timerId = setInterval(() => {
            document.getElementById('timeBackId').innerText = `${tCount--}`;
        }, 1000);
        setTimeout(function() {
            clearInterval(timerId);
            window.location = '/';
        }, 4000);
    </script>

<?= get_footer(); ?>