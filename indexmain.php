<!DOCTYPE HTML>
<html>
<head>
<title>www.cloudbase.com</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="icons.css" rel="stylesheet" />

<script type="text/javascript">

function logidcall () {

	document.getElementById("confirmid").style.display="none" ;

document["search-theme-form"].action="checklogin.php"

}



function signidcall(){

	document.getElementById("confirmid").style.display="block";
document["search-theme-form"].action="checksignup.php"


}

</script>




</head>

<body>


<div class="container-fluid">
<div class="row" style="min-height: 29mm;background-color: #01579B">
<div class="col-lg-2" style="min-height: 30mm">
<img src="db2.jpeg" style="height: 24mm;border-radius: 17mm;border-style: groove;margin-top: 3mm;border:black" class="img-rounded" alt="">
</div>

<div class="col-lg-4" style="min-height: 30mm">
<input type="search" class="form-control" style="width: 140mm;height: 16mm;margin-top: 6mm;margin-left: 1mm;border-radius: 8mm;outline: 0; 
font-size: 7mm;font-family: Lato; padding-left: 5mm; outline-color: black;" placeholder="Google Custom Search.." />
</div>

<div class="col-lg-3" style="min-height: 30mm">

<a href="#search-theme-form" ><input type="button" class="btn" value="SignUp"  onclick="signidcall();" style="background-color: white; width: 40mm;height: 16mm;border-radius: 8mm;margin-top: 6mm;
margin-left:10mm ;outline: 0;font-size: 5mm; font-family: Lato"  />

<a href="#search-theme-form" ><input type="button" onclick="logidcall();" class="btn" value="Login" style="background-color: white;width: 40mm;height: 16mm;border-radius: 8mm;margin-top: 6mm;
margin-left:7mm ;outline: 0;font-size: 5mm; font-family: Lato"  /></a>
</div>



<div class="col-lg-3" style="min-height: 30mm">

<p style=" margin-top: 3mm; font-size:16mm ;  font-family: Lato;text-align: center;color: white">Cloudbase..</p>


</div>


</div>





<div class="row" style="height:170mm"  >

<img src="Music.png" id="mainwall" style="height: 168mm;width:100%;margin-top: 1mm;margin-bottom: 1mm" alt="">
</div>

<div class="row" style="height:160mm;background-color: #F7B529">
<div class="col-lg-4" style="height: 160mm" >
<img src="w1.png" style="height: 160mm;border-color: black;">
</div>

<div class="col-lg-4" style="height: 160mm" >
<img src="w3.png" style="height: 160mm;border-color: black;">
</div>

<div class="col-lg-4" style="height: 160mm;background-image: url(w2.png);">
<input type="button" class="btn" value="SignUp"  onclick="signidcall()"   id="signid" style="background-color: black; width: 40mm;height: 16mm;border-radius: 8mm;margin-top: 12mm;
margin-left:20% ;outline: 0;font-size: 7mm; font-family: Lato;color:#F7B529;"  />
<input type="button" class="btn" value="Login" id="logid" onclick="logidcall()" style="background-color: black; width: 40mm;height: 16mm;border-radius: 8mm;margin-top: 12mm;
margin-left:7mm ;outline: 0;font-size: 7mm; font-family: Lato; color:#F7B529 "  />
<hr style="width: 60mm;" >


<form action="checksignup.php" method="POST" id="search-theme-form" name="search-theme-form" class="one">

<input type="email" name="eid" style=" margin-left:12% ;margin-top: 5mm; width: 120mm; height: 18mm;border-radius: 9mm;outline: 0;
font-size: 6mm;padding-left: 5mm" placeholder="Email-Address" class="form-control"  />



<input type="tel" name="mid" style="  margin-left:12% ; margin-top: 5mm; width: 120mm; height: 18mm;border-radius: 9mm;outline: 0;
font-size: 6mm;padding-left: 5mm" placeholder="Mobile No. " class="form-control"  />


<input type="password" name="pid" style="margin-left:12% ; margin-top: 5mm; width: 120mm; height: 18mm;border-radius: 9mm;outline: 0;
font-size: 6mm;padding-left: 5mm" placeholder="Password" class="form-control"  />


<input type="password"  name="cpid" id="confirmid" style="margin-left:12% ;margin-top: 5mm; width: 120mm; height: 18mm;border-radius: 9mm;outline: 0;
font-size: 6mm;padding-left: 5mm" placeholder="Confirm Password" class="form-control"  />


<input type="submit" class="btn" value="Submit" style="background-color: black; width: 70mm;height: 16mm;border-radius: 8mm;margin-top: 12mm;
margin-left:24% ;outline: 0;font-size: 7mm; font-family: Lato;color:#F7B529;"  />



</form>



</div>




</div>




<div class="row" style="background-color: white;height: 1mm"></div>

<div class="row" style="height:30mm;background-color: #01579B;">

<div class="col-lg-5" style="height: 30mm" >
<p style="font-size: 10mm;font-family: Lato;margin-top: 7mm;margin-left: 10mm;color:  white;">Designed By : &nbsp;Keshav Gupta</p>

</div>

<div class="col-lg-7" style="height: 30mm" >
<a href="" class="fa fa-facebook" style="margin-left: 65%;margin-top: 4mm;color: white;" ></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.linkedin.com/in/kgupta786" class="fa fa-linkedin" style="margin-top: 4mm;color: white;outline: 0;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mailto:gkeshav2509@gmail.com" class="fa fa-google"style="margin-top: 4mm;color: white;outline: 0;" ></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://www.github.com/kgupta786" class="fa fa-github" style="margin-top: 4mm;color: white;outline: 0;"></a>

</div>

</div>



</div>




</body>




</html>



