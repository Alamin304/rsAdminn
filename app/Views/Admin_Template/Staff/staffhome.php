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
        .nameItem.active{
            background: red;
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
<h3>Staff Members<span>(<?= $totalCountStaff ?>)</span>
        <button type="button" class="btn btn-primary" id="openModalBtn">Add Staff</button>
    </div>
    <div id="nameList">
    <ul id="names">
    <?php foreach ($data as $value): ?>
        <li class="nameItem d-flex align-items-center mb-2" data-id="<?= $value['id'] ?>">
            <div class="d-flex align-items-center">
                <?php
                $staff_image = $value['staff_image'];
                $default_image = 'staff/default.jpg';
                ?>
                <img style="width:40px; height:40px; border-radius:50%; margin-right:20px;" src="<?= empty($staff_image) ? $default_image : base_url('staff/' . $staff_image) ?>" alt="no images">
                <strong><?php echo $value['Name']; ?></strong>
            </div>
            <a class="deleteButton ms-auto" href="#!" data-id="<?= $value['id'] ?>">Delete</a>
        </li>
    <?php endforeach; ?>
    </ul>
    </div>
    <div id="content">
        <ul class="nav nav-tabs mt-3" id="myTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="staffInfoTab" data-bs-toggle="tab" href="#staffInfo" role="tab" aria-controls="staffInfo" aria-selected="true">Staff Information</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="staffPaymentsTab" data-bs-toggle="tab" href="#staffPayments" role="tab" aria-controls="staffPayments" aria-selected="false">Service Details</a>
            </li>
        </ul>


        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="staffInfo" role="tabpanel" aria-labelledby="staffInfoTab">
                <input type="text" name="Id" id="idInput" value="">
                <form method="POST" id="staffupdateform" action="" class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="staffImageInput">Staff Image:</label>
                <div class="col-md-6">
                    <input type="file" class="form-control-file" id="staffImageInput" name="staffImage">
                    <img id="staffphoto" style="width:40px; height:40px; border-radius:50%; margin-right:20px;" alt="no images">
                </div>
                </div>
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
                           <!-- <input type="checkbox" id ="booking" name="Booking" <?php //echo $value['Booking'] ? 'checked' : ''; ?>> -->
                           <input type="checkbox" id="booking" name="Booking" <?php echo $value['Booking'] == 1 ? 'checked' : ''; ?>>

                           <!-- <input type="checkbox" id ="booking" name="Booking" <?php //($value['Booking']) ? 'checked' : ''; ?>> -->
                           <!-- <input type="hidden" name="Booking" value="0"> -->
                        </div>
                     </div>
                     <div class="form-group">
                    <label for="Service" class="col-md-4 control-label">Service:</label>
                    <div class="col-md-6">
                    <select class="selectpicker" style="width:200px;" multiple data-live-search="true" id="service" name ="service[]">
                    <?php foreach ($data2 as $value2): ?>
                    <option selected value="<?php echo $value2['id']; ?>"><?php echo $value2['service_title']; ?></option>
                    <?php endforeach; ?>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" name="submit" data-id="" id="submit" class="btn btn-primary save">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="staffPayments" role="tabpanel" aria-labelledby="staffPaymentsTab">
            
                <div class="table-responsive ser_staffpayment_append">
                    <table id="staff-payments-details" class="display responsive nowrap table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Clint Name</th>
                                <th>Staff Name</th>
                                <th>Service Name</th>
                                <th>Order Date</th>
                                <th>Order Time</th>
                                <th>Commission</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data1 as $value1): ?>
                                <tr>
                                    <td><?= $value1['id']?></td>
                                    <td><?= $value1['client']?></td>
                                    <td><?= $value1['staff_name']?></td>
                                    <td><?= $value1['service_name']?></td>
                                    <td><?= $value1['order_date']?></td>
                                    <td><?= $value1['order_time']?></td>
                                    <td><?= $value1['commission_total']?></td>
                                    <td>
                                       
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    


    <script type="text/javascript">
        $(document).ready(function() {
            $(".selectpicker").select2();
        });
    </script>

<!-- ---for delete--- -->


<script>
  var BASE_URL = "<?php echo base_url(); ?>";
</script>


