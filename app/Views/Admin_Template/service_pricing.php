<?= $this->extend('Admin_Template/index') ?> 
<?= $this->section('services_pricing') ?> 






<!-- <div id="addMethodModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Method</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="methodForm" method="POST" action="" role="form">
          <div class="form-group">
            <label for="methodNameInput">Method Name:</label>
            <input type="text" class="form-control" id="methodNameInput" name="methodName">
            <span style="color:red;" id="methodErr"></span>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="addMethodBtnModal">Add Method</button>
      </div>
    </div>
  </div>
</div> -->



<a href="#methodForm" id="addMethodBtn" class="btn btn-primary"><i class="fa fa-plus"></i>Add Method</a>

<div class="tab-content ct-clean-services-right-details">
  <div class="tab-pane active col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-bordered" id="tableid">
        <thead>
          <tr>
            <th>Pricing</th>
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
                <span class="service-title"><?php echo $value['methodName']; ?> </span>
              </div>
            </td>
            <td>
              <div class="actions">
                  <a href="<?php echo base_url('unit_pricing/' . $value['id']); ?>" class="btn btn-primary btn-sm">
                  <i class="fa fa-calculator"></i> Unit Pricing
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
        </tbody>
        
        <?php endforeach; ?>
      </table>
      
      <div class="modal-body">
        <form id="methodForm" method="POST" action="" role="form">

        <input type="hidden" name="id" id="serviceid" value="<?php echo $id; ?>">
        
          <div class="form-group">
            <label for="methodNameInput">Method Name:</label>
            <input type="text" class="form-control" id="methodNameInput" name="methodName">
            <span style="color:red;" id="methodErr"></span>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="addMethodBtnModal">Add Method</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- --For Add-- -->
      <script>
        $(document).ready(function() {
          $('#methodForm').hide();
          $('#addMethodBtn').click(function() {
            $('#methodForm').show();
            // $('#addMethodModal').modal('show');
          });

        // $('#addMethodBtnModal').click(function() {
          $("body").delegate("#addMethodBtnModal", "click", function(){
            var methodErr = $('#methodErr');
            // alert('abc');

        $.ajax({
                  url: " <?php echo base_url('add_service_pricing') ?> ",
                  type: "POST",
                  data: $('#methodForm').serialize(),
                  dataType: "json",
                  success: function(response) {
                    methodErr.text(response.methodName ? response.methodName.message : '');
                    if (response.success) {
                      alert(response.success.message);
                      $('#methodForm')[0].reset();
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
                // alert('abc');
              $('#tableid tr').remove('.editform')
                $(this).parent().parent().parent().after('<tr class="editform" ><td> <input type="text" name="id" id="idInput" value=""> <form id="serviceEditForm" method="POST" action="" enctype="multipart/form-data" role="form"> <div class="form-group"> <label for="methodTitle"> Method Name:</label> <input type="text" class="form-control" id="pricingTitleInput" name="methodTitle" value="" > <span style="color:red;" id="nameErr"></span> </div> <div class="modal-footer"> <button type="button" class="btn btn-primary updateprice">Update</button> </div> </form></td></tr>');
                
              });
            $('.editbtn').click(function() {
              var pricingId = $(this).data('id');
              console.log(pricingId);
              // $('.updateprice').data('id', pricingId);
              
              $.ajax({
                      url: "<?php echo base_url('edit_service_pricing/') ?>" + pricingId,
                      type: "GET",
                      dataType: "json",
                      success: function(response) {
                          $('#pricingTitleInput').val(response.methodName);
                          $('#idInput').val(response.id);
                      }
                  }); 
               });
            
                  
                    // var title = $('#pricingTitleInput').val();
                    // $('.updateprice').click(function() {
                    // var pricingId = $(this).data('id');
                    // console.log(pricingId);

                    $('.updateprice').click(function() {
                      // alert('abc');
                      var pricingId = $(this).data('id');
                      console.log(pricingId);
                    
                  
                    $.ajax({
                      url: "<?php echo base_url('update_service_pricing/') ?>" + pricingId,
                      type: 'POST',
                      data: $(this).serialize(),
                      dataType: "json",
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


       <!-- -------delete Pricing------------- -->

       <script>
          $(document).ready(function() {
              $('.Deletebtn').click(function(e) {
                  e.preventDefault();

                  var priceId = $(this).data('id');
                  var deleteBtn = $(this);

                  $.ajax({
                      url: "<?php echo base_url('delete_service_pricing/') ?>" + priceId,
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
                    url: "<?php echo base_url('update_services_pricing_status/') ?>" + checkbox.data('id'), 
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