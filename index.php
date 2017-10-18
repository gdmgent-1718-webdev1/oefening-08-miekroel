<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
.grijs{
    width :50px;
    height:50px;
    float: left;
    
  
}
</style>
    <div id="div">
    <?php
    for($i = 0;  $i < 50; ++$i ){
        $color = $i*5;
       //TODO kleur laten werken. DIV's worden aangemaakt maar krijgen geen kleur toegekend
        echo "<div class='grijs' style='background-color: rgba($color, $color, $color,1)'></div>";
    }


?>
    
    
    </div>
</body>
</html>
