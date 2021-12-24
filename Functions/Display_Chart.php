<?php
// /////////////////////////////////////////////////////////////////////// COPYRIGHT NOTICE

// This file is part of OS-Management-Portal.

// OS-Management-Portal is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// OS-Management-Portal is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with OS-Management-Portal.  If not, see <http://www.gnu.org/licenses/>.

// /////////////////////////////////////////////////////////////////////// COPYRIGHT NOTICE

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL

// PAGE CREATED BY: Phillip Kraguljac
// PAGE CREATED DATE: 2020-09-21

// DATE   		|| NAME 					|| MODIFICATION
// 2020-09-21 	|| Phillip Kraguljac 		|| v1.0.

// /////////////////////////////////////////////////////////////////////// VERSION CONTROL
?>


<script src="/Support/ChartJS/Chart.js"></script>
<script src="/Support/ChartJS/Chart.min.js"></script>

<?php // ////////////////////////////// RADAR TABLE

function Chart_Data_0001($Database_Connection, $Display_Array){

// DATA COLLECTION

if(!isset($Display_Array['ID']))($Display_Array['ID']=NULL);
if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']=false;}
if(!isset($Display_Array['New_Page_At_Print'])){$Display_Array['New_Page_At_Print']=false;}
if(!isset($Display_Array['Table_Major_Heading']))($Display_Array['Table_Major_Heading']="");
if(!isset($Display_Array['Table_Minor_Heading']))($Display_Array['Table_Minor_Heading']="");
if(!isset($Display_Array['Display_Items']))($Display_Array['Display_Items']="");
if(!isset($Display_Array['Column_Width']))($Display_Array['Column_Width']="");
if(!isset($Display_Array['Item_Links']))($Display_Array['Item_Links']="");
if(!isset($Display_Array['Chart_Column']))($Display_Array['Chart_Column']="");
if(!isset($Display_Array['Chart_Alignment']))($Display_Array['Chart_Alignment']="left");

if(!isset($Display_Array['MySQL_Action']))($Display_Array['MySQL_Action']="");
if(!isset($Display_Array['MySQL_Table']))($Display_Array['MySQL_Table']="");
if(!isset($Display_Array['MySQL_Filter']))($Display_Array['MySQL_Filter']="");
if(!isset($Display_Array['MySQL_Order']))($Display_Array['MySQL_Order']="");
if(!isset($Display_Array['MySQL_Limit']))($Display_Array['MySQL_Limit']="");
if(!isset($Display_Array['MySQL_Offset']))($Display_Array['MySQL_Offset']="");

$MySQL_Command_Script = "";
$MySQL_Command_Script =
$Display_Array['MySQL_Action'].
$Display_Array['MySQL_Table'].
$Display_Array['MySQL_Filter'].
$Display_Array['MySQL_Order'].
$Display_Array['MySQL_Limit'].
$Display_Array['MySQL_Offset'];

$MySQL_Result = mysqli_query($Database_Connection, $MySQL_Command_Script);

$Temp_Stat_Array = array();

if (mysqli_num_rows($MySQL_Result) > 0) {
while($MySQL_Row = mysqli_fetch_assoc($MySQL_Result)) {	
	$Incoming_Data = $MySQL_Row[$Display_Array['Chart_Column']];
	if($MySQL_Row[$Display_Array['Chart_Column']]==""){$Incoming_Data="-";}
	if(isset($Temp_Stat_Array[$Incoming_Data])){		
	$Temp_Stat_Array[$Incoming_Data] = $Temp_Stat_Array[$Incoming_Data] + 1;
	}else{
		array_push($Temp_Stat_Array, $Incoming_Data);
		$Temp_Stat_Array[$Incoming_Data] = 1;
	}
}
}

// CHART FUNCTION
// JAVASCRIPT AUTHOR: www.chartjs.org

$Preset_Colours = array(
"rgba(252, 186, 3, 0.8)",
"rgba(94, 163, 3, 0.8)",
"rgba(219, 22, 0, 0.8)",
"rgba(49, 88, 147, 0.8)",
"rgba(0, 191, 191, 0.8)",
"rgba(110, 0, 219, 0.8)",
"rgba(191, 0, 224, 0.8)",
"rgba(194, 2, 123, 0.8)",
"rgba(220, 180, 0, 0.8)",
"rgba(0, 190, 20, 0.8)"
);

$Label_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Label_Data = $Label_Data."'".$Temp_Stat_Array[$x]."'"; if($x != count($Temp_Stat_Array)/2-1){$Label_Data = $Label_Data.", "; }}
// echo $Label_Data."<br>";

