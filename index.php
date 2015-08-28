<!DOCTYPE html>
<html>
<head>
  <title>PHP test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
  $(document).ready(function(){
    $('.somebutton').click(function() {
            $.ajax({
                url: 'controller/addBookmark',
                type: 'POST',
                data: {'submit':true}, // An object with the key 'submit' and value 'true;
                success: function (result) {
                  alert(result);
                }
            });
    });
  });
</head>
<body>

<div class="container">
  <h2>Php Developer Test</h2>
    <div class="form-group">
      <label for="email">Sortcode:</label>
      <input type="text" pattern="[0-9]*" minlength=6 maxlength=6 class="form-control" id="email" placeholder="Enter Sortcode">
    </div>
    <div class="form-group">
      <label for="pwd">Bank Account:</label>
      <input type="text" pattern="[0-9]*" minlength=8 maxlength=8 class="form-control" id="pwd" placeholder="Enter Bank Account">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</div>

</body>
</html>
