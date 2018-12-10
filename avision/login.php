<html>
<head>
    <title> Login </title>
    <link href="/include?style_admin.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="center">
        <div class="login100-form-avatar">
                        <img src="tugu image/login.png" alt="AVATAR">
                    </div>
                </div>
    <div id="header"><center>Form Login</center></div>
    <form name="form1" method="post" action="cek_login.php">
        <table align="center" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="30" align="center">Username</td>
                <td width="154" valign="middle"> : <input name="id_user" type="text" id="id_user"></td>
            </tr>
            <br>
            <tr>
                <td align="center">Password</td>
                <td> : <input name="password" type="password" id="password"></td>
            </tr>
            <tr>
            <td colspan="3"><input type="submit" name="submit" value="Login"></td>
            </tr>
            
                    <div class="text-center w-full p-t-25 p-b-230">
                        <a href="#" class="txt1">
                            Forgot Username / Password?
                        </a>
                    </div>

                    <div class="text-center w-full">
                        <a class="txt1" href="index.html">
                            Create new account
                            <i class="fa fa-long-arrow-right"></i>                      
                        </a>
                    </div>
        </table>
    </form>
</body>
</html>