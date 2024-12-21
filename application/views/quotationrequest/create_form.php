<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insurance Quotation Request</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('quotation_request/insert') ?>">
          <div class="card-body">
            
                <div class="row sm_padding">                    
                        <div class="col-md-6">    
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>System ID </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="systemid" class="form-control" readonly>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle Type: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <?=form_dropdown("vehitype",$vehicletypelist,"","class='form-control' onclick=vehitypesearch(this.value)")?>
                                    </div>     
                                    <div class="col-md-4">
                                        <select name="vehitype_detail" class="form-control" id="searchresult" required>
                                          <option value="hidden"></option>
                                        </select>
                                    </div>   
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>SALETYPE</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" name="saletype" data-placeholder="" required>
                                            <option value="">&nbsp;</option>
                                            <?php foreach(saletype_list() as $key => $status) : ?>
                                            <option value="<?= $status ?>"><?= $status ?></option>
                                            <?php endforeach; ?>
                                        </select> 
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle Source: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" name="vehisource" data-placeholder="" required>
                                            <option value="">&nbsp;</option>
                                            <?php foreach(vehiclesource_list() as $key => $status) : ?>
                                            <option value="<?= $status ?>"><?= $status ?></option>
                                            <?php endforeach; ?>
                                        </select> 
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>SBU:</label>
                                    </div>
                                    <div class="col-md-7">
                                            <select class="form-control" name="sbu" data-placeholder="" required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach(sbu_list() as $key => $status) : ?>
                                                <option value="<?= $status ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select> 
                                        </div>        
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Name/Company Name: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="cmyname" class="form-control" required>
                                    </div>     
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Address:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <textarea name="address" class="form-control" required></textarea>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>NRIC / ROC No.:  </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="icno" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Date of Birth/Co Reg Date:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="co_regdate" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Gender Status: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" name="gender" class="form-control" required>
                                                <option value="">...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                        </select>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Marital Status: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" name="marital" data-placeholder="" required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach(maritalstatus_list() as $key => $status) : ?>
                                                <option value="<?= $status ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                        </select> 
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Occupation/Nature of Business: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <textarea name="occupation" class="form-control"></textarea>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Driving License Passed Date: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="dlpassdate" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle No.: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("vehino",$vehicleslist,"","class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Make & Model : </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="make" id="make" class="form-control" required>
                                    </div> 
                                    <div class="col-md-4">
                                        <input type="text" name="model" id="model" class="form-control" required>
                                    </div>        
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Loan (Yes/No): </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" name="loan" required>
                                                <option value="">...</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                        </select>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Additional Accessories : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" name="accessories" data-placeholder="">
                                                <option value="">&nbsp;</option>
                                                <?php foreach(accessories_list() as $key => $status) : ?>
                                                <option value="<?= $status ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                        </select> 
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Tonnage :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="tonnage" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Laden :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="laden" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Unladen : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="unladen" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Year Of Manufacture : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="yrofmanufacture" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Registration Date :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="regdate" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Consent Form : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="checkbox" name="consentform" class="typechx">
                                        <span>Personal Data Protection Act Clause</span>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Upload PDPA Form : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="file" name="document" class="form-control">
                                    </div>       
                                </div>
                        </div><!-- left -->
                        <div class="col-md-6"> 
                                <p class="formtitle">Record Section</p>

                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Entry Date</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="entrydate" value="<?php echo date('Y-m-d');?>" class="form-control" readonly>
                                    </div>    
                                    <div class="col-md-4 bootstrap-timepicker" >
                                        <input type="text" name="entrytime" value="<?php echo mdate('%h:%i %A');?>" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Created By</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="createbyname" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                                    </div>    
                                    <div class="col-md-4">
                                        <div class='input-group date'>
                                            <input type='text' name="createbydate" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" readonly/>
                                        </div>
                                    </div>     
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Last Modified By</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="modifyname" class="form-control" readonly>
                                    </div>    
                                    <div class="col-md-4">
                                        <div class='input-group date'>
                                            <input type='text' name="modifydate" class="form-control" readonly/>  
                                        </div>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Existing Insurance Co.: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="existinsurance" class="form-control" required>
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Previous Vehicle No: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="prv_vehino" class="form-control" required>
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Claim Experience (Past 3Yrs):</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="claimexp" class="form-control" required>
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>NCD %: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <select class="form-control" name="ncd" data-placeholder="">
                                                <option value="">&nbsp;</option>
                                                <?php foreach(ncd_list() as $key => $status) : ?>
                                                <option value="<?= $status ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select> 
                                        </div>    
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Coverage : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <select class="form-control" name="coverage" data-placeholder="" required>
                                                <option value="">&nbsp;</option>
                                                <?php foreach(coverage_list() as $key => $status) : ?>
                                                <option value="<?= $status ?>"><?= $status ?></option>
                                                <?php endforeach; ?>
                                            </select> 
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Sum Insured : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="suminsured" class="form-control" required>
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Remarks : (max: 200 characters) </label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea name="remark" class="form-control"></textarea>
                                        </div>       
                                </div>  
                               <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Contact No :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="contactno" class="form-control">
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Email :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="email" name="email" class="form-control" required>
                                        </div>       
                                </div>  
                        </div><!-- right -->
                </div>
                <div class="row sm_padding">
                    <div class="col-md-6"> 
                            <p class="formtitle">Quote Section </p> 
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>NCD% :</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <label>Ins.Co</label>
                                                </div>       
                                        </div> 
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>Quote 1:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="insco1" class="form-control" >
                                                </div>       
                                        </div> 
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>Quote 2:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="insco2" class="form-control" >
                                                </div>       
                                        </div> 
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>Quote 3:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="insco3" class="form-control" >
                                                </div>       
                                        </div> 
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>Quote 4:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="insco4" class="form-control" >
                                                </div>       
                                        </div> 
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>Quote 5:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="insco5" class="form-control" >
                                                </div>       
                                        </div> 
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                    <label>Quote 6:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="insco6" class="form-control" >
                                                </div>       
                                        </div> 
                                        
                                </div>
                                <div class="col-md-2">
                                    <div class="row form-group">
                                        <label>Ins.Type</label>
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="instype1" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="instype2" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="instype3" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="instype4" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="instype5" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="instype6" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row form-group">
                                        <label>Premium</label>
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="premium1" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="premium2" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="premium3" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="premium4" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="premium5" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="premium6" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row form-group">
                                        <label>Excess</label>
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="excess1" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="excess2" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="excess3" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="excess4" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="excess5" class="form-control" >
                                    </div>
                                    <div class="row form-group">
                                        <input type="text" name="excess6" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                        <div class="col-md-2 form-group">
                                            <label>Ins Admin Remarks:</label>
                                        </div>
                                        <div class="col-md-10 form-group no_rightpadding">
                                            <textarea name="adminremarks" class="form-control"></textarea>
                                        </div>   
                            </div>
                    </div> 
                    <div class="col-md-6 sm_toppadding right_quotesection">
                         <table id="example2" class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th colspan="5">Insurance Premium Payment - Credit Card Instalment Plan </th>
                                </tr>
                                <tr>
                                    <th colspan="5">Options of 6 or 12 months with 0% interest </th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>UOB</td>
                                    <td>OCBC</td>
                                    <td>DBS/ POSB</td>
                                    <td>Citibank</td>
                                </tr>
                                <tr>
                                    <td>NTUC </td>
                                    <td>0%</td>
                                    <td>0%</td>
                                    <td>0%</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>AXA </td>
                                    <td>0%</td>
                                    <td>0%</td>
                                    <td>0%</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>AIG </td>
                                    <td>0%</td>
                                    <td></td>
                                    <td>0%</td>
                                    <td>0%</td>
                                </tr>
                                <tr>
                                    <td>China </td>
                                    <td></td>
                                    <td>0%</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Liberty (PV) </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>0%</td>
                                </tr>
                                <tr>
                                    <td>EQ (PV)</td>
                                    <td>0%</td>
                                    <td></td>
                                    <td></td>
                                    <td>0%</td>
                                </tr>
                            </tbody>
                         </table>
                    </div>
                </div>
                
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="quotation_request/insurance_quotationrequest/" class="btn mybtn btn-default">Cancel</a>
                        <button type="submit" class="btn mybtn btn-success">Save</button>
                    </div>                    
                </div>
          </div>
          <!-- card footer -->
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
    function vehitypesearch(vehitype)
    {
        data="vehitype="+vehitype;
        $.ajax({
                type: "POST",
                url : '<?=base_url()?>'+"quotation_request/searchvehicletypedetail/",
                data : data,

                success : function(e)
                {
                 $("#searchresult").html(e);
                }
            });
    }
    function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"quotation_request/searchmakeandmodel",
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