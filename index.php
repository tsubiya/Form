<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Coding Task</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  </head>
  <body>
 
 
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Form</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="post" action="insert.php" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="name" class="control-label">Enter Name</label>
                                  <input type="text" class="form-control" id="name" name="name" value="" required="" title="Please enter you Name" placeholder="">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="email" class="control-label">Enter Email</label>
                                  <input type="email" class="form-control" id="email" name="email" value="" required="" title="Please enter your email">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="gender" class="control-label">Gender</label><div>
                                   <input type="radio" name="gender" id="gender" value="female">Female
                                  <input type="radio" name="gender" id="gender" value="male">Male

                                  <span class="help-block"></span>
                                </div>
                              </div>
                              <div class="form-group">
                              <div class="checkbox">
                                <label><input type="checkbox" value="" name="comm" id="comm">Happy to Recv Comm</label>
                               </div>
                               <span class="help-block"></span>
                                  </div>
                                  <div class="form-group">
                                  <label for="password" class="control-label">Enter Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
 
 
                              <button type="button" class="btn btn-success btn-block" name="insert" id="insert" onclick="submit()">Insert Data</button>
                              <br>
                            <p id="message"></p>
                          </form>
                      </div>
                  </div>
 
              </div>
          </div>
      </div>
  </div>
 
</body>
 
<script type="text/javascript">
 
  function insertData() {
    var name=$("#name").val();
    var email=$("#email").val();
    var gender=$("#gender").val();
     var password=$("#password").val();
 
 
// AJAX code to send data to php file.
        $.ajax({
            type: "POST",
            url: "insert.php",
            data: {name:name,email:email,gender:gender,password:password},
            dataType: "JSON",
            success: function(data) {
             $("#message").html(data);
            $("p").addClass("alert alert-success");
            },
            error: function(err) {
            alert(err);
            }
        });
 
}
 

 
  </script>
</html>
        