//admin-form
function admin_form()
{
var name = document.getElementById('name');
var email = document.getElementById('email');
var pass = document.getElementById('pass');
if(name.value=='')
	{
		//alert('Enter Name');
		document.getElementById('req_name').style.display='';
		document.getElementById('valid_name').style.display='none';
		name.focus();
		return false;	
	}
else if(name.value.search(/^[A-Za-z ]+$/))
	{
		document.getElementById('req_name').style.display='none';
		document.getElementById('valid_name').style.display='';
		name.focus();
		return false;
	}
	else
	{
		document.getElementById('req_name').style.display='none';
		document.getElementById('valid_name').style.display='none';
	}
}
