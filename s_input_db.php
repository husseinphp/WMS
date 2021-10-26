<?php
$con = mysqli_connect('localhost','root','');
$sql = 'CREATE DATABASE store';
$query = mysqli_query($con,$sql);
mysqli_select_db($con,'store') or die(' ERROR');
$sql = 'CREATE TABLE s_input(
 id int NOT NULL auto_increment PRIMARY KEY,
 number varchar(20) NOT NULL,
 d_rec varchar(80) NOT NULL,
 name_of_the_provider varchar(80) NOT NULL,
 date varchar(20) NOT NULL,
 date_order_book varchar(80) NOT NULL,
 number_date_processing varchar(80) NOT NULL,
 sequence varchar(80) NOT NULL,
 count varchar(80) NOT NULL,
 price_singular varchar(80) NOT NULL,
 price_total varchar(80) NOT NULL,
 type_item_received varchar(80) NOT NULL,
 page_number_store_log varchar(80) NOT NULL,
 registration_sequence_number_store_record varchar(80) NOT NULL,
 notes varchar(80) NOT NULL,
 name_rec varchar(80) NOT NULL,
 title varchar(80) NOT NULL,
 rec_signature varchar(80) NOT NULL,
 signature_department_head varchar(20) NOT NULL)';
 $query = mysqli_query($con,$sql);
//  $sql2 = "INSERT INTO customers(name ,email ,address
// ,phone) VALUES('Hussein Ali', 'hussein@gmail.com', '40 Iraq', '96478785451')";
//  $query = mysqli_query($con,$sql2);

 ?>
 