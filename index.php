<?php
      
      if (isset($_POST['btn'])) {
      	
      
      $Name = null;
      $Email =  null;
      $message = null;


      if (isset($_POST['Name']) && !empty($_POST['Name'])) {
      	$Name = $_POST['Name'];
      }
      else{
      	$Name_error = 'please fill the field';
      }
 
           if (isset($_POST['Email']) && !empty($_POST['Email'])) {
           	$Email = $_POST['Email'];
           } 
           else{
           	$email_error = 'enter valid email';

           }

           if (isset($_POST['message']) && !empty($_POST['message'])) {
           	$message = $_POST['message'];
           }
           else{
           	$message_error = 'this field cannot be empty';
           }

      $connection = mysqli_connect("localhost" , "root","" , "contact_form");

      $query = "INSERT INTO form(Name, Email, message) VALUES ('$Name', '$Email', '$message')";

       $query = mysqli_query($connection,$query);
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>contact-form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container my-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="post">
					<div class="card">
						<div class="card-header">Contact Form</div>
					    <div class="card-body">
						    <div class="form-group">
					    	   <label for="name">Name</label>
					    	   <input type="text" name="Name" placeholder="name" class="form-control <?php if (isset($Name_error)) echo 'is-invalid'; ?>"
					    	   >
					    	   <?php if (isset($Name_error)): ?>
					    	   	<div class="invalid-feedback"><?= $Name_error ?></div>
					    	   
					    	   	 <?php endif; ?>
					        </div>
					        <div class="form-group">
					        	<label for="email">Email</label>
					        	<input type="name" name="Email" placeholder="Email" class="form-control <?php if (isset($email_error)) echo 'is-invalid'; ?>"
					        		>
					        		<?php if (isset($email_error)): ?> 
					        		<div class="invalid-feedback"><?= $email_error?></div>	
					        		<?php endif; ?>
					        </div>
					        <div class="form-group">
					        	<label for="message">Message</label>
					        	<textarea name="message" id="message" cols="30" rows="10" class="form-control  <?php if (isset($message_error)) echo 'is-invalid'; ?>"
					        		>
					             </textarea> 
					        	<?php if (isset($message_error)): ?>
					        		<div class="invalid-feedback"><?= $message_error ?></div>
					        	<?php endif; ?>
					        </div>
					       <button name="btn" type="Submit" class="btn btn-secondary">Submit</button>
						</div>
						
					</div>	
				</form>
			</div>
		</div>
	</div>

</body>
</html>
