function zoomIn(event)
{
       var img = document.getElementById("myimage");
     var di = document.getElementById("myresult");
    
     di.style.visibility = "visible";
    
     var posX = event.offsetX;
     var posY = event.offsetY;
     di.style.animationName = "fade";
     
     di.style.backgroundImage = "url('" + img.src + "')";
     di.style.backgroundPosition = (-posX*1.4)+"px "+(-posY*1.0)+"px ";
     }
     
function zoomOut(event)
{
      var img = document.getElementById("myimage");
    
      var di = document.getElementById("myresult"); 
    
    di.style.visibility = "hidden";
    di.style.animationName = "";
    }