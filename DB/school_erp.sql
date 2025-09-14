-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2025 at 05:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `visitor_name` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `organization_name` varchar(100) NOT NULL,
  `meeting_purpose` varchar(255) NOT NULL,
  `meet_with` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `visitor_name`, `gender`, `organization_name`, `meeting_purpose`, `meet_with`, `date`, `time`, `mobile`, `address`, `city`) VALUES
(1, 'Sourabh Dutt Vishwakarma', 'Male', 'ASPPS', 'COUNCELLING', 'PRINCIPAL', '2025-05-28', '00:29:00', '9988774556', 'HOME', 'JABALPUR');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `admission_no` varchar(20) DEFAULT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `section` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `marks_obtained` int(11) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `admission_no`, `student_name`, `class`, `section`, `subject`, `marks_obtained`, `total_marks`) VALUES
(1, 'A101', 'Rahul Sharma', '10', 'A', 'Maths', 88, 100),
(2, 'A101', 'Rahul Sharma', '10', 'A', 'English', 76, 100),
(3, 'A101', 'Rahul Sharma', '10', 'A', 'Science', 81, 100),
(4, 'A102', 'Raj Yadav', '12', 'A', 'Maths', 88, 100),
(5, 'A102', 'Raj Yadav', '12', 'A', 'English', 76, 100),
(6, 'A102', 'Raj Yadav', '12', 'A', 'Science', 81, 100),
(7, 'A103', 'Sourabh Dutt Vishwakarma ', '12', 'B', 'Computer', 90, 100);

-- --------------------------------------------------------

--
-- Table structure for table `student_admissions`
--

