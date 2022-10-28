
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>排序工具</title>
    <link rel="shortcut icon" href="http://www.youget.vip/usr/themes/default/img/favicon.ico">
</head>
<body>
    <form action="#" method="post">
        <div>始：<input type="text" name="zf1" style="width: 20px;" placeholder="1">   <br>  终：<input type="text" name="zf2" style="width: 20px;" placeholder="20"></div>
        <div>
        <textarea name="wb1" id="" cols="30" rows="3" placeholder="前字段"></textarea>序号位置
        <textarea name="wb2" id="" cols="30" rows="3" placeholder="后字段"></textarea>
        </div>
        <input type="submit"  value="排序">
        <div id="fg1"></div>
    </form>
    <?php

    $wb1=$_POST['wb1'];
    $wb2=$_POST['wb2'];
    $zf1=$_POST['zf1'];
    $zf2=$_POST['zf2'];


    for($zf1;$zf1<=$zf2;$zf1++){
        echo $wb1.$zf1.$wb2;
        echo "<br>";
    }



    ?>
</body>
</html>