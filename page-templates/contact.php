<?php
/*
 *  Template name: Страница контактов
 */
get_header();
the_post();
?>


<!-- <?php the_content() ?> -->

<!-- contact form -->
<section class="container-fluid about-contact">
<div class="row">


    <div class="d-flex flex-column col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-mr3">
        <h4>Реквізити компанії</h4>
        <p class="fsize">Код ЄДРПОУ: 43577730</p>
        <p class="fsize">Індивідуальний податковий номер: 435777302297</p>
        <p class="fsize">Юридична адреса: 23100, Вінницька обл., місто Жмеринка, вулиця Київська, будинок 16</p>
    </div>
    <div class="d-flex flex-column col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-mr3">
            <h4>Контактна інформація</h4>
            <p class="fsize">Адреса: <?php echo $redux_demo['location']; ?></p>
            <p class="fsize">Номер телефону: <a href="tel:+380983906419"><?php echo $redux_demo['phone-number']; ?></a></p>
            <p class="fsize">Імейл адреса: <a href="mailto:triumph-sp@ukr.net"><?php echo $redux_demo['email']; ?></a></p>
        </div>
</div>

    <?php if( isset( $_GET['status'] ) && 'success' == $_GET['status'] ) : ?>
        <div class="alert success alert-dismissible fade show" role="alert">
            <span>Ваше повідомлення успішно відправлено.</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>

    <?php if( isset( $_GET['status'] ) && 'error' == $_GET['status'] ) : ?>
        <div class="alert error alert-dismissible fade show" role="alert">
            <span>Заповніть, будь ласка, всі поля.</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>

    <?php if( isset( $_GET['status'] ) && 'error-2' == $_GET['status'] ) : ?>
        <div class="alert error alert-dismissible fade show" role="alert">
            <span>Щось пішло не так...</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>

    <form action="<?php echo get_stylesheet_directory_uri() ?>/send2.php" method="POST">

        <div class="row">
            <div class="m-auto">
                <div class="wrap-input make-center">
                    <input id="name" class="input" name="name" type="text" placeholder="Ім'я" required>
                </div>
                <div class="wrap-input make-center">
                    <input id="phone" class="input" name="phone" type="tel" placeholder="Номер телефону" required>
                </div>
                <div class="wrap-input make-center">
                    <input id="mail" class="input" name="mail" type="email" placeholder="Email" required>
                </div>
                <div class="make-center">
                    <textarea class="mwidth" name="message" id="comment" placeholder="Повідомлення" rows="5"></textarea>
                </div>
                <textarea name="comment1" class="spam-fil"></textarea>
                <textarea name="comment2" class="spam-fil"></textarea>
                <div class="wrap-input make-center">
                    <button type="submit" class="btn_connect input">Замовити консультацію</button>
                </div>
            </div>
        </div>

    </form>
</section>

<?php get_footer(); ?>
