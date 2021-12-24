<?=$this->extend('layouts/normal')?>

<?=$this->section('title')?>
    <?=$page_title?>
<?=$this->endSection()?>
    
 <!-- Navbar Starts -->
 <?=$this->section('navbar')?>
    <?php
     include('pages/navbar.php');
    ?>
 <?=$this->endSection('navbar')?>
 <!-- Navbar Ends -->

<?=$this->section('mycontent')?>


<img class="desktop_version" src="<?=base_url()?>/assets/img/banner/banner1_desktop.jpg" alt="" width="100%">
<img class="mobile_version" src="<?=base_url()?>/assets/img/banner/banner1_mobile.jpg" alt="" width="100%">

<!-- Banner Ends -->
<!-- ============================================== -->
<!-- Main Section Starts -->
<div class="container-fluid bg_color4 pb-5">
    <h1 class="txt_color1 text-center py-2">
        Git vs GitHub
    </h1>
    <div class="container">
        <img src="<?=base_url()?>/assets/img/blog/git_vs_github.png" alt="" width="100%">
        <h2>What is Git ?</h2>
        <p>Git is a free and Open Source version control system (VCS), a technology used to track older versions of files, providing the ability to roll back and maintain separate different versions at the same time.

            Git is a successor of SVN and CVS, two very popular version control systems of the past. First developed by Linus Torvalds (the creator of Linux), today is the go-to system that you can’t avoid if you make use of Open Source software.

            GitHub is a website that hosts billions of lines of code, and it’s where millions of developers gather every day to collaborate on and report issues with open-source software.

            In short, it’s a platform for software developers, and it’s built around Git.

            As a developer, you can’t avoid using GitHub or another Git-based tool on a daily basis as part of your work. It’s used to either host your code or to collaborate on other people’s code. This article explains some key concepts of GitHub, and how to use some of its features to improve your workflow.
        </p>
        <h2>Why GitHub?</h2>
        Now that you know what GitHub is, you might ask why you should use it.

        GitHub, after all, is managed by a private company, which profits from hosting people’s code. So why should you use that instead of similar platforms such as BitBucket or GitLab?

        Beside personal preferences and technical reasons, there is one big reason: everyone uses GitHub, so the network effect is huge.

        Major codebases have migrated over time from other version control systems to Git because of its convenience, and GitHub has been historically well positioned and put in a lot of effort to serve the needs of the Open Source community.

        So today, any time you look up some library, you will 99% of the time find it on GitHub.

        Apart from Open Source code, many developers also host private repositories on GitHub because of the convenience of the platform.

        Now let's get started on the important Git-specific concepts that a developer needs to know.
    </div>
</div>
<!-- Main Section Ends -->
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