-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2021 at 01:25 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.27-1~deb10u1

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

DROP TABLE IF EXISTS `fnc_options`;
CREATE TABLE IF NOT EXISTS `fnc_options` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Table_Name` text DEFAULT NULL,
  `Element` text DEFAULT NULL,
  `Option_Name` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=427 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fnc_options`
--

INSERT INTO `fnc_options` (`ID`, `Table_Name`, `Element`, `Option_Name`, `Description`) VALUES
(1, 'reg_risk-assessment', 'Impact of Compliance', 'Compliant', NULL),
(2, 'reg_risk-assessment', 'Impact of Compliance', 'Minor Non-Compliance', NULL),
(3, 'reg_risk-assessment', 'Impact of Compliance', 'Exchange of Correspondence', NULL),
(4, 'reg_risk-assessment', 'Impact of Compliance', 'Unlawful Activity', NULL),
(5, 'reg_risk-assessment', 'Impact of Compliance', 'Prosecution', NULL),
(6, 'reg_risk-assessment', 'Potential for Injury', 'No Injury', NULL),
(7, 'reg_risk-assessment', 'Potential for Injury', 'Self Administered On-Site Medical', NULL),
(8, 'reg_risk-assessment', 'Potential for Injury', 'Assisted On-Site Medical', NULL),
(9, 'reg_risk-assessment', 'Potential for Injury', 'Off-Site Medical', NULL),
(10, 'reg_risk-assessment', 'Potential for Injury', 'Death', NULL),
(11, 'reg_risk-assessment', 'Potential Repair Loss', 'less than $1,000', NULL),
(12, 'reg_risk-assessment', 'Potential Repair Loss', 'less than $5,000', NULL),
(13, 'reg_risk-assessment', 'Potential Repair Loss', 'less than $20,000', NULL),
(14, 'reg_risk-assessment', 'Potential Repair Loss', 'less than $100,000', NULL),
(15, 'reg_risk-assessment', 'Potential Revenue Loss', 'less than $1,000', NULL),
(16, 'reg_risk-assessment', 'Potential Revenue Loss', '$1,000 - $10,000', NULL),
(17, 'reg_risk-assessment', 'Potential Revenue Loss', '$10,000 - $100,000', NULL),
(18, 'reg_risk-assessment', 'Potential Revenue Loss', '$100,000 - $1,000,000', NULL),
(19, 'reg_risk-assessment', 'Potential Revenue Loss', 'greater than $1,000,000', NULL),
(20, 'reg_risk-assessment', 'Potential Customer Loss', 'less than $50,000', NULL),
(21, 'reg_risk-assessment', 'Potential Customer Loss', '$50,000 - $200,000', NULL),
(22, 'reg_risk-assessment', 'Potential Customer Loss', '$200,000 - $1,000,000', NULL),
(23, 'reg_risk-assessment', 'Potential Customer Loss', '$1,000,000 - $10,000,000', NULL),
(24, 'reg_risk-assessment', 'Potential Customer Loss', 'greater than $10,000,000', NULL),
(25, 'reg_risk-assessment', 'Potential Dispute Duration', 'less than 2 Hours Loss of Service', NULL),
(26, 'reg_risk-assessment', 'Potential Dispute Duration', '2 - 4 Hours Loss of Service', NULL),
(27, 'reg_risk-assessment', 'Potential Dispute Duration', 'greater than 4 Hours Loss of Service', NULL),
(28, 'reg_risk-assessment', 'Potential Dispute Duration', 'greater than 24 Hours Part of Building OR 12 - 4 Hours Entire Building  Loss of Service', NULL),
(29, 'reg_risk-assessment', 'Potential Dispute Duration', 'greater than 12 Hours Entire Building  Loss of Service', NULL),
(30, 'reg_risk-assessment', 'Likelihood of Occurrence', 'Will Not Occur', NULL),
(31, 'reg_risk-assessment', 'Likelihood of Occurrence', 'Not Likely to Occur', NULL),
(32, 'reg_risk-assessment', 'Likelihood of Occurrence', 'Chances of Occurring Equal', NULL),
(33, 'reg_risk-assessment', 'Likelihood of Occurrence', 'Likely to Occur', NULL),
(34, 'reg_risk-assessment', 'Likelihood of Occurrence', 'Will Occur', NULL),
(35, 'reg_risk-assessment', 'Frequency of Occurrence', 'Annually', NULL),
(36, 'reg_risk-assessment', 'Frequency of Occurrence', 'Monthly', NULL),
(37, 'reg_risk-assessment', 'Frequency of Occurrence', 'Fortnightly', NULL),
(38, 'reg_risk-assessment', 'Frequency of Occurrence', 'Weekly', NULL),
(39, 'reg_risk-assessment', 'Frequency of Occurrence', 'Daily', NULL),
(40, 'reg_risk-assessment', 'Exposure of Occurrence', 'Minutes', NULL),
(41, 'reg_risk-assessment', 'Exposure of Occurrence', 'Hours', NULL),
(42, 'reg_risk-assessment', 'Exposure of Occurrence', 'Days', NULL),
(43, 'reg_risk-assessment', 'Exposure of Occurrence', 'Weeks', NULL),
(44, 'reg_risk-assessment', 'Exposure of Occurrence', 'Constant', NULL),
(45, 'reg_gaps', 'Threat / Opportunity', 'Threat', NULL),
(46, 'reg_gaps', 'Threat / Opportunity', 'Opportunity', NULL),
(47, 'reg_gaps', 'Attention Required', 'Further Review Required', NULL),
(48, 'reg_gaps', 'Attention Required', 'Solutions Need to be Implemented', NULL),
(49, 'reg_gaps', 'Attention Required', 'No Further Actions Required', NULL),
(50, 'reg_projects', 'Internal Priority', 'Immediate', NULL),
(51, 'reg_projects', 'Internal Priority', 'High', NULL),
(52, 'reg_projects', 'Internal Priority', 'Moderate', NULL),
(53, 'reg_projects', 'Internal Priority', 'Low', NULL),
(54, 'reg_projects', 'Internal Priority', 'Nil', NULL),
(55, 'rec_tasks', 'Task Status', 'Identified', NULL),
(56, 'rec_tasks', 'Task Status', 'Started', NULL),
(57, 'rec_tasks', 'Task Status', 'On Hold', NULL),
(58, 'rec_tasks', 'Task Status', 'Waiting Information', NULL),
(59, 'rec_tasks', 'Task Status', 'Waiting Parts', NULL),
(60, 'rec_tasks', 'Task Status', 'Waiting Labour', NULL),
(61, 'rec_tasks', 'Task Status', 'Completed', NULL),
(62, 'rec_inspection-points', 'Category', 'Management Dynamics', NULL),
(63, 'rec_inspection-points', 'Category', 'Equipment Relaibility', NULL),
(64, 'rec_inspection-points', 'Category', 'Geographical Considerations', NULL),
(65, 'rec_inspection-points', 'Category', 'Malicious Damage', NULL),
(66, 'rec_inspection-points', 'Category', 'Not Fit For Purpose', NULL),
(67, 'rec_inspection-points', 'Category', 'Political Factors', NULL),
(68, 'rec_inspection-points', 'Category', 'Technological Changes', NULL),
(69, 'rec_inspection-points', 'Category', '', NULL),
(70, 'reg_projects', 'Internal Priority', '', NULL),
(71, 'reg_projects', 'Internal Priority', 'Pending Approval', NULL),
(72, 'reg_gaps', 'Stakeholder', 'Agency (Client)', NULL),
(73, 'reg_gaps', 'Stakeholder', 'Service Provider', NULL),
(74, 'reg_gaps', 'Stakeholder', 'Department', NULL),
(75, 'reg_gaps', 'Stakeholder', '', NULL),
(76, 'rec_gap-proposed-solutions', 'Action', '', NULL),
(77, 'rec_gap-proposed-solutions', 'Action', 'Add', NULL),
(78, 'rec_gap-proposed-solutions', 'Action', 'Update', NULL),
(79, 'rec_gap-proposed-solutions', 'Action', 'Review', NULL),
(80, 'rec_gap-proposed-solutions', 'Object', '', NULL),
(81, 'rec_gap-proposed-solutions', 'Object', 'Procedure', NULL),
(82, 'rec_gap-proposed-solutions', 'Object', 'Policy', NULL),
(83, 'rec_gap-proposed-solutions', 'Object', 'Plan', NULL),
(84, 'rec_gap-proposed-solutions', 'Action', 'Include', NULL),
(85, 'rec_gap-proposed-solutions', 'Measure', '', NULL),
(86, 'rec_gap-proposed-solutions', 'Action', 'Standardize', NULL),
(87, 'rec_gap-proposed-solutions', 'Object', 'Form', NULL),
(88, 'rec_gap-proposed-solutions', 'Action', 'Notify', NULL),
(89, 'rec_gap-proposed-solutions', 'Action', 'Remove', NULL),
(90, 'rec_gap-proposed-solutions', 'Measure', 'Section', NULL),
(91, 'rec_gap-proposed-solutions', 'Action', 'Streamline', NULL),
(92, 'rec_gap-proposed-solutions', 'Object', 'Process', NULL),
(93, 'rec_gap-proposed-solutions', 'Measure', 'Entire', NULL),
(94, 'reg_gaps', 'Attention Required', 'Pending Management Review', NULL),
(95, 'reg_gaps', 'Attention Required', '', NULL),
(96, 'rec_gap-current-solutions', 'Action', '', NULL),
(97, 'rec_gap-current-solutions', 'Action', 'Maintain', NULL),
(98, 'rec_gap-current-solutions', 'Object', '', NULL),
(99, 'rec_gap-current-solutions', 'Object', 'Procedure', NULL),
(100, 'rec_gap-current-solutions', 'Object', 'Policy', NULL),
(101, 'rec_gap-current-solutions', 'Object', 'Plan', NULL),
(102, 'rec_gap-current-solutions', 'Object', 'Form', NULL),
(103, 'rec_gap-current-solutions', 'Object', 'Process', NULL),
(104, 'rec_gap-current-solutions', 'Measure', NULL, NULL),
(105, 'rec_gap-current-solutions', 'Measure', 'Section', NULL),
(106, 'rec_gap-current-solutions', 'Measure', 'Entire', NULL),
(107, 'reg_gaps', 'Threat / Opportunity', '', NULL),
(108, 'rec_gap-proposed-solutions', 'Object', 'Information', NULL),
(109, 'rec_gap-proposed-solutions', 'Action', 'Monitor', NULL),
(110, 'rec_gap-proposed-solutions', 'Object', 'Data', NULL),
(111, 'rec_gap-proposed-solutions', 'Object', 'Report', NULL),
(112, 'rec_gap-current-solutions', 'Action', 'Review', NULL),
(113, 'reg_gaps', 'Responsible Entity', 'Agency (Client)', NULL),
(114, 'reg_gaps', 'Responsible Entity', 'Service Provider', NULL),
(115, 'reg_gaps', 'Responsible Entity', 'Department', NULL),
(116, 'reg_gaps', 'Responsible Entity', NULL, NULL),
(117, 'reg_risk-assessment', 'Impact of Compliance', NULL, NULL),
(118, 'reg_risk-assessment', 'Potential for Injury', NULL, NULL),
(119, 'reg_risk-assessment', 'Potential Repair Loss', NULL, NULL),
(120, 'reg_risk-assessment', 'Potential Revenue Loss', NULL, NULL),
(121, 'reg_risk-assessment', 'Potential Customer Loss', NULL, NULL),
(122, 'reg_risk-assessment', 'Potential Dispute Duration', NULL, NULL),
(123, 'reg_risk-assessment', 'Likelihood of Occurrence', NULL, NULL),
(124, 'reg_risk-assessment', 'Frequency of Occurrence', NULL, NULL),
(125, 'reg_risk-assessment', 'Exposure of Occurrence', NULL, NULL),
(126, 'rec_controls', 'Status', NULL, NULL),
(127, 'rec_controls', 'Status', 'Currently Implemented', NULL),
(128, 'rec_controls', 'Status', 'Investigating Implementation', NULL),
(129, 'rec_controls', 'Status', 'Being Implemented', NULL),
(130, 'rec_controls', 'Status', 'Has Been Implemented', NULL),
(131, 'rec_controls', 'Status', 'Waiting for Management Approval', NULL),
(132, 'reg_projects', 'Status', NULL, NULL),
(133, 'reg_projects', 'Status', 'Identified', NULL),
(134, 'reg_projects', 'Status', 'Started', NULL),
(135, 'reg_projects', 'Status', 'Completed', NULL),
(136, 'rec_milestones', 'Status', NULL, NULL),
(137, 'rec_milestones', 'Status', 'Missed', NULL),
(138, 'rec_milestones', 'Status', 'Completed', NULL),
(139, 'rec_milestones', 'Status', 'Identified', NULL),
(140, 'rec_rcas-causes', 'Category', NULL, NULL),
(141, 'rec_rcas-causes', 'Category', 'Material(s)', NULL),
(142, 'rec_rcas-causes', 'Category', 'Environmental', NULL),
(143, 'rec_rcas-causes', 'Category', 'Machine(s)', NULL),
(144, 'rec_rcas-causes', 'Category', 'Method(s)', NULL),
(145, 'rec_rcas-causes', 'Category', 'People', NULL),
(146, 'rec_rcas-causes', 'Category', 'Measurement(s)', NULL),
(147, 'rec_rcas-causes', 'Stakeholder', NULL, NULL),
(148, 'rec_rcas-causes', 'Stakeholder', 'Department', NULL),
(149, 'rec_rcas-causes', 'Stakeholder', 'Service Provider', NULL),
(150, 'rec_rcas-causes', 'Stakeholder', 'Agency (Client)', NULL),
(151, 'rec_rcas-causes', 'Stakeholder', 'End User', NULL),
(152, 'rec_inspection-points', 'Status', NULL, NULL),
(153, 'rec_inspection-points', 'Status', 'Identified', NULL),
(154, 'rec_inspection-points', 'Status', 'No Further Actions Required', NULL),
(155, 'rec_inspection-points', 'Status', 'Investigating', NULL),
(156, 'rec_inspection-points', 'Status', 'Pending Management Review', NULL),
(157, 'reg_projects', 'Status', 'Waiting for Management Approval', NULL),
(158, 'rec_inspection-points', 'MOI - Data Inspection', NULL, NULL),
(159, 'rec_inspection-points', 'MOI - Data Inspection', 'Not Required', NULL),
(160, 'rec_inspection-points', 'MOI - Data Inspection', 'Possible', NULL),
(161, 'rec_inspection-points', 'MOI - Data Inspection', 'Required', NULL),
(162, 'rec_inspection-points', 'MOI - Data Inspection', 'Suggested', NULL),
(163, 'rec_inspection-points', 'MOI - Process Review', NULL, NULL),
(164, 'rec_inspection-points', 'MOI - Process Review', 'Not Required', NULL),
(165, 'rec_inspection-points', 'MOI - Process Review', 'Possible', NULL),
(166, 'rec_inspection-points', 'MOI - Process Review', 'Required', NULL),
(167, 'rec_inspection-points', 'MOI - Process Review', 'Suggested', NULL),
(168, 'rec_inspection-points', 'MOI - Review Technical Data', NULL, NULL),
(169, 'rec_inspection-points', 'MOI - Review Technical Data', 'Not Required', NULL),
(170, 'rec_inspection-points', 'MOI - Review Technical Data', 'Possible', NULL),
(171, 'rec_inspection-points', 'MOI - Review Technical Data', 'Required', NULL),
(172, 'rec_inspection-points', 'MOI - Review Technical Data', 'Suggested', NULL),
(173, 'rec_inspection-points', 'MOI - Comms Review', NULL, NULL),
(174, 'rec_inspection-points', 'MOI - Comms Review', 'Not Required', NULL),
(175, 'rec_inspection-points', 'MOI - Comms Review', 'Possible', NULL),
(176, 'rec_inspection-points', 'MOI - Comms Review', 'Required', NULL),
(177, 'rec_inspection-points', 'MOI - Comms Review', 'Suggested', NULL),
(178, 'rec_inspection-points', 'MOI - Email', NULL, NULL),
(179, 'rec_inspection-points', 'MOI - Email', 'Not Required', NULL),
(180, 'rec_inspection-points', 'MOI - Email', 'Possible', NULL),
(181, 'rec_inspection-points', 'MOI - Email', 'Required', NULL),
(182, 'rec_inspection-points', 'MOI - Email', 'Suggested', NULL),
(183, 'rec_inspection-points', 'MOI - Phone Call', NULL, NULL),
(184, 'rec_inspection-points', 'MOI - Phone Call', 'Not Required', NULL),
(185, 'rec_inspection-points', 'MOI - Phone Call', 'Possible', NULL),
(186, 'rec_inspection-points', 'MOI - Phone Call', 'Required', NULL),
(187, 'rec_inspection-points', 'MOI - Phone Call', 'Suggested', NULL),
(188, 'rec_inspection-points', 'MOI - Survey', NULL, NULL),
(189, 'rec_inspection-points', 'MOI - Survey', 'Not Required', NULL),
(190, 'rec_inspection-points', 'MOI - Survey', 'Possible', NULL),
(191, 'rec_inspection-points', 'MOI - Survey', 'Required', NULL),
(192, 'rec_inspection-points', 'MOI - Survey', 'Suggested', NULL),
(193, 'rec_controls', 'Approval Status', NULL, NULL),
(194, 'rec_controls', 'Approval Status', 'Requires Further Investigation', NULL),
(195, 'rec_controls', 'Approval Status', 'Not Approved', NULL),
(196, 'rec_controls', 'Approval Status', 'Approved with Conditions', NULL),
(197, 'rec_controls', 'Approval Status', 'Approved without Conditions', NULL),
(198, 'rec_controls', 'Approval Status', 'Place on Hold', NULL),
(199, 'rec_controls', 'Management Priority', NULL, NULL),
(200, 'rec_controls', 'Management Priority', 'Low', 'Examples: External Stakeholder Controls, etc.'),
(201, 'rec_controls', 'Management Priority', 'Medium', 'Examples: Leakage, etc.'),
(202, 'rec_controls', 'Management Priority', 'High', 'Examples: Internal Controls, etc.'),
(203, 'rec_controls', 'Management Priority', 'Immediately', NULL),
(204, 'rec_controls', 'Status', 'Not Approved', NULL),
(205, 'rec_controls', 'Proto-Type Status', '', NULL),
(206, 'rec_controls', 'Proto-Type Status', 'Developing', NULL),
(207, 'rec_controls', 'Proto-Type Status', 'Developed', NULL),
(208, 'rec_inspection-points', 'Status', 'Management Approved', NULL),
(209, 'reg_projects', 'Stage', NULL, NULL),
(210, 'reg_projects', 'Stage', 'Conception / Definition', NULL),
(211, 'reg_projects', 'Stage', 'Definition / Planning', NULL),
(212, 'reg_projects', 'Stage', 'Launch / Execution', NULL),
(213, 'reg_projects', 'Stage', 'Performance / Control', NULL),
(214, 'reg_projects', 'Stage', 'Closure', NULL),
(215, 'rec_controls', 'Proto-Type Status', 'Approved', NULL),
(216, 'reg_projects', 'Status', 'On Hold', NULL),
(217, 'rec_controls', 'Status', 'Waiting for Implementation', NULL),
(218, 'reg_projects', 'Status', 'Cancelled', NULL),
(219, 'reg_gaps', 'Attention Required', 'On Hold (Management)', NULL),
(220, 'rec_inspection-points', 'Status', 'On Hold (Management)', NULL),
(221, 'rec_controls', 'Status', 'On Hold (Management)', NULL),
(222, 'rec_controls', 'Status', 'Cancelled', NULL),
(223, 'reg_projects', 'Detailed Budget Status', NULL, NULL),
(224, 'reg_projects', 'Detailed Budget Status', 'Started', NULL),
(225, 'reg_projects', 'Detailed Budget Status', 'Completed', NULL),
(226, 'reg_projects', 'Stakeholder Analysis Status', NULL, NULL),
(227, 'reg_projects', 'Stakeholder Analysis Status', 'Started', NULL),
(228, 'reg_projects', 'Stakeholder Analysis Status', 'Completed', NULL),
(229, 'reg_projects', 'Scope Review Status', NULL, NULL),
(230, 'reg_projects', 'Scope Review Status', 'Started', NULL),
(231, 'reg_projects', 'Scope Review Status', 'Completed', NULL),
(232, 'reg_projects', 'Work Breakdown Status', NULL, NULL),
(233, 'reg_projects', 'Work Breakdown Status', 'Started', NULL),
(234, 'reg_projects', 'Work Breakdown Status', 'Completed', NULL),
(235, 'reg_projects', 'Risk Analysis Status', NULL, NULL),
(236, 'reg_projects', 'Risk Analysis Status', 'Started', NULL),
(237, 'reg_projects', 'Risk Analysis Status', 'Completed', NULL),
(238, 'rec_phases', 'Status', NULL, NULL),
(239, 'rec_phases', 'Status', 'Started', NULL),
(240, 'rec_phases', 'Status', 'Completed', NULL),
(241, 'rec_performance-reporting', 'Report Timeline Issues', '', NULL),
(242, 'rec_performance-reporting', 'Report Timeline Issues', 'Secondary', NULL),
(243, 'rec_performance-reporting', 'Report Timeline Issues', 'Primary', NULL),
(244, 'rec_performance-reporting', 'Report Budget Issues', NULL, NULL),
(245, 'rec_performance-reporting', 'Report Budget Issues', 'Secondary', NULL),
(246, 'rec_performance-reporting', 'Report Budget Issues', 'Primary', NULL),
(247, 'rec_performance-reporting', 'Report Quality Issues', NULL, NULL),
(248, 'rec_performance-reporting', 'Report Quality Issues', 'Secondary', NULL),
(249, 'rec_performance-reporting', 'Report Quality Issues', 'Primary', NULL),
(250, 'rec_performance-reporting', 'Report Integration Issues', NULL, NULL),
(251, 'rec_performance-reporting', 'Report Integration Issues', 'Secondary', NULL),
(252, 'rec_performance-reporting', 'Report Integration Issues', 'Primary', NULL),
(253, 'rec_performance-reporting', 'Report Labor Issues', NULL, NULL),
(254, 'rec_performance-reporting', 'Report Labor Issues', 'Secondary', NULL),
(255, 'rec_performance-reporting', 'Report Labor Issues', 'Primary', NULL),
(256, 'rec_performance-reporting', 'Report Risk Issues', NULL, NULL),
(257, 'rec_performance-reporting', 'Report Risk Issues', 'Secondary', NULL),
(258, 'rec_performance-reporting', 'Report Risk Issues', 'Primary', NULL),
(259, 'rec_performance-reporting', 'Report Timeline Issues', 'Not Required', NULL),
(260, 'rec_performance-reporting', 'Report Budget Issues', 'Not Required', NULL),
(261, 'rec_performance-reporting', 'Report Quality Issues', 'Not Required', NULL),
(262, 'rec_performance-reporting', 'Report Integration Issues', 'Not Required', NULL),
(263, 'rec_performance-reporting', 'Report Labor Issues', 'Not Required', NULL),
(264, 'rec_performance-reporting', 'Report Risk Issues', 'Not Required', NULL),
(265, 'rec_tasks', 'Task Status', 'Cancelled', NULL),
(266, 'rec_change_control', 'Timeline Impact', 'Negligible', NULL),
(267, 'rec_change_control', 'Timeline Impact', 'Low', NULL),
(268, 'rec_change_control', 'Timeline Impact', 'Medium', NULL),
(269, 'rec_change_control', 'Timeline Impact', 'High', NULL),
(270, 'rec_change_control', 'Budget Impact', 'Negligible', NULL),
(271, 'rec_change_control', 'Budget Impact', 'Low', NULL),
(272, 'rec_change_control', 'Budget Impact', 'Medium', NULL),
(273, 'rec_change_control', 'Budget Impact', 'High', NULL),
(274, 'rec_change_control', 'Workplan Impact', 'Negligible', NULL),
(275, 'rec_change_control', 'Workplan Impact', 'Low', NULL),
(276, 'rec_change_control', 'Workplan Impact', 'Medium', NULL),
(277, 'rec_change_control', 'Workplan Impact', 'High', NULL),
(278, 'rec_change_control', 'Workplan Impact', '', NULL),
(279, 'rec_change_control', 'Budget Impact', '', NULL),
(280, 'rec_change_control', 'Timeline Impact', '', NULL),
(281, 'rec_change_control', 'Approval', '', NULL),
(282, 'rec_change_control', 'Approval', 'Approved', NULL),
(283, 'rec_change_control', 'Approval', 'Disapproved', NULL),
(284, 'rec_phases', 'Status', 'Identified', NULL),
(285, 'rec_phases', 'Status', 'Cancelled', NULL),
(286, 'reg_projects', 'Detailed Budget Status', 'Not Required', NULL),
(287, 'reg_projects', 'Stakeholder Analysis Status', 'Not Required', NULL),
(288, 'reg_projects', 'Scope Review Status', 'Not Required', NULL),
(289, 'reg_projects', 'Work Breakdown Status', 'Not Required', NULL),
(290, 'reg_projects', 'Risk Analysis Status', 'Not Required', NULL),
(291, 'rec_tasks', 'Task Status', 'Waiting Phase', NULL),
(292, 'rec_parts-project', 'Status', 'Raising Purchase Request', 'Internal Purchase Request being submitted.'),
(293, 'rec_parts-project', 'Status', 'Purchase Request Raised', 'Internal Purchase Request has been submitted.'),
(294, 'rec_parts-project', 'Status', 'Requesting Purchase Order', 'Internal Purchase Order has being submitted.'),
(295, 'rec_parts-project', 'Status', 'Purchase Order Raised', 'Internal Purchase Order has been submitted.'),
(296, 'rec_parts-project', 'Status', 'Requesting Quote', 'External Quote has been requested.'),
(297, 'rec_parts-project', 'Status', 'Quote Recieved', 'External Quote has been received.'),
(298, 'rec_parts-project', 'Status', 'Parts To be Inspected', 'Parts have arrived however need to be checked.'),
(299, 'rec_parts-project', 'Status', 'Parts Received', 'Parts have arrived on site.'),
(300, 'rec_parts-project', 'Status', '', NULL),
(301, 'rec_parts-project', 'Status', 'Waiting Delivery', 'The order has been accepted and parts are being delivered.'),
(302, 'rec_parts-order', 'Status', '', NULL),
(303, 'rec_parts-order', 'Status', 'Identified', 'Requirement identified.'),
(304, 'rec_parts-order', 'Status', 'Planning', 'Determining what is required for order.'),
(305, 'rec_parts-order', 'Status', 'Commenced', 'In the process of ordering (quote / purchase request / purchase order)'),
(306, 'rec_parts-order', 'Status', 'Waiting Delivery', 'Items ordered and waiting delivery.'),
(307, 'rec_parts-order', 'Status', 'Inspecting', 'Items arrived and waiting inspection.'),
(308, 'rec_parts-order', 'Status', 'Completed', 'All tasks completed.'),
(309, 'rec_specifications', 'Inspection Monitoring', '', NULL),
(310, 'rec_specifications', 'Inspection Monitoring', 'Auto', NULL),
(311, 'rec_specifications', 'Inspection Monitoring', 'Manual', NULL),
(312, 'rec_specifications', 'Inspection Status', '', NULL),
(313, 'rec_specifications', 'Inspection Status', 'OK', NULL),
(314, 'rec_specifications', 'Inspection Status', 'Attention', NULL),
(315, 'rec_specifications', 'Unit of Measure', '', NULL),
(316, 'rec_specifications', 'Unit of Measure', 'L/s', NULL),
(317, 'rec_specifications', 'Unit of Measure', '°C', NULL),
(318, 'rec_specifications', 'Unit of Measure', 'V', NULL),
(319, 'rec_specifications', 'Unit of Measure', 'A', NULL),
(320, 'rec_specifications', 'Unit of Measure', 'Pa', NULL),
(321, 'rec_tasks', 'Task Status', 'Monitoring', NULL),
(322, 'rec_specifications', 'Unit of Measure', 'Y / N', '0 - No / 1 - Yes'),
(323, 'rec_specifications', 'Unit of Measure', 'hrs', NULL),
(324, 'rec_specifications', 'Unit of Measure', '%', NULL),
(325, 'rec_monitoring-points-inspections', 'Unit of Measure', '', NULL),
(326, 'rec_monitoring-points-inspections', 'Unit of Measure', 'L/s', NULL),
(327, 'rec_monitoring-points-inspections', 'Unit of Measure', '°C', NULL),
(328, 'rec_monitoring-points-inspections', 'Unit of Measure', 'V', NULL),
(329, 'rec_monitoring-points-inspections', 'Unit of Measure', 'A', NULL),
(330, 'rec_monitoring-points-inspections', 'Unit of Measure', 'Pa', NULL),
(331, 'rec_monitoring-points-inspections', 'Unit of Measure', 'Y / N', '0 - No / 1 - Yes'),
(332, 'rec_monitoring-points-inspections', 'Unit of Measure', 'hrs', NULL),
(333, 'rec_monitoring-points-inspections', 'Unit of Measure', '%', NULL),
(334, 'reg_monitoring-points', 'Measuring Point Available', '', NULL),
(335, 'reg_monitoring-points', 'Measuring Point Available', 'No', NULL),
(336, 'reg_monitoring-points', 'Measuring Point Available', 'Yes', NULL),
(337, 'rec_monitoring-points-inspections', 'Unit of Measure', 'kPa', NULL),
(338, 'rec_tasks', 'Task Status', 'Planned', NULL),
(339, 'rec_specifications', 'Unit of Measure', 'kPa', NULL),
(340, 'rec_tasks', 'Task Status', 'Duplicate', NULL),
(341, 'rec_monitoring-points-inspections', 'Unit of Measure', 'kW', NULL),
(342, 'rec_monitoring-points-inspections', 'Unit of Measure', 'kVAr', NULL),
(343, 'rec_monitoring-points-inspections', 'Unit of Measure', 'kV', NULL),
(344, 'rec_tasks', 'Task Status', 'Re-Occurring Fault', NULL),
(345, 'rec_tasks', 'Task Status', 'Planning', NULL),
(346, 'rec_tasks', 'Task Type', '', NULL),
(347, 'rec_tasks', 'Task Type', 'BD Activity', NULL),
(348, 'rec_tasks', 'Task Type', 'PM Activity', NULL),
(349, 'reg_projects', 'Type', NULL, NULL),
(350, 'reg_projects', 'Type', 'On Going', NULL),
(351, 'reg_projects', 'Type', 'One Off', NULL),
(352, 'rec_monitoring-points-inspections', 'Unit of Measure', 'Hz', NULL),
(353, 'reg_documents', 'Site Relevant', '', NULL),
(354, 'reg_documents', 'Site Relevant', 'Yes', NULL),
(355, 'reg_documents', 'Site Relevant', 'No', NULL),
(356, 'reg_documents', 'Site Relevant', 'Unsure', NULL),
(357, 'reg_projects', 'Type', 'Service', NULL),
(358, 'rec_tasks', 'Task Type', 'Technical Support', NULL),
(359, 'reg_contacts', 'Contact Type', NULL, NULL),
(360, 'reg_contacts', 'Contact Type', 'Customer', NULL),
(361, 'reg_contacts', 'Contact Type', 'Internal Staff', NULL),
(362, 'reg_contacts', 'Contact Type', 'Service Provider', NULL),
(363, 'rec_tasks', 'Commerical Priority', '', NULL),
(364, 'rec_tasks', 'Commerical Priority', 'Immediate Attention', NULL),
(365, 'rec_tasks', 'Commerical Priority', 'Standard Response', NULL),
(366, 'rec_tasks', 'Commerical Priority', 'Non-Specified', NULL),
(367, 'rec_tasks', 'Health & Safety Priority', '', NULL),
(368, 'rec_tasks', 'Health & Safety Priority', 'Immediate Attention', NULL),
(369, 'rec_tasks', 'Health & Safety Priority', 'Standard Response', NULL),
(370, 'rec_tasks', 'Health & Safety Priority', 'Non-Specified', NULL),
(371, 'reg_equipment_types', 'Division', '', NULL),
(372, 'reg_equipment_types', 'Division', 'Gate Control Board', NULL),
(373, 'reg_equipment_types', 'Division', 'Gate Motor Assembly', NULL),
(374, 'reg_documents', 'Document Title (Short)', '', NULL),
(375, 'reg_documents', 'Document Title (Short)', 'Installation Manual', NULL),
(376, 'reg_documents', 'Document Title (Short)', 'Ammendments', NULL),
(377, 'reg_documents', 'Document Title (Short)', 'Maintenance Schedule', NULL),
(378, 'reg_documents', 'Document Title (Short)', 'Quick Guide', NULL),
(379, 'reg_documents', 'Document Title (Short)', 'Catalogue', NULL),
(380, 'reg_documents', 'Document Title (Short)', 'Technical Data Sheet', NULL),
(381, 'reg_documents', 'Document Title (Short)', 'Spare Parts Catalogue', NULL),
(382, 'reg_contacts', 'Contact Type', 'Installer', NULL),
(383, 'rec_parts-controlled', 'Performance Tested', '', NULL),
(384, 'rec_parts-controlled', 'Performance Tested', 'No', NULL),
(385, 'rec_parts-controlled', 'Performance Tested', 'Yes', NULL),
(386, 'rec_parts-controlled', 'Warranty Claim', '', NULL),
(387, 'rec_parts-controlled', 'Warranty Claim', 'Not Sure', NULL),
(388, 'rec_parts-controlled', 'Warranty Claim', 'Yes', NULL),
(389, 'rec_parts-controlled', 'Warranty Claim', 'No', NULL),
(390, 'rec_parts-controlled', 'Warranty Claim Status', '', NULL),
(391, NULL, NULL, NULL, NULL),
(392, 'rec_parts-controlled', 'Warranty Claim Status', 'Completed', NULL),
(393, 'rec_parts-controlled', 'Label Applied', '', NULL),
(394, 'rec_parts-controlled', 'Label Applied', 'Yes', NULL),
(395, 'rec_parts-controlled', 'Label Applied', 'No', NULL),
(396, 'rec_parts-controlled', 'Purchase Type', '', NULL),
(397, 'rec_parts-controlled', 'Purchase Type', 'Assembly', '3 Years Warranty'),
(398, 'rec_parts-controlled', 'Purchase Type', 'Parts', '1 Year Warranty'),
(399, 'rec_parts-controlled', 'Warranty Approval', '', NULL),
(400, 'rec_parts-controlled', 'Warranty Approval', 'Approved', NULL),
(401, 'rec_parts-controlled', 'Warranty Approval', 'Not Approved', NULL),
(402, 'rec_parts-controlled', 'Warranty Approval', 'Considering', NULL),
(403, 'rec_parts-controlled', 'Status', '', NULL),
(404, 'rec_parts-controlled', 'Status', 'No Outstanding Actions', NULL),
(405, 'rec_parts-controlled', 'Status', 'Reviewing', NULL),
(406, NULL, NULL, NULL, NULL),
(407, 'rec_parts-controlled', 'Warranty Claim Status', 'Requested', NULL),
(408, 'rec_parts-controlled', 'Warranty Claim Status', 'Reviewing', NULL),
(409, 'rec_parts-controlled', 'Warranty Claim Status', 'Locally Approved', NULL),
(410, 'rec_parts-controlled', 'Warranty Claim Status', 'Globally Approved', NULL),
(411, 'rec_parts-controlled', 'Status', 'Waiting Decision', NULL),
(412, 'rec_parts-controlled', 'Warranty Claim Status', 'Not Applicable', NULL),
(413, 'rec_parts-controlled', 'Warranty Approval', 'Not Applicable', NULL),
(414, 'rec_parts-controlled', 'Label Applied', 'Removed', NULL),
(415, 'rec_tasks', 'Task Status', 'Waiting Parts (Warranty)', 'This is for customers who are sending parts in to be inspected and replaced (if applicable) under warranty.'),
(416, 'rec_tasks', 'Task Status', 'Waiting OEM (Warranty)', 'This is for parts waiting to be returned to manufacturer for final warranty claim.'),
(417, 'rec_tasks', 'Task Status', 'Waiting Parts (Internal)', 'Waiting for parts to become available internally.'),
(418, 'rec_tasks', 'Task Status', 'Waiting Parts (External)', 'Waiting for parts to be delivered externally.'),
(419, 'reg_control-nodes', 'IO Type', 'Input', NULL),
(420, 'reg_control-nodes', 'IO Type', 'Output', NULL),
(421, 'reg_control-nodes', 'IO Type', '', NULL),
(422, NULL, NULL, NULL, NULL),
(423, NULL, NULL, NULL, NULL),
(424, NULL, NULL, NULL, NULL),
(425, NULL, NULL, NULL, NULL),
(426, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rec_assumptions`
--

DROP TABLE IF EXISTS `rec_assumptions`;
CREATE TABLE IF NOT EXISTS `rec_assumptions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_budgets`
--

DROP TABLE IF EXISTS `rec_budgets`;
CREATE TABLE IF NOT EXISTS `rec_budgets` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_change_control`
--

DROP TABLE IF EXISTS `rec_change_control`;
CREATE TABLE IF NOT EXISTS `rec_change_control` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_constraints`
--

DROP TABLE IF EXISTS `rec_constraints`;
CREATE TABLE IF NOT EXISTS `rec_constraints` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_contingency`
--

DROP TABLE IF EXISTS `rec_contingency`;
CREATE TABLE IF NOT EXISTS `rec_contingency` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deliverable ID` text DEFAULT NULL,
  `Cause` text DEFAULT NULL,
  `Proposed Solution` mediumtext NOT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_controls`
--

DROP TABLE IF EXISTS `rec_controls`;
CREATE TABLE IF NOT EXISTS `rec_controls` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `View Group` text DEFAULT NULL,
  `Change Description` mediumtext DEFAULT NULL,
  `Associated Document` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Approval Status` text DEFAULT NULL,
  `Proto-Type Status` text DEFAULT NULL,
  `Management Priority` text DEFAULT NULL,
  `Approval Conditions` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_deliverables`
--

DROP TABLE IF EXISTS `rec_deliverables`;
CREATE TABLE IF NOT EXISTS `rec_deliverables` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_documents-release`
--

DROP TABLE IF EXISTS `rec_documents-release`;
CREATE TABLE IF NOT EXISTS `rec_documents-release` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Document ID` int(11) DEFAULT NULL,
  `Details` text DEFAULT NULL,
  `Publisher Version ID` text DEFAULT NULL,
  `Published Date` date DEFAULT NULL,
  `Withdrawal Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_equipment-change`
--

DROP TABLE IF EXISTS `rec_equipment-change`;
CREATE TABLE IF NOT EXISTS `rec_equipment-change` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment ID` int(11) DEFAULT NULL,
  `Manufacturer` text DEFAULT NULL,
  `Manufacturer Part No` text DEFAULT NULL,
  `Serial No` text DEFAULT NULL,
  `Planned Install Date` date DEFAULT NULL,
  `Actual Install Date` date DEFAULT NULL,
  `Installed By` text DEFAULT NULL,
  `Planned Program Date` date DEFAULT NULL,
  `Actual Program Date` date DEFAULT NULL,
  `Programmed By` text DEFAULT NULL,
  `Planned Commission Date` date DEFAULT NULL,
  `Actual Commission Date` date DEFAULT NULL,
  `Commissioned By` text DEFAULT NULL,
  `Required Decommission Date` date DEFAULT NULL,
  `Planned Decommission Date` date DEFAULT NULL,
  `Actual Decommission Date` date DEFAULT NULL,
  `Decommissioned By` text DEFAULT NULL,
  `Comments` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_equipment-type-documents`
--

DROP TABLE IF EXISTS `rec_equipment-type-documents`;
CREATE TABLE IF NOT EXISTS `rec_equipment-type-documents` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment Type ID` int(11) DEFAULT NULL,
  `Document ID` int(11) DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_equipment-type-known-issues`
--

DROP TABLE IF EXISTS `rec_equipment-type-known-issues`;
CREATE TABLE IF NOT EXISTS `rec_equipment-type-known-issues` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment Type ID` int(11) DEFAULT NULL,
  `Associated Document ID` int(11) DEFAULT NULL,
  `Issue Description` mediumtext DEFAULT NULL,
  `Solution Description` mediumtext DEFAULT NULL,
  `Production Start Date` date DEFAULT NULL,
  `Production Finish Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_escalation`
--

DROP TABLE IF EXISTS `rec_escalation`;
CREATE TABLE IF NOT EXISTS `rec_escalation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_gap-controls`
--

DROP TABLE IF EXISTS `rec_gap-controls`;
CREATE TABLE IF NOT EXISTS `rec_gap-controls` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Gap ID` text DEFAULT NULL,
  `Control ID` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_inspection-points`
--

DROP TABLE IF EXISTS `rec_inspection-points`;
CREATE TABLE IF NOT EXISTS `rec_inspection-points` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `MOI - Survey` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_key-success-criteria`
--

DROP TABLE IF EXISTS `rec_key-success-criteria`;
CREATE TABLE IF NOT EXISTS `rec_key-success-criteria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_milestones`
--

DROP TABLE IF EXISTS `rec_milestones`;
CREATE TABLE IF NOT EXISTS `rec_milestones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Required Finish Date` date DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_monitoring-points-inspections`
--

DROP TABLE IF EXISTS `rec_monitoring-points-inspections`;
CREATE TABLE IF NOT EXISTS `rec_monitoring-points-inspections` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Monitoring Point ID` int(11) DEFAULT NULL,
  `Measured Amount` decimal(11,1) DEFAULT NULL,
  `Unit of Measure` text DEFAULT NULL,
  `Measured Date` date DEFAULT NULL,
  `Measure By` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_notes`
--

DROP TABLE IF EXISTS `rec_notes`;
CREATE TABLE IF NOT EXISTS `rec_notes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Gap ID` text DEFAULT NULL,
  `Gap Control ID` text DEFAULT NULL,
  `Task ID` text DEFAULT NULL,
  `Part ID` text DEFAULT NULL,
  `Part Controlled ID` int(11) DEFAULT NULL,
  `Inspection Point ID` text DEFAULT NULL,
  `Control ID` text DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `Identified Date` date DEFAULT NULL,
  `Identified By` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_objectives`
--

DROP TABLE IF EXISTS `rec_objectives`;
CREATE TABLE IF NOT EXISTS `rec_objectives` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_obstacles`
--

DROP TABLE IF EXISTS `rec_obstacles`;
CREATE TABLE IF NOT EXISTS `rec_obstacles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_parts-controlled`
--

DROP TABLE IF EXISTS `rec_parts-controlled`;
CREATE TABLE IF NOT EXISTS `rec_parts-controlled` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Label Applied` text DEFAULT NULL,
  `Manufacturer` text DEFAULT NULL,
  `Manufacturer Part #` text DEFAULT NULL,
  `Serial #` text DEFAULT NULL,
  `Performance Tested` text DEFAULT NULL,
  `Performance Test Outcome` mediumtext DEFAULT NULL,
  `Performance Test Date` date DEFAULT NULL,
  `Performance Tester ID` int(11) DEFAULT NULL,
  `Received Date` date DEFAULT NULL,
  `Received # Boxes` int(11) DEFAULT NULL,
  `Dispatch Contact` int(11) DEFAULT NULL,
  `Dispatch Date` date DEFAULT NULL,
  `Dispatch # Boxes` int(11) DEFAULT NULL,
  `Dispatch Organization` text DEFAULT NULL,
  `Dispatch Tracking #` text DEFAULT NULL,
  `RMA #` text DEFAULT NULL,
  `SO #` text DEFAULT NULL,
  `Warranty Claim` text DEFAULT NULL,
  `Warranty Claim Status` text DEFAULT NULL,
  `Warranty Claim Reference` text DEFAULT NULL,
  `Tax Invoice Provided` text DEFAULT NULL,
  `Purchase Date` date DEFAULT NULL,
  `Purchase Type` text DEFAULT NULL,
  `Warranty Approval` text DEFAULT NULL,
  `Storage ID` int(11) DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_parts-critical`
--

DROP TABLE IF EXISTS `rec_parts-critical`;
CREATE TABLE IF NOT EXISTS `rec_parts-critical` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` text DEFAULT NULL,
  `Manufacturer` text DEFAULT NULL,
  `Manufacturer Part No` text DEFAULT NULL,
  `Product Released Date` date DEFAULT NULL,
  `Product Phase-Out Date` date DEFAULT NULL,
  `Product Cancellation Date` date DEFAULT NULL,
  `Product Discontinuation Date` date DEFAULT NULL,
  `Recommended Spares Available` int(11) DEFAULT NULL,
  `Current Spares Available` int(11) DEFAULT NULL,
  `Current Spares Check Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_parts-order`
--

DROP TABLE IF EXISTS `rec_parts-order`;
CREATE TABLE IF NOT EXISTS `rec_parts-order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Task ID` text DEFAULT NULL,
  `Project ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Supplier` text DEFAULT NULL,
  `Supplier Part #` text DEFAULT NULL,
  `Manufacturer` text DEFAULT NULL,
  `Manufacturer Part #` text DEFAULT NULL,
  `Unit Price (exc GST)` text DEFAULT NULL,
  `Unit of Measure` text DEFAULT NULL,
  `Quantity Required` text DEFAULT NULL,
  `Total Price (exc GST)` text DEFAULT NULL,
  `Purchase Request ID` int(11) DEFAULT NULL,
  `Purchase Order ID` int(11) DEFAULT NULL,
  `Tax Invoice ID` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_parts-project`
--

DROP TABLE IF EXISTS `rec_parts-project`;
CREATE TABLE IF NOT EXISTS `rec_parts-project` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment ID` int(11) DEFAULT NULL,
  `Task ID` int(11) DEFAULT NULL,
  `Project ID` int(11) DEFAULT NULL,
  `Part Order ID` int(11) DEFAULT NULL,
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
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` text DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_performance-reporting`
--

DROP TABLE IF EXISTS `rec_performance-reporting`;
CREATE TABLE IF NOT EXISTS `rec_performance-reporting` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_phases`
--

DROP TABLE IF EXISTS `rec_phases`;
CREATE TABLE IF NOT EXISTS `rec_phases` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Step` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_rcas`
--

DROP TABLE IF EXISTS `rec_rcas`;
CREATE TABLE IF NOT EXISTS `rec_rcas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Issue Definition` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_rcas-causes`
--

DROP TABLE IF EXISTS `rec_rcas-causes`;
CREATE TABLE IF NOT EXISTS `rec_rcas-causes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Symptom ID` text DEFAULT NULL,
  `RCA ID` int(11) DEFAULT NULL,
  `Stakeholder` text DEFAULT NULL,
  `Category` text DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_rcas-symptoms`
--

DROP TABLE IF EXISTS `rec_rcas-symptoms`;
CREATE TABLE IF NOT EXISTS `rec_rcas-symptoms` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RCA ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_risk-control`
--

DROP TABLE IF EXISTS `rec_risk-control`;
CREATE TABLE IF NOT EXISTS `rec_risk-control` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Risk Assessment ID` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_risk-identification`
--

DROP TABLE IF EXISTS `rec_risk-identification`;
CREATE TABLE IF NOT EXISTS `rec_risk-identification` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Risk Assessment ID` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_services`
--

DROP TABLE IF EXISTS `rec_services`;
CREATE TABLE IF NOT EXISTS `rec_services` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment ID` int(11) DEFAULT NULL,
  `Document ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_services-inspections`
--

DROP TABLE IF EXISTS `rec_services-inspections`;
CREATE TABLE IF NOT EXISTS `rec_services-inspections` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Service ID` int(11) DEFAULT NULL,
  `Completed Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_specifications`
--

DROP TABLE IF EXISTS `rec_specifications`;
CREATE TABLE IF NOT EXISTS `rec_specifications` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment ID` int(11) DEFAULT NULL,
  `Monitoring Point ID` int(11) DEFAULT NULL,
  `Source` text DEFAULT NULL,
  `Comments` mediumtext DEFAULT NULL,
  `Minimum Allowable` text DEFAULT NULL,
  `Maximum Allowable` text DEFAULT NULL,
  `Unit of Measure` text DEFAULT NULL,
  `Inspection Interval (Days)` int(11) DEFAULT NULL,
  `Inspection Monitoring` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_stakeholders`
--

DROP TABLE IF EXISTS `rec_stakeholders`;
CREATE TABLE IF NOT EXISTS `rec_stakeholders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Contact ID` text DEFAULT NULL,
  `Risk Assessment ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_system-log`
--

DROP TABLE IF EXISTS `rec_system-log`;
CREATE TABLE IF NOT EXISTS `rec_system-log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_tasks`
--

DROP TABLE IF EXISTS `rec_tasks`;
CREATE TABLE IF NOT EXISTS `rec_tasks` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` int(11) DEFAULT NULL,
  `Phase ID` text DEFAULT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Service ID` int(11) DEFAULT NULL,
  `Specification ID` int(11) DEFAULT NULL,
  `Part Controlled ID` int(11) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Task Status` text DEFAULT NULL,
  `Commerical Priority` text DEFAULT NULL,
  `Health & Safety Priority` text DEFAULT NULL,
  `Task Type` text DEFAULT NULL,
  `Client ID` int(11) DEFAULT NULL,
  `Identified Date` date DEFAULT NULL,
  `[OLD] Identified By` text DEFAULT NULL,
  `Technician ID` int(11) DEFAULT NULL,
  `[OLD] Person Responsible` text DEFAULT NULL,
  `Required Completion Date` date DEFAULT NULL,
  `Planned Completion Date` date DEFAULT NULL,
  `Actual Completed Date` date DEFAULT NULL,
  `Planned Work Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_time-frames`
--

DROP TABLE IF EXISTS `rec_time-frames`;
CREATE TABLE IF NOT EXISTS `rec_time-frames` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_contacts`
--

DROP TABLE IF EXISTS `reg_contacts`;
CREATE TABLE IF NOT EXISTS `reg_contacts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First Name` text DEFAULT NULL,
  `Last Name` text DEFAULT NULL,
  `Contact Type` text DEFAULT NULL,
  `Position` text DEFAULT NULL,
  `Department` text DEFAULT NULL,
  `Organisation` text DEFAULT NULL,
  `Unit / Building #` text DEFAULT NULL,
  `Street #` text DEFAULT NULL,
  `Street Name` text DEFAULT NULL,
  `Suburb` text DEFAULT NULL,
  `City` text DEFAULT NULL,
  `State` text DEFAULT NULL,
  `Country` text DEFAULT NULL,
  `Postcode` text DEFAULT NULL,
  `Email` text DEFAULT NULL,
  `Mobile #` text DEFAULT NULL,
  `Phone #` text DEFAULT NULL,
  `Personality Trait Rating Responsible` text DEFAULT NULL,
  `Personality Trait Rating Adaptable` text DEFAULT NULL,
  `Personality Trait Rating Determinate` text DEFAULT NULL,
  `Personality Trait Rating Empathetic` text DEFAULT NULL,
  `Personality Trait Rating Precise` text DEFAULT NULL,
  `Personality Trait Rating Independent` text DEFAULT NULL,
  `Personality Trait Rating Respectful` text DEFAULT NULL,
  `Personality Trait Rating Capable` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_control-nodes`
--

DROP TABLE IF EXISTS `reg_control-nodes`;
CREATE TABLE IF NOT EXISTS `reg_control-nodes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `IP Address` text DEFAULT NULL,
  `IO Type` text DEFAULT NULL,
  `IO Address` int(11) DEFAULT NULL,
  `Current Value` int(11) DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents`
--

DROP TABLE IF EXISTS `reg_documents`;
CREATE TABLE IF NOT EXISTS `reg_documents` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `[old] Equipment Type ID` int(11) DEFAULT NULL,
  `Document Title` text DEFAULT NULL,
  `Document Title (Short)` text DEFAULT NULL,
  `Site Relevant` text DEFAULT NULL,
  `[old] Manufacturer` text DEFAULT NULL,
  `[old] Manufacturer Part No` text DEFAULT NULL,
  `Publisher` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents-purchase-order`
--

DROP TABLE IF EXISTS `reg_documents-purchase-order`;
CREATE TABLE IF NOT EXISTS `reg_documents-purchase-order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Part Order ID` int(11) DEFAULT NULL,
  `Reference No` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents-purchase-request`
--

DROP TABLE IF EXISTS `reg_documents-purchase-request`;
CREATE TABLE IF NOT EXISTS `reg_documents-purchase-request` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Part Order ID` int(11) DEFAULT NULL,
  `Reference No` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents-quote`
--

DROP TABLE IF EXISTS `reg_documents-quote`;
CREATE TABLE IF NOT EXISTS `reg_documents-quote` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Part Order ID` int(11) DEFAULT NULL,
  `Reference No` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_equipment`
--

DROP TABLE IF EXISTS `reg_equipment`;
CREATE TABLE IF NOT EXISTS `reg_equipment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Primary System` text DEFAULT NULL,
  `Principal System` text DEFAULT NULL,
  `Equipment` text DEFAULT NULL,
  `Part` text DEFAULT NULL,
  `Component` text DEFAULT NULL,
  `Serial Number` text DEFAULT NULL,
  `Owner ID` int(11) DEFAULT NULL,
  `Comments` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_equipment_types`
--

DROP TABLE IF EXISTS `reg_equipment_types`;
CREATE TABLE IF NOT EXISTS `reg_equipment_types` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Manufacturer` text DEFAULT NULL,
  `Manufacturer Range` text DEFAULT NULL,
  `Manufacturer Part No` text DEFAULT NULL,
  `Division` text DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_gaps`
--

DROP TABLE IF EXISTS `reg_gaps`;
CREATE TABLE IF NOT EXISTS `reg_gaps` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Inspection Point ID` int(11) DEFAULT NULL,
  `Project ID` text DEFAULT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Stakeholder` text DEFAULT NULL,
  `Responsible Entity` text DEFAULT NULL,
  `Threat / Opportunity` text DEFAULT NULL,
  `Attention Required` text DEFAULT NULL,
  `Gap Point` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_monitoring-points`
--

DROP TABLE IF EXISTS `reg_monitoring-points`;
CREATE TABLE IF NOT EXISTS `reg_monitoring-points` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Equipment ID` int(11) DEFAULT NULL,
  `Inspection Point` text DEFAULT NULL,
  `Method of Measure` text DEFAULT NULL,
  `Where to Measure` text DEFAULT NULL,
  `Measuring Point Available` text DEFAULT NULL,
  `Last Measured Amount` decimal(10,1) DEFAULT NULL,
  `Last Unit of Measure` text DEFAULT NULL,
  `Last Measured Date` date DEFAULT NULL,
  `Date Status` text DEFAULT NULL,
  `Measurement Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_projects`
--

DROP TABLE IF EXISTS `reg_projects`;
CREATE TABLE IF NOT EXISTS `reg_projects` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `Type` text DEFAULT NULL,
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
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_risk-assessment`
--

DROP TABLE IF EXISTS `reg_risk-assessment`;
CREATE TABLE IF NOT EXISTS `reg_risk-assessment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Project ID` text DEFAULT NULL,
  `Gap ID` text DEFAULT NULL,
  `Contingency ID` text DEFAULT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
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
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_storage`
--

DROP TABLE IF EXISTS `reg_storage`;
CREATE TABLE IF NOT EXISTS `reg_storage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Location Name` text DEFAULT NULL,
  `Short Description` text DEFAULT NULL,
  `Long Description` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User Name` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Access Tags` text DEFAULT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `User Name`, `Password`, `Access Tags`) VALUES
(1, 'Administrator', '$2y$10$fVw18lTuuUlw7SOzcKGnx.f7PCebmiFV4Nn7OBLvziXHGInHu0FAG', 'All;'),
(2, 'Phillip Kraguljac', '$2y$10$fVw18lTuuUlw7SOzcKGnx.f7PCebmiFV4Nn7OBLvziXHGInHu0FAG', 'Equipment Management;');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
