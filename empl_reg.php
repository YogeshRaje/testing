<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VIIT Association</title>
<meta name="keywords" content="demo" />
<meta name="description" content="demo" />
<link rel="shortcut icon" href="images/hl.jpg"/>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="gallery.css" rel="stylesheet" type="text/css" />
<link href=" menu.css" rel="stylesheet" type="text/css" />
<link href=" diapo/diapo.css" rel="stylesheet" type="text/css" media='all'/>
<link href=" css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
    <script src="diapo/scripts/jquery.min.js" type="text/javascript"></script>
    <!--[if !IE]><!--> <script src="diapo/scripts/jquery.mobile-1.0rc2.customized.min.js" type="text/javascript"></script> <!--<![endif]-->
   <script type="text/javascript" src="js/piroBox.1_2.js"></script>
	<SCRIPT type="text/javascript" src="datetimepicker_css.js"></SCRIPT>
   
<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
<script language="javascript">
function validateFeedback(frmFdback)
{
	
	if(frmFdback.uname.value=="" )
	{
		alert("Fill Your Username ! ");
		frmFdback.uname.focus();
		frmFdback.uname.value="";
		return false;
	}
	 if(frmFdback.pwd.value== "")
	{
		alert("Enter Your Password.");
		frmFdback.pwd.focus();
		frmFdback.pwd.value="";
		return false;
	}
	var radioSelected = false;
for (i = 0;  i < frmFdback.rd1.length;  i++)
{
if (frmFdback.rd1[i].checked)
radioSelected = true;
}
if (!radioSelected)
{
alert("Please select User Type.");
return (false);
}

	return true;
}

</script>

<script language="javascript">
function validateFeedback1(form)
{
	
	if(form.unme.value=="" )
	{
		alert("Fill Your Username ! ");
		form.unme.focus();
		form.unme.value="";
		return false;
	}
	if(form.passw.value=="" )
	{
		alert("Fill Your password! ");
		form.passw.focus();
		form.passw.value="";
		return false;
	}
	if(form.fname.value=="" )
	{
		alert("Fill Your Name! ");
		form.fname.focus();
		form.fname.value="";
		return false;
	}
	if(form.addr.value== "")
	{
		alert("Enter Your Address.");
		form.addr.focus();
		form.addr.value="";
		return false;
	}
	else if(form.addr.length >= 50 )
	{
		alert("Enter Your Address in 50 Character Only.");
		form.addr.value= "";
		form.addr.focus();
		return false;
	}
	
	var radioSelected = false;
for (i = 0;  i < form.gender.length;  i++)
{
if (form.gender[i].checked)
radioSelected = true;
}
if (!radioSelected)
{
alert("Please select Gender.");
return (false);
}

if(form.email.value=="" )
	{
		 alert("Fill Your Email ! ");
		form.email.focus();
		form.email.value="";
		return false;
	}
	else 
	{
		emailid=form.email.value;
					 p=emailid.indexOf("@");
					 q=emailid.lastIndexOf("@");
					 a=emailid.indexOf(".");
					 b=emailid.lastIndexOf(".");

		if((p!=q)||(p==0)||(p==-1)||(p==(emailid.length-1))||(a==0)||(a==-1)||(a==(emailid.length-1)))
					{
					 alert("Enter proper Email ! ");
					form.email.focus(); 
					form.email.value="";
					return false;
					}
	}
	
	if(form.dob_to.value=="" )
	{
		alert("Select Your Birth Date! ");
		form.dob_to.focus();
		form.dob_to.value="";
		return false;
	}
	contact =form.mono.value;
	
	if(contact == "" )
	{
		
		alert("Enter Your Mobile No ");
		form.mono.focus();
		return false;
	}
	else
	{
		k=0;
		while(k <= contact.length-1)
		{
			if(contact.charAt(k)>='0' && contact.charAt(k) <= '9')
			{
				k++;
				
			}
			else
			{
				alert("Enter Digit Only!");
				form.mono.value="";
				form.mono.focus();
				return false;
			}
		}
		
	}
	if(form.mono.value.length!=10)
	{
		alert("Please Enter valid Mobile Number .");
		form.mono.value="";
		form.mono.focus();
		return false;
					
	}
	
	if(form.c_desig.value=="" )
	{
		alert("Select Your Designation! ");
		form.c_desig.focus();
		form.c_desig.value="";
		return false;
	}
	if(form.c_name.value=="" )
	{
		alert("Fill company name! ");
		form.c_name.focus();
		form.c_name.value="";
		return false;
	}
	if(form.c_add.value=="" )
	{
		alert("Fill company Address! ");
		form.c_add.focus();
		form.c_add.value="";
		return false;
	} 
	return true;
}


