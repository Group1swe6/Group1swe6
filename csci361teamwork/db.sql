-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 04:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `surname`, `middle_name`, `phone`, `email`) VALUES
(1, 'dsadas', 'dasdsa', 'dsadas', '+77077777070', 'dasdsa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `dname` varchar(25) DEFAULT NULL,
  `surname` varchar(25) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `position` varchar(25) DEFAULT NULL,
  `vehicle_type` varchar(25) DEFAULT NULL,
  `ddate` date DEFAULT NULL,
  `ttime` time DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`dname`, `surname`, `email`, `phone`, `position`, `vehicle_type`, `ddate`, `ttime`, `purpose`, `comment`) VALUES
('sdada', 'dasdas', 'dsadas@gmail.com', '+77077077777', 'dasdsa', 'dsadas', '2023-11-11', '13:00:00', 'dsadsad', 'dasdasdsa');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignment_id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assignment_id`, `driver_id`, `vehicle_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `auction_id` int(11) NOT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `year_of_auction` varchar(50) DEFAULT NULL,
  `plate_number` varchar(50) DEFAULT NULL,
  `mileage` decimal(10,0) DEFAULT NULL,
  `status_of_auction` varchar(50) DEFAULT NULL,
  `images` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`auction_id`, `vehicle_id`, `model`, `year_of_auction`, `plate_number`, `mileage`, `status_of_auction`, `images`) VALUES
(1, 1, '[value-3]', 'dsadsa', '2022', 0, '222km', 0x616374697665);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `government_id` bigint(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `driving_license_code` bigint(20) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `government_id`, `name`, `surname`, `middle_name`, `phone`, `email`, `driving_license_code`, `job`, `address`) VALUES
(1, 1212, 'dsad', 'dsadas', 'dadsa', '+77077077777', 'dasdas@gmail.com', 312, 'dsadas', '12 dsadas');

-- --------------------------------------------------------

--
-- Table structure for table `driver_user`
--

CREATE TABLE `driver_user` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_user`
--

INSERT INTO `driver_user` (`username`, `password`) VALUES
('driver1', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `fuelingjob`
--

CREATE TABLE `fuelingjob` (
  `fuel_job_id` int(11) NOT NULL,
  `date_of_job` date DEFAULT NULL,
  `fuel_amount` decimal(10,2) DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `station_name` varchar(50) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `image_before` longblob DEFAULT NULL,
  `image_after` longblob DEFAULT NULL,
  `fuel_before` decimal(10,2) DEFAULT NULL,
  `fuel_after` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuelingjob`
--

