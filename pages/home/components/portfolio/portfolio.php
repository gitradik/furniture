<style>
    <?= include "portfolio.css"; ?>
</style>

<div id="portfolioId" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="t" data-aos="fade-right" data-aos-duration="800">
                    <h2>Примеры выполненных работ</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="portfolio-slider zoom-gallery" data-aos="zoom-in" data-aos-duration="1000">

                    <div>
                        <div class="portfolio-item">
                            <a class="portfolio-link" title="" href="<?= get_template_directory_uri(); ?>/images/portfolio/1.jpg">
                                <img src="<?= get_template_directory_uri(); ?>/images/portfolio/1.jpg">
                            </a>
                            <a class="portfolio-link" title="" href="<?= get_template_directory_uri(); ?>/images/portfolio/2.jpeg">
                                <img src="<?= get_template_directory_uri(); ?>/images/portfolio/2.jpeg">
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="portfolio-item">
                            <a class="portfolio-link" title="" href="<?= get_template_directory_uri(); ?>/images/portfolio/3.jpeg">
                                <img src="<?= get_template_directory_uri(); ?>/images/portfolio/3.jpeg">
                            </a>
                            <a class="portfolio-link" title="" href="<?= get_template_directory_uri(); ?>/images/portfolio/4.jpg">
                                <img src="<?= get_template_directory_uri(); ?>/images/portfolio/4.jpg">
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="portfolio-item">
                            <a class="portfolio-link" title="" href="<?= get_template_directory_uri(); ?>/images/portfolio/5.jpg">
                                <img src="<?= get_template_directory_uri(); ?>/images/portfolio/5.jpg">
                            </a>
                            <a class="portfolio-link" title="" href="<?= get_template_directory_uri(); ?>/images/portfolio/6.jpg">
                                <img src="<?= get_template_directory_uri(); ?>/images/portfolio/6.jpg">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="t mt-5 mb-3" data-aos="fade-up" data-aos-duration="1000">
                  <h4> Хотите так же? <br>

                    Закажите <span>БЕСПЛАТНУЮ</span> консультацию прямо сейчас</h4>
                </div>

                <div class="order" data-aos="fade-up" data-aos-duration="1200">
                    <button data-toggle="modal" data-target="#formModal"
                            onclick="onClickFormModal('Заказать БЕСПЛАТНУЮ консультацию', 'formModalLongTitle', 'Примеры выполненных работ', 'formInputHiddenId')">Заказать</button>
                </div>
            </div>
        </div>
    </div>
</div>