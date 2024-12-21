<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicle's Prices</h1>
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
            <h3 class="card-title">Edit Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('priceslist/insert') ?>">
        <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $vehipricesdata->id;?>">
                    <div class="row sm_padding">                    
                            <div class="col-md-6">                                    
                                    <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Broker :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="broker" value="<?php echo $vehipricesdata->broker;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Reg : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="reg" value="<?php echo $vehipricesdata->reg;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>VehNo: </label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("vehno",$vehicleslist,$vehipricesdata->vehno,"class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                            </div>       
                                    </div>  
                                    <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Make/Model : </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="make" id="make" value="<?php echo $vehipricesdata->make;?>" class="form-control">
                                        </div>  
                                        <div class="col-md-4">
                                            <input type="text" name="model" id="model" value="<?php echo $vehipricesdata->model;?>" class="form-control">
                                        </div>      
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>GST :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="gst" value="<?php echo $vehipricesdata->gst;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Col :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="col" value="<?php echo $vehipricesdata->col;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>OMV/eTran :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="omv_etran" value="<?php echo $vehipricesdata->omv;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>UL :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="ul" value="<?php echo $vehipricesdata->ul;?>" class="form-control">
                                        </div>       
                                    </div>
                                    
                            </div><!-- left -->
                            <div class="col-md-6">  
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>TON : </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="ton" value="<?php echo $vehipricesdata->ton;?>" class="form-control">
                                            </div>       
                                    </div>  
                                    
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>Q:</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="q" value="<?php echo $vehipricesdata->Q;?>" class="form-control">
                                            </div>       
                                    </div>   
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>RdTx : </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="date" name="rdtx" value="<?php echo $vehipricesdata->rdtx;?>" class="form-control">
                                            </div>       
                                    </div> 
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>IU : </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="iu" value="<?php echo $vehipricesdata->iu;?>" class="form-control">
                                            </div>       
                                    </div> 
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>Price : </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="price" value="<?php echo $vehipricesdata->price;?>" class="form-control">
                                            </div>       
                                    </div> 
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>LOC : </label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="loc" value="<?php echo $vehipricesdata->loc;?>" class="form-control">
                                            </div>       
                                    </div> 
                                    <div class="row form-group">
                                            <div class="col-md-5">
                                                <label>Type : </label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("type",$getpricescategory_list,$vehipricesdata->category_type,"class='form-control'")?>
                                                
                                            </div>       
                                    </div>  
                                      
                            </div><!-- right -->
                    </div>
                   
                    
                
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                    <div class="row right">
                        <div class="col-md-12">
                            <a href="priceslist/allpricelist/" class="btn mybtn btn-default">Cancel</a>
                            <button type="submit" class="btn mybtn btn-success">Update</button>
                        </div>                    
                    </div>
              </div>
              <!-- /.card-footer -->
              </form>
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

<script type="text/javascript">
    function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"priceslist/searchmakeandmodel",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#make").val(v.brand_name);
                $("#model").val(v.model_name);
                
            }
        });
    }
</script>