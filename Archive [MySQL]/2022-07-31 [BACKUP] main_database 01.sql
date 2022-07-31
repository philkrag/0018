-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 06:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
(374, 'reg_documents', 'Type', '', NULL),
(375, 'reg_documents', 'Type', 'Installation Manual', NULL),
(376, 'reg_documents', 'Type', 'Ammendments', NULL),
(377, 'reg_documents', 'Type', 'Maintenance Schedule', NULL),
(378, 'reg_documents', 'Type', 'Quick Guide', NULL),
(379, 'reg_documents', 'Type', 'Catalogue', NULL),
(380, 'reg_documents', 'Type', 'Technical Data Sheet', NULL),
(381, 'reg_documents', 'Type', 'Spare Parts Catalogue', NULL),
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
(422, 'reg_work-instructions', 'Status', '', NULL),
(423, 'reg_work-instructions', 'Status', 'Under Development', 'This WMS is currently being developed.'),
(424, 'reg_work-instructions', 'Status', 'Current', 'This WMS is current and up to date.'),
(425, 'rec_instruction-steps', 'PPE Required - Hearing Protection', '', NULL),
(426, 'rec_instruction-steps', 'PPE Required - Hearing Protection', 'Yes', NULL),
(427, 'rec_instruction-steps', 'PPE Required - Eye Protection', '', NULL),
(428, 'rec_instruction-steps', 'PPE Required - Eye Protection', 'Yes', NULL),
(429, 'rec_instruction-steps', 'PPE Required - Hand Protection', '', NULL),
(430, 'rec_instruction-steps', 'PPE Required - Hand Protection', 'Yes', NULL),
(431, 'rec_instruction-steps', 'PPE Required - Feet Protection', '', NULL),
(432, 'rec_instruction-steps', 'PPE Required - Feet Protection', 'Yes', NULL),
(433, 'reg_work-instructions', 'Status', 'Assistance Required', 'This WMS is dependent on the assistance from other entities.'),
(434, 'reg_work-instructions', 'Status', '1st Draft', 'Used when creating the draft from scratch.'),
(435, 'reg_work-instructions', 'Status', '2nd Draft', 'Used when first walk through has been completed.'),
(436, 'reg_work-instructions', 'Status', 'Final Draft', 'Used when second walk through has been completed.'),
(437, 'reg_work-instructions', 'Status', 'Review Draft', 'Requires a walk through of the WMS to determine its suitability.'),
(438, 'reg_work-instructions', 'Status', 'Waiting Equipment Access', NULL),
(439, 'reg_documents', 'Type', 'Operation Manual', NULL),
(440, 'reg_documents', 'Type', 'Technical Drawing', NULL),
(441, 'rec_version-control', 'Change Description (Short)', '', NULL),
(442, 'rec_version-control', 'Change Description (Short)', 'Document Added', NULL),
(443, 'rec_version-control', 'Change Description (Short)', 'Document Modified', NULL),
(444, 'rec_instruction-steps', 'Status', '', NULL),
(445, 'rec_instruction-steps', 'Status', 'Requires Confirmation', NULL),
(446, 'rec_instruction-steps', 'Status', 'Approved', NULL),
(447, 'reg_work-instructions', 'Type', '', NULL),
(448, 'reg_work-instructions', 'Type', 'Inspection', 'Used when ensuring serviceability of equipment.'),
(449, 'reg_work-instructions', 'Type', 'Fault Finding', 'Used when trying to narrow down faults.'),
(450, 'reg_work-instructions', 'Type', 'Procedure', 'Standard operational practices.'),
(451, 'reg_work-instructions', 'Type', 'Repair', 'Used when repairing / modifying equipment.'),
(452, 'rec_instruction-steps', 'Utilization', '', NULL),
(453, 'rec_instruction-steps', 'Utilization', 'Not Currently Used in System', 'System has the capability and is included for additional fault finding capability.'),
(454, 'rec_instruction-steps', 'Utilization', 'Currently Used In System', 'Currently being used as part of system\'s normal operation.'),
(455, 'rec_instruction-steps', 'Status', 'Requires Further Investigation', NULL),
(456, 'rec_instruction-steps', 'Utilization', 'Not Known', NULL),
(457, 'reg_documents', 'Type', 'Training Material', NULL),
(458, 'reg_documents', 'Discipline', '', NULL),
(459, 'reg_documents', 'Discipline', 'Electrical', 'Any work specifically assocaited with assembly design.'),
(460, 'reg_documents', 'Discipline', 'Mechnical', 'Any work associated with mechanical design.'),
(461, 'reg_documents', 'Discipline', 'Electronics', 'Any work specifically assocaited with PCB design.'),
(462, 'reg_documents', 'Type', 'Technical Schedule', 'Any technical document detailing configurations (wiring etc)'),
(463, 'reg_documents', 'Discipline', 'Multi', 'Any work not defined specifically to a single discipline.'),
(464, 'reg_documents', 'Type', 'Procedure', NULL),
(465, 'rec_specifications', 'Unit of Measure', 'PSI', NULL),
(466, 'rec_monitoring-points-inspections', 'Unit of Measure', 'PSI', NULL),
(467, 'reg_documents', 'Discipline', 'Software', NULL),
(468, 'reg_documents', 'Type', 'Report', NULL),
(469, 'reg_work-instructions', 'Type', 'Replacement', 'Used when determining a suitable replacement.'),
(470, 'rec_version-control', 'Change Description (Short)', 'Content Copied', 'Used when copying contents from another similar WMS.'),
(471, 'rec_version-control', 'Change Description (Short)', 'Step Modified', NULL),
(472, 'rec_version-control', 'Change Description (Short)', 'Step Added', NULL),
(473, 'rec_version-control', 'Change Description (Short)', 'Document Deleted', NULL),
(474, 'rec_version-control', 'Change Description (Short)', 'Step Deleted', NULL),
(475, 'rec_version-control', 'Change Description (Short)', 'Details Modified', NULL),
(476, 'rec_version-control', 'Change Description (Short)', 'Approved Release', NULL),
(477, 'reg_work-instructions', 'Status', 'Superseded', 'No longer required and replaced by another WMS.'),
(478, 'reg_work-instructions', 'Repair Level', 'Workshop Maintenance', NULL),
(479, 'reg_work-instructions', 'Repair Level', 'Field Maintenance', NULL),
(480, 'reg_work-instructions', 'Repair Level', '', NULL),
(481, 'reg_work-instructions', 'Repair Level', 'Specialist Maintenance', NULL),
(482, 'rec_version-control', 'Change Description (Short)', 'Work Method Created', NULL),
(483, 'rec_tasks', 'Task Type', 'Operations', 'Any task involving the basic operations of the equipment.'),
(484, 'rec_tasks', 'Task Type', 'Support', NULL),
(485, 'reg_equipment', 'Serviceability Rating', 'Fully Functional', NULL),
(486, 'reg_equipment', 'Serviceability Rating', 'Restricted Operation', NULL),
(487, 'reg_equipment', 'Serviceability Rating', 'Do Not Use', NULL),
(488, 'reg_equipment', 'Serviceability Rating', '', NULL),
(489, 'reg_equipment', 'Serviceability Rating', 'Prepared For Transport', NULL),
(490, 'reg_projects', 'Status', 'Monitoring', NULL),
(491, 'rec_parts-order', 'Status', 'Cancelled', 'The part is no longer required to be ordered.'),
(492, 'rec_parts-order', 'Status', 'Waiting Quote', 'A quote request has been sent.'),
(493, 'rec_functions', 'Type', 'Input', NULL),
(494, 'rec_functions', 'Type', 'Output', NULL),
(495, 'rec_functions', 'Type', 'Internal Process', NULL),
(496, 'rec_functions', 'Type', '', NULL),
(497, 'rec_instruction-steps', 'PPE Required - Eye Protection Laser', 'Yes', NULL),
(498, 'rec_instruction-steps', 'PPE Required - Eye Protection Laser', '', NULL),
(499, 'rec_phases', 'Status', 'On Hold', NULL),
(500, NULL, NULL, NULL, NULL),
(501, NULL, NULL, NULL, NULL),
(502, NULL, NULL, NULL, NULL),
(503, NULL, NULL, NULL, NULL),
(504, NULL, NULL, NULL, NULL),
(505, NULL, NULL, NULL, NULL),
(506, NULL, NULL, NULL, NULL),
(507, NULL, NULL, NULL, NULL),
(508, NULL, NULL, NULL, NULL),
(509, NULL, NULL, NULL, NULL),
(510, NULL, NULL, NULL, NULL);

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
-- Table structure for table `rec_documents-release`
--

