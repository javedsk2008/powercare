<?php
	if (isset($_POST['submit']))
		{
			$name= $_POST['name'];
			$mobile= $_POST['mobile'];
			$email= $_POST['email'];
			$bill= $_POST['bill'];
		// $monthly_bill= $_POST['monthly_bill'];
			$message= $_POST['message'];
			
			$to = 'javedsk2008@gmail.com';
			$subject = 'Solar Enquiry';
			$message = "Name: ".$name."\n"."Phone: ".$mobile."\n"."Name: ".$name."\n"."Bill No: ".$bill."\n"."Message: ".$message;
			$headers = "From: ".$email;
			
			if (($name=="") || ($mobile=="") )
			{
			    echo '<script>alert("Please fill required details and send your email again")</script>';
			    printf("<script>location.href='contact.html'</script>");
			//    ob_start(); //start the buffer
            //    echo '<script>alert("Please fill all the details and send your email again")</script>'; //Output data
            //    ob_clean(); //Erase the buffer content
            //    header('Location: index.php');
			   
			   // echo '<script>alert("Please fill all the details and send your email again")</script>';
			}
			
			else
			
			if(mail($to, $subject, $message, $headers))
			{
		//	echo '<script>alert("Thank you for sending email, We will get back to you Shorlty")</script>';
		     echo '<script>alert("Thank you for Sending us email, We will contact you back in 24 Working Hours")</script>';
			    printf("<script>location.href='index.html'</script>");
				
			}
			else
			{
				echo '<script>alert("Something Went Wrong")</script>';
			}
		}
	//	 header('Location:contact.php');
	//	echo '<script>alert("Thank you for sending email, We will get back to you Shorlty")</script>';
	//	header("Location: index.html");

?>