window.onload=function(){
	   var oSI=document.getElementById('SI');
	   var oSignIn=document.getElementById('SignIn');
       var oCl=document.getElementById('cl');
	   oSI.onclick= function ()
         {
             oSignIn.style.display='block';
	     };
	   oCl.onclick= function ()
         {
             oSignIn.style.display='none';
	     };
	  
};     
