<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
        body{
        background: url("https://cdn.pixabay.com/photo/2012/03/03/23/06/wall-21534__340.jpg");
        background-size: cover;
    }
    #form{
        width: 300px;
        height: 300px;
        background: rgb(47, 33, 33);
        opacity: 0.8;
        border-radius: 10px;
         margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        font-size:20px;
        color: white;
    }
input{
    background: black;
        color: white;
 }
 input:nth-child(3){
            background: red;
          }

</style>
<body>

<form id="form" action="index.php" method="post">
<label>P1=<input type="text" name="login1"></label> 
<label>P1=<input type="text" name="login2"></label> 
        <input type="submit" value="SEND">
        </form>
 
</body>
</html>