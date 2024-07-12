<?php
$host = "localhost";
$username = "root";
$pass = "";
$dbname = "robot";



// إنشاء اتصال بقاعدة البيانات
$conn = mysqli_connect($host, $username, $pass, $dbname);

// التحقق من الاتصال
if ($conn) {
   echo "connected";
  
}
else{
    echo "not connected";
}

?>
