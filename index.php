<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
  </head>
  <body>
  <!--login-->
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-lg-push-4 col-md-push-4">
               <div class="panel panel-default" style="margin-top: 50px;">
                 <div class="panel panel-heading">LoginAdmin</div>
                   <div class="panel panel-body">
                      <form method="POST">
                        <div class="form-group">
                           <input type="text" name="u_name" class="form-control input-sm" required placeholder="adminName">
                        </div>
                        <div class="form-group">
                           <input type="password" name="u_pass" class="form-control input-sm" required placeholder="adminPassword">
                        </div>
                        <div class="form-group">
                           <input type="submit" name="u_log" class="btn btn-success btn-sm" value="Login Admin">
                           <a href="" class="btn btn-info btn-sm">Register</a>
                        </div>
                      </form>
                   </div>
               </div>
            </div>       
         </div>
      </div>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery.js"></script>
  </body>
</html>