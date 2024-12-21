<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bookings List</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List</h3>  
                        
          </div>
          <!-- /.card-header -->
          <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <tr>
                        <th>#</th>
                        <th>Booking No</th>
                        <th>Model Name</th>
                        
                        <th>Delivery Date</th>
                        <th>Rental Package</th>                      
                        <th>Total Amount</th>
                        <th>Payment Type</th>
                        <th>Customer Name</th>
                        <th>Phone</th>
                        <th>Booking Status</th>                        
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                        $i=1;
                        foreach($bookinglist->result() as $row):
                      ?>  
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><a href="booking/booking_detail/<?php echo $row->bid; ?>"><?php echo $row->booking_no; ?></a></td>
                                <td><?php echo $row->modelname; ?></td>
                                
                                <td><?php echo $row->delivery_date; ?> ( <?php echo $row->delivery_time; ?> )</td>
                                
                                <td><?php echo $row->pkgduration; ?> Months, $ <?php echo $row->subscription_price; ?></td>
                                <td><?php echo $row->total_amt; ?></td>
                                <td><?php echo $row->payment_method; ?></td>
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->billing_phone; ?></td>
                                
                                
                                <td>
                                    <?php if($row->checkstatus=="1"){ ?>
                                        <b>Pending </b>
                                    <?php }else if($row->checkstatus=="2"){ ?>
                                        <b>Pending Approval </b>
                                    <?php }else if($row->checkstatus=="3"){ ?>          
                                        <b>Approved </b>
                                    <?php }else if($row->checkstatus=="4"){ ?> 
                                        <b><span style="color:red">Rejected </span></b>
                                    <?php } ?>                             
                                </td>

                                <?php if($row->checkstatus=="3"){ ?>
                                        <td>
                                            <?php if($row->bstatus=="0"){ ?>
                                                <div class="btn-group btn-group-xs">
                                                    <a class="btn btn-warning btn-xs booking_status" data-id="<?= $row->bid ?>" type="button" href="javascript:void(0);" >Processing</a>                                       
                                                </div>
                                            <?php }else{ ?>
                                                
                                                    <a class="btn btn-success btn-xs" type="button" href="javascript:void(0);" ><i class="fas fa-check"></i></a>
                                                   
                                                    <a href="booking/generateinvoicepdf/<?php echo $row->ivoid; ?>/<?php echo $row->ivono; ?>" target="_blank" type="button" class="delete-asset btn btn-primary btn-xs color-white">
                                                        <i class="fa fa-file-pdf"></i>
                                                    </a>                             
                                                
                                            <?php } ?>
                                                
                                        </td>
                                <?php }else{ ?> 
                                        <td></td>
                                <?php } ?>   
                                
                                <?php if($row->checkstatus=="2"){ ?>
                                    <td>
                                        <a class="btn btn-warning btn-xs booking_approve" data-id="<?= $row->bid ?>" type="button" href="javascript:void(0);">Approve</a>

                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'booking/delete_bookings/'.$row->bid;?>" type="button" class="delete-asset btn-xs btn btn-danger color-white">
                                                    <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                <?php }else{ ?>
                                    <td>
                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'booking/delete_bookings/'.$row->bid;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
                                                    <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                <?php } ?>
                                
                            </tr>   
                        <?php
                        $i++;
                        endforeach; ?>     
                        
                  </tbody>
                </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


<!-- Booking approve check -->
<div class="modal fade" id="modal-approvestatus" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
         <form method="post" action="<?php echo site_url('booking/update_bookingapprove') ?>">
                    <div class="modal-header">
                      
                      <h4 class="modal-title">Check and confirm user's booking</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="bid" id="bid">

                        <div class="form-group">
                            <label>Confim User's booking</label>
                            <select class="select2" name="approvestatus" data-placeholder="Status" style="width: 100%;" required>
                                    <option value="">&nbsp;</option>
                                    <?php foreach(booking_approvelist() as $key => $status) : ?>
                                    <option value="<?= $key ?>"><?= $status ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>   
                    <div class="modal-footer">
                        <div class="form-group">
                              <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
            </form> 
      </div>
      
    </div>
</div>
<!-- end -->


<!-- Payment check -->
<div class="modal fade" id="modal-paymentstatus" role="dialog">
    <div class="modal-dialog">
    
          <!-- Modal content-->
          <div class="modal-content">
             <form method="post" action="<?php echo site_url('booking/update_bookingstatus') ?>">
                    <div class="modal-header">
                      
                      <h4 class="modal-title">Update Payment</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="bid" id="bid"> 
                        <input type="hidden" name="vid" id="vid"> 
                        <input type="hidden" name="userid"> 
                        

                        <div class="form-group">
                            <label>Payment Method</label>
                            <select class="select2-clear form-control" name="paymentmethod" style="width: 100%;" required>                                
                                <option value="cash" >Cash</option>
                                <option value="bank">Bank Transfer</option>
                            </select>
                        </div>
                        
                        
                        <div class="form-group chkfrm" id="chkfrm2" style="display: none;">
                            <label>Bank Name</label>
                            <select class="select2 form-control" name="paymentbank" style="width: 100%;">
                                <option value="">Select</option>
                                <option value="UOB">UOB</option>
                                <option value="DBS">DBS</option>
                                <option value="DBS">OCBC</option>
                            </select>
                        </div>
                        
                        <div class="form-group chkfrm" id="chkfrm3" style="display: none;">
                            <label>Reference Date</label>
                            <input name="reference_date" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                        </div>
                    </div>    
                    <div class="modal-footer">
                        <div class="form-group">
                              <button type="submit" class="btn btn-success">Update Payment</button>
                        </div>
                    </div>
            </form>                
          </div>  
        
      </div>
</div>

