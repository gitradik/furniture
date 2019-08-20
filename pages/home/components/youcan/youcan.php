<style>
    <?= include 'youcan.css'; ?>
</style>

<div class="youcan">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end">
                <div class="t text-center d-inline-block" data-aos="fade-right" data-aos-duration="800" style="max-width: 600px">
                    <h3 class="mb-3 text-center">Не можете определится

                        с дизайном интерьера?</h3>
                    <p>С помощью дизайнерских компьютерных программ разрабатываем бесплатно визуализацию вашего проекта в цветах

                        и текстурах чтоб Вы могли наглядно увидеть цветной вариант проекта мебели.</p>
                </div>
            </div>
            <div class="col-lg-6 position-relative" style="background-image: url('<?= get_template_directory_uri(); ?>/images/v-chem-otlichie-mebeli-sdelannoj-na-zakaz.jpg');
                    background-position: center; background-size: cover; background-repeat: no-repeat;">
                <div class="bg"></div>
                <form class="telegram" data-aos="fade-left" data-aos-duration="800" style="max-width: 600px">
                    <div class="t pb-3">
                        <h5>Заполните форму ниже и получите<br>

                            Компьютерный проект при Вашем участии прямо на объекте за 20 МИНУТ.</h5>
                    </div>
                    <input type="hidden" name="location" value="Не можете определиться с дизайном интерьера?">
                    <input type="text" name="name" placeholder="Ваше Имя">
                    <input class="input-mask-s" type="tel" name="phone" placeholder="Ваш Телефон*" required>
                    <input type="email" name="email" placeholder="Ваша Почта">
                    <button>Получить 3D визуализацию </button>
                </form>
            </div>
        </div>
    </div>
</div>