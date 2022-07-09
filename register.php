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
    <title>E-KISAN | Register</title>
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
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script>  
    $(document).ready(function(){  
        $("#registerform").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 4,
               }, 
               address: {
                    required: true,
                    minlength: 25,
               }, 
               state: {
                    required: true,
               }, 
               city: {
                    required: true,

               }, 
               pincode: {
                    required: true,
                    number: true,
                    minlength: 6,
                    maxlength: 6
               },
               mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                }, 
            },
            messages: {
                name: {
                    required: "specify name",
                    minlength: "The name field has to be minimum 4 characters long",
                },
                address: {
                    required: "specify address",
                    minlength: "The address field has to be minimum 25 characters long",
                },
                state: {
                    required: "specify state",
                },
               city: {
                    required: "specify city",
                },
                pincode: {
                    required: "specify pincode",
                    minlength: "The pincode field has to be minimum 6 characters long",
                    maxlength: "The picode field has to be maximum 6 characters long"
                },
                mobile: {
                    required: "specify number",
                    minlength: "The mobile field has to be minimum 10 characters long",
                    maxlength: "The mobile field has to be maximum 10 characters long"
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
                    <form id="registerform" action="register" method="post">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Name
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Address
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea type="text" id="address" name="address" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    State
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="state" class="form-control">    
                                    <option value="<?php echo $tbl_states['id']; ?>">
                                        <?php echo $tbl_states['name']; ?>
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    City
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="city" class="form-control" >
                                    <option value="<?php echo $tbl_cities['id']; ?>">
                                        <?php echo $tbl_cities['name']; ?> 
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Pincode
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="pincode" name="pincode" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Mobile No.
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="mobile" name="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Email
                                </label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="../e-kisan"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                    

    <script src="Layout/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="Layout/assets/js/dashboard.js"></script>
    <script src="Layout/assets/js/widgets.js"></script>
    <script src="Layout/assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="Layout/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="Layout/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="Layout/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    

</body>
</html>



<script>  
    $(document).ready(function(){  
        $("#registerform").validate({
            rules: {
               name: {
                    required: true,
                    minlength: 4,
                    maxlength:20
               }, 
               address: {
                    required: true,
                    minlength: 25,
                    maxlength:200
               }, 
               state: {
                    required: true,
                    minlength: 4,
                    maxlength:20
               }, 
               city: {
                    required: true,
                    minlength: 4,
                    maxlength:20

               }, 
               pincode: {
                    required: true,
                    number: true
                    minlength: 6,
                    maxlength:6
               },
               mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength:10
                }, 
               email: {
                    required: true,
                    minlength: 6,
                    maxlength:20
               }, 
                password: {
                    required: true,
                    minlength: 6,
                    maxlength:20
                }
            },
            messages: {
                name: {
                    required: "specify name",
                    minlength: "The name field has to be minimum 4 characters long",
                    maxlength: "The name field has to be maximum 20 characters long"
                },
                address: {
                    required: "specify address",
                    minlength: "The address field has to be minimum 25 characters long",
                    maxlength: "The address field has to be maximum 200 characters long"
                },
                state: {
                    required: "specify state",
                    minlength: "The state field has to be minimum 4 characters long",
                    maxlength: "The state field has to be maximum 20 characters long"
                },
                city: {
                    required: "specify city",
                    minlength: "The city field has to be minimum 4 characters long",
                    maxlength: "The city field has to be maximum 20 characters long"
                },
                pincode: {
                    required: "specify pincode",
                    minlength: "The pincode field has to be minimum 6 characters long",
                    maxlength: "The picode field has to be maximum 6 characters long"
                },
                mobile: {
                    required: "specify number",
                    minlength: "The mobile field has to be minimum 10 characters long",
                    maxlength: "The mobile field has to be maximum 10 characters long"
                },
                email:{
                    required: "specify email",
                    minlength: "The email field has to be minimum 6 characters long",
                    maxlength: "The email field has to be maximum 20 characters long"
                },
                password: {
                    required: "specify password",
                    minlength: "The password field has to be minimum 6 characters long",
                    maxlength: "The password field has to be maximum 20 characters long"
                }
            }  
        });
    }); 
</script> 