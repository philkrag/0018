
<style type="text/css">

/* vertical-align: text-top; */

#Watermark_Div {
position: fixed;
width: 100%;
height: 100%;
}

.test1{	
	border: none;
  border-bottom: 1px dotted #c4c4c4;
  color: #fff;
  background-color: #fff;
  height: 10px;
  width: 100%;
}

#Watermark_Image {
display: block;

padding-block: 25%; 
margin-left: auto;
margin-right: auto;
transform: rotate(-45deg);
height: 800px;
opacity: 0.1;
filter: grayscale(100%);
}


#Print_Stamp_Div {
position: fixed;
top: 120px;
right: 0px;
transform: rotate(90deg);
opacity: 0.05;
}


#Print_Mark_Upper_Left {
position: fixed;
top: 50px;
left: 50px;
font-size: 40px;
opacity: 0.05;
}

#Print_Mark_Lower_Right {
position: fixed;
bottom: 50px;
right: 50px;
font-size: 40px;
opacity: 0.05;
}



body  {   
/*font-family: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFont, "Roboto", "Helvetica Neue", sans-serif;*/
font-family: Arial, Helvetica, sans-serif;
font-size: 12px;
}


h1. {   
color: rgb(0,0,0);
/*font-family: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFont, "Roboto", "Helvetica Neue", sans-serif;*/
font-family: Arial, Helvetica, sans-serif;
font-size: 32px;
font-weight: 600;
}

.Heading_2 {   
color: rgb(0,0,0);
font-family: Arial, Helvetica, sans-serif;
font-size: 24px;
}

.Heading_3 {   
color: rgb(100,100,100);
font-family: Arial, Helvetica, sans-serif;
font-size: 16px;
}


h1._Report {   
color: rgb(0,0,0);
/*font-family: "Segoe UI", "Segoe UI Web (West European)", "Segoe UI", -apple-system, BlinkMacSystemFont, "Roboto", "Helvetica Neue", sans-serif;*/
font-family: Arial, Helvetica, sans-serif;
font-size: 32px;
font-weight: 600;
}

.Heading_2_Report {   
color: rgb(0,0,0);
font-family: Arial, Helvetica, sans-serif;
font-size: 24px;
}

.Heading_3_Report {   
color: rgb(0,0,0);
font-family: Arial, Helvetica, sans-serif;
font-size: 16px;
}


/* MAIN MENU ITEMS */
.Menu_Icon_Format{
	
	font-size:30px;
	cursor:pointer;	
	padding: 5px 5px 5px 5px;	
	vertical-align: center;
	color: rgb(0,0,0);
	
}


/* DETAIL SECTION ITEMS */
.Details_Div {
background-color: rgb(250,250,250);
}

.Details_Div_Report {
background-color: rgb(255, 255, 255);
}

.Details_Table_Report{	
background-color: rgb(0, 0, 0);
}

.Details_Options_Heading {
color: rgb(80,80,80);
font-weight: bold;
text-align: right;
padding: 5px 5px 5px 5px;
background-color: rgb(255,255,255);
vertical-align:top;
} 

.Details_Label_Cell {
color: rgb(80,80,80);
font-weight: bold;
text-align: left;
padding: 5px 5px 5px 5px;
background-color: rgb(240,240,240);
vertical-align:top;
} 

.Details_Label_Cell_Report {
background-color: rgb(255,255,255);
color:  rgb(0,0,0);
font-weight: bold;
padding: 5px 5px 5px 5px;
text-align: left;
} 

.Details_Column_Heading {
color: rgb(80,80,80);
font-weight: bold;
text-align: left;
padding: 5px 5px 5px 5px;
background-color: rgb(240,240,240);
} 

.Details_Column_Heading_Report {
background-color: rgb(240,240,240);
color:  rgb(0,0,0);
font-weight: bold;
padding: 5px 5px 5px 5px;
text-align: left;
} 

.Details_Value_Cell{
	
}

.Details_Value_Cell_Report{
background-color: rgb(255,255,255);
color:  rgb(0,0,0);
padding: 5px 5px 5px 5px;
text-align: left;
}


/* SEARCH SECTION ITEMS */
.Search_Column_Heading {
color: rgb(255,255,255);
font-weight: bold;
text-align: left;
padding: 5px 5px 5px 5px;
/* background-color: rgb(49, 88, 147); */
background-color: <?php echo $_SESSION["Background_Color"]; ?>;
} 

.Search_Label_Cell {
color: rgb(80,80,80);
font-weight: bold;
text-align: left;
padding: 5px 5px 5px 5px;
background-color: rgb(240,240,240);
vertical-align:top;
} 

.Search_Label_Cell_Highlight {
color: rgb(80,80,80);
font-weight: bold;
text-align: left;
padding: 5px 5px 5px 5px;
background-color: rgb(255,255,200);
vertical-align:top;
} 


/* LISTING SECTION ITEMS */
.List_Div {
background-color: rgb(250,250,250);
}

