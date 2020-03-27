  <?php
    	if(ISSET($_POST['create'])){
    	
    	  $first_name = $_POST['first_name'];
    	  $last_name = $_POST['last_name'];
    	  $email = $_POST['email'];
    	  $department = $_POST['department'];
    	  $gender = $_POST['gender'];
    	  $message = $_POST['message'];
    	  $terms = $_POST['terms'];
    	  
    	  $file_name = $_POST['filename'];
    	      	      		$path = "files";
    	      	      		$file = fopen($path."/".$file_name.".txt", 'w');
    	      	      		fwrite($file, $first_name);
    	      	      		fwrite($file, $last_name);
    	      	      		fwrite($file, $email);
    	      	      		fwrite($file, $department);
    	      	      		fwrite($file, $gender);
    	      	      		fwrite($file, $message);
    	      	      		fwrite($file, $terms);
    	      	      		fclose($file);
    	      	      		header("location:contact.html");
    	      	      		echo "Thank You! Message Sent";
    	      	      			}
  ?>