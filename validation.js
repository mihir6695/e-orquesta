function artist_form()
{
	var email=document.getElementById('email');
	var pass = document.getElementById('pass');
	if(email.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_email').style.display='';
		document.getElementById('valid_email').style.display='none';
		email.focus();
		return false;	
	}
else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
	{
		document.getElementById('req_email').style.display='none';
		document.getElementById('valid_email').style.display='';
		email.focus();
		return false;
	}
	else
	{
		document.getElementById('req_email').style.display='none';
		document.getElementById('valid_email').style.display='none';
	}
		
	if(pass.value=="")
	{
		document.getElementById('req_pass').style.display='';
		document.getElementById('valid_pass').style.display='none';
		pass.focus();
		return false;0
	}
	else if(pass.value.length<6)
	{
		document.getElementById('req_pass').style.display='none';
		document.getElementById('valid_pass').style.display='';
		pass.focus();
		return false;
	}
}

function artist_mul_register_form()
{
	
var gname = document.getElementById('gname');
if(gname.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_gname').style.display='';
		document.getElementById('valid_gname').style.display='none';
		gname.focus();
		return false;	
	}
else if(gname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_gname').style.display='none';
		document.getElementById('valid_gname').style.display='';
		gname.focus();
		return false;
	}
	else
	{
		document.getElementById('req_gname').style.display='none';
		document.getElementById('valid_gname').style.display='none';
	}

}
function customer_register_form()
{
	
var fname = document.getElementById('fname');

var mname = document.getElementById('mname');
if(fname.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_fname').style.display='';
		document.getElementById('valid_fname').style.display='none';
		fname.focus();
		return false;	
	}
else if(fname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_fname').style.display='none';
		document.getElementById('valid_fname').style.display='';
		fname.focus();
		return false;
	}
	else
	{
		document.getElementById('req_fname').style.display='none';
		document.getElementById('valid_fname').style.display='none';
	}
	if(mname.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_mname').style.display='';
		document.getElementById('valid_mname').style.display='none';
		mname.focus();
		return false;	
	}
else if(mname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_mname').style.display='none';
		document.getElementById('valid_mname').style.display='';
		mname.focus();
		return false;
	}
	else
	{
		document.getElementById('req_mname').style.display='none';
		document.getElementById('valid_mname').style.display='none';
	}
	if(lname.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_lname').style.display='';
		document.getElementById('valid_lname').style.display='none';
		lname.focus();
		return false;	
	}
  else if(lname.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_lname').style.display='none';
		document.getElementById('valid_lname').style.display='';
		lname.focus();
		return false;
	}
	else
	{
		document.getElementById('req_lname').style.display='none';
		document.getElementById('valid_lname').style.display='none';
	}
	if(email.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_email').style.display='';
		document.getElementById('valid_email').style.display='none';
		email.focus();
		return false;	
	}
	else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
	{
		document.getElementById('req_email').style.display='none';
		document.getElementById('valid_email').style.display='';
		email.focus();
		return false;
	}
	else
	{
		document.getElementById('req_email').style.display='none';
		document.getElementById('valid_email').style.display='none';
	}
		
	if(pass.value=="")
	{
		document.getElementById('req_pass').style.display='';
		document.getElementById('valid_pass').style.display='none';
		pass.focus();
		return false;0
	}
	else if(pass.value.length<6)
	{
		document.getElementById('req_pass').style.display='none';
		document.getElementById('valid_pass').style.display='';
		pass.focus();
		return false;
	}
	
}