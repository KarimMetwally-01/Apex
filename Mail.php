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
