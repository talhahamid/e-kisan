
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> 
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-KISAN</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="apple-touch-icon" href="Layout/apple-icon.png">
    <link rel="shortcut icon" href="Layout/favicon.ico">

    <link rel="stylesheet" href="Layout/assets/css/normalize.css">
    <link rel="stylesheet" href="Layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Layout/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="Layout/assets/css/themify-icons.css">
    <link rel="stylesheet" href="Layout/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="Layout/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="Layout/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="Layout/assets/scss/style.css">
    <link href="Layout/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script>  
    $(document).ready(function(){  
        $("#passwordform").validate({
            rules: {
                password: {
                    required: true
                },
                confirmpassword: {
                    required: true,
                    equalTo: password
                }
            },
            messages: {
                password: {
                    required: "specify password"
                },
                confirmpassword: {
                    required: "specify password",
                    equalTo: "Password and Confirm Password must be same"

                }
            }  
        });
    }); 
</script> 
    
</head>

<body style="background-image:url('Layout/images/farm2.jpg');">

  <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
          <div class="login-content">
              <div class="login-form">
                  <form action="index.php" method="post" id="passwordform">
                  <h4>Set Your Password</h4>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                      </div>
                      <div class="form-group">
                          <label>Confirm Password</label>
                          <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Password" />
                      </div>

                        <button type="submit" name="signin" id="signin" class="btn btn-success btn-flat m-b-30 m-t-30">Submit</button>
                      
                      
                  </form>
              </div>
          </div>
      </div>
  </div>

    

</body>
</html>
