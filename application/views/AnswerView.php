<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Home</title>
        <link href="../../css/styles22.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
<!--
.style7 {
	font-size: 12px;
	font-weight: bold;
}
.style9 {font-size: 12px}
.style11 {font-size: 13px}
-->
        </style>
</head>
    <?php
    $loginUserId = $this->session->userdata('userid');
    $loginUserName = $this->session->userdata('username');
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

                                <br />
                                <div class="si"><input name="" type="search" placeholder="Search..." /></div><div class="searchButtoN"><br><br>
                                    <input name="Search" type="button" value="Advanced Search" /></div>

                            </td>
                            
                            <td style="width: 250px" align="center"><?php if($loginUserId!=0){ ?><a href="/Cw2/index.php/question_controller/HomePage">Home</a><?php }else{ ?><a href="/Cw2/index.php/search_controller/search">Home</a><?php } ?></td>
                            <td style="width: 250px"><?php if($loginUserId!=0){ ?><a href="/Cw2/index.php/question_controller/AskQuestion">Ask A Question</a><?php } ?></td> 
                            <td style="width: 250px"><?php if($loginUserId!=0){ ?><a href="/Cw2/index.php/notification_controller/Notification">Notifications</a><?php } ?></td>
                            <td style="width: 250px"> </td>


                            </td>
                            <td style="width: 200px">
                        <center><img src="../../img/profile.jpg" width="75" height="75">
                            <?php if ($loginUserId == 0) { ?>
                                <br/><? echo $loginUserName; ?><br/>
                                <span> <a href="/Cw2/index.php/auth_controller/login">Login</a></span>
                            <?php } else { ?>
                                <br/><a href="/Cw2/index.php/auth_controller/UserProfile"><? echo $loginUserName; ?></a><br/>
                                <span> <a href="/Cw2/index.php/auth_controller/logout">Logout</a></span>
                            <?php } ?>
                        </center>
                        </td>
                        </tr>
                    </table>
                    <br>

                    <?php foreach ($qtninfo->result() as $row) { ?>
                        <!--View Posted Questoin-->
                        <table width = "80%"  border="0">
                            <tr>
                                <td>
                                    <table width = "100%" border="0">
                                        <!--Question Info-->
                                        <tr>
                                            <td>
                                                <table width = "100%" border="0">
                                                    <tr>
                                                        <td ><u><b><?php echo $row->title; ?></b></u></td>
                                            <td align="right" width="150">Asked by :<br><b><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></b>&nbsp;</td>
                                        </tr>
                                    </table>                                </td>
                            </tr>
                            <!--referance info-->

                            <tr>
                                <td>
                                    <table width = "100%" border="0">
                                        <tr>
                                            <td width="64%" valign="top"><span class="style9"><strong>Posted</strong> <?php echo $row->posteddate; ?></span></td>
                                            <td width="36%" align="right">
											
											<table width = "80%" border="1" cellpadding ="0" cellspacing="0" style = "border: #D0D0D0;">
                                        <tr>
                                            <td height="40" align="left"><span class="style7">&nbsp;CATEGORY : BMI <br> 
                                            &nbsp;TAG :
                                              <?php
                                                foreach ($taginfo->result() as $rowtaginfo) {
                                                    if ($rowtaginfo->questionid == $row->questionid) {
                                                        foreach ($tagname->result() as $rowtagname) {
                                                            if ($rowtagname->tagid == $rowtaginfo->tagmasterid) {
                                                                ?>
                                                      <u><span style="background-color: #6ec2e8"><?php echo $rowtagname->tagname; ?></span></u>&nbsp;
                                              <?php }
                                            }
                                        }
                                    } ?>                                            
                                              </span></td>
                            </tr>
                        </table>        
											</td>
                                        </tr>
                                  </table>                                </td>
                            </tr>
                            <!--tag info-->
                            <tr>
                                <td align = "right">
                                                    </td>
                        </tr>
                        <tr>
                            <td align = "left"><span class="style11"><?php echo $row->description; ?></span></td>
                        </tr>
                        <tr>
                            <td align = "left">
                                <?php if($loginUserId!=0){ ?>
                                <form action="/Cw2/index.php/answer_controller/insert_answer" method="POST">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td height="55" align="center"><label>
                                                    <textarea name="answer" cols="100" required id="answer"></textarea>
                                                </label></td>
                                        </tr>
                                        <tr>
                                            <td align="center"><input type="submit" name="Submit" value="   Post Answer   "></td>
                                        </tr>
                                    </table>
                                </form>
                                <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td align = "left">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align = "left">


                                <!-- start -->

    <?php foreach ($ansinfo->result() as $row) { ?>

                                    <!--View Posted Answer-->
                                    <table width = "100%" style = "border: #000;" border="1">
                                        <tr>
                                            <td>
                                                <table width = "100%" border="0">
                                                    <!--Question Info-->
                                                    <tr>
                                                        <td>
                                                            <table width = "100%" border="0">
                                                                <tr>
                                                                    <td width="20" ><img src="../../img/avatar.png" width="20" height="20" /></td>
                                                                    <td width="175" ><u><b><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></b></u></td>
                                                           <td width="130" ><img src="../../img/rating.png" width="90" height="15" /></td>
                                                            <td align = "left"width="500" >Posted <?php echo $row->posteddate; ?> &nbsp; &nbsp; &nbsp;<span style="color: green">Upvote </span><u><a style="color: green"><?php echo $row->upvotes; ?></a></u> &nbsp;<span style="color: red">Downvote </span> <u><a style="color: red"><?php echo $row->downvotes; ?></a></u></td>
                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                      
                                        <!--answer info-->
                                        <tr>
                                            <td align = "center">
                                                <table width = "95%" style = "border: #D0D0D0;" border="0" cellpadding ="10">
                                                    <tr>
                                                        <td>
                                                         <b><span><?php echo $row->answer; ?></span></b>&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </table>
                            </td>
                            </tr>
                            </table>
                            <br>

    <?php } ?>








                        <!--end -->




                        </td>
                        </tr>
                        </table>
                        </td>
                        </tr>
                        </table>
                        <br>
<?php } ?>


















                    <!--                    <form action="/Cw2/index.php/auth_controller/SearchItem" method="POST">
                                           
                                        </form>-->
                    <hr size="1"/>
                    <br>
                    <div >
                        <p>
                            Copyright &copy; 2014. Designed by Upendra Guneratne<br />
                        </p>
                    </div>

                </div>

            </div>

        </div>
        <!-- end #container -->

    </body>
</html>


