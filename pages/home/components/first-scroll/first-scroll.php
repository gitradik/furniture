<style>
    <?= include 'first-scroll.css'; ?>
</style>
<div class="position-relative">
<div class="first-scroll" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/first-scroll-back.png')">
    <video autoplay muted loop id="myVideo">
        <source src="<?= get_template_directory_uri(); ?>/slider01.mp4" type="video/mp4">
    </video>
    <div class="bg"></div>
    <div class="container-fluid ct">
        <div class="row justify-content-center">
            <div class="col-md-8 my-auto">
                <div class="t" data-aos="zoom-in" data-aos-duration="800">
                    <h1>Мебель премиум класса под ваш дизайн-проект</h1>
                    <hr>
                    <h2>Индивидуальный подход и реализация проекта любой сложности с гарантией 7 лет</h2>
                </div>
            </div>
            <div class="col-md-8 my-3 d-flex flex-column align-items-center justify-content-center">
                <div class="t t-sub">
                    <h4>Закажите <span>БЕСПЛАТНУЮ</span> консультацию дизайнера прямо на объекте</h4>
                </div>
                <div class="order">
                    <button

                            data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal(
                                'Записаться БЕСПЛАТНУЮ консультацию',
                                 'formModalLongTitle',
                                 'Первый скролл',
                                 'formInputHiddenId')"
                    >
                        Заказать
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
