<?= $this->extend('layouts/test_layout') ?>

<!-- Page Title -->
<?= $this->section('page_title') ?>
<?= $page_title ?>
<?= $this->endSection() ?>

<!-- Page Description -->
<?= $this->section('page_des') ?>
<?= $page_des ?>
<?= $this->endSection() ?>

<!-- Page Keywords -->
<?= $this->section('page_key') ?>
<?= $page_key ?>
<?= $this->endSection() ?>

<!-- Navbar Starts -->
<?= $this->section('navbar') ?>
<?= $this->include('pages/navbar.php'); ?>
<?= $this->endSection('navbar') ?>
<!-- Navbar Ends -->

<?= $this->section('mycontent') ?>
<div class="container">
    <div class="row">
    <?php 
        foreach($all_tests as $test){
    ?>
        <div class="col-md-4 ">
            <div class="card mt-sm-3 mt-md-1">
                <img src="<?=base_url()?>/assets/img/blog/blog1.jpg" class="card-img-top" alt="..." width="100%">
                <div class="card-body">
                    <h5 class="card-title"><?=$test->test_name?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?= base_url('/test') ?>/<?= $exam_id?>/<?= $test->test_url ?>" class="btn btn-primary" target="_blank">Practice Test</a>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
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