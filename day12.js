function emailsend(){

    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var content = document.getElementById("content").value;

    var form = new FormData();

   form.append("e",email);
   form.append("s",subject);
   form.append("c",content);

   var request = new XMLHttpRequest();

   request.onreadystatechange = function() {

    if(request.readyState == 4 && request.status == 200){

        var response = request.responseText;

        if(response == "success"){
            window.location.reload();
        }else{
        
        alert(response);
        }
    }
        
   }
   request.open("POST","process.php", true);
   request.send(form);
 
}