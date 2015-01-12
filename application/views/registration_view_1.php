
<!--<form action="/Cw2/index.php/auth_controller/createaccount" method="POST">
    User Category :
    <select name='category' > 
        <option value="P">Patient</option>
        <option  value="D">Doctor</option>
    </select> <br>
    First Name :
    <input type="text" name='fname' length="50" size="50" required>  <br>
    Last Name :
    <input type="text" name='lname' length="50" size="50" required>  <br>
    E-mail  :
    <input type="email" name='email' length="50" size="50" required>  <br>
    Password:
    <input type="password" name='pword' length="50" size="50" required> <br>
    Re-Type Password:
    <input type="password" name='conf_pword' length="50" size="50" required><br><br>
    <input type="submit" value='Register!'>
</form>
<span style="color: red"><?php echo $errmsg ?></span> <br>-->




<html>
    <head>
        <title>Sign Up</title>

        <link rel="stylesheet" type="text/css" href="../../css/style2.css" media="all" />
        <link rel="stylesheet" type="text/css" href="../../css/demo.css" media="all" />
    </head>
    <body>
        <div class="container">
            <!-- freshdesignweb top bar -->

            <header>
                <h1>Sign Up With Your Email</h1>
            </header>       
            <div  class="form">
                <form id="contactform" action="/Cw2/index.php/auth_controller/createaccount" method="POST"> 

                    <p class="category"><label for="name"> Category</label></p> 
                    <select class="select-style gender" name="gender">
                        <option value="select">i am a..</option>
                        <?php
                        foreach ($profiletype->result() as $row) {
                            ?>
                        <option value="<?php echo $row->usertypeid; ?>"><?php echo $row->usertype; ?></option>
                                        <?php }?>

                    </select><br><br>
                    <p class="contact"><label for="name"> First Name</label></p> 
                    <input id="name" name="fname" placeholder="First name" required="" tabindex="1" type="text"> 

                    <p class="contact"><label for="name"> Last Name</label></p> 
                    <input id="name" name="lname" placeholder="last name" required="" tabindex="1" type="text"> 

                    <p class="contact"><label for="email">Email</label></p> 
                    <input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 


                    <p class="contact"><label for="pword">Create a password</label></p> 
                    <input type="password" id="password" name="pword" required=""> 
                    <p class="contact"><label for="conf_pword">Confirm your password</label></p> 
                    <input type="password" id="repassword" name="conf_pword" required=""> <br><br>
                    <span style="color: red"><?php echo $errmsg ?></span> <br> 

                    <input type="submit" value='Register!'>


                </form> 

                <form action="/Cw2/index.php/auth_controller/login">
                    <input type="submit" value="Go Back">
                </form>
            </div>      
        </div>

    </body>
</html>


