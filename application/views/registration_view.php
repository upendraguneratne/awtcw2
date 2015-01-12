<html>
    <head>
        <title>Sign Up</title>

        
    <style type="text/css">
    .titileSty {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 13px;
	font-weight: bold;
}
    .styHead {
	font-family: Tahoma, Geneva, sans-serif;
	color: #000000;
	font-weight: bold;
	font-size: 30px;
}
    .aaa {
	font-size: 36px;
}
    .strerr {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
    </style>
     <link href="../../css/styles22.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
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
    
            <!-- freshdesignweb top bar -->

         
                <span class="aaa"><span class="styHead">Sign Up With Email </span><br/><br/>
                </span>
        <form id="contactform" action="/Cw2/index.php/auth_controller/createaccount" method="POST"> 

                    <table width="60%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="243" height="30" class="titileSty">&nbsp;</td>
                        <td width="243" class="titileSty">User Category</td>
                        <td width="7">:</td>
                        <td width="409"><select class="select-style gender" name="category">
                         <option value="0">i am a..</option>
                        <?php
                        foreach ($profiletype->result() as $row) {
                            ?>
                        <option value="<?php echo $row->usertypeid; ?>"><?php echo $row->usertype; ?></option>
                                        <?php }?>

                  </select></td>
                      </tr>
                      <tr>
                        <td width="243" height="30" class="titileSty">&nbsp;</td>
                        <td width="243" class="contact">
                          <label for="name2" class="titileSty">First Name</label>
                        </td>
                        <td>:</td>
                        <td><input id="name" name="fname" placeholder="First name" required tabindex="1" type="text"> </td>
                      </tr>
                      <tr>
                        <td width="243" height="30" class="titileSty">&nbsp;</td>
                        <td width="243" class="contact">
                          <label for="name3" class="titileSty">Last Name</label>
                        </td>
                        <td>:</td>
                        <td><input id="name" name="lname" placeholder="last name" required tabindex="1" type="text"> 
</td>
                      </tr>
                      <tr>
                        <td width="243" height="30" class="titileSty">&nbsp;</td>
                        <td width="243" class="titileSty">Email</td>
                        <td>:</td>
                        <td><input id="email" name="email" placeholder="example@domain.com" required type="email"> </td>
                      </tr>
                      <tr>
                        <td width="243" height="30" class="titileSty">&nbsp;</td>
                        <td width="243" class="titileSty">Create a password</td>
                        <td>:</td>
                        <td><input type="password" id="password" name="pword" required> </td>
                      </tr>
                      <tr>
                        <td width="243" height="30" class="titileSty">&nbsp;</td>
                        <td width="243" class="titileSty">Confirm your password</td>
                        <td>:</td>
                        <td><input type="password" id="repassword" name="conf_pword" required></td>
                      </tr>
                      <tr>
                        <td height="40">&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td> <input type="submit" value='Register!'></td>
                      </tr>
                      <tr>
                        <td height="40" colspan="4" align="center" ><span style="color: red"><?php echo $errmsg ?></span></td>
                      </tr>
                    </table>
      </form> 
                <form action="/Cw2/index.php/auth_controller/login">
                    <input type="submit" value="Go Back">
                </form>
        
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



