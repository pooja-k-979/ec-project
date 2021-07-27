<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <title>Sign up</title>
        <!--minifies bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<!--        <style>
         
               .modal_container{
  background-color: rgba(0,0,0,0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  border-width: 20px;
 height: 100%;
  width: 100%;
}
.modal{
    background-color: #fff;
    border-width: 20px;
    border-radius: 20px;
    border-color: #c7254e;
    box-shadow: 0 2px 4px rgba(0,0,0,0.7);
    padding: 30px 50px;
    width: 300px;
    max-width: 100%; /*keep the modal content inside the modal*/
    text-align: center;
        </style>-->
        
        <link href="ec_style.css" type="text/css" rel="stylesheet"/>
        
    </head>
    
<!--    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estyle.css" type="text/css" rel="stylesheet"/>
        <style>
         
               .modal_container{
  background-color: rgba(0,0,0,0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  border-width: 20px;
 height: 100%;
  width: 100%;
}
.modal{
    background-color: #fff;
    border-width: 20px;
    border-radius: 20px;
    border-color: #c7254e;
    box-shadow: 0 2px 4px rgba(0,0,0,0.7);
    padding: 30px 50px;
    width: 300px;
    max-width: 100%; /*keep the modal content inside the modal*/
    text-align: center;
        </style>
     
    </head>-->
    <body>
        
        
        <div class="hero">
             
               <div class="modal-container"  id="signup_container">
                       
                             <div id="modal" >
                                 <form id="Register_modal" method="post" action="user_registration_script.php">
                                
                                     <div class="form-group">
                                        <!--<label for="yourname">Your name:</label>-->
                                        <input type="text" class="form-control input-lg" name="yourname" placeholder="Name">   
                                     </div>
                                     <div class="form-group">
                                        <input type="text" class="form-control" name="email" placeholder="Email" >
                                     </div>
                                     <div class="form-group">
                                        <input type="password" class="form-control" name="email" placeholder="Password" >
                                    </div>
                                    <div class="form-group">
                                         <input type="tel" class="form-control" name="contact" placeholder="Contact" >  
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" placeholder="City" >  
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="address" placeholder="Address" >  
                                    </div>
                                
                                     <div class="row">
                                         <div class="col-lg-4">
                                             
                                         </div>
                                         <div class="col-lg-4">
                                             <button <input type="submit" class="btn btn-primary btn-block">Continue</button>
                                         </div>
                                         <div class="col-lg-4">
                                             <button <input type="close" class="btn btn-primary btn-block">Close</button>
                                         </div>
                                     </div>
                                 
                                 </form>
                             </div>
                </div> 
            <div class="bubbles">
                <img src="ecommerce images/bubble.png"> 
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
                <img src="ecommerce images/bubble.png">
            </div>
                        
    </div>
        
</body>
</html>