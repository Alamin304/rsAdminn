<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('staffhomecontent') ?>


<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Enter Name and Email</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="myForm">
                    <div class="form-group">
                        <label for="nameInput">Name:</label>
                        <input type="text" class="form-control" id="nameInput" name="name">
                        <span style="color:red;" id="nameErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Email:</label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                        <span style="color:red;" id="emailErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <span style="color:red;" id="passwordErr"></span>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>







<!-- Left Sidebar -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar bg-light">
            <div class="sidebar-header">
                <button type="button" class="btn btn-primary" id="openModalBtn">Add Staff</button>
            </div>
            <?php foreach ($data as $key => $value): ?>
              <?php  echo '<pre>';
              print_r ($key);
              die(); 
              ?>
            <ul class="list-unstyled staff-list">
                <li>
                    <a href="<?php echo base_url('staff_links/' . $value['id']); ?>">
                        <strong><?php echo $value['Name']; ?></strong>
                    </a>
                </li>
            </ul>
            <?php endforeach; ?>
            <div class="text-center mt-4"></div>
        </div>

     
        <div class="col-md-10">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ms-auto">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="">Staff Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Services Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Staff Availability</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>

<script>
$(document).ready(function() {

    $("#openModalBtn").click(function() {
        $("#myModal").modal("show");
    });


    $("#submitBtn").click(function() {
                var nameErr = $('#nameErr');
                var emailErr = $('#emailErr');
                var passwordErr = $('#passwordErr');
                var formData = $("#myForm").serialize();
                console.log(formData);
                $.ajax({
                  url: " <?php echo base_url('add_staff') ?> ",
                  type: 'POST',
                  data: formData,
                  dataType: "json",
                  success: function(response) {
                    nameErr.text(response.name ? response.name.message : '');
                    emailErr.text(response.email ? response.email.message : '');
                    passwordErr.text(response.password ? response.password.message : '');
                    if (response.success) {
                      alert(response.success.message);
                      $('#myForm')[0].reset();
                      window.location.reload();
                    }
                  }
                });
        

     
        // $("#myModal").modal("hide");
    });
});
</script>


<?= $this->endSection() ?>