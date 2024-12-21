<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bookings Detail Page</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">User Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Booking ID</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: #<?php echo $bookingdata->bid; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Customer Name</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->first_name.' '.$bookingdata->last_name; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Email</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->email; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Phone</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->phone; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Status</span>
                                </div>
                                <div class="col-md-6">
                                    <?php if($bookingdata->bstatus=='0'){ ?>
                                        <p>: <span class="btn btn-warning btn-xs">Processing</span></p>
                                    <?php }else{ ?>
                                        <p>: <span class="btn btn-success btn-xs">Success</span></p>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Payment Method</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->payment_method; ?></p>
                                </div>
                            </div>
                            <?php if($bookingdata->payment_method=="bank"){ ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="mini-title">Bank Name</span>
                                        </div>
                                        <div class="col-md-6">
                                            <p>: <?php echo $bookingdata->bank_name; ?></p>
                                        </div>
                                    </div>
                            <?php }else{ ?>

                            <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Vehicle Information</h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Model Name</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->modelname; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Duration</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->duration; ?> Months</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Price</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: SGD <?php echo $bookingdata->subscription_price; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Color</span>
                                </div>
                                <div class="col-md-6">
                                    <?php if($bookingdata->color=="#ffffff"){ ?>
                                        <p>: White</p>
                                    <?php }else if($bookingdata->color=="#00a4ff"){ ?>
                                        <p>: Blue</p>
                                    <?php }else if($bookingdata->color=="#f10a0a"){ ?>
                                        <p>: Red</p>
                                    <?php }else if($bookingdata->color=="#aab5bb"){ ?>
                                        <p>: Grey</p>
                                    <?php }else if($bookingdata->color=="#000000"){ ?>
                                        <p>: Black</p>
                                    <?php }else if($bookingdata->color=="#682c18"){ ?>
                                        <p>: Brown</p>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Total Amount</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: SGD <?php echo $bookingdata->total_amt; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Expired Date</span>
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->available_date; ?></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
      </div>
    <!-- /.row -->
    <div class="row sm_toppadding">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Delivery Address</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Delivery Date</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->delivery_date; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Delivery Time</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->delivery_time; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Delivery Address 1</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->delivery_address1; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Delivery Address 2</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->delivery_address2; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Phone</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->deli_phone; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Postcode</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->delivery_postcode; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Delivery Remark</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->delivery_remark; ?></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Billing Address</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Billing Address 1</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->billing_address1; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Billing Address 2</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->billing_address2; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Phone</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->billing_phone; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Country</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->country; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">State</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->state; ?></p>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <span class="mini-title">Postcode</span> 
                                </div>
                                <div class="col-md-6">
                                    <p>: <?php echo $bookingdata->billing_postcode; ?></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
      </div>
    <!-- /.row -->
    <div class="row sm_toppadding">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Driving License Front</h3>
                    </div>
                    <div class="card-body">
                        <?php if($bookingdata->driving_license_front!=""){ ?>
                                    <img src="<?php echo base_url() .'upload/usersinfo/'.$bookingdata->driving_license_front;?>" class="img-responsive license-img sm_topmargin">
                                    <?php }else{ ?>
                                           No Photo
                                    <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Driving License Back</h3>
                    </div>
                    <div class="card-body">
                         <?php if($bookingdata->driving_license_back!=""){ ?>
                                        <img src="<?php echo base_url() .'upload/usersinfo/'.$bookingdata->driving_license_back;?>" class="img-responsive license-img sm_topmargin">
                                        <?php }else{ ?>
                                               No Photo
                                        <?php } ?>
                    </div>
                </div>
            </div>


      </div>
    <!-- /.row -->
    <div class="row sm_toppadding">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">National ID Front</h3>
                    </div>
                    <div class="card-body">
                         <?php if($bookingdata->national_id_front!=""){ ?>
                                        <img src="<?php echo base_url() .'upload/usersinfo/'.$bookingdata->national_id_front;?>" class="img-responsive license-img sm_topmargin">
                                        <?php }else{ ?>
                                               No Photo
                                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">National ID Back</h3>
                    </div>
                    <div class="card-body">
                        <?php if($bookingdata->national_id_back!=""){ ?>
                                        <img src="<?php echo base_url() .'upload/usersinfo/'.$bookingdata->national_id_back;?>" class="img-responsive license-img sm_topmargin">
                                        <?php }else{ ?>
                                               No Photo
                                        <?php } ?>
                    </div>
                </div>
            </div>


      </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>




