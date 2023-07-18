<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('userscontent') ?> 



<style>
   html {
	font-family: sans-serif;
	font-size: 16px;
  padding: 2em;
}

.input-switch{
	display: none;
}

.label-switch{
	display: inline-block;
	position: relative;
}

.label-switch::before, .label-switch::after{
	content: "";
	display: inline-block;
	cursor: pointer;
	transition: all 0.5s;
}

.label-switch::before {
    width: 3em;
    height: 1em;
    border: 1px solid #757575;
    border-radius: 4em;
    background: #888888;
}

.label-switch::after {
    position: absolute;
    left: 0;
    top: -20%;
    width: 1.5em;
    height: 1.5em;
    border: 1px solid #757575;
    border-radius: 4em;
    background: #ffffff;
}

.input-switch:checked ~ .label-switch::before {
    background: #00a900;
    border-color: #008e00;
}

.input-switch:checked ~ .label-switch::after {
    left: unset;
    right: 0;
    background: #00ce00;
    border-color: #009a00;
}

.info-text {
	display: inline-block;
}

.info-text::before{
	content: "Not active";
}

.input-switch:checked ~ .info-text::before{
	content: "Active";
}
</style>

<div class="p-3">
  <div class="dash-content">
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-auto">
            <div class="page-header-title">
              <h4 class="m-b-10"> Manage User</h4>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="https://demo.rajodiya.com/erpgo-saas/account-dashboard">Dashboard</a>
              </li>
              <li class="breadcrumb-item">User</li>
            </ul>
          </div> 

         <div class="col">
            <div class="float-end">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                <i class="ti ti-plus"></i>
              </button>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">Create</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" id="UserForm" action="" class="form-horizontal" role="form">
                        <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                          <span> <?= validation_show_error('name')?> </span>
                          <span style="color:red;" id="nameErr"></span>
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="">
                          <span> <?= validation_show_error('email')?> </span>
                          <span style="color:red;" id="emailErr"></span>
                        </div>
                        <div class="form-group">
                          <label for="pass">password:</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                          <span> <?= validation_show_error('password')?> </span>
                          <span style="color:red;" id="passwordErr"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




            <!-- Edit Users name email -->
            
              <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" id="updateUserForm" class="form-horizontal" role="form">
                      <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="nameInput" value="">
                      </div>
                      <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="emailInput" value="">
                      </div>
                      <input type="hidden" name="id" id="idInput" value="">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary savechanges" data-id="">Save Changes</button>
                  </div>
                </div>
              </div>
            </div>
          


            <!-- Edit Users Password -->

            <div class="modal fade" id="editresetModal" tabindex="-1" role="dialog" aria-labelledby="editresetModal Label" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="editModalLabel">Edit User Password</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <form method="POST" id="updatepassword" class="form-horizontal" role="form">
                              <div class="mb-3">
                                  <label for="passwordInput" class="form-label">Password</label>
                                  <input type="password" class="form-control" name="passwordInput" id="passwordInput">
                              </div>
                              <div class="mb-3">
                                  <label for="confirmInput" class="form-label">Confirm Password</label>
                                  <input type="password" class="form-control" name="confirmInput" id="confirmInput">
                              </div>
                              <input type="hidden" name="id" id="idpassword" value="">
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary saveChanges" data-id="">Save Change</button>
                      </div>
                  </div>
              </div>
          </div>
        

