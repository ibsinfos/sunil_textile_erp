-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2017 at 08:31 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunil_textile_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoices`
--

CREATE TABLE `sales_invoices` (
  `id` int(11) NOT NULL,
  `voucher_no` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `transaction_date` date NOT NULL,
  `cash_or_credit` varchar(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `gst_figure_id` int(10) NOT NULL,
  `amount_before_tax` decimal(15,2) NOT NULL,
  `round_off` decimal(10,2) NOT NULL,
  `total_cgst` decimal(15,2) NOT NULL,
  `total_sgst` double(15,2) NOT NULL,
  `total_igst` decimal(15,2) NOT NULL,
  `amount_after_tax` decimal(15,2) NOT NULL,
  `sales_ledger_id` int(11) NOT NULL,
  `party_ledger_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_invoices`
--

INSERT INTO `sales_invoices` (`id`, `voucher_no`, `company_id`, `transaction_date`, `cash_or_credit`, `customer_id`, `gst_figure_id`, `amount_before_tax`, `round_off`, `total_cgst`, `total_sgst`, `total_igst`, `amount_after_tax`, `sales_ledger_id`, `party_ledger_id`) VALUES
(1, 8, 1, '2017-09-01', '', 0, 0, '29190.00', '0.20', '778.40', 778.40, '0.00', '30747.00', 18, 30);

-- --------------------------------------------------------

--
-- Table structure for table `sales_invoice_rows`
--

CREATE TABLE `sales_invoice_rows` (
  `id` int(11) NOT NULL,
  `sales_invoice_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` decimal(15,2) NOT NULL,
  `rate` decimal(15,2) NOT NULL,
  `discount_percentage` decimal(15,2) NOT NULL,
  `taxable_value` decimal(15,2) NOT NULL,
  `net_amount` decimal(10,2) NOT NULL,
  `gst_figure_id` int(10) NOT NULL,
  `output_cgst_ledger_id` int(10) NOT NULL,
  `output_sgst_ledger_id` int(10) NOT NULL,
  `output_igst_ledger_id` int(10) NOT NULL,
  `gst_value` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_invoice_rows`
--

INSERT INTO `sales_invoice_rows` (`id`, `sales_invoice_id`, `item_id`, `quantity`, `rate`, `discount_percentage`, `taxable_value`, `net_amount`, `gst_figure_id`, `output_cgst_ledger_id`, `output_sgst_ledger_id`, `output_igst_ledger_id`, `gst_value`) VALUES
(4, 1, 20, '100.00', '100.00', '2.70', '9730.00', '10216.50', 1, 0, 0, 0, '486.50'),
(5, 1, 19, '100.00', '100.00', '2.70', '9730.00', '10313.80', 2, 0, 0, 0, '583.80'),
(6, 1, 20, '100.00', '100.00', '2.70', '9730.00', '10216.50', 1, 0, 0, 0, '486.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales_invoices`
--
ALTER TABLE `sales_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_invoice_rows`
--
ALTER TABLE `sales_invoice_rows`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales_invoices`
--
ALTER TABLE `sales_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sales_invoice_rows`
--
ALTER TABLE `sales_invoice_rows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;