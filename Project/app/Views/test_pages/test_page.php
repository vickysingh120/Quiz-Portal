<?= $this->extend('layouts/test_layout') ?>


<!-- Navbar Starts -->
<?= $this->section('navbar') ?>
<?= $this->include('pages/navbar.php'); ?>
<?= $this->endSection('navbar') ?>
<!-- Navbar Ends -->

<?= $this->section('mycontent') ?>
<div class="container">
    <input type="hidden" id="q_table" value="<?= $q_table ?>" />
    <?php
    $i = 0;
    $size = count($result);
    for ($i = 0; $i < $size; $i++) {
        $row = $result[$i];

    ?>
        <div class="ques_card pb-5 pt-2 mt-3" style="position:relative">
            <div id="<?= $row->ques_id ?>_overlay"></div>
            <img class="ques-loader d-none" src="<?= base_url() ?>/assets/img/quiz/loading.gif" alt="" id="<?= $row->ques_id ?>_loader" style="z-index:100;" />
            

            <div class="px-4 pb-2"> <span class="h2">Q. <?= $i + 1 ?></span> &nbsp; <b><?= $row->ques_text ?></b></div>
            <div class="ques-text px-4 mt-3"></div>

            <div class="ques-seperator"></div>

            <div class="text-center pb-2" id="<?= $row->ques_id ?>_reaction"></div>
            <div class="options px-4 ">

                <div class="row ">
                    <div onclick="option_selected(<?= $row->ques_id ?>,'ques_op1')" class="<?= $row->ques_id ?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id ?>ques_op1">
                        <b> A) </b> <?= $row->ques_op1 ?>
                    </div>
                    <div onclick="option_selected(<?= $row->ques_id ?>,'ques_op2')" class="<?= $row->ques_id ?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id ?>ques_op2">
                        <b> B) </b> <?= $row->ques_op2 ?>
                    </div>
                    <div onclick="option_selected(<?= $row->ques_id ?>,'ques_op3')" class="<?= $row->ques_id ?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id ?>ques_op3">
                        <b> C) </b> <?= $row->ques_op3 ?>
                    </div>
                    <div onclick="option_selected(<?= $row->ques_id ?>,'ques_op4')" class="<?= $row->ques_id ?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id ?>ques_op4">
                        <b> D) </b> <?= $row->ques_op4 ?>
                    </div>
                </div>

            </div>
        </div>

    <?php } ?>
</div>




<?= $this->endSection() ?>

<!-- Modal and Forms Starts-->
<?= $this->section('login_register_modal') ?>
<?= $this->include('pages/forms.php') ?>
<?= $this->endSection() ?>
<!-- Modal and Forms Starts-->

<!-- Footer Starts -->
<?= $this->section('footer') ?>
<?= $this->include('pages/footer.php'); ?>
<?= $this->endSection() ?>
<!-- Footer Ends -->