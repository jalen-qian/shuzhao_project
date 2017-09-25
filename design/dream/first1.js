 var wrap = document.getElementById('wrap');
      var content = document.getElementById('content');
      var tips = document.getElementById('tips');
    var aLi = tips.getElementsByTagName('li');
      var now = 0;
      //var 
      for (var i = 0; i < aLi.length; i++) {
          aLi[0].className = 'active';                //把初始状态定义好
          content.style.left = 0 +'px';
          aLi[i].index = i; //自定义属性
          aLi[i].onclick = function() {
              now = this.index;
              play();
          }
      }
 
     function play() {
         for (var j = 0; j < aLi.length; j++) {
             aLi[j].className = '';
         }
         aLi[now].className = 'active';
 
         //this.index = now;                     
         //content.style.left = -400 * this.index + 'px';
         startMove(content, {
             left: -400 * now, 
         });
     }
 
    function autoPlay() {
         now++;
         if (now == aLi.length) {
             now = 0;
         }
         play();
     }
 
  var timer = setInterval(autoPlay, 2000);
     wrap.onmouseover = function(){                  //这里如果把事件绑定到ul上的话，那么鼠标移入，下面对饮的li会不起作用，
         clearInterval(timer);                       //因为li的层级比较高，所以应该把事件绑定到大的div上
     }
     wrap.onmouseout = function(){
         timer = setInterval(autoPlay,2000);
         //setInterval(autoPlay,2000);  
     }
     //以下是tab选项js代码
  window.onload=function(){
  var oMenu=document.querySelectorAll(".menu span");
  var oMain=document.querySelectorAll(".main li");
  var oLine=document.querySelector(".line");
  for(var i=0;i<oMenu.length;i++){
   oMenu[i].index=i;
   oMenu[i].onmouseover=function(){
    var thisIndex=this.index;
    for(var j=0;j<oMain.length;j++){
     oMain[j].style.display="none";
     oMain[thisIndex].style.display="block";
    }
    oLine.style.left=thisIndex*+25.70+"%";
   }
  }
 }