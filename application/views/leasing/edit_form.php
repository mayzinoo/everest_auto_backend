<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Leasing</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card leasingtab">
          <div class="card-header">
            <ul  class="nav nav-pills">
                  <li class="active">
                        <a  href="#1b" data-toggle="tab">Edit Leasing</a>
                  </li>
                  <li>
                        <a  href="#2b" data-toggle="tab">Edit Leasing Rental Agreement</a>
                  </li>
            </ul>              
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('leasing/update') ?>">
          <input type="hidden" name="id" value="<?php echo $leasing->id; ?>">
          <div class="card-body">
              <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1b">
                        <div class="row sm_toppadding">
                            <div class="col-md-6">
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Broker</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="broker" value="<?php echo $leasing->broker;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Car Plate</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="carplate" value="<?php echo $leasing->car_plate;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Make</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="make" value="<?php echo $leasing->make;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Model</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="model" value="<?php echo $leasing->model;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Road Tax Expiry</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="roadtax_expy" value="<?php echo $leasing->roadtax_expiry;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Coe Expiry</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="coe_expy" value="<?php echo $leasing->coe_expiry;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Inspection Expiry</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="inspection_expy" value="<?php echo $leasing->inspection_date;?>" class="form-control">
                                        </div>       
                                  </div>
                            </div>
                            <div class="col-md-6">
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Out Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="outdate" value="<?php echo $leasing->out_date;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>In Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="indate" value="<?php echo $leasing->in_date;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Salesman</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesman" value="<?php echo $leasing->salesman;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Payment</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="payment" value="<?php echo $leasing->payment;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Booking Date</label>
                                        </div>
                                        <?php
                                            $everestleasing = explode(',', $leasing->booking_date);
                                        ?>
                                        <div class="col-md-3">
                                            <input type="date" name="bookingdate_from" value="<?php echo $everestleasing[0];?>" class="form-control" placeholder="From">
                                        </div>  
                                        <div class="col-md-4">
                                            <input type="date" name="bookingdate_to" value="<?php echo $everestleasing[1];?>" class="form-control" placeholder="To">
                                        </div>      
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Tenure</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="tenure" value="<?php echo $leasing->tenure;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Salesman</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesman2" value="<?php echo $leasing->salesman2;?>" class="form-control">
                                        </div>       
                                  </div>
                            </div>
                        </div>
                    </div><!-- end tab1 -->

                    <div class="tab-pane" id="2b">
                        <div class="row sm_toppadding">
                            <div class="col-md-6">
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Hirer Name</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="hirer_name" value="<?php echo $leasing->hirer_name;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>UEN / NRIC</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="nirc" value="<?php echo $leasing->nirc;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="address" value="<?php echo $leasing->address;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>CONTACT NO</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="contact_no" value="<?php echo $leasing->contact_no;?>" class="form-control">
                                        </div>       
                                  </div>                                  
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>P-Plate</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="p_plate" value="<?php echo $leasing->p_plate;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>GPS Rental</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="gps_rental" value="<?php echo $leasing->gps_rental;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Collection Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="collection_date" value="<?php echo $leasing->collection_date;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Return Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="return_date" value="<?php echo $leasing->return_date;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>No of Days</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="no_days" value="<?php echo $leasing->no_days;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Rental Amount</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="rental_amt" value="<?php echo $leasing->rental_amt;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Refundable Deposit</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="refundable_deposit" value="<?php echo $leasing->refundable_deposit;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Total Amount Paid</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="total_amt" value="<?php echo $leasing->total_amt;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vehicle Delivery</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="vehi_delivery_date" value="<?php echo $leasing->vehi_delivery_date;?>" class="form-control">
                                        </div>  
                                        <div class="col-md-3">
                                            <input type="text" name="vehi_delivery_time" value="<?php echo $leasing->vehi_delivery_time;?>" class="form-control" placeholder="Time">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Remarks</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="remark" value="<?php echo $leasing->remark;?>" class="form-control">
                                        </div>      
                                  </div>
                            </div><!-- left column -->
                            <div class="col-md-6">                         
                                  
                                  
                                  <p class="formtitle">Collection of Vehicle</p>
                                  <div class="row form-group">

                                        <div class="col-md-4">
                                            <label>Check Out By</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="checkedout_by" value="<?php echo $leasing->checkedout_by;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>MILEAGE OUT</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="mileage_out" value="<?php echo $leasing->mileage_out;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>FUEL %</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="fuel_percent" value="<?php echo $leasing->fuel_percent;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <p class="formtitle">Return of Vehicle</p>
                                  
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>TIME</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="time" value="<?php echo $leasing->time;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>MILEAGE</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="mileage" value="<?php echo $leasing->mileage;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>FUEL %</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="return_fuel_percent" value="<?php echo $leasing->return_fuel_percent;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>CHECKED IN BY</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="checkin_by" value="<?php echo $leasing->checkin_by;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Authorised Signature</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?php if($leasing->authorised_sign!=""){ ?>
                                                <img src="<?php echo base_url() .'upload/sign/'.$leasing->authorised_sign;?>" class="img-responsive" style="width:100px;height:auto;">
                                                <?php }else{ ?>
                                                       No Photo

                                                <?php } ?>
                                            <input type="file" name="authorised_sign" value="<?php echo $leasing->authorised_sign;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Authorised signature of Hirer</label>
                                        </div>
                                        <div class="col-md-7">
                                          <?php if($leasing->hirer_sign!=""){ ?>
                                                <img src="<?php echo base_url() .'upload/sign/'.$leasing->hirer_sign;?>" class="img-responsive" style="width:100px;height:auto;">
                                                <?php }else{ ?>
                                                       No Photo

                                                <?php } ?>
                                            <input type="file" name="hirer_sign" value="<?php echo $leasing->hirer_sign;?>" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vehicle Photo<span class="text-danger"> ( only jpg,png and jpeg are allowed )</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <?php if($leasing->car_photo!=""){ ?>
                                                <img src="<?php echo base_url() .'upload/files/'.$leasing->car_photo;?>" class="img-responsive" style="width:200px;height:auto;">
                                                <?php }else{ ?>
                                                       No Photo

                                                <?php } ?>
                                            <input type="file" name="vehiclephoto" value="<?php echo $leasing->car_photo;?>" class="form-control">
                                        </div>       
                                  </div>
                            </div>
                        </div>
                    </div><!-- end tab2 -->
              </div><!--  -->
          </div><!-- end card body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="leasing/" class="btn mybtn btn-default">Cancel</a>
                        <button type="submit" class="btn mybtn btn-success">Update</button>
                    </div>                  
                </div>
          </div>
          <!-- card footer -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>