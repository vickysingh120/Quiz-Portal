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
    <div class="container">
        <h2 class="text-center">Add Exam</h2>
        <form id="add_exam_form">
            <div>
                <label for="" class="form-label">Exam Name</label>
                <input type="text" class="form-control" name="exam_name" required>
            </div>
            <div>
                <label for="" class="form-label">Exam Order</label>
                <input type="text" class="form-control" name="exam_order" required>
            </div>
            <div>
                <label for="" class="form-label">Exam Pic</label>
                <input type="file" class="form-control" name="exam_pic">
            </div>
            
            <div>
                <label for="" class="form-label">Test Table</label>
                <input type="text" class="form-control" name="test_table" required>
            </div>
            <div>
                <label for="" class="form-label">Ques Table</label>
                <input type="text" class="form-control" name="ques_table" required>
            </div>
          
            <div>
                <label for="" class="form-label">Exam Url</label>
                <input type="text" class="form-control" name="exam_url" required>
            </div>
            <div>
                <label for="" class="form-label">Exam SEO Description</label>
                <input type="text" class="form-control" name="exam_seo_des">
            </div>
            <div>
                <label for="" class="form-label">Exam SEO Keywords</label>
                <input type="text" class="form-control" name="exam_seo_key">
            </div>
            <div class="d-grid mt-2 mb-5">
                 <button type="submit" class="btn btn-success" width="100%">Add Exam</button>
            </div>

        </form>
    </div>
  <?=$this->endSection()?>
  <!-- Main Content Ends-->
 <!-- ====================== -->

 <!-- Footer Starts -->
 <?=$this->section('footer')?>
    <?=$this->include('admin_components/footer')?>
 <?=$this->endSection()?>
 <!-- Footer Ends -->

 <!-- script_for_adding_exam starts -->
 <?=$this->section('script_for_adding_exam')?>
    <script>
        $('#add_exam_form').submit(function(e){
            e.preventDefault();
            var form_data=new FormData(this);
            $.ajax({
                url:"<?=base_url()?>/admin/add_exam_b",
                method:'post',
                data:form_data,
                success:function(data)
                {
                   console.log("Success...");
                   console.log(data);
                   alert('Exam added successfully.....');
                   $("#add_exam_form").trigger('reset');
                },
                error:function(data)
                {
                   console.log("Error...");
                   console.log(data);
                },
                cache:false,
                contentType:false,
                processData:false
            })
        })
    </script>
 <?=$this->endSection('script_for_adding_exam')?>
 <!-- script_for_adding_exam ends -->