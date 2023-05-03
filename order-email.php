<?php 
 
  if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$telno=$_POST['telno'];
	$street1=$_POST['street1'];
	$street2=$_POST['street2'];
	$city=$_POST['city'];
	$regionstate=$_POST['regionstate'];
	$zip=$_POST['zip'];
	$payment=$_POST['payment'];
	$icode=$_POST['icode'];
	$quantity=$_POST['quantity'];
	$message=$_POST['message'];
	
	$to = "digitechtesting123@gmail.com";  
	$subject = "Order";
	$message = "First Name : ".$fname."\n"."Last Name : ".$lname."\n"."Email : ".$email."\n"."Contact Number : ".$telno."\n".
			   "Postal Address : ".$street1.",".$street2.",".$city.",".$regionstate.".\n"."Zip Code : ".$zip."\n"."Payment Method :".$payment
			   ."\n"."Item Code : ".$icode."\n"."Quantity : ".$quantity."\n"."Message : ".$message."\n";} ?>
			   
			   
			   <html>
			       <head>
			           <title>Order-email</title>
      			    <link rel="stylesheet" type="text/css" href="style-main.css">
      			    
      			    <link rel="stylesheet" type="text/css" href="style-confirmation.css">
                   
                
                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
                	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                
                	<script type="text/javascript" src="script-navigation.js"></script>
             <meta name="viewport" content="width=device-width, initial-scale=1">
              <style type="text/css">
       .img-main{
          transition: transform .2s;
          margin: 0 auto;
        }
        .img-main:hover{
            -ms-transform: scale(1.2); /* IE 9 */
            -webkit-transform: scale(1.2); /* Safari 3-8 */
            transform: scale(1.2);
            /*background:rgba(0,0,0,0.5); */
        }
        .img-td{
          transition: transform .2s;
          margin: 0 auto;
        }
        .img-td:hover{
            -ms-transform: scale(1.2); /* IE 9 */
            -webkit-transform: scale(1.2); /* Safari 3-8 */
            transform: scale(1.2);
            background:rgba(0,0,0,0.5); 
        }
        

    </style>
			       </head>
			       <body>
			          <center>
	    <div class="up">
         
            <div class="link">Welcome to Digitech computers (PVT) Ltd. </div>
            <div class="link2"></div>
            <div class="link">Call Us:(+94)1111111111,(+94)2222222222</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="link1">
              <span class="icon"><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 15px;">&nbsp;Sign Up</i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php"><i class="fa fa-user" aria-hidden="true" style="font-size: 15px;">&nbsp;Login</i></a></span>
            </div>
        </div>
    </center>

        <hr/>
        
<header>
		  <center>
      <div>
          <table>
            <tr>
              <td><p><img src="image/logo1.png" width="110px"></p>
              <p class="h1">Digi</p>
              <p class="h2" style="padding-right: 430px;">TECH COMPUTERS (PVT) LTD</p>

              </td>
              <td>
              <span id="search-btn" style="border-radius: 5px;"><p><a href="search.html"><i class="fa fa-search"></i></a></p></span>
                
              </td>
            </tr>

          </table>
      </div>  
      </center>

			
		</header>
		<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
		<!-- Adding navigation bar aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <center>
    <div class="topnav" id="myTopnav" style="margin-top: -20px;">
       <a id="home" href="index.php"><i class="fa fa-home"></i></a>
       <div class="dropdown">
        <a class="dropbtn" href="#">Catogeries</a>
              <div class="dropdown-content">
              <a href="cable.html">Cables</a>
 <a href="casing.html">Casing</a>
 <a href="harddisk.html">Hard Disk</a>
 <a href="memorycard.html">Memory Card</a>
 <a href="moniter.html">Moniters</a>
 <a href="printer.html">Printer</a> 
 <a href="ram.html">Ram</a>
 <a href="router.html">Router</a>
 <a href="software.html">Software</a>
 <a href="webcam.html">Web Cam</a>
 <a href="products.html">More&#9660;</a>
           </div>
       </div>
       <a href="products.html">Products</a>
       <a href="about-us.html">About Us</a>
     <a href="contact-us.html">Contact Us</a>
     <div class="dropdown">
      <a class="dropbtn" href="#">Payment Methods</a>
              <div class="dropdown-content">
                <a href="direct-bank-deposit.html">Direct Bank Deposit</a>
              <a href="cash-on-delivery.html">Cash On Delivery</a>
    </div>      </div>
     <a class="icon" onclick="openNav()">&#9776;</a>
    </div>  
    </center>
