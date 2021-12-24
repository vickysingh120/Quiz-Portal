<?= $this->extend('layouts/admin') ?>

<?= $this->section('title') ?>
<?= $page_title ?>
<?= $this->endSection() ?>

<!-- Navbar Starts -->
<?= $this->section('navbar') ?>

<?= $this->include('admin_components/navbar') ?>

<?= $this->endSection() ?>
<!-- Navbar Ends -->

<!-- ====================== -->
<!-- Main Content Starts-->
<?= $this->section('mycontent') ?>
<div class="container mt-4">
    <h2 class="text-center">Add Ques</h2>
    <form id="add_ques_form">
        <div>
            <label for="" class="form-label">Select Exam</label>
            <select class="form-select" name="exam_id" id="exam_id" required>
                <option value="">Select Exam</option>
                <?php
                foreach ($exam_details as $exam) {
                ?>
                    <option value=<?= $exam->exam_id ?>><?= $exam->exam_name ?></option>
                <?php  } ?>
            </select>
        </div>
        <div>
            <label for="" class="form-label">Select Test</label>
            <select class="form-select" name="test_id" id="test_id">
                <option value="">Select Test</option>
            </select>
        </div>
        <div>
            <input type="hidden" class="form-control" name="ques_table" id="ques_table">
        </div>

        <div>
            <label for="" class="form-label">Ques Text</label>
            <textarea class="form-control reset_after_submit mytextarea" name="ques_text" id="ques_text"></textarea>
        </div>
        <div>
            <label for="" class="form-label">Ques Image</label>
            <input type="file" class="form-control reset_after_submit" name="ques_img">
        </div>


        <div>
            <label for="" class="form-label">Option 1</label>
            <input type="text" class="form-control reset_after_submit" name="ques_op1" required>
        </div>
        <div>
            <label for="" class="form-label">Option 2</label>
            <input type="text" class="form-control reset_after_submit" name="ques_op2" required>
        </div>
        <div>
            <label for="" class="form-label">Option 3</label>
            <input type="text" class="form-control reset_after_submit" name="ques_op3" required>
        </div>
        <div>
            <label for="" class="form-label">Option 4</label>
            <input type="text" class="form-control reset_after_submit" name="ques_op4" required>
        </div>
        <div>
            <label for="" class="form-label">Answer</label>
            <input type="text" class="form-control reset_after_submit" name="ques_ans" required>
        </div>
        <div>
            <label for="" class="form-label">Ques Tags</label>
            <input type="text" class="form-control reset_after_submit" name="ques_tag">
        </div>

        <div class="d-grid mt-2 mb-5">
            <button type="submit" class="btn btn-success" width="100%">Add Ques</button>
        </div>

    </form>
</div>
<?= $this->endSection() ?>
<!-- Main Content Ends-->
<!-- ====================== -->

<!-- Footer Starts -->
<?= $this->section('footer') ?>
<?= $this->include('admin_components/footer') ?>
<?= $this->endSection() ?>
<!-- Footer Ends -->

<!-- script_for_adding_exam starts -->
<?= $this->section('script_for_adding_exam') ?>
<script>
    // fetch test on the basis of exam_id
    $('#exam_id').change(function() {
        var exam_id = $(this).val();
        if (exam_id == "" || exam_id == null) {
            console.log("Null value");
            $('#test_id').html("<option value=''>Select Test</option>");
        } else {
            console.log(exam_id);
            //    ajax call for fetching test ids
            $.ajax({
                url: "<?= base_url() ?>/admin/fetch_tests",
                method: 'post',
                data: {
                    exam_id: exam_id
                },
                success: function(data) {
                    console.log("Success...");
                    console.log(data);
                    var my_data = data.split("my_seperator12");
                    console.log(my_data);
                    $('#test_id').html(my_data[0]);
                    $('#ques_table').val(my_data[1]);
                    //    alert('Exam added successfully.....');
                    //    $("#add_ques_form").trigger('reset');
                },
                error: function(data) {
                    console.log("Error...");
                    console.log(data);
                }
            })
        }

    })
</script>
<script>
    $('#add_ques_form').submit(function(e) {
        e.preventDefault();
        var form_data = new FormData(this);
        var ques_text= tinymce.get("ques_text").getContent();
        console.log(ques_text);
        console.log(form_data.set("ques_text",ques_text));
        console.log(form_data.get("ques_text"));
    
        $.ajax({
            url: "<?= base_url() ?>/admin/add_ques_b",
            method: 'post',
            data: form_data,
            success: function(data) {
                console.log("Success...");
                console.log(data);
                alert('Ques added successfully.....');
                //    $("#add_ques_form:").trigger('reset');
                $('.reset_after_submit').val('');
            },
            error: function(data) {
                console.log("Error...");
                console.log(data);
            },
            cache: false,
            contentType: false,
            processData: false
        })
    })
</script>
<?= $this->endSection('script_for_adding_exam') ?>
<!-- script_for_adding_exam ends -->

<!-- Script for Tiny cloud editor box -->
<script>
    tinymce.init({
        selector: '.mytext_editor',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });
</script>