<script>
$(document).ready(function() {
    $('.deleteButton').click(function(e) {
        e.preventDefault();
        var staffId = $(this).data('id');
        console.log (staffId);
        $.ajax({
            url: "<?php echo base_url('delete_staff/') ?>" + staffId,
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
           
        });
    });
});
</script>



    <script>
        $(document).ready(function() {
           var listid = $('#nameList ul li:first-child').attr('data-id');
        //    console.log(listid);
          localStorage.setItem("staffff_id", listid);
        var dd = localStorage.getItem('staffff_id');
        $('#submit').attr('data-id',dd);
         
        //    console.log(123)
        //    alert(listid);
        
                $.ajax({
                      url: "<?php echo base_url('edit_staff/') ?>" + listid,
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
                          if (response.Booking == 1) {
                                $('#booking').prop('checked', true);
                            } else {
                                $('#booking').prop('checked', false);
                            }
                        //   $('#service').val(response.service);

                          $('#idInput').val(response.id);

                          var imageUrl = BASE_URL + 'staff/' + response.staff_image;
                           console.log(response.staff_image);
                            $('#staffphoto').attr('src', imageUrl);
                            console.log(BASE_URL + 'staff/');
                      }
                  });
            

            $('.nameItem').on('click', function() {
                var editid = $(this).data('id');
                // alert(editid);
                console.log(editid);
                localStorage.setItem("staffff_id", editid);
                $('.save').attr('data-id',editid)

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
                          if (response.Booking == 1) {
                                $('#booking').prop('checked', true);
                            } else {
                                $('#booking').prop('checked', false);
                            }
                         //   $('#booking').val(response.Booking);
                        //   $('#service').val(response.service);

                          $('#idInput').val(response.id);

                          var imageUrl = BASE_URL + 'staff/' + response.staff_image;
                           console.log(response.staff_image);
                            $('#staffphoto').attr('src', imageUrl);
                            console.log(BASE_URL + 'staff/');
                        
                      }
                  });
              });
              

              $('.save').click(function() {
                  var edituserid = $(this).attr('data-id');
                  window.localStorage.clear();
                  localStorage.setItem("update_id", edituserid);
                  alert(edituserid);
                  console.log(edituserid);
                //   return false;
                  
                  var formData = new FormData($('#staffupdateform')[0]);
                  $.ajax({
                      url: "<?php echo base_url('update_staff/') ?>" + edituserid,
                      type: "POST",
                      data:formData,
                      processData: false,
                      contentType: false,
                      dataType: "json",
                      success: function(response) {
                          if (response.success) {
                              alert(response.message);
                            //   $('#editModal').modal('hide');
                              window.location.reload();
                          }
                      }
                  });
               
               
              });
            });
            var abc = localStorage.getItem('update_id');
            console.log(abc);
            $('#names li').each(function() {
                // Get the value of the data-id attribute for the current element
                var dataIdValue = $(this).attr('data-id');

                // Check if the data-id value matches the target value
                if (dataIdValue === abc) {
                // If it matches, trigger an alert
               
                alert("Match found for data-id: " + abc);
                $(this).addClass('active');
                $(this).trigger("click");
               
                $.ajax({
                      url: "<?php echo base_url('edit_staff/') ?>" + abc,
                      type: "GET",
                      dataType: "json",
                      success: function(response) {
                        alert(abc);
                        // alert( $('#city').val());
                          $('#name').val(response.Name);
                          $('#email').val(response.Email);
                          $('#description').val(response.description);
                          $('#phone').val(response.phone);
                          $('#address').val(response.address);
                          $('#city').val(response.city);
                          $('#state').val(response.state);
                          $('#country').val(response.country);
                          $('#zip').val(response.zip);
                          if (response.Booking == 1) {
                                $('#booking').prop('checked', true);
                            } else {
                                $('#booking').prop('checked', false);
                            }
                        //   $('#service').val(response.service);

                          $('#idInput').val(response.id);

                          var imageUrl = BASE_URL + 'staff/' + response.staff_image;
                           console.log(response.staff_image);
                            $('#staffphoto').attr('src', imageUrl);
                            console.log(BASE_URL + 'staff/');
                      }
                  });
                }
            });
          // $("li").find(`[data-id='${abc}']`);
            $('#idInput').val(abc);
         
    </script>



           <script>
                $(document).ready(function() {

                $('.selectpicker').on('change', function() {
                var crmids = $(this).find('option:selected').map(function() {
                return $(this).data('id');
                }).get();
                console.log(crmids);
                });

                $('#staffupdateform').submit(function(e) {e.preventDefault();

                var crmids = $('.selectpicker').find('option:selected').map(function() {
                return $(this).data('id');
                }).get();
                console.log(crmids);

                var formData = $('#staffupdateform').serialize();
                crmids.forEach(function(id) {
                formData.append('service[]', id);
                });


            $.ajax({
                url: "<?php echo base_url('update_staff/') ?>" + edituserid,
                type: "POST",
                // data: $('#staffupdateform').serialize(),
                data:formData,
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


   

        

               


<?= $this->endSection() ?>