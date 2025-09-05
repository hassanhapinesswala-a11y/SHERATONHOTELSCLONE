<?php include 'config.php'; 
$loc=$_GET['loc']??''; 
$in=$_GET['in']??''; 
$out=$_GET['out']??'';
?>
<!DOCTYPE html>
<html>
<head>
<title>Hotels List</title>
<style>
body{font-family:Arial;background:#fafafa;}
.hotel{background:white;margin:20px;padding:15px;border-radius:12px;
    box-shadow:0 2px 6px rgba(0,0,0,0.2);display:flex;}
.hotel img{width:200px;height:150px;object-fit:cover;border-radius:10px;}
.details{padding-left:20px;}
button{padding:10px;background:#c49a6c;color:white;border:none;border-radius:8px;}
</style>
<script>
function goBook(id){
  window.location.href="hotel.php?id="+id+"&in=<?=$in?>&out=<?=$out?>";
}
</script>
</head>
<body>
<h2 style="text-align:center;">Available Hotels in <?=$loc?></h2>
<?php
$res=$conn->query("SELECT * FROM hotels WHERE location LIKE '%$loc%'");
while($row=$res->fetch_assoc()){
  echo "<div class='hotel'>
    <img src='{$row['image']}'>
    <div class='details'>
      <h3>{$row['name']}</h3>
      <p>⭐ {$row['rating']} | Rs {$row['price']} per night</p>
      <p>{$row['amenities']}</p>
      <button onclick='goBook({$row['id']})'>View & Book</button>
    </div>
  </div>";
}
?>
</body>
</html>
