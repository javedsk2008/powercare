<?php
//include("config.php");
	if (isset($_POST['submit']))
		{
			$name= $_POST['name'];
			$mobile= $_POST['mobile'];
			$email= $_POST['email'];
			$bill= $_POST['bill'];
			$message= $_POST['message'];
			
			$to = 'powercare777@gmail.com';
			$subject = 'Solar Enquiry';
			$message = "Name: ".$name."\n"."Phone: ".$mobile."\n"."Bill: ".$bill."\n"."Message: ".$message;
			$headers = "From: ".$email;
			
			if(mail($to, $subject, $message, $headers))
			{
			echo '<script>alert("Thank you for sending email, We will get back to you Shorlty")</script>';
			
			header("Location: index.html");
				
			}
			else
			{
				echo '<script>alert("Something Went Wrong")</script>';
				header("Location: contact.html");
			}
		}
		echo '<script>alert("Thank you for Sending us email, We will contact you back in 24 Working Hours")</script>';
			    printf("<script>location.href='index.html'</script>");
	//	echo '<script>alert("Thank you for sending email, We will get back to you Shorlty")</script>';
		

?>