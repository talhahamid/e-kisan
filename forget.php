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
    <title>E-KISAN | Forget</title>
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
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="Layout/assets/scss/style.css">
    <link href="Layout/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script>  
    $(document).ready(function(){  
        $("#forgetform").validate({
            rules: {
                email: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: "specify email"
                },
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
                    <form id="forgetform" method="post" action="../e-kisan">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="Layout/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="Layout/assets/js/popper.min.js"></script>
    <script src="Layout/assets/js/plugins.js"></script>
    <script src="Layout/assets/js/main.js"></script>




</body>