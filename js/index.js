var Parameters = new String();
function process(par)
{
	var fields = new String();
	fields = par;
	Parameters = fields;
	entries = document.getElementById("DivTotal").innerHTML;
	format = document.formformat.formatA4.value;
	te = parseInt(entries);
	if(te > 0)
	{
		process_sheet(te,format);
	}
	else
	{
		alert("No records found in the sheet body.");
	}
}

function Validate()
{
	var fields = new Array(12);
	var	str = 	new String();
	var	field_value = 	new String();
	var msg = new String();
	for(var $i = 0; $i < 12;$i++)
	{
		str = 'document.form_IAM.F'+($i+1)+'.value';
		field_value = eval(str);
		if(field_value == "")
		{
			msg += 'Fill the ' +($i+1)+ ' field\n';
		}

	}
	if(msg != "")
	{
		alert(msg);
	}
	else
	{
		document.form_IAM.submit();
	}
}

function process_sheet(total,format)
{
	var NoPages = 1, r = 0, br = 4;
	var obj = new Object();
	var msg = new String();
	obj = document.getElementById("DivTotal");
	var total = eval(obj.innerHTML); 
	total = parseInt(total);
 	document.getElementById("Divbut").innerHTML = "";	 
	if(total > 20)
	{
		NoPages = total / 20;
		NoPages = Math.ceil(NoPages);
		var rows = new Array(NoPages);
		r = total;		
		for(var i = 1 ; i<=NoPages;i++)
		{
			rows[i] = r;
			r-=20;
		}
		for(var i = 1;i<NoPages;i++) rows[i] -= rows[i+1];
		for(var p=1;p<=NoPages;p++)
		{
		  document.getElementById("Divbut").innerHTML += '<a href="javascript:create_sheets('+p+','+ rows[p]+');">sheet'+p+'</a>&nbsp;&nbsp;';
		  if(p == br) 
		  {
			  document.getElementById("Divbut").innerHTML += '<br />';
			  br += 4;
		  }
		}
	}
	else
	{
	  document.getElementById("Divbut").innerHTML += '<a href="javascript:create_sheets('+NoPages+','+total+');">sheet 1</a>&nbsp;&nbsp;';
	}
}

function create_sheets(x,y)
{
	var pages = x, rows = y;
	var str = new String();
	var msg = new String();
	var cookname = new String();
	var divnames1 = new Array(21);
	var divnames2 = new Array(21);
	var divnames3 = new Array(21);
	var divnames4 = new Array(21);
	if(pages == 1)
	{
		for(var i = 1;i<=rows;i++)
		{
			divnames1[i] = new String(); divnames1[i] = 'document.getElementById("DivcolNO'+ i +'").innerHTML';
			divnames2[i] = new String(); divnames2[i] = 'document.getElementById("DivcolUSN'+ i +'").innerHTML';
			divnames3[i] = new String(); divnames3[i] = 'document.getElementById("DivcolNAME'+ i +'").innerHTML';
			divnames4[i] = new String(); divnames4[i] = 'document.getElementById("DivcolIA'+ i +'").innerHTML';
		}
	}
	else
	{
		if(rows == 20)
		{
			for(var i = (rows*pages)-19;i<=rows*pages;i++)
			{
				divnames1[i] = new String(); divnames1[i] = 'document.getElementById("DivcolNO'+ i +'").innerHTML';
				divnames2[i] = new String(); divnames2[i] = 'document.getElementById("DivcolUSN'+ i +'").innerHTML';
				divnames3[i] = new String(); divnames3[i] = 'document.getElementById("DivcolNAME'+ i +'").innerHTML';
				divnames4[i] = new String(); divnames4[i] = 'document.getElementById("DivcolIA'+ i +'").innerHTML';
			}
		}
		else
		{
			for(var i =(20*pages)-19;i<=(20*pages)-20+(rows-1);i++)
			{
				divnames1[i] = new String(); divnames1[i] = 'document.getElementById("DivcolNO'+ i +'").innerHTML';
				divnames2[i] = new String(); divnames2[i] = 'document.getElementById("DivcolUSN'+ i +'").innerHTML';
				divnames3[i] = new String(); divnames3[i] = 'document.getElementById("DivcolNAME'+ i +'").innerHTML';
				divnames4[i] = new String(); divnames4[i] = 'document.getElementById("DivcolIA'+ i +'").innerHTML';
			}
		}
	}
	if(pages == 1)
	{
		for(var i = 1;i<rows;i++)
		{
			str =   eval(divnames1[i]) +  ':';
			str +=  eval(divnames2[i]) +  ':';
			str +=  eval(divnames3[i]) +  ':';
			str +=  eval(divnames4[i]); 
		   	cookname = "DataRow"+i; 
			createCookie(cookname,str,-1);
			createCookie(cookname,str,1);
		}
	}
	else
	{
		if(rows == 20)
		{
			for(var i =(rows*pages)-19;i<=rows*pages;i++)
			{
				str =   eval(divnames1[i]) +  ':';
				str +=  eval(divnames2[i]) +  ':';
				str +=  eval(divnames3[i]) +  ':';
				str +=  eval(divnames4[i]); 
				cookname = "DataRow"+i; 
				createCookie(cookname,str,-1);
				createCookie(cookname,str,1);
			}
		}
		else
		{
			for(var i =(20*pages)-19;i<=(20*pages)-20+(rows-1);i++)
			{
				str =   eval(divnames1[i]) +  ':';
				str +=  eval(divnames2[i]) +  ':';
				str +=  eval(divnames3[i]) +  ':';
				str +=  eval(divnames4[i]); 
				cookname = "DataRow"+i; 
				createCookie(cookname,str,-1);
				createCookie(cookname,str,1);
			}
		}
	}
	window.open("../php/createDHTML.php?sheet="+pages+"&rows="+rows+"&parameters="+Parameters);
}

function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return decodeURIComponent(c.substring(nameEQ.length,c.length));
    }
    return null;
}

function ChangBackground()
{
	var num = new Number();
	while(true)
	{
		num = Math.random();
		num = parseInt(num);;
		if(num > 1 && num < 11) break;
	}
	var bodyObj = new Object();
	var squareObj = new Object();
	bodyObj = document.getElementById("BodyID");
	squareObj = document.getElementById("UpperBox");
	bodyObj.className = '';
	squareObj.className = '';
	bodyObj.className = "Main"+num;
	squareObj.className = "UpperBox"+num;
}