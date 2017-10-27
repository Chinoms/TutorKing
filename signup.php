<?php
require 'inc/header.php';
?>
    <body>
        <div class="col-lg-6">
            <div class="col-md-12" height:300px  ">
                 <div class="col-md-12" >
                     <form class="signupform" enctype="multipart/form-data" method="POST" action="modules/addTutor.php">
                         
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Phone Number</label>
                                <input type="text" name="phonenum" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Repeat Password</label>
                                <input type="password" name="password2" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Profile Picture</label>
                                <input type="file" name="passport" class="form-control" data-toggle="tooltip" title="Click below to select file.">
                            </div>
                        </div>
                        
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label class="control-label">Your CV</label>
                                <input type="file" class="form-control" data-toggle="tooltip" title="Click below to select file.">
                            </div>
                        </div>
                         
                          <div class="col-md-5">
                            <div class="form-group label-floating">
                                <br>
                                
                                <input type="submit" class="btncustom btn-primary-custom" data-toggle="tooltip">
                            </div>
                        </div>
                        
                        
                        
                        
                </div>

            </div>  

        </div>

        <div  id="rightdiv" class="col-lg-6">
            ,l,l,l
        </div>
       <?php
       require 'inc/footer.php';
       
       ?>