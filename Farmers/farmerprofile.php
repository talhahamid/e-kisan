<?php
	include("includes/menu.php");
?>

<!doctype html> 
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-KISAN | Farmers</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="apple-touch-icon" href="../Layout/apple-icon.png">
    <link rel="shortcut icon" href="../Layout/favicon.ico">

    <link rel="stylesheet" href="../Layout/assets/css/normalize.css">
    <link rel="stylesheet" href="../Layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Layout/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Layout/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../Layout/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../Layout/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../Layout/assets/scss/style.css">
    <link href="../Layout/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script>  
    $(document).ready(function(){  
        $("#changepasswordform").validate({
            rules: {
                current_password: {
                    required: true,
                    minlength: 6
                },
                new_password: {
                    required: true,
                    minlength: 6
                },
                confirm_password: {
                    required: true,
                    minlength: 6,
                    equalTo: "#new_password"
                }
            },
            messages: {
                current_password: {
                    required: "specify current password",
                    minlength: "minimum length must be 6 character.............."
                },
                new_password: {
                    required: "specify new password",
                    minlength: "minimum length must be 6 character..............."
                },
                confirm_password: {
                    required: "specify confirm password",
                    minlength: "minimum length must be 6 character..............",
                    equalTo: "new password and confirm password must be same "
                }
            }  
        });
    }); 
</script> 
</head>

</head>    
<body>

<?php
	include("includes/header.php");
?>

<table  class="table">
	<tr>
		<td>
			<img style="width:100%" src='../Layout/images/profile.jpg' >
		</td>

		<td>		
			<table class="table">
				<tr>
					<th>                             
						NAME:
					</th> 
						<td><?php echo $users['name']; ?></td> 
				</tr>				
				<tr>
					<th>                             
						MOBILE:
					</th> 
						<td><?php echo $users['mobile']; ?></td> 
				</tr>
				<tr>
					<th>                             
							EMAIL:
					</th>  
						<td><?php echo $users['email']; ?></td>
				</tr>
				<tr>
					<th>
						CITY:
					</th>
					<td><?php echo $users['city']; ?></td>
				</tr>    				
				<tr>
					<th>   							
						STATE:
					</th>
					<td><?php echo $users['state']; ?></td>  
				</tr>
				<tr>            
					<th>
						ADDRESS:
					</th>
					<td><?php echo $users['address']; ?></td>
				</tr>
				<tr>
					<th>                            
						PINCODE:
					</th>
					<td><?php echo $users['pincode']; ?></td>
				</tr>                                       
			</table>
		</td>        
	</tr>
</table>

<br><br><hr>

<div class="sufee-login d-flex align-content-center flex-wrap">
<div class="container">
	<div class="login-content">
	<div class="login-form">

	<h3>Change Password</h3><hr>
	<form method="post" id="changepasswordform" action="<?php echo base_url('farmerschangepassword')?>">
		<input type="hidden" name="id" value="<?php echo $users['id']; ?>">
			<label>Current Password</label>
			<input style="width:475px" name="current_password" type="password" class="form-control">
			<label>New Password</label>
			<input style="width:475px" name="new_password" type="password" class="form-control">
			<label>Confirm Password</label>
			<input style="width:475px" name="confirm_password" type="password" class="form-control">
			<br><hr>
		<button style="width:475px" class="form-control btn btn-primary">Submit</button><br>
	</form>

	</div>
	</div>
</div>
</div>

<hr><br>

<?php
include("includes/footer.php");
?>