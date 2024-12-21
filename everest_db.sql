-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 08:53 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `everest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE `body_type` (
  `id` int(11) NOT NULL,
  `body_type` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `body_type`
--

INSERT INTO `body_type` (`id`, `body_type`, `created_date`) VALUES
(1, 'Body 1', '2022-09-16'),
(2, 'Body 2', '2022-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `booking_no` varchar(255) NOT NULL,
  `delivery_address1` text NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_remark` varchar(255) NOT NULL,
  `delivery_postcode` varchar(255) NOT NULL,
  `delivery_address2` varchar(255) NOT NULL,
  `deli_phone` varchar(255) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `driving_license_front` varchar(255) NOT NULL,
  `driving_license_back` varchar(255) NOT NULL,
  `national_id_front` varchar(255) NOT NULL,
  `national_id_back` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `billing_address1` text NOT NULL,
  `billing_address2` text NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `billing_postcode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `check_status` int(11) NOT NULL,
  `available_date` date NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `reference_date` datetime NOT NULL,
  `confirm_date` date NOT NULL,
  `subscription_price` varchar(255) NOT NULL,
  `total_amt` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `vehicle_id`, `booking_no`, `delivery_address1`, `delivery_date`, `delivery_remark`, `delivery_postcode`, `delivery_address2`, `deli_phone`, `delivery_time`, `driving_license_front`, `driving_license_back`, `national_id_front`, `national_id_back`, `model_name`, `duration`, `color`, `billing_address1`, `billing_address2`, `billing_phone`, `country`, `state`, `billing_postcode`, `status`, `check_status`, `available_date`, `payment_method`, `bank_name`, `reference_date`, `confirm_date`, `subscription_price`, `total_amt`, `created_date`) VALUES
(1, 3, 1, '20220827', 'Test Address', '2022-08-31', 'Remark Testing', '11102', '', '+65548869977', 'Afternoon', '', '', '', '', '2019 Toyota Noah 1.8', '3', '#ffffff', 'Billing Address Test', '', '+65548869977', 'Test Country', 'Test State', '5452', 1, 3, '2022-11-30', 'cash', '', '0000-00-00 00:00:00', '2022-12-05', '4300', '12900', '2022-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_photo` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_photo`, `created_date`) VALUES
(1, 'Techinasia', 'sign1.png', '2023-02-28'),
(2, 'E27', 'sign2.png', '2023-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `car_package`
--

CREATE TABLE `car_package` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `best` varchar(255) NOT NULL,
  `best_status` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_package`
--

