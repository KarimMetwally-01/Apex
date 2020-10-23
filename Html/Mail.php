<?php 
	// check if user coming from Request 
		if ($_SERVER['REQUEST_METHOD'] == 'post') {
        
    // Assagin Varabile
    	     $Name 				= $_POST['Name'];
             $Company 			= $_POST['Company'];
             $Email 			= $_POST['Email'];
             $Telephone			= $_POST['Telephone'];
             $Subject 			= $_POST['Subject'];
             $Translation		= $_POST['Translation-Type'];
             $Delivery 			= $_POST['Delivery-Method'];
             $Dateofdelivery 	= $_POST['Dateofdelivery'];
             $Note 				= $_POST['Note'];
    
    // Array of erros
    		$formErros = array();
            	if (strlen($Name) <= 3){
                	$formErros[] = "Username must be at least 3 Chrahters";
        }}
        
	echo "karim"
?>

<?php echo $_SERVER['PHP_SELF']?>