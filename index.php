<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Sheraton Hotels Clone</title>
<style>
body{margin:0;font-family:Arial;background:#f9f9f9;}
header{background:#222;color:white;padding:20px;text-align:center;}
.search-box{background:white;padding:20px;margin:20px auto;max-width:600px;
    box-shadow:0 0 10px rgba(0,0,0,0.2);border-radius:12px;}
input,button{padding:10px;margin:5px;border:1px solid #ccc;border-radius:8px;width:45%;}
button{background:#c49a6c;color:white;cursor:pointer;width:95%;}
.hotels{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;padding:20px;}
.card{background:white;border-radius:12px;overflow:hidden;
    box-shadow:0 4px 8px rgba(0,0,0,0.2);}
.card img{width:100%;height:180px;object-fit:cover;}
.card h3{margin:10px;}
.card p{margin:10px;color:#666;}
</style>
<script>
function goToList(){
  let loc=document.getElementById("loc").value;
  let inDate=document.getElementById("in").value;
  let outDate=document.getElementById("out").value;
  window.location.href="list.php?loc="+loc+"&in="+inDate+"&out="+outDate;
}
</script>
</head>
<body>
<header><h1>Welcome to Sheraton Hotels</h1></header>
<div class="search-box">
  <input type="text" id="loc" placeholder="Enter destination">
  <input type="date" id="in">
  <input type="date" id="out"><br>
  <button onclick="goToList()">Search Hotels</button>
</div>
 
<h2 style="text-align:center;">Featured Hotels</h2>
<div class="hotels">
<?php
$res=$conn->query("SELECT * FROM hotels LIMIT 3");
while($row=$res->fetch_assoc()){
  echo "<div class='card'>
        <img src='{$row['image']}'>
        <h3>{$row['name']}</h3>
        <p>{$row['location']} | ⭐ {$row['rating']} | Rs {$row['price']}</p>
      </div>";
}
?>
</div>
</body>
</html>
