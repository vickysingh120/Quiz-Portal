<?= $this->extend("layouts/normal.php") ?>

<?= $this->section('title') ?>
<?= $page_title ?>
<?= $this->endSection() ?>

<!-- Navbar Starts -->
<?= $this->section('navbar') ?>
<?php
include('pages/navbar.php');
?>
<?= $this->endSection('navbar') ?>
<!-- Navbar Ends -->


<!-- ===================================    -->
<!-- Main Content Starts -->
<?= $this->section('mycontent') ?>
<?= $this->include('pages/carousel') ?>
<!-- Blog Section Starts -->

<!-- include('pages/blog_section.php'); -->

<!-- Blog Section Ends -->

<!-- Quiz Section Starts -->

<!-- Quiz Section Ends -->

<!-- All Test Section Starts -->
<?php
foreach ($exams as $exam) {
?>
   <div class="container-fluid bg_color4 ">
      <h1 class="txt_color1 text-center py-2">
         <?= $exam['exam_name'] ?>
      </h1>
   </div>
   <div class="container my-3">
      <div class="d-grid">
         <a href="<?= base_url() ?>/exam/<?= $exam['exam_url'] ?>" class="btn btn-warning" style="text-decoration:none;">
            Explore all Tests...
         </a>
      </div>



      <div class="row">
         <!-- card starts -->
         <?php
         foreach ($exam['tests'] as $test) {
         ?>
            <div class="col-md-4 ">
               <div class="card mt-sm-3 mt-md-1">
                  <img src="assets/img/blog/blog1.jpg" class="card-img-top" alt="..." width="100%">
                  <div class="card-body">
                     <h5 class="card-title"><?=$test->test_name?></h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="<?=base_url('/test')?>/<?=$exam['exam_id']?>/<?=$test->test_url?>" class="btn btn-primary" target="_blank">Practice Test</a>
                  </div>
               </div>
            </div>
         <?php } ?>
         <!-- card ends -->
      
         <!-- -------------- -->
      </div>
   </div>
<?php } ?>
<!-- All Test Section Ends -->

<?= $this->endSection() ?>
<!-- Main Content Ends -->

<!-- Modal and Forms Starts-->
<?= $this->section('login_register_modal') ?>
<?php
include('pages/forms.php')
?>
<?= $this->endSection() ?>
<!-- Modal and Forms Starts-->

<!-- Footer Starts -->
<?= $this->section('footer') ?>
<?php
include('pages/footer.php');
?>
<?= $this->endSection() ?>
<!-- Footer Ends -->