$Value_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Value_Data = $Value_Data.$Temp_Stat_Array[$Temp_Stat_Array[$x]]; if($x != count($Temp_Stat_Array)/2-1){$Value_Data = $Value_Data.", "; }}
// echo $Value_Data."<br>";

$Colour_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Colour_Data = $Colour_Data."'".$Preset_Colours[$x]."'"; if($x != count($Temp_Stat_Array)/2-1){$Colour_Data =  $Colour_Data.", "; }}
// echo $Colour_Data."<br>";

?>

<?php $New_Page_Inset = ""; if($Display_Array['New_Page_At_Print']){$New_Page_Inset = "page-break-before: always";}; ?>
<canvas id="<?php echo $Display_Array['Table_Major_Heading']; ?>" width="100%" height="100%" style="padding: 0px 0px 0px 0px; max-width:350px; max-height:350px; <?php echo $New_Page_Inset; ?>"></canvas>

<script>
var ctx = document.getElementById('<?php echo $Display_Array['Table_Major_Heading']; ?>');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: [
		
		<?php echo $Label_Data; ?>
		],
        datasets: [{
            label: '',
            data: [
			<?php echo $Value_Data; ?>
			],
			
			backgroundColor: [
			<?php echo $Colour_Data; ?>
			],
			
            borderColor: [
			<?php echo $Colour_Data; ?>
            ],
            borderWidth: 1
        }]
    },
    options: {
		title: {
            display: true,
			position: '<?php echo $Display_Array['Chart_Alignment']; ?>',
			
			padding: '5',
            text: '<?php echo $Display_Array['Table_Major_Heading']; ?>'
        },
		legend: {
            display: false,            
        },
		
        
    }
});
</script>

<?php

}

?>


<?php // ////////////////////////////// BAR TABLE

function Chart_Data_0002($Database_Connection, $Display_Array){

// DATA COLLECTION

if(!isset($Display_Array['ID']))($Display_Array['ID']=NULL);
if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']=false;}
if(!isset($Display_Array['New_Page_At_Print'])){$Display_Array['New_Page_At_Print']=false;}
if(!isset($Display_Array['Table_Major_Heading']))($Display_Array['Table_Major_Heading']="");
if(!isset($Display_Array['Table_Minor_Heading']))($Display_Array['Table_Minor_Heading']="");
if(!isset($Display_Array['Display_Items']))($Display_Array['Display_Items']="");
if(!isset($Display_Array['Column_Width']))($Display_Array['Column_Width']="");
if(!isset($Display_Array['Item_Links']))($Display_Array['Item_Links']="");
if(!isset($Display_Array['Chart_Column']))($Display_Array['Chart_Column']="");
if(!isset($Display_Array['Chart_Alignment']))($Display_Array['Chart_Alignment']="Left");

if(!isset($Display_Array['MySQL_Action']))($Display_Array['MySQL_Action']="");
if(!isset($Display_Array['MySQL_Table']))($Display_Array['MySQL_Table']="");
if(!isset($Display_Array['MySQL_Filter']))($Display_Array['MySQL_Filter']="");
if(!isset($Display_Array['MySQL_Order']))($Display_Array['MySQL_Order']="");
if(!isset($Display_Array['MySQL_Limit']))($Display_Array['MySQL_Limit']="");
if(!isset($Display_Array['MySQL_Offset']))($Display_Array['MySQL_Offset']="");

$MySQL_Command_Script = "";
$MySQL_Command_Script =
$Display_Array['MySQL_Action'].
$Display_Array['MySQL_Table'].
$Display_Array['MySQL_Filter'].
$Display_Array['MySQL_Order'].
$Display_Array['MySQL_Limit'].
$Display_Array['MySQL_Offset'];

$MySQL_Result = mysqli_query($Database_Connection, $MySQL_Command_Script);

$Temp_Stat_Array = array();

if (mysqli_num_rows($MySQL_Result) > 0) {
while($MySQL_Row = mysqli_fetch_assoc($MySQL_Result)) {	
	$Incoming_Data = $MySQL_Row[$Display_Array['Chart_Column']];
	if($MySQL_Row[$Display_Array['Chart_Column']]==""){$Incoming_Data="-";}
	if(isset($Temp_Stat_Array[$Incoming_Data])){		
	$Temp_Stat_Array[$Incoming_Data] = $Temp_Stat_Array[$Incoming_Data] + 1;
	}else{
		array_push($Temp_Stat_Array, $Incoming_Data);
		$Temp_Stat_Array[$Incoming_Data] = 1;
	}
}
}

// CHART FUNCTION
// JAVASCRIPT AUTHOR: www.chartjs.org

$Preset_Colours = array(
"rgba(252, 186, 3, 0.8)",
"rgba(94, 163, 3, 0.8)",
"rgba(219, 22, 0, 0.8)",
"rgba(49, 88, 147, 0.8)",
"rgba(0, 191, 191, 0.8)",
"rgba(110, 0, 219, 0.8)",
"rgba(191, 0, 224, 0.8)",
"rgba(194, 2, 123, 0.8)",
"rgba(220, 180, 0, 0.8)",
"rgba(0, 190, 20, 0.8)"
);

$Label_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Label_Data = $Label_Data."'".$Temp_Stat_Array[$x]."'"; if($x != count($Temp_Stat_Array)/2-1){$Label_Data = $Label_Data.", "; }}
// echo $Label_Data."<br>";

