<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles Detail</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $detailsdata->brand_name.' '.$detailsdata->model_name;;?></h3>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Model Name</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->model_name; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Brand Name</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->brand_name; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Vehicle Number</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->vehicle_no; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">TNC</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->tnc; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Service Type</span>
                                </div>
                                <div class="col-md-8">
                                    <?php if($detailsdata->price_status=="leasing"){?>
                                        <p>: For Leasing</p>
                                    <?php }else{ ?>
                                        <p>: For Selling</p>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <?php if($detailsdata->price_status=="leasing"){?>
                                        <span class="mini-title">Price / Day</span>
                                    <?php }else{ ?>
                                        <span class="mini-title">Selling Price</span>
                                    <?php } ?> 
                                </div>
                                <div class="col-md-8">
                                    <?php if($detailsdata->price_status=="leasing"){?>
                                        <p>: $ <?php echo $detailsdata->rental_price; ?></p>
                                    <?php }else{ ?>
                                        <p>: $ <?php echo $detailsdata->selling_price; ?></p>
                                    <?php } ?> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <?php if($detailsdata->price_status=="leasing"){?>
                                        <span class="mini-title">Rental Package</span>
                                    <?php } ?>
                                </div>
                                <div class="col-md-8">
                                    <?php if($detailsdata->price_status=="leasing"){?>
                                        <p>: <?php 
                                            $vid= $this->uri->segment(3);
                                            $query=$this->db->query("SELECT * FROM car_package WHERE vehicle_id='$vid'");?>
                                            <?php foreach($query->result() as $row): ?>
                                                $ <?php echo $row->price; ?> - 
                                                <?php echo $row->duration; ?> Months  
                                                <?php if($row->best_status=="bestsaver"){ ?>
                                                    - Best Saver
                                               <?php }else{ 

                                                }?>                                               
                                                <br/>                                            
                                        <?php endforeach; ?>  
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Purchase Date</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->purchase_date; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Registration Date</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->registration_date; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Year</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->year; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Body</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->bodytype; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Fuel</span>    
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->fueltype; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Color</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: 
                                    <?php
                                        $colour = explode(',', $detailsdata->color);

                                        for($i=0;$i<count($colour);$i++)
                                        {
                                            
                                            if($colour[$i]=="#ffffff"){
                                                echo "White"; echo " , ";
                                            }else if($colour[$i]=="#00a4ff"){
                                                echo "Blue"; echo " , ";
                                            }else if($colour[$i]=="#f10a0a"){
                                                echo "Red"; echo " , ";
                                            }else if($colour[$i]=="#aab5bb"){
                                                echo "Grey"; echo " , ";
                                            }else if($colour[$i]=="#000000"){
                                                echo "Black"; echo " , ";
                                            }else if($colour[$i]=="#682c18"){
                                                echo "Brown"; echo " , ";
                                            }
                                        }
                                    ?>
                                    </p>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Engine</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->engine_type; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Doors</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->door; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Seats</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->seat_qty; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Transmission</span>
                                </div>
                                <div class="col-md-8">
                                    <p>: <?php echo $detailsdata->transmission; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Features</span>
                                </div>
                                <div class="col-md-8">
                                    <p>:                 
                                    <?php
                                        $fea = explode(',', $detailsdata->features);
                                        for($i=0;$i<count($fea);$i++)
                                        {
                                            echo $fea[$i];echo ",";
                                        }
                                        
                                    ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="mini-title">Description</span>
                                </div>
                                <div class="col-md-8 car_desc">
                                    <?php echo $detailsdata->description; ?>
                                </div>
                            </div>
                            
                            
                    </div>
                </div>
            </div>
            


      </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