INSERT INTO `car_package` (`id`, `vehicle_id`, `duration`, `price`, `best`, `best_status`, `status`, `created_date`) VALUES
(1, 1, '3', '4300', 'false', '', '', '2022-08-27'),
(2, 1, '6', '4000', 'false', '', '', '2022-08-27'),
(3, 1, '12', '3950', 'true', 'bestsaver', '', '0000-00-00'),
(4, 2, '3', '2500', 'false', '', '', '2022-08-29'),
(5, 2, '12', '2000', 'true', 'bestsaver', '', '2022-08-29'),
(6, 3, '6', '232', 'false', '', '', '2022-08-29'),
(7, 4, '12', '5000', 'true', 'bestsaver', '', '2022-08-29'),
(8, 5, '12', 'sdfa', 'false', '', '', '2022-08-29'),
(9, 6, '6', 'sdfa', 'true', '', '', '2022-08-29'),
(10, 9, '6', 'sfdaf', 'false', '', '', '2022-08-29'),
(11, 8, '12', 'adf', 'false', '', '', '2022-08-29'),
(12, 9, '6', 'sfd', 'false', '', '', '2022-08-29'),
(13, 10, '12', '322', 'false', '', '', '2022-08-29'),
(14, 11, '12', '2342', 'false', '', '', '2022-08-29'),
(15, 12, '3', '234', 'false', '', '', '2022-08-30'),
(16, 13, '12', 'sdf', 'false', '', '', '2022-08-30'),
(17, 14, '12', '323', 'true', 'bestsaver', '', '2022-08-30'),
(18, 14, '3', '322', 'false', '', '', '0000-00-00'),
(19, 4, '3', '5500', 'false', '', '', '2022-11-02'),
(20, 4, '6', '5300', 'false', '', '', '2022-11-02'),
(21, 6, '3', '4000', 'false', '', '', '2022-11-02'),
(22, 7, '3', '4700', 'false', '', '', '2022-11-10'),
(23, 7, '6', '4500', 'false', '', '', '2022-11-10'),
(24, 7, '12', '4000', 'true', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cashcreditinvoice`
--

CREATE TABLE `cashcreditinvoice` (
  `id` int(11) NOT NULL,
  `billto` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `hirer` varchar(255) NOT NULL,
  `hirer_address` text NOT NULL,
  `vehireg_no` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `originalreg_date` date NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `vehi_invoiceprice` varchar(255) NOT NULL,
  `inclusive_items` varchar(255) NOT NULL,
  `insurance_premium` varchar(255) NOT NULL,
  `loan_advpayment` varchar(255) NOT NULL,
  `less` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `total_amt` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cashcreditinvoice`
--

INSERT INTO `cashcreditinvoice` (`id`, `billto`, `address`, `date`, `serial_no`, `invoice_no`, `hirer`, `hirer_address`, `vehireg_no`, `make`, `model`, `originalreg_date`, `engine_no`, `chassis_no`, `vehi_invoiceprice`, `inclusive_items`, `insurance_premium`, `loan_advpayment`, `less`, `deposit`, `total_amt`, `created_at`) VALUES
(1, 'THIM CONSTRUCTION', '494A GEYLANG ROAD (S)339452', '2022-02-09', '10354', 'INV10354', 'THIM CONSTRUCTION', '494A GEYLANG ROAD (S)339452', 'GBL6942E', 'TOYOTA', 'HIACE DX 2.0 AUTO', '2022-11-02', '1TR2412904', 'TRH2005049969', '67800', 'GBL6942E,Certificate of Entitlement (COE),28812}GBL6942E,Road Tax ( Six Months / Twelve Months),0}GBL6942E,Additional Registration Fee (ARF),1362}GBL6942E,Registration Fee,220}', '1628.84', '879', '0', '6800', '61000.00', '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `com`
--

CREATE TABLE `com` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `billto` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `vehi_no` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `ac` varchar(255) NOT NULL,
  `commission` varchar(255) NOT NULL,
  `incentive` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `gst_percent` varchar(255) NOT NULL,
  `total_amt` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `com`
--

INSERT INTO `com` (`id`, `date`, `billto`, `address`, `vehi_no`, `make`, `model`, `chassis_no`, `ac`, `commission`, `incentive`, `gst`, `gst_percent`, `total_amt`, `type`, `created_at`) VALUES
(1, '2022-12-14', 'THIM CONSTRUCTION', '494A GEYLANG ROAD (S)339452', 'GBL6942E', 'TOYOTA', 'HIACE DX 2.0 AUTO', 'TRH2005049969', '', '2745', '0', '192.15', '7', '2937.15', 'gst', '2022-12-27'),
(2, '2023-01-11', 'Dickson Capital Pte Ltd', '29 UBI ROAD 4,DICKSON AUTO CENTRE,Singapore 408619', 'SJA5401U', 'KIA', 'FORTE K3 1.6A', 'KNAFJ411MJ5747522', 'EVEREST AUTO PTE LTD', '2160', '240', '168', '7', '2568.00', 'gms', '2023-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `cmy_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `cmy_name`, `address`, `created_at`) VALUES
(1, 'THIM CONSTRUCTION', '494A GEYLANG ROAD (S)339452', '2023-01-10'),
(2, 'Dickson Capital Pte Ltd', '29 UBI ROAD 4,DICKSON AUTO CENTRE,Singapore 408619', '2023-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_source`
--

CREATE TABLE `contact_source` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_source`
--

INSERT INTO `contact_source` (`id`, `name`, `created_at`) VALUES
(1, 'Canvassing', '0000-00-00'),
(2, 'Cold Call', '0000-00-00'),
(3, 'Company Visit', '0000-00-00'),
(4, 'Customer Base', '0000-00-00'),
(5, 'Networking', '0000-00-00'),
(6, 'One Shift', '0000-00-00'),
(7, 'Other Newspaper', '0000-00-00'),
(8, 'Own Network', '0000-00-00'),
(9, 'Referral', '0000-00-00'),
(10, 'Referral ($$$)', '0000-00-00'),
(11, 'Referral (Jason)', '0000-00-00'),
(12, 'Referral(Marketing)', '0000-00-00'),
(13, 'SgCarMart', '0000-00-00'),
(14, 'STCARS', '0000-00-00'),
(15, 'Straits Times', '0000-00-00'),
(16, 'Walk-In', '0000-00-00'),
(17, 'Zao Bao', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `costsheet1_tbl`
--

CREATE TABLE `costsheet1_tbl` (
  `id` int(11) NOT NULL,
  `broker1` varchar(255) NOT NULL,
  `broker2` varchar(255) NOT NULL,
  `broker3` varchar(255) NOT NULL,
  `car_plate` varchar(255) NOT NULL,
  `makemodel` text NOT NULL,
  `costsheetdes` text NOT NULL,
  `profit_total` varchar(255) NOT NULL,
  `costing_total` varchar(255) NOT NULL,
  `totalamt` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costsheet1_tbl`
--

INSERT INTO `costsheet1_tbl` (`id`, `broker1`, `broker2`, `broker3`, `car_plate`, `makemodel`, `costsheetdes`, `profit_total`, `costing_total`, `totalamt`, `created_at`) VALUES
(1, 'EVAN', 'CO', '', 'SJT4228K', 'SUZUKI SX4', 'PURCHASE COMM ALVIN,,,2023-01-18,0,80,80}OUTSIDE COMM,kkkk,fffff,2023-01-12,0,200,200}PAYMENT TO SELLER,uuu,mmm,2023-01-31,0,1000,1000}', '0.00', '1280.00', '1280.00', '2023-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `registration_no` text NOT NULL,
  `loan_period` text NOT NULL,
  `loan_rate` text NOT NULL,
  `loan_amt` text NOT NULL,
  `purchase_price` text NOT NULL,
  `instalment` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `nric` text NOT NULL,
  `dob` date NOT NULL,
  `hirer_gender` text NOT NULL,
  `marital_status` text NOT NULL,
  `occupation` text NOT NULL,
  `cmy_name` text NOT NULL,
  `cmy_address` text NOT NULL,
  `month_income` text NOT NULL,
  `yearof_service` text NOT NULL,
  `email` text NOT NULL,
  `offc` text NOT NULL,
  `hp` text NOT NULL,
  `phone` text NOT NULL,
  `guarantor_name` text NOT NULL,
  `guarantor_address` text NOT NULL,
  `guarantor_nric` text NOT NULL,
  `guarantor_dob` date NOT NULL,
  `guarantor_marital_status` text NOT NULL,
  `guarantor_occupation` text NOT NULL,
  `guarantor_cmyname` text NOT NULL,
  `guarantor_relationship` text NOT NULL,
  `guarantor_cmyaddress` text NOT NULL,
  `guarantor_monthincome` text NOT NULL,
  `guarantor_yearofservice` text NOT NULL,
  `guarantor_email` text NOT NULL,
  `guarantor_offc` text NOT NULL,
  `guarantor_hp` text NOT NULL,
  `guarantor_phone` text NOT NULL,
  `signof_hirer` text NOT NULL,
  `signof_guarantor` text NOT NULL,
  `tto` text NOT NULL,
  `tel` text NOT NULL,
  `fax` text NOT NULL,
  `reply_person` text NOT NULL,
  `eapl_date` date NOT NULL,
  `salesperson` text NOT NULL,
  `salesperson_mobile` text NOT NULL,
  `salesperson_fax` text NOT NULL,
  `salesperson_email` text NOT NULL,
  `vehi_no` text NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `dateof_reg` date NOT NULL,
  `manufacture_year` tinyint(4) NOT NULL,
  `engine_capacity` text NOT NULL,
  `parallel_import` text NOT NULL,
  `body_type` text NOT NULL,
  `prev_insurer` text NOT NULL,
  `prev_vehino` text NOT NULL,
  `prev_ncd` text NOT NULL,
  `insured_name` text NOT NULL,
  `insured_nric` text NOT NULL,
  `insured_dob` date NOT NULL,
  `insured_marital_status` text NOT NULL,
  `insured_gender` text NOT NULL,
  `insured_occupation` text NOT NULL,
  `insured_licensepassdate` date NOT NULL,
  `insured_email` text NOT NULL,
  `insured_mobile` text NOT NULL,
  `driver_name` text NOT NULL,
  `driver_nric` text NOT NULL,
  `driver_dob` date NOT NULL,
  `driver_marital_status` text NOT NULL,
  `driver_gender` text NOT NULL,
  `driver_occupation` text NOT NULL,
  `driver_licensepassdate` date NOT NULL,
  `driver_relationship` text NOT NULL,
  `claim_exp` text NOT NULL,
  `claim_expyes_date` date NOT NULL,
  `claim_expyes_amt` text NOT NULL,
  `quotation_valid` text NOT NULL,
  `signof_proposal` text NOT NULL,
  `proposalsign_date` date NOT NULL,
  `detailsofgoods` text NOT NULL,
  `chassisno` text NOT NULL,
  `yearofmanufacture` text NOT NULL,
  `engineno` text NOT NULL,
  `typeof_employ` text NOT NULL,
  `guaran_typeof_employ` text NOT NULL,
  `finance_period` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `registration_no`, `loan_period`, `loan_rate`, `loan_amt`, `purchase_price`, `instalment`, `name`, `address`, `nric`, `dob`, `hirer_gender`, `marital_status`, `occupation`, `cmy_name`, `cmy_address`, `month_income`, `yearof_service`, `email`, `offc`, `hp`, `phone`, `guarantor_name`, `guarantor_address`, `guarantor_nric`, `guarantor_dob`, `guarantor_marital_status`, `guarantor_occupation`, `guarantor_cmyname`, `guarantor_relationship`, `guarantor_cmyaddress`, `guarantor_monthincome`, `guarantor_yearofservice`, `guarantor_email`, `guarantor_offc`, `guarantor_hp`, `guarantor_phone`, `signof_hirer`, `signof_guarantor`, `tto`, `tel`, `fax`, `reply_person`, `eapl_date`, `salesperson`, `salesperson_mobile`, `salesperson_fax`, `salesperson_email`, `vehi_no`, `make`, `model`, `dateof_reg`, `manufacture_year`, `engine_capacity`, `parallel_import`, `body_type`, `prev_insurer`, `prev_vehino`, `prev_ncd`, `insured_name`, `insured_nric`, `insured_dob`, `insured_marital_status`, `insured_gender`, `insured_occupation`, `insured_licensepassdate`, `insured_email`, `insured_mobile`, `driver_name`, `driver_nric`, `driver_dob`, `driver_marital_status`, `driver_gender`, `driver_occupation`, `driver_licensepassdate`, `driver_relationship`, `claim_exp`, `claim_expyes_date`, `claim_expyes_amt`, `quotation_valid`, `signof_proposal`, `proposalsign_date`, `detailsofgoods`, `chassisno`, `yearofmanufacture`, `engineno`, `typeof_employ`, `guaran_typeof_employ`, `finance_period`, `created_at`) VALUES
(1, 'GP170223', '5', '10', '4000', '8000', '1000', 'Collen Hansen', 'Singapore', 'G98/234445', '2023-01-30', 'Female', 'Married', 'Manager', 'World Institute', 'Oregon , USA', '85000', '3,5', 'collen@gmail.com', 'Testing', 'Testing', '87777777', 'Bob Boach', 'Oregon', 'G98/789654', '2023-02-02', 'Married', 'Manager', 'World Institute', 'Friend', 'Oregon , USA', '10000', '7,8', 'bob@gmail.com', 'Testing', 'Testing', '985555555', 'kzh-signature40.jpg', 'kzh-signature41.jpg', 'James', '578996455', '221', 'May', '2023-02-09', 'May', '965874125', '556', 'may@gmail.com', '4', 'E27', '2015 Honda Shuttle 1.5', '2023-02-07', 127, '20.5', 'Yes', 'Lorry', 'Mike', '12DCB', 'testing ncd', 'Richard', 'HY54879', '2023-02-03', 'Married', 'Male', 'Sale Manager', '2022-11-09', 'richard@gmail.com', '997566635', 'Peter', 'UJH974566', '2023-02-01', 'Married', 'Male', 'indoor', '2023-02-02', 'Friend', 'Yes', '2023-03-01', 'Tesing claim', 'Test Com,Test premium,Test excess,Test windscreen,Test remark}', 'kzh-signature42.jpg', '2023-02-08', 'Test Details', '54655H', '2019', '44D', 'Self-Employed', 'Others', '12 months', '2023-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `customertax_invoice`
--

CREATE TABLE `customertax_invoice` (
  `id` int(11) NOT NULL,
  `billto` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `vehireg_no` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `original_reg_date` date NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `vehi_invoice_price` varchar(255) NOT NULL,
  `hp_facilities_fee` varchar(255) NOT NULL,
  `others_canopy` varchar(255) NOT NULL,
  `lta_transferfee` varchar(255) NOT NULL,
  `inclusive_items` text NOT NULL,
  `insurance_premium` varchar(255) NOT NULL,
  `loan_advance_payment` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `down_fullpayment` varchar(255) NOT NULL,
  `trade_in_vehino` varchar(255) NOT NULL,
  `trade_in_price` varchar(255) NOT NULL,
  `lessfull_sette_amt` varchar(255) NOT NULL,
  `leasstrade_amt` varchar(255) NOT NULL,
  `loan_amt` varchar(255) NOT NULL,
  `loan_amt_percent` varchar(255) NOT NULL,
  `finance_cmy` varchar(255) NOT NULL,
  `total_invoice_amt` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customertax_invoice`
--

INSERT INTO `customertax_invoice` (`id`, `billto`, `address`, `date`, `serial_no`, `invoice_no`, `vehireg_no`, `make`, `model`, `original_reg_date`, `engine_no`, `chassis_no`, `vehi_invoice_price`, `hp_facilities_fee`, `others_canopy`, `lta_transferfee`, `inclusive_items`, `insurance_premium`, `loan_advance_payment`, `deposit`, `down_fullpayment`, `trade_in_vehino`, `trade_in_price`, `lessfull_sette_amt`, `leasstrade_amt`, `loan_amt`, `loan_amt_percent`, `finance_cmy`, `total_invoice_amt`, `type`, `created_at`) VALUES
(1, 'THIM CONSTRUCTION', '494A GEYLANG ROAD (S)339452', '2022-12-16', '10354', 'INV10354', 'GBL6942E', 'TOYOTA', 'HIACE DX 2.0 AUTO', '2022-11-02', '1TR2412904', 'TRH2005049969', '67800', '', '', '', 'GBL6942E,Certificate of Entitlement (COE),34656}GBL6942E,Road Tax ( Six Months / Twelve Months),55}', '200', '80', '100', '20', '50', '400', '600', '200', '7000', '4', 'UOB Bank', '1500', 'gst', '2022-12-21'),
(2, 'RAMADAS KURUBA', '6 SIMEI RISE #06-14, SINGAPORE 528802', '2023-01-18', '10407', 'INV10407', 'SJA5401U', 'KIA', 'FORTE K3 1.6Aa', '2023-01-18', 'G4FGHH682674	', 'KNAFJ411MJ5747522', '63000', '1000', '', '', '', '1264.56', '854', '2000', '16118.56', '0', '0', '0', '', '0', '2.28', 'DBS Bank', '0', 'gms', '2023-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `duration`
--

CREATE TABLE `duration` (
  `id` int(11) NOT NULL,
  `duration_id` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `duration`
--

INSERT INTO `duration` (`id`, `duration_id`, `duration`) VALUES
(1, 1, '1 Month'),
(2, 3, '3 Months'),
(3, 6, '6 Months'),
(4, 12, '12 Months'),
(5, 24, '24 Months'),
(6, 48, '48 Months');

-- --------------------------------------------------------

--
-- Table structure for table `eapl_quotation`
--

CREATE TABLE `eapl_quotation` (
  `id` int(11) NOT NULL,
  `to` text NOT NULL,
  `tel` text NOT NULL,
  `fax` text NOT NULL,
  `reply_person` text NOT NULL,
  `date` date NOT NULL,
  `salesperson` text NOT NULL,
  `salesperson_mobile` text NOT NULL,
  `salesperson_fax` text NOT NULL,
  `salesperson_email` text NOT NULL,
  `vehi_no` text NOT NULL,
  `makemodel` text NOT NULL,
  `dateof_reg` text NOT NULL,
  `manufacture_year` text NOT NULL,
  `engine_capacity` text NOT NULL,
  `parallel_import` text NOT NULL,
  `body_type` text NOT NULL,
  `prev_insurer` text NOT NULL,
  `prev_vehino` text NOT NULL,
  `prev_ncd` text NOT NULL,
  `insured_name` text NOT NULL,
  `insured_nric` text NOT NULL,
  `insured_dob` date NOT NULL,
  `insured_marital_status` text NOT NULL,
  `insured_gender` text NOT NULL,
  `insured_occupation` text NOT NULL,
  `insured_licensepassdate` date NOT NULL,
  `insured_email` text NOT NULL,
  `insured_mobile` text NOT NULL,
  `driver_name` text NOT NULL,
  `driver_nric` text NOT NULL,
  `driver_dob` date NOT NULL,
  `driver_marital_status` text NOT NULL,
  `driver_gender` text NOT NULL,
  `driver_occupation` text NOT NULL,
  `driver_licensepassdate` date NOT NULL,
  `driver_relationship` text NOT NULL,
  `claim_exp` text NOT NULL,
  `claim_expyes_date` date NOT NULL,
  `quotation_valid` text NOT NULL,
  `signof_proposal` text NOT NULL,
  `proposalsign_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ea_loan`
--

CREATE TABLE `ea_loan` (
  `id` int(11) NOT NULL,
  `makemodel` text NOT NULL,
  `registration_no` text NOT NULL,
  `loan_period` text NOT NULL,
  `loan_rate` text NOT NULL,
  `loan_amt` text NOT NULL,
  `purchase_price` text NOT NULL,
  `instalment` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `nric` text NOT NULL,
  `dob` date NOT NULL,
  `marital_status` text NOT NULL,
  `occupation` text NOT NULL,
  `cmy_name` text NOT NULL,
  `cmy_address` text NOT NULL,
  `month_income` text NOT NULL,
  `yearof_service` text NOT NULL,
  `email` text NOT NULL,
  `offc` text NOT NULL,
  `hp` text NOT NULL,
  `guarantor_name` text NOT NULL,
  `guarantor_address` text NOT NULL,
  `guarantor_nric` text NOT NULL,
  `guarantor_dob` date NOT NULL,
  `guarantor_marital_status` text NOT NULL,
  `guarantor_occupation` text NOT NULL,
  `guarantor_cmyname` text NOT NULL,
  `guarantor_relationship` text NOT NULL,
  `guarantor_cmyaddress` text NOT NULL,
  `guarantor_monthincome` text NOT NULL,
  `guarantor_yearofservice` text NOT NULL,
  `guarantor_email` text NOT NULL,
  `guarantor_offc` text NOT NULL,
  `guarantor_hp` text NOT NULL,
  `signof_hirer` text NOT NULL,
  `signof_guarantor` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `main_title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `main_title`, `sub_title`, `description`, `created_date`) VALUES
(1, 'sdf', 'sdf', '<p>sdfa</p>\r\n\r\n<p>asdf</p>\r\n', '2022-08-27'),
(2, 'asdf', 'sdfa', '<p>sdffsfd</p>\r\n\r\n<p>sdfsdf</p>\r\n', '2022-08-27'),
(3, 'ddddbbb', 'eeee', '<p>test</p>\r\n', '2022-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `created_date`) VALUES
(3, 'feature3', '2022-09-16'),
(4, 'feature4', '2022-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type`
--

CREATE TABLE `fuel_type` (
  `id` int(11) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fuel_type`
--

INSERT INTO `fuel_type` (`id`, `fuel_type`, `created_date`) VALUES
(1, 'Fuel 1', '2022-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `gstinvoice`
--

CREATE TABLE `gstinvoice` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `vehireg_no` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `originalregdate` date NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `vehi_invoiceprice` varchar(255) NOT NULL,
  `deposit_paid` varchar(255) NOT NULL,
  `loan_amt` varchar(255) NOT NULL,
  `loan_commission` varchar(255) NOT NULL,
  `incentive` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gstinvoice`
--

INSERT INTO `gstinvoice` (`id`, `customer_name`, `customer_address`, `serial_no`, `invoice_no`, `date`, `vehireg_no`, `make`, `model`, `originalregdate`, `engine_no`, `chassis_no`, `vehi_invoiceprice`, `deposit_paid`, `loan_amt`, `loan_commission`, `incentive`, `gst`, `type`, `created_at`) VALUES
(1, 'THIM CONSTRUCTION', '494A GEYLANG ROAD (S)339452', '10354', 'INV10354', '2022-02-09', 'GBL6942E', 'TOYOTA', 'HIACE DX 2.0 AUTO', '2022-11-02', '1TR2412904', 'TRH2005049969', '67800', '6800', '61000', '2745', '0.00', '192.15', 'gst', '2022-12-22'),
(2, 'Dickson Capital Pte Ltd', '29 UBI ROAD 4,DICKSON AUTO CENTRE,Singapore 408619', '10407', 'INV10407', '2022-12-08', 'SJA5401U', 'KIA', 'FORTE K3 1.6A', '2022-12-07', 'G4FGHH682674', 'KNAFJ411MJ5747522', '80000', '32000', '48000', '2160', '240', '168', 'gms', '2022-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `how_works`
--

CREATE TABLE `how_works` (
  `id` int(11) NOT NULL,
  `step` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `icqself`
--

CREATE TABLE `icqself` (
  `id` int(11) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `cmyname` varchar(255) NOT NULL,
  `ic_no` varchar(255) NOT NULL,
  `insurance_cmy` varchar(255) NOT NULL,
  `policy_no` varchar(255) NOT NULL,
  `poi_startdate` date NOT NULL,
  `poi_enddate` date NOT NULL,
  `typeofcoverage` varchar(255) NOT NULL,
  `saleman` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `icqself`
--

INSERT INTO `icqself` (`id`, `vehicle_no`, `cmyname`, `ic_no`, `insurance_cmy`, `policy_no`, `poi_startdate`, `poi_enddate`, `typeofcoverage`, `saleman`, `created_at`) VALUES
(1, '3', 'JIAN MAN CONSTRUCTION PTE LTD', '198700419M', '0054 - Income Insurance Limited', '5113580970-03', '2022-11-06', '2023-11-05', 'Comprehensive Any Workshop', '0176 - OOI CHEE SIONG', '2022-10-09'),
(2, '4', 'LEE FEI YANG, KEVIN (LI FEIYANG, KEVIN)', 'S8326741J', '0001 - NTUC INCOME', '5113472231-02', '2021-11-09', '2022-11-08', 'DrivoClassic', '0176 - OOI CHEE SIONG', '2022-10-07'),
(3, '6', 'NEW GEN SVC EXPRESS', '53363506C', '0053 - CHINA TAIPING INSURANCE (S) PTE LTD', 'DMCVSNW00143522100', '2022-11-12', '2023-03-25', 'Comprehensive Any Workshop', '0176 - OOI CHEE SIONG', '2022-10-07'),
(4, '1', 'LIM HEE CHOON', 'S1507532E', '0001 - NTUC INCOME', '5114068482-02', '2021-11-17', '2022-11-16', 'DrivoClassic', '0176 - OOI CHEE SIONG', '2022-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(100) NOT NULL COMMENT 'First Name',
  `last_name` varchar(100) NOT NULL COMMENT 'Last Name',
  `email` varchar(255) NOT NULL COMMENT 'Email Address',
  `dob` varchar(20) NOT NULL COMMENT 'Date of Birth',
  `contact_no` int(11) NOT NULL COMMENT 'Contact No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `system_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `lastmodified_by` varchar(255) NOT NULL,
  `lastmodified_Date` datetime NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `system_id`, `file`, `category`, `remark`, `entry_date`, `entry_time`, `created_by`, `created_date`, `lastmodified_by`, `lastmodified_Date`, `created_at`) VALUES
(1, 3, 'EQ_proposal___Commercial_Vehicle_Latest_Version_71.pdf,EQ_proposal___Private_Car_Latest_Version_71.pdf,', '1', '', '2013-03-05', '02:36:00', 'leeyi', '2013-02-06 06:36:31', 'Grid', '2023-02-21 15:28:07', '2022-09-30'),
(2, 4, 'Abwin_-_Cancellation_Form.pdf,EQ___Declaration_of_Loss_form.pdf,', '2', '', '2013-03-05', '12:11:00', 'aiyin', '2013-03-06 04:11:06', 'Grid', '2023-02-27 09:50:16', '2022-10-03'),
(3, 5, 'EQ___COA.pdf,CHINA_TAIPING___COA.pdf,NTUC___Appointment_Letter__Fleet_COA_.pdf,NTUC___COA_1_9_22.pdf,', '3', '', '2013-03-05', '02:39:00', 'aiyin', '2013-03-06 06:39:08', 'Grid', '2023-02-27 10:07:48', '2022-10-03'),
(4, 6, 'CHINA_TAIPING___Credit_Card_Payment_form.pdf,EQ___Credit_Card_Authorisation_Form.pdf,NTUC__Credit_Card_Form_1_9_22.pdf,', '4', '', '2013-03-05', '02:42:00', 'aiyin', '2013-03-06 06:42:57', 'huangpl', '2022-09-02 15:33:26', '2022-10-03'),
(5, 7, 'Declare_NCD.pdf,PDPA_Consent_Form_latest_27_October_2015__Generic_.pdf,Installment_Payment_Agreement__since_Nov2013_.pdf,EQ___China_Taiping__Change_of_Address_Form__Abwin_.pdf,NTUC_Change_of_Particular_Form_COPP_1_9_22.pdf,NTUC__NCD_transfer_1_9_22.pdf,LATEST_ACKNOWLEDGEMENT_LETTER_FOR_COMMERCIAL_VEHICLE_21_9_22.pdf,', '5', '', '2013-03-05', '02:48:00', 'aiyin', '2013-03-06 06:48:33', 'huangpl', '2022-09-27 13:51:55', '2022-10-03'),
(6, 8, 'LIBERTY_PREFERED_WORKSHOP.pdf,ERGO___AUTHORISED_WORKSHOP_LIST_Updated_16_04_2018.pdf,NTUC_Income_Windscreen_Approved_Workshops.pdf,CHINA_TAIPING_Authorised_Workshop_List_2021.pdf,EQ_Authorised_Reporting_Centre_and_Workshop_2021.pdf,NTUC_Income_Reporting_Centre___Authorised_Workshop_List__2021_.pdf,', '6', '', '2013-03-05', '03:59:00', 'aiyin', '2013-03-06 07:59:40', 'huangpl', '2021-08-25 13:31:41', '2022-10-03'),
(7, 9, 'Accident_Reporting_Procedure.pdf,Motor_Claim_Framework.pdf,PRIVATE_SETTLEMENT_FORM_FOR_MOTOR_ACCIDENTS.pdf,', '7', '', '2015-05-18', '10:31:00', 'leeyi', '2015-05-19 01:31:27', 'leeyi', '2015-05-19 15:16:19', '2022-10-03'),
(8, 10, 'EQ_Commercial_Vehicle_Insurance_Policy_Wordings_06062018.pdf,EQ_Private_Motor_Car_Insurance_Policy_Wordings_06062018.pdf,NTUC_COMMERCIAL_VEHICLE_POLICY_WORDING.pdf,NTUC_PRIVATE_CAR_POLICY_WORDING.pdf,ERGO___Summary_of_Commercial_vehicle_Coverage.pdf,ERGO___Summary_of_Private_Car_Coverage.pdf,CHINA_TAIPING_COMMERCIAL_POLICY.pdf,CHINA_TAIPING_PRIVATE_CAR_POLICY.pdf,', '8', '', '2018-06-06', '05:29:00', 'huangpl', '2018-06-06 17:29:42', 'huangpl', '2018-06-06 17:29:42', '2022-10-03'),
(9, 11, 'Authorisation_Letter___Insurance_Refund__Sole_Prop__Partnership__NEW.pdf,Authorisation_Letter_Insurance_Refund_for_Pte_Ltd_Company.pdf,CERTIFIED_EXTRACT_OF_RESOLUTION_REFUND_FOR_PTE_LTD.pdf,EXCESS_REFUND_AUTHORISATION_FORM.pdf,', '9', '', '2020-11-24', '10:14:00', 'huangpl', '2020-11-24 10:14:34', 'huangpl', '2020-11-24 10:14:34', '2022-10-03'),
(10, 2211000, '', '8', '', '2022-11-02', '03:38:00', 'Gridd', '2022-11-02 15:38:11', 'Gridd', '2022-11-02 15:44:37', '2022-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_category`
--

CREATE TABLE `insurance_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_category`
--

INSERT INTO `insurance_category` (`id`, `name`, `created_at`) VALUES
(1, 'Proposal Form', '2022-09-30'),
(2, 'Cancellation Form', '2022-09-30'),
(3, 'Change of Agency Form', '2022-09-30'),
(4, 'Credit Card Payment  Form', '2022-09-30'),
(5, 'Other Insurance forms', '2022-09-30'),
(6, 'Workshop List', '2022-09-30'),
(7, 'Motor Claim Procedure', '2022-09-30'),
(8, 'Insurance Coverage Plan ', '2022-09-30'),
(9, 'Insurance Refund Authorisation letter', '2022-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_files`
--

CREATE TABLE `insurance_files` (
  `id` int(11) NOT NULL,
  `insurance_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `document_name` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_files`
--

INSERT INTO `insurance_files` (`id`, `insurance_id`, `customer_id`, `document_name`, `file`, `created_at`) VALUES
(10, 1, 0, '', 'CHINA_TAIPING___Autosafe_SchemeForm.pdf', '2023-02-21'),
(11, 1, 0, '', 'China_Taiping_Commercial_Vehicle_Proposal_Form_Latest_2022.pdf', '2023-02-21'),
(12, 1, 0, '', 'China_Taiping_Private_Car_Proposal_Form_Latest_2022.pdf', '2023-02-21'),
(13, 1, 0, '', 'EQ_proposal___Commercial_Vehicle_Latest_Version_72.pdf', '2023-02-21'),
(14, 1, 0, '', 'EQ_proposal___Private_Car_Latest_Version_72.pdf', '2023-02-21'),
(15, 1, 0, '', 'LATEST_ACKNOWLEDGEMENT_LETTER_FOR_COMMERCIAL_VEHICLE.pdf', '2023-02-21'),
(16, 1, 0, '', 'NTUC_Proposal_Form_1_9_22.pdf', '2023-02-21'),
(17, 1, 0, '', 'PDPA_Consent_Form_latest_27_October_2015__Generic_.pdf', '2023-02-21'),
(20, 2, 0, '', 'Abwin_-_Cancellation_Form1.pdf', '2023-02-27'),
(21, 2, 0, '', 'EQ___Declaration_of_Loss_form1.pdf', '2023-02-27'),
(22, 3, 0, '', 'CHINA_TAIPING___COA.pdf', '2023-02-27'),
(23, 3, 0, '', 'EQ___COA.pdf', '2023-02-27'),
(24, 3, 0, '', 'NTUC___Appointment_Letter__Fleet_COA_.pdf', '2023-02-27'),
(25, 3, 0, '', 'NTUC___COA_1_9_22.pdf', '2023-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `invoice_name` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  `total_amt` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `user_id`, `vehicle_id`, `booking_id`, `invoice_name`, `invoice_date`, `delivery_date`, `total_amt`, `payment_method`, `status`, `created_date`) VALUES
(1, 3, 1, 1, 'EA2212005', '2022-12-05', '0000-00-00', '', '', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `leasing`
--

CREATE TABLE `leasing` (
  `id` int(11) NOT NULL,
  `broker` varchar(255) NOT NULL,
  `car_plate` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `roadtax_expiry` date NOT NULL,
  `coe_expiry` date NOT NULL,
  `inspection_date` date NOT NULL,
  `out_date` date NOT NULL,
  `in_date` date NOT NULL,
  `salesman` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `tenure` varchar(255) NOT NULL,
  `salesman2` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leasing`
--

INSERT INTO `leasing` (`id`, `broker`, `car_plate`, `make`, `model`, `roadtax_expiry`, `coe_expiry`, `inspection_date`, `out_date`, `in_date`, `salesman`, `payment`, `booking_date`, `tenure`, `salesman2`, `created_at`) VALUES
(1, 'OWEN/CO', 'SMD2670C', 'HONDA', 'CIVIC 1.8 AUTO PETROL', '2022-12-20', '2022-12-17', '2022-12-30', '2022-12-15', '2022-12-03', 'LEO', 'D-800/1050/M', '2022-12-12,2022-12-14', '', '', '2022-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `mpinvoice`
--

CREATE TABLE `mpinvoice` (
  `id` int(11) NOT NULL,
  `billto` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `vehireg_no` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `originalreg_date` date NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `loan_amt` varchar(255) NOT NULL,
  `vehi_invoiceprice` varchar(255) NOT NULL,
  `deposit_paid` varchar(255) NOT NULL,
  `total_amt` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mpinvoice`
--

INSERT INTO `mpinvoice` (`id`, `billto`, `address`, `date`, `vehireg_no`, `make`, `model`, `originalreg_date`, `engine_no`, `chassis_no`, `loan_amt`, `vehi_invoiceprice`, `deposit_paid`, `total_amt`, `created_at`) VALUES
(1, 'Dickson Capital Pte Ltd', '29 UBI ROAD 4,DICKSON AUTO CENTRE,Singapore 408619', '2022-12-06', 'SJA5401U', 'KIA', 'FORTE K3 1.6A', '2022-12-21', 'G4FGHH682674', 'KNAFJ411MJ5747522', '48000.00', '80000', '32000', '48000.00', '2022-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `openewal`
--

CREATE TABLE `openewal` (
  `id` int(11) NOT NULL,
  `salesman` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `phone_hp` varchar(255) NOT NULL,
  `phone_pg` varchar(255) NOT NULL,
  `ic_no` varchar(255) NOT NULL,
  `cmyname` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `phone_o` varchar(255) NOT NULL,
  `phone_f` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `created_name` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_name` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `expire_date` date NOT NULL,
  `orig_regdate` date NOT NULL,
  `renewal_ncd` varchar(255) NOT NULL,
  `yrofmfg` varchar(255) NOT NULL,
  `ton` float NOT NULL,
  `current_coverage_type` varchar(255) NOT NULL,
  `new_coverage_type` varchar(255) NOT NULL,
  `accident_detail1` text NOT NULL,
  `accident_detail2` text NOT NULL,
  `accident_detail3` text NOT NULL,
  `lastyear_premium` float NOT NULL,
  `current_ins_co` varchar(255) NOT NULL,
  `lastyear_excess` float NOT NULL,
  `excess1` float NOT NULL,
  `excess2` float NOT NULL,
  `excess3` float NOT NULL,
  `excess4` float NOT NULL,
  `excess5` float NOT NULL,
  `excess6` float NOT NULL,
  `ins_co1` varchar(255) NOT NULL,
  `q1` float NOT NULL,
  `ins_co2` varchar(255) NOT NULL,
  `q2` float NOT NULL,
  `ins_co3` varchar(255) NOT NULL,
  `q3` float NOT NULL,
  `ins_co4` varchar(255) NOT NULL,
  `q4` float NOT NULL,
  `ins_co5` varchar(255) NOT NULL,
  `q5` float NOT NULL,
  `ins_co6` varchar(255) NOT NULL,
  `q6` float NOT NULL,
  `responsekey` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `calltowho` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `nextaction` varchar(255) NOT NULL,
  `staff` varchar(255) NOT NULL,
  `open_renewal` varchar(255) NOT NULL,
  `close_renewal` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `openewal`
--

INSERT INTO `openewal` (`id`, `salesman`, `address`, `contact_person`, `phone_hp`, `phone_pg`, `ic_no`, `cmyname`, `contact_no`, `phone_o`, `phone_f`, `entry_date`, `entry_time`, `created_name`, `created_date`, `modified_name`, `modified_date`, `vehicle_no`, `brand`, `model`, `expire_date`, `orig_regdate`, `renewal_ncd`, `yrofmfg`, `ton`, `current_coverage_type`, `new_coverage_type`, `accident_detail1`, `accident_detail2`, `accident_detail3`, `lastyear_premium`, `current_ins_co`, `lastyear_excess`, `excess1`, `excess2`, `excess3`, `excess4`, `excess5`, `excess6`, `ins_co1`, `q1`, `ins_co2`, `q2`, `ins_co3`, `q3`, `ins_co4`, `q4`, `ins_co5`, `q5`, `ins_co6`, `q6`, `responsekey`, `datetime`, `calltowho`, `description`, `nextaction`, `staff`, `open_renewal`, `close_renewal`, `created_at`) VALUES
(1, '', '6 UBI ROAD 1#08-10 WINTECH CENTRE', '', '6296 0010', '91360227', '198700419M', 'JIAN MAN CONSTRUCTION PTE LTD', '', '97508538', '', '2022-11-10', '10:15:00', '', '2022-09-01 08:10:28', 'Grid', '2022-11-10 23:18:35', '7', 'Techinasia', 'BBBB', '2022-11-05', '2019-11-06', '20.00', '2019', 660, 'COMP-ANY', 'COMP-ANY', '', '', '', 1477.83, 'NTUC', 600, 600, 0, 0, 0, 0, 0, 'INCO', 1544.75, '', 0, '', 0, '', 0, '', 0, '', 0, 'Consideration', '2029-09-20 05:21:15', 'Eddie', 'more quote', 'Re-Quote', 'csooi', 'on', 'on', '2022-10-10'),
(2, '', 'BLK 219 #03-841 ANG MO KIO AVENUE 1 SINGAPORE 560219 ', '', '', '', 'S8326741J', 'LEE FEI YANG, KEVIN (LI FEIYANG, KEVIN) ', '', '', '', '2022-11-10', '01:30:00', '', '2022-09-01 08:10:34', 'Grid', '2022-11-10 23:19:22', '6', 'Techinasia', '2020 Nissan Note 1.2A', '2022-11-08', '2009-11-09', '20.00', '2009', 0, 'DrivoClassic', 'DrivoClassic', '', '', '', 1102.29, 'NTUC', 600, 600, 0, 0, 0, 0, 0, 'INCO', 1044.6, '', 0, '', 0, '', 0, '', 0, '', 0, 'Expensive - out of range', '2029-09-20 05:21:39', 'kevin', 'more quote', 'Re-Quote', 'csooi', 'on', '', '2022-10-05'),
(3, '', '45 JALAN PEMIMPIN#04-11 FOO WAH INDUSTRIAL BUILDING ', '', '', '81510004', '53363506C', 'NEW GEN SVC EXPRESS', '', '', '', '2022-11-10', '01:45:00', '', '2022-09-01 08:10:32', 'Grid', '2022-11-10 23:19:26', '4', 'E27', '2015 Honda Shuttle 1.5', '2022-11-11', '2021-03-26', '', '2019', 1270, 'COMP-ANY', '', '', '', '', 2505.13, 'CNTP', 500, 0, 0, 0, 0, 0, 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'Expensive - out of range', '2016-09-20 16:35:13', 'Extension', 'Extension', 'Renewed', 'csooi', 'on', 'on', '2022-10-07'),
(4, '', '1 YOUNGBERG TERRACE#04-09 ', '', '', '', 'S1507532E', 'LIM HEE CHOON ', '', '', '', '2022-11-10', '02:00:00', '', '2022-09-01 08:10:33', 'Grid', '2022-11-10 23:19:34', '3', 'E27', '2017 BMW 320i 2.0', '2022-11-16', '2013-05-17', '50.00', '2013', 0, 'DrivoClassic', 'DrivoClassic', '', '', '', 822.15, 'NTUC', 600, 600, 0, 0, 0, 0, 0, 'NTUC', 922.63, '', 0, '', 0, '', 0, '', 0, '', 0, 'Expensive - out of range', '2029-09-20 05:22:18', 'Mr lim', 'more quote', 'Re-Quote', 'csooi', 'on', '', '2022-10-05'),
(5, '', '11 TAI KENG AVENUE', '', '', '98333345', 'S1813826C', 'CHUA HEE SENG ', '', '', '', '2022-11-10', '02:00:00', '', '2022-09-01 08:10:33', 'Grid', '2022-11-10 23:19:44', '4', 'E27', '2015 Honda Shuttle 1.5', '2022-11-17', '2016-11-18', '50.00', '2016', 0, 'COMP-ANY', 'COMP-ANY', '', '', '', 997.27, 'EQ', 600, 600, 0, 0, 0, 0, 0, 'EQ', 939.2, '', 0, '', 0, '', 0, '', 0, '', 0, 'Consideration', '2029-09-20 05:22:40', 'vincent', 'more quote', 'Follow Up', 'csooi', 'on', '', '2022-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `or_tbl`
--

CREATE TABLE `or_tbl` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `billto` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `chassis_no` varchar(255) NOT NULL,
  `engine_no` varchar(255) NOT NULL,
  `vehi_no` varchar(255) NOT NULL,
  `originalreg_date` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `or_tbl`
--

INSERT INTO `or_tbl` (`id`, `date`, `billto`, `address`, `make`, `model`, `chassis_no`, `engine_no`, `vehi_no`, `originalreg_date`, `type`, `created_at`) VALUES
(1, '2022-12-07', 'CASH&CREDIT AUTO PTE LTD', '129 Kim Tian Road, #01-137,Kim Tian Vista, Singapore 160129', 'TOYOTA', 'HIACE DX 2.0 AUTO', 'TRH2005049969', '1TR2412904', 'GBL6942E', '2022-12-09', 'gst', '2022-12-28'),
(2, '2023-01-12', 'Dickson Capital Pte Ltd', '29 UBI ROAD 4, DICKSON AUTO CENTRE, Singapore 408619', 'KIA', 'FORTE K3 1.6A', 'KNAFJ411MJ5747522	', 'G4FGHH682674', 'SJA5401U', '2023-01-18', 'gms', '2023-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `pdpa_consent`
--

CREATE TABLE `pdpa_consent` (
  `id` int(11) NOT NULL,
  `saleadmin_id` int(11) NOT NULL,
  `document_name` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `nric` text NOT NULL,
  `sign` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pdpa_consent`
--

INSERT INTO `pdpa_consent` (`id`, `saleadmin_id`, `document_name`, `customer_id`, `name`, `nric`, `sign`, `date`) VALUES
(1, 0, 'PDPA Consent Form', 1, '1', '4/FGHJD(N)548658', 'kzh-signature28.jpg', '2023-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `id` int(11) NOT NULL,
  `broker` varchar(255) NOT NULL,
  `reg` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `col` varchar(255) NOT NULL,
  `omv` varchar(255) NOT NULL,
  `ul` varchar(255) NOT NULL,
  `ton` float NOT NULL,
  `vehno` varchar(255) NOT NULL,
  `Q` varchar(255) NOT NULL,
  `rdtx` varchar(255) NOT NULL,
  `iu` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`id`, `broker`, `reg`, `make`, `model`, `gst`, `col`, `omv`, `ul`, `ton`, `vehno`, `Q`, `rdtx`, `iu`, `price`, `loc`, `category_type`, `created_date`) VALUES
(1, 'tonylee', '10/20', '', 'Toyota Dyna 150 With Hood', 'Y', 'Silver', '', '1780', 1.72, 'GBK7191D', '2', '29/10/2022', '', '91500', '16SEP', '1', '2022-09-20'),
(2, 'weizhe', '07/20', '', 'Toyota Dyna 150', '', 'White', '09/09/2022', '1780', 1.72, 'GBK3948P', '1', '15/01/2023', '1043245398', '86800', 'K20', '1', '2022-09-20'),
(3, 'soon', '08/17', '', 'Toyota Dyna 150 + Hood', 'Y', '', '', '1800', 1.7, 'GBG5147S', '', '28/02/2023', '', '0', '29SEP', '1', '2022-09-20'),
(4, 'dennispng', '08/17', '', 'Toyota Dyna 150 C/plate+Canopy', '', 'Silver', '05/05/2022', '1760', 1.74, 'GBG5008K', '1', '23/02/2023', '1042945949', '64800', 'K20', '1', '2022-09-20'),
(5, 'soon', '06/17', '', 'Toyota Dyna 150 + Hood', 'Y', '', '', '1800', 1.7, 'GBG1885X', '', '19/06/2023', '', '0', '29SEP', '1', '2022-09-20'),
(6, 'dennispng', '09/16', '', 'Toyota Dyna 150 Canopy', '', 'White', '16/02/2022', '1760', 1.67, 'GBF3507E', '2', '22/09/2022', '1042812544', '53800', 'K20', '1', '2022-09-20'),
(7, 'siong', '09/16', '', 'Toyota Dyna 150 + Tailgate', 'Y', 'Silver', '', '2080', 1.42, 'GBM0194G', '1', '06/03/2023', '', '56800', '16SEP', '1', '2022-09-20'),
(8, 'dennispng', '06/16', '', 'Toyota Dyna 150 C/Plate', 'Y', 'White', '28/06/2022', '1800', 1.7, 'GBF0998R', '3', '04/10/2022', '1043426089', '53800', 'K20', '1', '2022-09-20'),
(9, 'dennispng', '08/15', '', 'Toyota Dyna 150', '', 'Blue', '01/08/2022', '1800', 1.63, 'GBD9625T', '2', '03/02/2023', '1042661470', '44800', 'K20', '1', '2022-09-20'),
(10, '*dennispn', '02/15', '', 'Toyota Dyna 150 C/Plate', '', 'White', '', '', 0, 'GBD6724K', '2', '25/08/2022', '', '38800', 'K20', '1', '2022-09-20'),
(11, 'catherinec', '10/14', '', 'Toyota Dyna 150 Canopy', 'Y', 'Silver', '29/07/2022', '1680', 1.82, 'GBD4671S', '1', '28/10/2022', '1042609644', '33800', 'K20', '1', '2022-09-20'),
(12, 'siong', '09/14', '', 'Toyota Dyna 150 With Hood', 'Y', 'Blue', '12/09/2022', '1760', 1.67, 'GBD3870R', '2', '28/09/2022', '1042590679', '32800', 'W/S', '1', '2022-09-20'),
(13, 'rosson', '07/14', '', 'Toyota Dyna 150 Retreatebel  Ca', 'Y', 'Silver', '14/09/2022', '1740', 1.76, 'GBD2007Z', '1', '24/07/2023', '1042568337', '30800', 'BEN', '1', '2022-09-20'),
(14, 'tiong', '07/14', '', 'Toyota Dyna 150 + Hood', '', 'Silver', '05/09/2022', '1780', 1.72, 'GBD1678T', '1', '31/12/2022', '1043035294', '31800', 'K20', '1', '2022-09-20'),
(15, 'dennispng', '05/09', '', 'Toyota Dyna 150 C/Plate+Canopy', '', 'Silver', '11/05/2022', '1760', 1.74, 'GBB5407T', '3', '23/11/2022', '1042354182', '58800', 'K20', '1', '2022-09-20'),
(16, '*dennispn', '09/07', '', 'Toyota Dyna 150 C/Plate+Canopy', '', 'Blue', '', '', 0, 'GBA6449X', '4', '31/08/2022', '', '43800', 'K20', '1', '2022-09-20'),
(17, 'keechang', '11/14', '', 'Toyota Dyna + Hood', 'Y', 'Blue', '14/09/2022', '1780', 1.65, 'GBD5046R', '2', '11/11/2022', '1042599613', '0', 'W/S', '1', '2022-09-20'),
(18, 'tiong', '12/17', '', 'Nis Cabstar + Hood', 'Y', 'Silver', '30/08/2022', '1780', 1.72, 'GBG9818M', '2', '22/12/2022', '1042999540', '55800', 'K20', '1', '2022-09-20'),
(19, 'tiong', '09/17', '', 'Nis Cabstar + Hood', '', 'Silver', '23/08/2022', '1780', 1.72, 'GBG6806S', '1', '29/09/2022', '1042959776', '52800', 'K20', '1', '2022-09-20'),
(20, 'tiong', '09/17', '', 'Nis Cabstar + Hood', 'Y', 'Silver', '26/08/2022', '1800', 1.7, 'GBG6850M', '1', '28/09/2022', '1042962323', '53800', 'K20', '1', '2022-09-20'),
(21, 'catherinec', '09/17', '', 'Nis Cabstar New Canopy', '', 'Silver', '19/08/2022', '1800', 1.7, 'GBG5844M', '2', '11/03/2023', '1042958992', '53800', 'K20', '1', '2022-09-20'),
(22, 'tiong', '05/17', '', 'Nis Cabstar + Hood', '', 'Silver', '17/08/2022', '1780', 1.72, 'GBF9765L', '1', '18/11/2022', '1042883016', '$50,800*', 'K20', '1', '2022-09-20'),
(23, 'keechang', '05/17', '', 'Nis Cabstar 3.0 5m/t', '', 'Silver', '31/08/2022', '1800', 1.7, 'GBF9969R', '1', '16/11/2022', '1042902353', '50800', 'K20', '1', '2022-09-20'),
(24, '*dennispn', '01/17', '', 'Nis Cabstar', 'Y', 'Silver', '', '', 0, 'GBF6297R', '1', '15/07/2022', '', '47800', 'K20', '1', '2022-09-20'),
(25, 'weizhe', '12/16', '', 'Nis Cabstar 3.0 + Hood (59k)', '', 'Silver', '05/09/2022', '1800', 1.7, 'GBF5770Y', '1', '14/12/2022', '1042842484', '47800', 'K20', '1', '2022-09-20'),
(26, 'eltonlim', '06/16', '', 'Nis Cabstar 3.0 + Hood', 'Y', 'Grey', '15/09/2022', '1800', 1.7, 'GBF0282Y', '1', '01/12/2022', '1043105758', '41800', 'W/S', '1', '2022-09-20'),
(27, 'catherinec', '03/16', '', 'Nis Cabstar Canopy', '', 'White', '19/08/2022', '1800', 1.7, 'GBE7001B', '1', '01/03/2023', '1042736744', '40800', 'K20', '1', '2022-09-20'),
(28, 'dennispng', '01/16', '', 'Nis Cabstar Canopy', 'Y', 'Silver', '23/03/2022', '1780', 1.72, 'GBE6059S', '2', '28/01/2023', '1042730481', '38800', 'K20', '1', '2022-09-20'),
(29, 'alexfoo', '12/15', '', 'Nis Cabstar With Hood', '', 'Silver', '11/08/2022', '1800', 1.7, 'GBF5080E', '1', '25/12/2022', '1043163813', '37800', 'K20', '1', '2022-09-20'),
(30, 'alexfoo', '08/15', '', 'Nis Cabstar 3.0 + Hood', '', 'Silver', '18/07/2022', '1800', 1.7, 'GBE0789H', '1', '28/02/2023', '1042659053', '34800', 'K20', '1', '2022-09-20'),
(31, '*dennispn', '08/15', '', 'Nis Cabstar C/Plate+Canopy', 'Y', 'Silver', '', '', 0, 'GBE0724U', '1', '26/08/2022', '', '35800', 'K20', '1', '2022-09-20'),
(32, 'tiong', '09/14', '', 'Nis Cabstar + Retract Hood', 'Y', 'Silver', '27/07/2022', '1800', 1.7, 'GBD3824A', '1', '24/03/2023', '1042596635', '$25,800*', 'K20', '1', '2022-09-20'),
(33, 'tiong', '07/14', '', 'Nis Cabstar + Hood', '', 'Silver', '19/09/2022', '1660', 1.84, 'GBD1695T', '2', '22/07/2023', '1042575936', '25800', 'Andy(M', '1', '2022-09-20'),
(34, 'keechang', '07/14', '', 'Nis Cabstar 3.0 5m/t', '', 'Silver', '05/08/2022', '1800', 1.7, 'GBD1649C', '1', '06/01/2023', '1042577437', '25800', 'K20', '1', '2022-09-20'),
(35, 'tiong', '04/14', '', 'Nis Cabstar + Hood New 5Yr COE', '', 'Silver', '28/06/2022', '1780', 1.72, 'GBD0304D', '1', '24/04/2023', '1042551374', '$49,800*', 'K20', '1', '2022-09-20'),
(36, 'chester', '02/16', '', 'Nis Atlas 6 A/t 2wd Single Cab', '', 'White', '14/09/2022', '1800', 1.74, 'YP1348K', '1', '17/02/2023', '1510855076', '32800', 'K20', '1', '2022-09-20'),
(37, 'rosson', '07/14', '', 'Mit FEA01', '', 'White', '27/06/2022', '1760', 1.74, 'GBD2192X', '1', '28/01/2023', '1042569666', '23800', 'K20', '1', '2022-09-20'),
(38, 'soon', '06/14', '', 'Mit FEA01 + Hood', '', 'Silver', '11/05/2022', '1780', 1.72, 'GBD0813B', '1', 'LAY UP', '1042562660', '25800', 'K20', '1', '2022-09-20'),
(39, 'dennispng', '11/15', '', 'Isu NHR 85 Re-weight', 'Y', 'White', '24/08/2022', '2500', 2, 'YQ5797R', '1', '15/11/2022', '1510881956', '33800', 'K20', '1', '2022-09-20'),
(40, 'kcng', '08/15', '', 'Isu NHR 85 + Hood', '', 'White', '17/08/2022', '1800', 1.7, 'GBE0376R', '1', '21/02/2023', '1042660448', '33800', 'K20', '1', '2022-09-20'),
(41, 'banyip', '07/17', '', 'Toyota Toyoace 3.0 Manual', 'Y', 'Silver', '', '1800', 1.63, 'GBG3945T', '2', '30/01/2023', '', '0', '12SEP', '1', '0000-00-00'),
(42, 'tonylee', '12/14', '', 'Toyota Dyna 3.0 Box T/G 40km', '', 'White', '02/09/2022', '2260', 1.17, 'GBD9898Y', '2', '04/12/2022', '1043393262', '39500', 'K20', '1', '0000-00-00'),
(265, 'rosson', '12/15', '', 'Isu NHR85 Freeze -20', '', 'White', '01/09/2022', '2500', 1, 'GBE4724T', '4', '16/12/2022', '1042722149', '38800', 'K20', '2', '2022-09-21'),
(266, 'rosson', '07/17', '', 'Toyota Dyna 150 + Chiller -5  f', '', 'Silver', '24/05/2022', '1780', 1.65, 'GBG2640D', '1', '03/01/2023', '1042909648', '61800', 'K20', '2', '0000-00-00'),
(267, 'dennispng', '10/15', '', 'Toyota Dyna 150 RH Refrigerated', 'Y', 'Blue', '15/09/2022', '1800', 1.63, 'GBE3096D', '1', '25/10/2022', '1042687195', '47800', 'K20', '2', '0000-00-00'),
(268, 'alexfoo', '03/19', '', 'Nis Cabstar Single Cab At', 'Y', 'Silver', '09/09/2022', '1700', 1.8, 'GBJ3082S', '1', '13/03/2023', '1043135432', '49800', 'YEW', '3', '2022-09-21'),
(269, 'rosson', '07/21', '', 'Nis Cabstar Auto + Hood 17km', '', 'Silver', '30/08/2022', '1760', 1.74, 'GBL4225E', '1', '01/07/2023', '1043361566', '72800', 'K20', '3', '0000-00-00'),
(270, 'catherinec', '06/21', '', 'Nis Cabstar Single Cab At 17km', '', 'Blue', '01/09/2022', '1700', 1.8, 'GBL4003D', '1', '27/12/2022', '1043361665', '71800', 'K20', '3', '0000-00-00'),
(271, 'weizhe', '07/16', '', 'Toyota Regius Ace Dx 5door At', 'Y', 'Silver', '30/08/2022', '1800', 1.44, 'GBL9658G', '3', '28/01/2023', '1042801836', '53800', 'K20', '4', '2022-09-21'),
(272, 'kcng', '03/16', '', 'Toyota Regius Ace Super Gl Dark', '', 'Silver', '21/09/2022', '1800', 1.25, 'GBE7084L', '2', '28/02/2023', '', '51800', 'K20', '4', '2022-09-21'),
(273, 'tonylee', '09/18', '', 'Toyota Proace 1.6D MT 134km', '', 'Silver', '01/07/2022', '1680', 0.98, 'GBH7448E', '1', '09/03/2023', '1043074490', '60500', 'K20', '4', '2022-09-21'),
(274, 'terry', '03/21', '', 'Toyota Hiace 5DR M (29K)', '', 'Silver', '22/06/2022', '1700', 1.1, 'GBL0811P', '2', '16/03/2023', '1043351757', '89800', 'K20', '4', '2022-09-21'),
(275, 'tonylee', '01/21', '', 'Toyota Hiace 5MT 27km Gst', 'Y', 'Silver', '11/02/2022', '1700', 1.18, 'GBG9193G', '1', '03/01/2023', '1043320249', '86500', 'K20', '4', '2022-09-21'),
(276, 'soon', '12/20', '', 'Toyota Hiace', '', 'Silver', '22/08/2022', '1700', 1.1, 'GBK8584Y', '1', '23/12/2022', '1043303089', '83800', 'K20', '4', '2022-09-21'),
(277, 'tonylee', '12/20', '', 'Toyota Hiace 5Mt 55km Gst', 'Y', 'Silver', '17/02/2022', '1700', 1.1, 'GBK8087R', '1', '16/02/2023', '1043304178', '83500', 'K20', '4', '2022-09-21'),
(278, 'banyip', '11/20', '', 'Toyota Hiace 5DR 2.8 Auto', '', 'White', '', '1800', 1.41, 'GBK7687R', '1', '09/11/2022', '', '0', '30SEP', '4', '2022-09-21'),
(279, 'terry', '10/20', '', 'Toyota Hiace 5DR Auto (46K)', '', 'Silver', '21/07/2022', '1800', 1.41, 'GBK6878M', '1', '20/10/2022', '1043292381', '88800', 'K20', '4', '2022-09-21'),
(280, 'co/tony', '10/20', '', 'Toyota Hiace 5Mt 14km 5Servicin', '', 'Silver', '01/03/2022', '1700', 1.1, 'GBK6834P', '1', '19/10/2022', '1043295731', '85500', 'K20', '4', '2022-09-21'),
(281, 'weizhe', '09/20', '', 'Toyota Hiace 5dr Mt (44K)', 'Y', 'Black', '20/06/2022', '1700', 1.1, 'GBK6330B', '1', '29/09/2022', '1043408748', '80800', 'K20', '4', '2022-09-21'),
(282, 'co/tony', '09/20', '', 'Toyota Hiace 5Mt Rear-Ac 47km G', 'Y', 'White', '28/01/2022', '1700', 1.1, 'GBK5806C', '2', '23/03/2023', '1043296367', '84500', 'K20', '4', '2022-09-21'),
(283, 'tonylee', '09/20', '', 'Toyota Hiace 5Mt 53km Gst', 'Y', 'White', '14/03/2022', '1700', 1.1, 'GBK5827S', '1', '22/03/2023', '1043295137', '83500', 'K20', '4', '2022-09-21'),
(284, '*dennispn', '07/19', '', 'Toyota Regius Ace 5Dr AT R A/C', 'Y', 'Silver', '', '1800', 1.405, 'GBJ6593P', '', 'LAY UP', '', '79800', 'K20', '4', '0000-00-00'),
(285, 'zhenyuan', 'Mar-17', '', 'Toyota Regius Ace Dx 3.0 M\r\n', '', 'White\r\n', '16/09/2022', '1800', 1.43, 'GBF7924H', '1', '09/03/2023', '1042855031', '0', 'K20', '4', '0000-00-00'),
(286, 'eltonlim', '11/19', '', 'Toyota Hiace Van Turbo 5dr Mt', '', 'Silver', '21/07/2022', '1700', 1.1, 'GBK0427X', '1', '21/11/2022', '1043206994', '73800', 'K20', '4', '2022-09-21'),
(287, 'catherinec', '10/19', '', 'Toyota Hiace Dx 2.8 Auto', '', '', '19/09/2022', '1800', 1.41, 'GBJ9739S', '', '23/10/2022', '', '0', '12SEP', '4', '2022-09-21'),
(288, 'alexfoo', '07/19', '', 'Toyota Hiace Van Turbo 5dr Mt', 'Y', 'White', '25/08/2022', '1700', 1.1, 'GBJ6887S', '1', '22/07/2023', '1043160645', '70800', 'K20', '4', '2022-09-21'),
(289, 'co/tony', '06/19', '', 'Toyota Hiace 5Mt 98km GST', '', 'Silver', '04/01/2022', '1700', 1.1, 'GBJ5925Y', '1', '12/12/2022', '1043156991', '71500', 'K20', '4', '2022-09-21'),
(290, '*dennispn', '05/19', '', 'Toyota Hiace 5Dr MT No Repair', 'Y', 'White', '', '1700', 1.1, 'GBJ5427T', '', 'LAY UP', '', '69800', 'K20', '4', '2022-09-21'),
(291, '*dennispn', '05/19', '', 'Toyota Hiace 5Dr MT No Repair', 'Y', 'White', '', '1700', 1.1, 'GBJ5126L', '1', 'LAY UP', '', '68800', 'K20', '4', '2022-09-21'),
(292, '*dennispn', '05/19', '', 'Toyota Hiace M', 'Y', 'White', '', '', 0, 'GBJ5239U', '1', 'LAY UP', '', '69800', 'K20', '4', '2022-09-21'),
(293, '*dennispn', '05/19', '', 'Toyota Hiace M', 'Y', 'White', '', '', 0, 'GBJ5150R', '1', 'LAY UP', '', '71800', 'K20', '4', '2022-09-21'),
(294, '*dennispn', '05/19', '', 'Toyota Hiace 5Dr MT', 'Y', 'White', '', '', 0, 'GBJ5382M', '1', 'LAY UP', '', '69800', 'K20', '4', '2022-09-21'),
(295, '*dennispn', '05/19', '', 'Toyota Hiace 5Dr MT', 'Y', 'White', '', '', 0, 'GBJ5430H', '1', 'LAY UP', '', '71800', 'K20', '4', '2022-09-21'),
(296, '*dennispn', '12/18', '', 'Toyota Hiace 5Dr MT', 'Y', 'Silver', '', '1700', 1.1, 'GBJ0447T', '1', 'LAY UP', '', '68800', 'K20', '4', '2022-09-21'),
(297, 'co/tony', '09/18', '', 'Toyota Hiace 5Mt 2 Glass 168km', '', 'White', '31/08/2022', '1700', 1.1, 'GBH8068L', '1', '27/09/2022', '1043079010', '66500', 'K20', '4', '2022-09-21'),
(298, '*dennispn', '09/18', '', 'Toyota Hiace 5Dr MT', 'Y', 'White', '', '1700', 1.1, 'GBH7848J', '1', 'LAY UP', '', '66800', 'K20', '4', '2022-09-21'),
(299, 'catherinec', '08/18', '', 'Toyota Hiace Dx 2.8 Auto', '', '', '', '1800', 1.41, 'GBH6092D', '', '31/01/2023', '', '72800', '22AUG', '4', '2022-09-21'),
(300, 'tiong', '03/18', '', 'Toyota Hiace 5dr Mt', '', 'Silver', '17/08/2022', '1700', 1.1, 'GY7844X', '2', '01/03/2023', '1043008879', '61800', 'K20', '4', '2022-09-21'),
(301, 'catherinec', '12/17', '', 'Toyota Hiace Dx 3.0l Auto', '', '', '', '1800', 1.44, 'GBG9587D', '', '11/12/2022', '', '66800', '31AUG', '4', '2022-09-21'),
(302, 'soon', '11/17', '', 'Toyota Hiace 3.0l M (64209 Km )', '', 'Silver', '09/03/2022', '1800', 1.43, 'GBG9206D', '2', '29/11/2022', '1042885872', '59800', 'K20', '4', '2022-09-21'),
(303, 'soon', '08/17', '', 'Toyota Hiace 5dr Mt', '', 'Silver', '09/03/2022', '1700', 1.1, 'GBG5151D', '2', '28/02/2023', '1042946616', '58800', 'K20', '4', '2022-09-21'),
(304, 'catherinec', '08/17', '', 'Toyota Hiace Van Turbo 5dr Mt', '', 'Silver', '24/08/2022', '1700', 1.1, 'GBG4548A', '2', 'LAY UP', '1042926783', '58800', 'K20', '4', '2022-09-21'),
(305, 'keechang', '07/17', '', 'Toyota Hiace 3.0 4Dr Manual', '', 'White', '27/07/2022', '1760', 1.45, 'GBG2911Y', '2', '16/01/2023', '1042806638', '57800', 'K20', '4', '2022-09-21'),
(306, 'rosson', '04/17', '', 'Toyota Hiace 3.0D Manual 5dr', '', 'Silver', '22/08/2022', '1800', 1.43, 'GBF9557X', '2', '19/10/2022', '1042849422', '55800', 'K20', '4', '2022-09-21'),
(307, 'soon', '09/16', '', 'Toyota Hiace 5dr M', '', 'Silver', '09/03/2022', '1740', 1.06, 'GBF3752M', '1', '26/09/2022', '1042815126', '49800', 'K20', '4', '2022-09-21'),
(308, 'keechang', '09/16', '', 'Toyota Hiace 3.0 Dx M', 'Y', 'Silver', '02/09/2022', '1760', 1.47, 'GBL9964Y', '1', 'LAY UP', '1042801159', '49800', 'K20', '4', '2022-09-21'),
(309, 'soon', '06/16', '', 'Toyota Hiace DX 3.0 M ( Rear Ai', 'Y', 'White', '01/09/2022', '1800', 1.43, 'GBF1034R', '1', '23/12/2022', '1042757823', '45800', 'K20', '4', '2022-09-21'),
(310, 'willlee', '05/16', '', 'Toyota Hiace Turbo 5 Dr (115k K', 'Y', 'White', '12/08/2022', '1740', 1.06, 'GBF0078X', '1', '22/11/2022', '1042782771', '44800', 'K20', '4', '2022-09-21'),
(311, 'co/tony', '03/16', '', 'Toyota Hiace 5Mt 4Glass 140km G', '', 'Black', '14/10/2021', '1800', 1.43, 'GBE7962C', '1', '27/03/2023', '1042717645', '44500', 'K20', '4', '2022-09-21'),
(312, 'tiong', '09/15', '', 'Toyota Hiace 5Dr Mt', '', 'Silver', '02/08/2022', '1800', 1.43, 'GBE1374P', '1', '08/03/2023', '1042661157', '41800', 'K20', '4', '2022-09-21'),
(313, 'rosson', '03/15', '', 'Toyota Hiace 5dr Auto Rear Airc', '', 'Silver', '31/08/2022', '1700', 1.54, 'GBD7325Y', '1', '31/03/2023', '1042640474', '37800', 'K20', '4', '2022-09-21'),
(314, '*dennispn', '03/15', '', 'Toyota Hiace M', 'Y', 'Silver', '', '', 0, 'GBD7315B', '3', '26/09/2022', '', '36800', 'K20', '4', '2022-09-21'),
(315, 'rosson', '11/14', '', 'Toyota Hiace Van Turbo 5 Dr Man', '', 'Silver', '16/09/2022', '1740', 1.06, 'GBD5368L', '1', '26/11/2022', '1042611863', '31800', 'BEN', '4', '2022-09-21'),
(316, 'paulmas', '11/14', '', 'Toyota Hiace 5 Dr M', '', 'White', '31/05/2022', '1740', 1.06, 'GBD4981Y', '1', '01/11/2022', '1042610617', '31800', 'K20', '4', '2022-09-21'),
(317, '*dennispn', '11/14', '', 'Toyota Hiace M', 'Y', 'White', '', '', 0, 'GBK3394L', '3', '09/11/2022', '', '32800', '', '4', '2022-09-21'),
(318, 'co/tony', '02/14', '', 'Toyota Hiace 5Mt 148km', 'Y', 'Silver', '15/02/2022', '1740', 1.06, 'GBC8703M', '1', '12/02/2023', '1042539031', '26500', 'K20', '4', '2022-09-21'),
(319, 'paulmas', '09/12', '', 'Toyota Hiace Manual', '', 'White', '16/08/2022', '1780', 1.02, 'GBC4975X', '2', '26/09/2022', '1042485896', '46800', 'K20', '4', '2022-09-21'),
(320, 'eltonlim', '03/11', '', 'Toyota Hiace M', '', 'Silver', '07/09/2022', '1780', 1.02, 'GBC0948B', '4', '29/03/2023', '1042422260', '36800', 'K20', '4', '2022-09-21'),
(321, 'joey', '07/20', '', 'Nis Nv350 2.5 Auto MIL 51k', '', 'White', '12/07/2022', '1800', 1.49, 'GBK4458E', '1', '29/01/2023', '1043274339', '70800', 'K20', '4', '2022-09-21'),
(322, 'co/tony', '04/19', '', 'Nis Nv350 2.5 MT', '', 'Grey', '16/08/2022', '1780', 1.52, 'GBJ4441H', '1', '23/10/2022', '1043144847', '60500', 'K20', '4', '2022-09-21'),
(323, 'tonylee', '12/18', '', 'Nis Nv350 2.5 AT 74km Gst', 'Y', 'Silver', '07/04/2021', '1780', 1.52, 'GBJ0314T', '1', '10/12/2022', '1043094844', '62500', 'K20', '4', '2022-09-21'),
(324, 'tonylee', '12/18', '', 'Nis Nv350 2.5 AT 85km Gst', 'Y', 'Silver', '06/04/2021', '1780', 1.52, 'GBJ0320A', '1', '10/12/2022', '1043094901', '62500', 'K20', '4', '2022-09-21'),
(325, 'tonylee', '12/18', '', 'Nis Nv350 2.5 AT 76km Gst', 'Y', 'Silver', '07/04/2021', '1780', 1.52, 'GBJ0323S', '1', '10/12/2022', '1043094894', '62500', 'K20', '4', '2022-09-21'),
(326, 'tonylee', '12/18', '', 'Nis Nv350 2.5 AT 72km Gst', 'Y', 'Silver', '07/04/2021', '1780', 1.52, 'GBJ0375S', '1', '10/12/2022', '1043094852', '62500', 'K20', '4', '2022-09-21'),
(327, 'tonylee', '12/18', '', 'Nis Nv350 2.5 AT 62km Gst', 'Y', 'Silver', '06/04/2021', '1780', 1.52, 'GBJ0498X', '1', '10/12/2022', '1043094795', '62500', 'K20', '4', '2022-09-21'),
(328, 'tonylee', '12/18', '', 'Nis Nv350 2.5 AT 60km Gst', 'Y', 'Silver', '08/04/2021', '1780', 1.52, 'GBJ0503P', '1', '10/12/2022', '1043094810', '62500', 'K20', '4', '2022-09-21'),
(329, 'tonylee', '12/18', '', 'Nis Nv350 2.5 AT 64km Gst', 'Y', 'Silver', '08/04/2021', '1780', 1.52, 'GBJ0511R', '1', '10/12/2022', '1043094878', '62500', 'K20', '4', '2022-09-21'),
(330, 'tonylee', '11/18', '', 'Nis Nv350 2.5 AT 59km Gst', 'Y', 'Blue', '01/04/2021', '1780', 1.52, 'GBH9587Z', '1', 'LAY UP', '1043091402', '62500', 'K20', '4', '2022-09-21'),
(331, 'tonylee', '11/18', '', 'Nis Nv350 2.5 AT 86km Gst', 'Y', 'Blue', '01/04/2021', '1780', 1.52, 'GBH9670R', '1', 'LAY UP', '1043091395', '62500', 'K20', '4', '2022-09-21'),
(332, 'tonylee', '10/18', '', 'Nis Nv350 2.5 AT 90km Gst', 'Y', 'Blue', '05/04/2021', '1780', 1.52, 'GBH8252X', '1', 'LAY UP', '1043051836', '61500', 'K20', '4', '2022-09-21'),
(333, 'tonylee', '10/18', '', 'Nis Nv350 2.5 AT 91km Gst', 'Y', 'Blue', '06/04/2021', '1780', 1.52, 'GBH8337K', '1', 'LAY UP', '1043051670', '61500', 'K20', '4', '2022-09-21'),
(334, 'tonylee', '09/18', '', 'Nis Nv350 2.5 AT 77km Gst', 'Y', 'Blue', '01/04/2021', '1780', 1.52, 'GBH7683S', '1', 'LAY UP', '1043051729', '61500', 'K20', '4', '2022-09-21'),
(335, 'tonylee', '09/18', '', 'Nis Nv350 2.5 AT 93km Gst', 'Y', 'Blue', '07/04/2021', '1780', 1.52, 'GBH7691T', '1', 'LAY UP', '1043051688', '61500', 'K20', '4', '2022-09-21'),
(336, 'soon', '09/18', '', 'Nis Nv350 Panel ( Auto )', '', 'White', '09/09/2022', '1780', 1.52, 'GBH7403J', '1', 'LAY UP', '1043051852', '58800', 'K20', '4', '2022-09-21'),
(337, 'soon', '02/16', '', 'Nis Nv350 Panel Van 2.5 5mt 5dr', '', 'Silver', '04/08/2022', '1800', 1.5, 'GBE6707E', '3', '23/02/2023', '1042739540', '34800', 'K20', '4', '2022-09-21'),
(338, 'neotb', '11/15', '', 'Nis Nv350 Panel Van 2.5 5mt 5dr', '', 'Silver', '', '1800', 1.5, 'GBE3701R', '1', '17/11/2022', '', '0', 'W/S', '4', '2022-09-21'),
(339, 'zhenyuan', '09/15', '', 'Nis Nv350 Panel Van 2.5 5mt', 'Y', 'Silver', '15/08/2022', '1800', 1.4, 'GBB4710Z', '1', '08/03/2023', '1042682781', '29800', 'K20', '4', '2022-09-21'),
(340, 'tonylee', '07/15', '', 'Nis Nv350 2.5 MT', '', 'Silver', '20/06/2022', '1800', 1.5, 'GBD9336C', '2', '15/01/2023', '1042666363', '29500', 'K20', '4', '2022-09-21'),
(341, 'tonylee', '06/15', '', 'Nis Nv350 2.5 MT 297km', '', 'White', '29/07/2022', '1800', 1.5, 'GBD8762L', '1', '23/12/2022', '1042656421', '28500', 'K20', '4', '2022-09-21'),
(342, 'tonylee', '02/15', '', 'Nis Nv350 2.5 MT 152,889km', '', 'Black', '14/06/2022', '1800', 1.5, 'GBD6134M', '3', '08/02/2023', '1042624733', '26500', 'K20', '4', '2022-09-21'),
(343, 'tonylee', '01/15', '', 'Nis Nv350 Panel Van 2.5 5mt 5dr', '', '', '', '1800', 1.5, 'GBD6207L', '', '29/01/2023', '', '0', '19SEP', '4', '2022-09-21'),
(344, 'tiong', '11/14', '', 'Nis Nv350 Panel Van 2.5 5mt 5dr', 'Y', 'Grey', '', '1800', 1.5, 'GBD5314S', '', '24/11/2022', '', '0', '10OCT', '4', '2022-09-21'),
(345, 'rosson', '08/14', '', 'Nis Nv350 Panel Van 2.5 5mt 5dr', '', 'Grey', '15/08/2022', '1800', 1.5, 'GBD2925Z', '2', '26/02/2023', '1042587717', '24800', 'K20', '4', '2022-09-21'),
(346, 'keechang', '08/14', '', 'Nis Nv350 Panel Van 2.5 5mt 5dr', '', 'White', '28/07/2022', '1800', 1.5, 'GBD2606U', '1', '12/02/2023', '1042583228', '24800', 'K20', '4', '2022-09-21'),
(347, 'catherinec', '07/14', '', 'Nis NV350 2.5 5mt 5dr Euro V', '', 'Silver', '05/08/2022', '1800', 1.5, 'GBD1977E', '2', '17/01/2023', '1042575663', '24800', 'K20', '4', '2022-09-21'),
(348, 'rosson', '01/14', '', 'Nis Nv350 Panel Van 2.5 5mt 5dr', '', 'Silver', '14/06/2022', '1800', 1.5, 'GBC8991Y', '1', '24/01/2023', '1042537910', '17800', 'K20', '4', '2022-09-21'),
(349, 'co/tony', '06/11', '', 'Merz Viano CDI22 EL', '', 'Silver', '27/05/2022', '2360', 0.69, 'GBL1905X', '1', '28/12/2022', '1043346518', '35500', 'K20', '4', '2022-09-21'),
(350, 'cheeweng', '10/20', '', 'Opel Vivaro L1h1 1.6', '', 'White', '10/08/2022', '1780', 1.18, 'GBK6659D', '1', '14/10/2022', '1043209542', '71800', 'K20', '4', '2022-09-21'),
(351, 'rosson', '09/20\r\n', '', 'Toyota Hiace Van Turbo 5dr Mt\r\n', 'Y', 'Silver', '01/09/2022', '1700', 1.1, 'GBK5591X', '1', '07/03/2023', '1043286772', '79800', 'K20', '4', '0000-00-00'),
(352, 'catherinec\r\n', '01/20\r\n', '', 'Toyota Hiace Dx 2.8 Auto\r\n', '', 'Silver\r\n', '', '1800\r\n', 1.41, 'GBK1089G', '1', '02/01/2023', '', '86800', '31AUG', '4', '0000-00-00'),
(360, 'rosson', '09/21', '', 'Toyota Hiace 2.0 Dx Auto', '', 'Silver', '26/08/2022', '1700', 1.39, 'GBL5361M', '2', '26/03/2023', 'TRH2000342062', '71800', 'K20', '5', '2022-09-21'),
(361, 'rosson', '09/21', '', 'Toyota Hiace 2.0 Dx Auto', '', 'Silver', '31/08/2022', '1700', 1.39, 'GBL5274G', '2', '26/03/2023', '1043373818', '71800', 'K20', '5', '2022-09-21'),
(362, 'rosson', '09/20', '', 'Maxus G10 SL 6 Auto Petrol', '', 'Silver', '29/07/2022', '1780', 1.22, 'GBK5671Z', '2', '10/03/2023', '1043170173', '59800', 'K20', '5', '2022-09-21'),
(363, 'alexfoo', '12/18', '', 'Nis Nv200 Acenta Dci 1.5 Manual', '', 'White', '13/09/2022', '1320', 0.68, 'GBJ0611K', '1', '20/12/2022', '1043400182', '56800', 'K20', '6', '2022-09-21'),
(364, 'rosson', '10/18', '', 'Nis Nv200 1.5 Manual (83km)', '', 'Silver', '22/08/2022', '1340', 0.66, 'GBH8884Y', '2', '18/10/2022', '1042854918', '53800', 'K20', '6', '2022-09-21'),
(365, 'dennispng', '09/18', '', 'Nis Nv200 1.5 MT (57K)', '', 'Silver', '21/02/2022', '1260', 0.79, 'GBH7470P', '2', '16/03/2023', '1043051919', '54800', 'K20', '6', '2022-09-21'),
(366, 'alexfoo', '07/18', '', 'Nis Nv200 1.5 Mt', 'Y', 'Red', '21/07/2022', '1260', 0.79, 'GBH5923M', '1', '15/07/2023', '1043042976', '52800', 'K20', '6', '2022-09-21'),
(367, 'dennispng', '06/18', '', 'Nis Nv200 1.5 MT', '', 'Silver', '07/03/2022', '1260', 0.79, 'GBH5288M', '1', '28/12/2022', '1043038529', '52800', 'K20', '6', '2022-09-21'),
(368, 'zhenyuan', '04/18', '', 'Nis Nv200 1.5 Mt (59km)', 'Y', 'Silver', '02/09/2022', '1260', 0.79, 'GBH3394C', '2', '24/10/2022', '1043017523', '49800', 'K20', '6', '2022-09-21'),
(369, 'rosson', '12/17', '', 'Nis Nv200 1.5 Mt', '', 'Silver', '21/07/2022', '1260', 0.79, 'GBH0811K', '2', '28/12/2022', '1043000750', '48800', 'K20', '6', '2022-09-21'),
(370, 'rosson', '10/17', '', 'Nis Nv200 1.5 Mt Abs Airbag 2wd', 'Y', 'Grey', '05/09/2022', '1260', 0.74, 'GBG8026M', '1', '29/10/2022', '1042972463', '47800', 'K20', '6', '2022-09-21'),
(371, 'victorchua', '07/17', '', 'Nis Nv200 1.5 Mt Abs Airbag 2wd', '', 'White', '14/07/2022', '1260', 0.74, 'GBG2770L', '2', '09/01/2023', '1042920040', '46800', 'K20', '6', '2022-09-21'),
(372, 'co/tony', '05/17', '', 'Nis Nv200 1.5 Mt 117km GST', '', 'Red', '23/02/2022', '1260', 0.74, 'GBG0824D', '2', '29/11/2022', '1042910504', '45500', 'K20', '6', '2022-09-21'),
(373, 'tonylee', '04/17', '', 'Nis Nv200 1.5 Mt 79km GST', '', 'Silver', '11/02/2022', '1260', 0.74, 'GBF9327T', '1', '11/10/2022', '1042872845', '45500', 'K20', '6', '2022-09-21'),
(374, 'tiong', '11/16', '', 'Nis Nv200 1.5 Mt', '', 'Silver', '', '1260', 0.74, 'GBF4692X', '', '07/02/2023', '', '39800', 'K20', '6', '2022-09-21'),
(375, 'tonylee', '09/16', '', 'Nis Nv200 1.5 Mt 148km Gst', '', 'White', '21/04/2022', '1260', 0.74, 'GBF3509A', '1', '19/03/2023', '1042790708', '39500', 'K20', '6', '2022-09-21'),
(376, 'tonylee', '09/16', '', 'Nis Nv200 1.5 Mt 147km Gst', '', 'White', '21/04/2022', '1260', 0.74, 'GBF3260R', '1', '12/03/2023', '1042790758', '39500', 'K20', '6', '2022-09-21'),
(377, 'tonylee', '09/16', '', 'Nis Nv200 1.5 Mt 97km Gst', '', 'White', '21/04/2022', '1260', 0.74, 'GBF2990Z', '1', '12/03/2023', '1042790724', '40500', 'K20', '6', '2022-09-21'),
(378, 'tonylee', '08/16', '', 'Nis Nv200 1.5 Mt 97km Gst', '', 'White', '21/04/2022', '1260', 0.74, 'GBF2896M', '1', '28/02/2023', '1042790683', '40500', 'K20', '6', '2022-09-21'),
(379, 'catherinec', '05/16', '', 'Nis Nv200 1.5 Mt w/RC', '', 'White', '18/04/2022', '1260', 0.74, 'GBE9727C', '1', '02/11/2022', '1042772102', '34800', 'K20', '6', '2022-09-21'),
(380, 'tonylee', '03/16', '', 'Nis Nv200 1.5 Mt 197km GST', '', 'Silver', '14/04/2022', '1200', 0.8, 'GBE6842Y', '3', '03/02/2023', '1042740828', '35500', 'K20', '6', '2022-09-21'),
(381, 'tiong', '12/15', '', 'Nis Nv200 1.5 Mt', '', 'Grey', '', '1260', 0.74, 'GBE4870D', '', '16/12/2022', '', '33800', 'K20', '6', '2022-09-21'),
(382, 'rosson', '09/15', '', 'Nis Nv200 1.5l Mt 6dr Euro 5', '', 'Grey', '08/07/2022', '1320', 0.71, 'GBE2101D', '2', '29/09/2022', '1042703842', '32800', 'K20', '6', '2022-09-21'),
(383, 'rosson', '08/15', '', 'Nis Nv200 1.5l Mt Abs Airbag 2w', '', 'Black', '23/06/2022', '1320', 0.71, 'GBE0296M', '2', '20/02/2023', '1042672708', '31800', 'K20', '6', '2022-09-21'),
(384, 'alexfoo', '07/15', '', 'Nis Nv200 1.5l', '', 'Black', '21/07/2022', '1320', 0.71, 'GBE5080K', '1', '27/01/2023', '1042657651', '30800', 'K20', '6', '2022-09-21'),
(385, '*dennispn', '01/15', '', 'Nis NV200 M', '', 'Grey', '', '1320', 0.71, 'GBD5904P', '', 'LAY UP', '', '26800', 'K20', '6', '2022-09-21'),
(386, 'rosson', '10/14', '', 'Nis Nv200 1.5l Mt Abs Airbag 2w', '', 'Grey', '06/04/2022', '1320', 0.71, 'GBD4328J', '2', '27/10/2022', '1042603365', '22800', 'K20', '6', '2022-09-21'),
(387, 'rosson', '10/14', '', 'Nis Nv200 1.5l Mt Abs Airbag 2w', '', 'Black', '06/07/2022', '1320', 0.71, 'GBD4377S', '2', '29/01/2023', '1042603381', '23800', 'K20', '6', '2022-09-21'),
(388, 'kcng', '07/14', '', 'Nis Nv200 1.5l Mt Abs Airbag 2w', '', 'Silver', '15/09/2022', '1320', 0.71, 'GBD2101J', '1', '29/01/2023', '1042581933', '21800', 'BOTAK', '6', '2022-09-21'),
(389, '*dennispn', '05/10', '', 'Nis NV200 1.5 MT', '', 'Grey', '', '1280', 0.72, 'GBB8124P', '3', 'LAY UP', '', '26800', 'K20', '6', '2022-09-21'),
(390, 'kcng', '08/19', '', 'Nis Nv200 1.5 Mt (60kkm)\r\n', 'Y\r\n', 'Beige\r\n', '17/08/2022', '1260', 0.79, 'GBJ7757C', '1', '15/02/2023', '1043187988', '63800', 'K20', '6', '0000-00-00'),
(391, 'weizhe', '02/19\r\n', '', 'Nis Nv200 1.5 Mt\r\n', '', 'Silver\r\n', '02/03/2022', '1260', 0.79, 'GBJ2014X\r\n', '1', '11/02/2023', '1043119121', '57800', 'K20', '6', '0000-00-00'),
(392, 'zhenyuan', '03/19', '', 'Nis Nv200', 'Y', 'White', '', '1220', 0.72, 'GBJ2996L', '2', '23/03/2023', '', '0', '15SEP', '7', '2022-09-21'),
(393, 'rosson', '06/17', '', 'Nis Nv200 Dx-2 1.6 Auto', '', 'Grey', '', '1220', 0.72, 'GBG1619Z', '1', '20/12/2022', '', '43800', 'BEN', '7', '2022-09-21'),
(394, 'tiong', '07/21', '', 'Nis Nv200 1.6 Manual TanChong S', 'Y', 'Silver', '19/08/2022', '1160', 0.88, 'GBL4419M', '1', '26/01/2023', '1043363992', '$59,800*', 'K20', '7', '2022-09-21'),
(395, 'keechang', '05/21', '', 'Nis Nv200 Dx 1.6 Auto', '', 'Grey', '12/07/2022', '1220', 0.72, 'GBL3247Z', '3', '18/11/2022', '1043346865', '62800', 'K20', '7', '2022-09-21'),
(396, 'tonylee', '04/21', '', 'Nis Nv200 Dx 1.6 At', 'Y', 'Grey', '19/09/2022', '1220', 0.72, 'GBL2494H', '1', '07/04/2023', '1043366491', '65500', 'K20', '7', '2022-09-21'),
(397, 'tonylee', '03/21', '', 'Nis Nv200 Dx 1.6 At 29km', 'Y', 'White', '23/08/2022', '1220', 0.72, 'GBL8715G', '1', '03/03/2023', '1043308617', '65500', 'K20', '7', '2022-09-21'),
(398, 'kcng\r\n', '01/21\r\n', '', 'Nis Nv200 Dx 1.6 Auto (14kkm)\r\n', '', 'Black\r\n', '14/09/2022', '1220', 0.72, 'GBK9485T', '1', '27/01/2023', '1043309227', '64800', 'K20', '7', '0000-00-00'),
(399, 'rosson\r\n', '10/20\r\n', '', 'Nis Nv200 Dx 1.6 Auto\r\n', '', 'Silver\r\n', '24/08/2022', '1200', 0.74, 'GBK6793Z', '1', '25/10/2022', '1043293371', '61800', 'K20', '7', '0000-00-00'),
(400, 'rosson', '06/16', '', 'Fiat Doblo Cargo 1.6D LWB Auto', '', 'Black', '08/07/2022', '1500', 0.97, 'GBF0647D', '1', '16/03/2023', '1042795253', '32800', 'K20', '8', '2022-09-21'),
(401, 'tonylee', '03/15', '', 'Fiat Doblo CARGO 1.6 MJ 78km Gs', 'Y', 'White', '27/06/2022', '1460', 0.91, 'GBD6582C', '1', '05/03/2023', '1042629767', '24500', 'K20', '8', '2022-09-21'),
(402, 'joey', '10/14', '', 'Fiat Doblo Cargo Maxi 1.6 Auto', '', 'Silver', '22/08/2022', '1500', 0.87, 'GBK5197B', '4', '28/10/2022', '1042607094', '19800', 'K20', '8', '2022-09-21'),
(403, 'tonylee', '05/16', '', 'Opel Combo L2h1 1.6 Cdti At 6dr', 'Y', 'Silver', '', '1460', 1, 'GBF0364U', '4', '30/11/2022', '', '0', '23SEP', '8', '2022-09-21'),
(404, 'victorchua', '04/19', '', 'Peugeot Partner 1.5 Bluehdi 5mt', 'Y', 'Black', '44791', '1440', 0.93, 'GBJ9997M', '1', '16/10/2022', '1043152246', '56800', 'K20', '8', '2022-09-21'),
(405, '*dennispn', '09/15', '', 'Peugeot pARTNER 1.6 Auto', 'Y', 'White', '', '', 0, 'GBE0863B', '3', '02/09/2022', '', '27800', 'K20', '8', '2022-09-21'),
(406, '*dennispn\r\n', '06/14\r\n', '', 'Citroen Belingo 1.6L\r\n', '', 'White\r\n', '', '', 0, 'GBD0747J\r\n', '2', '09/12/2022', '', '17800', 'K20', '8', '0000-00-00'),
(407, 'cheeweng\r\n', '06/19\r\n', '', 'Fiat Fiorino Cargo 1.3mta\r\n', '', 'White\r\n', '15/08/2022', '1200', 0.5, 'GBJ6439C', '1', 'LAY UP', '1043170363', '46800', 'K20', '8', '0000-00-00'),
(408, 'tiong', '07/14', '', 'Mit L200 D/cab 4x4 Mt', 'Y', 'Silver', '01/09/2022', '1780', 1.12, 'GBD1456S', '1', '31/12/2022', '1042565185', '$34,800*', 'K20', '9', '2022-09-21'),
(409, 'tiong', '04/12', '', 'Mit L200 D/cab 4x4 Mt', '', 'White', '06/07/2022', '1900', 0.99, 'GBC4252Z', '3', '29/10/2022', '1042408161', '$70,800*', 'K20', '9', '2022-09-21'),
(410, 'tiong', '09/08', '', 'Isu TFR86 D/cab Mt', 'Y', 'Grey', '18/02/2022', '1700', 1.1, 'GBB2363E', '1', '29/09/2022', '1043209229', '$19,800*', 'K20', '9', '2022-09-21'),
(411, 'mikegoh\r\n', '03/12\r\n', '', 'Nis Navara 2.5 M 4 x4\r\n', 'Y\r\n', 'Silver\r\n', '04/03/2022', '1800', 1.06, 'GBC4085P', '3\r\n', '28/09/2022', '1042455998', '48800', 'K20', '9', '0000-00-00'),
(412, 'rosson\r\n', '09/15\r\n', '', 'Mit L200 Triton D/Cab 4x4\r\n', 'Y\r\n', 'Silver\r\n', '04/08/2022', '1780', 1.12, 'GBE1256Y', '1', '06/03/2023', '1042648139', '48800', 'K20', '9', '0000-00-00'),
(413, 'paulmas\r\n', '02/07\r\n', '', 'Toyota Hiace (PB) Commuter Manu\r\n', '', 'Silver\r\n', '14/09/2022', '1940', 11, 'PA6734G\r\n', '1', 'LAY UP\r\n', '1550163497\r\n', '39800', 'K20', '10', '0000-00-00'),
(414, 'rosson', '05/17', '', 'Mit FEB21 + Box', '', 'White', '', '2300', 2.7, 'YP6484S', '', '01/11/2022', '', '$66,800*', 'BOTAK', '11', '2022-09-21'),
(415, 'catherinec', '10/16', '', 'Mit FEB21 Open Deck', '', 'White', '09/09/2022', '2300', 2.7, 'YP5898M', '3', '30/01/2023', '1511069600', '61800', 'K20', '11', '2022-09-21'),
(416, 'keechang', '04/16', '', 'Mit FEB21 Manual + Box', '', 'White', '12/09/2022', '2280', 2.72, 'YP1958A', '2', '14/10/2022', '1510906291', '55800', 'K20', '11', '2022-09-21'),
(417, 'keechang', '03/16', '', 'Mit FEB21 Manual + Box', '', 'White', '13/09/2022', '2280', 2.72, 'YP1644E', '3', '31/03/2023', '1510899694', '54800', 'K20', '11', '2022-09-21'),
(418, 'alexfoo', '12/15', '', 'Mit FEB21', 'Y', 'White', '01/09/2022', '2240', 2.76, 'YP0453X', '1', '07/12/2022', '1510885578', '48800', 'K20', '11', '2022-09-21'),
(419, '*dennispn', '12/15', '', 'Mit FEB21 + Box', '', 'White', '', '', 0, 'YP0613B', '', '28/06/2022', '', '49800', 'K20', '11', '2022-09-21'),
(420, '*dennispn', '10/15', '', 'Mit FEB21 Auto+Box', 'Y', 'White', '', '', 0, 'YN9974K', '1', '28/10/2022', '', '48800', 'K20', '11', '2022-09-21'),
(421, 'catherinec', '04/14', '', 'Mit FEB21 Auto/Canopy', '', 'White', '26/08/2022', '2400', 2.6, 'YN5042B', '2', '22/10/2022', '1511046294', '30800', 'K20', '11', '2022-09-21'),
(422, 'csooi', '03/14', '', 'Mit FEB21 With Hood', 'Y', 'White', '07/09/2022', '2400', 2.6, 'YN5131C', '2', '26/03/2023', '1510816987', '28800', 'K20', '11', '2022-09-21'),
(423, 'tonylee', '04/18', '', 'Mit Canter With Hood', 'Y', 'White', '', '2380', 2.62, 'YP8610G', '1', '05/04/2023', '', '0', '30SEP', '11', '2022-09-21'),
(424, 'chester', '12/17', '', 'Isu NPR85 Auto with canopy', 'Y', 'White', '08/09/2022', '2460', 4.24, 'YP8174Z', '2', 'LAY UP', 'YP8174Z', '73800', 'K20', '11', '2022-09-21'),
(425, 'alexfoo', '11/14', '', 'Isu NPR85 + Hood', '', 'White', '28/06/2022', '2500', 2.5, 'YQ7482K', '1', '27/11/2022', '1510841794', '34800', 'K20', '11', '2022-09-21'),
(426, 'alexfoo', '10/14', '', 'Isu NPR85 Hood', 'Y', 'White', '07/09/2022', '2940', 2.06, 'YN6532Y', '1', '13/10/2022', '1510836125', '34800', 'MH', '11', '2022-09-21'),
(427, 'siong', '07/14', '', 'Isu NPR85 With Hood', 'Y', 'Blue', '18/05/2022', '2480', 4.22, 'YN5492K', '1', 'LAY UP', '1510819543', '27800', 'K20', '11', '2022-09-21'),
(428, 'rosson', '07/14', '', 'Isu NPR75 15Ft Wooden Body', 'Y', 'White', '22/08/2022', '2480', 5.42, 'YN5635R', '1', '08/07/2023', '1510819808', '27800', 'K20', '11', '2022-09-21'),
(429, 'weizhe', '04/16', '', 'Isu NNR85 + hood (auto)', '', 'White', '22/08/2022', '2440', 2.56, 'YP2000G', '3', '06/10/2022', '1510904253', '53800', 'K20', '11', '2022-09-21'),
(430, 'alexfoo', '04/15', '', 'Isu NNR85', '', 'White', '44711', '2380', 2.62, 'YN7928H', '3', 'LAY UP', '1510854614', '39800', 'K20', '11', '2022-09-21'),
(431, '*dennispn', '09/14', '', 'Isu NNR85', '', 'White', '', '', 0, 'YN6263Z', '', '44750', '', '0', '', '11', '2022-09-21'),
(432, 'catherinec', '08/14', '', 'Isu NNR85 Auto/Box', '', 'White', '44761', '2460', 2.54, 'YN5800E', '2', '44967', '1510822835', '30800', 'K20', '11', '2022-09-21'),
(433, 'alexfoo', '09/18', '', 'Isu NNR 85 + Hood', 'Y', 'White', '44809', '2400', 2.4, 'YP9612U', '1', '44996', '1510994915', '77800', 'K20', '11', '2022-09-21'),
(434, 'alexfoo', '08/14', '', 'Isu NMR85 + Box + T/G', 'Y', 'Blue', '44776', '3660', 1.34, 'YN5820Y', '3', '44976', '1510988851', '30800', 'K20', '11', '2022-09-21'),
(435, 'tonylee', '04/15', '', 'Hino Xzu710r Box GST', '', 'White', '44776', '2500', 2.5, 'YN7713K', '2', '44861', '1510852535', '39500', 'K20', '11', '2022-09-21'),
(436, 'catherinec\r\n', '10/15\r\n', '', 'Mit FEB71 BOX\r\n', '', 'White\r\n', '29/08/2022', '2460', 4.24, 'YN9396D', '2', 'LAY UP\r\n', '1511000406\r\n', '45800', 'K20', '11', '0000-00-00'),
(437, 'catherinec\r\n', '12/18\r\n', '', 'Mit FEB21 Wooden Deck/Canopy\r\n', '', 'White\r\n', '15/08/2022', '2320', 2.68, 'YP9767G\r\n', '1', '06/12/2022', '1511000745\r\n', '83800', 'K20\r\n', '11', '0000-00-00'),
(438, 'rosson', '10/15', '', 'Mit FEB21 + Freezer Class 3', 'Y', 'White', '18/03/2022', '2480', 2.52, 'YN9428X', '2', '01/10/2022', '1510876379', '37800', 'K20', '12', '2022-09-21'),
(439, 'siong', '12/17', '', 'Isu NPR85 + Freezer - 11*', 'Y', 'White', '05/05/2022', '2480', 2.52, 'YP8137G', '1', '17/10/2022', '1510974743', '73800', 'K20', '12', '2022-09-21'),
(440, 'chester', '12/17', '', 'Isu NPR85 freezer -18', 'Y', 'White', '08/09/2022', '2480', 2.52, 'YP8074D', '1', '11/12/2022', '1510975056', '73800', 'K20', '12', '2022-09-21'),
(441, 'chester', '12/17', '', 'Isu NPR85 freezer -18', 'Y', 'White', '08/09/2022', '2400', 2.6, 'YP8324H', '1', '16/12/2022', '1510975080', '73800', 'K20', '12', '2022-09-21'),
(442, 'catherinec', '08/17', '', 'Isu NPR85 Freezer -10 w T/G', '', 'White', '08/08/2022', '3960', 1.04, 'YP7154M', '2', 'LAY UP', '1510966873', '73800', 'K20', '12', '2022-09-21'),
(443, 'catherinec', '06/17', '', 'Isu NPR85 + Freezer -15', '', 'White', '12/08/2022', '2400', 2.6, 'YP6623H', '2', '10/02/2023', '1510961328', '70800', 'K20', '12', '2022-09-21'),
(444, 'siong', '08/14', '', 'Isu NPR85 + Freezer - 15*', 'Y', 'White', '', '2500', 2.5, 'YN5994D', '2', '27/02/2023', '', '32800', 'W/S', '12', '2022-09-21'),
(445, 'rosson\r\n', '10/15\r\n', '', 'Mit FEB21 + Freezer Class 3\r\n', 'Y\r\n', 'White\r\n', '21/03/2022', '2460', 2.54, 'YN9337A\r\n', '2', '01/10/2022', '1510876395\r\n', '37800', 'K20\r\n', '12', '0000-00-00'),
(446, 'rosson\r\n', '10/15\r\n', '', 'Mit FEB21 + Freezer Class 3\r\n', 'Y\r\n', 'White\r\n', '21/03/2022', '2480', 2.52, 'YN9403S\r\n', '2', '01/10/2022', '1510876387\r\n', '37800', 'K20\r\n', '12', '0000-00-00'),
(447, 'csooi', '09/12', '', 'Isu FRR90 Non DPD & Adblue', '', 'White', '14/09/2022', '4940', 5.86, 'YN3067T', '1', '23/09/2022', '1510788681', '107800', 'K20', '13', '2022-09-22'),
(448, 'csooi', '09/12', '', 'Isu FRR90 5 yrs Non DPD & Adblu', '', 'White', '14/09/2022', '4940', 5.86, 'YN3067T', '1', '23/09/2022', '1510788681', '80800', 'K20', '13', '2022-09-22'),
(449, 'catherinec\r\n', '07/17\r\n', '', 'Mit FK62 FK62 Hood/Tailgate\r\n', '', 'White\r\n', '', '6140', 5.76, 'YP7009A\r\n', '1', '30/11/2022', '', '0', '25JUN\r\n', '13', '0000-00-00'),
(450, 'weizhe\r\n', '09/14\r\n', '', 'Isu FRR90 Box\r\n', 'Y\r\n', 'White\r\n', '15/09/2022', '5680', 4.72, 'YN6346T\r\n', '2\r\n', '25/09/2022', '1510834913\r\n', '0', 'W/S\r\n', '13', '0000-00-00'),
(451, 'alexfoo\r\n', '06/07\r\n', '', 'Isu FTR34 + Hood\r\n', 'Y\r\n', 'Blue\r\n', '06/07/2022', '7540', 8.46, 'YM6692Z\r\n', '1\r\n', '07/12/2022', '1510610181\r\n', '59800', 'K20\r\n', '14', '0000-00-00'),
(452, 'alexfoo\r\n', '06/07\r\n', '', 'Isu FTR34 + Hood\r\n', 'Y\r\n', 'Blue\r\n', '06/07/2022', '6440', 9.56, 'YM6480T\r\n', '1\r\n', '03/12/2022', '1510610389\r\n', '59800', 'K20\r\n', '14', '0000-00-00'),
(453, 'kcng', '03/17', '', 'Isu Cyz52 tipper', 'Y', 'White', '08/07/2022', '12140', 15.86, 'XE2747E', '2', 'LAY UP', '2010536629', '109800', 'K20', '15', '2022-09-22'),
(454, 'kcng', '10/16', '', 'Isu CYZ52 tipper', 'Y', 'White', '08/07/2022', '12120', 15.88, 'XE2353H', '2', 'LAY UP', '2010525846', '99800', 'K20', '15', '2022-09-22'),
(455, 'kcng', '02/21', '', 'Mit FV70 Tipper (Auto)', 'Y', 'White', '08/07/2022', '11460', 16.54, 'XE6190J', '1', 'LAY UP', '2010599718', '175800', 'K20', '15', '2022-09-22'),
(456, 'kcng', '02/21', '', 'Mit FV70 Tipper (Auto)', 'Y', 'White', '08/07/2022', '11460', 16.54, 'XE6202J', '1', 'LAY UP', '2010596334', '175800', 'K20', '15', '2022-09-22'),
(457, 'kcng', '01/21', '', 'Mit FV70 Tipper (Auto)', 'Y', 'White', '08/07/2022', '11460', 16.54, 'XE6162R', '1', 'LAY UP', '2010596152', '171800', 'K20', '15', '2022-09-22'),
(458, 'kcng', '01/11', '', 'Mit FV51 tipper', 'Y', 'White', '29/06/2022', '11840', 16.16, 'XD4575B', '2', 'LAY UP', '2010553110', '79800', 'K20', '15', '2022-09-22'),
(459, 'kcng', '01/11', '', 'Mit FV51 tipper', '', 'White', '18/07/2022', '11740', 16.26, 'XD4551U', '2', 'LAY UP', '2010463989', '81800', 'K20', '15', '2022-09-22'),
(460, 'kcng', '09/19', '', 'Mit Fuso FV 70 Tipper (Auto)', 'Y', 'White', '08/07/2022', '11320', 16.68, 'XE5222H', '1', 'LAY UP', '2010579067', '146800', 'K20', '15', '2022-09-22'),
(461, 'soon\r\n', '12/18\r\n', '', 'Hino Fs1eknd Tipper\r\n', 'Y\r\n', 'White\r\n', '11/04/2022', '12040', 15.96, 'XE4528H\r\n', '1', 'LAY UP\r\n', '2010559879\r\n', '143800', 'K20\r\n', '15', '0000-00-00'),
(462, 'kcng\r\n', '07/17\r\n', '', 'Isu CYZ52 tipper\r\n', 'Y\r\n', 'White\r\n', '08/07/2022', '12100', 15.9, 'XE3150U\r\n', '2', 'LAY UP\r\n', '2010543947\r\n', '119800', 'K20\r\n', '15', '0000-00-00'),
(463, 'tonylee', '09/12', '', 'Toyota Altis 1.6 Auto', '', '', '', '', 0, 'SGU6066C', '', '44829', '', '0', '19SEP', '16', '2022-09-22'),
(464, 'terry', '09/09', '', 'Toyota Altis 1.6 Auto (199K)', '', 'Black', '', '', 0, 'SJS8796R', '2', '44998', '1123247719', '25800', 'K20', '16', '2022-09-22'),
(465, 'catherinec', '10/17', '', 'Nis Pulsar 1.2 Dig-t Cvt', '', 'Silver', '', '', 0, 'SNG3312C', '1', '44840', '1127958239', '65800', 'W/S', '16', '2022-09-22'),
(466, 'chester', '06/21', '', 'Nis Kicks Premium Plus 1.2l E-p', '', '', '', '', 0, 'SNA5520L', '', '45105', '', '0', '19SEP', '16', '2022-09-22'),
(467, 'eltonlim', '05/19', '', 'Mit Attrage 1.2 Cvt', '', 'White', '', '', 0, 'SML3256S', '1', '44879', '1129361737', '68800', 'K20', '16', '2022-09-22'),
(468, 'catherinec', '07/17', '', 'Hyundai Elantra Ad 1.6 Gls At', '', 'Grey', '', '', 0, 'SLQ5422B', '3', '44939', '1127650786', '64800', 'K20', '16', '2022-09-22'),
(469, 'banyip', '12/19', '', 'Hyundai Ad Avante 1.6 Gls (30km', '', 'Silver', '', '', 0, 'SMR1527S', '2', '44915', '1129765343', '85800', 'K20', '16', '2022-09-22'),
(470, 'catherinec', '05/11', '', 'Merz B 160', '', '', '', '', 0, 'SLF4978D', '', '44870', '', '0', '20JUL', '16', '2022-09-22'),
(471, 'catherinec', '10/08', '', 'Dai J200rg-gmdfw Daihatsu SUV M', '', 'Blue', '', '', 0, 'SJK2463H', '2', '44846', '1122461758', '10800', 'K20', '16', '2022-09-22'),
(472, 'tonylee', '11/16', '', 'Honda Hrv 1.5 DX Cvt 156km', '', 'Black', '', '', 0, 'SLH8455J', '2', '44885', '1127060919', '67500', 'K20', '16', '2022-09-22'),
(473, 'catherinec', '10/20', '', 'Honda Fit 1.3gf Cvt', '', 'Silver', '', '', 0, 'SMV8540K', '1', '44856', '1220130031', '88800', 'K20', '16', '2022-09-22'),
(474, 'kcng', '03/20', '', 'Honda Fit 1.3 Gf Cvt (40kkm)', 'Y', 'Blue', '', '', 0, 'SNG7280J', '2', '45009', '1129916201', '83800', 'K20', '16', '2022-09-22'),
(475, 'catherinec', '03/17', '', 'Mazda Mazda3 4-door Sedan 1.5l', '', '', '', '', 0, 'SLL7930P', '', '44994', '', '0', '15SEP', '16', '2022-09-22'),
(476, 'csooi', '10/08', '', 'Suzuki Sx4 1.6hb At', '', 'White', '', '', 0, 'SJK4736H', '6', '44855', '1124411074', '12800', 'K20', '16', '2022-09-22'),
(477, '*katherine', '09/92', '', 'Suzuki Se416v', '', 'Black', '', '', 0, 'SNB7074P', '16', '44896', '1124093971', '40800', 'K20', '16', '2022-09-22'),
(478, 'paulmas\r\n', '09/08\r\n', '', 'Toyota Vios\r\n', '', 'Green\r\n', '', '', 0, 'SJJ1076D\r\n', '3', '28/02/2023', '1122327075\r\n', '9800', 'K20\r\n', '16', '0000-00-00'),
(479, 'catherinec\r\n', '12/08\r\n', '', 'Toyota Axio 1.5x A\r\n', 'Y\r\n', 'Silver\r\n', '', '', 0, 'SJM1588C\r\n', '2', '22/12/2022', '1120247415\r\n', '54800', 'K20\r\n', '16', '0000-00-00'),
(480, '*katherine\r\n', '05/08\r\n', '', 'Toyota Crown Royal 3.0 A\r\n', '', 'Silver\r\n', '', '', 0, 'SJF1365R\r\n', '3\r\n', '19/11/2022', '1027616911\r\n', '69800', 'K20\r\n', '17', '0000-00-00'),
(481, 'csooi\r\n', '04/16\r\n', '', 'Subaru Forester 2.0I-L CVT AWD\r\n', '', 'Red\r\n', '', '', 0, 'SLB7061A\r\n', '3\r\n', '19/04/2023', '1126546829\r\n', '57800', 'K20\r\n', '17', '0000-00-00'),
(482, 'chester', '05/19', '', 'Merz C180 Avg (r17 Led)', 'Y', 'Red', '', '', 0, 'SNG1253C', '1', '45066', '1129303234', '145800', 'K20', '18', '2022-09-22'),
(483, '*katherine', '06/10', '', 'Audi A5 2.0 Quattro A', '', 'Grey', '', '', 0, 'SNG9309Z', '5', '44896', '', '0', '06SEP', '18', '2022-09-22'),
(484, 'paulmas\r\n', '07/19\r\n', '', 'Merz E300 Avg 30km Agent SVC\r\n', '', 'Black\r\n', '', '', 0, 'SNF1847U\r\n', '1', '29/01/2023', '1129381123\r\n', '219800', 'K20\r\n', '18', '0000-00-00'),
(485, 'willlee\r\n', '09/18\r\n', '', 'Merz E250 Exclusive (r18 Led)\r\n', '', 'Green\r\n', '', '', 0, 'SFJ3603S\r\n', '1', '13/03/2023', '1128717072\r\n', '180800', 'K20\r\n', '18', '0000-00-00'),
(491, 'rrrrr', '2022-11-16', 'Techinasia', '2018 Honda Fit 1.3 Auto', '23', 'vvvv', '2022-12-01', 'hhhh', 0, '2', 'qqqq', '2022-11-19', 'hhhh', 'rrrr', 'dddd', '10', '2022-11-10'),
(492, 'bbbbb', '2022-11-16', 'Techinasia', '2018 Honda Fit 1.3 Auto', '23', 'vvvv', '2022-12-01', 'hhhh', 0, '2', 'qqqq', '2022-11-19', 'hhhh', 'rrrr', 'dddd', '10', '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_request`
--

CREATE TABLE `quotation_request` (
  `id` int(11) NOT NULL,
  `system_id` varchar(255) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `vehicletype_detail` varchar(255) NOT NULL,
  `sale_type` varchar(255) NOT NULL,
  `vehicle_source` varchar(255) NOT NULL,
  `sbu` varchar(255) NOT NULL,
  `cmyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `ic_no` varchar(255) NOT NULL,
  `co_regdate` date NOT NULL,
  `gender_status` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `dl_passdate` date NOT NULL,
  `vehi_no` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `loan` varchar(255) NOT NULL,
  `accessories` varchar(255) NOT NULL,
  `tonnage` varchar(255) NOT NULL,
  `laden` varchar(255) NOT NULL,
  `unladen` varchar(255) NOT NULL,
  `yearofmanufacture` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `consent_form` varchar(255) NOT NULL,
  `pdpaform` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `createdby_name` varchar(255) NOT NULL,
  `createdby_date` datetime NOT NULL,
  `modifiedby_name` varchar(255) NOT NULL,
  `modifiedby_date` datetime NOT NULL,
  `exist_insurance_co` varchar(255) NOT NULL,
  `previous_vehi_no` varchar(255) NOT NULL,
  `claim_exp` varchar(255) NOT NULL,
  `ncd` float NOT NULL,
  `coverage` varchar(255) NOT NULL,
  `sum_insured` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `insco1` varchar(255) NOT NULL,
  `insco2` varchar(255) NOT NULL,
  `insco3` varchar(255) NOT NULL,
  `insco4` varchar(255) NOT NULL,
  `insco5` varchar(255) NOT NULL,
  `insco6` varchar(255) NOT NULL,
  `ins_admin_remark` text NOT NULL,
  `ins_type1` varchar(255) NOT NULL,
  `ins_type2` varchar(255) NOT NULL,
  `ins_type3` varchar(255) NOT NULL,
  `ins_type4` varchar(255) NOT NULL,
  `ins_type5` varchar(255) NOT NULL,
  `ins_type6` varchar(255) NOT NULL,
  `premium1` float NOT NULL,
  `premium2` float NOT NULL,
  `premium3` float NOT NULL,
  `premium4` float NOT NULL,
  `premium5` float NOT NULL,
  `premium6` float NOT NULL,
  `excess1` float NOT NULL,
  `excess2` float NOT NULL,
  `excess3` float NOT NULL,
  `excess4` float NOT NULL,
  `excess5` float NOT NULL,
  `excess6` float NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quotation_request`
--

INSERT INTO `quotation_request` (`id`, `system_id`, `vehicle_type`, `vehicletype_detail`, `sale_type`, `vehicle_source`, `sbu`, `cmyname`, `address`, `ic_no`, `co_regdate`, `gender_status`, `marital_status`, `occupation`, `dl_passdate`, `vehi_no`, `make`, `model`, `loan`, `accessories`, `tonnage`, `laden`, `unladen`, `yearofmanufacture`, `registration_date`, `consent_form`, `pdpaform`, `entry_date`, `entry_time`, `createdby_name`, `createdby_date`, `modifiedby_name`, `modifiedby_date`, `exist_insurance_co`, `previous_vehi_no`, `claim_exp`, `ncd`, `coverage`, `sum_insured`, `remarks`, `contact_no`, `email`, `insco1`, `insco2`, `insco3`, `insco4`, `insco5`, `insco6`, `ins_admin_remark`, `ins_type1`, `ins_type2`, `ins_type3`, `ins_type4`, `ins_type5`, `ins_type6`, `premium1`, `premium2`, `premium3`, `premium4`, `premium5`, `premium6`, `excess1`, `excess2`, `excess3`, `excess4`, `excess5`, `excess6`, `created_at`) VALUES
(1, '50209', 'Commercial', 'LORRY 10FT - DIESEL', 'TradeSales', 'Parallel Import', 'ATR - ABWIN (1994) PTE LTD (*FR 01-11-2017)', 'SING LEE CORPORATION PTE LTD', '1)OTHER SPECIALISED CONSTRUCTION AND RELATED ACTIVITIES N.E.C.\r\n(EXCLUDING ONLINE MARKETPLACES) (43909) SHEETPILING, STRUTTING\r\nWORKS AND OTHER ERSS WORKS\r\n2)GENERAL CONTRACTORS (BUILDING CONSTRUCTION INCLUDING MAJOR\r\nUPGRADING WORKS) (41001) BUILDING AND CIVIL ENGINEERING CONTRACTORS', '200702282H', '2007-02-08', 'Male', 'Single', '1)OTHER SPECIALISED CONSTRUCTION AND RELATED ACTIVITIES N.E.C.\r\n(EXCLUDING ONLINE MARKETPLACES) (43909) SHEETPILING, STRUTTING\r\nWORKS AND OTHER ERSS WORKS\r\n2)GENERAL CONTRACTORS (BUILDING CONSTRUCTION INCLUDING MAJOR\r\nUPGRADING WORKS) (41001) BUILDING AND', '1980-07-31', '1', 'Techinasia', '2020 Toyota Aqua 1.5', 'Yes', '', '1.72', '3500', '1780', '2018', '2018-09-14', 'on', '', '2022-07-08', '01:22:00', 'csooi', '2022-06-08 13:22:49', 'Grid', '2022-11-10 15:40:13', '', '', '', 0, 'COMP: Comprehensive', '', '', '94306388', '', 'NTUC', 'EQ', 'CNTP', '', '', '', '', 'COMP', 'COMP', 'COMP', '', '', '', 1889.88, 2421.88, 2667.3, 0, 0, 0, 600, 500, 500, 0, 0, 0, '2022-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `uen_nric_no` varchar(255) NOT NULL,
  `office_address` text NOT NULL,
  `vehi_no` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `deposit_paymentbycash_chequeno` varchar(255) NOT NULL,
  `finance_due` varchar(255) NOT NULL,
  `paid_to` varchar(255) NOT NULL,
  `paid_price` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `handover_date` date NOT NULL,
  `handover_time` varchar(255) NOT NULL,
  `authorised_sign` varchar(255) NOT NULL,
  `authorisedsignofseller` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`id`, `date`, `reference_no`, `uen_nric_no`, `office_address`, `vehi_no`, `model`, `price`, `deposit_paymentbycash_chequeno`, `finance_due`, `paid_to`, `paid_price`, `balance`, `handover_date`, `handover_time`, `authorised_sign`, `authorisedsignofseller`, `created_at`) VALUES
(1, '2022-12-19', '221200', '201207059G', 'OF: 9 TAGORE LANE #02-01 S787472', 'SMC1021M', '2018 TOYOTA SIENTA HYBRID 1.5AX', '86500', '', '', 'TAN WEI AUTO PTE LTD', '86500', '0.00', '2022-12-20', '02:55 PM', 'kzh-signature39.jpg', 'maybank1.jpg', '2022-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `saleadmin_category`
--

CREATE TABLE `saleadmin_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saleadmin_category`
--

INSERT INTO `saleadmin_category` (`id`, `name`, `created_at`) VALUES
(1, 'LTA Forms', '2022-09-28'),
(2, 'Purchase Related Forms', '2022-09-28'),
(3, 'HP Loan Forms (Abwin In-House loan)', '2022-09-28'),
(4, 'Special Approval Forms', '2022-09-28'),
(5, 'PB Bus LTA Application Forms', '2022-09-28'),
(6, 'PDPA Act 2012 (for Insurance)', '2022-09-28'),
(7, 'NEW Commercial Veh LTA Doc. Requirement', '2022-09-28'),
(8, 'Double Transfer Form (01 transfer)', '2022-09-28'),
(9, 'Commercial_Bank Application Forms', '2022-09-28'),
(10, 'Private Car_Bank Application Forms', '2022-09-28'),
(11, 'Private Car Form (SPP)', '2022-09-28'),
(12, 'AIF Trade Sales Loan documents', '2022-09-28'),
(13, 'GIRO FORM (BANK)', '2022-09-28'),
(14, 'LTA GUIDELINE', '2022-09-28'),
(15, 'NEW VEHICLE WARRANTY & SERVICING', '2022-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `salesadmin_files`
--

CREATE TABLE `salesadmin_files` (
  `id` int(11) NOT NULL,
  `saleadmin_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `document_name` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salesadmin_files`
--

INSERT INTO `salesadmin_files` (`id`, `saleadmin_id`, `customer_id`, `document_name`, `file`, `created_at`) VALUES
(1, 9, 0, '', 'NTUC__Credit_Card_Form_1_9_221.pdf', '2022-11-02'),
(2, 9, 0, '', 'EQ___COA1.pdf', '2022-11-02'),
(3, 11, 0, '', 'MayBank_Application_Form_2021_09__.pdf', '2022-12-05'),
(4, 12, 0, '', 'file3.pdf', '2022-12-05'),
(5, 12, 0, '', 'Abwin_Group_Proposal_Form_wef_25032021.pdf', '2022-12-08'),
(8, 2, 0, '', 'MBFS_Full_Settlement_AUTHORIZATION_Form__12_Oct_2022_2.pdf', '2023-02-10'),
(10, 2, 0, '', 'Extract_of_Resolutions6.pdf', '2023-02-10'),
(11, 2, 0, '', 'SAMPLE_HOW_TO_FILL_Partnership_Authorised_Letter_201707011.pdf', '2023-02-13'),
(20, 10, 0, '', 'Abwin_Group_Proposal_Form_wef_25032021.pdf', '2023-02-21'),
(21, 10, 0, '', 'DBS_.pdf', '2023-02-21'),
(22, 10, 0, '', 'HL_BANK_1219_APPL.pdf', '2023-02-21'),
(23, 10, 0, '', 'HONG_LEONG_FINANCE.pdf', '2023-02-21'),
(24, 10, 0, '', 'MayBank_Application_Form_2021_09__.pdf', '2023-02-21'),
(25, 10, 0, '', 'UOB_INDIVIDUAL_APPLICATION__R6_16_.pdf', '2023-02-21'),
(26, 10, 0, '', 'UOB_Company.pdf', '2023-02-21'),
(27, 2, 0, '', 'Board_Resolution.pdf', '2023-03-01'),
(28, 2, 0, '', 'Contra_Payment_to_3rd_Form_(ATD).pdf', '2023-03-01'),
(29, 2, 0, '', 'Contra_Payment_to_3rd_Form__ABWIN_1994_.pdf', '2023-03-01'),
(30, 2, 0, '', 'Extract_of_Resolutions.pdf', '2023-03-01'),
(31, 2, 0, '', 'Full_Settlement_Form.pdf', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `sales_admin`
--

CREATE TABLE `sales_admin` (
  `id` int(11) NOT NULL,
  `system_id` int(11) NOT NULL,
  `file` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `lastmodified_by` varchar(255) NOT NULL,
  `lastmodified_Date` datetime NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_admin`
--

INSERT INTO `sales_admin` (`id`, `system_id`, `file`, `category`, `remark`, `customer_id`, `entry_date`, `entry_time`, `created_by`, `created_date`, `lastmodified_by`, `lastmodified_Date`, `created_at`) VALUES
(2, 2, 'Contra_Payment_to_3rd_Form_(ATD)4.pdf,Board_Resolution2.pdf,Full_Settlement_Form1.pdf,Partner_Authorise_Letter_(LTA)1.pdf,SCB___Early_full_settlement_form__car_dealer_1.pdf,Contra_Payment_to_3rd_Form__ABWIN_1994_1.pdf,Payment_Voucher_for_Purchase__Green_1.pdf,Extract_of_Resolutions3.pdf,MBFS_ET_Authorization_form__20220301_3.pdf,', '2', 'tesst', 0, '2014-03-25', '08:35:00', 'ykong', '2014-03-25 23:35:32', 'Grid', '2023-03-01 12:00:56', '2022-09-30'),
(3, 4, 'Reloan_-_Sales_and_Purchase_Agreement.pdf,Reloan_Sales_and_Purchase_Agreement_Seller_to_Buyer.pdf,SAMPLE_HOW_TO_FILL_Partnership_Authorised_Letter_20170701.pdf,', '3', '', 0, '2014-06-11', '11:06:00', 'ykong', '2014-06-12 02:06:22', 'pychan', '2022-06-07 11:52:02', '2022-09-30'),
(4, 5, 'Special_Approval__wef_14_06_2018_.pdf,', '4', '', 0, '2014-06-11', '11:15:00', 'ykong', '2014-06-12 02:15:43', 'cmlee', '2018-06-14 12:48:30', '2022-09-30'),
(5, 7, 'LTA_Form_A_1_and_A_2__PH_D20_.pdf,LTA_Form_B___passenger_namelist_for_employees.pdf,LTA_Application_Form_Public_Service_Vehicle_Licence_revised_2019__PH_D20_.pdf,Bus_Type_Note.pdf,', '5', '', 0, '2014-06-24', '09:30:00', 'ykong', '2014-06-25 00:30:40', 'pychan', '2022-05-13 10:07:03', '2022-09-30'),
(6, 11, 'PPDA.pdf,', '6', '', 0, '2015-10-08', '08:54:00', 'ylcheong', '2015-10-08 23:54:31', 'pychan', '2017-04-12 12:04:44', '2022-09-30'),
(7, 13, 'LTA_Documents_Requirement_for_New_Vehicle__v20191015_.pdf,', '7', '1. New Vehicle with ETS / COE (00 Transfer)\r\n2. New Vehicle with Customer Own ETS /COE', 0, '0000-00-00', '02:32:00', 'ylcheong', '2015-11-26 06:32:39', 'ylcheong', '2019-10-16 10:24:14', '2022-09-30'),
(8, 15, '01_Transfer_Form___MBFS.pdf,01_Transfer_Form___Hong_Leong.pdf,01_Transfer_Form___Abwin_Pte_Ltd.pdf,01_Transfer_Form___HL_Bank.pdf,01_Transfer_Form_MAYBANK.pdf,', '8', 'Note on 27-11-2017: UOB & Hitachi not need 01 Transfer Form ', 0, '2016-07-25', '01:52:00', 'ylcheong', '2016-07-25 13:52:27', 'shuying', '2022-07-07 14:00:59', '2022-09-30'),
(9, 2211000, 'PPDA1.pdf,', '14', '', 0, '2022-11-02', '02:41:00', 'Gridd', '2022-11-02 14:41:18', 'Gridd', '2022-11-02 15:30:29', '2022-11-02'),
(10, 10, '', '10', '', 0, '0000-00-00', '00:00:00', '', '0000-00-00 00:00:00', 'Grid', '2023-02-21 01:45:04', '2022-12-05'),
(12, 2212001, '', '15', '', 0, '2022-12-05', '05:47:00', 'Grid', '2022-12-05 17:47:36', 'Grid', '2022-12-08 16:46:11', '2022-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `sales_receipt`
--

CREATE TABLE `sales_receipt` (
  `id` int(11) NOT NULL,
  `billto` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `vehiregno` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `ltatransfer_fee` varchar(255) NOT NULL,
  `roadtax` varchar(255) NOT NULL,
  `insurance_premium` varchar(255) NOT NULL,
  `hp_facilities_fee` varchar(255) NOT NULL,
  `loan_adv_payment` varchar(255) NOT NULL,
  `total_payable` varchar(255) NOT NULL,
  `less` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `tradein_vehino` varchar(255) NOT NULL,
  `tradein_price` varchar(255) NOT NULL,
  `lessfull_sett_amt` varchar(255) NOT NULL,
  `loan_amt` varchar(255) NOT NULL,
  `loan_amt_percent` varchar(255) NOT NULL,
  `finance_cmy` varchar(255) NOT NULL,
  `total_deduction` varchar(255) NOT NULL,
  `balance_deduction` varchar(255) NOT NULL,
  `cash_cheque_no` varchar(255) NOT NULL,
  `vehion_date` date NOT NULL,
  `vehion_time` varchar(255) NOT NULL,
  `signof_author` varchar(255) NOT NULL,
  `signof_buyer` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_receipt`
--

INSERT INTO `sales_receipt` (`id`, `billto`, `address`, `vehiregno`, `make`, `model`, `date`, `serial_no`, `invoice_no`, `selling_price`, `ltatransfer_fee`, `roadtax`, `insurance_premium`, `hp_facilities_fee`, `loan_adv_payment`, `total_payable`, `less`, `deposit`, `tradein_vehino`, `tradein_price`, `lessfull_sett_amt`, `loan_amt`, `loan_amt_percent`, `finance_cmy`, `total_deduction`, `balance_deduction`, `cash_cheque_no`, `vehion_date`, `vehion_time`, `signof_author`, `signof_buyer`, `type`, `created_at`) VALUES
(1, 'THIM CONSTRUCTION', '494A GEYLANG ROAD (S)339452', 'GBL6942E', 'TOYOTA', 'HIACE DX 2.0 AUTO', '2022-02-09', '10354', 'INV10354', '67800', '', '', '1628.84', '', '879', '70307.84', '', '3000', '', '', '0', '61000', '2.99', 'UOB Bank', '64000.00', '6307.84', '', '2022-12-15', '05:26 PM', 'maybank2.jpg', 'maybank3.jpg', 'gst', '2022-12-29'),
(2, 'Dickson Capital Pte Ltd', '29 UBI ROAD 4,DICKSON AUTO CENTRE,Singapore 408619', 'SJA5401U', 'KIA', 'FORTE K3 1.6A', '2022-12-08', '10407', 'INV10407', '63000', '', '', '1264.56', '1000', '854', '66118.56', '', '32000', '', '', '0', '48000', '2.28', 'DBS Bank', '80000.00', '-13881.44', '', '2023-01-11', '03:28 PM', 'kzh-signature.jpg', 'kzh-signature1.jpg', 'gms', '2023-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `sale_crm`
--

CREATE TABLE `sale_crm` (
  `id` int(11) NOT NULL,
  `system_id` varchar(255) NOT NULL,
  `sale_crm_no` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `given_name` varchar(255) NOT NULL,
  `contact_source` varchar(255) NOT NULL,
  `adver_veh_no` varchar(255) NOT NULL,
  `mobile_phone` varchar(255) NOT NULL,
  `office_no` varchar(255) NOT NULL,
  `do_not_call` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `nature_of_business` varchar(255) NOT NULL,
  `vehi_own` varchar(255) NOT NULL,
  `vehi_leave` varchar(255) NOT NULL,
  `deci_make_surname` varchar(255) NOT NULL,
  `deci_make_givename` varchar(255) NOT NULL,
  `deci_make_phone` varchar(255) NOT NULL,
  `deci_make_email` varchar(255) NOT NULL,
  `coi_surname` varchar(255) NOT NULL,
  `coi_givename` varchar(255) NOT NULL,
  `coi_phone` varchar(255) NOT NULL,
  `coi_email` varchar(255) NOT NULL,
  `remark` text NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `no_of_location` varchar(255) NOT NULL,
  `no_of_years_business` varchar(255) NOT NULL,
  `staff_strength` varchar(255) NOT NULL,
  `buy_sell_interest` varchar(255) NOT NULL,
  `sale_man` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `createdby_name` varchar(255) NOT NULL,
  `createdby_date` datetime NOT NULL,
  `modifiedby_name` varchar(255) NOT NULL,
  `modifiedby_date` datetime NOT NULL,
  `nric_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_postalcode` varchar(255) NOT NULL,
  `fax_no` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale_crm`
--

INSERT INTO `sale_crm` (`id`, `system_id`, `sale_crm_no`, `title`, `surname`, `given_name`, `contact_source`, `adver_veh_no`, `mobile_phone`, `office_no`, `do_not_call`, `email`, `company_name`, `nature_of_business`, `vehi_own`, `vehi_leave`, `deci_make_surname`, `deci_make_givename`, `deci_make_phone`, `deci_make_email`, `coi_surname`, `coi_givename`, `coi_phone`, `coi_email`, `remark`, `vehicle_type`, `no_of_location`, `no_of_years_business`, `staff_strength`, `buy_sell_interest`, `sale_man`, `entry_date`, `entry_time`, `createdby_name`, `createdby_date`, `modifiedby_name`, `modifiedby_date`, `nric_no`, `address`, `postalcode`, `billing_address`, `billing_postalcode`, `fax_no`, `occupation`, `dob`, `created_at`) VALUES
(1, 'DDD123333333010101', 'VSF222', 'Mrs', 'SSSS', 'UUUU', '2', '1', '3432423432', '534532', 'on', 'test@gmail.com', 'CCCCCC', 'BBBBB', '5000', '2000', 'AAAA', 'BBB', '44444444', 'aa@gmail.com', 'EEEE', 'FFFF', '5666666', 'ee@gmail.com', 'testttttt', 'Pte Vehs', 'fewrwr', '333', 'werwqe', 'wrwerw', 'Cscooi', '2022-09-20', '00:00:00', 'BBBBB', '0000-00-00 00:00:00', 'Grid', '2022-11-10 15:57:17', 'werewsdfwew324', 'sfsf', '333', 'sdf', '4444', '33566546', 'dafsfsfsdf', '2022-09-21', '2022-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `sa_tbl`
--

CREATE TABLE `sa_tbl` (
  `id` int(11) NOT NULL,
  `billto` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `selling_price` varchar(255) NOT NULL,
  `ltatransfer_fee` varchar(255) NOT NULL,
  `roadtax` varchar(255) NOT NULL,
  `insurance_premium` varchar(255) NOT NULL,
  `hp_facilities_fee` varchar(255) NOT NULL,
  `loan_adv_payment` varchar(255) NOT NULL,
  `total_payable` varchar(255) NOT NULL,
  `less` varchar(255) NOT NULL,
  `deposit` varchar(255) NOT NULL,
  `tradein_vehino` varchar(255) NOT NULL,
  `tradein_price` varchar(255) NOT NULL,
  `lessfull_sett_amt` varchar(255) NOT NULL,
  `loan_amt` varchar(255) NOT NULL,
  `loan_amt_percent` varchar(255) NOT NULL,
  `finance_cmy` varchar(255) NOT NULL,
  `total_deduction` varchar(255) NOT NULL,
  `balance_deduction` varchar(255) NOT NULL,
  `cash_cheque_no` varchar(255) NOT NULL,
  `vehion_date` date NOT NULL,
  `vehion_time` varchar(255) NOT NULL,
  `signof_author` varchar(255) NOT NULL,
  `signof_buyer` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_date`) VALUES
(1, 'sdfssss', '2022-09-16'),
(2, 'bbbb', '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(11) NOT NULL,
  `broker` varchar(255) NOT NULL,
  `car_plate` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `broker`, `car_plate`, `make`, `model`) VALUES
(1, 'gsadfas', 'sdf', 'sasf', 'sdf'),
(2, 'sadf', 'asf', 'sdd', 'asfds');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `cmy_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `interesting_option` varchar(255) NOT NULL,
  `qty_of_cars` int(100) NOT NULL,
  `business_register_no` varchar(255) NOT NULL,
  `office_no` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `cmy_name`, `phone`, `email`, `password`, `address`, `interesting_option`, `qty_of_cars`, `business_register_no`, `office_no`, `message`, `role`, `status`, `created_date`) VALUES
(1, 'Grid', 'Plus', '', '9478578222', 'admin@gmail.com', '$2y$10$jJ31xf5Sk8HlSNejD3z2fOLLjallNTc8j.CzjHclrmmWXZxlpyHXC', '', '', 0, '', '', '', 'admin', 0, '2022-10-19 14:42:10'),
(3, 'Steve', 'Whiteee', '', '45698555', 'steve@gmail.com', '$2y$10$rdjGzz.lCo6Oopt90jqExekce8cuh2tbpguLVU1Z6o5H6hu8.frpu', '', '', 0, '', '', '', 'dealer', 0, '2022-10-19 14:42:07'),
(4, 'Csooi', 'i', '', '234344', 'csooi@gmail.com', '$2y$10$oO393eyt6lHfbvQzahIXJO7AYJM9lgLlBhuKQatZTIPdLDcEtKghG', '', '', 0, '', '', '', 'sale', 0, '2022-10-19 14:41:41'),
(5, 'Yuu', 'Yu', '', '885445885', 'yu@gmail.com', '$2y$10$wovS62tSscr.6odNtyEO6eHYID74x6bEWJWcKtsU1XA/vmmg3qrV2', '', '', 0, '', '', '', 'sale', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `rental_price` varchar(255) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `car_package` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `tnc` varchar(255) NOT NULL,
  `engine_type` varchar(255) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `transmission` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `seat_qty` int(11) NOT NULL,
  `door` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `body_type` varchar(255) NOT NULL,
  `consumption` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `car_design` varchar(255) NOT NULL,
  `title_status` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `price_status` varchar(255) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `document` text NOT NULL,
  `purchase_date` date NOT NULL,
  `registration_date` date NOT NULL,
  `available_date` date NOT NULL,
  `show_status` int(11) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `rental_price`, `selling_price`, `car_package`, `description`, `duration`, `brand_name`, `photo`, `model_name`, `vehicle_no`, `tnc`, `engine_type`, `fuel_type`, `transmission`, `features`, `seat_qty`, `door`, `color`, `body_type`, `consumption`, `year`, `car_design`, `title_status`, `status`, `price_status`, `post_by`, `document`, `purchase_date`, `registration_date`, `available_date`, `show_status`, `created_date`) VALUES
(1, '23432', '0.00', '', '<p>tessssbbb</p>\r\n', '', 'Techinasia', 'car3.png', '2020 Toyota Aqua 1.5', '17DCC', 'ds', 'dsf', '1', 'f', 'feature44', 3, 3, '#000000', '', 'sdfdf', 'sdf', '', '3', 1, 'leasing', 'admin', 'test1.pdf,test2.pdf,', '2002-09-27', '2002-09-29', '0000-00-00', 0, '2022-09-09'),
(2, '4000', '0.00', '', '', '', 'Techinasia', 'car2.png', '2018 Honda Fit 1.3 Auto', '12DCB', 'sd', '3', '', '3', 'feature44', 4, 4, '#00a4ff', '', '554', '2020', '', '2', 0, 'leasing', 'admin', 'test21.pdf,', '0000-00-00', '0000-00-00', '0000-00-00', 0, '2022-09-09'),
(3, '43', '0.00', '', '<p>sadf</p>\r\n', '', 'E27', 'car7.png', '2017 BMW 320i 2.0', '18DCR', '333', 'sdf', '1', 'sdf', 'feature44', 4, 4, '#aab5bb', '', 'sf', 'asf', '', '3', 0, 'leasing', 'admin', 'test12.pdf,test22.pdf,', '2022-09-25', '2022-10-06', '0000-00-00', 0, '2022-09-09'),
(4, '6000', '10186.92', '', '<p>nnnnnnnnn</p>\r\n', '', 'E27', 'car1.png', '2015 Honda Shuttle 1.5', '20DCY', '23sd', '20.5', '1', '6.5', 'feature3333,feature44', 4, 4, '#f10a0a', '1', '3.2', '2022', '', '4', 0, 'leasing', 'admin', '', '0000-00-00', '0000-00-00', '0000-00-00', 0, '2022-11-02'),
(6, '40000', '0.00', '', '<p>bbb</p>\r\n', '', 'Techinasia', 'car72.png', '2020 Nissan Note 1.2A', '21DCN', 'dsf', '20.5', '1', '6.5', '', 4, 4, '', '1', '3.22', '2022', '', '3', 0, 'leasing', 'admin', '', '2022-11-15', '2022-11-26', '0000-00-00', 0, '2022-11-02'),
(7, '5000', '0.00', '', '<p>TESSVV</p>\r\n', '', 'Techinasia', 'car43.jpg', 'BBBB', '343DRE', '34', '20.5', '1', '6.5', 'feature3333,feature44', 5, 5, '#00a4ff,#aab5bb', '1', '3.2', '2022', '', '2', 0, 'leasing', 'admin', '', '2022-11-08', '2022-11-30', '0000-00-00', 1, '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_details`
--

CREATE TABLE `vehicles_details` (
  `id` int(11) NOT NULL,
  `vehi_no` text NOT NULL,
  `makemodel` text NOT NULL,
  `buycode` text NOT NULL,
  `sellcode` text NOT NULL,
  `broker1code` text NOT NULL,
  `broker2code` text NOT NULL,
  `broker3code` text NOT NULL,
  `eoutdate` date NOT NULL,
  `prev_vehino` text NOT NULL,
  `gsttxt` text NOT NULL,
  `purchase_date` date NOT NULL,
  `salesbooking_date` date NOT NULL,
  `purchase_agrement` text NOT NULL,
  `sales_agrement` text NOT NULL,
  `etspaper_from` text NOT NULL,
  `etspaper_to` text NOT NULL,
  `purchase_price` text NOT NULL,
  `purchaseprice_gst` text NOT NULL,
  `cost_details` text NOT NULL,
  `cost_amt` varchar(255) NOT NULL,
  `cost_gst` varchar(255) NOT NULL,
  `cost_total` decimal(10,2) NOT NULL,
  `total_gst` varchar(255) NOT NULL,
  `totalcostprice` text NOT NULL,
  `totalcostprice_gst` varchar(255) NOT NULL,
  `commission_detail` text NOT NULL,
  `commission_total` varchar(255) NOT NULL,
  `floor_stock` text NOT NULL,
  `floor_total` varchar(255) NOT NULL,
  `broker_payout` text NOT NULL,
  `broker_total` varchar(255) NOT NULL,
  `sellingprice` varchar(255) NOT NULL,
  `sellingprice_gst` text NOT NULL,
  `lesstotalcostprice` text NOT NULL,
  `lesstotalcostprice_gst` text NOT NULL,
  `totalgst` text NOT NULL,
  `gstinput` text NOT NULL,
  `gstout` text NOT NULL,
  `grossprofit` text NOT NULL,
  `netprofitloss` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicles_details`
--

INSERT INTO `vehicles_details` (`id`, `vehi_no`, `makemodel`, `buycode`, `sellcode`, `broker1code`, `broker2code`, `broker3code`, `eoutdate`, `prev_vehino`, `gsttxt`, `purchase_date`, `salesbooking_date`, `purchase_agrement`, `sales_agrement`, `etspaper_from`, `etspaper_to`, `purchase_price`, `purchaseprice_gst`, `cost_details`, `cost_amt`, `cost_gst`, `cost_total`, `total_gst`, `totalcostprice`, `totalcostprice_gst`, `commission_detail`, `commission_total`, `floor_stock`, `floor_total`, `broker_payout`, `broker_total`, `sellingprice`, `sellingprice_gst`, `lesstotalcostprice`, `lesstotalcostprice_gst`, `totalgst`, `gstinput`, `gstout`, `grossprofit`, `netprofitloss`, `created_at`) VALUES
(1, '1', 'SUZUKI SX4', 'ALVIN', 'BEN', 'EVAN', 'CO', '', '2023-01-12', '', 'NIL', '2023-01-06', '2023-01-20', '21507', '11206', '', '', '14000', '10', 'REPAIR,CAR WASH,,,0,0,13}REPAIR,HS WORKSHOP REPAIR,,,0,0,320}REPAIR,AHKOK REPAIR,,,0,0,105}PETROL,,,,0,0,36.92}PARKING COUPON,,,,0,0,12}ADVERTISMENT FEE,,,,0,0,31.85}E-TRANSFER FEE,,,,0,0,25}BANK SURCHARGE,,,,0,0,200}CO ADMIN,,,,0,0,777}COE BY COMPANY,,,,0,0,555}OVER TRADE,,,,0,0,0}MISCELLANEOUS,,,,0,0,0}SURCHARGE,,,,0,0,0}OUTSIDE PURCHASE COMM,,,,0,0,444}OUTSIDE SALE COMM,,,,0,0,333}HP ADMIN FEE,,,,0,0,0}CONVERSION FEE,,,,0,0,0}DEPOSIT FOREITED,,,,0,0,0}EXTENSION,,,,0,0,0}INSPECTION,,,,0,0,0}LAY UP,,,,0,10,0}', '0.00', '10.00', '2852.77', '20.00', '16852.77', '0', 'BUY-IN COMMISSION,ALVIN,,200,0}Less SELL-OUT ADMIN COMM,BEN,,1000,0}Less SELL-OUT COMM,,,1000,0}INSURANCE,SONA,,131.08,0}BANK SURCHARGE,MAYBANK,,200,0}HP/LOAN COMM,MAYBANK,,150,0}ADMIN FEE COLLECTED,,,1000,0}', '3681.08', ',,,}', 'NaN', 'BROKER 1 ( 80.00 % ),2825.66,353.21,,2472.45}BROKER 2 ,0,0,,0}BROKER 3,0,0,,0}', '2472.45', '19500', '0', '3957.31', '10.50', '10.50', '0', '425.23', '3532.08', '706.42', '2023-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_photos`
--

CREATE TABLE `vehicle_photos` (
  `id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_photos`
--

INSERT INTO `vehicle_photos` (`id`, `vehicle_id`, `photos`, `created_date`) VALUES
(1, 1, '71973551.jpg', '2022-08-27'),
(2, 1, '75067461.jpg', '2022-08-27'),
(3, 1, 'car1.png', '2022-08-29'),
(6, 11, 'car11.png', '2022-08-29'),
(7, 0, 'car5.jpg', '2022-11-02'),
(8, 0, 'car4.jpg', '2022-11-02'),
(9, 4, 'car51.jpg', '2022-11-02'),
(10, 4, 'car41.jpg', '2022-11-02'),
(11, 6, 'car11.png', '2022-11-02'),
(12, 6, 'car31.png', '2022-11-02'),
(16, 6, 'car24.png', '2022-11-03'),
(17, 7, 'car71.png', '2022-11-10'),
(18, 7, 'car6.png', '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) NOT NULL,
  `vehicletype_name` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `vehicletype_name`, `created_at`) VALUES
(1, 'Commercial', '0000-00-00'),
(2, 'Private', '0000-00-00'),
(3, 'Bus', '0000-00-00'),
(4, 'HeavyVeh', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type_detail`
--

CREATE TABLE `vehicle_type_detail` (
  `id` int(11) NOT NULL,
  `vehicletype` varchar(255) NOT NULL,
  `detail_name` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle_type_detail`
--

INSERT INTO `vehicle_type_detail` (`id`, `vehicletype`, `detail_name`, `created_at`) VALUES
(1, 'Commercial', 'LORRY 10FT - DIESEL', '0000-00-00'),
(2, 'Commercial', 'BIG VAN - DIESEL', '0000-00-00'),
(3, 'Commercial', 'MEDIUM VAN - DIESEL', '0000-00-00'),
(4, 'Commercial', 'SMALL VAN - DIESEL', '0000-00-00'),
(5, 'Commercial', 'VAN - PETROL', '0000-00-00'),
(6, 'Commercial', 'SINGLE CAB PICK UP', '0000-00-00'),
(7, 'Commercial', 'DOUBLE CAB PICK UP', '0000-00-00'),
(8, 'Commercial', 'LORRY 10FT - PETROL', '0000-00-00'),
(9, 'Commercial', 'BIG VAN - PETROL', '0000-00-00'),
(10, 'Commercial', 'MEDIUM VAN - PETROL', '0000-00-00'),
(11, 'Commercial', 'SMALL VAN - PETROL', '0000-00-00'),
(12, 'Commercial', 'LORRY 10FT - ELECTRIC', '0000-00-00'),
(13, 'Commercial', 'BIG VAN - ELECTRIC', '0000-00-00'),
(14, 'Commercial', 'MEDIUM VAN - ELECTRIC', '0000-00-00'),
(15, 'Commercial', 'SMALL VAN - ELECTRIC', '0000-00-00'),
(16, 'HeavyVeh', 'HEAVY VEHICLE 14\' - 17\'', '0000-00-00'),
(17, 'HeavyVeh', 'HEAVY VEHICLE 18\' ( 6 TON ) & ABOVE', '0000-00-00'),
(18, 'HeavyVeh', 'HEAVY VEHICLE 18\' ( 10 TON ) & ABOVE', '0000-00-00'),
(19, 'HeavyVeh', 'CRANE LORRY / TIPPER / PRIME MOVER & OTHERS', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `body_type`
--
ALTER TABLE `body_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_package`
--
ALTER TABLE `car_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashcreditinvoice`
--
ALTER TABLE `cashcreditinvoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `com`
--
ALTER TABLE `com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_source`
--
ALTER TABLE `contact_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costsheet1_tbl`
--
ALTER TABLE `costsheet1_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customertax_invoice`
--
ALTER TABLE `customertax_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duration`
--
ALTER TABLE `duration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eapl_quotation`
--
ALTER TABLE `eapl_quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel_type`
--
ALTER TABLE `fuel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gstinvoice`
--
ALTER TABLE `gstinvoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_works`
--
ALTER TABLE `how_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icqself`
--
ALTER TABLE `icqself`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_category`
--
ALTER TABLE `insurance_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance_files`
--
ALTER TABLE `insurance_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leasing`
--
ALTER TABLE `leasing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpinvoice`
--
ALTER TABLE `mpinvoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `openewal`
--
ALTER TABLE `openewal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `or_tbl`
--
ALTER TABLE `or_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdpa_consent`
--
ALTER TABLE `pdpa_consent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_request`
--
ALTER TABLE `quotation_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saleadmin_category`
--
ALTER TABLE `saleadmin_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesadmin_files`
--
ALTER TABLE `salesadmin_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_admin`
--
ALTER TABLE `sales_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_receipt`
--
ALTER TABLE `sales_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_crm`
--
ALTER TABLE `sale_crm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sa_tbl`
--
ALTER TABLE `sa_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles_details`
--
ALTER TABLE `vehicles_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_photos`
--
ALTER TABLE `vehicle_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type_detail`
--
ALTER TABLE `vehicle_type_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `body_type`
--
ALTER TABLE `body_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_package`
--
ALTER TABLE `car_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cashcreditinvoice`
--
ALTER TABLE `cashcreditinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `com`
--
ALTER TABLE `com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_source`
--
ALTER TABLE `contact_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `costsheet1_tbl`
--
ALTER TABLE `costsheet1_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customertax_invoice`
--
ALTER TABLE `customertax_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `duration`
--
ALTER TABLE `duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eapl_quotation`
--
ALTER TABLE `eapl_quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fuel_type`
--
ALTER TABLE `fuel_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gstinvoice`
--
ALTER TABLE `gstinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `how_works`
--
ALTER TABLE `how_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icqself`
--
ALTER TABLE `icqself`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key';

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insurance_category`
--
ALTER TABLE `insurance_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `insurance_files`
--
ALTER TABLE `insurance_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leasing`
--
ALTER TABLE `leasing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mpinvoice`
--
ALTER TABLE `mpinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `openewal`
--
ALTER TABLE `openewal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `or_tbl`
--
ALTER TABLE `or_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pdpa_consent`
--
ALTER TABLE `pdpa_consent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;

--
-- AUTO_INCREMENT for table `quotation_request`
--
ALTER TABLE `quotation_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saleadmin_category`
--
ALTER TABLE `saleadmin_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `salesadmin_files`
--
ALTER TABLE `salesadmin_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sales_admin`
--
ALTER TABLE `sales_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sales_receipt`
--
ALTER TABLE `sales_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sale_crm`
--
ALTER TABLE `sale_crm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sa_tbl`
--
ALTER TABLE `sa_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicles_details`
--
ALTER TABLE `vehicles_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_photos`
--
ALTER TABLE `vehicle_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicle_type_detail`
--
ALTER TABLE `vehicle_type_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
