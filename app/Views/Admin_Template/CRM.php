<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('CRMcontent') ?>





  <!-- ---for messages modal--- -->

  <div class="col">
            <div class="float-end">
              <div class="modal fade" id="mymessageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLabel">Create</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" id="MessageForm" action="" class="form-horizontal" enctype="multipart/form-data" role="form">
                        <div class="form-group">
                          <label for="Subject">Subject:</label>
                          <input type="text" name="Subject" class="form-control" id="Subject" placeholder="Write your Subject">
                          <span style="color:red;" id="SubjectErr"></span>
                        </div>
                        <div class="form-group">
                          <label for="Message">Message:</label>
                          <textarea type="text" name="Message" class="form-control" id="Message" placeholder="Write your Message" value=""></textarea>
                          <span style="color:red;" id="MessageErr"></span>
                        </div>
                        <div class="form-group">
                          <label for="Attachment">Add Attachment:</label>
                          <input type="file" name="Attachment" class="form-control" id="Attachment">
                          <span style="color:red;" id="AttachmentErr"></span>
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




  <div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="myForm">
                    <div class="form-group">
                        <label for="emailInput">Preferred Email Address:</label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                        <span style="color:red;" id="emailErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Preferred Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <span style="color:red;" id="passwordErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="nameInput">First Name:</label>
                        <input type="text" class="form-control" id="nameInput" name="firstname">
                        <span style="color:red;" id="nameErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="nameInput">Last Name:</label>
                        <input type="text" class="form-control" id="nameInput" name="lastname">
                        <span style="color:red;" id="lastnameErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                        <span style="color:red;" id="phoneErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="street">Street Address:</label>
                        <input type="text" class="form-control" id="street" name="street">
                        <span style="color:red;" id="streetErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code:</label>
                        <input type="text" class="form-control" id="zip" name="zip">
                        <span style="color:red;" id="zipErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city">
                        <span style="color:red;" id="cityErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" id="state" name="state">
                        <span style="color:red;" id="stateErr"></span>
                    </div>
                    <div class="form-group">
                        <label for="note">Special requests ( Notes ):</label>
                        <textarea type="text" class="form-control" id="note" name="note"></textarea>
                        <span style="color:red;" id="noteErr"></span>
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
    <button type="button" class="btn btn-primary" id="openModalBtn">New User</button>
    </div>
    <div class="table-responsive ser_staffpayment_append">   
    <table id="staffdetails" class="display responsive nowrap table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
             <th>Customer Name</th>
             <th>Email Address</th>
             <th>Phone</th>
             <th>Zip Code</th>
             <th>City</th>
             <th>State</th>
             <th>Date & Time</th>
             <th>Action</th>
         </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $value): ?>
            <tr>
            
                <td><?= $value['first_name']." " .$value['last_name'];?></td>
                <td><?= $value['preferred_email_address']?></td>
                <td><?= $value['phone']?></td>
                <td><?= $value['zip_code']?></td>
                <td><?= $value['city']?></td>
                <td><?= $value['state']?></td>
                <td><?= $value['date']?></td>
                <td>
                <a href="<?php echo base_url('edit_CRM/'. $value['id']); ?>" class="btn btn-warning btn-sm editbtn">
                  <i class="fa fa-pencil"></i> Edit
                </a>
                    <!-- <button class="btn btn-primary btn-sm">Edit</button> -->
                    
                <a href="#" class="btn btn-danger btn-sm Deletebtn" data-id="<?php echo $value['id']; ?>">
                  <i class="fa fa-trash"></i> Delete
                </a>
                    <!-- <button class="btn btn-danger btn-sm">Delete</button> -->
                </td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



        
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <select class="multiple" style="width:200px;" name="crmid[]" multiple="multiple">
                <?php foreach ($data as $value): ?>
                <option data-id="<?php echo $value['id']; ?>"><?php echo $value['first_name']." " .$value['last_name']; ?></option>
                <?php endforeach; ?>
                </select>
            
          
      <button type="button" class="btn btn-primary" id="openModal">Send Messages</button>
   
    <a href="<?php echo base_url('messages'); ?>" class="btn btn-primary" aria-expanded="false">
      <i class="fas fa-users"></i><span class="nav-text">All Messages</span>
    </a>
    </div>
        </div>
    </div>