<!-- -------modal table---- -->

          <div class="modal fade" id="myplanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content" style="width:1000px">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Upgrade Plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                              <table class="table" id="tableContainer">
                                  <thead>
                                      <tr>
                                          <th>Plan Name (Price/Duration)</th>
                                          <th>Users</th>
                                          <th>Customers</th>
                                          <th>Vendors</th>
                                          <td>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  <?php foreach ($data1 as $tablevalue): ?>
                                    <tr>
                                    <td><?php echo $tablevalue['planname']; ?>($<?php echo $tablevalue['price']; ?>) / <?php echo $tablevalue['price']; ?></td>
                                          <td><?php echo $tablevalue['mxusers']; ?></td>
                                          <td><?php echo $tablevalue['mxcustomer']; ?></td>
                                          <td><?php echo $tablevalue['mxvendor']; ?></td>
                                        <td>
                                        <input class='input-switch switch' type="checkbox" value="<?= $tablevalue['id'] ?>" id ="<?= $tablevalue['id']?>" />
                                          <label class="label-switch" for="<?= $tablevalue['id'] ?>"></label>
                                          <span class="info-text"></span>
                                        </td>
                                    </tr>
                                  <?php endforeach; ?>
                                  <input type="hidden" id="userId" name="userid" value="" >
                                  </tbody>
                              </table>
                              </div>
                            </div>
                          </div>
                        </div>




 
        <div class="row">
        <?php foreach ($data as $value): ?>
            <div class="col-md-3 mb-4"> 
            
              <div class="card text-center card-2">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">
                      <div class="badge bg-primary p-2 px-3 rounded"> Company </div>
                    </h6>
                  </div>
                  <div class="card-header-right">
                  <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-id="<?= $value['id']; ?>" class="btn btn-primary edituser">
                  Action
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton <?= $value['id'] ?>">
                  <a class="dropdown-item editButton" hraf ="#!" data-id="<?= $value['id'] ?>"> Edit</a>
                  <a class="dropdown-item deleteButton" href="#!" data-id="<?= $value['id'] ?>">Delete</a>
                  <a class="dropdown-item resetButton" href="#!" data-id="<?= $value['id'] ?>" >Reset Password</a>
                </div>
                </div>
                </div>
                </div>
                <div class="card-body full-card">
                  <div class="img-fluid rounded-circle card-avatar">
                    <img src="https://demo.rajodiya.com/erpgo-saas/storage/uploads/avatar/user-8.jpg" class="img-user wid-80 round-img rounded-circle">
                  </div>
                  <h4 class="mt-3 text-primary"> <?php echo $value['name']; ?> </h4>
                  <small class="text-primary"> <?php echo $value['email']; ?> </small>
                  <p></p>
                  <div class="text-center" data-bs-toggle="tooltip" title="Last Login"> <?php echo $value['date']; ?> </div>
                  <div class="mt-4">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-6 text-center">
                        <span class="d-block font-bold mb-0"> </i> <?= isset($value['plan_into'][0]->planname) ? $value['plan_into'][0]->planname : '' ?> </span>
                      </div>

                      <div class="float-end">
                        <button type="button" class="btn btn-primary upgradePlanButton" data-id="<?= $value['id']; ?>" data-toggle="modal" >
                          Upgrade Plan
                        </button>
                        
                      </div>
                          
                      <div class="col-12">
                        <hr class="my-3">
                      </div>
                      <div class="col-12 text-center pb-2">
                        <span class="text-dark text-xs"> <?= isset($value['plan_into'][0]->duration) ? $value['plan_into'][0]->duration : '' ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-sm-12">
                      <div class="card mb-0">
                        <div class="card-body p-3">
                          <div class="row">
                            <div class="col-4">
                              <p class="text-muted text-sm mb-0" data-bs-toggle="tooltip" title="Users">
                                <i class="ti ti-users card-icon-text-space"></i> <?= isset($value['plan_into'][0]->mxusers) ? $value['plan_into'][0]->mxusers : '' ?>
                              </p>
                            </div>
                            <div class="col-4">
                              <p class="text-muted text-sm mb-0" data-bs-toggle="tooltip" title="Customers">
                                <i class="ti ti-users card-icon-text-space"></i><?= isset($value['plan_into'][0]->mxcustomer) ? $value['plan_into'][0]->mxcustomer : '' ?>
                              </p>
                            </div>
                            <div class="col-4">
                              <p class="text-muted text-sm mb-0" data-bs-toggle="tooltip" title="Vendors">
                                <i class="ti ti-users card-icon-text-space"></i><?= isset($value['plan_into'][0]->mxvendor) ? $value['plan_into'][0]->mxvendor : '' ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          <?php endforeach; ?> 
        </div>
      </div>
    </div>


<!-- ----upgrade Plan-------- -->

<!-- <script>
$(document).ready(function() {
   $('.upgradePlanButton').click(function() {
      var userId = $(this).data('id');
      $('#myplanModal').modal('show');
   });
});
</script> -->

<!-- ----upgrade Plan-------- -->
<script>
$(document).ready(function() {
   $('.upgradePlanButton').click(function() {
      var userId = $(this).data('id');
      $('#userId').val(userId);
      $('#myplanModal').modal('show');
   });

   $('.switch').click(function() {
    var id = $('#userId').val();
    var planid = $(this).val();

    // alert(planid);

        $.ajax({
        url:"<?php echo base_url('upgrade_user_plan') ?>",
        method: 'GET',
        data: {id,planid},
        dataType: "json",
        success: function(response) {
            if (response.status === 'success') {
              alert('Upgrade plan successful');
              window.location.reload();
            } else {
              alert('Upgrade plan failed');
            }
          }
        })
   });
});
</script>



