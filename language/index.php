<?php
// include "config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php

if(isset($_GET['lang'])){
  $lang = $_GET['lang'];
}
else{
     $lang ="en";

}

 if($lang =="am") 
    include "am.php";
  if($lang =="en") 
    include "en.php";
 if($lang =="ru") 
    include "ru.php";

 
 
 

?>

<a href="index.php?lang=ru">Russian</a>
<a href="index.php?lang=en">English </a>
 <a href="index.php?lang=am">Armenian</a>
 

    <h1><?=home?></h1> 
    <h1><?=about?></h1> 
    <h1><?=contact?></h1> 
     


    

</body>
</html>