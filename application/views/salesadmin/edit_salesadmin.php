<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sales Admin Form Centre</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('sales_admin/update') ?>">
          <div class="card-body">
                
                <input type="hidden" name="saleadminid" value="<?php echo $salesadmin->id; ?>">
                <input type="hidden" name="category" value="<?php echo $salesadmin->category; ?>">
                <div class="row sm_padding">                
                    <div class="col-md-6">

                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>System ID</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="systemid" value="<?php echo $salesadmin->system_id; ?>" class="form-control" readonly>
                            </div>       
                        </div>   

                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Category</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" value="<?php echo $salesadmin->name; ?>" class="form-control" readonly>
                            </div>       
                        </div> 
                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Remarks</label>
                            </div>
                            <div class="col-md-7">
                                <textarea name="remark" class="form-control" ><?php echo $salesadmin->remark;?></textarea>
                            </div>       
                        </div> 

                        <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Document</label>
                                </div>
                                <div class="col-md-9" style="font-size: 14px;">
                                    <?php
                                    $id=$salesadmin->saleid;
                                   
                                    $saleadminfile=$this->db->query("SELECT * FROM salesadmin_files WHERE saleadmin_id='$id'");                    
                                    foreach($saleadminfile->result() as $row):
                                    ?> 
                                
                                    <?php  if(file_exists('upload/salesadmin/'.$row->file)){ ?>
                                        <p>
                                            <a href="<?php echo base_url() .'upload/salesadmin/'.$row->file;?>" style="font-size: 14px;" target="_blank" class="filedelete">
                                            <?php echo $row->file."<br/>"; ?>
                                            </a>
                                            <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'sales_admin/delete_file/'.$row->id;?>" type="button" class="delete-file color-white">x
                                            </a>
                                        </p>                                   
                                      <?php  } ?>  
                                  <?php 
                                    endforeach; ?>
                                    <input type="hidden" name="documentfile" value="<?php echo $salesadmin->file;?>">
                                    <input type="file" name="document[]" class="form-control" multiple>
                                 </div>
                        </div>
                            
                        
                        
                    </div><!-- first col -->

                    <div class="col-md-6">
                        <p class="formtitle">Record Section</p>

                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Entry Date</label>
                            </div>
                            <div class="col-md-3">
                                <input type="date" name="entrydate" value="<?php echo $salesadmin->entry_date;?>" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4 bootstrap-timepicker" >
                                <input type="text" name="entrytime" value="<?php echo $salesadmin->entry_time;?>" class="form-control" readonly>

                            </div>    
                        </div>     

                        <div class="row form-group">
                            <div class="col-md-3">
                                <label>Created By</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="createbyname" value="<?php echo $salesadmin->created_by;?>" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="createbydate" value="<?php echo $salesadmin->created_date;?>" class="form-control" readonly/>   
                                </div>
                            </div>    
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-3">
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
                    </div><!-- second col -->
                </div><!--  -->
                <div class="row sm_padding">    
                        <div class="col-md-12 form-group">
                           
                            <div class="offset-md-1 col-md-8">
                                
                            </div>       
                        </div> 
                </div>
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="sales_admin/" class="btn btn-default mybtn">Cancel</a>
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
   
    
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>


<!-- Add Category -->
<div class="modal fade" id="modal-new-category" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Create Category</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>
<!-- end brands -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#loanproposal").hide();
        $("#maybank").hide();
        $("#hlbank").hide();
        $('#docu_div').hide();
        
        $('#privatecarbank').on('change', function() {
          if ( this.value == 'Abwin Group Proposal Form wef 25032021')
          {
            $.ajax({
                    type:"POST",
                    url:"loanproposal/showloanproposaldata",
                    success : function(e)
                    {                    
                       if(e>=1){
                            $("#loanproposal").hide();
                       }else{
                         $("#loanproposal").show();
                       }
                        
                    }
                });
           
        }else if(this.value == 'MayBank Application Form 2021_09'){
            $("#loanproposal").hide();
            $.ajax({
                    type:"POST",
                    url:"maybankform/showmaybankdata",
                    success : function(e)
                    {                    
                       if(e>=1){
                            $("#maybank").hide();
                       }else{
                         $("#maybank").show();
                       }
                        
                    }
                });
          }else if(this.value == 'HL BANK 1219 APPL'){
           
            $("#loanproposal").hide();
            $("#maybank").hide();
            $.ajax({
                    type:"POST",
                    url:"HLbankform/showhlbankdata",
                    success : function(e)
                    {        
                        
                       if(e>=1){
                            $("#hlbank").hide();
                       }else{
                         $("#hlbank").show();
                       }
                        
                    }
                });
          }
    });
    });    

    function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"sales_admin/searchmakeandmodel",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#make").val(v.brand_name);
                $("#model").val(v.model_name);
                $("#sellingprice").val(v.selling_price);
                
            }
        });
    }
    function searchcustomerdata(cid)
    {
        data="cid="+cid;
        $.ajax({
            type:"POST",
            url:"sales_admin/searchcustomerdata",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#nric").val(v.roc_nric_fin);
                $("#dob").val(v.dob);
                $("#marital").val(v.marital_status);
                $("#occupation").val(v.occupation);
                $("#homeaddress").val(v.home_address);
                $("#mailaddress").val(v.mailing_address);
                $("#contactno").val(v.contact_no);
                $("#applicantemail").val(v.email);
                $("#emplycmy").val(v.employment_cmy);
                $("#emplyaddress").val(v.emplyment_address);
                $("#income").val(v.annual_income);
                var str = v.yrsof_service;
              var substr = str.split(',');
              for (var i = 0; i < substr.length; i++)
              {  
                $("#emply_yr").val(substr[0]);
                $("#emply_mth ").val(substr[1]);
              }
            }
        });
    }
    function searchcustomer_document(cid){
        
        data="cid="+cid;
        $.ajax({
            type:"POST",
            dataType: "JSON",
            url:"sales_admin/search_document",
            data:data,

            success : function(data)
            {
                $("#div1").empty();
                var links = "";
                for (var i = 0; i < data.length; ++i) {
                     if(data[i].document_name=="DBS")
                        {
                            links += "<a href='/DBS'>"+data[i].document_name+"</br>";                           
                        }
                      if(data[i].document_name=="UOB_Company")
                      {
                        links += "<a href='/UOB'>"+data[i].document_name+"</br>"  
                      }
                 }
                 $("#div1").append(links);

           }
        });
    }
     

</script>