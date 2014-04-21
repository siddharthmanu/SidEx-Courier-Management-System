<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SidEx - Courier Management System</title>
<style type="text/css">
	body {
		background:#3A5598;
		
	}
	table {	
			background:rgba(248,248,255, 0.8);
			padding-left:15px;
			padding-right:15px;
			padding-top:15px;
			padding-bottom:15px;
			width:60%;
			border-radius:10px;
			font-family:Verdana, Geneva, sans-serif;
			cellpadding:5px; 
			cellspacing:5px;
	}
	td {
		border-bottom: 1px green dotted;
		height:30px;
	}
	span {
		color:red;
		font-size:8pt;
	}
	td.hr {
		border-bottom: 1px blue solid;
		font-size:15pt;
		color:blue;
		font-weight:bold;
	}
	td.nb {
		border-bottom:0px green dotted;
	}
	td.last_hr {
		border-bottom:1px blue solid;
		border-bottom-left-radius:2em;
		border-bottom-right-radius:2em;
	}	
</style>

<script type="text/javascript">
function validateForm()
{
var x=document.forms["reg"]["username"].value
var y=document.forms["reg"]["password"].value
var z=document.forms["reg"]["rpassword"].value
var t=document.forms["reg"]["question"].value
var b=document.forms["reg"]["answer"].value
var c=document.forms["reg"]["fname"].value
var d=document.forms["reg"]["lname"].value
var e=document.forms["reg"]["day"].value
var f=document.forms["reg"]["month"].value
var g=document.forms["reg"]["year"].value
var h=document.forms["reg"]["occupation"].value
var i=document.forms["reg"]["email"].value
var j=document.forms["reg"]["mobile"].value
var k=document.forms["reg"]["nationality"].value
var l=document.forms["reg"]["address"].value
var m=document.forms["reg"]["city"].value
var n=document.forms["reg"]["state"].value
var o=document.forms["reg"]["zip"].value
var p=document.forms["reg"]["country"].value
if (x==null || x=="")
  {
  alert("Username must be filled out");
  return false;
  }
if (y==null || y=="")
  {
  alert("Please enter your password");
  return false;
  }
if (z==null || z=="")
  {
  alert("Please re-enter your password");
  return false;
  }
if (t=="9")
  {
  alert("Please select a security question");
  return false;
  }
if (b==null || b=="")
  {
  alert("Please give your answer to the security question");
  return false;
  }
if (c==null || c=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (e=="00")
  {
  alert("Please enter a date");
  return false;
  }
if (f=="0")
  {
  alert("Please enter month");
  return false;
  }
if (g=="")
  {
  alert("Please enter year");
  return false;
  }
if (h=="7")
  {
  alert("Please select your occupation");
  return false;
  }
var atpos=i.indexOf("@");
var dotpos=i.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=i.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
if (j==null || j=="")
  {
  alert("Please enter your mobile number");
  return false;
  }
if (k=="")
  {
  alert("Please select your nationality");
  return false;
  }
if (l==null || l=="")
  {
  alert("Address must be filled out");
  return false;
  }
if (m=="")
  {
  alert("Please select your city");
  return false;
  }
if (n=="")
  {
  alert("Please select your state");
  return false;
  }
if (o==null || o=="")
  {
  alert("Please enter pincode");
  return false;
  }
if (p=="")
  {
  alert("Please select your country");
  return false;
  }

}
</script>


</head>
<body>
<form name="reg" action='insert.php' onsubmit="return validateForm();" method='post'>
<table align="center">
	<tr>
		<td class="hr" colspan="2">Sign Up</td>
	</tr>

	<tr>
    <td align="center"><select name="type">
						<option value = "client">Client</option>
						<option value = "employee">Employee</option>
					</select>
    </td></tr>
	
	
	<tr>
		<td>Username</td><td><input type="text" name="username" size="20" maxlength="20">		  &#40;max 10 characters&#41;</td>
	</tr>
	<tr>
		<td>Password</td><td><input type="password" name="password" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>repeat Password</td><td><input type="password" name="rpassword" size="30" maxlength="30"></td>
	</tr
	>
	<tr>
		<td>Name</td>
	  <td><input type="text" name="fname" size="15" maxlength="15"></td>
	</tr>
	<tr>
		<td>E-mail id</td>
		<td><input type="text" name="email" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>Mobile</td>
		<td>+91<input type="text" name="mobile" size="10" maxlength="10"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address" size="30" maxlength="30"></td>
	</tr>
	<tr>
		<td>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><input type="text" name="city" size="15" maxlength="15"></td>
	</tr>
	
	<tr>
		<td>Country</td>
		<td><select name="country">
		<option value="" selected="selected">-- Select One --</option>
		<option value="India">India</option>
		<option value="Not Listed">Not Listed</option>
		</select></td>
	</tr>
	<tr>
		
		<td colspan="2" class="last_hr" align="center"><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="clear" value="Reset"></td>
	</tr><tr><td colspan="2" align="center"><a href="index.php#contact">Go to login page !!</a>
    </td>
    </tr>
</table>
</form>
</body>
</html>