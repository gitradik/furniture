<style>
    <?= include 'open-form.css'?>
</style>

<div class="open-form" style="background-image: url('<?= get_template_directory_uri(); ?>/images/1232.jpg')">
    <div class="bg"></div>
    <div class="container ct">
        <div class="row">
            <div class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>От дизайн-проекта к производству мебели</h2>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="check-list" data-aos="fade-right" data-aos-duration="1000">
                    <div class="check-item">
                        <img src="<?= get_template_directory_uri(); ?>/images/checked.svg" alt="checked">
                        <p>Собственное производство</p>
                    </div>

                    <div class="check-item">
                        <img src="<?= get_template_directory_uri(); ?>/images/checked.svg" alt="checked">
                        <p>Современное оборудование</p>
                    </div>
                    <div class="check-item">
                        <img src="<?= get_template_directory_uri(); ?>/images/checked.svg" alt="checked">
                        <p>Европейское качество материалов </p>
                    </div>
                    <div class="check-item">
                        <img src="<?= get_template_directory_uri(); ?>/images/checked.svg" alt="checked">
                        <p>Опыт более 14 лет</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0 d-flex align-items-center justify-content-center">
                <form class="telegram" data-aos="fade-left" data-aos-duration="1000">
                    <input type="hidden" name="location" value="От дизайн-проекта к производству мебели">
                    <div class="t pb-3">
                        <h5>Заполните форму ниже и получите БЕСПЛАТНУЮ консультацию и 3D визуализацию в ПОДАРОК</h5>
                    </div>
                    <input type="text" name="name" placeholder="Ваше Имя">
                    <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                    <input type="email" name="email" placeholder="Ваша Почта">
                    <button>Заказать 3D визуализацию</button>
                </form>

            </div>
        </div>
    </div>
</div>