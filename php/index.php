<?php 
	//error_reporting(E_ERROR);
    if (isset($_FILES['F12']) &&($_FILES['F12']['error'] == UPLOAD_ERR_OK)) 
	{
		$savefolder = "../excelfiles";
		$allowedtypes = array ("application/vnd.ms-excel");
		$flag = 0; 
		$error = 0;
		$today = getdate();
        $thefile = $savefolder . "/" . $today[0] . $today[1]. $today[3]. $_FILES['F12']['name'];
		if (in_array ($_FILES['F12']['type'], $allowedtypes))
		{
			define('SPREADSHEET_EXCEL_SERIAL_NO',	"No");
			define('SPREADSHEET_EXCEL_USN',         "USN");
			define('SPREADSHEET_EXCEL_NAME_STU',    "NAME");
			define('SPREADSHEET_EXCEL_IA_MARK',     "IA");
			
			$IAsi 	 = array();
			$USN 	 = array();
			$StuName = array();
			$IAmark  = array();
			
			require_once("reader.php");	
			$reader=new Spreadsheet_Excel_Reader();
			$reader->read($_FILES['F12']['tmp_name']);	
			
		
			if ($reader->sheets[0]['numRows'] > 0 && $reader->sheets[0]['numCols'])
			{
				$x=1; $temp_i = 1;
				while($x<=$reader->sheets[0]['numRows']) 
				{
					$y=1;
					while($y<=$reader->sheets[0]['numCols']) 
					{
						if($reader->sheets[0]['cells'][$x][$y]   ==  SPREADSHEET_EXCEL_SERIAL_NO &&
						   $reader->sheets[0]['cells'][$x][$y+1] ==  SPREADSHEET_EXCEL_USN &&
						   $reader->sheets[0]['cells'][$x][$y+2] ==  SPREADSHEET_EXCEL_NAME_STU &&
						   $reader->sheets[0]['cells'][$x][$y+9] ==  SPREADSHEET_EXCEL_IA_MARK)
						{
						 $x += 1;  
						 	while($reader->sheets[0]['cells'][$x][$y] != '')
							{
								$IAsi[$temp_i]    = $reader->sheets[0]['cells'][$x][$y];
								$USN[$temp_i]     = $reader->sheets[0]['cells'][$x][$y+1];
								$StuName[$temp_i] = $reader->sheets[0]['cells'][$x][$y+2];
								$IAmark[$temp_i]  = $reader->sheets[0]['cells'][$x][$y+9];
								$x++;
								$temp_i++; 
								$flag++;
					 		}
						}
						$y++;
					}
					$x++;
				}
			}
			else
			{
				$error = 1;			  
			}
        }
		else 
		{
			$error = 2;
		}
        
    } 
	else 
	{
        $error = 3;
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Intermediate file</title>
<script src="../js/index.js" type="text/javascript" language="javascript"></script>
<link href="../css/index.css" type="text/css" rel="stylesheet" />
</head>
<body class="Main2" id="BodyID" onload="javascript:ChangBackground();">
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<div id="Square" class="Square"><!-- 800px wide layout-->

<!--<div id="TopBorder" class="TopBorder"></div> top header-->
<!-- container of menu bar -->
<div id="UpperBox" class="UpperBox2">
<!--<div id="MenuBar" class="MenuBar">
<div id="Link" class="Link"><a onClick="javascript:void(0);">
<img src="../IMAGES/help.png" width="80" height="25"/></a></div>
<div id="Link" class="Link"><a onClick="javascript:void(0);">
<img src="../IMAGES/entry.png" width="80" height="25"/></a></div>
</div>
<!-- end of menu bar  -->
</div>
<!-- end of container of menu bar-->

<div id="Display" class="Display"><!-- Content display -->
<div id="DivTv" class="DivTvScroll"><!-- right Pane content column --><br />
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2">
	<form  name="formformat">
		<label>Select format of sheet : </label>
		<select name="formatA4">
              <option value="1" selected="selected">Format one</option>
              <option value="1">Format Two</option>
            </select>	
	</form></td>
  </tr>
    <tr>
    <td colspan="2">
	<table border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr>
          <td  valign="bottom">	
		  <div id="Divbut" style="color:#0000CC; padding:10px 10px 10px 10px;">	  </div>	  </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
		  <label>
            <input type="button" name="Button" value="Create" onClick="
				var fields = new String();
				var obj = new Object();
				obj = document.getElementById('DivPara');
				fields = obj.innerHTML;
				javascript:process(fields);
				"/>
          </label>		 
		   </td>
        </tr>
      </table>	 
	   </td>
  </tr>
  <tr>
    <td colspan="2">
		<?php
		if($flag > 0)
		{
			print '<div id="DivTable" style="width:720px;>';
				  
			print '<div  id="DivRow" style="width:100%; height:30px;">';

			print '<div id="DivcolNO" style="border-bottom:solid 1px; width:50px;'.
				  'height:inherit;text-align:center;float:left;">' . SPREADSHEET_EXCEL_SERIAL_NO .'</div>';

			print '<div id="DivcolUSN" style=";border-bottom:solid 1px; width:150px;'.
			      'height:inherit; text-align:center; float:left;">'. SPREADSHEET_EXCEL_USN .'</div>';

			print '<div id="DivcolNAME" style="border-bottom:solid 1px; width:460px; height:inherit;'.
			      'text-align:left; float:left;">'.SPREADSHEET_EXCEL_NAME_STU.'</div>';

			print '<div id="DivcolIA" style="border-bottom:solid 1px; width:50px;'.
				  'height:inherit;text-align:center; float:left;">'.SPREADSHEET_EXCEL_IA_MARK.'</div></div>';

			for ($i = 1; $i <= count($IAsi); $i++)
			{
				print '<div  id="DivRow" style="width:100%; height:30px;">';

				print '<div id="DivcolNO'.$i.'" style="border-bottom:solid 1px; width:50px;'.
					  'height:inherit; text-align:center; float:left;">' . $IAsi[$i] .'</div>';

				print '<div id="DivcolUSN'.$i.'" style="border-bottom:solid 1px; width:150px;'.
					  'height:inherit; text-align:center; float:left;">'. $USN[$i] .'</div>';

				print '<div id="DivcolNAME'.$i.'" style="border-bottom:solid 1px; width:460px; height:inherit;'.
					  'text-align:left; float:left;">'.$StuName[$i].'</div>';
			  
				print'<div id="DivcolIA'.$i.'" style="border-bottom: solid 1px; width:50px;'.
					'height:inherit;text-align:center; float:left;">'.$IAmark[$i].'</div></div>';
			} 
			print "</div>";
		}
		 //move_uploaded_file($_FILES['F12']['tmp_name'], $thefile);
		?>	
		<div id="DivTotal" style="visibility:hidden"><?php print $i;	?></div>		

		<div id="DivPara" style="visibility:hidden">		
		<?php 
			print $i;
			foreach ($_POST as &$value) {
    		$val .= $value ."_";
			}
			echo ",$val";
		?>
</div>		
	</td>
  </tr>
   <tr>
    <td colspan="2"><div id="DivError" style="color:#0000CC;padding:10px 10px 10px 10px;">
	<?php
			switch($error)
				{
				  case 1: 
				  	print "ERROR 1: Invalid file.:-". $_FILES['F12']['name'] ." has no content<br>";
				  	break;
				  case 2: 
				  	print "ERROR 2:  Couldn't move file to server"."<br>";
				  	break;
				  case 3: 
				   	print "ERROR 3: Invalid file type save your file in xls 2003 format."."<br>";
				  	break;
				}
			?>		  
	  </div>
	</td>
  </tr>
</table>

</div><!-- end of right Pane content column -->
</div><!-- end of Content display -->
</div><!-- end of 800px wide layout -->
</td>
</tr>
</table>
</body>
</html>
