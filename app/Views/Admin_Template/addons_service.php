<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('addons_service_content') ?>

<style>
  select {
  font-family: 'FontAwesome', 'sans-serif';
}
</style>

<a href="#AddonsForm" id="addonsBtn" class="btn btn-primary"><i class="fa fa-plus"></i>Add Addons Service</a>

<div class="tab-content ct-clean-services-right-details">
  <div class="tab-pane active col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-bordered" id="tableid">
        <thead>
          <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <?php foreach ($data as $value): ?>
        <tbody>
          <tr>
            <td>
              <div class="service-info">
                <span class="service-title"><?php echo $value['addon_title']; ?> </span>
              </div>
            </td>
            <td>
              <div class="service-info">
                <span class="service-title"><?php echo $value['basic_price']; ?> $</span>
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
        </tbody>
        <?php endforeach; ?>
      </table>
      <div class="modal-body">
        <form id="addonsForm" method="POST" action="" role="form">
        <input type="text" name="id" id="serviceid" value="<?php echo $id; ?>">
          <div class="form-group">
            <label for="titleInput">Addon Title:</label>
            <input type="text" class="form-control" id="titleInput" name="titleName">
            <span style="color:red;" id="titleErr"></span>
          </div>
          <div class="form-group">
            <label for="durationInput">Duration (HH:mm):</label>
            <input type="" class="form-control" id="durationInput" name="duration">
            <span style="color:red;" id="durationErr"></span>
          </div>
          <div class="form-group">
            <label for="imageInput">Service Image:</label>
            <input type="file" class="form-control" id="imageInput" name="image">OR
          <select class="select" id="icon" name="icon">
            <option>Selcet Addon Image</option>
            <option value="fa-align-left">&#xf036;Inside Fridge</option>
            <option value="2">Inside Oven</option>
            <option value="3">Inside Windows</option>
            <option value="4">Carpet Cleaning</option>
            <option value="5">Green Cleaning</option>
            <option value="6">Pets Care</option>
            <option value="7">Tiles Cleaning</option>
            <option value="fa-institution">&#xf19c;Wall Cleaning</option>
            <option value="9" data-mdb-icon=" ">Laundry</option>
            <option value="10" data-mdb-icon=" ">Basement Cleaning</option>
          </select>
            <span style="color:red;" id="imageErr"></span>
          </div>
          <div class="form-group">
            <label for="priceInput">Basic Price:</label>
            <input type="text" class="form-control" id="priceInput" name="price">
            <span style="color:red;" id="priceErr"></span>
          </div>
          <div class="form-group">
            <label for="maxqtyInput">Max Qty:</label>
            <input type="text" class="form-control" id="maxqtyInput" name="maxqty">
            <span style="color:red;" id="maxqtyErr"></span>
          </div>
          <div class="form-group">
            <label for="mulqtyInput">Multiple Qty:</label>
            <input type="text" class="form-control" id="mulqtyInput" name="mulqty">
            <span style="color:red;" id="mulqtyErr"></span>
            <!-- <input type="checkbox" class="myservice_status" name="status" data-id="<?php// echo $value['id']; ?>" value="1" <?php //echo $value['status'] ? 'checked' : ''; ?>>
              <input type="hidden" name="status" value="0"> 
              <input type="checkbox" id="mulqtyInput" name="mulqty" <?php// echo $value['	multiple_qty'] == 1 ? 'checked' : ''; ?>> -->
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="addonsBtnModal">Add Method</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>









<!-- --for Add--- -->


  <script>
    var BASE_URL = "<?php echo base_url(); ?>";
  </script>


<script>
  $(document).ready(function() {
    $('#addonsForm').hide();
    $('#addonsBtn').click(function() {
      $('#addonsForm').show();
    });

    // $('#addonsBtnModal').click(function() {
      $("body").delegate("#addonsBtnModal", "click", function(){
        var titleErr = $('#titleErr');
        var durationErr = $('#durationErr');
        var imageErr = $('#imageErr');
        var priceErr = $('#priceErr');
        var maxqtyErr = $('#maxqtyErr');
        var mulqtyErr = $('#mulqtyErr');
        
        // alert('abc');


    $.ajax({
            url: '<?php echo base_url('add_addons_service') ?>',
            type: "POST",
            processData: false,
            contentType: false,
            data: new FormData($('#addonsForm')[0]),
            dataType: "json",
            success: function(response) {
                titleErr.text(response.titleName ? response.titleName.message : '');
                durationErr.text(response.duration ? response.duration.message : '');
                imageErr.text(response.image ? response.image.message : '');
                priceErr.text(response.price ? response.price.message : '');
                maxqtyErr.text(response.maxqty ? response.maxqty.message : '');
                mulqtyErr.text(response.mulqty ? response.mulqty.message : '');

                if (response.success) {
                alert(response.success.message);
                $('#addonsForm')[0].reset();
                window.location.reload();
                }
            }
            });

                });
            });
            </script>

