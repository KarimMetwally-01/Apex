<?php 
	// check if user coming from Request 
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    // Assagin Varabile
    	     $Name 				= $_POST['name'];
             $Company 			= $_POST['Company'];
             $Email 			= $_POST['Email'];
             $Telephone			= $_POST['Telephone'];
             $Subject 			= $_POST['Subject'];
             $Translation		= $_POST['Translation-Type'];
             $Delivery 			= $_POST['Delivery-Method'];
             $Dateofdelivery 	= $_POST['Dateofdelivery'];
             $Notes 			= $_POST['Notes'];
    
    // Array of erros
    		$FE = array();
			
            	if (strlen($Name) <= 5){
                	$FE[] = '<strong>Name</strong> must be at least 5 Chrahters';
        		}
	// Mail
		$Mail = 'karimkisho2@gmail.com';
		$header = 'From Website'.$Mail.'\r\n';
			if(empty ($FE)){
				mail('karimkisho2@gmail.com', $Subject, 
				$Name.'\r\n'.$Company.'\r\n'.$Email.'\r\n'.$Telephone.'\r\n'.$Translation.'\r\n'.$Delivery.'\r\n'.
				$Dateofdelivery.'\r\n'.$Notes,$header);
				
			 $Name 				= '';
             $Company 			= '';
             $Email 			= '';
             $Telephone			= '';
             $Subject 			= '';
             $Translation		= '';
             $Delivery 			= '';
             $Dateofdelivery 	= '';
             $Notes 			= '';
    
				
			$Recived			= '<div class="TextModal"> We Recived Your Request, Thank You </div>';
				}
		}

?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../Css/css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" 	href="../Css/style.css">
<link rel="stylesheet" 	href="../Css/normalize.css">
<link rel="stylesheet"  href="../Css/owl.carousel.min.css">
<link rel="stylesheet"  href="../Css/owl.theme.default.css">
<link rel="stylesheet"	href="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/7.4.1/smooth-scrollbar.css" >
<link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap">
<link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap">
<link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=MuseoModerno:wght@500&display=swap">
<link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&display=swap">
<link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap">
<link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&display=swap">


<title>Tampleate 1</title>
</head>

<body id="my-scrollbar">

<script src="../Js/Jquery.js"></script>
<script src="../Js/Custom.js"></script>
<script src="../Js/Scroll-Smooth.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="../Js/owl.carousel.min.js"></script>

<!-- Start Header -->
<section class="Header">
	<div class="overlay">
		<div class="Container table">
 <!--Navbar-->
			<div class="Navbar">
            	<span class="Logo"><span class="main-color">Apex</span> Legal Tranlsation</span>
                <span class="Menu">
                	<i class="fa fa-bars"></i>
                </span>
            </div>
 <!--intro-->
            <div class="table-row">
                <div class="intro text-center">
                    <h1 class="upper">Your <span class="main-color">Skyline</span> to the World.</h1><br>
                    <p 	class="about-us">Apex group for translation is specialized in translation and training for almost 10 years and We have several branches 
                    in Egypt and UAE. We are keen on providing excellent, high-quality and accurate translation services into all languages, 
                    we always strive to develop our services and expertise to build our customers’ trust for premium translation services. 
                    Our distinguished scientific basis made our companies at the top So we are APEX…</p>
                </div>
<!--bottons-->
                <div class="button text-center">
                    <button class="upper	Our-Transalate">ask translate</button>
                    <button class="upper">Our Coustomer</button>
                </div><br>
            </div>
        </div>
	</div>
</Section>

<!-- End Header -->

<!-- Start Section 1-->
<Section class="why-us text-center">
	<div class="Container">
        <h1 class="upper">Why-<Span class="main-color">us</Span></h1>
        
                <div class="box">
                        <div class="Quality">
                            <i class="fa fa-star fa-3x"></i>
                            <h3>Quality</h3>
                        </div>
                    <p style="background-color:rgb(0, 138, 121)">We support the world's best translators with advanced quality assurance processes. And that's not all: we provide a free comprehensive translation review if you are not satisfied.</p>
            	</div>
   
                <div class="box">
                   	<div class="Fast-Service">
                        <i class="fa fa-bolt fa-3x"></i>
                        <h3>Fast-Service</h3>
            		</div>
                    <p style="background-color:#C00">we can translate high volume projects within hours, and small projects in just minutes, and this dut to our large network of translators supported by enhanced technologies</p>
            	</div>
            
          
                <div class="box">
                  	<div class="Cost">
                        <i class="fas fa-hand-holding-usd fa-3x"></i>
                        <h3 style="background-color:#c0eb75">Reducing Cost</h3>
                    </div>
                    <p style="background-color:#82c91e">You can save with us. Our goal is to satisfy the customer before the money. So apply for your translation and be confident that you will get the lowest prices. We also inform you that there are discounted prices for major projects.</p>           
				</div>
    </div>
