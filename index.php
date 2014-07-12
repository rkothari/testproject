<?php
  $user =$_POST['user'];
  $pass =$_POST['pass'];
  
  $crl=curl_init();
  curl_setopt($crl, CURLOPT_URL,"middle.php");
  curl_setopt($crl, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($crl, CURLOPT_POSTFIELDS, "username=$Username&password=$Password");
  curl_setopt($crl, CURLOPT_FOLLOWLOCATION, true);

  $result= curl_exec($crl);
  //check result                                                                                                                                                

  curl_close($crl);

  return $result;

  $token_found = strpos($res, "welcome");

  $auth_result = array( "authNJIT" => false, "AuthLocal" => false);

  if (!$token_found)
    {
      $auth_result["authNJIT"] = false;
    }
  else
    {
      $auth_result["authNJIT"] = true;
    }
?>

<script type="text/javascript">
</script>

  <header>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/foundation.css">
  </header>
  
  <body class="blackboard"> 
    <div id="head">
      CS 101 ExamLocation
    </div>
    <br/>
    <br/>
    <br/>
    <div class="row"> 
      <div class="small-4 small-centered columns">
        <div>
        <form id="login" action=" " method="post">
            <h5 class="white">User Name:</h5>
            <input type="text" name="user">
            <h5 class="white">Password:</h5>
            <input type="password" name="pass">
            <button class="right" id="loginstyle" type="submit" name="submit" value="Login">Login</button>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>