INSERT INTO `fuelingjob` (`fuel_job_id`, `date_of_job`, `fuel_amount`, `total_cost`, `description`, `station_name`, `driver_id`, `image_before`, `image_after`, `fuel_before`, `fuel_after`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fuelingperson`
--

CREATE TABLE `fuelingperson` (
  `fuel_person_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fuel_job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuelingperson`
--

INSERT INTO `fuelingperson` (`fuel_person_id`, `name`, `phone`, `email`, `fuel_job_id`) VALUES
(1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuel_user`
--

CREATE TABLE `fuel_user` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel_user`
--

INSERT INTO `fuel_user` (`username`, `password`) VALUES
('fuel1', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `maintenancejob`
--

CREATE TABLE `maintenancejob` (
  `maint_job_id` int(11) NOT NULL,
  `service_type` varchar(50) DEFAULT NULL,
  `service_price` decimal(10,2) DEFAULT NULL,
  `contradictions` varchar(255) DEFAULT NULL,
  `date_of_job` date DEFAULT NULL,
  `total_cost` decimal(10,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenancejob`
--

INSERT INTO `maintenancejob` (`maint_job_id`, `service_type`, `service_price`, `contradictions`, `date_of_job`, `total_cost`, `description`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maintenanceperson`
--

CREATE TABLE `maintenanceperson` (
  `maint_person_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `maintenance_job_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenanceperson`
--

INSERT INTO `maintenanceperson` (`maint_person_id`, `name`, `phone`, `email`, `maintenance_job_id`) VALUES
(1, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `maint_person_user`
--

CREATE TABLE `maint_person_user` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maint_person_user`
--

INSERT INTO `maint_person_user` (`username`, `password`) VALUES
('maint1', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `curr_location` varchar(500) DEFAULT NULL,
  `start_location` varchar(500) DEFAULT NULL,
  `end_location` varchar(500) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `curr_location`, `start_location`, `end_location`, `driver_id`) VALUES
(1, 'sadas', 'dasdsa', 'dasds', 1);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `date_of_route` date DEFAULT NULL,
  `curr_location` varchar(500) DEFAULT NULL,
  `start_location` varchar(500) DEFAULT NULL,
  `end_location` varchar(500) DEFAULT NULL,
  `status_of_route` varchar(10) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `date_of_route`, `curr_location`, `start_location`, `end_location`, `status_of_route`, `driver_id`) VALUES
(1, '2023-10-23', 'dasdsa', 'dasdas', 'addas', 'Halfway', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `vehicle_id` int(11) DEFAULT NULL,
  `status_of_task` varchar(10) DEFAULT NULL,
  `total_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `description`, `driver_id`, `vehicle_id`, `status_of_task`, `total_time`) VALUES
(1, 'esdadsadsa', 1, 1, 'Pending', '00:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `make` varchar(50) DEFAULT NULL,
  `plate_number` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `year_of_vehicle` varchar(50) DEFAULT NULL,
  `sitting_capacity` int(11) DEFAULT NULL,
  `status_of_vehicle` varchar(10) DEFAULT NULL,
  `mileage` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `make`, `plate_number`, `model`, `year_of_vehicle`, `sitting_capacity`, `status_of_vehicle`, `mileage`) VALUES
(1, 'dsdsad', '31321', 'dsadsa12', '2023', 2, 'available', 300.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`auction_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `fuelingjob`
--
ALTER TABLE `fuelingjob`
  ADD PRIMARY KEY (`fuel_job_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `fuelingperson`
--
ALTER TABLE `fuelingperson`
  ADD PRIMARY KEY (`fuel_person_id`),
  ADD KEY `fuel_job_id` (`fuel_job_id`);

--
-- Indexes for table `maintenancejob`
--
ALTER TABLE `maintenancejob`
  ADD PRIMARY KEY (`maint_job_id`);

--
-- Indexes for table `maintenanceperson`
--
ALTER TABLE `maintenanceperson`
  ADD PRIMARY KEY (`maint_person_id`),
  ADD KEY `maintenance_job_id` (`maintenance_job_id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`),
  ADD CONSTRAINT `assignments_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`);

--
-- Constraints for table `auction`
--
ALTER TABLE `auction`
  ADD CONSTRAINT `auction_ibfk_1` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`);

--
-- Constraints for table `fuelingjob`
--
ALTER TABLE `fuelingjob`
  ADD CONSTRAINT `fuelingjob_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`);

--
-- Constraints for table `fuelingperson`
--
ALTER TABLE `fuelingperson`
  ADD CONSTRAINT `fuelingperson_ibfk_1` FOREIGN KEY (`fuel_job_id`) REFERENCES `fuelingjob` (`fuel_job_id`);

--
-- Constraints for table `maintenanceperson`
--
ALTER TABLE `maintenanceperson`
  ADD CONSTRAINT `maintenanceperson_ibfk_1` FOREIGN KEY (`maintenance_job_id`) REFERENCES `maintenancejob` (`maint_job_id`);

--
-- Constraints for table `navigation`
--
ALTER TABLE `navigation`
  ADD CONSTRAINT `navigation_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`);

--
-- Constraints for table `route`
--
ALTER TABLE `route`
  ADD CONSTRAINT `route_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