</script>
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>
<body>
<nav class="navbar navbar-default" style="background-color:#000">
  <div class="container-fluid">
    <p><img src="1/images/al.jpg" class="img-thumbnail" alt="Cinque Terre" width="1800" height="100"> </p>
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
    <li style=""><a href="in.php">Home</a>
      <li><a href="registration.php">Registration</a></li>
      <li><a href="members.php">Member</a></li>
     <li><a href="event.php">Event</a></li>
      <li><a href="Gallery.php">Gallery</a></li>
      <li><a href="Rules.php">Rules And Regulation</a></li>
      <li><a href="about.php">About Alumni</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
      <li><a href="https://www.facebook.com/ViitAlumniAssociation?ref=hl"> <span></span>@Facebook</a></li> 
    </ul>
  </div>
</nav>

        <br />   <h3><b style="color:#990033;">Employer Registration Form</b></h3>
		
		<p align="justify" class="mar">
	
	<table width="100%" class="table" >
  <tr>
    <td>
	<form action="emp_login.php" method="post" name="frmFdback"  >
     <div class="form-group">	
			<table width="100%" class="table">
  <tr>
    <td colspan="2"><div align="center">
      <h3><b style="color:#990033;">Login  Here</b></h3>
    </div></td>
    </tr>
  <tr>
    <td width="47%"><div align="right"></div></td>
    <td width="53%"><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="right"><b style="color:#000;">UserName: </b></div></td>
    <td><div align="left"> <input type="text" name="uname" class="form-control" size="30" /></div></td>
  </tr>
   <tr>
    <td><div align="right"></div></td>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td><div align="right"><b style="color:#000;">Password: </b></div></td>
    <td><div align="left"> <input type="password" name="pwd" class="form-control" size="30" /></div></td>
  </tr>
   <tr>
    <td><div align="right"></div></td>
    <td><div align="left"></div></td>
  </tr>
     <tr>
    <td><div align="right"></div></td>
    <td><div align="left"></div></td>
  </tr>
   <tr>
    <td colspan="2"><div align="center"><button type="submit" class="btn btn-default" onclick="if(validateFeedback(frmFdback)){;}else{return false;}" >Submit</button>
				<button type="reset"  class="btn btn-default" > Cancel</button></div></td>
    </tr>
	 <tr>
    <td><div align="right"></div></td>
    <td><div align="left"></div></td>
  </tr>
  </table></form>

	</td>
  </tr>
  <tr>
    <td>
			 <h3><b style="color:#990033;">Please Register Here... </b></h3>
			  <?php
			
	if(isset($_REQUEST['msg_fdback'])){
						
					   echo "<div style='color:#990033;'>".$_REQUEST['msg_fdback']."</div>";
					   }
	?>
			 <form name="form" action="addrecruit1.php" method="post" enctype="multipart/form-data">
			 <table width="100%"  class="table">
	  
	  <tr>
    <td colspan="2"><div align="center">&nbsp;</div></td>
    </tr>
    <tr>
    <td><div align="right"><span class="co">Login Details</span></div></td>
    <td><div align="left">
        
      </div></td>
  </tr>
  <tr>
	  <tr>
    <td width="48%"><div align="right"><span class="style1">Username :</span></div></td>
    <td width="52%"><div align="left">      
        <input type="text" name="unme" class="form-control" size="30" />
      </div></td>
  </tr>
   <tr>
    <td><div align="right"><span class="style1">Password:</span></div></td>
    <td><div align="left">
        <input type="password" name="passw" class="form-control" size="30" />
      </div></td>
  </tr>
   <tr>
    <td colspan="2"><div align="center">&nbsp;</div></td>
    </tr>
 	  <tr>
    <td><div align="right"><span class="co">Personal Details</span></div></td>
    <td><div align="left">
        
      </div></td>
  </tr>
  <tr>
    <td><div align="right"><span class="style1">Name :</span></div></td>
    <td><div align="left">
        <input type="text" name="fname" class="form-control" size="30" />
      </div></td>
  </tr>
 <tr>
    <td><div align="right"><span class="style1">Address :</span></div></td>
    <td><div align="left">
       <textarea name="addr" class="form-control"  size="30"></textarea> 
      </div></td>
  </tr>
   <tr>
    <td><div align="right"><span class="style1">Gender :</span></div></td>
    <td><div align="left">
       <p>
        <label>
          <input type="radio" name="gender" value="Male" />
          <span class="style1">Male</span></label>
               <label>
          <input type="radio" name="gender" value="Female" />
          <span class="style1">Female</span></label>
        <br />
      </p>
      </div></td>
  </tr>
   <tr>
    <td><div align="right"><span class="style1">Email :</span></div></td>
    <td><div align="left">
        <input type="text" name="email" class="form-control" size="30" />
      </div></td>
  </tr>
   <tr>
    <td><div align="right"><span class="style1">Date Of Birth :</span></div></td>
    <td><div align="left">
        <input id="txtDate2" type="text" name="dob_to" class="form-control" size="30" />
		<A href="javascript:NewCssCal('txtDate2','yyyymmdd');"><IMG 
                        alt="Pick a date" 
                        src="images/cal.gif" border="0"
                        width=20 height=22 title="Calender"> </A>
      </div>	  </td>
  </tr>
   <tr>
    <td><div align="right"><span class="style1">Mobile No :</span></div></td>
    <td><div align="left">
        <input type="text" name="mono" class="form-control" size="30" />
      </div></td>
  </tr>
     
   <tr>
    <td><div align="right"><span class="style1">Designation :</span></div></td>
    <td><div align="left">
        <input type="text" name="c_desig" class="form-control" size="30" />
      </div></td>
  </tr>
   <tr>
    <td><div align="right"><span class="style1">Organization Name :</span></div></td>
    <td><div align="left">
        <input type="text" name="c_name" class="form-control" size="30" />
      </div></td>
  </tr>
   <tr>
    <td><div align="right"><span class="style1">Company Address :</span></div></td>
    <td><div align="left">
        <textarea name="c_add" class="form-control" size="30"></textarea> 
      </div></td>
  </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><div align="left"></div></td>
  </tr>
     <tr>
    <td><div align="right"></div></td>
    <td><div align="left"></div></td>
  </tr>
   <tr>
    <td colspan="2"><div align="center"><button type="submit"  class="btn btn-default" onClick="if(validateFeedback1(form)){;}else{return false;}"> Submit</button>
                                <button type="reset"  class="btn btn-default">Cancel</button></div></td>
    </tr>
	<tr>
    <td colspan="2"><div align="center">&nbsp;</div></td>
    </tr>
	<tr>
    <td colspan="2"><div align="center">&nbsp;</div></td>
    </tr>
</table>

			 
	</td>
  </tr>
</table>

	
	
	<div class="panel-heading"></div>
    <div class="panel-body"><center><font color="#4EE0D9"> All Rights Reserved  By</font> <a href="http://www.viitindia.org"><font color="#4EE0D9">VIIT Baramati</font></a></center> </div>        
</body>
</html>