<!-- <div class="row">
  <div class="col-md-6">
    <div class="sidebar-header">
      <button type="button" class="btn btn-primary" id="openModal">Send Messages</button>
    </div>
  </div>
  <div class="col-md-6">
    <a href="<?php //echo base_url('messages'); ?>" class="btn btn-primary" aria-expanded="false">
      <i class="fas fa-users"></i><span class="nav-text">All Messages</span>
    </a>
  </div>
</div>
</div> -->
               




<!-- <script>
        $(document).ready(function() {
            $('#service').selectpicker();
        });
    </script> -->

    <script type="text/javascript">
        $(document).ready(function() {
            $(".multiple").select2();
        });
    </script>
              
<!-- ---for Downloading table Data----- -->

        <script>
        $(document).ready(function() {
            $('#staffdetails').DataTable( {
            searching: true,
            info : true,
            paging: true,
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf'
            ]
        });
        });
        </script>



      <script>
        $(document).ready(function() {

            $("#openModalBtn").click(function() {
                $("#myModal").modal("show");
            });
        $("#submitBtn").click(function() {
                    
                    var emailErr = $('#emailErr');
                    var passwordErr = $('#passwordErr');
                    var nameErr = $('#nameErr');
                    var lastnameErr = $('#lastnameErr');
                    var phoneErr = $('#phoneErr');
                    var streetErr = $('#streetErr');
                    var zipErr = $('#zipErr');
                    var cityErr = $('#cityErr');
                    var stateErr = $('#stateErr');
                    var noteErr = $('#noteErr');
                    var formData = $("#myForm").serialize();
                    console.log(formData);
                        $.ajax({
                        url: " <?php echo base_url('add_CRM') ?> ",
                        type: 'POST',
                        data: formData,
                        dataType: "json",
                        success: function(response) {
                            
                            emailErr.text(response.email ? response.email.message : '');
                            passwordErr.text(response.password ? response.password.message : '');
                            nameErr.text(response.firstname ? response.firstname.message : '');
                            lastnameErr.text(response.lastname ? response.lastname.message : '');
                            phoneErr.text(response.phone ? response.phone.message : '');
                            streetErr.text(response.street ? response.street.message : '');
                            zipErr.text(response.zip ? response.zip.message : '');
                            cityErr.text(response.city ? response.city.message : '');
                            stateErr.text(response.state ? response.state.message : '');
                            noteErr.text(response.note ? response.note.message : '');

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
            $('.Deletebtn').click(function(e) {
                e.preventDefault();

                var CRMId = $(this).data('id');
                // var deleteBtn = $(this);
                $.ajax({
                    url: "<?php echo base_url('delete_CRM/') ?>" + CRMId,
                    type: "POST",
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            window.location.reload();
                            // deleteBtn.closest('tr').remove();
                        } else {
                            alert(response.message);
                        }
                    },
                });
            });
        });
        </script>


   <!-- ---For send Messages--- -->




   <!-- <script>
      $(document).ready(function() {
          $('.multiple').on('change', function() {
              var selectedIds = $(this).find('option:selected').map(function() {
                  return $(this).data('id');
              }).get();
              console.log(selectedIds);
          });
      });
    </script> -->


    <script>
    $(document).ready(function() {
        $('.multiple').on('change', function() {
            var crmids = $(this).find('option:selected').map(function() {
                return $(this).data('id');
            }).get();
            console.log(crmids);
        });

        $("#openModal").click(function() {
            $("#mymessageModal").modal("show");
        });

        $('#MessageForm').submit(function(e) {
            e.preventDefault();

            var SubjectErr = $('#SubjectErr');
            var MessageErr = $('#MessageErr');
            // var AttachmentErr = $('#AttachmentErr');

            var crmids = $('.multiple').find('option:selected').map(function() {
                return $(this).data('id');
            }).get();
            console.log(crmids);

            var formData = new FormData($('#MessageForm')[0]);
            crmids.forEach(function(id) {
                formData.append('crm_id[]', id);
            });

            $.ajax({
                url: "<?php echo base_url('add_Messages') ?>",
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "json",
                success: function(response) {
                    SubjectErr.text(response.Subject ? response.Subject.message : '');
                    MessageErr.text(response.Message ? response.Message.message : '');
                    // AttachmentErr.text(response.Attachment ? response.Attachment.message : '');
                    if (response.success) {
                        alert(response.success.message);
                        $('#MessageForm')[0].reset();
                        window.location.reload();
                    }
                }
            });
        });
    });
</script>






<?= $this->endSection() ?>