.List_Div_Report {
background-color: rgb(255, 255, 255);
}

.List_Table {

}

table.List_Table tr:hover td{
background-color: rgb(255,255,255, 1.0);

}

.List_Table_Report {
background-color: rgb(0,0,0);
}

.List_Div_Report {
background-color: rgb(255,255,255);
}

.List_Label_Cell {
color: rgb(80,80,80);
font-weight: bold;
text-align: left;
padding: 5px 5px 5px 5px;
background-color: rgb(240,240,240);
}

.List_Label_Cell_Report {
color: rgb(0,0,0);
font-weight: bold;
text-align: left;
padding: 5px 5px 5px 5px;
background-color: rgb(240,240,240);
}

.List_Content_Cell {
color: rgb(80,80,80);
vertical-align: top;
padding: 5px 5px 5px 5px;
background-color: rgb(245,245,245);
} 

.List_Content_Cell_Report {
color: rgb(0,0,0);
vertical-align: top;
padding: 5px 5px 5px 5px;
background-color: rgb(255,255,255);
} 

.List_Content_Cell_Green {
color: rgb(80,80,80);
/*background-color: rgba(160,240,110,1.0);*/
background-color: rgba(153,230,153,1.0);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Green_Report {
color: rgb(0,0,0);
background-color: rgba(153,230,153,1.0);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Green_Stripes {
background: linear-gradient(45deg, rgba(255,255,255,1.0),  rgba(160,240,110,1.0) 100px);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Green_Stripes_Report {
background: linear-gradient(45deg, rgba(255,255,255,1.0),  rgba(160,240,110,1.0) 100px);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Yellow {
background-color: rgba(255,240,110, 1.0);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Yellow_Report {
background-color: rgba(255,240,110, 1.0);
color: rgb(0,0,0);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Orange {
background-color: rgba(255, 210, 110, 1.0);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Orange_Report {
background-color: rgba(255, 210, 110, 1.0);
color: rgb(0,0,0);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Red {
background-color: rgba(255, 120, 110, 1.0);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Red_Report {
background-color: rgba(255, 120, 110, 1.0);
color: rgb(255,255,255);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Blue {
/*background-color: rgba(110, 190, 255, 1.0);*/
background-color: rgba(128, 204, 255, 1.0);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Blue_Report {
background-color: rgba(128, 204, 255, 1.0);
color: rgb(0,0,0);
padding: 5px 5px 5px 5px;
vertical-align: top;
}


.List_Content_Cell_Dark_Grey {
background-color: rgb(220,220, 220);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Dark_Grey_Report {
background-color: rgb(220,220, 220);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Purple {
background-color: rgb(200,110,255);
color: rgb(80,80,80);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Content_Cell_Purple_Report {
background-color: rgb(200,110,255);
color: rgb(0,0,0);
padding: 5px 5px 5px 5px;
vertical-align: top;
}

.List_Open_Cell {
color: rgb(80,80,80);
font-weight: bold;
vertical-align: top;
background-color: rgb(240,240,240);
} 

.List_Open_Cell_Report {
color: rgb(0,0,0);
font-weight: bold;
vertical-align: top;
background-color: rgb(255,255,255);
} 

.List_SQL_Script_Cell {
color: rgb(80,80,80);
font-style: italic;
background-color: rgb(255,255,200);
} 


/* REPORT SECTION ITEMS */

.Report_Basic_Cell { /*temp guess*/

background-color: rgb(255,255,255);
color: rgb(0,0,0);
padding: 10px 0px 10px 10px;
text-align:left;
vertical-align:top;
}

.Report_Sub_Heading_Cell {/*temp guess*/
background-color: rgb(255,255,255);
color: rgb(0,0,0);
font-style: italic;
padding: 10px 10px 10px 0px;
text-align:right;
vertical-align:top;
}


/* INPUT SECTION ITEMS */
.Input_Medium_Text_Format {
  width: 99%;
  height: 200px;
  font-family: Arial, Helvetica, sans-serif;  
} 

.Input_Text_Format {
  width: 98.9%;
} 

.Input_Combobox_Format {
  width: 99.5%;
} 

.Input_Number_Format {
  width: 98.9%;
} 

.Input_Date_Format {
  width: 99%;
} 

.Submission_Button_Format {
  width: 99%;
} 


.New_Button_Format{
  width: 100%;
}

.Extend_Button_Format{
  width: 100%;
}


/* MENU */

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /* background-color: rgb(49, 88, 147); */
  background-color: <?php echo $_SESSION["Background_Color"]; ?>;
  overflow-x: hidden;
  transition: 0.0s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: rgb(255, 255, 255);
  display: block;
  transition: 0.0s;
}

.sidenav a:hover {
  color: rgb(255,255,200);
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.Side_Menu_Login_Section {
  padding:0px 30px 0px 30px;
  /* background-color:rgb(49, 88, 147); */
  background-color: <?php echo $_SESSION["Background_Color"]; ?>;
  border: 1px solid white;
  width:100%;
}



#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
