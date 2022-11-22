//Este archivo usa ajax a través de javascript nativo para que en caso de introudcir la contraseña 
//incorrecta, el usuario sea notificado con un mensaje 

document.getElementById('login').onclick = function (){

  let xhr = new XMLHttpRequest();    
  let data = new FormData (document.getElementById('login_data'));
  
  xhr.open('post' , "../apis/auth.php");
  
  xhr.onload = () => {
      
      let answer_0 = JSON.stringify("TRUE");
      let answer = JSON.parse(answer_0);
      let response_00 = String(xhr.responseText);
      let response_0 = JSON.stringify(response_00);
      let response = JSON.parse(response_0);
      
      if (response == answer){
        window.location = '../index.php';
      }else{
          document.getElementById('auth_response').innerHTML = response;
      }
  
    };
  
  xhr.send(data);
  
  
  };