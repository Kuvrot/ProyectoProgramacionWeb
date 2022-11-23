//Este archivo usa ajax a través de javascript nativo para que en caso de introudcir la contraseña 
//incorrecta, el usuario sea notificado con un mensaje 

document.getElementById('login').onclick = function (){

  let xhr = new XMLHttpRequest();    
  let data = new FormData (document.getElementById('login_data'));
  
  xhr.open('post' , "../apis/auth.php");
  
  xhr.send(data);

  xhr.onload = () => {
      
   
      if (xhr.responseText.length < 10){
        window.location.href = "../index.php";
      }else{
          document.getElementById('auth_response').innerHTML = xhr.responseText;
      }
  
    };
  


 
  
  
  };