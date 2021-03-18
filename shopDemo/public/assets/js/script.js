
function addEvent(evt , eventType , func)
{
    if (evt.addEventListener)
    {
        evt.addEventListener(eventType , func, false)

    }
   else  if ( evt.attachEvent)
    {
        evt.attachEvent('on'+eventType , func);
    }
    else {
        evt['on'+eventType] = func;
    }
    
}





addEvent(window , 'load'  , initialize);

function initialize()
{
  $(document).ready(function(){
   let childNum = $(".imgDiv").children().length;
   let index =1 ;  

   $( `.imgDiv img:nth-child(1)` ).addClass('showImg');
   setInterval(() => {

    $(".imgDiv").children().fadeOut();

    $( `.imgDiv img:nth-child(${index})` ).fadeIn(1000);
    
    

     
     if (index === childNum)
     {
       index = 1;
     }else
     {
      index++;
     }
 
     
   }, 5000);


  
  });



}