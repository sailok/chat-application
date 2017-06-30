function submit(){
	var uname=document.getElementById("username").value;
	var msg= document.getElementById("msg").value;

	if (uname=="" || msg=="") {
		alert("All fields are mandatory!");
	}
	var request= new XMLHttpRequest();
	request.onreadystatechange= function(){
		if (request.readyState==4 && request.status==200){
			document.getElementById("chatlogs").innerHTML=request.responseText;
			}
		}
		request.open("GET","php-assets/insert.php?user="+uname+"&messege="+msg,true);
		request.send();
};

