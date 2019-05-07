
<?php include 'header.php';?>

  
		<!-- ==== HEADERWRAP ==== -->
		
	    <div id="headerwrap" id="home" name="home">
		<div class="transparant">
			<header class="clearfix">
	  		 		<h1>Emoya Scarves</h1>
	  		 		<p>You deserve to be unique.</p>
	  		</header>	    
	    </div>
		</div>
		<!-- /headerwrap -->

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="row">
				<div class="col-lg-4 callout">
					<span class="icon icon-star"></span>
					<h2>Elegant</h2>
					<p>Shield Theme is powered by Bootstrap 3. The incredible Mobile First Framework is the best option to run your website. </p>
				</div><!-- col-lg-4 -->
					
				<div class="col-lg-4 callout">
					<span class="icon icon-cool"></span>
					<h2>Fashionable</h2>
					<p>You can use this theme with your iPhone, iPad or MacBook Pro. This theme is retina ready and that is awesome. </p>
				</div><!-- col-lg-4 -->	
				
				<div class="col-lg-4 callout">
					<span class="icon icon-heart"></span>
					<h2>Confort</h2>
					<p>We don't make sites, we craft themes with love & passion. That is our most valued secret. We only do thing that we love.   </p>
				</div><!-- col-lg-4 -->	
			</div><!-- row -->
		</div><!-- greywrap -->
		
		<!-- ==== ABOUT ==== -->
		<div class="container" id="about" name="about">
			<div class="row white">
			<br>
				<h1 class="centered">Our Story</h1>
				<hr>
				
				<div class="col-lg-6">
					<p>We believe ideas come from everyone, everywhere. In fact, at BlackTie, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths drive us, motivate us, and ultimately help us redefine the power of design. We’re big believers in doing right by our neighbors. After all, we grew up in the Twin Cities and we believe this place has much to offer. So we do what we can to support the community we love.</p>
				</div><!-- col-lg-6 -->
				
				<div class="col-lg-6">
					<p>Over the past four years, we’ve provided more than $1 million in combined cash and pro bono support to Way to Grow, an early childhood education and nonprofit organization. Other community giving involvement throughout our agency history includes pro bono work for more than 13 organizations, direct giving, a scholarship program through the Minneapolis College of Art & Design, board memberships, and ongoing participation in the Keystone Club, which gives five percent of our company’s earnings back to the community each year.</p>
				</div><!-- col-lg-6 -->
			</div><!-- row -->
		</div><!-- container -->
		<!-- ==== Products ==== -->
		<div class="container" id="product" name="product">
		<br>
			<div class="row">
				<br>
				<h1 class="centered">WE CREATE COOL STUFF</h1>
				<hr>
			</div><!-- /row -->

     <div class="container">
			
				<!-- Prodcuts 1 -->
				
        <?php 
            $conn = mysqli_connect("localhost","root","","Emoya");
             if($conn-> connect_error){
           die("connection faled:" . $conn-> connect_error);
               }
          $sql = "SELECT image, description, price, availability from Scarfvesdb";
          $results = $conn->query($sql);
          if($results->num_rows > 0){  
              for($x = 0;$x<3;$x++){
                  echo"<div class=row>";
                  for($y = 0;$y<3;$y++){
                  $row = $results->fetch_assoc();
                  echo"
                  <div class=col-md-4>
                  <img src=".$row["image"].">".  
				 "<h3>".$row["description"]."</h3>".
                 "<p>".$row["price"]."</p>".
                 "<p>".$row["availability"]."</p>".
                  "</div>";  
                   }
                  echo"</div>";
              }
          }
         else{
             echo "0 result";
         }
          $conn->close();  
        ?>
         </div>
	</div>
		<!-- ==== SECTION DIVIDER ==== -->
		
		<section class="section-divider textdivider divider">
		<div class="tran">
			<div class="container">
			
				<h1>Join us in our exhibitions</h1>
				<hr>
           </div>
			</div><!-- container -->
		</section><!-- section -->
		

		<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h1 class="centered">THANKS FOR VISITING US</h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-4" id="con">
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"></span>  Some Address 987, Cairo, Egypt.<br/>
						<span class="icon icon-mobile"></span>  0109 992 0410 <br/>
						<span class="icon icon-envelop"></span> <a href="#">  emoyaheadscarfs@gmail.com</a> <br/>
						<span class="icon icon-instagram"></span> <a href="https://www.instagram.com/emoyascarves/?fbclid=IwAR2FcM4D0PyerOVswsJi8bmkeYzHlPrDIJ7AqzArMrJp73MLTMwjCwwCb7o">  emoyascarves</a> <br/>
						<span class="icon icon-facebook"></span> <a href="https://www.facebook.com/EmoyaScarves/">  Emoya scarves </a> <br/>
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Newsletter</h3>
					<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
					<p>
						<form class="form-horizontal" role="form">
						  <div class="form-group">
						    <div class="col-lg-12">
						      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-lg-12">
						      <input type="text" class="form-control" id="text23" placeholder="Your Name"style="margin:0px; width=355px;">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-lg-12">
						      <button type="submit" class="btn btn-success" id="text24">Sign in</button>
						    </div>
						  </div>
					   </form><!-- form -->
                    </p>
           
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Support Us</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div><!-- col -->

			</div><!-- row -->
		
		</div><!-- container -->



<?php include 'footer.php';?>
