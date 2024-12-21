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
            <h3 class="card-title">Create Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('priceslist/insert') ?>">
          <div class="card-body">
                
                <div class="row sm_padding">                    
                        <div class="col-md-6">                                    
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Broker :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="broker" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Reg : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="reg" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>VehNo: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("vehno",$vehicleslist,"","class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Make/Model : </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="make" id="make" class="form-control" required placeholder="Make">
                                    </div>   
                                    <div class="col-md-4">
                                        <input type="text" name="model" id="model" class="form-control" required placeholder="Model">
                                    </div>    
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>GST :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="gst" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Col :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="col" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>OMV/eTran :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="omv_etran" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>UL :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="ul" class="form-control">
                                    </div>       
                                </div>
                               
                        </div><!-- left -->
                        <div class="col-md-6">  
                                 <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>TON : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="ton" class="form-control" required>
                                        </div>       
                                </div>  
                                 
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Q:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="q" class="form-control" required>
                                        </div>       
                                </div>   
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>RdTx : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="rdtx" class="form-control" required>
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>IU : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="iu" class="form-control">
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Price : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="price" class="form-control" required>
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>LOC : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="loc" class="form-control" required>
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Type : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <select class="form-control" name="type" data-placeholder="" required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach(pricescategory_list() as $key => $status) : ?>
                                                <option value="<?= $key ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select>
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
                        <button type="submit" class="btn mybtn btn-success">Save</button>
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