</Section>
<!-- End Section 1-->

<!-- Start Order Translation-->
<Section>
            <h1 class="upper text-center">Get Your <Span class="main-color">Quotation</Span></h1>
	<div class="Order">
	<div class="Container">
    <h4 class="text-center Order-Now main-backgroundColor">Order Now your translation, and Recived Quotaion by email or phone</h4>

    	<form class="Mail" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
            	<?php 
                    if (! empty($FE)){
				?>
						<div class="error">
                        <?php foreach ($FE as $error){
                            echo $error.'<br>';
                    }?>
                        </div>
                    <?php }
                ?>
                <?php if(isset($Recived)) {echo $Recived;} ?>
             

	<div class="dataoforder">
                    <div class="nameerror error"><strong>Name</strong> must be at least 5 Chrahters</div> 

        <h3 class="main-color">Personal information</h3>	
        	<label>Name:</label>
			<label>Company:</label>
        	<label>Email:</label>
        	<label>Telphone:</label><br>
            <input class ="name" name="name" type="text" placeholder="First Name, Sur Name" 
            		value="<?php if (isset($Name)) {echo $Name;}?>" required>
            <span class="asterisx">*</span>
            <input name="Company" type="text" placeholder="related with your copmany not personal" 
            	   value="<?php if (isset($Company)) {echo $Company;}?>" >
            <input name="Email" type="email" placeholder="info@apex-ae.com"	value="<?php if (isset($Email)) {echo $Email;}?>">
            <input name="Telephone" type="tel" pattern="[0-9]{10}" placeholder="0504650802" 
            	   value="<?php if (isset($Telephone)) {echo $Telephone;}?>" required>
            <span class="asterisx">*</span>
            <br><br>
			<h3 class="main-color">About Translation</h3>
        	<label>Subject</label>
            <label>Translation Type</label>
            <label>Delivery Method</label>
            <label>Date of delivery</label><br>
   			<input name="Subject" type="text" placeholder="Type your Subject" value="<?php if (isset($Subject)) {echo $Subject;}?>">
            <input name="Translation-Type" list="T-Type" placeholder="where you will Submited the translat"
                   value="<?php if (isset($Translation)) {echo $Translation;}?>" required>
            <datalist id="T-Type">
            <option value="Normal">
            <option value="Court">
            <option value="Ministry of Justice">
            </datalist>
            <span class="asterisx">*</span>
            <input name="Delivery-Method" list="Delivery" placeholder="Choose your location" 
            	   value="<?php if (isset($Delivery)) {echo $Delivery;}?>" required>
            <datalist id="Delivery">
            <option value="Dubai">
            <option value="abudhabi">
            <option value="shajrah">
            <option value="Ajman">
            <option value="RAK">
            </datalist>
            <span class="asterisx">*</span>
            <input name="Dateofdelivery" list="DateDlivery" placeholder="Urgent / Ungernt" 
            	   value="<?php if (isset($Dateofdelivery)) {echo $Dateofdelivery;}?>" required> 
            <datalist id="DateDlivery">
            <option value="Urgent">
            <option value="Normal">            
            </datalist>
             <span class="asterisx">*</span>
             <br><br>
             <div class="Title">
               	<h3 class="main-color">Notes</h3>
                <h3 class="main-color">Upload File</h3>
            	<h3 class="main-color">recaptcha</h3>
			</div>
            <div class="Orderboxes">
            <textarea name="Notes" placeholder="Type any notes you want" class="box"
            		  maxlength="325"><?php if (isset($Notes)) {echo $Notes;}?></textarea>
				
             <input name="file" type="file" id='file' class="file box" multiple
             		accept=".PDF,.DOC,.DOCX,.XML,.XLSX,.pptx,.ppt,.RAR,.ZIP,.Jpj,.png" >
                    <!-- Modal -->
          <div  class="modal Container">
          	<div class="Container">
                  <header class="HeaderAttantion"> 
                    <span class="X w3-display-topright">&times;</span>
                    <h2>Attention</h2>
                  </header>
                  <p class="TextModal"></p>
                <p class="text-center Attention" style="font-size:25px;	line-height: 90px; Color:#F00;"></p>
		  	</div>
          </div>
          			<!-- Modal -->
             <p class="Allow"> <span style="color:#000;">Max Size:</span> 24MB<br>
             <span style="color:#000">Type Available:</span><br>PDF, DOC, DOCX, XML,<br> XLSX, RAR, ZIP, Jpj, png</p>
            <label for='file' id='Selector' class="Select-File text-center upper box">Select File</label>
            </div>
                        
       	
            <button name="send" type="submit" class="send main-backgroundColor">Send</button> <br> 
        </form><br>
        </div>
    </div> </div>
