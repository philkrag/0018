-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 05:13 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `fnc_options`
--

CREATE TABLE `fnc_options` (
  `ID` int(11) NOT NULL,
  `Table_Name` text DEFAULT NULL,
  `Element` text DEFAULT NULL,
  `Option_Name` text DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_assumptions`
--

CREATE TABLE `rec_assumptions` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_budgets`
--

CREATE TABLE `rec_budgets` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_change_control`
--

CREATE TABLE `rec_change_control` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Timeline Impact` text DEFAULT NULL,
  `Budget Impact` text DEFAULT NULL,
  `Workplan Impact` text DEFAULT NULL,
  `Client Feedback` mediumtext DEFAULT NULL,
  `Management Feedback` mediumtext DEFAULT NULL,
  `Approval` text DEFAULT NULL,
  `Document` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_constraints`
--

CREATE TABLE `rec_constraints` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_contingency`
--

CREATE TABLE `rec_contingency` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deliverable ID` text DEFAULT NULL,
  `Cause` text DEFAULT NULL,
  `Proposed Solution` mediumtext NOT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_controls`
--

CREATE TABLE `rec_controls` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Change Description` mediumtext DEFAULT NULL,
  `Associated Document` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Approval Status` text DEFAULT NULL,
  `Proto-Type Status` text DEFAULT NULL,
  `Management Priority` text DEFAULT NULL,
  `Approval Conditions` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_deliverables`
--

CREATE TABLE `rec_deliverables` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_escalation`
--

CREATE TABLE `rec_escalation` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_gap-controls`
--

CREATE TABLE `rec_gap-controls` (
  `ID` int(11) NOT NULL,
  `Gap ID` text DEFAULT NULL,
  `Control ID` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_inspection-points`
--

CREATE TABLE `rec_inspection-points` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Category` text DEFAULT NULL,
  `Sub Category` text DEFAULT NULL,
  `What to Review` mediumtext DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  `MOI - Data Inspection` text DEFAULT NULL,
  `MOI - Process Review` text DEFAULT NULL,
  `MOI - Review Technical Data` text DEFAULT NULL,
  `MOI - Comms Review` text DEFAULT NULL,
  `MOI - Email` text DEFAULT NULL,
  `MOI - Phone Call` text DEFAULT NULL,
  `MOI - Survey` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_key-success-criteria`
--

CREATE TABLE `rec_key-success-criteria` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_milestones`
--

CREATE TABLE `rec_milestones` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Required Finish Date` date DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_notes`
--

CREATE TABLE `rec_notes` (
  `ID` int(11) NOT NULL,
  `Gap ID` text DEFAULT NULL,
  `Gap Control ID` text DEFAULT NULL,
  `Task ID` text DEFAULT NULL,
  `Part ID` text DEFAULT NULL,
  `Inspection Point ID` text DEFAULT NULL,
  `Control ID` text DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `Identified Date` date DEFAULT NULL,
  `Identified By` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_objectives`
--

CREATE TABLE `rec_objectives` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_obstacles`
--

CREATE TABLE `rec_obstacles` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_parts`
--

CREATE TABLE `rec_parts` (
  `ID` int(11) NOT NULL,
  `Task ID` text DEFAULT NULL,
  `Project ID` text NOT NULL,
  `Description` text DEFAULT NULL,
  `OEM` text DEFAULT NULL,
  `OEM Part #` text DEFAULT NULL,
  `Supplier` text DEFAULT NULL,
  `Supplier Part #` text DEFAULT NULL,
  `Qty` text DEFAULT NULL,
  `Estimated Total Required Quantity` decimal(10,0) DEFAULT NULL,
  `Estimated Individual Cost ($) exc GST` decimal(8,2) DEFAULT NULL,
  `Estimated Total Cost ($) exc GST` decimal(8,2) DEFAULT NULL,
  `Cost ($) Total` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` text DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_performance-reporting`
--

CREATE TABLE `rec_performance-reporting` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Contact ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Report Timeline Issues` text DEFAULT NULL,
  `Report Budget Issues` text DEFAULT NULL,
  `Report Quality Issues` text DEFAULT NULL,
  `Report Integration Issues` text DEFAULT NULL,
  `Report Labor Issues` text DEFAULT NULL,
  `Report Risk Issues` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_phases`
--

CREATE TABLE `rec_phases` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Step` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_rcas`
--

CREATE TABLE `rec_rcas` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Issue Definition` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_rcas-causes`
--

CREATE TABLE `rec_rcas-causes` (
  `ID` int(11) NOT NULL,
  `Symptom ID` text DEFAULT NULL,
  `Stakeholder` text DEFAULT NULL,
  `Category` text DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_rcas-symptoms`
--

CREATE TABLE `rec_rcas-symptoms` (
  `ID` int(11) NOT NULL,
  `RCA ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_risk-control`
--

CREATE TABLE `rec_risk-control` (
  `ID` int(11) NOT NULL,
  `Risk Assessment ID` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_risk-identification`
--

CREATE TABLE `rec_risk-identification` (
  `ID` int(11) NOT NULL,
  `Risk Assessment ID` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_stakeholders`
--

CREATE TABLE `rec_stakeholders` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Contact ID` text DEFAULT NULL,
  `Risk Assessment ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_tasks`
--

CREATE TABLE `rec_tasks` (
  `ID` int(11) NOT NULL,
  `Project ID` int(11) DEFAULT NULL,
  `Phase ID` text DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Task Status` text DEFAULT NULL,
  `Identified Date` date DEFAULT NULL,
  `Identified By` text DEFAULT NULL,
  `Person Responsible` text DEFAULT NULL,
  `Required Completion Date` date DEFAULT NULL,
  `Completed Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_time-frames`
--

CREATE TABLE `rec_time-frames` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_contacts`
--

CREATE TABLE `reg_contacts` (
  `ID` int(11) NOT NULL,
  `First Name` text DEFAULT NULL,
  `Last Name` text DEFAULT NULL,
  `Position` text DEFAULT NULL,
  `Department` text DEFAULT NULL,
  `Organisation` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Phone #` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_gaps`
--

CREATE TABLE `reg_gaps` (
  `ID` int(11) NOT NULL,
  `Inspection Point ID` int(11) DEFAULT NULL,
  `Project ID` text DEFAULT NULL,
  `Stakeholder` text DEFAULT NULL,
  `Responsible Entity` text DEFAULT NULL,
  `Threat / Opportunity` text DEFAULT NULL,
  `Attention Required` text DEFAULT NULL,
  `Gap Point` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_projects`
--

CREATE TABLE `reg_projects` (
  `ID` int(11) NOT NULL,
  `Project Owner` text DEFAULT NULL,
  `Project Sponsor` text DEFAULT NULL,
  `Project Manager` text DEFAULT NULL,
  `Project Director` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Scope` mediumtext DEFAULT NULL,
  `Contractual Arrangements` text DEFAULT NULL,
  `Business Value` text DEFAULT NULL,
  `Internal Priority` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Stage` text DEFAULT NULL,
  `Planned Start Date` date DEFAULT NULL,
  `Planned Completed Date` date DEFAULT NULL,
  `Started Date` date DEFAULT NULL,
  `Completed Date` date DEFAULT NULL,
  `Staffing Budget ($) exc GST` decimal(8,2) DEFAULT NULL,
  `Materials Budget ($) exc GST` decimal(8,2) DEFAULT NULL,
  `Consultancy Costs ($) exc GST` decimal(8,2) DEFAULT NULL,
  `Other Costs ($) exc GST` decimal(8,2) DEFAULT NULL,
  `Total Budget ($) exc GST` decimal(8,2) DEFAULT NULL,
  `Detailed Budget Status` text DEFAULT NULL,
  `Stakeholder Analysis Status` text DEFAULT NULL,
  `Scope Review Status` text DEFAULT NULL,
  `Work Breakdown Status` text DEFAULT NULL,
  `Risk Analysis Status` text DEFAULT NULL,
  `Project Managers Approval (Signature + Date)` text DEFAULT NULL,
  `Authorising Managers Approval (Signature + Date)` text DEFAULT NULL,
  `test2` text DEFAULT NULL,
  `test3` text DEFAULT NULL,
  `test4` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_risk-assessment`
--

CREATE TABLE `reg_risk-assessment` (
  `ID` int(11) NOT NULL,
  `Project ID` text DEFAULT NULL,
  `Gap ID` text DEFAULT NULL,
  `Contingency ID` text DEFAULT NULL,
  `Risk Group` text DEFAULT NULL,
  `Completed Date` date DEFAULT NULL,
  `Completed By` text DEFAULT NULL,
  `Impact of Compliance` text DEFAULT NULL,
  `Potential for Injury` text DEFAULT NULL,
  `Potential Repair Loss` text DEFAULT NULL,
  `Potential Revenue Loss` text DEFAULT NULL,
  `Potential Customer Loss` text DEFAULT NULL,
  `Potential Dispute Duration` text DEFAULT NULL,
  `Likelihood of Occurrence` text DEFAULT NULL,
  `Frequency of Occurrence` text DEFAULT NULL,
  `Exposure of Occurrence` text DEFAULT NULL,
  `Health Risk` text DEFAULT NULL,
  `Commercial Risk` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fnc_options`
--
ALTER TABLE `fnc_options`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_assumptions`
--
ALTER TABLE `rec_assumptions`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_budgets`
--
ALTER TABLE `rec_budgets`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_change_control`
--
ALTER TABLE `rec_change_control`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_constraints`
--
ALTER TABLE `rec_constraints`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_contingency`
--
ALTER TABLE `rec_contingency`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_controls`
--
ALTER TABLE `rec_controls`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_deliverables`
--
ALTER TABLE `rec_deliverables`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_escalation`
--
ALTER TABLE `rec_escalation`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_gap-controls`
--
ALTER TABLE `rec_gap-controls`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_inspection-points`
--
ALTER TABLE `rec_inspection-points`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_key-success-criteria`
--
ALTER TABLE `rec_key-success-criteria`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_milestones`
--
ALTER TABLE `rec_milestones`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_notes`
--
ALTER TABLE `rec_notes`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_objectives`
--
ALTER TABLE `rec_objectives`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_obstacles`
--
ALTER TABLE `rec_obstacles`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_parts`
--
ALTER TABLE `rec_parts`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_performance-reporting`
--
ALTER TABLE `rec_performance-reporting`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_phases`
--
ALTER TABLE `rec_phases`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_rcas`
--
ALTER TABLE `rec_rcas`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_rcas-causes`
--
ALTER TABLE `rec_rcas-causes`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_rcas-symptoms`
--
ALTER TABLE `rec_rcas-symptoms`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_risk-control`
--
ALTER TABLE `rec_risk-control`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_risk-identification`
--
ALTER TABLE `rec_risk-identification`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_stakeholders`
--
ALTER TABLE `rec_stakeholders`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_tasks`
--
ALTER TABLE `rec_tasks`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_time-frames`
--
ALTER TABLE `rec_time-frames`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_contacts`
--
ALTER TABLE `reg_contacts`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_gaps`
--
ALTER TABLE `reg_gaps`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_projects`
--
ALTER TABLE `reg_projects`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_risk-assessment`
--
ALTER TABLE `reg_risk-assessment`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fnc_options`
--
ALTER TABLE `fnc_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_assumptions`
--
ALTER TABLE `rec_assumptions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_budgets`
--
ALTER TABLE `rec_budgets`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_change_control`
--
ALTER TABLE `rec_change_control`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_constraints`
--
ALTER TABLE `rec_constraints`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_contingency`
--
ALTER TABLE `rec_contingency`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_controls`
--
ALTER TABLE `rec_controls`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_deliverables`
--
ALTER TABLE `rec_deliverables`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_escalation`
--
ALTER TABLE `rec_escalation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_gap-controls`
--
ALTER TABLE `rec_gap-controls`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_inspection-points`
--
ALTER TABLE `rec_inspection-points`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_key-success-criteria`
--
ALTER TABLE `rec_key-success-criteria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_milestones`
--
ALTER TABLE `rec_milestones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_notes`
--
ALTER TABLE `rec_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_objectives`
--
ALTER TABLE `rec_objectives`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_obstacles`
--
ALTER TABLE `rec_obstacles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_parts`
--
ALTER TABLE `rec_parts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_performance-reporting`
--
ALTER TABLE `rec_performance-reporting`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_phases`
--
ALTER TABLE `rec_phases`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_rcas`
--
ALTER TABLE `rec_rcas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_rcas-causes`
--
ALTER TABLE `rec_rcas-causes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_rcas-symptoms`
--
ALTER TABLE `rec_rcas-symptoms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_risk-control`
--
ALTER TABLE `rec_risk-control`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_risk-identification`
--
ALTER TABLE `rec_risk-identification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_stakeholders`
--
ALTER TABLE `rec_stakeholders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_tasks`
--
ALTER TABLE `rec_tasks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_time-frames`
--
ALTER TABLE `rec_time-frames`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_contacts`
--
ALTER TABLE `reg_contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_gaps`
--
ALTER TABLE `reg_gaps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_projects`
--
ALTER TABLE `reg_projects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_risk-assessment`
--
ALTER TABLE `reg_risk-assessment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
