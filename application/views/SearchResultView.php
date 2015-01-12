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
                                
                            </td>
                            <td style="width: 250px" align="center">
                                 <?php if($loginUserId !=0){ ?>
                                <a href="/Cw2/index.php/question_controller/HomePage">Home</a>
                                <?php  } ?>
                            </td>
                             <td style="width: 250px">
                                 <?php if($loginUserId !=0){ ?>
                                 <a href="/Cw2/index.php/question_controller/AskQuestion">Ask A Question</a>
                                 <?php  } ?>
                             </td> 
                             <td style="width: 250px">
                                 <?php if($loginUserId !=0){ ?>
                                 <a href="/Cw2/index.php/notification_controller/Notification">Notifications</a>
                                 <?php  } ?>
                             </td>
                              <td style="width: 250px"> </td>
                             
                               
                            </td>
                            <td style="width: 200px">
                        <center><img src="../../img/profile.jpg" width="75" height="75">
                           <?php if($loginUserId ==0){ ?>
                            <br/><? echo $loginUserName; ?><br/>
                            <span> <a href="/Cw2/index.php/auth_controller/login">Login</a></span>
                        <?php  }else{ ?>
                            <br/><? echo $loginUserName; ?><br/>
                            <span> <a href="/Cw2/index.php/auth_controller/logout">Logout</a></span>
                        <?php  } ?>
                        </center>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <form action="/Cw2/index.php/search_controller/SearchItem_json" method="POST">
                        <table width="88%" border=0 style="width: 100%">
                        <tr>
                            <td align="center" style="width: 250px">Search By Question</td>
                            <td colspan="2"><input type="text" name='qtnSearch' length="10" size="30" id="qtnSearch"></td>
                            
                        </tr>
                        <tr>
                            <td height="29" align="center">Search By Tag</td>
                            <td colspan="2" style="width: 150px"><input name='ansSearch' type="text" size="30" length="10" id="ansSearch"></td>
                           
                        </tr>
                        <tr>
                            <td height="34"></td>
                            <td  style="width: 100px"><input type="submit" value="    Search   "></td>
                            <td >
                                <select name="typeSearch" id="typeSearch">
                                    <option value="0">Filter</option>
                                    <option value="1">Most Recent</option>
                                    <option value="2">Most Answers</option>
                                    <option value="3">Most Views</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                    </table>
                  </form><hr size="1"/>
                    <br>
                    <center>
                    <?php foreach ($qtninfo->result() as $rowinfo) {
                        $data1 = json_encode($rowinfo);
                        $row = json_decode($data1);
                        //var_dump($row);
                        
                        
                        ?>
                        <!--View Posted Question-->
                        <table width = "80%" style = "border: #000;" border="1">
                            <tr>
                                <td>
                                    <table width = "100%" border="0">
                                        <!--Question Info-->
                                        <tr>
                                            <td>
                                                <table width = "100%" border="0">
                                                    <tr>
                                                        <td width="20" ><img src="../../img/arrow.png" width="20" height="20" /></td>
                                                        <td width="250" ><u><b><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></b></u></td>
                                            <td align = "left"width="120" ><img src="../../img/rating.png" width="90" height="15" /></td>
                                            <td><b><a href="/Cw2/index.php/answer_controller/PostAnswer?qtid=<?php echo $row->questionid; ?>"> <?php echo $row->title; ?></a></b></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!--referance info-->
                         
                            <tr>
                                <td>
                                    <table width = "100%" border="0">
                                        <tr>
                                            <td>Posted <?php echo $row->posteddate; ?></td>
                                            <td><?php echo $row->views; ?> Views</td>
                                            <td><?php echo $row->noofanswers; ?> Answers </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!--tag info-->
                            <tr>
                                <td align = "left">
                                    <table width = "80%" style = "border: #D0D0D0;" border="0" cellpadding ="10">
                                        <tr>
                                            <td>
                     <?php 
                     
                     foreach ($taginfo->result() as $rowtaginfo) { 
                        
                         if($rowtaginfo->questionid == $row->questionid){
                             foreach ($tagname->result() as $rowtagname) {
                                if($rowtagname->tagid == $rowtaginfo->tagmasterid ){
                     ?>
                            <u><b><span style="background-color: #6ec2e8"><?php echo $rowtagname->tagname; ?></span></b></u>&nbsp;
                    <?php  }}}} ?>
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
              </center>      
              </div>
        
            </div>
            <!-- end #header -->
      
            <div id="footer">
                <p>
                    Copyright &copy; 2014. Designed by Upendra Guneratne<br />
                </p>
            </div>
            <!-- end #footer -->
        </div>
        <!-- end #container -->
    </body>
</html>


