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
                        <a  href="#1b" data-toggle="tab">Leasing</a>
                  </li>
                  <li>
                        <a  href="#2b" data-toggle="tab">Leasing Rental Agreement</a>
                  </li>
            </ul>
                         
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('leasing/insert') ?>">
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
                                              <input type="text" name="broker" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Car Plate</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="text" name="carplate" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Make</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="text" name="make" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Model</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="text" name="model" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Road Tax Expiry</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="date" name="roadtax_expy" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Coe Expiry</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="date" name="coe_expy" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Inspection Expiry</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="date" name="inspection_expy" class="form-control">
                                          </div>       
                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Out Date</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="date" name="outdate" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>In Date</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="date" name="indate" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Salesman</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="text" name="salesman" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Payment</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="text" name="payment" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Booking Date</label>
                                          </div>
                                          <div class="col-md-3">
                                              <input type="date" name="bookingdate_from" class="form-control" placeholder="From">
                                          </div>  
                                          <div class="col-md-4">
                                              <input type="date" name="bookingdate_to" class="form-control" placeholder="To">
                                          </div>      
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Tenure</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="text" name="tenure" class="form-control">
                                          </div>       
                                    </div>
                                    <div class="row form-group">
                                          <div class="col-md-4">
                                              <label>Salesman</label>
                                          </div>
                                          <div class="col-md-7">
                                              <input type="text" name="salesman2" class="form-control">
                                          </div>       
                                    </div>
                              </div>
                          </div>
                    </div><!-- end tab 1 -->

                    <div class="tab-pane" id="2b">
                        <div class="row sm_toppadding">
                            <div class="col-md-6">
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Hirer Name</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="hirer_name" class="form-control" required>
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>UEN / NRIC</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="nirc" class="form-control" required>
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="address" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>CONTACT NO</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="contact_no" class="form-control">
                                        </div>       
                                  </div>
                                  
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>P-Plate</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="p_plate" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>GPS Rental</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="gps_rental" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Collection Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="collection_date" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Return Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="return_date" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>No of Days</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="no_days" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Rental Amount</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="rental_amt" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Refundable Deposit</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="refundable_deposit" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Total Amount Paid</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="total_amt" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vehicle Delivery</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="vehi_delivery_date" class="form-control">
                                        </div>  
                                        <div class="col-md-3">
                                            <input type="text" name="vehi_delivery_time" class="form-control" placeholder="Time">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Remarks</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="remark" class="form-control">
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
                                            <input type="text" name="checkedout_by" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>MILEAGE OUT</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="mileage_out" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>FUEL %</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="fuel_percent" class="form-control">
                                        </div>       
                                  </div>
                                  <p class="formtitle">Return of Vehicle</p>
                                  
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>TIME</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="time" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>MILEAGE</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="mileage" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>FUEL %</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="return_fuel_percent" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>CHECKED IN BY</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="checkin_by" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Authorised Signature</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" name="authorised_sign" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Authorised signature of Hirer</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" name="hirer_sign" class="form-control">
                                        </div>       
                                  </div>
                                  <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vehicle Photo<span class="text-danger"> ( only jpg,png and jpeg are allowed )</span></label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" class="form-control" name="vehiclephoto" />
                                        </div>       
                                  </div>
                            </div>
                        </div>
                    </div><!-- end tab 2 -->
                </div><!-- end tab -->

          </div><!-- end card body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="leasing/" class="btn mybtn btn-default">Cancel</a>
                        <button type="submit" class="btn mybtn btn-success">Save</button>
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