<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
            <?php message(); ?>
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
          <div class="card-header" id="exTab3">
                <ul  class="nav nav-pills">
                    <li class="active">
                        <a  href="#1b" data-toggle="tab">Sales Admin Form</a>
                    </li>
                    <li>
                        <a href="#2b" data-toggle="tab">Insurance Form</a>
                    </li>
                </ul>      
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1b">
                        <div class="row sm_padding"> 
                            <div class="col-md-12">
                                <p class="formtitle">Private Car_Bank Application Forms</p>
                                <a href="customer/loanproposal_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">Abwin_Group_Proposal_Form_wef_25032021.pdf</a><br/>
                       
                                <a href="customer/maybankapplicationform_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">MayBank Application Form 2021_09_.pdf</a><br/>
                        
                                <a href="customer/hlbankapplicationform_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">HL BANK 1219 APPL.pdf</a><br/>
                        
                                <a href="customer/dbsform_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">DBS.pdf</a><br/>

                                <a href="customer/uobform_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">UOB_Company.pdf</a><br/>

                                <a href="customer/uobindividualapp_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">UOB INDIVIDUAL APPLICATION _R6_16_.pdf</a><br/>

                               <a href="customer/hongleongfinance_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">HONG LEONG FINANCE.pdf</a>
                                </a><br/>
                            </div>
                        </div>
                    </div><!-- first -->
                    <div class="tab-pane" id="2b"> 
                        <div class="row sm_padding"> 
                            <div class="col-md-12">
                                <p class="formtitle">Proposal Form</p>
                                <a href="customer/eqprivatemotorcarform_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">EQ proposal _ Private Car Latest Version 7.pdf</a><br/>

                                <a href="customer/eqcommercialproposal_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">EQ proposal _ Commercial Vehicle Latest Version 7.pdf</a><br/>

                                <a href="customer/chinataipingprivatecarproposal_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">China Taiping Private Car Proposal Form Latest 2022.pdf</a><br/>

                                <a href="customer/chinataiping_commercialvehicle_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">China Taiping Commercial Vehicle Proposal Form Latest 2022.pdf</a><br/>

                                <a href="customer/ntucproposal_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">NTUC_Proposal Form 1.9.22.pdf</a><br/> 

                                <a href="customer/acknowledgementforvehicle_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">LATEST ACKNOWLEDGEMENT LETTER FOR COMMERCIAL VEHICLE.pdf</a><br/> 

                                <a href="customer/chinataipingautosafe_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">CHINA TAIPING _ Autosafe SchemeForm.pdf</a><br/> 

                                <a href="customer/pdpaconsentform_pdf/<?php echo $this->uri->segment(3);?>" target="_blank">PDPA Consent Form latest 27 October 2015 _Generic_.pdf</a><br/> 
                            </div>
                        </div>
                    </div><!-- second -->
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>