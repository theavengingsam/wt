function validateForm() {
		var f = document.getElementById("FirstName").value;
		var l = document.getElementById("LastName").value;
		var u = document.getElementById("UserName").value;
		var e = document.getElementById("EmailID").value;
		var p = document.getElementById("Password").value;
		var pc = document.getElementById("PasswordConfirmation").value;
		var v=0;
		var emailregex="[a-z0-9._%+-]+@[a-z0-9.+]+\.[a-z]{2,3}$"
		var name="[a-zA-Z]$"
		var passregex="(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$";
		if (f == "" || l == "" || u=="" || e=="" ||p==""|| pc=="")
		{
			alert("please enter the required fields");
			
	   }	
		if(!f.match(name)){
			document.getElementById("fp").innerHTML="INVALID FIRSTNAME";
			document.getElementById("fp").style.display="block";
			++v;
		}
		else
		{
			document.getElementById("fp").style.display="none";
		}
		 if(!l.match(name)){
			document.getElementById("lp").innerHTML="INVALID LASTNAME";
			document.getElementById("lp").style.display="block";
			++v;
		}
		else
		{
			document.getElementById("lp").style.display="none";
		}
		
		 if (!e.match(emailregex))
		{
			document.getElementById("ep").innerHTML="INVALID EMAIID";
			document.getElementById("ep").style.display="block";
			++v;
		}
		else
		{
			document.getElementById("ep").style.display="none";
		}
		 if(!p.match(passregex))
		{
			document.getElementById("pp").style.color="red";
			document.getElementById("pp").style.display="block";
			++v;
		}
		else
		{
			document.getElementById("pp").style.color="#544747";
		}
		 if(p!=pc)
		{
			document.getElementById("pcp").innerHTML="PASSWORD DOESN'T MATCH";
			document.getElementById("pcp").style.display="block";
			++v;
		}
		else
		{
			document.getElementById("pcp").style.display="none";
		}
		if(v==0)
		return true;
		else
		return false;
				
				
	}