<?=$this->extend('layouts/quiz')?>


 <!-- Navbar Starts -->
 <?=$this->section('navbar')?>
    <?php
     include('pages/navbar.php');
    ?>
 <?=$this->endSection('navbar')?>
 <!-- Navbar Ends -->

<?=$this->section('mycontent')?>
<div class="container">
    <?php
    $i = 0;
    $size=count($result);
    for ($i=0;$i<$size;$i++) {
        $row=$result[$i];
        
    ?>
        <div class="ques_card pb-5 pt-2 mt-3">
            
            <div class="px-4 pb-2"> <span class="h2">Q. <?= $i+1 ?></span> &nbsp; <b><?= $row->ques_text ?></b></div>
            <div class="ques-text px-4 mt-3"></div>

            <div class="ques-seperator"></div>
            
            <div class="text-center pb-2" id="<?= $row->ques_id?>_reaction"></div>
            <div class="options px-4">
                <div class="row ">
                    <div onclick="option_selected(<?= $row->ques_id?>,'ques_op1')" class="<?= $row->ques_id?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id?>ques_op1">
                        A. <?= $row->ques_op1?>
                    </div>
                    <div onclick="option_selected(<?= $row->ques_id?>,'ques_op2')" class="<?= $row->ques_id ?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id?>ques_op2">
                        B. <?= $row->ques_op2?>
                    </div>
                    <div onclick="option_selected(<?= $row->ques_id?>,'ques_op3')" class="<?= $row->ques_id?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id?>ques_op3">
                        C. <?= $row->ques_op3 ?>
                    </div>
                    <div onclick="option_selected(<?= $row->ques_id ?>,'ques_op4')" class="<?= $row->ques_id ?> col-md-5 me-3 mt-3 opt" id="<?= $row->ques_id ?>ques_op4">
                        D. <?= $row->ques_op4?>
                    </div>
                </div>

            </div>
        </div>

    <?php } ?>
</div>




<?=$this->endSection()?>

<!-- Modal and Forms Starts-->
<?=$this->section('login_register_modal')?>
   <?php
    include('pages/forms.php')
   ?>
<?=$this->endSection()?>
<!-- Modal and Forms Starts-->

<!-- Footer Starts -->
<?=$this->section('footer')?>
<?php
   include('pages/footer.php');
?>
<?=$this->endSection()?>    
<!-- Footer Ends -->