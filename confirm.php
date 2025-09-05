<?php include 'config.php';
$id=$_POST['id']; $in=$_POST['in']; $out=$_POST['out'];
$guests=$_POST['guests']; $total=$_POST['total'];
$name=$_POST['name']; $email=$_POST['email'];
 
$conn->query("INSERT INTO bookings(hotel_id,guest_name,email,checkin,checkout,guests,total_price) 
VALUES('$id','$name','$email','$in','$out','$guests','$total')");
?>
<!DOCTYPE html>
<html>
<head>
<title>Booking Confirmed</title>
<style>
body{font-family:Arial;background:#f0f0f0;text-align:center;}
.box{background:white;max-width:400px;margin:100px auto;padding:30px;
    border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.3);}
button{background:#c49a6c;color:white;border:none;padding:10px 20px;border-radius:8px;}
</style>
<script>
function backHome(){window.location.href="index.php";}
</script>
</head>
<body>
<div class="box">
<h2>🎉 Booking Confirmed!</h2>
<p>Thank you <?=$name?>, your stay is booked.</p>
<button onclick="backHome()">Go to Homepage</button>
</div>
</body>
</html>
