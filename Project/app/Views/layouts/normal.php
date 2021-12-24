<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Page Description -->
     <meta name="description" content="Practice previous year question and mock question of all government exams. practice question, practiceques, mock question for exam>">
    <!-- Page keywords -->
    <meta name="keywords" content="previous year question, tgt question, pgt question, practice question, practiceques, mock question for exam">

    <link rel="shortcut icon" href="<?= base_url() ?>/assets/img/logo/logo2.png" type="image/x-icon">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/mystyle.css">
    <!-- Bootstrap 5 icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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
    <script>
        $(document).ready(function() {
            $('#login_form').submit(function(e) {
                e.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                    url: "<?= base_url() ?>/admin/login",
                    method: 'post',
                    data: form_data,
                    success: function(data) {
                        console.log("Success...");
                        console.log(data);
                        if (data.trim() == "error") {
                            $('#login_msg').removeClass('d-none');
                            console.log($('#login_msg'));
                            console.log('working...');
                        } else
                            location.href = "<?= base_url() ?>/admin";
                    },
                    error: function(data) {
                        console.log("Error....");
                        console.log(data);
                    }
                })
            })
        })
    </script>
</body>

</html>