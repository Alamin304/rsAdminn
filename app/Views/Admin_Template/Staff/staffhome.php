<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('staffhomecontent') ?>







    <style>
        #nameList {
            float: left;
            width: 30%;
            padding: 10px;
            border: 1px solid #ccc;
        }
        #content {
            float: left;
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>






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



    <div class="sidebar-header">
        <button type="button" class="btn btn-primary" id="openModalBtn">Add Staff</button>
    </div>
    <div id="nameList">
         <?php foreach ($data as $value): ?>
        <ul id="names">
            <li class="nameItem" data-id="<?= $value['id'] ?>"><strong><?php echo $value['Name']; ?></strong></li>
        </ul>
        <?php endforeach; ?>
    </div>
    <div id="content">
        <p id="selectedNameContent"> <input type="text" name="Id" id="idInput" value="">
        

        <form method="POST" id="staffupdateform" action="" class="form-horizontal" role="form">
                     <div class="form-group">
                        <label for="nameInput" class="col-md-4 control-label">Name:</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" name="name" id="name" value=""> </input>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="uri" class="col-md-4 control-label">Email:</label>
                        <div class="col-md-6">
                           <input type="text" class="form-control" name="email" id="email" value="" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="description" class="col-md-4 control-label">description:</label>
                        <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" ></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="uri" class="col-md-4 control-label">Phone:</label>
                        <div class="col-md-6">
                           <input type="text" id="phone" class="form-control" name="phone" value="" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-md-4 control-label">Address:</label>
                        <div class="col-md-6">
                           <input type="text" id="address" class="form-control" name="address" value="" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="city" class="col-md-4 control-label">City:</label>
                        <div class="col-md-6">
                           <input type="text" id="city" class="form-control" name="city" id="" value="" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="address" class="col-md-4 control-label">State:</label>
                        <div class="col-md-6">
                           <input type="text" id="state" class="form-control" name="state" value="" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="country" class="col-md-4 control-label">Country:</label>
                        <div class="col-md-6">
                           <input type="text" id="country" class="form-control" name="country" value="" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="zip" class="col-md-4 control-label">Zip:</label>
                        <div class="col-md-6">
                           <input type="text" id="zip" class="form-control" name="zip" value="" />
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="Booking" class="col-md-4 control-label">Booking:</label>
                        <div class="col-md-6">
                           <input type="checkbox" id ="booking" name="Booking" <?php echo $value['Booking'] ? 'checked' : ''; ?>>
                           <input type="hidden" name="status" value="0">
                        </div>
                     </div>
                     <div class="form-group">
                    <label for="Service" class="col-md-4 control-label">Service:</label>
                    <div class="col-md-6">
                    <select class="selectpicker" multiple data-live-search="true" id="service" name ="service">
                    <?php foreach ($data2 as $value2): ?>
                    <option value="<?php echo $value2['id']; ?>"><?php echo $value2['service_title']; ?></option>
                    <?php endforeach; ?>
                    </select>
                    </div>
                    </div>
                
                     <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary save">Save</button>
                        </div>
                     </div>
                     
                  </form>
                    </p>
                    </div>

    <div id="content">
        <p id="selectedNameContent"> <input type="text" name="Id" id="idInput" value="">

        <div class="table-responsive ser_staffpayment_append">
    <table id="staff-payments-details" class="display responsive nowrap table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Clint Name</th>
                <th>Staff Name</th>
                <th>Service Name</th>
                <th>Order Date</th>
                <th>Order Time</th>
                <th>Commission</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php foreach ($data1 as $value1): ?>
                <td>1</td>
                <td><?= $value1['client']?></td>
                <td><?= $value1['staff_name']?></td>
                <td><?= $value1['service_name']?></td>
                <td><?= $value1['order_date']?></td>
                <td><?= $value1['order_time']?></td>
                <td><?= $value1['commission_total']?></td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>
    </p>
    </div>










    <script>
        $(document).ready(function() {
            $('.nameItem').on('click', function() {
                var editid = $(this).data('id');
                console.log(editid);

                $.ajax({
                      url: "<?php echo base_url('edit_staff/') ?>" + editid,
                      type: "GET",
                      dataType: "json",
                      success: function(response) {
                          $('#name').val(response.Name);
                          $('#email').val(response.Email);
                          $('#description').val(response.description);
                          $('#phone').val(response.phone);
                          $('#address').val(response.address);
                          $('#city').val(response.city);
                          $('#state').val(response.state);
                          $('#country').val(response.country);
                          $('#zip').val(response.zip);
                        //   $('#booking').val(response.Booking);
                        //   $('#service').val(response.service_title);

                          $('#idInput').val(response.id);
                        //   $('#editModal').modal('show');
                      }
                  });
              });
              

              $('.save').click(function() {
                  var edituserid = $(this).data('id');
                  console.log(edituserid);
                  

                  $.ajax({
                      url: "<?php echo base_url('update_staff/') ?>" + edituserid,
                      type: "POST",
                      data:$(this).serialize(),
                      dataType: "json",
                      success: function(response) {
                          if (response.success) {
                              alert(response.message);
                              $('#editModal').modal('hide');
                              window.location.reload();
                          }
                      }
                  });
              });
            });
    
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
        
            });
        });
        </script>


   

            <script>
                $(document).ready(function() {
                $('#staffupdateform').submit(function(e) {e.preventDefault();
            $.ajax({
                url: "<?php echo base_url('update_staff/').$value['id']?>",
                type: "POST",
                data: $('#staffupdateform').serialize(),
                dataType: "json",
                success: function(response)
                {

                if (response.success) {
                alert(response.message);
                window.location.reload();
                
                        }
                }
                });
            });
            });
            </script>

               


<?= $this->endSection() ?>