<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    if(!function_exists('role_list'))
    {
        function role_list() {
            $status = array(
                    "admin" => "Admin",
                    "dealer" => "Dealer",
                    "sale" => "Sale",
                    "customer" => "Customer"
                );

            return $status;
        }
    }

    if(!function_exists('colors_list'))
    {
        function colors_list() {
            $status = array(
                "#ffffff" => "White",
                "#00a4ff" => "Blue",
                "#f10a0a" => "Red",
                "#aab5bb" => "Grey",
                "#000000" => "Black",
                "#682c18" => "Brown"
            );

            return $status;
        }
    }
    if(!function_exists('category_list'))
    {
        function category_list() {
            $status = array(
                    1 => "Popular",
                    2 => "Offers",
                    3 => "Brand New",
                    4 => "Electric"
                );

            return $status;
        }
    }
    if(!function_exists('duration_list'))
    {
        function duration_list() {
            $status = array(
                    3 => "3 Month",
                    6 => "6 Months",
                    12 => "12 Months",
                    24 => "24 Months",
                    48 => "48 Months"
                );

            return $status;
        }
    }
    if(!function_exists('package_status'))
    {
        function package_status() {
            $status = array(
                    "false" => "Select",
                    "true" => "Best Server"
                );

            return $status;
        }
    }
    if(!function_exists('booking_approvelist'))
    {
        function booking_approvelist() {
            $status = array(
                    "1" => "Pending",
                    "2" => "Pending Approval",
                    "3" => "Approve",
                    "4" => "Reject"
                );

            return $status;
        }
    }
    if(!function_exists('pricescategory_list'))
    {
        function pricescategory_list() {
            $status = array(
                    "1" => "LORRY 10FT-DIESEL",
                    "2" => "LORRY 10FT-DIESEL (Freezer)",
                    "3" => "LORRY 10FT-PETROL",
                    "4" => "BIG VAN-DIESEL",
                    "5" => "BIG VAN-PETROL",
                    "6" => "MEDIUM VAN-DIESEL",
                    "7" => "MEDIUM VAN-PETROL",
                    "8" => "SMALL VAN-DIESEL",
                    "9" => "DOUBLE CAB PICK UP",
                    "10" => "PB BUS PETROL/DIESEL SMALL BUS (14CAP & BELOW)",
                    "11" => "HEAVY VEHICLE 14-17",
                    "12" => "HEAVY VEHICLE 14-17 (Freezer)",
                    "13" => "HEAVY VEHICLE 18 (6 TON) & ABOVE",
                    "14" => "HEAVY VEHICLE 18 (10 TON) & ABOVE",
                    "15" => "CRANE LORRY / TIPPER / PRIME MOVER & OTHERS",
                    "16" => "PRIVATE VEHICLE - Cat A",
                    "17" => "PRIVATE VEHICLE - Cat B",
                    "18" => "PRIVATE VEHICLE - Luxury"

                );

            return $status;
        }
    }
    if(!function_exists('crmtitle_list'))
    {
        function crmtitle_list() {
            $status = array(
                    "1" => "Mr",
                    "2" => "Ms",
                    "3" => "Mrs",
                    "4" => "Mdm"
                );

            return $status;
        }
    }
    if(!function_exists('consideration_list'))
    {
        function consideration_list() {
            $status = array(
                    "1" => "Expensive - out of range",
                    "2" => "Consideration",
                    "3" => "Change of agency",
                    "4" => "Renewed with friend/relative",
                    "5" => "Renewed with other ins co",
                    "6" => "Renewed Proceed",
                    "7" => "Extension and Sold"
                );

            return $status;
        }
    }
    if(!function_exists('requote_list'))
    {
        function requote_list() {
            $status = array(
                    "1" => "Follow Up",
                    "2" => "Renewed",
                    "3" => "NTU/Lost",
                    "4" => "Re-Quote",
                    "5" => "Sold"
                );

            return $status;
        }
    }
    if(!function_exists('ncd_list'))
    {
        function ncd_list() {
            $status = array(
                    "0" => "0.00",
                    "1" => "10.00",
                    "2" => "20.00",
                    "3" => "30.00",
                    "4" => "40.00",
                    "5" => "50.00"
                );

            return $status;
        }
    }
    if(!function_exists('coverage_list'))
    {
        function coverage_list() {
            $status = array(
                    "COMP" => "COMP: Comprehensive",
                    "TPFT" => "TPFT: Third Party Fire & Theft",
                    "TPO" => "TPO: Third Party only"
                );
            return $status;
        }
    }
    if(!function_exists('maritalstatus_list'))
    {
        function maritalstatus_list() {
            $status = array(
                    "1" => "Single",
                    "2" => "Married",
                    "3" => "Divorced",
                    "4" => "Widowed"
                );
            return $status;
        }
    }
    if(!function_exists('vehiclesource_list'))
    {
        function vehiclesource_list() {
            $status = array(
                    "1" => "Parallel Import",
                    "2" => "Authorised Dealer"
                );
            return $status;
        }
    }
    if(!function_exists('saletype_list'))
    {
        function saletype_list() {
            $status = array(
                    "1" => "TradeSales",
                    "2" => "External Case",
                    "3" => "Reloan Case"
                );
            return $status;
        }
    }
    if(!function_exists('sbu_list'))
    {
        function sbu_list() {
            $status = array(
                    "1" => "APL - ABWIN PTE LTD",
                    "2" => "ATD - ABWIN TRADING PTE LTD",
                    "3" => "ATR - ABWIN (1994) PTE LTD (*FR 01-11-2017)"
                );
            return $status;
        }
    }
    if(!function_exists('accessories_list'))
    {
        function accessories_list() {
            $status = array(
                    "1" => "Box",
                    "2" => "Canopy/hood",
                    "3" => "Crane",
                    "4" => "Regfrigerator",
                    "5" => "Tailgate",
                    "6" => "Box+Tailgate"
                );
            return $status;
        }
    }
    if(!function_exists('costtype_list'))
    {
        function costtype_list() {
            $status = array(
                    "1" => "ADMIN FEE",
                    "2" => "E-TRANSFER",
                    "3" => "LAY UP",
                    "4" => "MISCELLANEOUS",
                    "5" => "ROAD TAX",
                    "6" => "REPAIR",
                    "7" => "FLOOR STOCK",
                    "8" => "PETROL & WASH",
                    "9" => "PARKING COUPON",
                    "10" => "ADVERTISMENT FEE",
                    "11" => "PROCESSING FEE",
                    "12" => "E-TRANSFER FEE",
                    "13" => "INSPECTION",
                    "14" => "COE BY COMPANY",
                    "15" => "OVER TRADE",
                    "16" => "SURCHARGE",
                    "17" => "OUTSIDE PURCHASE COMM",
                    "18" => "OUTSIDE SALE COMM",
                    "19" => "HP COMM",
                    "20" => "OVERRIDING COMM",
                    "21" => "CONVERSION FEE",
                    "22" => "DEPOSIT FOREITED",
                    "23" => "EXTENSION",
                    "24" => "RETENTION FEE",
                    "25" => "PETROL",
                    "26" => "BANK SURCHARGE",
                    "27" => "CO ADMIN",
                    "28" => "HP ADMIN FEE"
                );
            return $status;
        }
    }

    if(!function_exists('commissiontype_list'))
    {
        function commissiontype_list() {
            $status = array(
                    "1" => "BUY-IN COMMISSION",
                    "2" => "Less SELL-OUT ADMIN COMM",
                    "3" => "Less SELL-OUT COMM",
                    "4" => "INSURANCE",
                    "5" => "HP/LOAN COMM",
                    "6" => "Sale-commmission",                    
                    "9" => "BANK SURCHARGE", 
                    "10" => "ADMIN FEE COLLECTED" 
                    
                );
            return $status;
        }
    }
    if(!function_exists('getprivate_car_bank'))
    {
        function getprivate_car_bank() {
            $status = array(
                    "1" => "MayBank Application Form 2021_09",
                    "2" => "Abwin Group Proposal Form wef 25032021",
                    "3" => "HL BANK 1219 APPL",
                    "4" => "DBS",
                    "5" => "UOB_Company",
                    "6" => "UOB INDIVIDUAL APPLICATION _R6_16",
                    "7" => "HONG LEONG FINANCE"
                );
            return $status;
        }
    }
    if(!function_exists('business_activity_list'))
    {
        function business_activity_list() {
            $status = array(
                    "1" => "Manufacturing",
                    "2" => "Property",
                    "3" => "Retail",
                    "4" => "F&B/Hospitality",
                    "5" => "Building & Construction",
                    "6" => "Logistics/Warehousing",
                    "7" => "Servicing",
                    "8" => "Electronics",
                    "9" => "Transportation/Storage",
                    "10" => "Professional Practices",
                    "11" => "Others"
                );
            return $status;
        }
    }

    if(!function_exists('type_of_vehicle'))
    {
        function type_of_vehicle() {
            $status = array(
                    "1" => "Pickup",
                    "2" => "Bus",
                    "3" => "Van",
                    "4" => "Motorcycle",
                    "5" => "Lorry",
                    "6" => "Prime Mover",
                    "7" => "Trailer",
                    "8" => "Refrigerated Vehicle",
                    "9" => "Others"
                );
            return $status;
        }
    }
    if(!function_exists('motor_vehicle_type'))
    {
        function motor_vehicle_type() {
            $status = array(
                    "1" => "Private car",
                    "2" => "Saloon",
                    "3" => "Off-peak car",
                    "4" => "Coupe",
                    "5" => "SUV",
                    "6" => "Station wagon or MPV",
                    "7" => "High-performance or turbo",
                    "8" => "Commercial vehicle",
                    "9" => "Standard van",
                    "10" => "Standard lorry or pickup",
                    "11" => "Refrigerated vehicle",
                    "12" => "Hood or canopy",
                    "13" => "Bus",
                    "14" => "Standard lorry with crane",
                    "15" => "Standard lorry with tailgate or power gate",
                    "16" => "Garbage truck",
                    "17" => "Tourist",
                    "18" => "Mixer",
                    "19" => "Prime mover",
                    "20" => "Trailer",
                    "21" => "Tipper",
                    "22" => "Non-tourist",
                    "23" => "Tanker",
                    "24" => "Ambulance",
                    "25" => "Tow truck",
                    "26" => "Motorcycle",
                    "27" => "Side car",
                    "28" => "Others"
                );
            return $status;
        }
    }
    if(!function_exists('commercial_vehicles'))
    {
        function commercial_vehicles() {
            $status = array(
                    "carriageofgoods" => "Carriage of goods / passengers in connection with own business but not for hire or reward",
                    "carriageofgoodsforhire" => "Carriage of goods for hire or reward",
                    "carriageofpassenger" => "Carriage of passengers for hire or reward",
                    "rental" => "Rental to Third Party",
                    "other" => "Other purpose"
                );
            return $status;
        }
    }
    if(!function_exists('china_typeofvehicle'))
    {
        function china_typeofvehicle() {
            $status = array(
                    "1" => "Saloon",
                    "2" => "Hatchback",
                    "3" => "Stationwagon",
                    "4" => "SUV",
                    "5" => "MPV",
                    "6" => "Roadster",
                    "7" => "Jeep",
                    "8" => "Coupe / Convertible / Cabriolet"
                );
            return $status;
        }
    }
    if(!function_exists('china_bodytype'))
    {
        function china_bodytype() {
            $status = array(
                    "1" => "Van",
                    "2" => "Pickup",
                    "3" => "Lorry",
                    "4" => "Bus",
                    "5" => "Refrigerator Vehicle",
                    "6" => "Box Van",
                    "7" => "Tipper",
                    "8" => "Others"
                );
            return $status;
        }
    }
    if(!function_exists('message'))
    {
        function message() {
            $html = "";
            if(isset($_SESSION['success'])) {
                $html = '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  '.$_SESSION['success'].'
                </div>';
            } else if(isset($_SESSION['error'])) {
                $html = '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Error!</h5>
                  '.$_SESSION['error'].'
                </div>';
            }
        
            unset($_SESSION['success']);
            unset($_SESSION['error']);
        
            echo $html;
        }
    }
?>