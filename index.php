<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Form(Password Show and Hide)</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
    body {
    background-color: #eee;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}

</style>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container">
            <form class="form-horizontal" role="form" method="POST">
                <h3>Live Username Available or Not Using PHP Jquery AJAX</h3>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" id="username" name="username" placeholder="Full Name" class="form-control">
                        <span id="availability"></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="button" name="register" id="register" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#username').blur(function(){
                var username=$(this).val();

                $.ajax({
                    url:'check.php',
                    method:"POST",
                    data:{user_name:username},
                    success:function(data)
                    {
                        if (data=='0') {

                            $('#availability').html('<span class="text-danger">Username not Available</span>');
                            $('#register').attr("disabled",true);
                        }
                        else
                        {
                            $('#availability').html('<span class="text-success">Username Available</span>');
                            $('#register').attr("disabled",false);
                        }
                    }
                })
            });
        });
    </script>
</html>