$Value_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Value_Data = $Value_Data.$Temp_Stat_Array[$Temp_Stat_Array[$x]]; if($x != count($Temp_Stat_Array)/2-1){$Value_Data = $Value_Data.", "; }}
// echo $Value_Data."<br>";

$Colour_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Colour_Data = $Colour_Data."'".$Preset_Colours[0]."'"; if($x != count($Temp_Stat_Array)/2-1){$Colour_Data =  $Colour_Data.", "; }}
// echo $Colour_Data."<br>";

?>

<?php if($Display_Array['New_Page_At_Print']){$New_Page_Inset = "page-break-before: always";}; ?>
<canvas id="<?php echo $Display_Array['Table_Major_Heading']; ?>" width="100%" height="100%" style="padding: 0px 0px 0px 0px; max-width:350px; max-height:350px; <?php echo $New_Page_Inset; ?>"></canvas>

<script>
var ctx = document.getElementById('<?php echo $Display_Array['Table_Major_Heading']; ?>');
var myChart = new Chart(ctx, {
    type: 'bar',
	data: {
		labels: [
		
		<?php echo $Label_Data; ?>
		],
		datasets: [{
			label: '',
		data: [
			<?php echo $Value_Data; ?>
			],			
			backgroundColor: [
			<?php echo $Colour_Data; ?>
			],			
			borderColor: [
			<?php echo $Colour_Data; ?>
			],
			borderWidth: 1,			
		}]
	},
	options: {
		title: {
			display: true,
			position: '<?php echo $Display_Array['Chart_Alignment']; ?>',			
			padding: '5',
			text: '<?php echo $Display_Array['Table_Major_Heading']; ?>'
		},
		legend: {
			display: false,            
		},	
		scales: {
			yAxes: [{
				display: true,
				ticks: {
					beginAtZero: true,
				}		
			}],
		},
	},
});
</script>

<?php

}

?>



<?php // ////////////////////////////// PIE TABLE

