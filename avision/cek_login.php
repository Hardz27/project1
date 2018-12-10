<?php
mysql_connect("localhost","root","");
mysql_select_db("tugu");
$login=mysql_query("SELECT * FROM id_user WHERE id_user='$_POST[username]' AND password='$_POST[password]'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);
if ($ketemu>0){
            session_start();
            
            session_register("userame");
            session_register("password");
            $_SESSION[username]=$r[username];
            $_SESSION[password]=$r[password];
            header('location:index.php');
}
else{
            echo("login gagal username dan password tidak benar<br>");
            echo("<a href=profile.php>ulangi lagi</a>");
}
?>