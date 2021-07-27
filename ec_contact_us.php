 <html>
    <head>
        <title>contact us </title>
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
        <div class="contact_pg_background_color">
            
           
<!--navbar-->
<nav class="nav navbar navbar-inverse ">
      <div class="container-fluid nav_container">
          <div class="navbar-header ">
                 <a href="#" class="navbar-brand">E-Store</a>
          </div>

          <div class="collapse navbar-collapse" id="myNavbar">
          <div>
                   <ul class="nav navbar-nav navbar-right">
                      <li><a href="ec_signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                      <li><a href="#modalbox" ><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
                      <li><a href="#"><span class="glyphicon glyphicon-th-list"></span> About us</a></li>
                      <li><a href="#"><span class=" glyphicon glyphicon-earphone"></span> Contact us</a></li>
                   </ul>

          </div>
      </div>
   </nav>

<!--body_of_contact_page-->

<div class="container-fluid">
    <!--1st row-->
    <div class="row ">
        <div class="col-xs-8 ">
           <div >
               <h3>Have any questions? We would love to hear from you</h3>
               <!--<h3>We would love to hear from you</h3>-->
            </div>
            </div>
        
    </div>
    <br><br>
    <!--2nd row?-->
    <div class="row ">
        <div class="col-xs-6 ">
                            <div class="container-fluid">
                                <h2>CONTACT US</h2>
                                 <form id="Register_modal" method="post" action="user_registration_script.php">
                                
                                     <div class="form-group">
                                        <label for="yourname">Name</label>
                                        <input type="text" class="form-control input-lg" name="Name" >   
                                     </div>
                                     <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" >
                                     </div>
                                    <div class="form-group">
                                         <label for="contact">Contact</label>
                                         <input type="tel" class="form-control" name="contact">  
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="issuefaced">Issue faced</label>
                                        <input type="text" class="form-control" style="font-size:14pt;height:150px" name="issuefaced" >  
                                    </div>
                                
                                     <div class="row">
                                         <div class="col-lg-4">
                                             
                                         </div>
                                         <div class="col-lg-3">
                                              <a href="#support_confirmation" > Submit</a> 
                     
                                            <!--<a href="#support_confirmation"> <button <input type="submit" class="btn btn-primary btn-block">Submit</button></a>-->
                                         </div>
                                         
                                     </div>
                                 
                                 </form>
                               
                            </div>    
        </div>
    </div>
</div>
<br><br><br><br>
<!--footer-->
<div class="footer column_style">
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
                       <a href="#modalbox"><h6>Login</h6></a>
                      
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

<!--login modal-->
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

<!--support confirmation modal-->

                            <div id="support_confirmation" class="modal">
                                
                                
                                <div class="modalcontent">
                                    <div class="modal-header modal_header_color">
                                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                    <h4 class="modal-title background-color">Confirmation</h4>
                                </div>
                                    <h3>A Confirmation code has been sent to your Email id. Please click on the link in the mail to confirm your Query.</h3>

                                    <a href="#" class="modalclose">&times;</a>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary ">Save changes</button>
                                        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                    </div>
                                </div>
                            </div>




</div>
    </body>
</html>
