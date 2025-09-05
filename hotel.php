<?php include 'config.php'; 
$id=$_GET['id']; $in=$_GET['in']; $out=$_GET['out'];
$hotel=$conn->query("SELECT * FROM hotels WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
<title><?=$hotel['name']?></title>
<style>
body{font-family:Arial;}
.container{max-width:700px;margin:auto;background:white;padding:20px;
    border-radius:12px;box-shadow:0 2px 8px rgba(0,0,0,0.2);}
img{width:100%;border-radius:12px;}
button{background:#c49a6c;color:white;border:none;padding:10px 20px;
    border-radius:8px;margin-top:10px;}
</style>
<script>
function goBook(){
  let g=document.getElementById("guests").value;
  window.location.href="book.php?id=<?=$id?>&in=<?=$in?>&out=<?=$out?>&guests="+g;
}
</script>
</head>
<body>
<div class="container">
<h2><?=$hotel['name']?></h2>
<img src="<?=$hotel['image']?>">
<p>Location: <?=$hotel['location']?></p>
<p>⭐ <?=$hotel['rating']?> | Rs <?=$hotel['price']?> per night</p>
<p>Amenities: <?=$hotel['amenities']?></p>
<label>Guests: </label><input type="number" id="guests" value="1" min="1"><br>
<button onclick="goBook()">Book Now</button>
</div>
</body>
</html>
