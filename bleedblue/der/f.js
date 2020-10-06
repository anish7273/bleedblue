x=document.getElementById('pre');
y=document.getElementById('post');
z=setTimeout(fun,500);

function fun(){ 
  x.style.display="none";
  y.style.display="block";
 }