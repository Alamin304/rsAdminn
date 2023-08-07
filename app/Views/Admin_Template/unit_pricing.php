<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('unit_pricing_content') ?>

<a href="#unitForm" id="unitBtn" class="btn btn-primary"><i class="fa fa-plus"></i>Add Unit</a>

<div class="tab-content ct-clean-services-right-details">
  <div class="tab-pane active col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-bordered" id ="tableid">
        <thead>
          <tr>
            <th>Title</th>
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
                <span class="service-title"><?php echo $value['unit_name']; ?> </span>
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
        <form id="unitForm" method="POST" action="" role="form">
        <input type="text" name="id" value="<?php echo $id; ?>">

          <div class="form-group">
            <label for="unitInput">Unit Name:</label>
            <input type="text" class="form-control" id="unitInput" name="unitName">
            <span style="color:red;" id="unitErr"></span>
          </div>
          <div class="form-group">
            <label for="priceInput">Base Price:</label>
            <input type="text" class="form-control" id="priceInput" name="price">
            <span style="color:red;" id="priceErr"></span>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="unieBtnModal">Add Method</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>









<!-- --for Add--- -->


<script>
  $(document).ready(function() {
    $('#unitForm').hide();
    $('#unitBtn').click(function() {
      $('#unitForm').show();
    });

    // $('#addonsBtnModal').click(function() {
      $("body").delegate("#unieBtnModal", "click", function(){
        var unitErr = $('#unitErr');
        var priceErr = $('#priceErr');
      
        
        // alert('abc');


    $.ajax({
            url: '<?php echo base_url('add_unit_pricing') ?>',
            type: "POST",
            // data: new FormData($('#unitForm')[0]),
            data: $('#unitForm').serialize(),
            dataType: "json",
            success: function(response) {
                unitErr.text(response.unitName ? response.unitName.message : '');
                priceErr.text(response.price ? response.price.message : '');
               
                if (response.success) {
                alert(response.success.message);
                $('#unitForm')[0].reset();
                window.location.reload();
                }
            }
            });

                });
            });
            </script>





<!-- ----for Edit--- -->


      <script>
           $(document).ready(function() {
          $('.editbtn').click(function() {
            $('#tableid tr').remove('.editform');

            $(this).closest('tr').after('<tr class="editform"><td><form id="serviceEditForm" method="POST" action="" role="form"> <input type="text" name="id" id="idput" value=""> <div class="form-group"> <label for="methodTitle"> Unit Name:</label> <input type="text" class="form-control" id="unitTitleInput" name="unitTitle" value="" > <span style="color:red;" id="nameEr"></span> </div> <label for="durationTitle"> Duration:</label> <input type="text" class="form-control" id="duration" name="duration" value="" > <span style="color:red;" id="durErr"></span> </div> <label for="baseprice"> Base Price:</label> <input type="text" class="form-control" id="baseprice" name="baseprice" value="" > <span style="color:red;" id="baseErr"></span> </div> <label for="minlimit"> Min Limit:</label> <input type="number" class="form-control" id="minlimit" name="minlimit" > <span style="color:red;" id="minErr"></span> </div> <label for="maxlimit"> Max Limit:</label> <input type="number" class="form-control" id="maxlimit" name="maxlimit"> <span style="color:red;" id="maxErr"></span> </div> <label for="optionallabel"> Optional Label:</label> <input type="text" class="form-control" id="optionallabel" name="optionallabel" value="" > <span style="color:red;" id="optionErr"></span> </div>  <label for="optionalunitsymbol"> Optional Unit Symbol:</label> <input type="text" class="form-control" id="optionalunitsymbol" name="optionalunitsymbol" value="" > <span style="color:red;" id="symbolErr"></span> </div> <div class="modal-footer"> <button type="button" id= "submit" class="btn btn-primary updatechange" data-id="">Update</button> </div> </form></td></tr>');

            var unitpricingId = $(this).data('id');

            $.ajax({
              url: "<?php echo base_url('edit_unit_pricing/') ?>" + unitpricingId,
              type: "GET",
              dataType: "json",
              success: function(response) {
                $('#unitTitleInput').val(response.unit_name);
                $('#duration').val(response.duration);
                $('#baseprice').val(response.base_price);
                $('#minlimit').val(response.min_limit);
                $('#maxlimit').val(response.max_limit);
                $('#optionallabel').val(response.optional_label);
                $('#optionalunitsymbol').val(response.optional_unit_symbol);
                $('#idput').val(response.id);
              }
            });
          });

          $("body").delegate(".updatechange", "click", function() {
            var unitpricing = $('#idput').val();
            console.log(unitpricing);
            var unitEr = $('#nameEr');
            var baseErr = $('#baseErr');
            var durErr = $('#durErr');
            var minErr = $('#minErr');
            var maxErr = $('#maxErr');

            var formData = {
              id: unitpricing,
              unitTitle: $('#unitTitleInput').val(),
              duration: $('#duration').val(),
              baseprice: $('#baseprice').val(),
              minlimit: $('#minlimit').val(),
              maxlimit: $('#maxlimit').val(),
              optionallabel: $('#optionallabel').val(),
              optionalunitsymbol: $('#optionalunitsymbol').val()
            };
            console.log(formData);
            
            
            $.ajax({
              url: "<?php echo base_url('update_unit_pricing/') ?>" + unitpricing,
              type: "POST",
              data: formData,
              dataType: "json",
              success: function(response) {
                unitEr.text(response.unitTitle ? response.unitTitle.message : '');
                baseErr.text(response.baseprice ? response.baseprice.message : '');
                durErr.text(response.duration ? response.duration.message : '');
                minErr.text(response.minlimit ? response.minlimit.message : '');
                maxErr.text(response.maxlimit ? response.maxlimit.message : '');
                if (response.success) {
                  alert(response.message);
                  window.location.reload();
                }
              }
            });
          });
        });

        </script>






<!-- ---delete unite--- -->

<script>
        $(document).ready(function() {
            $('.Deletebtn').click(function(e) {
                e.preventDefault();

                var unitpriceId = $(this).data('id');
                var deleteBtn = $(this);
                $.ajax({
                    url: "<?php echo base_url('delete_unit_pricing/') ?>" + unitpriceId,
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
            var statusMsg = isChecked ? 'Enable' : 'Disable';
            $.ajax({
                url: "<?php echo base_url('update_unit_status/') ?>" + checkbox.data('id'), 
                type: "POST",
                data: {
                    status: isChecked,
                },
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        alert('Status ' + statusMsg);
                    } else {
                        alert('Failed to update status.');
                    }
                }
            });
        });
    });
</script>




<?= $this->endSection() ?>