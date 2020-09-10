<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    
    <body>
        <div class="container-fluid">
        <div class="container_text col-lg-12 col-sm-6 col-xs-3">
        <div class="img_cont">
            <img class="img-responsive" src="images/contact1.jpg" alt="shan.jpg">
        </div>
        <h1 style="margin-left: 20px" >LIVE SUPPORT</h1>
        <h3 style="margin-left: 20px">24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
        <p style="margin-left: 20px">Amazon is guided by four principles: customer obsession rather than competitor focus, passion for invention, commitment to operational excellence, and long-term thinking.
                   Leadership Principles
                   Working at Amazon
                   Our Positions
                   Diversity and inclusion
                   Awards and recognition</p>
        </div>
        <form method="post" action="contactus_script.php">
        <div class="container_cont col-lg-12 col-sm-8 col-xs-4">
            <div class="row">
                <div class="col-lg-4">
                    <label for="fname" style="font-size: 25px;margin-left: 20px;font-family:cursive">First Name</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" placeholder="Enter Your First Name" name="firstname" class="input_cont">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="lname" style="font-size: 25px;margin-left: 20px;font-family:cursive">Last Name</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" placeholder="Enter Your Last Name" name="lastname" class="input_cont">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="email" style="font-size: 25px;margin-left: 20px;font-family:cursive">Email</label>
                </div>
                <div class="col-lg-8">
                    <input type="email" placeholder="Enter Your Email Id" name="email" class="input_cont">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="mess" style="font-size: 25px;margin-left: 20px;font-family:cursive">Message</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" placeholder="Enter Your Query" name="message"class="input_mess">
                </div>
            </div>
            <br>
             <a href="#"><input  class="submit submit_btn_cont" type="submit" value="Submit"></a>
        </div>
            </form>
        </div>
               <br>
        <br>
       
        <?php include 'footer.php';?>
      
    </body>
    
</html>