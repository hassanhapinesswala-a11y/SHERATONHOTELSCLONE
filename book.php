?php include 'config.php'; 
$id=$_GET['id']; $in=$_GET['in']; $out=$_GET['out']; $guests=$_GET['guests'];
$hotel=$conn->query("SELECT * FROM hotels WHERE id=$id")->fetch_assoc();
$days=(strtotime($out)-strtotime($in))/(60*60*24);
$total=$hotel['price']*$days;
?>
<!DOCTYPE html>
<html>
<head>
<title>Booking <?=$hotel['name']?></title>
<style>
body{font-family:Arial;}
.form{max-width:500px;margin:auto;background:white;padding:20px;
    border-radius:12px;box-shadow:0 2px 6px rgba(0,0,0,0.2);}
input{width:95%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:8px;}
button{background:#c49a6c;color:white;border:none;padding:10px 20px;border-radius:8px;}
</style>
<script>
function confirmBooking(){
  let name=document.getElementById("name").value;
  let email=document.getElementById("email").value;
  if(name==""||email==""){alert("Fill all fields");return;}
  document.getElementById("f1").submit();
}
</script>
</head>
<body>
<div class="form">
<h2>Booking: <?=$hotel['name']?></h2>
<p>Check-in: <?=$in?> | Check-out: <?=$out?> | Guests: <?=$guests?></p>
<p>Total: Rs <?=$total?></p>
<form id="f1" method="post" action="confirm.php">
<input type="hidden" name="id" value="<?=$id?>">
<input type="hidden" name="in" value="<?=$in?>">
<input type="hidden" name="out" value="<?=$out?>">
<input type="hidden" name="guests" value="<?=$guests?>">
<input type="hidden" name="total" value="<?=$total?>">
<input type="text" id="name" name="name" placeholder="Your Name">
<input type="email" id="email" name="email" placeholder="Your Email">
<button type="button" onclick="confirmBooking()">Confirm Booking</button>
</form>
</div>
</body>
</html>
 
