<?php
    setcookie("test_cookie","test",time()+3600,'/');?>

<!DOCTYPE html>
<html>
<body>
<?php
    if(count($_COOKIE)>0){
        echo "Cookies enable.";
    }else{
        echo "Cookies disabled.";
    }
?>

</body>
</html>