<!--End of the navigation bar--> 

			        <div class="confirmation-container">
    			    <?php  if(mail($to,$subject,$message)){
	
	echo "<p class="."success".">You order has been placed Succesfully! Thank you for using our services ".$fname. ".<br>..  We will contact you  within 24 hours..<br>
			<br><br>Have a good Day!!!</p>";
			}
			else
			{
		    echo "<p class="."success".">There seems to be a problem..Please try again</p>";
			}
		  
		  ?>
		        	</div>
		        	
		<p class="method">Select your payment method</p>
		<div class="payment">
		   <a href="direct-bank-deposit.html">
    	 	<input type="submit" name="direct-dep" value="Direct Bank Deposit" />
    	   </a>
    	</div>
    	 
    	<div class="payment">
    	   <a href="cash-on-delivery.html">
    		<input type="submit" name="cash-on-del" value="Cash On Delivery"/>
    	   </a>
		</div>     
		
	<center>
<div class="foot">
        <center>
        <ul>
           <li><a class="p" href="https://lk.linkedin.com/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
            <li><a class="q" href="https://twitter.com/"><i class="fab fa-twitter fa-fw"></i></a></li>
            <li><a class="r" href="https://www.pinterest.com/"><i class="fab fa-pinterest fa-fw"></i></a></li>
            <li><a class="s" href="https://accounts.google.com/ServiceLogin/signinchooser?passive=1209600&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fab fa-google-plus-g fa-fw"></i></a></li>
            <li><a class="t" href="#"><i class="fas fa-rss fa-fw"></i></a></li>
        </ul>
        </center>
</div>
</center>
<div class="foot-link">
    <center>
    <div class="foot-link-sub">
        <center>
        <table style="border:none;">
            <tr>
                <td class="td1">
                   <div class="td-padding">
                    <center> <h2>www.digicomputers.lk</h2></center>
                    <span><i class="fas fa-envelope" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;digitech.lk@testing.com</span><br><br>
                    <span><i class="fa fa-phone" aria-hidden="true" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+94)111111111&nbsp;&nbsp;(Sales)</span><br><br>
                    <span><i class="fa fa-phone" aria-hidden="true" style="font-size: 30px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+94)222222222&nbsp;&nbsp;(Technical Support)</span><br><br><br>
                    <span><i  style="font-size: 30px;" class="fa fa-map-marker" aria-hidden="true"></i></span>
                    <p>No:488/09,<br>Maithreepala Senanayaka Mw,<br>Anuradhapura.</p>
                   </div>
                    
                </td>
                <td class="td2">
                    <div class="td-padding">
                        <center><h3>SOME OF OUR SERVICES</h3></center>
                        <span class="img-main">
                        <img src="image/services/image1.png" width="50px" height="50px">
                        </span><br>
                        <span class="img-main">
                        <img src="image/services/image4.png" width="50px" height="50px">
                        </span><br>
                        <span class="img-main">
                        <img src="image/services/image3.png" width="50px" height="50px">
                        </span><br>
                        <span class="img-main">
                        <img src="image/services/image2.png" width="50px" height="50px">
                        </span><br>
                        <div class="td-padding-info">
                        <p>Computer Rapairing</p>
                        <p>Virus Removing</p>    
                            
                        <p>Delivery Support</p>    

                        <p>Technical Support</p>    
                        </div>
                    </div>
                </td>
                <td class="td2">
                     <div class="td-padding">
                        <center><h3 class="hf3">INSIDER</h3></center>
                        <div class="a-foot">
                            <p><a href="index.php">&raquo;Home</a></p>
                            <p><a href="products.html">&raquo;Product</a></p>
                            <p><a href="about-us.html">&raquo;About Us</a></p>
                            <p><a href="contact-us.html">&raquo;Contact Us</a></p>
                        </div>
                     </div>
                </td>
            </tr>
        </table>
        </center>
    </div>
    </center>
</div>
<hr/>
 <center>
        <div class="up">
        <center>
            
            <div class="link">©Digitech Computers (PVT) Ltd., All rights reserved. Mail us at:digitech.lk@testing.com</div>
        </center>
       
        </div>
    </center>
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->
</body>
</html>