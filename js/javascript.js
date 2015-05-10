// ----------------------------------------------------------------------

function ajaxx(str){
    if(window.XMLHttpRequest){
	 x=new XMLHttpRequest();
    }else{
         x=new ActiveXObject('Microsoft.XMLHTTP');
    }

    x.onreadystatechange=function(){
        if(x.readyState==4 && x.status==200){  
	    document.getElementById('game_field').innerHTML=x.responseText;  
        }    
    }		
    x.open('GET','action.php?weapon='+str,true); 
    x.send();
}

// ----------------------------------------------------------------------

function ajaxx1(){
    if(window.XMLHttpRequest){
	 x=new XMLHttpRequest();
    }else{
         x=new ActiveXObject('Microsoft.XMLHTTP');
    }

    x.onreadystatechange=function(){
        if(x.readyState==4 && x.status==200){  
	    document.getElementById('game_field1').innerHTML=x.responseText;  
        }    
    }		
    x.open('GET','action1.php',true); 
    x.send();
}

// ----------------------------------------------------------------------

function ajaxx2(){
    if(window.XMLHttpRequest){
	 x=new XMLHttpRequest();
    }else{
         x=new ActiveXObject('Microsoft.XMLHTTP');
    }

    x.onreadystatechange=function(){
        if(x.readyState==4 && x.status==200){  
	    document.getElementById('game_field2').innerHTML=x.responseText;  
        }    
    }		
    x.open('GET','action2.php',true); 
    x.send();
}

// ----------------------------------------------------------------------

function ajaxx3(){
    if(window.XMLHttpRequest){
	 x=new XMLHttpRequest();
    }else{
         x=new ActiveXObject('Microsoft.XMLHTTP');
    }

    x.onreadystatechange=function(){
        if(x.readyState==4 && x.status==200){  
	    document.getElementById('game_field3').innerHTML=x.responseText;  
        }    
    }		
    x.open('GET','action3.php',true); 
    x.send();
}

// ----------------------------------------------------------------------

function ajaxx4(){
    if(window.XMLHttpRequest){
	 x=new XMLHttpRequest();
    }else{
         x=new ActiveXObject('Microsoft.XMLHTTP');
    }

    x.onreadystatechange=function(){
        if(x.readyState==4 && x.status==200){  
	    document.getElementById('buttons').innerHTML=x.responseText;  
        }    
    }		
    x.open('GET','action4.php',true); 
    x.send();
}

// ----------------------------------------------------------------------

  function play1(){
       var audio = document.getElementById("audio1");
       audio.play();
  }

// ----------------------------------------------------------------------

 function play2(){
       var audio = document.getElementById("audio2");
       audio.play();
  }

// ----------------------------------------------------------------------

  function hide(str) {
      //document.getElementById(str).style.visibility= "hidden";
      document.getElementById(str).style.display = "none";
  }

// ----------------------------------------------------------------------

  function end(){
    if(window.XMLHttpRequest){
	 x=new XMLHttpRequest();
    }else{
         x=new ActiveXObject('Microsoft.XMLHTTP');
    }

    x.onreadystatechange=function(){
        if(x.readyState==4 && x.status==200){  
	    document.getElementById('fieldx').innerHTML=x.responseText;  
        }    
    }		
    x.open('GET','action_end.php',true); 
    x.send();
}

// ----------------------------------------------------------------------

function go() {
    return window.parent.location.reload();
}  

// ----------------------------------------------------------------------