</Section>
<!-- End Order Translation-->
<!-- Start Our-Cliets-->
<section class="Our-Clients">
	<div class="Container">
    	<h1 class="upper text-center">Our <span class="main-color">Clients</span></h1>
        <h3 class="text-center">Our parent's in success, don't think too much and join with them</h3>
        <div class="owl-carousel">
            <img src="../Css/Images/ati.png" style="margin-top: 20px;"/>
            <img src="../Css/Images/al_hamra.png" style="margin-top:10px;"/>
            <img src="../Css/Images/al_adeed.png" style="margin: 15px; width: 75px !important; height: 80px;"/>
            <img src="../Css/Images/amer.png" style="margin-top:10px;"/>
            <img src="../Css/Images/damac.png" style="margin-top:50px;"/>
            <img src="../Css/Images/dubai_ensurance.png" style="margin-top:10px;"/>
            <img src="../Css/Images/dammas.png" style="margin-top:40px;"/>
            <img src="../Css/Images/ghoreer.png" style="margin-top:30px;"/>
            <img src="../Css/Images/hadef.png" style="margin-top:15px;"/>
            <img src="../Css/Images/tas_heel.png" style="margin-top: 40px; padding-bottom:30px;;"/>
        </div>
    </div>
</section><br>

<!-- End Our-Cliets-->

<!-- Start TEAMWORK -->
<section class="teamwork">
	<div class="Container">
    	<h1 class="text-center"><span class="main-color">TEAM</span>WORK</h1>
        <h6 class="text-center">if you want to join to us, just send CV on email: <span class="main-color">info@apex-ae.com</span></h6>
        <div>
            <div class="about-me">
            	<div class="Head-About main-backgroundColor">
                	<div class="A-Mostafa">
                        <img src="../Css/Images/businessman_PNG6566.png"/>
                        <span>Mostafa Nasr<h6>CEO</h6></span>
                    </div>
                	<div class="A-Nancy">
                        <img src="../Css/Images/businessman_PNG6566.png"/>
                        <span>Nancy<h6>CEO</h6></span>
                    </div>                       
                	<div class="A-Nehal">
                        <img src="../Css/Images/businessman_PNG6566.png"/>
                        <span>Nehal<h6>CEO</h6></span>
                    </div>
                	<div class="A-Shaima">
                        <img src="../Css/Images/businessman_PNG6566.png"/>
                        <span>Shaimaa<h6>CEO</h6></span>
                    </div>
                	<div class="A-Donia">
                        <img src="../Css/Images/businessman_PNG6566.png"/>
                        <span>Donia<h6>CEO</h6></span>
                    </div>
                	<div class="A-Karim">
                        <img src="../Css/Images/businessman_PNG6566.png"/>
                        <span>karim<h6>CEO</h6></span>
                    </div>
                    
                </div>
             <div class="Agentinfo">
             		<p class="NavAbout">About Me</P>
                    <p class="Agent-I A-Mostafa">Mr.Mostafa Nasr, 28 Y/o and learned in bussinus adminstration graedued 2010 etc...</p>
                    <p class="Agent-I A-Nancy">Mr.Nancy, 28 Y/o and learned in bussinus adminstration graedued 2010 etc...</p>
					<p class="Agent-I A-Nehal">Mr.Nehal, 28 Y/o and learned in bussinus adminstration graedued 2010 etc...</p>
                    <p class="Agent-I A-Shaima">Mr.Shaima, 28 Y/o and learned in bussinus adminstration graedued 2010 etc...</p>	
                    <p class="Agent-I A-Donia">Mr.Donia, 28 Y/o and learned in bussinus adminstration graedued 2010 etc...</p>	
                    <p class="Agent-I A-Karim">Mr.Karim, 28 Y/o and learned in bussinus adminstration graedued 2010 etc...</p>		
             </div>    
            </div>
            <div class="Agents">
            	<div class="A-pp Mostafa" style="padding-top:20px;">
                	<img src="../Css/Images/al_hamra.png"/>
                    <span>Mostafa <h6>Front Office Department</h6></span>
                </div>
                <div class="A-pp Nancy active">
                	<img src="../Css/Images/al_hamra.png"/>
                    <span>Nancy <h6>Front Office Department</h6></span>
                </div>
                <div class="A-pp Nehal">
                	<img src="../Css/Images/al_hamra.png"/>
                    <span>Nehal <h6>Front Office Department</h6></span>
                </div>
                <div class="A-pp Shaima">
                	<img src="../Css/Images/al_hamra.png"/>
                    <span>Shaimaa <h6>Front Office Department</h6></span>
                </div>
                <div class="A-pp Donia active">
                	<img src="../Css/Images/al_hamra.png"/>
                    <span>Donia <h6>Front Office Department</h6></span>
                </div>
                <div class="A-pp karim">
                	<img src="../Css/Images/al_hamra.png"/>
                    <span>Karim<h6>Front Office Department</h6></span>
                </div>                                                                               
            </div>
            <div class="SelectAgent">
            	<i class="fas fa-sort-up"></i>
                <i class="fas fa-circle C1" style="font-size: 10px;"></i>
				<i class="far fa-circle C2" style="font-size: 10px"></i>
                <i class="fas fa-sort-down"></i>
            </div>
        </div>
    </div>
    <br>
