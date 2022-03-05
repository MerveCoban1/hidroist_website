var resim1=document.getElementById("slider1");
var sayac=1;
setInterval(function() {
    if(sayac==4){
        sayac=1;
    }
    resim1.src="images/basarilarimiz/"+sayac+".jpg";
    sayac++;   
},2000);
var resim2=document.getElementById("slider2");
setInterval(function() { 
    resim2.src="images/basarilarimiz/rev162.PNG";
    setTimeout(function() {
        resim2.src="images/basarilarimiz/rev16.PNG";
    },2000);        
},4000);
var header2=document.getElementById("header2");
var logo2=document.getElementById("logo2");
var navbar2=document.getElementById("navbar2");
logo2.onclick=function(){
    logo2.style.height="22%";
    header2.style.height="11.5em";
    navbar2.style.display="inherit";
}