<?php
	error_reporting(E_ERROR);
    if(isset($_GET["sheet"]) && isset($_GET["rows"]))
	{
		$str = explode(",", $_GET["parameters"]);
		global $fields;
		$fields = explode("_", $str['1']);
		$javascript1 = "function Create_data(){var cookname = new String();var tempOBJ = new String();var HeaderHtml = new String();var FooterHtml = new String();".
					  "var Empty_rows = new String(); var restoredArray = new Array(4);var MainPage = new Object();var Obj = new Object();".
					  "Obj = document.getElementById(\"pages\"); document.cookie = 'ppkcookie2=another test; expires=Fri, 3 Aug 2001 20:47:11 UTC; path=/';".
					  "MainPage = document.createElement(\"div\");MainPage.setAttribute(\"id\",\"MainPage\");Obj.appendChild(MainPage);var DivArrayA4 = new Object();".
					  "DivArrayA4 = document.createElement(\"div\");DivArrayA4.setAttribute(\"class\",\"A4\");MainPage.appendChild(DivArrayA4);var DivArraySheets = new Object();".
					  "DivArraySheets = document.createElement(\"div\");DivArraySheets.setAttribute(\"id\",\"DivSheet\");DivArraySheets.setAttribute(\"class\",\"DivSheet\");".
					  "DivArrayA4.appendChild(DivArraySheets);var Divget = new Object();Divget = document.getElementById(\"DivSheet\");".
					  "HeaderHtml ='<div  id=\"HeaderRow1\" style=\"border:hidden; height:15px; width:706px; float:left;\">'+".
					  "'<div  id=\"TopLeftBox\" style=\"border:hidden; width:15px; height:15px; float:left; background-color:#000000;\"></div>'+".
					  "'<div  id=\"UniqueSheetNumber\" style=\"border:hidden; width:666px; height:15px; text-align:left; padding-left:5px; float:left; font-size:14px;\">".$fields['0']."</div>'+".
					  "'<div  id=\"TopRightBox\" style=\"border:hidden; width:15px; height:15px; float:left; background-color:#000000;\"></div></div>'+".
					  "'<div id=\"HeaderRow2\" style=\"border:hidden; height:65px; width:706px; float:left;\">'+".
					  "'<img src=\"../IMAGES/Vtulogo.gif\" width=\"700\" height=\"65\" /></div>'+".
					  "'<div id=\"HeaderRow3\" style=\"border:hidden; height:22px; width:706px;; font-size:18px; text-align:left; vertical-align:middle; float:left;\">'+".
					  "'<div style=\"float:left; padding-left:50px;\">Internal Assesment Marks for</div>'+".
					  "'<div  id=\"MarksFor\" style=\"border:hidden; width:350px; height:20px; text-align:left; padding-left:5px; float:left;\"></div></div>'+".
					  "'<div id=\"HeaderRow4\" style=\"border:hidden; width:706px; float:left;\">'+".
"'<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">'+".
  "'<tr>'+".
    "'<td width=\"15%\" align=\"left\"\">Sheet Number</td>'+".
    "'<td width=\"46%\">'+".
"'<div  id=\"SheetString\" style=\"border: solid 1px; width:322px; height:20px; float:left;\">'+".
"'<div  id=\"SheetString1\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString2\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString3\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString4\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString5\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString6\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString7\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString8\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString9\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString10\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString11\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString12\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString13\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'<div  id=\"SheetString14\" style=\"border-right:solid 1px; width:22px; height:20px; text-align: center; float:left; vertical-align:middle;\">&nbsp;</div>'+".
"'</div>'+".
	"'</td>'+".
    "'<td width=\"19%\" align=\"right\">Semester : </td>'+".
    "'<td width=\"20%\">".$fields['7']."</td>'+".
  "'</tr>'+".
  "'<tr>'+".
    "'<td align=\"left\"\">Region</td>'+".
    "'<td>".$fields['1']."</td>'+".
    "'<td align=\"right\">Code : </td>'+".
    "'<td>".$fields['2']."</td>'+".
  "'</tr>'+".
  "'<tr>'+".
    "'<td align=\"left\"\">College</td>'+".
    "'<td>".$fields['3']." </td>'+".
    "'<td align=\"right\">Code : </td>'+".
    "'<td>".$fields['4']."</td>'+".
  "'</tr>'+".
  "'<tr>'+".
    "'<td align=\"left\"\">Course</td>'+".
    "'<td>".$fields['5']." </td>'+".
    "'<td align=\"right\">Code : </td>'+".
    "'<td>".$fields['6']."</td>'+".
  "'</tr>'+".
  "'<tr>'+".
    "'<td align=\"left\"\">Subject</td>'+".
    "'<td>".$fields['8']."</td>'+".
    "'<td align=\"right\">&nbsp;</td>'+".
    "'<td>&nbsp;</td>'+".
  "'</tr>'+".
  "'<tr>'+".
    "'<td align=\"left\"\">Subject code</td>'+".
    "'<td>".$fields['9']."</td>'+".
    "'<td align=\"right\">Maximum Marks : </td>'+".
    "'<td>".$fields['10']."</td>'+".
  "'</tr>'+".
"'</table>'+".
"'</div>';".
					  
					  "Empty_rows = '<div style=\" border:solid 1px; width:230px; height:28px; float:left;font-size:11px; padding:2px 2px 0px 2px;\">'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"20\"/></div>'+
'</div>'+

'<div  style=\" border:solid 1px; width:143px; height:30px; float:left;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"143\" height=\"29\"  />'+
'</div>'+

'<div style=\" border:solid 1px; width:319px; height:30px; float:left; font-size:11px;\">'+
'<div style=\" border-right: solid 1px; width:20px; height:27px; float:left; text-align:center;padding:2px 2px 2px 2px;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"5px\"  />A</div>'+

'<div style=\" border-right: solid 1px; width:16px; height:27px; float:left; text-align:center;padding:2px;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"18px\"  /></div>'+

'<div style=\" border-right: solid 1px; width:16px; height:27px; float:left; text-align:center;padding:2px;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"18px\"  /></div>'+

'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />0</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />1</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />2</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />3</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />4</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />5</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />0</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />1</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />2</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />3</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />4</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />5</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />6</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />7</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />8</div>'+
'<div style=\" border-right: hidden; width:15px; height:20px; float:left; text-align:center;\">'+
'<img src=\"../IMAGES/numbers/space.gif\" width=\"13px\" height=\"10px\"  />9</div>'+
'</div>';".
					  "FooterHtml ='<div id=\"FooterRow1\" style=\"border:hidden; height:20px; width:706px; float:left;\"> &nbsp;</div>'+".
					  "'<div id=\"FooterRow2\" style=\"border:hidden; height:20px; width:706px; float:left;\"> Signature with date</div>'+".
					  "'<div id=\"FooterRow3\" style=\"border:hidden; height:20px; width:706px; float:left;\">'+".
					  "'<div style=\"border: hidden; width:200px; float: right; height:20px; padding:0px 0px 0px 10px;\">'+".
					  "'<div style=\"border-bottom:solid 1px; width:180px; float: right; height:20px; \">&nbsp;</div></div>'+".
					  "'<div style=\"border: hidden; width:200px; float: right; height:20px; padding:0px 0px 0px 0px;\">'+".
					  "'<div style=\"border-bottom:solid 1px; width:180px; float: right; height:20px; \">&nbsp;</div></div>'+".
					  "'<div style=\"border: hidden; width:200px; float: right; height:20px; padding:0px 0px 0px 0px;\">'+";
					  
		$javascript2 = "'<div style=\"border-bottom:solid 1px; width:180px; float: right; height:20px; \">&nbsp;</div></div></div>'+".
					  "'<div id=\"FooterRow4\" style=\"border:hidden; height:20px; width:706px; float:left; font-size:12px;\">'+".
					  "'<div style=\"border-right:hidden; width:200px; text-align: center; float: right; height:20px; \"> Staff member(s)Incharge</div>'+".
					  "'<div style=\"border-right:hidden; width:200px; text-align: center; float: right; height:20px; \"> HOD</div>'+".
					  "'<div style=\"border-right:hidden; width:200px; text-align: center; float:right; height:20px; \"> Principal</div></div>'+".
					  "'<div id=\"FooterRow5\" style=\"border:hidden; height:25px; width:706px; float:left;font-size:12px;\"> &nbsp;Instruction for marks<br />'+".
					  "'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Example</div>'+".
					  "'<div id=\"FooterRow6\" style=\"border:hidden; height:20px; width:706px;float:left; font-size:11px;\">'+".
					  "'<div style=\"border: hidden; height:20px; float:left;\">'+".
					  "'<div style=\"float:left; width:310px;\">For candidates absent, darken the circle under the column &quot;A&quot;&nbsp;</div>'+".
					  "'<div style=\" border:hidden;width:17px; height:20px; float:left; text-align:center;\">'+".
					  "'<img  src=\"../IMAGES/numbers/shade.gif\" alt=\"sam\" width=\"16\" height=\"18\"></div>'+".
					  "'<div style=\" border:solid 1px; width:17px; height:20px; float:left; text-align:center;\">'+".
					  "'<img  src=\"../IMAGES/numbers/space.gif\" alt=\"sam\" width=\"16\" height=\"18\"></div>'+".
					  "'<div style=\" border: solid 1px; width:17px; height:20px; float:left; text-align:center;\">'+".
					  "'<img  src=\"../IMAGES/numbers/space.gif\" alt=\"sam\" width=\"16\" height=\"18\"></div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">0</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">1</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">2</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">3</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">4</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">5</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">0</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">1</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">2</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">3</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">4</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">5</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">6</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">7</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">8</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">9</div></div></div>'+".
					  "'<div id=\"FooterRow7\" style=\"border:hidden; height:20px; width:706px;float:left;font-size:12px;\"> '+".
					  "'<div style=\"border: hidden; height:20px; float:left;\">'+".
					  "'<div style=\"float:left; width:310px;\">'+".
					  "'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+".
					  "'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+".
					  "'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+".
					  "'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+".
					  "'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+".
					  "'25 is to be entered as</div>'+".
					  "'<div style=\" border:hidden;width:17px; height:20px; float:left; text-align:center;\">A</div>'+".
					  "'<div style=\" border:solid 1px; width:17px; height:20px; float:left; text-align:center;\">2</div>'+".
					  "'<div style=\" border: solid 1px; width:17px; height:20px; float:left; text-align:center;\">5</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">0</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">1</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">'+".
					  "'<img  src=\"../IMAGES/numbers/shade.gif\" alt=\"sam\" width=\"16\" height=\"18\"></div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">3</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">4</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">5</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">0</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">1</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">2</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">3</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">4</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">'+".
					  "'<img  src=\"../IMAGES/numbers/shade.gif\" alt=\"sam\" width=\"16\" height=\"18\"></div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">6</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">7</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">8</div>'+".
					  "'<div style=\" border-right: hidden; width:17px; height:20px; float:left; text-align:center;\">9</div></div></div>'+".
					  "'<div id=\"FooterRow8\" style=\"border:hidden; height:15px; width:706px; float:left;\">'+".
					  "'<div id=\"BottomLeftBox\" style=\"border:hidden; width:15px; height:15px; float:left; background-color:#000000;\"></div>'+".
					  "'<div id=\"Empty\" style=\"border:hidden; width:671px; height:15px; float:left; font-size:14px;\"></div>'+".
					  "'<div id=\"BottomRightBox\" style=\"border:hidden; width:15px; height:15px; float:left; background-color:#000000;\"></div></div>';".
					  "Divget.innerHTML += HeaderHtml;";
		if($_GET["sheet"] == 1)
		{
		  $javascript3 = "for(i=1; i<".$_GET["rows"].";i++){var UsnHtml = ''; var NameHtml = ''; var MarksHtml = '';var SlNo = '';cookname = 'DataRow'+i;".
						 'SlNo = readCookie(cookname);restoredArray = SlNo.split(":");';
			if($_GET["rows"] < 20)
			{
			  $javascript3 = "for(i=1; i<".$_GET["rows"].";i++){var UsnHtml = ''; var NameHtml = ''; var MarksHtml = '';var SlNo = '';cookname = 'DataRow'+i;".
							 'SlNo = readCookie(cookname);restoredArray = SlNo.split(":");';
			}
		}
		else
		{
			if($_GET["rows"] == 20)
			{
				$javascript4 = "for(i= ".$_GET["rows"]."*".$_GET["sheet"]."- 19; i<=".$_GET["rows"]."*".$_GET["sheet"].";i++){var UsnHtml = ''; var NameHtml = '';".
						       "var MarksHtml = '';var SlNo = '';".
						       'cookname = "DataRow"+i;SlNo = readCookie(cookname); restoredArray = SlNo.split(":");';
			}
			else
			{
			   $javascript4 = "for(i= (20*".$_GET["sheet"].")-19;i<=(20*".$_GET["sheet"].")-20+(".$_GET["rows"]."-1);i++){var UsnHtml = ''; var NameHtml = '';".
						      "var MarksHtml = '';var SlNo = '';".
						      'cookname = "DataRow"+i;SlNo = readCookie(cookname); restoredArray = SlNo.split(":");';
			}
		}
		$javascript5 = "/* USN HTML */".
					  "UsnHtml = '<div style=\"border:solid 1px; width:230px; height:28px; float:left;font-size:11px; padding:2px 2px 0px 2px;\">';".
					  "if((typeof restoredArray[1]) == \"string\"){tempOBJ = escape(restoredArray[1]);}".
					  "for(j=0;j<tempOBJ.length;j++){var tem = tempOBJ.substr(j,1);".
					  "UsnHtml += '<div style=\" border:solid 1px; width:21px; height:22px; float:left; text-align:center;\"><img src=\"../IMAGES/numbers/space.gif\" ".
					  "width=\"19\" height=\"3\"  />'+ tem +'</div>';}UsnHtml += '</div>';".
					  "/* NAME HTML */".
					  "NameHtml = '<div  style=\"border:solid 1px; width:143px; height:30px; float:left;font-size:11px; overflow;hidden;\">'+ restoredArray[2] +'</div>';".
					  "/* Internal Marks */".
					  "MarksHtml = '<div style=\"border:solid 1px; width:319px; height:30px; float:left; font-size:11px;\">'; ".
					  "var Variable = restoredArray[3];		var rem = new Number(); var qut = new Number();
".
					  "if(Variable == \"A\"){rem = qut = null;".
					  "MarksHtml += '<div style=\" border-right: solid 1px; width:20px; height:29px; float:left; text-align:center;padding:2px;\">'+".
					  "'&nbsp;<img src=\"../IMAGES/numbers/shade.gif\" width=\"13\" height=\"18\"  /></div>';".
					  "MarksHtml += '<div style=\" border-right: solid 1px; width:16px; height:29px; float:left; text-align:center;padding:2px;\">'+".
					  "'&nbsp;<img src=\"../IMAGES/numbers/space.gif\" width=\"13\" height=\"18\"  /></div>';".
					  "MarksHtml += '<div style=\" border-right: solid 1px; width:16px; height:29px; float:left; text-align:center;padding:2px;\">'+".
					  "'&nbsp;<img src=\"../IMAGES/numbers/space.gif\" width=\"13\" height=\"18\"  /></div>';}".
					  "if(Variable != \"A\"){".
					  "MarksHtml += '<div style=\" border-right: solid 1px; width:20px; height:29px; float:left; text-align:center;padding:2px 2px 2px 2px;\">'+".
					  "'<img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"4\"  />A</div>';".
					  "rem = Math.abs(Variable % 10); rem = Math.floor(rem);qut = Math.abs(Variable / 10);qut = Math.floor(qut);".
					  "MarksHtml += '<div style=\" border-right: solid 1px; width:20px; height:29px; float:left; text-align:center;\">".
					  "<img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"6\"  />'+qut+'</div>';".
					  "MarksHtml += '<div style=\" border-right: solid 1px; width:20px; height:29px; float:left; text-align:center;\">".
					  "<img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"6\"  />'".
					  "+rem+'</div>';}for(j=0;j<6;j++){if(j == qut){".
					  "MarksHtml += '<div style=\" border-right: hidden; width:15px; height:30px; float:left; text-align:center;\">".
					  "<img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"6\"  /><img src=\"../IMAGES/numbers/shade.gif\" width=\"15\" height=\"18\"  /></div>';j++;}".
					  "if(j < 6){MarksHtml += '<div style=\" border-right: hidden; width:15px; height:30px; float:left; text-align:center;\">".
					  "<img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"6\"  />'+j+'</div>';}}for(k=0;k<10;k++){if(k == rem){".
					  "MarksHtml += '<div style=\" border-right: hidden; width:15px; height:30px; float:left; text-align:center;\">".
					  "<img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"6\"  /><img src=\"../IMAGES/numbers/shade.gif\" width=\"15\" height=\"18\"  /></div>';".
					  "k++;}if(k < 10){".
					  "MarksHtml += '<div style=\" border-right: hidden; width:15px; height:30px; float:left; text-align:center;\">".
					  "<img src=\"../IMAGES/numbers/space.gif\" width=\"19\" height=\"6\"  />'+k+'</div>';}}".
					  "MarksHtml += '</div>';Divget.innerHTML += UsnHtml;Divget.innerHTML += NameHtml;Divget.innerHTML += MarksHtml;}".
					  "if(".$_GET["rows"]." < 20){for(var z =". $_GET["rows"].";z<=20;z++){Divget.innerHTML += Empty_rows;}}".
					  "Divget.innerHTML += FooterHtml;}";
					  
		$javascript6 = 'function readCookie(name){var nameEQ = name + "=";var ca = document.cookie.split(";");for(var i=0;i < ca.length;i++){var c = ca[i];'.
						'while (c.charAt(0)==" ") c = c.substring(1,c.length);if (c.indexOf(nameEQ) == 0) return decodeURIComponent(c.substring(nameEQ.length,c.length));}return null;}Create_data();';					  
		
		 //echo $_GET["sheet"];
		 $html_fileno = $_GET['sheet']; 
		 $file_name = "A4_format_one_".$html_fileno .".php";
		 $handle = fopen($file_name, "w");
		 if($handle != false)
		 {
			$file = $file_name;
			$current = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html xmlns="http://www.w3.org/1999/xhtml">
						<head>
						<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
						<title>797 &times; 1118 format 1</title>
						<link href="../css/format1ids.css" type="text/css" rel="stylesheet" />
						</head>
						<body>
						<div id="pages"></div>
						<div id="NumberOfSheets" style="visibility:hidden;">
						</div>
						</div>
						<script language="javascript" type="text/javascript">'.$javascript1.$javascript2.$javascript3.$javascript4.$javascript5.$javascript6.'</script></body></html>';
			
			file_put_contents($file, $current);
		 }
		 else
		 {
		   echo "<h3>Unable to create sheets!!!!!</h3>";
		 }
	}
	else
	{
		echo "<h3>Unable to create sheets!!!!!</h3>";
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Intermediate file</title>
<script src="../js/index.js" type="text/javascript" language="javascript"></script>
<link href="../css/index.css" type="text/css" rel="stylesheet" />
</head>
<body class="Main2" id="BodyID" onLoad="javascript:ChangBackground();">
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<div id="Square" class="Square"><!-- 800px wide layout-->
<!--<div id="TopBorder" class="TopBorder"></div> top header-->

<div id="UpperBox" class="UpperBox2"><!-- container of menu bar-->
<!--<div id="MenuBar" class="MenuBar"><!-- menu bar
<div id="Link" class="Link"><a onClick="javascript:void(0);">
<img src="../IMAGES/help.png" width="80" height="25"/></a></div>
<div id="Link" class="Link"><a onClick="javascript:void(0);">
<img src="../IMAGES/entry.png" width="80" height="25"/></a></div>
</div><!-- end of menu bar-->
</div><!-- end of container of menu bar-->

<div id="Display" class="Display"><!-- Content display -->
<div id="DivTv" class="DivTv"><!-- right Pane content column --><br />
<table width="60%" align="center">
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>Sheet number </td>
    <td align="center"><strong>:</strong></td>
    <td><?php echo $_GET["sheet"]; ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>Sheet unique ID </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['0']; ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>Region</td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['1']; ?></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Region Code </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['2']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> College </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['3']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> College Code </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['4']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Course </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['5']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Course Code </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['6']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Semester </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['7']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Subject </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['8']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Subject Code </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['9']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td> Maximum Marks </td>
    <td align="center"><strong>:</strong></td>
    <td><?php print $fields['10']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center">
	<?php echo '<a href="'.$file_name.'?f1='.$fields['0'].
	                                  '&f2='.$fields['1'].
									  '&f3='.$fields['2'].
									  '&f4='.$fields['3'].
									  '&f5='.$fields['4'].
									  '&f6='.$fields['5'].
									  '&f7='.$fields['6'].
									  '&f8='.$fields['7'].
									  '&f9='.$fields['8'].
									  '&f10='.$fields['9'].
									  '&f11='.$fields['10'].
									  '" target="_self"> SHEET'.$html_fileno.'</a>'; ?>	</td>
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