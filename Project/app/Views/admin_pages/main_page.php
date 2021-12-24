<?=$this->extend('layouts/admin')?>

<?=$this->section('title')?>
<?=$page_title?>
<?=$this->endSection()?>

 <!-- Navbar Starts -->
<?=$this->section('navbar')?>

<?=$this->include('admin_components/navbar')?>

<?=$this->endSection()?>
 <!-- Navbar Ends -->

 <!-- ====================== -->
  <!-- Main Content Starts-->
  <?=$this->section('mycontent')?>
 <h1>This is admin main page</h1>



  <?=$this->endSection()?>
  <!-- Main Content Ends-->
 <!-- ====================== -->

 <!-- Footer Starts -->
 <?=$this->section('footer')?>
    <?=$this->include('admin_components/footer')?>
 <?=$this->endSection()?>
 <!-- Footer Ends -->