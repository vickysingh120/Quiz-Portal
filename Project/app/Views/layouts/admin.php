<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/img/logo/logo2.png" type="image/x-icon">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/mystyle.css">
    <!-- Bootstrap 5 icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Tiny Cloud for text editing -->
    <script src="https://cdn.tiny.cloud/1/kyaa9d8vd4kazmcuk1wwc30y8x4msf62gxgxbo9zvjdi690z/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9RETWYSMNE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9RETWYSMNE');
    </script>

    <style>
        /* Navbar Admin */
        .navbar .dropdown-menu .dropdown-item {
            color: black !important;
        }

        .navbar .dropdown-menu .dropdown-item {
            color: black !important;
        }
    </style>

</head>

<body>
    <!-- Header Starts -->
    <!-- <div class="header">
        <img class="logo_with_name" src="img/logo/logo_with_name1.png" alt="">
    </div> -->
    <!-- Header Ends -->

    <!-- Navbar Starts -->
    <?= $this->renderSection('navbar') ?>
    <!-- Navbar Ends -->

    <!-- Carousel Starts -->
    <?php
    // include('../pages/carousel.php');
    ?>
    <!-- Carousel Ends -->
    <!-- ============================================== -->
    <!-- Main Section Starts -->

    <?= $this->renderSection('mycontent') ?>


    <!-- Main Section Ends -->
    <!-- =============================================== -->
    <!-- Modal and Forms Starts-->
    <?= $this->renderSection('login_register_modal') ?>
    <!-- Modal and Forms Starts-->

    <!-- Footer Starts -->
    <?= $this->renderSection('footer') ?>
    <!-- Footer Ends -->

    <!-- Top arrow -->
    <div id="top"><i class="bi bi-arrow-up-circle-fill"></i></div>
    <!-- Bootstrap 5 JS -->
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('#top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 100)
            })
            $(document).scroll(function() {
                if ($(this).scrollTop() > 120)
                    $('#top').fadeIn(800);
                else
                    $('#top').fadeOut(800);

            })
        });


        // $(window).on('load', function () {
        //     $('#loading').fadeOut();
        //     $('#myWebsite').fadeIn();
        // })
    </script>

    <?= $this->renderSection('script_for_adding_exam') ?>
    <script>
        tinymce.init({
            selector: '.mytextarea'
        });
    </script>
</body>

</html>