<!-- -------delete Users------------- -->

<script>
$(document).ready(function() {
    $('.deleteButton').click(function(e) {
        e.preventDefault();

        var userId = $(this).data('id');
        $.ajax({
            url: "<?php echo base_url('delete_user/') ?>" + userId,
            type: "POST",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    window.location.reload();
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>


<!-- --------Add User------- -->

          <script>
            $(document).ready(function() {
              $('#UserForm').submit(function(e) {
                e.preventDefault();
                var nameErr = $('#nameErr');
                var emailErr = $('#emailErr');
                var passwordErr = $('#passwordErr');
                $.ajax({
                  url: " <?php echo base_url('add_users') ?> ",
                  type: "POST",
                  data: $('#UserForm').serialize(),
                  dataType: "json",
                  success: function(response) {
                    nameErr.text(response.name ? response.name.message : '');
                    emailErr.text(response.email ? response.email.message : '');
                    passwordErr.text(response.password ? response.password.message : '');
                    if (response.success) {
                      alert(response.success.message);
                      $('#UserForm')[0].reset();
                      window.location.reload();
                    }
                  }
                });
              });
            });
          </script>




          <!-- ---edit user name email---- -->

          <script>
    $(document).ready(function() {
        $('.editButton').click(function() {
            var editid = $(this).data('id');

            $.ajax({
                url: "<?php echo base_url('edit_user/') ?>" + editid,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    $('#nameInput').val(response.name);
                    $('#emailInput').val(response.email);
                    $('#idInput').val(response.id);
                    $('#editModal').modal('show');

                    console.log(response);
                }
            });
        });

        $('.savechanges').click(function() {
            var edituserid = $(this).data('id');
            console.log(edituserid);
            var name = $('#nameInput' + edituserid).val();
            var email = $('#emailInput' + edituserid).val();


            $.ajax({
                url: "<?php echo base_url('update_user/') ?>" + edituserid,
                type: "POST",
                data: { name: name, email: email },
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                        $('#editModal'+ edituserid).modal('hide');
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>
        


         <!-- ---edit user password---- -->


        <script>
            $(document).ready(function() {
              $('.resetButton').click(function() {
                var editpassid = $(this).data('id');
            $.ajax({
            url:"<?php echo base_url('edit_user_password/') ?>" + editpassid,
            type:"GET",
            dataType:"json",
            success: function(response) {

              $('#idpassword').val(response.id);
              $('#editresetModal').modal('show');
            
            console.log(response);
            }
            });
            });
              });
          </script>






        <script>
          $(document).ready(function() {
            $('.resetButton').click(function() {
                var editpassword = $(this).data('id');
                // $('#editresetModal').modal('show');

                $('.saveChanges').click(function() {
                    var password = $('#passwordInput' + editpassword).val();
                    var confirm = $('#confirmInput' + editpassword).val();

                    if (password !== confirm) {
                        alert('Password and confirm password do not match');
                        return;
                    }

                    var url = "<?php echo base_url('update_password/') ?>" + editpassword;
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: { password: password },
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                alert('Password reset successfully.');
                                $('#editresetModal' + editpassword).modal('hide');
                                window.location.reload();
                            } else {
                                alert(response.message);
                            }
                        }
                    });
                });
            });
          });
        </script>



<!-- -------upgrade plan ---------- -->

      <!-- <script>
          $(document).ready(function() {
            $('.upgradePlanButton').click(function() {
              var planData = <?php //echo json_encode($data); ?>;
              
              $('#planTableBody').empty();
              
              for (var i = 0; i < planData.length; i++) {
                var value = planData[i];
                var rowHtml = `
                  <tr>
                    <td>${value.plan_into[0].planname} ($${value.plan_into[0].price}) / ${value.plan_into[0].duration}</td>
                    <td>Users: ${value.plan_into[0].mxusers}</td>
                    <td>Customers: ${value.plan_into[0].mxcustomer}</td>
                    <td>Vendors: ${value.plan_into[0].mxvendor}</td>
                    <td>
                      <input class="input-switch" type="checkbox" id="demo${value.id}"/>
                      <label class="label-switch" for="demo${value.id}"></label>
                      <span class="info-text"></span>
                    </td>
                  </tr>
                `;
                $('#planTableBody').append(rowHtml);
              }
              
              $('#myplanModal').modal('show');
            });
          });
      </script> -->

      



<?= $this->endSection() ?>