function Chart_Data_0003($Database_Connection, $Display_Array){

// DATA COLLECTION

if(!isset($Display_Array['ID']))($Display_Array['ID']=NULL);
if(!isset($Display_Array['IS_Report'])){$Display_Array['IS_Report']=false;}
if(!isset($Display_Array['New_Page_At_Print'])){$Display_Array['New_Page_At_Print']=false;}
if(!isset($Display_Array['Table_Major_Heading']))($Display_Array['Table_Major_Heading']="");
if(!isset($Display_Array['Table_Minor_Heading']))($Display_Array['Table_Minor_Heading']="");
if(!isset($Display_Array['Display_Items']))($Display_Array['Display_Items']="");
if(!isset($Display_Array['Column_Width']))($Display_Array['Column_Width']="");
if(!isset($Display_Array['Item_Links']))($Display_Array['Item_Links']="");
if(!isset($Display_Array['Chart_Column']))($Display_Array['Chart_Column']="");
if(!isset($Display_Array['Chart_Alignment']))($Display_Array['Chart_Alignment']="Left");

if(!isset($Display_Array['MySQL_Action']))($Display_Array['MySQL_Action']="");
if(!isset($Display_Array['MySQL_Table']))($Display_Array['MySQL_Table']="");
if(!isset($Display_Array['MySQL_Filter']))($Display_Array['MySQL_Filter']="");
if(!isset($Display_Array['MySQL_Order']))($Display_Array['MySQL_Order']="");
if(!isset($Display_Array['MySQL_Limit']))($Display_Array['MySQL_Limit']="");
if(!isset($Display_Array['MySQL_Offset']))($Display_Array['MySQL_Offset']="");


$MySQL_Command_Script = "";
$MySQL_Command_Script =
$Display_Array['MySQL_Action'].
$Display_Array['MySQL_Table'].
$Display_Array['MySQL_Filter'].
$Display_Array['MySQL_Order'].
$Display_Array['MySQL_Limit'].
$Display_Array['MySQL_Offset'];

$MySQL_Result = mysqli_query($Database_Connection, $MySQL_Command_Script);

$Temp_Stat_Array = array();

if (mysqli_num_rows($MySQL_Result) > 0) {
while($MySQL_Row = mysqli_fetch_assoc($MySQL_Result)) {	
	$Incoming_Data = $MySQL_Row[$Display_Array['Chart_Column']];
	if($MySQL_Row[$Display_Array['Chart_Column']]==""){$Incoming_Data="-";}
	if(isset($Temp_Stat_Array[$Incoming_Data])){		
	$Temp_Stat_Array[$Incoming_Data] = $Temp_Stat_Array[$Incoming_Data] + 1;
	}else{
		array_push($Temp_Stat_Array, $Incoming_Data);
		$Temp_Stat_Array[$Incoming_Data] = 1;
	}
}
}

// CHART FUNCTION
// JAVASCRIPT AUTHOR: www.chartjs.org

$Preset_Colours = array(
"rgba(252, 186, 3, 0.8)",
"rgba(94, 163, 3, 0.8)",
"rgba(219, 22, 0, 0.8)",
"rgba(49, 88, 147, 0.8)",
"rgba(0, 191, 191, 0.8)",
"rgba(110, 0, 219, 0.8)",
"rgba(191, 0, 224, 0.8)",
"rgba(194, 2, 123, 0.8)",
"rgba(220, 180, 0, 0.8)",
"rgba(0, 190, 20, 0.8)"
);

$Label_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Label_Data = $Label_Data."'".$Temp_Stat_Array[$x]."'"; if($x != count($Temp_Stat_Array)/2-1){$Label_Data = $Label_Data.", "; }}
// echo $Label_Data."<br>";

$Value_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Value_Data = $Value_Data.$Temp_Stat_Array[$Temp_Stat_Array[$x]]; if($x != count($Temp_Stat_Array)/2-1){$Value_Data = $Value_Data.", "; }}
// echo $Value_Data."<br>";

$Colour_Data = "";
for ($x = 0; $x < count($Temp_Stat_Array)/2; $x++) { $Colour_Data = $Colour_Data."'".$Preset_Colours[$x]."'"; if($x != count($Temp_Stat_Array)/2-1){$Colour_Data =  $Colour_Data.", "; }}
// echo $Colour_Data."<br>";

?>

<?php if($Display_Array['New_Page_At_Print']){$New_Page_Inset = "page-break-before: always";}; ?>
<canvas id="<?php echo $Display_Array['Table_Major_Heading']; ?>" width="100%" height="100%" style="padding: 0px 0px 0px 0px; max-width:350px; max-height:350px; <?php echo $New_Page_Inset; ?>"></canvas>

<script>
var ctx = document.getElementById('<?php echo $Display_Array['Table_Major_Heading']; ?>');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
		
		<?php echo $Label_Data; ?>
		],
        datasets: [{
            label: '',
            data: [
			<?php echo $Value_Data; ?>
			],
			
			backgroundColor: [
			<?php echo $Colour_Data; ?>
			],
			
            borderColor: [
			<?php echo $Colour_Data; ?>
            ],
            borderWidth: 1
        }]
    },
    options: {
		title: {
            display: true,
			position: '<?php echo $Display_Array['Chart_Alignment']; ?>',
			
			padding: '5',
            text: '<?php echo $Display_Array['Table_Major_Heading']; ?>'
        },
		legend: {
            display: true, 
			position: 'right',
        },
		
        
    }
});
</script>

<?php

}

?>