<!-- ------for edit ------ -->


         <script>
            $(document).ready(function() {
            $('.editbtn').click(function() {
              $('#tableid tr').remove('.editform');
              $(this).closest('tr').after('<tr class="editform" ><td><form id="addonsForm" method="POST" action="" role="form"> <input type="text" name="id" id="addonsid" value=""> <div class="form-group"> <label for="titleInput">Addon Title:</label> <input type="text" class="form-control" id="titleInput" name="titleName"> <span style="color:red;" id="titleErr"></span> </div> <div class="form-group"> <label for="durationInput">Duration (HH:mm):</label> <input type="text" class="form-control" id="durationInput" name="duration"> <span style="color:red;" id="durationErr"></span> </div> <div class="form-group"> <label for="imageInput">Service Image:</label> <input type="file" class="form-control" id="addonsImageInput" name="addonsimage"><img id="addonsImage" style="width:70px; height:70px; border-radius:50%; margin-right:20px;" alt="no images"><select class="select" id="icone" name="icon"> <option>Selcet Addon Image</option> <option value="fa-align-left">&#xf036;Inside Fridge</option> <option value="2" data-mdb-icon=" ">Inside Oven</option> <option value="3" data-mdb-icon=" ">Inside Windows</option> <option value="4" data-mdb-icon=" ">Carpet Cleaning</option> <option value="5" data-mdb-icon=" ">Green Cleaning</option> <option value="6" data-mdb-icon=" ">Pets Care</option> <option value="7" data-mdb-icon=" ">Tiles Cleaning</option> <option value="fa-institution">&#xf19c;Wall Cleaning</option> <option value="9" data-mdb-icon=" ">Laundry</option> <option value="10" data-mdb-icon=" ">Basement Cleaning</option> </select><span style="color:red;" id="imageErr"></span> </div> <div class="form-group"> <label for="priceInput">Basic Price:</label> <input type="text" class="form-control" id="priceInput" name="price"> <span style="color:red;" id="priceErr"></span> </div> <div class="form-group"> <label for="maxqtyInput">Max Qty:</label> <input type="text" class="form-control" id="maxqtyInput" name="maxqty"> <span style="color:red;" id="maxqtyErr"></span> </div> <div class="form-group"> <label for="mulqtyInput">Multiple Qty:</label> <input type="text" class="form-control" id="mulqtyInput" name="mulqty"> <span style="color:red;" id="mulqtyErr"></span> </div> <div class="modal-footer"> <button type="button" class="btn btn-primary update" id="addonsBtn">Update</button> </div> </form></td></tr>');

              var addonsId = $(this).data('id');
              console.log(addonsId);
              $('#addonsBtn').data('id', addonsId);

              $.ajax({
                url: "<?php echo base_url('edit_addons_service/') ?>" + addonsId,
                type: "GET",
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                  $('#titleInput').val(response.addon_title);
                  $('#durationInput').val(response.duration);
                  $('#priceInput').val(response.basic_price);
                  $('#maxqtyInput').val(response.max_qty);
                  $('#mulqtyInput').val(response.multiple_qty);
                  $('#icone').val(response.icon);
                  $('#addonsid').val(response.id);

                  var imageUrl = BASE_URL + 'addons_service_photos/' + response.addons_service_image;
                  console.log(response.addons_service_image);
                  $('#addonsImage').attr('src', imageUrl);
                  console.log(BASE_URL + 'addons_service_photos/');
                }
              });
            });

            $("body").on("click", ".update", function() {
              // var addid = $(this).data('id');
              var addid = $('#addonsid').val();
              console.log(addid);

              var img = $('#addonsImageInput').val();

              var formData = new FormData($('#addonsForm')[0]);
              formData.append('addonsimage',img);

            //   var data = {
            //   id: addid,
            //   titleName: $('#titleInput').val(),
            //   duration: $('#durationInput').val(),
            //   price: $('#priceInput').val(),
            //   maxqty: $('#maxqtyInput').val(),
            //   mulqty: $('#mulqtyInput').val()
            // };
            // console.log(data);

              $.ajax({
                url: "<?php echo base_url('update_addons_service/') ?>" + addid,
                type: "POST",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                  if (response.success) {
                    alert(response.message);
                    window.location.reload();
                  }
                }
              });
            });
          });
          </script>


<!-- ---for delete--- -->

    <script>
    $(document).ready(function() {
        $('.Deletebtn').click(function(e) {
            e.preventDefault();

            var addonsId = $(this).data('id');
            var deleteBtn = $(this);
            $.ajax({
                url: "<?php echo base_url('delete_addons_service/') ?>" + addonsId,
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
                url: "<?php echo base_url('update_services_addons_status/') ?>" + checkbox.data('id'), 
                type: "POST",
                data: {
                    status: isChecked,
                },
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        alert('Status' + statusMsg);
                    } else {
                        alert('Failed to update status.');
                    }
                }
            });
        });
    });
</script>


<?= $this->endSection() ?>