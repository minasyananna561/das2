<?php
include  'lang.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                body{
        background: url("https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80");
        background-size: cover;
    }
    #flag{
        width: 200px;
        height: 100px;
        margin: auto;
        display: flex;
        flex-direction: row;
        justify-content: space-around;

    }
    #menu{
    width: 70%;
    height: 70px;
    margin:auto;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
button{
    width:50px;
    height:50px;
}
#menu>div{
    width: 20%;
    height: 50px;
    border-radius: 20px;
    background: rgb(132, 132, 242);
    font-size:25px;
    color: aquamarine;
    display: flex;
    justify-content: center;
    align-items: center;
}
#about{
    width: 30%;
    height: 55px;
    border-radius: 20px;
    background: rgb(132, 132, 242);
    font-size:25px;
    margin-left:230px;
    color: aquamarine;
    display: flex;
    justify-content: center;
    align-items: center;
}
#container{
        width: 80%;
        height: 400px;
        margin:auto;
        margin-top:20px;
        border-radius: 10px;
        background: rgb(132, 132, 242);
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    #item1{
        width: 35%;
        height: 230px;
        background: url("https://www.php.net/images/logos/new-php-logo.svg");
        background-size: cover;
    }
    #item2{
        width: 60%;
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }


    </style>
</head>
<body>
    <?php
if(empty($_POST['login1']) or empty($_POST['login2'])){
    $log1=0;
    $log2=0;
}else{
    $log1=$_POST['login1'];
$log2=$_POST['login2'];

}

if($log1<="50"&$log2<="50"){
    $k1="<img src='https://ufcw1189.org/sites/default/files/styles/large/public/apple.jpg?itok=eWv8xHIS' width='150px'>";
}else{
    $k1="<img src='https://media.istockphoto.com/id/185284489/photo/orange.jpg?s=170667a&w=0&k=20&c=hr-EKUlQG2twBQaJLHeezeHTQ20Zy-o4fvhc9H2Svos=' width='150px'>";
}




    ?>
<div id="flag">
    <button><a href="index.php?lang=en"><img src="https://i.pinimg.com/474x/76/91/d5/7691d5bdada612c80f4f2374b513639a.jpg" width="40px"></a></button>
    <button><a href="index.php?lang=ru"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaKkjvb5w0ivG_YmCGERj1iNR92tBlqRIEJDDzXHXZpg&s" width="40px"></a></button>
    <button><a href="index.php?lang=am"><img src="https://www.countryflags.com/wp-content/uploads/armenia-flag-png-xl.png" width="40px"></a></button>
</div>
<div id="menu">
    <div><?= __('home')?></div>
    <div><?= __('about')?></div>
    <div><?= __('products')?></div>
    <div><?= __('contacts')?></div>
   </div>
<div id="about">ABOUT PHP</div>
<div id="container">
       <div id="item1"></div>
       <div id="item2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati eum quod maiores expedita? Repellendus, consequuntur nostrum facilis magni ipsa incidunt quod a, laborum ullam possimus molestiae, dolore et ducimus velit.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti sed, dignissimos, esse mollitia nihil odio veritatis sequi illum dolore labore molestiae suscipit quaerat at deserunt inventore ipsam pariatur repellat sunt!</p>
       </div> 
    </div>
<div>
    <?=$k1 ?>
</div>
</body>
</html>