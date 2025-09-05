<?php
include 'config.php';
 
$sql1 = "CREATE TABLE IF NOT EXISTS hotels(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    location VARCHAR(255),
    rating FLOAT,
    price DECIMAL(10,2),
    amenities TEXT,
    image VARCHAR(255)
)";
$conn->query($sql1);
 
$sql2 = "CREATE TABLE IF NOT EXISTS bookings(
    id INT AUTO_INCREMENT PRIMARY KEY,
    hotel_id INT,
    guest_name VARCHAR(255),
    email VARCHAR(255),
    checkin DATE,
    checkout DATE,
    guests INT,
    total_price DECIMAL(10,2)
)";
$conn->query($sql2);
 
$conn->query("INSERT INTO hotels (name,location,rating,price,amenities,image) VALUES
('Sheraton Grand', 'Karachi', 4.5, 15000, 'Free Wifi, Pool, Gym', 'images/h1.jpg'),
('Sheraton City', 'Lahore', 4.0, 12000, 'Breakfast, Wifi, Parking', 'images/h2.jpg'),
('Sheraton Beach', 'Islamabad', 5.0, 20000, 'Sea View, Pool, Wifi', 'images/h3.jpg')
");
 
echo "Database & sample data created successfully!";
?>
 
