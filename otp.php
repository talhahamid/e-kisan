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
    <title>E-KISAN | OTP</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src='Layout/assets/main.js'></script>

<style>
    html, body, div, span, form, label, input {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  vertical-align: baseline;
}

html { box-sizing: border-box; }
*, *:before, *:after { box-sizing: inherit; }

form {
  position: relative;
  width: 400px;
  padding: 30px;
}
focus{outline:none;}

svg, line {

    position: relative;
    display: block;
    width: 510px;
    height: 2px;
  }
  input[maxlength="5"] {
      color:transparent;
    text-shadow: 0 0 0 #2196f3;
  }  
  input[maxlength="4"] {
    margin-left: 41px;
    width: 510px;
    font-size: 24px;
    border:0;
    margin-left: 60px;
    letter-spacing: 106px;    
    outline: none;
  }
  input[maxlength="4"] + svg line {    
    stroke-dasharray: 30;
    stroke-dashoffset: -10;
  }

</style>
</head>
<body style="background-image:url('Layout/images/farm2.jpg');">

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">

            <div class="login-form" style="width:650px">

                <div style="margin: auto;"> 
                   <h2><strong> OTP </strong></h2>
                   <hr>
                </div>

                <form action="password.php">
                    <input type="text" id="field-name" name="field-name" maxlength="4">
                    <svg viewBox="0 0 240 1" xmlns="http://www.w3.org/2000/svg">
                      <line x1="0" y1="0" x2="240" y2="0" stroke="black" />
                    </svg>
                    <br><br>
                    <h3 style="float: right;"><a href="">Resend OTP</a></h3>
                    <br><br><br>
                    <button type="submit" style="width:525px" class="btn btn-primary" >Verify</button>
                </form>

            <div>
        </div>      
    </div>
</div> 

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>  

      <script>
      $("input").keypress(function(){
        if ( $(this).val().length > 1){
         $(this).addClass('active');
         }
       });
       </script>

</body>
</html>