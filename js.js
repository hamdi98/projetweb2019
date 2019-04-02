function Signin()
{
	var Email=f.email.value;
	var Password=f.pwd.value;
	var re = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
	if(Email.length==0 || Password.length==0)
	{
		alert("You should write something!");
	}
	else if (re.test(Email))
	{
		return true;
	}
	else 
	{
		alert('Verify your email address or Password ');
        return false;
	}
}
function Signup()
{
	var Email=f2.email.value;
	var Password=f2.pwd.value;
	var RPassword=f2.rpwd.value;
	var Name=f2.namee.value;
	var LName=f2.lname.value;
	var re = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
    if(Email.length==0 || Password.length==0 || Name.length==0)
	{
		alert("You should Complete the Formula!");
	}
	else if (Name.length>10 || LName.length>10)
	{
		alert("your name or last name is too long!");
	}
	else if (Password != RPassword)
	{
		alert("Verify your Password!");
	}
	else if (re.test(Email))
	{
		return true;
	}
	else 
	{
		alert('Verify your email address ');
        return false;
	}
}