
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分割工具</title>
    <link rel="shortcut icon" href="http://www.youget.vip/usr/themes/default/img/favicon.ico">
</head>
<body>
    <form action="#" method="post">
        <div>根据<input type="text" name="zf1" style="width: 20px;">分割字符串</div>
        <input type="text" name="wb1">
        <input type="submit"  value="分割">
        <div id="fg1"></div>
    </form>
    <?php

    $fg1=$_POST['wb1'];
    $zf1=$_POST['zf1'];
    //echo $fg1; 
    //var_dump(explode(",",$fg1)) ;
    //echo $fg1;

    $fg0=explode($zf1,$fg1);
    for($fg=0;$fg<count($fg0);$fg++){

        echo $fg0[$fg]."<br>";

    }





    ?>
</body>
</html>