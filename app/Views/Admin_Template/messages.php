<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('CRM_Messages_content') ?>


<style>

.badge-danger{padding: 3px 5px !important;
    border: 1px solid !important;
    top: initial !important;
    margin: -11px 0px !important;
    position: absolute !important;
}
</style>

  


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Email Messages</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
    <div class="table-responsive ser_staffpayment_append">
      <table id="messagesdetails" class="display responsive nowrap table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Subject</th>
            <th>Messages</th>
            <th>Attachment</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $value): ?>
          <tr>
            <td><?= $value['message_subject']?></td>
            <td><?= $value['message']?></td>
            <td><a href="<?php echo base_url('MessageAttachment/'.$value['attachment']); ?>" class="btn btn-warning btn-sm editbtn">See Attachment</a></td>
            <td><?= $value['date']?></td>
            <td>
            <button type="button" class="btn btn-primary usersbtn" data-id="<?= $value['id'] ?>"> <i class="fas fa-users"></i><span class="nav-text"></span>
            <span class="badge badge-danger"><?= count(json_decode($value['crm_id']))?></span></button>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Customer List</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <p>ID: <span id="customerId"></span></p>
                <ul>
                
                    <li> <span id="customer"></span></li>
                   
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<!-- <script>
      $(document).ready(function() {

      $(".usersbtn").click(function() {
        var id = $(this).data('id');
        console.log(id);
        $("#customerId").text(id);
        

          $("#myModal").modal("show");
      });
    });
  </script> -->



<script>
      $(document).ready(function() {

      $(".usersbtn").click(function() {
        var custid = $(this).data('id');
        console.log(custid);
        $("#customerId").text(custid);
          $("#myModal").modal("show");
        // $("#customerId").text(id);
          $.ajax({
                url: "<?php echo base_url('messages_customer/') ?>" + custid,
                type: "GET",
                dataType: "json",
                success: function(response) {
                    // $('#customer').val(response.crm_id);
                  

                }
            });

          });
        });
  </script>



<!-- ---for Downloading table Data----- -->

<script>
        $(document).ready(function() {
            $('#messagesdetails').DataTable( {
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

<?= $this->endSection() ?>