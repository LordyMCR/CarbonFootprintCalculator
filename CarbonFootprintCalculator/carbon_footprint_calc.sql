-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 05:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbon_footprint_calc`
--

-- --------------------------------------------------------

--
-- Table structure for table `regional_data`
--

CREATE TABLE `regional_data` (
  `region_name` varchar(50) NOT NULL,
  `region_co2_estimate` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `regional_data`
--

INSERT INTO `regional_data` (`region_name`, `region_co2_estimate`) VALUES
('East', '6.6'),
('East Midlands', '7.2'),
('London', '5.4'),
('North East', '6.7'),
('North West', '6.5'),
('Northern Ireland', '8.5'),
('Scotland', '6.9'),
('South East', '5.6'),
('South West', '5.8'),
('United Kingdom', '6.4'),
('Wales', '8.8'),
('West Midlands', '6.3'),
('Yorkshire & The Humber', '7.5');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(10) NOT NULL,
  `calculation_date` datetime NOT NULL,
  `region_name` varchar(50) NOT NULL,
  `postcode` varchar(8) NOT NULL,
  `q_drive_vehicle` varchar(3) NOT NULL,
  `q_vehicle_type` varchar(20) DEFAULT NULL,
  `q_vehicle_mileage_weekly` int(6) DEFAULT NULL,
  `q_vehicle_mileage_monthly` int(6) DEFAULT NULL,
  `q_vehicle_mileage_yearly` int(6) DEFAULT NULL,
  `personal_transport_subtotal` decimal(5,4) NOT NULL,
  `q_travel_bus` varchar(3) NOT NULL,
  `q_bus_mileage_weekly` int(5) DEFAULT NULL,
  `q_bus_mileage_monthly` int(5) DEFAULT NULL,
  `q_bus_mileage_yearly` int(5) DEFAULT NULL,
  `q_travel_tram` varchar(3) NOT NULL,
  `q_tram_lightrail_mileage_weekly` int(5) DEFAULT NULL,
  `q_tram_lightrail_mileage_monthly` int(5) DEFAULT NULL,
  `q_tram_lightrail_mileage_yearly` int(5) DEFAULT NULL,
  `q_travel_london_underground` varchar(3) NOT NULL,
  `q_london_underground_mileage_weekly` int(5) DEFAULT NULL,
  `q_london_underground_mileage_monthly` int(5) DEFAULT NULL,
  `q_london_underground_mileage_yearly` int(5) DEFAULT NULL,
  `q_travel_train` varchar(3) NOT NULL,
  `q_train_mileage_weekly` int(5) DEFAULT NULL,
  `q_train_mileage_monthly` int(5) DEFAULT NULL,
  `q_train_mileage_yearly` int(5) DEFAULT NULL,
  `q_travel_coach` varchar(3) NOT NULL,
  `q_coach_mileage_weekly` int(5) DEFAULT NULL,
  `q_coach_mileage_monthly` int(5) DEFAULT NULL,
  `q_coach_mileage_yearly` int(5) DEFAULT NULL,
  `public_transport_subtotal` decimal(5,4) NOT NULL,
  `q_domestic_flights` int(3) NOT NULL,
  `q_0_1500km_flights` int(3) NOT NULL,
  `q_1500_3000km_flights` int(3) NOT NULL,
  `q_3000_6000km_flights` int(3) NOT NULL,
  `q_6000_9000km_flights` int(3) NOT NULL,
  `q_9000km_plus_flights` int(3) NOT NULL,
  `long_distance_subtotal` decimal(5,4) NOT NULL,
  `q_home_electrical_usage_weekly` int(5) DEFAULT NULL,
  `q_home_electrical_usage_monthly` int(5) DEFAULT NULL,
  `q_home_electrical_usage_yearly` int(5) DEFAULT NULL,
  `q_home_gas_usage_weekly` int(5) DEFAULT NULL,
  `q_home_gas_usage_monthly` int(5) DEFAULT NULL,
  `q_home_gas_usage_yearly` int(5) DEFAULT NULL,
  `utilities_subtotal` decimal(5,4) NOT NULL,
  `grand_total_emissions` decimal(6,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `calculation_date`, `region_name`, `postcode`, `q_drive_vehicle`, `q_vehicle_type`, `q_vehicle_mileage_weekly`, `q_vehicle_mileage_monthly`, `q_vehicle_mileage_yearly`, `personal_transport_subtotal`, `q_travel_bus`, `q_bus_mileage_weekly`, `q_bus_mileage_monthly`, `q_bus_mileage_yearly`, `q_travel_tram`, `q_tram_lightrail_mileage_weekly`, `q_tram_lightrail_mileage_monthly`, `q_tram_lightrail_mileage_yearly`, `q_travel_london_underground`, `q_london_underground_mileage_weekly`, `q_london_underground_mileage_monthly`, `q_london_underground_mileage_yearly`, `q_travel_train`, `q_train_mileage_weekly`, `q_train_mileage_monthly`, `q_train_mileage_yearly`, `q_travel_coach`, `q_coach_mileage_weekly`, `q_coach_mileage_monthly`, `q_coach_mileage_yearly`, `public_transport_subtotal`, `q_domestic_flights`, `q_0_1500km_flights`, `q_1500_3000km_flights`, `q_3000_6000km_flights`, `q_6000_9000km_flights`, `q_9000km_plus_flights`, `long_distance_subtotal`, `q_home_electrical_usage_weekly`, `q_home_electrical_usage_monthly`, `q_home_electrical_usage_yearly`, `q_home_gas_usage_weekly`, `q_home_gas_usage_monthly`, `q_home_gas_usage_yearly`, `utilities_subtotal`, `grand_total_emissions`) VALUES
(95, '2022-05-07 16:04:47', 'North West', 'M4 6AP', 'Yes', 'Car Petrol', 0, 0, 10000, '2.8050', 'Yes', 0, 50, 0, 'Yes', 0, 50, 0, 'No', 0, 0, 0, 'Yes', 0, 0, 500, 'No', 0, 0, 0, '0.0963', 0, 1, 0, 0, 0, 0, '0.2303', 0, 0, 5000, 0, 0, 3000, '1.6706', '6.5021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regional_data`
--
ALTER TABLE `regional_data`
  ADD PRIMARY KEY (`region_name`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `region_name` (`region_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`region_name`) REFERENCES `regional_data` (`region_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
