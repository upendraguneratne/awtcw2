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
    <body>

        <div id="container">
            <!-- begin #header -->
            <div id="header">
                <div class="headerTop">
                    <div class="logo">
                        <a href=""><img src="../../img/logo.png" alt="" width="179" height="77" /></a>Health and Fitness Pro
                    </div>

                </div>

                <div class="mainMenu">
                    <table style="width: 100%">
                        <tr >
                            <td style="width: 200px">
                               
                                    Search Questions:<br />
                                    <div class="si"><input name="" type="text" /></div><div class="searchButtoN"><input name="Search" type="button" value="Search" /></div>
                                
                            </td>
                            <td style="width: 250px" align="center"><a href="/Cw2/index.php/question_controller/HomePage">Home</a></td>
                             <td style="width: 250px"><a href="/Cw2/index.php/question_controller/AskQuestion">Ask A Question</a></td> 
                             <td style="width: 250px"><a href="/Cw2/index.php/notification_controller/Notification">Notifications</a></td>
                              <td style="width: 250px"> </td>
                             
                               
                            </td>
                            <td style="width: 200px">
                        <center><img src="../../img/profile.jpg" width="75" height="75">
                           <?php if($loginUserId ==0){ ?>
                            <br/><? echo $loginUserName; ?><br/>
                            <span> <a href="/Cw2/index.php/auth_controller/login">Login</a></span>
                        <?php  }else{ ?>
                            <br/><a href="/Cw2/index.php/auth_controller/UserProfile"><? echo $loginUserName; ?></a><br/>
                            <span> <a href="/Cw2/index.php/auth_controller/logout">Logout</a></span>
                        <?php  } ?>
                        </center>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <!-- Data Body -->
<!--                    <form action="/Cw2/index.php/question_controller/insert_question" method="POST">
                        
                    </form>-->
notifications <hr><div id="footer">
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
