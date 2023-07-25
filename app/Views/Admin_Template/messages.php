<?= $this->extend('Admin_Template/index') ?>
<?= $this->section('CRM_Messages_content') ?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Email Messages</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">SMS Messages</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
    <div class="table-responsive ser_staffpayment_append">
      <table id="staffdetails" class="display responsive nowrap table table-striped table-bordered" cellspacing="0" width="100%">
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
            <td><a href="<?php echo base_url('MessageAttachment/'.$value['attachment']. $value['id']); ?>" class="btn btn-warning btn-sm editbtn">See Attachment</a></td>
            <td><?= $value['date']?></td>
            <td>
              <a href="<?php echo base_url('edit_CRM/'. $value['id']); ?>" class="btn btn-warning btn-sm editbtn">
                <i class="fa fa-pencil"></i> Edit
              </a>
              <a href="#" class="btn btn-danger btn-sm Deletebtn" data-id="<?php echo $value['id']; ?>">
                <i class="fa fa-trash"></i> Delete
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
  <div class="table-responsive ser_staffpayment_append">
      <table id="smsdetails" class="display responsive nowrap table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Messages</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data1 as $value1): ?>
          <tr>
            <td><?= $value1['messages']?></td>
            <td><?= $value1['date']?></td>
            <td>
              <a href="<?php echo base_url('edit_CRM/'. $value1['id']); ?>" class="btn btn-warning btn-sm editbtn">
                <i class="fa fa-pencil"></i> Edit
              </a>
              <a href="#" class="btn btn-danger btn-sm Deletebtn" data-id="<?php echo $value1['id']; ?>">
                <i class="fa fa-trash"></i> Delete
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<?= $this->endSection() ?>