<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('servicescontent') ?> 

<!-- ------list css---- -->
<style>
  .color-badge {
    display: inline-block;
    width: 15px;
    height: 15px;
    border-radius: 10%;
    margin-right: 5px;
  }

  html {
  scroll-behavior: smooth;
}

</style>




<!-- ------Add services modal form------ -->




<a href="#serviceForm" id="addServiceBtn" class="btn btn-primary"><i class="fa fa-plus"></i>Add Services</a>

<!-- Modal -->


<!-- -----Modal for editing Services------ -->

<!-- <div class="modal fade" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> -->
        <!-- Add your form fields here for editing the service -->
        <!-- <input type="text" name="hideid" id="idInput" value="">
        <form id="serviceEditForm" method="POST" action="" enctype="multipart/form-data" role="form">
          <div class="form-group">
            
            <div class="theme-color themes-color" id="themeColorSetting">
            <label for="colorTagInput">Color Tag:</label>
                  <input type="color" id="favcolor" name="color_setting" value="" ><br><br>
                  <input type="text" id="colorValue"  class="form-control" name="color_setting" >
                  <span style="color:red;" id="colorErr"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="serviceTitleInput">Service Title:</label>
            <input type="text" class="form-control" id="serviceTitleInput" name="serviceTitle" value="" >
            <span style="color:red;" id="titleErr"></span>
          </div>
          <div class="form-group">
            <label for="serviceDescriptionInput">Service Description:</label>
            <textarea class="form-control" id="serviceDescriptionInput" name="serviceDescription" value="" ></textarea>
            <span style="color:red;" id="desErr"></span>
          </div>
          <div class="form-group">
            <label for="serviceImageInput">Service Image:</label>
            
            <input type="file" class="form-control-file" id="serviceImageInput" name="serviceImage" value="">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary updatechange" data-id="">Save Changes</button>
      </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary updatechange" data-id="">Save Changes</button>
      </div>
    </div>
  </div>
</div> -->



<div class="tab-content ct-clean-services-right-details">
  <div class="tab-pane active col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-bordered" id="tableid">
        <thead>
          <tr>
            <th>Service</th>
            <th>Actions</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $value): ?>
     
          <tr>
            <td>
            
              <div class="service-info">
                <span class="color-badge" style="background-color: <?php echo $value['color_tag']; ?>"></span>
                
                <span class="service-title"><?php echo $value['service_title']; ?> </span>
              </div>
            </td>
            <td>
              <div class="actions">
                <a href="<?php echo base_url('service_pricing/' . $value['id']); ?>" class="btn btn-primary btn-sm">
                  <i class="fa fa-calculator"></i> Pricing
                </a>
                  <a href="<?php echo base_url('addons_service/' . $value['id']); ?>" class="btn btn-primary btn-sm">
                  <i class="fa fa-puzzle-piece"></i> Add-ons
                </a>
              </div>
            </td>
            <td>
              <div class="status">
              <label class="toggle-switch">
              <input type="checkbox" class="myservice_status" name="status" data-id="<?php echo $value['id']; ?>" value="1" <?php echo $value['status'] ? 'checked' : ''; ?>>
              <input type="hidden" name="status" value="0"> 
              <span class="toggle-slider"></span>
              </label>
              </div>
            </td>
            <td>
              <div class="edit">
              <a href="#" class="btn btn-warning btn-sm editbtn" data-id="<?php echo $value['id']; ?>">
                  <i class="fa fa-pencil"></i> Edit
                </a>
              </div>
            </td>
            <td>
              <div class="delete">
                <a href="#" class="btn btn-danger btn-sm Deletebtn" data-id="<?php echo $value['id']; ?>">
                  <i class="fa fa-trash"></i> Delete
                </a>
              </div>
             
            </td>
            
          </tr>
        
        <?php endforeach; ?>
        </tbody>
      </table>
      <div>
      <form id="serviceForm" method="POST" action="" enctype="multipart/form-data" role="form">
          <div class="form-group">
            
            <div class="theme-color themes-color" id="themeColorSetting">
            <label for="colorTagInput">Color Tag:</label>
                  <input type="color" id="favcolor" name="color_setting" ><br><br>
                  <!-- <input type="text" id="colorValue"  class="form-control" name="color_setting" > -->
                  <span style="color:red;" id="colorErr"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="serviceTitleInput">Service Title:</label>
            <input type="text" class="form-control" id="serviceTitleInput" name="serviceTitle">
            <span style="color:red;" id="titleErr"></span>
          </div>
          <div class="form-group">
            <label for="serviceDescriptionInput">Service Description:</label>
            <textarea class="form-control" id="serviceDescriptionInput" name="serviceDescription"></textarea>
            <span style="color:red;" id="desErr"></span>
          </div>
          <div class="form-group">
            <label for="serviceImageInput">Service Image:</label>
            <input type="file" class="form-control-file" id="serviceImageInput" name="serviceImage">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary savechange" data-id="">Add</button>
      </div>
        </form>
        
      </div>
    </div>
  </div>
</div>








<!-- ---Add services--- -->