</section>
<!-- End TEAMWORK -->

<!-- Start Footer -->

<section class="footer">
	<div class="Container">
    	<div class="Contact-Us">
        	<h1 class="text-center"><span class="main-color">Contact</span>-Us</h1>
        	<div class="location">
            <span class="AbuDhabi"><strong>AbuDhabi</strong></span>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.8805421638197!2d54.3957926081175!3d24.45541525052712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86f6fb9fb0728b7b!2sAl%20Rafidain%20Laundry%20Branch-%203!5e0!3m2!1sar!2sae!4v1603472432136!5m2!1sar!2sae" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <p><i class="fas fa-map-marker-alt"></i> Muroor Street 23 Signal dotcom laundry building, office no. M04</p>
			<p><i class="fab fa-whatsapp"></i> +971-544424595</p>
            <p><i class="fas fa-phone-volume"></i> +971-26262256</p>
            <p><i class="fas fa-envelope-open-text"></i> Ad@apex-ae.com</p>
            </div>
            <div class="location">
            <span class="Dubai"><strong>Dubai</strong></span>
            <iframe src=	"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.1485082339177!2d55.18261188491407!3d25.096833741923575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b786769fc7b%3A0x55309116c7f53a0f!2sI-Rise%20Tower!5e0!3m2!1sar!2sae!4v1603471990582!5m2!1sar!2sae" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <p><i class="fas fa-map-marker-alt"></i> 27th floor-office no. C3 - I-rise tower, Tecom, UAE</p>
            <p><i class="fab fa-whatsapp"></i> +971-585855886</p>
            <p><i class="fas fa-phone-volume"></i> +971-43260020</p>
            <p><i class="fas fa-envelope-open-text"></i> info@apex-ae.com</p>
            </div>
            <div class="location">
            <span class="Egypt"><strong>Egypt</strong></span>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d213.17845945038516!2d29.978199203582644!3d31.252427393204716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5dba6c9a7ae89%3A0x7f066c44a66d0252!2z2K7Yt9mI2Kkg2LnYstmK2LLYqQ!5e0!3m2!1sar!2sae!4v1603472559794!5m2!1sar!2sae" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <p><i class="fas fa-map-marker-alt"></i> 27th floor-office no. C3 - I-rise tower, Tecom, UAE</p>
            <p><i class="fab fa-whatsapp"></i> +971-585855886</p>
            <p><i class="fas fa-phone-volume"></i> +971-43260020</p>
            <p><i class="fas fa-envelope-open-text"></i> info@apex-ae.com</p>
        	</div>
        </div>
    </div>
</section>
<!-- End Footer -->
<p class="Des-Cre text-center"><strong>Desgined and Created<br>By: <a href="https://www.Fb.com/kisho20">Karim Metwally</a></strong></p>
</body>
</html>
