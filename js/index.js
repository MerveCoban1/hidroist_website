var gizli=document.getElementById("gizliResim");
var gizlia=document.getElementById("gizlia");
gizli.onclick=function(){
    var deger=prompt("sifre: ",0);
    if(deger=="hidroist1453team"){
        gizlia.href="anasayfa.html";
    }else{
        alert("hatalı giris !");
    }      
}
var myVar,myVar2;
var header2=document.getElementById("header2");
var logo2=document.getElementById("logo2");
var navbar2=document.getElementById("navbar2");
logo2.onclick=function(){
    logo2.style.height="22%";
    header2.style.height="11.5em";
    navbar2.style.display="inherit";
    clearInterval(myVar);
    clearInterval(myVar2);      
}
var logoResmi2=document.getElementById("logoResmi2");
myVar=setInterval(function() {
    setTimeout(function() {
        logoResmi2.style.borderColor="#bfefff"; 
    },100); 
    logoResmi2.style.borderColor="#1b8bb4"; 
},1000);
myVar2=setInterval(function() {
    setTimeout(function() {
        logoResmi2.style.borderColor="#1c0f45"; 
    },500); 
    logoResmi2.style.borderColor="#4876ff"; 
},2000);