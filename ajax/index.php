<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="sendRequest()">
        Envia Una Petición
    </button>
    <script>
    function sendRequest(){
       var elObjeto = new XMLHttpRequest();
        
        elObjeto.open('GET','backend.php',true);
        //tipo de petición
        elObjeto.setRequestHeader('Content-Type','application/x-ww-form-urlencoded');
        
        elObjeto.onreadystatechange = function(){
            console.log(elObjeto.responseText);
        }
        //envio la peticion
        elObjeto.send();    

    }
    </script>
</body>
</html>