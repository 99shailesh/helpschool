function validation()
{
	
	var fname=document.getElemetById("fname");
	var fnum=document.getElemetById("fnum");
	var femail=document.getElemetById("femail");
	if(fname="")
	{
		document.getElemetById("name").innerHTML="* pls enter name";
		return false;
	}
	if(fname.length<3||fname.length>20)
	{
		document.getElemetById("name").innerHTML="* name must be atleast 3 and atmost 20 charectors";
		return false;
	}
	if(!NaN(fname))
	{
		document.getElemetById("name").innerHTML="* special charectors not allowed";
		return false;
	}
	if(femail="")
	{
		document.getElemetById("email").innerHTML="* enter email";
	}
	if(femail.indexOf('@') <= 0 )
	{
		document.getElementById("email").innerHTML =" ** @ Invalid Position";
		return false;
	}

	if((femail.charAt(femail.length-4)!='.') && (femail.charAt(femail.length-3)!='.'))
	{
		document.getElementById("email").innerHTML =" * . Invalid Position";
		return false;
	}
}