CREATE TABLE `student_admissions` (
  `id` int(11) NOT NULL,
  `form_no` varchar(20) DEFAULT NULL,
  `admission_no` varchar(20) NOT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `caste` varchar(20) DEFAULT NULL,
  `transport` varchar(5) DEFAULT NULL,
  `pickup_stoppage` varchar(100) DEFAULT NULL,
  `house` varchar(20) DEFAULT NULL,
  `distance` varchar(50) DEFAULT NULL,
  `student_class` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `doa` date DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `siblings` varchar(50) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `apar_id` varchar(50) DEFAULT NULL,
  `pen` varchar(50) DEFAULT NULL,
  `sssmid` varchar(50) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `account_no` varchar(30) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL,
  `previous_school` varchar(100) DEFAULT NULL,
  `reason_change` varchar(100) DEFAULT NULL,
  `class_passed` varchar(20) DEFAULT NULL,
  `marks_obtained` varchar(20) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `father_qualification` varchar(50) DEFAULT NULL,
  `mother_qualification` varchar(50) DEFAULT NULL,
  `father_profession` varchar(50) DEFAULT NULL,
  `mother_profession` varchar(50) DEFAULT NULL,
  `father_email` varchar(100) DEFAULT NULL,
  `mother_email` varchar(100) DEFAULT NULL,
  `father_aadhar` varchar(20) DEFAULT NULL,
  `mother_aadhar` varchar(20) DEFAULT NULL,
  `res_address_f` text DEFAULT NULL,
  `res_address_m` text DEFAULT NULL,
  `office_address_f` text DEFAULT NULL,
  `office_address_m` text DEFAULT NULL,
  `mobile_father` varchar(15) DEFAULT NULL,
  `mobile_mother` varchar(15) DEFAULT NULL,
  `fee_concession` varchar(20) DEFAULT NULL,
  `concession_amt` varchar(10) DEFAULT NULL,
  `only_child` varchar(5) DEFAULT NULL,
  `siblings_in_school` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_admissions`
--

INSERT INTO `student_admissions` (`id`, `form_no`, `admission_no`, `student_name`, `gender`, `type`, `caste`, `transport`, `pickup_stoppage`, `house`, `distance`, `student_class`, `nationality`, `dob`, `doa`, `religion`, `siblings`, `height`, `weight`, `apar_id`, `pen`, `sssmid`, `aadhar_no`, `account_no`, `ifsc_code`, `previous_school`, `reason_change`, `class_passed`, `marks_obtained`, `father_name`, `mother_name`, `father_qualification`, `mother_qualification`, `father_profession`, `mother_profession`, `father_email`, `mother_email`, `father_aadhar`, `mother_aadhar`, `res_address_f`, `res_address_m`, `office_address_f`, `office_address_m`, `mobile_father`, `mobile_mother`, `fee_concession`, `concession_amt`, `only_child`, `siblings_in_school`) VALUES
(2, '101', '112', 'RAJ', 'Male', 'New', 'General', 'Yes', 'Home', 'Peace', '5 km', '12th', 'indian', '2025-05-27', '2025-05-30', 'hindu', 'yes', '5 ft 6 inc', '50kg', '114477411', '111', '11447744', '222', '123456789', '333', 'DPS', 'NA', '11th', '70%', 'RP YADAV', 'mname', 'Grad', 'Grad', 'Job', 'Job', 'father121@gmail.com', 'mother121@gmail.com', '1122334455', '112233', 'Home', 'Home', 'Office', 'Office', '9897894568', '9898784745', 'Rs.200', '20%', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `scholar_no` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `father_name` varchar(100) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `scholar_no`, `name`, `father_name`, `class`, `mobile`, `dob`) VALUES
(1, 1001, 'Aarav Sharma', 'Ramesh Sharma', '1st A', '9876543210', '2017-06-01'),
(2, 1002, 'Vihaan Patel', 'Suresh Patel', '2nd B', '9876543211', '2016-08-22'),
(3, 1003, 'Vivaan Singh', 'Rajesh Singh', '3rd A', '9876543212', '2015-07-19'),
(4, 1004, 'Aditya Verma', 'Mukesh Verma', '4th B', '9876543213', '2014-05-11'),
(5, 1005, 'Aryan Mehta', 'Nilesh Mehta', '5th A', '9876543214', '2013-12-23'),
(6, 1006, 'Kabir Gupta', 'Pankaj Gupta', '6th A', '9876543215', '2012-09-15'),
(7, 1007, 'Ayaan Joshi', 'Prakash Joshi', '7th A', '9876543216', '2011-03-18'),
(8, 1008, 'Krishna Yadav', 'Mahesh Yadav', '8th B', '9876543217', '2010-11-20'),
(9, 1009, 'Laksh Jain', 'Vinod Jain', '9th A', '9876543218', '2009-04-25'),
(10, 1010, 'Devansh Shah', 'Rajiv Shah', '10th A', '9876543219', '2008-02-10'),
(11, 1011, 'Rudra Rao', 'Sanjay Rao', '11th Science', '9876543220', '2007-01-08'),
(12, 1012, 'Yuvraj Reddy', 'Ravi Reddy', '12th Commerce', '9876543221', '2006-03-14'),
(13, 1013, 'Dhruv Kumar', 'Manoj Kumar', 'UKG A', '9876543222', '2018-07-07'),
(14, 1014, 'Arjun Bansal', 'Deepak Bansal', 'LKG B', '9876543223', '2019-09-30'),
(15, 1015, 'Anaya Mishra', 'Shiv Mishra', '1st B', '9876543224', '2017-05-12'),
(16, 1016, 'Ira Bhatt', 'Naresh Bhatt', '2nd A', '9876543225', '2016-11-03'),
(17, 1017, 'Myra Desai', 'Chetan Desai', '3rd B', '9876543226', '2015-06-20'),
(18, 1018, 'Aadhya Kulkarni', 'Kiran Kulkarni', '4th A', '9876543227', '2014-08-27'),
(19, 1019, 'Avni Pandey', 'Anil Pandey', '5th B', '9876543228', '2013-03-16'),
(20, 1020, 'Saanvi Tiwari', 'Narendra Tiwari', '6th B', '9876543229', '2012-12-09'),
(21, 1021, 'Siya Saxena', 'Nitin Saxena', '7th B', '9876543230', '2011-10-25'),
(22, 1022, 'Navya Rana', 'Harish Rana', '8th A', '9876543231', '2010-02-18'),
(23, 1023, 'Meera Roy', 'Ajay Roy', '9th B', '9876543232', '2009-08-08'),
(24, 1024, 'Tanya Sinha', 'Vivek Sinha', '10th B', '9876543233', '2008-06-13'),
(25, 1025, 'Diya Nair', 'Sunil Nair', '11th Arts', '9876543234', '2007-04-01'),
(26, 1026, 'Nitya Das', 'Ashok Das', '12th Science', '9876543235', '2006-09-30'),
(27, 1027, 'Pari Basu', 'Rohit Basu', 'UKG B', '9876543236', '2018-10-21'),
(28, 1028, 'Kiara Ghosh', 'Uday Ghosh', 'LKG A', '9876543237', '2019-07-19'),
(29, 1029, 'Riya Iyer', 'Kunal Iyer', '1st A', '9876543238', '2017-01-31'),
(30, 1030, 'Sneha Paul', 'Vishal Paul', '2nd B', '9876543239', '2016-04-04'),
(31, 1031, 'Aarohi Kapoor', 'Amar Kapoor', '3rd A', '9876543240', '2015-10-15'),
(32, 1032, 'Ishita Menon', 'Sandeep Menon', '4th B', '9876543241', '2014-03-10'),
(33, 1033, 'Tisha Pillai', 'Ganesh Pillai', '5th A', '9876543242', '2013-06-06'),
(34, 1034, 'Tanvi Raj', 'Dheeraj Raj', '6th A', '9876543243', '2012-08-28'),
(35, 1035, 'Reva Saxena', 'Tarun Saxena', '7th A', '9876543244', '2011-05-17'),
(36, 1036, 'Harsh Kumar', 'Om Kumar', '8th B', '9876543245', '2010-01-14'),
(37, 1037, 'Arya Singh', 'Brij Singh', '9th A', '9876543246', '2009-12-02'),
(38, 1038, 'Reyansh Verma', 'Gopal Verma', '10th A', '9876543247', '2008-07-01'),
(39, 1039, 'Shaurya Thakur', 'Sohan Thakur', '11th Science', '9876543248', '2007-03-03'),
(40, 1040, 'Neil Shukla', 'Kapil Shukla', '12th Commerce', '9876543249', '2006-11-11'),
(41, 1041, 'Dev Mehta', 'Harsh Mehta', 'UKG A', '9876543250', '2018-02-09'),
(42, 1042, 'Naman Yadav', 'Satish Yadav', 'LKG B', '9876543251', '2019-03-05'),
(43, 1043, 'Ayansh Chauhan', 'Puneet Chauhan', '1st B', '9876543252', '2017-08-26'),
(44, 1044, 'Daksh Tripathi', 'Jai Tripathi', '2nd A', '9876543253', '2016-01-07'),
(45, 1045, 'Pranav Rathore', 'Ankur Rathore', '3rd B', '9876543254', '2015-09-09'),
(46, 1046, 'Hriday Garg', 'Ravi Garg', '4th A', '9876543255', '2014-05-05'),
(47, 1047, 'Ayush Jha', 'Ajit Jha', '5th B', '9876543256', '2013-07-29'),
(48, 1048, 'Aryav Thakur', 'Naresh Thakur', '6th B', '9876543257', '2012-06-24'),
(49, 1049, 'Atharv Kapoor', 'Suraj Kapoor', '7th B', '9876543258', '2011-04-18'),
(50, 1050, 'Vedant Bhatt', 'Kamlesh Bhatt', '8th A', '9876543259', '2010-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `student_enquiries`
--

CREATE TABLE `student_enquiries` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `class` varchar(50) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `father_occupation` varchar(100) DEFAULT NULL,
  `mother_occupation` varchar(100) DEFAULT NULL,
  `primary_contact` varchar(15) NOT NULL,
  `alternate_contact` varchar(15) DEFAULT NULL,
  `previous_class` varchar(50) DEFAULT NULL,
  `previous_school` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `locality` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin_code` varchar(10) DEFAULT NULL,
  `agree` tinyint(1) DEFAULT 0,
  `enquiry_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_enquiries`
--

INSERT INTO `student_enquiries` (`id`, `student_name`, `dob`, `class`, `caste`, `gender`, `father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `primary_contact`, `alternate_contact`, `previous_class`, `previous_school`, `address`, `locality`, `city`, `state`, `pin_code`, `agree`, `enquiry_date`) VALUES
(1, 'RAJ', '2025-05-23', '1', 'General', 'Male', 'RP YADAV', 'Mname', 'Job', 'house wife', '7067474299', '7067474299', 'Nursery', 'DPS', 'Home', 'Jabalpur', 'Jabalpur', 'Madhya Pradesh', '482001', 1, '2025-05-23 17:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL,
  `admission_no` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`id`, `admission_no`, `subject`, `marks`, `total`) VALUES
(6, '112', 'Maths', 85, 100),
(7, '112', 'Science', 78, 100),
(8, '112', 'English', 92, 100),
(9, '112', 'Computer', 88, 100),
(10, '112', 'Social Studies', 80, 100),
(11, '113', 'Maths', 85, 100),
(12, '113', 'Science', 78, 100),
(13, '113', 'English', 92, 100),
(14, '113', 'Computer', 88, 100),
(15, '113', 'Social Studies', 80, 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(2, 'raj', '$2y$10$ebo9q15NeVkIu79I00OY/OX5O.hdqxDe9BDykL/i/.INNWQX/43jC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admissions`
--
ALTER TABLE `student_admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scholar_no` (`scholar_no`);

--
-- Indexes for table `student_enquiries`
--
ALTER TABLE `student_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_admissions`
--
ALTER TABLE `student_admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `student_enquiries`
--
ALTER TABLE `student_enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_marks`
--
ALTER TABLE `student_marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
