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
        <h2 class="text-center">Add Test</h2>
        <form id="add_test_form">
            <div>
                <label for="" class="form-label">Select Exam</label>
                <select class="form-select" name="exam_id" required>
                    <option value="">Select Exam</option>
                    <?php 
                        foreach($exam_details as $exam){
                    ?>
                      <option value=<?=$exam->exam_id?>><?=$exam->exam_name?></option>
                      <?php  }?>
                </select>
            </div>
            <div>
                <label for="" class="form-label">Test Name</label>
                <input type="text" class="form-control" name="test_name">
            </div>
            <div>
                <label for="" class="form-label">Ques Table</label>
                <input type="text" class="form-control" name="ques_table">
            </div>
            <div>
                <label for="" class="form-label">Test Category</label>
                <select name="test_cat" class="form-select" required>
                        <option value="">Select Category</option>
                        <option value="year_wise">Year wise</option>
                        <option value="topic_wise">Topic wise</option>
                </select>
            </div>
            <div>
                <label for="" class="form-label">Test Order</label>
                <input type="text" class="form-control" name="test_order" required>
            </div>
            <div>
                <label for="" class="form-label">Test Pic</label>
                <input type="file" class="form-control" name="test_img">
            </div>

          
            <div>
                <label for="" class="form-label">Test Url</label>
                <input type="text" class="form-control" name="test_url" required>
            </div>
            <div>
                <label for="" class="form-label">Exam SEO Description</label>
                <input type="text" class="form-control" name="test_seo_des">
            </div>
            <div>
                <label for="" class="form-label">Exam SEO Keywords</label>
                <input type="text" class="form-control" name="test_seo_key">
            </div>
            <div class="d-grid mt-2 mb-5">
                 <button type="submit" class="btn btn-success" width="100%">Add Test</button>
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
        $('#add_test_form').submit(function(e){
            e.preventDefault();
            var form_data=new FormData(this);
            $.ajax({
                url:"<?=base_url()?>/admin/add_test_b",
                method:'post',
                data:form_data,
                success:function(data)
                {
                   console.log("Success...");
                   console.log(data);
                   alert('Test added successfully.....');
                   $("#add_test_form").trigger('reset');
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