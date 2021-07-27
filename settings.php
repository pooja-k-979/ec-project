<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>My first website</title>
        <!--minifies bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="ec_style.css" type="text/css" rel="stylesheet"/>
        
    </head>
    <body>
     <!--navbar-->
     <div class="container-fluid">
        <nav class="nav navbar navbar-inverse ">
            <div class="container-fluid nav_container">
                <div class="navbar-header ">
                       <a href="#" class="navbar-brand">E-Store</a>
                </div>
                      
                <div class="collapse navbar-collapse" id="myNavbar">
                <div>
                         <ul class="nav navbar-nav navbar-right">
                            <li><a href="ec_cart.php" target="_blank"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                            <li><a href="ec_settings.php" ><span class="glyphicon glyphicon-cog"></span> Settings</a> </li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                            <li><a href="#"><span class=" glyphicon glyphicon-earphone"></span> Contact us</a></li>
                         </ul>
                             
                </div>
            </div>
         </nav> 
     </div>
      
     <!--body-mobile purchasing-->
     <div class="container">
         <div class="row row_style">
             <div class="col-lg-4">
                                   
             </div>
             
             <div class="col-lg-4">
                 
                    <form id="Register_modal" method="post" action="user_registration_script.php">
                        <h4>Change Password</h4>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" >
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" >
                        </div>

                        <div class="row">
                             <div class="col-lg-4">

                             </div>
                             <div class="col-lg-4">
                                 <button <input type="submit" class="btn btn-primary btn-block">Continue</button>
                             </div>

                         </div>
                    </form>
                                  
             </div>
             
         </div>
    </div>
        
           
      
     <!--footer-->
     <div class="footer footer_style">
           <div class="row ">
               
               <div class="col-xs-4 ">
                  <div class="panel panel-default column_style">
                      <h4>Information</h4>
                   </div>
                   </div>
               <div class="col-xs-4 ">
                   <div class="panel panel-default column_style">
                      <h4>My account</h4>
                   </div>
               </div>
               <div class="col-xs-4 ">
                   <div class="panel panel-default column_style">
                      <h4>Contact us</h4>
                   </div>
               </div>
               
               <div class="col-xs-4">
                   <div class="panel panel-default column_style">
                      <h6>About us</h6>
                   </div>
               </div>
               
               <div class="col-xs-4">
                   <div class="panel panel-default column_style">
                       <a href="ec_signin.php"><h6><h6>Login</h6></a>
                      
                   </div>
               </div>
               
               <div class="col-xs-4">
                   <div class="panel panel-default column_style">
                      <h6>Contact +91-123-0000000</h6>
                   </div>
               </div>
               
               <div class="col-xs-4">
                   <div class="panel panel-default column_style">
                      <h6>Contact us</h6>
                   </div>
               </div>
               
               <div class="col-xs-4">
                   <div class="panel panel-default column_style" >
                       <a href="ec_signup.php"><h6>Sign up</h6></a>
                   </div>
               </div>
                   
               
           </div>
       </div>
       
     <!--for sign in modal-->
     <div id="modalbox" class="modal">
                                <div class="modalcontent">
                                
                                    <h4>Don't have an account? <a href="ec_signup.php">Sign up</a></h4>
                                    <br>
                                <form id="Register_modal" method="post" action="user_registration_script.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" >
                                    </div>
                                    
                                    <div class="row">
                                         <div class="col-lg-4">
                                             
                                         </div>
                                         <div class="col-lg-4">
                                             <button <input type="submit" class="btn btn-primary btn-block">Continue</button>
                                         </div>
<!--                                         <div class="col-lg-4">
                                             <div class="callout" data-closable>
                                                <button class="close-button modalclose" aria-label="Close alert" type="button" data-close>
                                                    <a href="#" class="modalclose">Close</a>
                                                </button>
                                              </div>
                                            <label for="click" class="close-btn">Close</label>
                                         </div>-->
                                     </div>
                                 
                                 </form>
                                    <a href="#" class="modalclose">&times;</a>
                                </div>
                            </div>   
       
    </body>
</html>