<script>
  $(document).ready(function() {
    $('#serviceForm').hide();
    $('#addServiceBtn').click(function() {

    $('#serviceForm').show();
    });
    // $('#favcolor').change(function() {
    //               var selectedColor = $(this).val();
    //               console.log('Selected color:', selectedColor);
    //               $('#colorValue').val(selectedColor);
    //             });

    
      $("body").delegate(".savechange", "click", function(){
      var colorErr = $('#colorErr');
      var titleErr = $('#titleErr');
      var desErr = $('#desErr');

      $.ajax({
            url: '<?php echo base_url('add_services') ?>',
            type: "POST",
            processData: false,
            contentType: false,
            data: new FormData($('#serviceForm')[0]),
            dataType: "json",
            success: function(response) {
              colorErr.text(response.color_setting ? response.color_setting.message : '');
              titleErr.text(response.serviceTitle ? response.serviceTitle.message : '');
                // imageErr.text(response.image ? response.image.message : '');
                desErr.text(response.serviceDescription ? response.serviceDescription.message : '');
                

                if (response.success) {
                alert(response.success.message);
                $('#serviceForm')[0].reset();
                window.location.reload();
                }
            }
            });
          });
        });
  </script>


          <!-- ----Edit services--- -->

          <script>
            $(document).ready(function() {
              
              $('.editbtn').click(function() {
                // alert('abc');
              $('#tableid tr').remove('.editform')
                $(this).parent().parent().parent().after('<tr class="editform" ><td><input type="text" name="hideid" id="idInput" value=""> <form id="serviceEditForm" method="POST" action="" enctype="multipart/form-data" role="form"> <div class="form-group"> <div class="theme-color themes-color" id="themeColorSetting"> <label for="colorTagInput">Color Tag:</label> <input type="color" id="favcolor" name="color_setting" value="" ><br><br> <span style="color:red;" id="colorErr"></span> </div> </div> <div class="form-group"> <label for="serviceTitleInput">Service Title:</label> <input type="text" class="form-control" id="serviceTitleInput" name="serviceTitle" value="" > <span style="color:red;" id="titleErr"></span> </div> <div class="form-group"> <label for="serviceDescriptionInput">Service Description:</label> <textarea class="form-control" id="serviceDescriptionInput" name="serviceDescription" value="" ></textarea> <span style="color:red;" id="desErr"></span> </div> <div class="form-group"> <label for="serviceImageInput">Service Image:</label> <input type="file" class="form-control-file" id="serviceImageInput" name="serviceImage" value=""> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary serviceupdate" data-id="">Save Changes</button> </div> </form></td></tr>');
              });
            $('.editbtn').click(function() {
              var serviceId = $(this).data('id');
              console.log(serviceId);
              // $('.serviceupdate').data('id', serviceId);
              
              $.ajax({
                      url: "<?php echo base_url('edit_services/') ?>" + serviceId,
                      type: "GET",
                      dataType: "json",
                      processData: false,
                      contentType: false,
                      success: function(response) {
                          $('#favcolor').val(response.color_tag);
                          $('#serviceTitleInput').val(response.service_title);
                          $('#serviceDescriptionInput').val(response.service_description);
                          // $('#serviceImageInput').val(response.service_image);
                          $('#idInput').val(response.id);
                          // $('#editServiceModal').modal('show');
                      }
                  }); 
               });
            
                  $('.serviceupdate').click(function() {
                    // alert('abc');
                    var editserviceid = $(this).data('id');
                    console.log(editserviceid);
                    var color = $('#favcolor').val();
                    var title = $('#serviceTitleInput').val();
                    var desc = $('#serviceDescriptionInput').val();
                    var img = $('#serviceImageInput').val();
                  
                    $.ajax({
                      url: "<?php echo base_url('update_service/') ?>" + editserviceid,
                      type: "POST",
                      data: { color_tag: color, service_title: title, service_description: description },
                      dataType: "json",
                      processData: false,
                      contentType: false,
                      success: function(response) {
                        if (response.success) {
                          alert(response.message);
                          $('#editServiceModal').modal('hide');
                          window.location.reload();
                                }
                            }
                        });
                  });
                });
                </script>





        <!-- -------delete services------------- -->

    <script>
      $(document).ready(function() {
          $('.Deletebtn').click(function(e) {
              e.preventDefault();

              var serviceId = $(this).data('id');
              var deleteBtn = $(this);
              $.ajax({
                  url: "<?php echo base_url('delete_services/') ?>" + serviceId,
                  type: "POST",
                  dataType: "json",
                  success: function(response) {
                      if (response.success) {
                          alert(response.message);
                          deleteBtn.closest('tr').remove();
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



<script>
    $(document).ready(function() {
        

        $("body").delegate(".myservice_status", "change", function() {
            var checkbox = $(this);
            var isChecked = checkbox.prop('checked') ? 1 : 0;
            var statusMsg = isChecked ? 'Enabled' : 'Disabled';
            $.ajax({
                url: "<?php echo base_url('update_services_status/') ?>" + checkbox.data('id'), 
                type: "POST",
                data: {
                    status: isChecked,
                },
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        alert('Status updated: ' + statusMsg);
                    } else {
                        alert('Failed to update status.');
                    }
                }
            });
        });
    });
</script>


<?= $this->endSection() ?>