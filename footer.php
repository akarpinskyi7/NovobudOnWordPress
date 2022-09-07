
<?php global $redux_demo; ?>
<footer>
    <div class="container-fluid footer">
        <div class="col-11 my-margin2 line2"></div>
        <div class="row asd">
            <!--            <div class="col-lg-1 col-xl-1"></div>-->
            <div class="col-xs-12 col-sm-7 col-md-4 col-lg-4 col-xl-4 pl-5 logo-mr">
                <a class="navbar-brand" href="http://novobud/">
                    <img class="logo logo-foot" src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo.png" alt="logo">
                    <pre class="break cancel pre-foot"><?php bloginfo('name'); ?></pre>
                </a>
            </div>
            <div class="d-flex flex-column col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 my-mr pl-5">
                <h5>Ми працюємо</h5>
                <p><?php echo $redux_demo['sec_5_num_1']; ?></p>
                <p><?php echo $redux_demo['sec_5_num_2']; ?></p>
            </div>
            <div class="d-flex flex-column col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 my-mr my-mr2">
                <h5>Контакти</h5>
                <p>Адреса: <?php echo $redux_demo['location']; ?></p>
                <p><a href="tel:+380983906419"><?php echo $redux_demo['phone-number']; ?></a></p>
                <p><a href="mailto:triumph-sp@ukr.net"><?php echo $redux_demo['email']; ?></a></p>
            </div>
        </div>
    </div>

    <div class="container-fluid company-name">
        <p class="text-center">&copy; <?php echo date('Y') ?> ТОВ «ТРІУМФ - СП»</p>
    </div>
</footer>

<script type="text/javascript">
    $(window).on('load', function () {
        var $preloader = $('#p_prldr'),
            $svg_anm = $preloader.find('.svg_anm');
        $svg_anm.delay(2000).fadeOut('slow');
        $preloader.delay(2000).fadeOut('slow');
    });
</script>

<script>
    autoSlider();
    let j = 0;
    // let timer;


function autoSlider() {
    let timer;
    timer = setTimeout( function() {
        let i, tabcontent, tablinks;
        if( j > 2 ) {
            j = 0;
            clearTimeout(timer);
        }

        tabcontent = document.getElementsByClassName("description");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("description_active");
        }
        tablinks = document.getElementsByClassName("work-direction");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" work-direction_active", "");
        }
        tabcontent[j].className += " description_active";
        tablinks[j].className += " work-direction_active";

        j++;
        autoSlider();
    }, 6000);
}

    function openWork(evt, workNum) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("description");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("description_active");
        }
        tablinks = document.getElementsByClassName("work-direction");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" work-direction_active", "");
        }
        document.getElementById(workNum).className += " description_active";
        evt.currentTarget.className += " work-direction_active";
    }

</script>

<script type="text/javascript">
    jQuery(function($){
        $("#phone").mask("+38(999) 999-9999");
    });
</script>

<?php wp_footer() ?>
</body>
</html>
