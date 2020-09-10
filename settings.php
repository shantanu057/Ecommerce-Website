<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    
    <body>
        
        <div class="bg-img">
        <div class="container-fluid settings_container">
            <div class="row">
                <div class="hl"></div>
                <div class="col-lg-4 col-lg-offset-4">
                    <h3 style="text-align:center">Change Your Password</h3>
                    <form action="settings_script.php" method="post" style="margin-top:60px">
                        <div class="form-group">
                            <label for="old password" style="text-align:center">Old Password</label>
                            <input type="password" class="form-control" name="old password" placeholder="Enter Your Old Password" required="true">
                        </div>   
                            <div class="form-group">
                                <label for="new password">New Password</label>
                                <input class="form-control" type="password" name="new password" placeholder="Enter Your New Password" required="true">
                            </div>   
                                <div class="form-group">
                                    <label for="new passwod1">Re-enter Your Password</label>
                                    <input type="password" class="form-control" name="new password1" placeholder="Re-enter Your Password" required="true">
                                </div>
                        <button style="margin-top:20px" type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div><br><br><br>
            <div> <?php include 'footer.php';?></div>
        </div>
        
        
    </body>
</html>