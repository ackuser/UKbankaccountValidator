<html>
<head>
  <title>PHP test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   <script type="text/javascript">

     $(document).ready(function(){
        $("#testResult").hide();
        })

     function callListener() {
        var apiKey      = 'cf4c660b8cb57283d6e07bbc878ac8fb';
        var apiPassword = 'Pa$$w0rd1';
        var sortcode = $('#sortcode').val();
        var bankaccount = $('#bankaccount').val();
        var postData = 'key=' + apiKey + '&password=' + apiPassword + '&output=json&type=uk&sortcode=' + sortcode + '&bankaccount=' + bankaccount;

        $.getJSON("https://www.bankaccountchecker.com/listener.php?" + postData + "&callback=?",
           function(data) {
                $("#testResult").show();
                var result = $("#resultCode").text(data.resultCode);
                $("#resultDescription").text(data.resultDescription);
                if(result.text() == "01") {
                  //alert("Success.");
                  $.post( "backend3.php", { sortcode: sortcode, bankaccount: bankaccount } );
                }
           });
        }

   </script>

</head>
<body>
  <div class="container">
    <h2>Php Developer Test</h2>
      <div class="form-group">
        <label for="email">Sortcode:</label>
        <input id='sortcode' type="text" pattern="[0-9]*" minlength=6 maxlength=6 class="form-control" id="email" placeholder="Enter Sortcode">
      </div>
      <div class="form-group">
        <label for="pwd">Bank Account:</label>
        <input id='bankaccount' type="text" pattern="[0-9]*" minlength=8 maxlength=8 class="form-control" id="pwd" placeholder="Enter Bank Account">
      </div>
      <button type="submit"  value='Test' onclick='callListener()' class="btn btn-default">Submit</button>
  </div>
  <div id='testResult'>
     Result Code : <span id='resultCode'></span><br />
     Result Description : <span  id='resultDescription'></span>
  </div>
<script type="text/javascript">
</script>
</body>
</html>
