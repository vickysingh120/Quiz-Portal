<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/logo2.png" type="image/x-icon">
    <title><?= $this->renderSection('page_title') ?></title>

    <!-- Page Description -->
    <meta name="description" content="<?= $this->renderSection('page_des') ?>">
    <!-- Page keywords -->
    <meta name="keywords" content="<?= $this->renderSection('page_key') ?>">
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
    <style>
        :root {
            --color1: #f4f4f6;
            --color2: #707070;
        }

        .ques_card {
            border-radius: 10px;
            background-color: var(--color1) !important;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
        }

        .ques-heading {
            color: var(--color2) !important;
        }

        .ques-seperator {
            height: 20px;
            background-color: white !important;
        }

        .options .opt {
            position: relative;
            height: auto;
            line-height: auto;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid var(--color2);

        }

        .options .opt:hover {
            cursor: pointer;
            background-color: var(--color2);
            color: white;
        }

        .options .opt.correct {
            background-color: rgba(80, 191, 15, .3);
            border: 3px solid #409c0b;
            color: #318003;
            font-weight: bolder;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .options .opt.wrong {
            background-color: rgba(199, 37, 4, .3);
            border: 3px solid #ad2509;
            color: #ad2509;
            font-weight: bolder;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .options img.symbol {
            position: absolute;
            right: 0px;
        }

        .ques-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 10;
            background-color: rgba(0, 0, 0, .2);
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            filter: blur(10px);
        }

        .ques-loader {
            width: 30px;
            top: 50%;
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            /* z-index: 100!important; */
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


    <!-- Banner Starts -->
    <!-- 
    <img class="desktop_version" src="img/banner/banner2_desktop.jpg" alt="" width="100%">
    <img class="mobile_version" src="img/banner/banner2_mobile.jpg" alt="" width="100%"> -->

    <!-- Banner Ends -->
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
    <div id="top"><i class="bi bi-arrow-up-circle-fill"></i></div>
    <!-- Footer Ends -->
    <!-- Bootstrap 5 JS -->
    <script src="<?= base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>/assets/js/jquery-3.6.0.min.js"></script>
    <!-- For Top Arrow -->
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
        let correct_icon = `&nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#318003" class="bi bi-check" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg></div>`;
        let wrong_icon = `&nbsp;&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#ad2509" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>`

        function right_option(ques_id, ques_op) {
            let opt_id = ques_id + ques_op;

            // id for showing reaction emoji
            let reaction = ques_id + "_reaction";

            console.log(opt_id);
            $(`#${opt_id}`).addClass('correct');
            let prev_text = $(`#${opt_id}`).html();
            $(`#${opt_id}`).html(prev_text + correct_icon);

            // disabling the question after it is attempted
            $(`.${ques_id}`).attr('onclick', '');

            // Showing reaction emoji
            let emoji = `<img src="<?= base_url() ?>/assets/img/quiz/correct.gif" width="50" alt=""> <b>Great! That's correct</b> `;
            $(`#${reaction}`).html(emoji);

        }

        function wrong_option(ques_id, ques_op, correct_op) {
            // id for showing reaction emoji
            let reaction = ques_id + "_reaction";

            var opt_id1 = ques_id + ques_op;
            var opt_id2 = ques_id + correct_op;
            console.log(opt_id1);
            console.log(opt_id2);
            $(`#${opt_id1}`).addClass('wrong');
            $(`#${opt_id2}`).addClass('correct');

            let prev_text1 = $(`#${opt_id1}`).html();
            $(`#${opt_id1}`).html(prev_text1 + wrong_icon);

            let prev_text2 = $(`#${opt_id2}`).html();
            $(`#${opt_id2}`).html(prev_text2 + correct_icon);

            // disabling the question after it is attempted
            $(`.${ques_id}`).attr('onclick', '');

            // Showing reaction emoji
            let emoji = `<img src="<?= base_url() ?>/assets/img/quiz/incorrect.gif" width="50" alt=""> <b>Sorry! That's Incorrect</b> `;
            $(`#${reaction}`).html(emoji);
        }

        // function sleep(ms) {
        //     return new Promise(resolve => setTimeout(resolve, ms));
        // }
        // async
        function option_selected(ques_id, ques_op) {
            console.log('ques_id:' + ques_id);
            console.log('ques_op:' + ques_op);
            let q_table = $('#q_table').val();
            let overlay = ques_id + "_overlay";
            let ques_loader = ques_id + "_loader";
            $(`#${overlay}`).addClass('ques-overlay');
            $(`#${ques_loader}`).removeClass('d-none');
            // await sleep(2000);
            $.ajax({
                url: "<?= base_url() ?>/check/check_ques",
                method: 'post',
                data: {
                    ques_id: ques_id,
                    ques_op: ques_op,
                    ques_table: q_table
                },
                success: function(data) {
                    $(`#${overlay}`).removeClass('ques-overlay');
                    $(`#${ques_loader}`).addClass('d-none');
                    console.log('Success:');
                    console.log(data);
                    let arr = data.split(',');

                    console.log(arr[0]);
                    console.log(arr[1]);
                    if (arr[0] == 'true') {
                        console.log('right_option called');
                        right_option(ques_id, ques_op);
                    } else {
                        console.log('wrong_option called');
                        wrong_option(ques_id, ques_op, arr[1]);
                    }
                },
                error: function(data) {
                    console.log('Error:');
                    console.log(data);
                }
            })
        }
    </script>
    <script>
        // disabling right click
        $(document).ready(function() {
            $('body').bind('cut copy paste', function(e) {
                // alert("cut, copy, paste not allowed");
                e.preventDefault();
            });
            $("body").on("contextmenu", function(e) {
                // alert('Right click not allowed');
                return false;
            });
        });
    </script>

</body>

</html>