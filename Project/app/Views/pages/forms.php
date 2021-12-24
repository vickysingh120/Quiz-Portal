<!-- Register Modal Starts -->
<div class="modal fade" id="register_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg_color3">
        <h5 class="modal-title" id="exampleModalLabel">Register Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="register_form">
            <div>
                <label for="user_name" class="form-label">Name</label>
                <input type="text" class="form-control" name="user_name" placeholder="Your Name" required>
            </div>
            <div>
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="user_email" placeholder="Your Email Id" required>
            </div>
            <div>
                <label for="" class="form-label">Mobile</label>
                <input type="number" class="form-control" name="user_mobile" placeholder="Your Mobile No." required>
            </div>
            <div>
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="user_password">
            </div>
            <div class="mt-2">
                <button class="btn btn-success" type="submit">Register</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Register Modal Ends -->


<!-- Login Modal Starts -->
<div class="modal fade" id="login_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg_color3">
        <h5 class="modal-title" id="">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger d-none" id="login_msg"> Invalid Credentials</div>
         <form action="" method="post" id="login_form">
            <div>
                <label for="" class="form-label">Email Id</label>
                <input type="text" class="form-control" name="user_email" placeholder="abc@examppl.com" required>
            </div>
            <div>
                <label for="" class="form-label">Your Password</label>
                <input type="password" class="form-control" name="user_password" required>
            </div>
            <div class="mt-2">
                <button class="btn btn-success" type="submit">Login</button>
            </div>
         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Login Modal Ends -->