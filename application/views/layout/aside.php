<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="/assets/img/logos/logo.png"
          alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3"
          style="opacity: .8"> -->
        <div style="
            background-image: url(assets/images/logo.png);
            height: 2.1rem;
            width: 2.1rem;
            border-radius: 50%;
            background-position: center;
            background-size: 70%;
            background-repeat: no-repeat;
            box-shadow: 0 14px 28px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.22)!important;
            background-color: #fff;
        ">&nbsp;</div>
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $this->session->userdata('name'); ?></a>
      </div>
    </div>
  <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
        <li class="nav-item">
          <a href="users/" class="nav-link <?php if($this->uri->segment(1)=="users"){echo "active";}?>">
            <i class="nav-icon fas fa-user"></i>
            <p> Users </p>
          </a>
        </li>
          
        <li class="nav-item <?php if($this->uri->segment(1)=="vehicles" || $this->uri->segment(1)=="functions" || $this->uri->segment(1)=="features" || $this->uri->segment(1)=="brands") {echo "menu-is-opening menu-open";}?>">
          <a href="#" class="nav-link has-treeview">
            <i class="nav-icon fas fa-car"></i>
            <p>
              Our Vehicles
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="vehicles/" class="nav-link <?php if($this->uri->segment(1)=="vehicles"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p> Add Vehicles</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="functions/" class="nav-link <?php if($this->uri->segment(1)=="functions"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Car Functions</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="features/" class="nav-link <?php if($this->uri->segment(1)=="features"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Features</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="brands/" class="nav-link <?php if($this->uri->segment(1)=="brands"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Car Brands</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="booking/" class="nav-link <?php if($this->uri->segment(1)=="booking"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p> Bookings </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="invoice/" class="nav-link <?php if($this->uri->segment(1)=="invoice"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p> Invoices </p>
              </a>
            </li>
          </ul>
        </li>  
        <li class="nav-item">
              <a href="leasing/" class="nav-link <?php if($this->uri->segment(1)=="leasing"){echo "active";}?>">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>Leasing</p>
              </a>
        </li>
        
        <li class="nav-item">
          <a href="priceslist/allpricelist/" class="nav-link <?php if($this->uri->segment(2)=="allpricelist"){echo "active";}?>">
            <i class="nav-icon fas fa-list"></i>
            <p> Price List </p>
          </a>
        </li>
        
        <li class="nav-item <?php if($this->uri->segment(1)=="sale_crm" || $this->uri->segment(1)=="icqself" || $this->uri->segment(1)=="sales_admin" || $this->uri->segment(1)=="insurance") {echo "menu-is-opening menu-open";}?>">
          <a href="#" class="nav-link has-treeview">
            <i class="nav-icon fas fa-check-square"></i>
            <p>
              Sales CRM
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="sale_crm/" class="nav-link <?php if($this->uri->segment(1)=="sale_crm"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p> Sales CRM</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="icqself/" class="nav-link <?php if($this->uri->segment(1)=="icqself"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Insurance Coverage Quote(ICQ)(Self)</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="sales_admin/" class="nav-link <?php if($this->uri->segment(1)=="sales_admin"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Sales Admin Form Centre</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="insurance/" class="nav-link <?php if($this->uri->segment(1)=="insurance"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Insurance Form Centre</p>
              </a>
            </li>
          </ul>
        </li> 
        <li class="nav-item <?php if($this->uri->segment(2)=="insurance_quotationrequest" || $this->uri->segment(2)=="open_renewal" || $this->uri->segment(2)=="close_renewal") {echo "menu-is-opening menu-open";}?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shield-alt"></i>
            <p>
              InQuote
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="quotation_request/insurance_quotationrequest/" class="nav-link <?php if($this->uri->segment(2)=="insurance_quotationrequest"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Insurance Quotation Request </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="inquote/open_renewal" class="nav-link <?php if($this->uri->segment(2)=="open_renewal"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Open Renewal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="inquote/close_renewal" class="nav-link <?php if($this->uri->segment(2)=="close_renewal"){echo "active";}?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Close Renewal</p>
              </a>
            </li>
          </ul>
        </li>  
        <li class="nav-item <?php if($this->uri->segment(1)=="vehicles_detail" || $this->uri->segment(1)=="costsheetreport1" || $this->uri->segment(1)=="costsheetreport2" || $this->uri->segment(1)=="costsheetreport3"){echo "menu-is-opening menu-open";}?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-car-side"></i>
            <p> Vehicles Detail <i class="right fas fa-angle-left"></i></p>
          </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="costsheetreport1/" class="nav-link <?php if($this->uri->segment(1)=="costsheetreport1"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cost Sheet Report 1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="costsheetreport2/" class="nav-link <?php if($this->uri->segment(1)=="costsheetreport2"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cost Sheet Report 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="costsheetreport3/" class="nav-link <?php if($this->uri->segment(1)=="costsheetreport3"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cost Sheet Report 3</p>
                  </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
          <a href="customer/" class="nav-link <?php if($this->uri->segment(1)=="customer"){echo "active";}?>">
            <i class="nav-icon fas fa-car-side"></i>
            <p> Customer </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="company/" class="nav-link <?php if($this->uri->segment(1)=="company"){echo "active";}?>">
            <i class="nav-icon fas fa-building"></i>
            <p> Company </p>
          </a>
        </li>
        
        <li class="nav-item">
          <a href="receipt/" class="nav-link <?php if($this->uri->segment(1)=="receipt"){echo "active";}?>">
            <i class="nav-icon fas fa-receipt"></i>
            <p> Purchase Receipt </p>
          </a>
        </li>

        <!--  -->


        <li class="nav-item <?php if($this->uri->segment(1)=="gstinvoice" || $this->uri->segment(1)=="customertaxinvoice" || $this->uri->segment(1)=="cash_creditinvoice" || $this->uri->segment(1)=="com" || $this->uri->segment(1)=="or_receipt" || $this->uri->segment(1)=="sales_receipt") {echo "menu-is-opening menu-open";}?>">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p> GST Invoice <i class="right fas fa-angle-left"></i></p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="gstinvoice/" class="nav-link <?php if($this->uri->segment(1)=="gstinvoice"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Main</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="cash_creditinvoice/" class="nav-link <?php if($this->uri->segment(1)=="cash_creditinvoice"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cash & Credit Inv</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="com/" class="nav-link <?php if($this->uri->segment(1)=="com"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>COM</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="or_receipt/" class="nav-link <?php if($this->uri->segment(1)=="or_receipt"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Official Receipt</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="sales_receipt/" class="nav-link <?php if($this->uri->segment(1)=="sales_receipt"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sales Receipt</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="customertaxinvoice/" class="nav-link <?php if($this->uri->segment(1)=="customertaxinvoice"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Customer Tax Inv</p>
                  </a>
                </li>
              </ul>
        </li>

        <li class="nav-item <?php if($this->uri->segment(1)=="gmsinvoice" || $this->uri->segment(1)=="mp_invoice" || $this->uri->segment(1)=="gms_com" || $this->uri->segment(1)=="gms_official_receipt" || $this->uri->segment(1)=="gms_sales_receipt" || $this->uri->segment(1)=="gms_tax_invoice") {echo "menu-is-opening menu-open";}?>">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-file-invoice"></i>
              <p> GMS Invoice <i class="right fas fa-angle-left"></i></p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="gmsinvoice/" class="nav-link <?php if($this->uri->segment(1)=="gmsinvoice"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Main</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="mp_invoice/" class="nav-link <?php if($this->uri->segment(1)=="mp_invoice"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>MP Invoice</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="gms_com/" class="nav-link <?php if($this->uri->segment(1)=="gms_com"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>COM</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="gms_official_receipt/" class="nav-link <?php if($this->uri->segment(1)=="gms_official_receipt"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Official Receipt</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="gms_sales_receipt/" class="nav-link <?php if($this->uri->segment(1)=="gms_sales_receipt"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sales Receipt</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="gms_tax_invoice/" class="nav-link <?php if($this->uri->segment(1)=="gms_tax_invoice"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tax Inv</p>
                  </a>
                </li>
              </ul>
        </li>

        <li class="nav-item <?php if($this->uri->segment(1)=="services" || $this->uri->segment(1)=="faq") {echo "menu-is-opening menu-open";}?>">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Website Setting
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="services/" class="nav-link <?php if($this->uri->segment(1)=="services"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Services</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="faq/" class="nav-link <?php if($this->uri->segment(1)=="faq"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>FAQ</p>
                  </a>
                </li>
              </ul>
        </li> 
        <li class="nav-item has-treeview <?php if($this->uri->segment(1)=="setting"){echo "menu-is-opening menu-open";}?>">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-circle"></i>
                <p>
                  Profile
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="setting/" class="nav-link <?php if($this->uri->segment(1)=="setting"){echo "active";}?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Setting</p>
                  </a>
                </li>
              </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="dashboard/logout" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
                Logout
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>