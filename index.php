<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IAM</title>
<link href="css/index.css" type="text/css" rel="stylesheet" />
<script src="js/index.js" language="javascript" type="text/javascript" ></script>
</head>
<body class="Main2" id="BodyID" onload="javascript:ChangBackground();">
<table border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td>
<div id="Square" class="Square"><!-- 800px wide layout-->
<!--<div id="TopBorder" class="TopBorder"></div> top header-->
<div id="UpperBox" class="UpperBox2"><!-- container of menu bar-->
<!-- menu bar-->
<!--<div id="MenuBar" class="MenuBar">
<div id="Link" class="Link"><a onclick="javascript:change_Display('help');">
<img src="IMAGES/help.png" height="25" width="80"/></a></div>
<div id="Link" class="Link"><a onclick="javascript:change_Display('entry');">
<img src="IMAGES/entry.png" height="25" width="80"/></a></div>
</div>
--><!-- end of menu bar-->
</div><!-- end of container of menu bar-->

<div id="Display" class="Display"><!-- Content display -->
<div id="DivTv" class="DivTv"><!-- right Pane content column --><br />
<form method="post"  action="php/index.php"  enctype="multipart/form-data" name="form_IAM">
	  <table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2" align="center" valign="top">Enter the sheet header detials </td>
          </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Sheet Number</td>
          <td align="center"><input name="F1" type="text" id="F1" maxlength="14" /></td>
        </tr>

        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Region</td>
          <td align="center"><label>
            <input name="F2" type="text" id="F2" />
          </label></td>
        </tr>

        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Region code </td>
          <td align="center"><input name="F3" type="text" id="F3" maxlength="2" /></td>
        </tr>

        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">College</td>
          <td align="center"><input name="F4" type="text" id="F4" /></td>
        </tr>

        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">College code </td>
          <td align="center"><label>
		  <input name="F5" type="text" id="F5" maxlength="2" />
          </label></td>
        </tr>

        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Course</td>
          <td align="center"><label>
            <input name="F6" type="text" id="F6" />
          </label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Course code </td>
          <td align="center"><input name="F7" type="text" id="F7" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Semester</td>
          <td align="center"><label>
          <input name="F8" type="text" id="F8" maxlength="1" />
          </label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Subject</td>
          <td align="center"><label>
            <input name="F9" type="text" id="F9" />
          </label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Subject code </td>
          <td align="center"><label>
          <input name="F10" type="text" id="F10"  />
          </label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Maximum Marks </td>
          <td align="center"><input name="F11" type="text" id="F11"/></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Select xls file </td>
          <td align="center">
            <input type="file" name="F12" id="Infle_xls" />         </td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center"><label>
            <input  type="button"  name="submit1" value="Next" onclick="javascript:Validate();"/>
            <input type="reset"  value="Reset" />
          </label></td>
          </tr>
      </table>
    </form>
</div><!-- end of right Pane content column -->
</div><!-- end of Content display -->
</div><!-- end of 800px wide layout -->
</td>
</tr>
</table>
</body>
</html>
