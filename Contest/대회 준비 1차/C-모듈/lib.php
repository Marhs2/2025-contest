<?php
function move($path)
{
  echo "<script>location.href= '$path'</script>";
  exit;
}



function alert($text)
{
  echo "<script>alert('$text')</script>";
}


function hashPw($psw)
{
  $salt = bin2hex(random_bytes(32));
  $h_pw = hash('sha256', $salt . $psw);
  return [$h_pw, $salt];
}
