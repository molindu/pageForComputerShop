<?php

require_once('config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>www.digicomputers.lk</title>
	<link rel="stylesheet" type="text/css" href="style-main.css">
<!--   <link rel="stylesheet" type="text/css" href="style-signup.css">
 -->
    <!-- <link rel="stylesheet" type="text/css" href="style-slideshow.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- <script type="text/javascript" src="script-auto-slideshow.js"></script> -->
	<!-- <script type="text/javascript" src="script-manual-slideshow.js"></script> -->
  <script type="text/javascript" src="script-navigation.js.js"></script>
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
        .signup-main{
  color:#413839;
  background:rgba(72,138,199,0.2); 
  min-width: 620px;
  width: 620px;
  border-radius: 5px;
  height: 500px;
}
.signup-main table {
  padding-top:10px;
  border:1px solid white;
  border-radius: 5px;
  width: 600px;
  height: 400px;

}
.signup-main input[type="text"],input[type="email"],input[type="password"]{
  border-right: none;
  border-left: none;
  border-top: none;
  border-bottom: 1px solid gray;
  background:rgba(72,138,199,0.1); 
  color:#413839;
  font-size: 20px;
  
}
.signup-main input[type="text"],input[type="email"],input[type="password"],input[type="submit"]{
  /*border-bottom: 1px solid #413839;*/
  height: 40px;
  border-radius: 5px;
  width: 450px;

}
.signup-main input[type="submit"]{
  border:none;
    margin-left: 23px;
    background-color: #373866;
    color: white;
    font-size: 20px;
}
.signup-main input[type="submit"]:hover{

    background-color:#488AC7;
}
.signup-main .fa-user,.fa-paper-plane,.fa-lock,.fa-check-circle{
  color: #413839;
}
input[type="text"]:hover .fa-user{
  color: red;
} 

    </style>
</head>
<body>
  <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
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
<!-- bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb -->

        <!-- <hr class="hr" style="text-align: center; align-self: center; height:0.5px; background-color:black;" /> -->
        <hr/>
         <!-- <div class="icon1">
             <span class="icon"><a href="https://en.wikipedia.org/wiki/RSS"><i class="fa fa-user-plus" aria-hidden="true" style="font-size: 15px;color: #373866;"></i></a></span>

       
       
         </div> -->
         
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
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
<!-- End of the navigation bar bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb  -->
<br>
	<center>
   <div class="signup-main">
    <br>
   <center>
     <table>
      <tr>
        <td><center><h2>Create Account</h2><p>It's free for create New Membership</p></center></td>
      </tr>
       <tr>
        <td>
        <center>
           <div class="signup-input">
              <form action="process.php" method="post" id="signup">
                 <span><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;<input type="text" id="username" name="username" placeholder="User Name" required></span><br><br>
                 <span><i class="fas fa-paper-plane"></i>&nbsp;&nbsp;&nbsp;<input type="email" id="email" name="email" placeholder="Email Address" required></span><br><br>
                 <span><i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;<input type="password" id="password" name="password" placeholder="Password" required></span><br><br>
                 <span><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp;<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required></span><br><br>
                 <span><input type="submit" id="register" name="create" value="Sign Up"></span>
                 <br><br>
              </form>
                 <span><a href="login.php"><input type="submit" id="register" name="create" value="Login"></a></span>
              
            </div>
        </center>
       </td>     
       <td>
         
       </td>
       </tr>
     </table>
   </center> 
  </div> 
  </center>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript">
    // $(function(){

    //   $('#register').click(function(e){

    //     var valid=this.form.checkValidity();


    //     if(valid){
    //     var username  = $('#username').val();
        
    //     var email      = $('#email').val();
       
    //     var password   = $('#password').val();

    //       e.preventDefault();

    //       $('#signup').on('submit', function (e){


    //       }
          
    //       $.ajax({
    //         type:'POST',
    //         url:'process.php',
    //         data:{username:username, email:email, password:password},
    //         success:function(data){
    //           Swal.fire({
    //             'title':'Successful',
    //             'text' : data,
    //             'type' : 'success'
    //           })

    //         },
    //         error:function(data){
    //           Swal.fire({
    //             'title':'Errors',
    //             'text' : 'There were errors whie saving the data',
    //             'type' : 'error'
    //           })
              
    //         }
    //       });
    //       // alert('true');
    //     }
    //     else{
    //        alert('false');
    //     }

        
    //   });
    //     // alert('hello.');
    // });
  </script>

<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
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