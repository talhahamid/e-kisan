<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-KISAN | Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?=base_url()?>/Layout/apple-icon.png">
    <link rel="shortcut icon" href="<?=base_url()?>/Layout/favicon.ico">
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/css/bootstrap-select.less"> 
    <link rel="stylesheet" href="<?=base_url()?>/Layout/assets/scss/style.css">
    <link href="<?=base_url()?>/Layout/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script>  
    $(document).ready(function(){  
        $("#indexform").validate({
            rules: {
                mobile: {
                    required: true,
                    number: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                mobile: {
                    required: "specify number"
                },
                password: {
                    required: "specify password"
                }
            }  
        });
    }); 
</script> 
    
</head>

<body style="background-image:url('<?=base_url()?>/Layout/images/farm2.jpg');">

  <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
          <div class="login-content">
              <div class="login-form">
                  <form method="post" id="indexform" action="<?php echo base_url('checklogin')?>">
                      <div class="form-group">
                          <label>Mobile No.</label>
                          <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Mobile No."/>
                      </div>
                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                      </div>
                      <div class="checkbox">
                          <label>
                              <input type="checkbox"> Remember Me
                          </label>
                          <label class="pull-right">
                              <a href="<?php echo base_url('forget') ?>">Forgotten Password?</a>
                          </label>

                      </div>
                      
                        <button type="submit" name="signin" id="signin" class="btn btn-success btn-flat m-b-30 m-t-30"> Sign in</button>
                      
                      <div class="register-link m-t-15 text-center">
                          <p>Don't have account ? <a href="<?php echo base_url('register') ?>"> Sign Up Here</a></p>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

    

</body>
</html>
