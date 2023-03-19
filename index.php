<?php
function getIPAddress() {
  //whether ip is from the share internet
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from the proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  //whether ip is from the remote address
  else{
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

$user_ip = getIPAddress();
$user_agent = $_SERVER['HTTP_USER_AGENT'];
?><!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your IP details</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      ::selection {
        background-color: #fff;
        color: #000;
      }
      
      body {
        background-color: #000;
        color: #fff;
        font-family: sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 20px;
      }
      
      .site-wrap {
        width: 100%;
        max-width: 600px;
        padding: 20px;
        background: #333;
        border-radius: 14px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        transition: all 0.3s ease-in-out;
        border: 6px solid transparent;
      }
      .site-wrap:hover {
        transform: scale(1.02);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 0 20px 0 rgba(255, 255, 255, 0.5);
        border-color: #fff;
      }
      .site-wrap:focus {
        outline: none;
        transform: scale(1.02);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 0 20px 0 rgba(255, 255, 255, 0.5);
        border-color: #fff;
      }
      
      h1 {
        font-size: clamp(3rem, 0.5rem + 6vw, 5rem)
      }
      
      .text-primary {
        color: pink
      }
    </style>
  </head>

  <body>
    <div class="site-wrap" tabindex="1">
      <h1>Your IP details</h1>
      <p>IP address is: <strong class="text-primary"><?php echo $_SERVER['REMOTE_ADDR']; ?></strong></p>
      <p>user agent is: <strong class="text-primary"><?php echo $user_agent; ?></strong></p>
    </div>
  </body>
</html>