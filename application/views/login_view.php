<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home</title>
        <link href="../../css/styles22.css" rel="stylesheet" type="text/css" />
    </head>
    <?php 
        $loginUserId = $this->session->userdata('userid');
        $loginUserName =$this->session->userdata('username');
    ?>
    <body >

        <div id="container" >
            <!-- begin #header -->
            <div id="header">
                <div class="headerTop">
                    <div class="logo" >
                        <a href=""><img src="../../img/logo.png" alt="" width="179" height="77" /></a>Health and Fitness Pro
                    </div>

                </div>

                <div class="mainMenu">
                    <table style="width: 100%">
                        <tr >
                            <td style="width: 200px"> </td>
                            <td style="width: 250px" align="center"></td>
                             <td style="width: 250px" align="center"></td>
                            <td style="width: 250px" align="center"></td>
                              <td style="width: 250px"> </td>
							  <td style="width: 200px"></td>
                        </tr>
                    </table>
                    <br><br><br>
                  
 <center>
<table width="80%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><table width="65%" border="0" cellspacing="5" cellpadding="0">
      <tr>
        <td height="30" align="center">
            <form action="/Cw2/index.php/auth_controller/register" method="POST">
            <img src="../../img/mail.png" width="53" height="47">
            <input type="submit" value='   SignUp with Email    '  style="height:50px; width:200px;font:Tahoma, Geneva, sans-serif;font-size:16px;font-weight:bold;cursor:pointer">
        </form>
           </td>
      </tr>
    </table><br/>
     <form action="/Cw2/index.php/search_controller/search">
                    <input type="submit" value="Go Back" style="height:50px; width:200px;font:Tahoma, Geneva, sans-serif;font-size:16px;font-weight:bold;cursor:pointer">
                </form>
    
    </td>
    <td align="center" bgcolor="#000000" width="1"></td>
    <td align="center"><table width="80%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
		<form action="/Cw2/index.php/auth_controller/authenticate" method="POST">
                   <br><br> <label for="email">Email:</label><br>
            <input type="email" name='uname' length="10" size="30" required style="height:28px"> <br><br>
            <label for="username">Password:</label><br><input type="password" name='pword' length="15" size="30" required> <br>
            <!--<p><a href="#">Forgot your password?</a>-->
                
            <div id="lower"><br>
                <!--<input type="checkbox" value ="rme" name ="remember"><label class="check" for="checkbox">Remember me</label><br><br>-->
                <input type="submit" value="  Login  ">
            </div>
        </form>
		
		</td>
      </tr>
	   <tr>
        <td><br>&nbsp;<span style="color: red"><?php echo $errmsg ?></span> </td>
      </tr>
    </table></td>
  </tr>
</table>
</center>
<br><br>
<hr><div id="footer">
                <p>
                    Copyright &copy; 2014. Designed by Upendra Guneratne<br />
                </p>
            </div>
                </div>

            </div>
            <!-- end #header -->

           
            <!-- end #footer -->
        </div>
        <!-- end #container -->
    </body>
</html>
