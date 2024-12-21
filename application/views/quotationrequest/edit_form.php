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
            <h3 class="card-title">Edit Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('quotation_request/update') ?>">
          <div class="card-body">
            
                <input type="hidden" name="id" value="<?php echo $quotationrequestdata->id; ?>">
                <div class="row sm_padding">                    
                        <div class="col-md-6">    
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>System ID </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="systemid" value="<?php echo $quotationrequestdata->system_id; ?>" class="form-control" readonly>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle Type: </label>
                                    </div>
                                    <div class="col-md-3">
                                        <?=form_dropdown("vehitype",$vehicletypelist,$quotationrequestdata->vehicle_type,"class='form-control', readonly ,onclick=vehitypesearch(this.value)")?>
                                    </div>     
                                    <div class="col-md-4">
                                        <select name="vehitype_detail" class="form-control" id="searchresult">
                                          <option><?php echo $quotationrequestdata->vehicletype_detail; ?></option>
                                        </select>
                                    </div>   
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>SALETYPE</label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("saletype",$getsalestype_list,$quotationrequestdata->sale_type,"class='form-control'")?>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle Source: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("vehisource",$getvehiclesource_list,$quotationrequestdata->vehicle_source,"class='form-control'")?>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>SBU:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("sbu",$getsbu_list,$quotationrequestdata->sbu,"class='form-control'")?>
                                    </div>        
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Name/Company Name: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="cmyname" value="<?php echo $quotationrequestdata->cmyname; ?>" class="form-control">
                                    </div>     
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Address:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <textarea name="address" class="form-control"><?php echo $quotationrequestdata->address; ?></textarea>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>NRIC / ROC No.:  </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="icno" value="<?php echo $quotationrequestdata->ic_no; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Date of Birth/Co Reg Date:</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="co_regdate" value="<?php echo $quotationrequestdata->co_regdate; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Gender Status: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("gender",array(''=>'...',"Male"=>"Male","Female"=>"Female"),$quotationrequestdata->gender_status,"class='form-control'")?>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Marital Status: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("marital",$getmaritalstatus_list,$quotationrequestdata->marital_status,"class='form-control'")?>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Occupation/Nature of Business: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <textarea name="occupation" class="form-control"><?php echo $quotationrequestdata->occupation; ?></textarea>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Driving License Passed Date: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="dlpassdate" value="<?php echo $quotationrequestdata->dl_passdate; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle No.: </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("vehino",$vehicleslist,$quotationrequestdata->vehi_no,"class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Make & Model : </label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="make" id="make" value="<?php echo $quotationrequestdata->make; ?>" class="form-control">
                                    </div> 
                                    <div class="col-md-4">
                                        <input type="text" name="model" id="model" value="<?php echo $quotationrequestdata->model; ?>" class="form-control">
                                    </div>        
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Loan (Yes/No): </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("loan",array(''=>'...',"Yes"=>"Yes","No"=>"No"),$quotationrequestdata->loan,"class='form-control'")?>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Additional Accessories : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?=form_dropdown("accessories",$getaccessories_list,$quotationrequestdata->accessories,"class='form-control'")?>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Tonnage :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="tonnage" value="<?php echo $quotationrequestdata->tonnage; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Laden :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="laden" value="<?php echo $quotationrequestdata->laden; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Unladen : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="unladen" value="<?php echo $quotationrequestdata->unladen; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Year Of Manufacture : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" name="yrofmanufacture" value="<?php echo $quotationrequestdata->yearofmanufacture; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Registration Date :</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="date" name="regdate" value="<?php echo $quotationrequestdata->registration_date; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Consent Form : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <?php if ($quotationrequestdata->consent_form == 'on') { ?>
                                            <input type="checkbox" name="consentform" checked class="typechx">
                                        <?php }else{ ?>
                                            <input type="checkbox" name="consentform" class="typechx">
                                        <?php } ?><span>Personal Data Protection Act Clause</span>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Upload PDPA Form : </label>
                                    </div>
                                    <div class="col-md-7">
                                        <input type="file" name="document" value="<?php echo $quotationrequestdata->pdpaform; ?>" class="form-control">
                                    </div>       
                                </div>
                        </div><!-- left -->
                        <div class="col-md-6"> 
                                <p class="formtitle">Record Section</p> 
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Entry Date </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="date" name="entrydate" value="<?php echo $quotationrequestdata->entry_date; ?>" class="form-control" readonly>
                                        </div>    
                                        <div class="col-md-4 bootstrap-timepicker" >
                                            <input type="text" name="entrytime" value="<?php echo $quotationrequestdata->entry_time; ?>" class="form-control" readonly>
                                        </div>

                                </div>   
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Created By </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="createbyname" class="form-control" value="<?php echo $quotationrequestdata->createdby_name; ?>" readonly>
                                        </div>    
                                        <div class="col-md-4">
                                            <div class='input-group date'>
                                                <input type='text' name="createbydate" value="<?php echo $quotationrequestdata->createdby_date; ?>" class="form-control" readonly/>
                                            </div>
                                        </div>   
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Last Modified By</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="modifyname" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                                        </div>    
                                        <div class="col-md-4">
                                            <div class='input-group date'>
                                                <input type='text' name="modifydate" value="<?php echo date('Y-m-d H:i:s'); ?>" class="form-control" readonly/>  
                                            </div>
                                        </div>        
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Existing Insurance Co.: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="existinsurance" value="<?php echo $quotationrequestdata->exist_insurance_co; ?>" class="form-control">
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Previous Vehicle No: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="prv_vehino" value="<?php echo $quotationrequestdata->previous_vehi_no; ?>" class="form-control">
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Claim Experience (Past 3Yrs):</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="claimexp" value="<?php echo $quotationrequestdata->claim_exp; ?>" class="form-control">
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>NCD %: </label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("ncd",$getncd_list,$quotationrequestdata->ncd,"class='form-control'")?>
                                        </div>    
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Coverage : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("coverage",$getcoverage_list,$quotationrequestdata->coverage,"class='form-control'")?>
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Sum Insured : </label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="suminsured" value="<?php echo $quotationrequestdata->sum_insured; ?>" class="form-control">
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Remarks : (max: 200 characters) </label>
                                        </div>
                                        <div class="col-md-7">
                                            <textarea name="remark" class="form-control"><?php echo $quotationrequestdata->remarks; ?></textarea>
                                        </div>       
                                </div>  
                               <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Contact No :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="contactno" value="<?php echo $quotationrequestdata->contact_no; ?>" class="form-control">
                                        </div>       
                                </div>  
                                <div class="row form-group">
                                        <div class="col-md-5">
                                            <label>Email :</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="email" name="email" value="<?php echo $quotationrequestdata->email; ?>" class="form-control">
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
                                            <input type="text" name="insco1" value="<?php echo $quotationrequestdata->insco1; ?>" class="form-control" >
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Quote 2:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="insco2" value="<?php echo $quotationrequestdata->insco2; ?>" class="form-control" >
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Quote 3:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="insco3" value="<?php echo $quotationrequestdata->insco3; ?>" class="form-control" >
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Quote 4:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="insco4" value="<?php echo $quotationrequestdata->insco4; ?>" class="form-control" >
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Quote 5:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="insco5" value="<?php echo $quotationrequestdata->insco5; ?>" class="form-control" >
                                        </div>       
                                </div> 
                                <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Quote 6:</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="insco6" value="<?php echo $quotationrequestdata->insco6; ?>" class="form-control" >
                                        </div>       
                                </div> 
                                
                        </div>
                        <div class="col-md-2">
                            <div class="row form-group">
                                <label>Ins.Type</label>
                            </div>
                            <div class="row form-group">
                                <input type="text" name="instype1" value="<?php echo $quotationrequestdata->ins_type1; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="instype2" value="<?php echo $quotationrequestdata->ins_type2; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="instype3" value="<?php echo $quotationrequestdata->ins_type3; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="instype4" value="<?php echo $quotationrequestdata->ins_type4; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="instype5" value="<?php echo $quotationrequestdata->ins_type5; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="instype6" value="<?php echo $quotationrequestdata->ins_type6; ?>" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row form-group">
                                <label>Premium</label>
                            </div>
                            <div class="row form-group">
                                <input type="text" name="premium1" value="<?php echo $quotationrequestdata->premium1; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="premium2" value="<?php echo $quotationrequestdata->premium2; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="premium3" value="<?php echo $quotationrequestdata->premium3; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="premium4" value="<?php echo $quotationrequestdata->premium4; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="premium5" value="<?php echo $quotationrequestdata->premium5; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="premium6" value="<?php echo $quotationrequestdata->premium6; ?>" class="form-control" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row form-group">
                                <label>Excess</label>
                            </div>
                            <div class="row form-group">
                                <input type="text" name="excess1" value="<?php echo $quotationrequestdata->excess1; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="excess2" value="<?php echo $quotationrequestdata->excess2; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="excess3" value="<?php echo $quotationrequestdata->excess3; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="excess4" value="<?php echo $quotationrequestdata->excess4; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="excess5" value="<?php echo $quotationrequestdata->excess5; ?>" class="form-control" >
                            </div>
                            <div class="row form-group">
                                <input type="text" name="excess6" value="<?php echo $quotationrequestdata->excess6; ?>" class="form-control" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2 form-group">
                                <label>Ins Admin Remarks:</label>
                            </div>
                            <div class="col-md-10 form-group no_rightpadding">
                                <textarea name="adminremarks" class="form-control"><?php echo $quotationrequestdata->ins_admin_remark; ?></textarea>
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
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="quotation_request/insurance_quotationrequest/" class="btn mybtn btn-default">Cancel</a>
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