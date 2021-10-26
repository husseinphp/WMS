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
 count id NOT NULL,
 price_singular id NOT NULL,
 price_total id NOT NULL,
 type_item_received varchar(80) NOT NULL,
 page_number_store_log id NOT NULL,
 registration_sequence_number_store_record id NOT NULL,
 notes varchar(80) NOT NULL,
 name_rec varchar(80) NOT NULL,
 title varchar(80) NOT NULL,
 rec_signature varchar(80) NOT NULL,
 signature_department_head varchar(20) NOT NULL)';
 $query = mysqli_query($con,$sql);
//  $sql2 = "INSERT INTO customers(name ,email ,address
// ,phone) VALUES('Hussein Ali', 'hussein@gmail.com', '40 Iraq', '96478785451')";
//  $query = mysqli_query($con,$sql2);


 //Create Table For stationery.php 11 record

// mysqli_select_db($con,'store') or die(' ERROR');

 $sql2 = 'CREATE TABLE stationery(
 id int NOT NULL auto_increment PRIMARY KEY,
 sequence INT NOT NULL,
 name varchar(80) NOT NULL,
 price_singular varchar(80) NOT NULL,
 price_total varchar(80) NOT NULL,
 number_input varchar(20) NOT NULL,
 number_out  varchar(20) NOT NULL,
 number_balance  varchar(20) NOT NULL,
 buyer varchar(20) NOT NULL,
 general_record_sequence varchar(20) NOT NULL,
number_of_the_completed_document varchar(20) NOT NULL,
 date varchar(20) NOT NULL,
 notes varchar(80) NOT NULL
)';
 $query2 = mysqli_query($con,$sql2);



$sql3 = 'CREATE TABLE materials(
 id INT NOT NULL  PRIMARY KEY,
 sequence INT NOT NULL,
 name varchar(80) NOT NULL,
 price_singular INT NOT NULL,
 price_total INT NOT NULL,
 number_input INT NOT NULL,
 number_out  INT NOT NULL,
 number_balance  INT NOT NULL,
 buyer varchar(20) NOT NULL,
 general_record_sequence INT NOT NULL,
number_of_the_completed_document INT NOT NULL,
 date varchar(20) NOT NULL,
 notes varchar(80) NOT NULL
)';
 $query3 = mysqli_query($con,$sql3);




 $sql4 = 'CREATE TABLE damaged(
	id INT NOT NULL auto_increment PRIMARY KEY,
	sequence INT NOT NULL,
	name varchar(80) NOT NULL,
	count INT NOT NULL,
	buyer varchar(20) NOT NULL,
	consumption varchar(20) NOT NULL,
	page varchar(20) NOT NULL,
	date date NOT NULL
)';
 $query4 = mysqli_query($con,$sql4);





  $sql5 = 'CREATE TABLE mnq(
    id INT NOT NULL auto_increment PRIMARY KEY,
    undersigned varchar(80) NOT NULL,
    received_from varchar(80) NOT NULL,
    section varchar(80) NOT NULL,
    tems_listed_below varchar(20) NOT NULL,
    sequencing varchar(20) NOT NULL,
    subject_name varchar(20) NOT NULL,
    count INT NOT NULL,
    notes varchar(500) NOT NULL,
    recipient_name varchar(20) NOT NULL,
    title varchar(80) NOT NULL,
    Authentication varchar(80) NOT NULL,
    recipient_signature varchar(80) NOT NULL,
    date date NOT NULL
)';
 $query5 = mysqli_query($con,$sql5);



 $sql6 = 'CREATE TABLE admin(
  id INT NOT NULL auto_increment PRIMARY KEY,
  name varchar(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL
)';
$query6 = mysqli_query($con,$sql6);



  
 ?>
 