CREATE TABLE `rec_documents-release` (
  `ID` int(11) NOT NULL,
  `Document ID` int(11) DEFAULT NULL,
  `Details` text DEFAULT NULL,
  `Publisher Version ID` text DEFAULT NULL,
  `Published Date` date DEFAULT NULL,
  `Withdrawal Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_equipment-change`
--

CREATE TABLE `rec_equipment-change` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_equipment-type-documents`
--

CREATE TABLE `rec_equipment-type-documents` (
  `ID` int(11) NOT NULL,
  `Equipment Type ID` int(11) DEFAULT NULL,
  `Document ID` int(11) DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_equipment-type-known-issues`
--

CREATE TABLE `rec_equipment-type-known-issues` (
  `ID` int(11) NOT NULL,
  `Equipment Type ID` int(11) DEFAULT NULL,
  `Associated Document ID` int(11) DEFAULT NULL,
  `Issue Description` mediumtext DEFAULT NULL,
  `Solution Description` mediumtext DEFAULT NULL,
  `Production Start Date` date DEFAULT NULL,
  `Production Finish Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_equipment-work-instructions`
--

CREATE TABLE `rec_equipment-work-instructions` (
  `ID` int(11) NOT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Work Instruction ID` int(11) DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `rec_functions`
--

CREATE TABLE `rec_functions` (
  `ID` int(11) NOT NULL,
  `Design Functionality ID` int(11) DEFAULT NULL,
  `Parent Function ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Type` text DEFAULT NULL,
  `Mode` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `rec_instruction-documents`
--

CREATE TABLE `rec_instruction-documents` (
  `ID` int(11) NOT NULL,
  `Work Instructions ID` int(11) DEFAULT NULL,
  `Associated Document ID` int(11) DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_instruction-steps`
--

CREATE TABLE `rec_instruction-steps` (
  `ID` int(11) NOT NULL,
  `Work Instructions ID` int(11) DEFAULT NULL,
  `Sequence` decimal(10,1) DEFAULT NULL,
  `Short Description` text DEFAULT NULL,
  `Components` mediumtext DEFAULT NULL,
  `Inspect` mediumtext DEFAULT NULL,
  `Action` mediumtext DEFAULT NULL,
  `Measure` mediumtext DEFAULT NULL,
  `Important Point` mediumtext DEFAULT NULL,
  `Additional Information` mediumtext DEFAULT NULL,
  `Utilization` text DEFAULT NULL,
  `Associated Work Instructions ID` int(11) DEFAULT NULL,
  `PPE Required - Hearing Protection` text DEFAULT NULL,
  `PPE Required - Eye Protection` text DEFAULT NULL,
  `PPE Required - Eye Protection Laser` text DEFAULT NULL,
  `PPE Required - Hand Protection` text DEFAULT NULL,
  `PPE Required - Feet Protection` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_instruction-tools`
--

CREATE TABLE `rec_instruction-tools` (
  `ID` int(11) NOT NULL,
  `Work Instructions ID` int(11) DEFAULT NULL,
  `Associated Tool ID` int(11) DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `rec_licenses-release`
--

CREATE TABLE `rec_licenses-release` (
  `ID` int(11) NOT NULL,
  `License ID` int(11) DEFAULT NULL,
  `Commencement Date` date DEFAULT NULL,
  `Expiry Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Notes` mediumtext DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_maps`
--

CREATE TABLE `rec_maps` (
  `ID` int(11) NOT NULL,
  `Site ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `rec_monitoring-points-inspections`
--

CREATE TABLE `rec_monitoring-points-inspections` (
  `ID` int(11) NOT NULL,
  `Monitoring Point ID` int(11) DEFAULT NULL,
  `Measured Amount` decimal(11,1) DEFAULT NULL,
  `Unit of Measure` text DEFAULT NULL,
  `Measured Date` date DEFAULT NULL,
  `Measure By` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Part Controlled ID` int(11) DEFAULT NULL,
  `Inspection Point ID` text DEFAULT NULL,
  `Control ID` text DEFAULT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
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
-- Table structure for table `rec_parts-controlled`
--

CREATE TABLE `rec_parts-controlled` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_parts-critical`
--

CREATE TABLE `rec_parts-critical` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rec_parts-order`
--

CREATE TABLE `rec_parts-order` (
  `ID` int(11) NOT NULL,
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
  `Equipment ID` int(11) DEFAULT NULL,
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
  `RCA ID` int(11) DEFAULT NULL,
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
-- Table structure for table `rec_schematics-release`
--

CREATE TABLE `rec_schematics-release` (
  `ID` int(11) NOT NULL,
  `Schematic ID` int(11) DEFAULT NULL,
  `Details` text DEFAULT NULL,
  `Publisher Version ID` int(11) DEFAULT NULL,
  `Published Date` date DEFAULT NULL,
  `Withdrawal Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_services`
--

CREATE TABLE `rec_services` (
  `ID` int(11) NOT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Document ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_services-inspections`
--

CREATE TABLE `rec_services-inspections` (
  `ID` int(11) NOT NULL,
  `Service ID` int(11) DEFAULT NULL,
  `Completed Date` date DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_specifications`
--

CREATE TABLE `rec_specifications` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `rec_system-log`
--

CREATE TABLE `rec_system-log` (
  `ID` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec_tasks`
--

CREATE TABLE `rec_tasks` (
  `ID` int(11) NOT NULL,
  `Project ID` int(11) DEFAULT NULL,
  `Phase ID` text DEFAULT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Service ID` int(11) DEFAULT NULL,
  `Specification ID` int(11) DEFAULT NULL,
  `Part Controlled ID` int(11) DEFAULT NULL,
  `Work Instruction ID` int(11) DEFAULT NULL,
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
-- Table structure for table `rec_version-control`
--

CREATE TABLE `rec_version-control` (
  `ID` int(11) NOT NULL,
  `Work Instruction ID` int(11) DEFAULT NULL,
  `Identifier` text DEFAULT NULL,
  `Change Description (Short)` text DEFAULT NULL,
  `Change Description` mediumtext DEFAULT NULL,
  `Identified Date` date DEFAULT NULL,
  `Author ID` int(11) DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_contacts`
--

CREATE TABLE `reg_contacts` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_control-nodes`
--

CREATE TABLE `reg_control-nodes` (
  `ID` int(11) NOT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `IP Address` text DEFAULT NULL,
  `IO Type` text DEFAULT NULL,
  `IO Address` int(11) DEFAULT NULL,
  `Current Value` int(11) DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_design-functionality`
--

CREATE TABLE `reg_design-functionality` (
  `ID` int(11) NOT NULL,
  `Project ID` int(11) DEFAULT NULL,
  `Equipment Type ID` int(11) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents`
--

CREATE TABLE `reg_documents` (
  `ID` int(11) NOT NULL,
  `[old] Equipment Type ID` int(11) DEFAULT NULL,
  `Document Title` text DEFAULT NULL,
  `Type` text DEFAULT NULL,
  `Discipline` text DEFAULT NULL,
  `Site Relevant` text DEFAULT NULL,
  `[old] Manufacturer` text DEFAULT NULL,
  `[old] Manufacturer Part No` text DEFAULT NULL,
  `Publisher` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents-purchase-order`
--

CREATE TABLE `reg_documents-purchase-order` (
  `ID` int(11) NOT NULL,
  `Part Order ID` int(11) DEFAULT NULL,
  `Reference No` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents-purchase-request`
--

CREATE TABLE `reg_documents-purchase-request` (
  `ID` int(11) NOT NULL,
  `Part Order ID` int(11) DEFAULT NULL,
  `Reference No` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_documents-quote`
--

CREATE TABLE `reg_documents-quote` (
  `ID` int(11) NOT NULL,
  `Part Order ID` int(11) DEFAULT NULL,
  `Reference No` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_equipment`
--

CREATE TABLE `reg_equipment` (
  `ID` int(11) NOT NULL,
  `Parent Equipment ID` int(11) DEFAULT NULL,
  `Site ID` int(11) DEFAULT NULL,
  `Storage ID` int(11) DEFAULT NULL,
  `Primary System` text DEFAULT NULL,
  `Principal System` text DEFAULT NULL,
  `Equipment Name` text DEFAULT NULL,
  `Part` text DEFAULT NULL,
  `Component` text DEFAULT NULL,
  `Serial Number` text DEFAULT NULL,
  `Serviceability Rating` text DEFAULT NULL,
  `Owner ID` int(11) DEFAULT NULL,
  `Comments` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_equipment_types`
--

CREATE TABLE `reg_equipment_types` (
  `ID` int(11) NOT NULL,
  `Manufacturer` text DEFAULT NULL,
  `Manufacturer Range` text DEFAULT NULL,
  `Manufacturer Part No` text DEFAULT NULL,
  `Division` text DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_gaps`
--

CREATE TABLE `reg_gaps` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_licenses`
--

CREATE TABLE `reg_licenses` (
  `ID` int(11) NOT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `License Title` text DEFAULT NULL,
  `License Provider` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_monitoring-points`
--

CREATE TABLE `reg_monitoring-points` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_projects`
--

CREATE TABLE `reg_projects` (
  `ID` int(11) NOT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
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
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_risk-assessment-points`
--

CREATE TABLE `reg_risk-assessment-points` (
  `ID` int(11) NOT NULL,
  `Category` text DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_schematics`
--

CREATE TABLE `reg_schematics` (
  `ID` int(11) NOT NULL,
  `Document Title` text DEFAULT NULL,
  `Type` text DEFAULT NULL,
  `Discipline` text DEFAULT NULL,
  `Publisher` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_sites`
--

CREATE TABLE `reg_sites` (
  `ID` int(11) NOT NULL,
  `Description` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_storage`
--

CREATE TABLE `reg_storage` (
  `ID` int(11) NOT NULL,
  `Storage Name` text DEFAULT NULL,
  `Short Description` text DEFAULT NULL,
  `Long Description` mediumtext DEFAULT NULL,
  `Height (mm)` int(11) DEFAULT NULL,
  `Width (mm)` int(11) DEFAULT NULL,
  `Depth (mm)` int(11) DEFAULT NULL,
  `Weight (kg) Loaded` int(11) DEFAULT NULL,
  `Weight (kg) Unloaded` int(11) DEFAULT NULL,
  `Rack` text DEFAULT NULL,
  `Shelf` text DEFAULT NULL,
  `Bin` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_tools`
--

CREATE TABLE `reg_tools` (
  `ID` int(11) NOT NULL,
  `Storage ID` int(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Serial #` text DEFAULT NULL,
  `OEM` text DEFAULT NULL,
  `OEM Part #` text DEFAULT NULL,
  `Supplier` text DEFAULT NULL,
  `Supplier Part #` text DEFAULT NULL,
  `Estimated Cost ($)` decimal(10,0) DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg_work-instructions`
--

CREATE TABLE `reg_work-instructions` (
  `ID` int(11) NOT NULL,
  `Equipment ID` int(11) DEFAULT NULL,
  `Product ID` int(11) DEFAULT NULL,
  `Title` text DEFAULT NULL,
  `Type` text DEFAULT NULL,
  `Tags` text DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Repair Level` text DEFAULT NULL,
  `Status` text DEFAULT NULL,
  `Deleted Date` date DEFAULT NULL,
  `Modified Date` date DEFAULT NULL,
  `Modified By` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `User Name` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Access Tags` text DEFAULT NULL,
  `Background Color` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `User Name`, `Password`, `Access Tags`, `Background Color`) VALUES
(1, 'Administrator', '$2y$10$1bMswyW6AEEdGQKkxfLXXueGHl6sCg9p07.sB1TCnEEE8DMj27BWu', 'All;', '#9E0000'),
(2, 'General', '$2y$10$1bMswyW6AEEdGQKkxfLXXueGHl6sCg9p07.sB1TCnEEE8DMj27BWu', 'Equipment Management;', '#2E3A70');

-- --------------------------------------------------------

--
-- Table structure for table `[old]rec_parts-project`
--

CREATE TABLE `[old]rec_parts-project` (
  `ID` int(11) NOT NULL,
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
  `Modified By` text DEFAULT NULL
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
-- Indexes for table `rec_documents-release`
--
ALTER TABLE `rec_documents-release`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_equipment-change`
--
ALTER TABLE `rec_equipment-change`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rec_equipment-type-documents`
--
ALTER TABLE `rec_equipment-type-documents`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_equipment-type-known-issues`
--
ALTER TABLE `rec_equipment-type-known-issues`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_equipment-work-instructions`
--
ALTER TABLE `rec_equipment-work-instructions`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_escalation`
--
ALTER TABLE `rec_escalation`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_functions`
--
ALTER TABLE `rec_functions`
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
-- Indexes for table `rec_instruction-documents`
--
ALTER TABLE `rec_instruction-documents`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_instruction-steps`
--
ALTER TABLE `rec_instruction-steps`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_instruction-tools`
--
ALTER TABLE `rec_instruction-tools`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_key-success-criteria`
--
ALTER TABLE `rec_key-success-criteria`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_licenses-release`
--
ALTER TABLE `rec_licenses-release`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_maps`
--
ALTER TABLE `rec_maps`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_milestones`
--
ALTER TABLE `rec_milestones`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_monitoring-points-inspections`
--
ALTER TABLE `rec_monitoring-points-inspections`
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
-- Indexes for table `rec_parts-controlled`
--
ALTER TABLE `rec_parts-controlled`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_parts-critical`
--
ALTER TABLE `rec_parts-critical`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rec_parts-order`
--
ALTER TABLE `rec_parts-order`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `rec_schematics-release`
--
ALTER TABLE `rec_schematics-release`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_services`
--
ALTER TABLE `rec_services`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_services-inspections`
--
ALTER TABLE `rec_services-inspections`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_specifications`
--
ALTER TABLE `rec_specifications`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_stakeholders`
--
ALTER TABLE `rec_stakeholders`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rec_system-log`
--
ALTER TABLE `rec_system-log`
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
-- Indexes for table `rec_version-control`
--
ALTER TABLE `rec_version-control`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_contacts`
--
ALTER TABLE `reg_contacts`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_control-nodes`
--
ALTER TABLE `reg_control-nodes`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_design-functionality`
--
ALTER TABLE `reg_design-functionality`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_documents`
--
ALTER TABLE `reg_documents`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_documents-purchase-order`
--
ALTER TABLE `reg_documents-purchase-order`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reg_documents-purchase-request`
--
ALTER TABLE `reg_documents-purchase-request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reg_documents-quote`
--
ALTER TABLE `reg_documents-quote`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reg_equipment`
--
ALTER TABLE `reg_equipment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reg_equipment_types`
--
ALTER TABLE `reg_equipment_types`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_gaps`
--
ALTER TABLE `reg_gaps`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_licenses`
--
ALTER TABLE `reg_licenses`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_monitoring-points`
--
ALTER TABLE `reg_monitoring-points`
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
-- Indexes for table `reg_risk-assessment-points`
--
ALTER TABLE `reg_risk-assessment-points`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_schematics`
--
ALTER TABLE `reg_schematics`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_sites`
--
ALTER TABLE `reg_sites`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_storage`
--
ALTER TABLE `reg_storage`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_tools`
--
ALTER TABLE `reg_tools`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `reg_work-instructions`
--
ALTER TABLE `reg_work-instructions`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `[old]rec_parts-project`
--
ALTER TABLE `[old]rec_parts-project`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fnc_options`
--
ALTER TABLE `fnc_options`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;

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
-- AUTO_INCREMENT for table `rec_documents-release`
--
ALTER TABLE `rec_documents-release`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_equipment-change`
--
ALTER TABLE `rec_equipment-change`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_equipment-type-documents`
--
ALTER TABLE `rec_equipment-type-documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_equipment-type-known-issues`
--
ALTER TABLE `rec_equipment-type-known-issues`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_equipment-work-instructions`
--
ALTER TABLE `rec_equipment-work-instructions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_escalation`
--
ALTER TABLE `rec_escalation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_functions`
--
ALTER TABLE `rec_functions`
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
-- AUTO_INCREMENT for table `rec_instruction-documents`
--
ALTER TABLE `rec_instruction-documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_instruction-steps`
--
ALTER TABLE `rec_instruction-steps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_instruction-tools`
--
ALTER TABLE `rec_instruction-tools`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_key-success-criteria`
--
ALTER TABLE `rec_key-success-criteria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_licenses-release`
--
ALTER TABLE `rec_licenses-release`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_maps`
--
ALTER TABLE `rec_maps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_milestones`
--
ALTER TABLE `rec_milestones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_monitoring-points-inspections`
--
ALTER TABLE `rec_monitoring-points-inspections`
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
-- AUTO_INCREMENT for table `rec_parts-controlled`
--
ALTER TABLE `rec_parts-controlled`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_parts-critical`
--
ALTER TABLE `rec_parts-critical`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_parts-order`
--
ALTER TABLE `rec_parts-order`
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
-- AUTO_INCREMENT for table `rec_schematics-release`
--
ALTER TABLE `rec_schematics-release`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_services`
--
ALTER TABLE `rec_services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_services-inspections`
--
ALTER TABLE `rec_services-inspections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_specifications`
--
ALTER TABLE `rec_specifications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_stakeholders`
--
ALTER TABLE `rec_stakeholders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec_system-log`
--
ALTER TABLE `rec_system-log`
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
-- AUTO_INCREMENT for table `rec_version-control`
--
ALTER TABLE `rec_version-control`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_contacts`
--
ALTER TABLE `reg_contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_control-nodes`
--
ALTER TABLE `reg_control-nodes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_design-functionality`
--
ALTER TABLE `reg_design-functionality`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_documents`
--
ALTER TABLE `reg_documents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_documents-purchase-order`
--
ALTER TABLE `reg_documents-purchase-order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_documents-purchase-request`
--
ALTER TABLE `reg_documents-purchase-request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_documents-quote`
--
ALTER TABLE `reg_documents-quote`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_equipment`
--
ALTER TABLE `reg_equipment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_equipment_types`
--
ALTER TABLE `reg_equipment_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_gaps`
--
ALTER TABLE `reg_gaps`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_licenses`
--
ALTER TABLE `reg_licenses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_monitoring-points`
--
ALTER TABLE `reg_monitoring-points`
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
-- AUTO_INCREMENT for table `reg_risk-assessment-points`
--
ALTER TABLE `reg_risk-assessment-points`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_schematics`
--
ALTER TABLE `reg_schematics`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_sites`
--
ALTER TABLE `reg_sites`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_storage`
--
ALTER TABLE `reg_storage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_tools`
--
ALTER TABLE `reg_tools`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg_work-instructions`
--
ALTER TABLE `reg_work-instructions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `[old]rec_parts-project`
--
ALTER TABLE `[old]rec_parts-project`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
