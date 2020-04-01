<!DOCTYPE html>
<html>
<head>
    <title>Tech Event </title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body
{
    left:10%;
  width: 100%;
  text-align: center;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #111;
}
li {
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

li a:hover {
  background-color: #7B68EE;
}
.header
{
  padding: 2px;
  text-align: center;
  background-color: #ED1B24;
  color: black;
  font-size: 25px;
  color: #E3E3E3;
}
h4{
   color: #E3E3E3;
}
html, body {
 margin: 10;
}
h4{
  color: #ED1C24;
}


.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: White;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<title>Tech Event system</title>
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <div class="header">
  <p>
    <img src = "table.jpeg" alt="Image" height="350" width="1150"/>
  </p>
</div>

<body > -->

<ul>
  <li><i class="fas fa-home"></i></li>
  <li><a href="home.html">HOME</a></li>
  <li><i class="fa fa-address-book aria-hidden="true"></i></li>
  <li><a class="active" href="about.html">ABOUT</a></li>

  <li>
      <div class="dropdown">
          <button class="dropbtn">EVENT
          <i class="fa fa-caret-down"></i>
          </button>
      <div class="dropdown-content">
        <a href="Description.html">Event Description </a>
        <a href="Register.php">Register in Event </a>
      </div>
      </div> </li>
</ul>
<style>

body, html {
  height: 100%;
}
.fa-map-marker
{
color: #E3E3E3;
font-size: 40px;
background: #8E9297;
padding: 10px;
border-radius: 40px;
}
* {
  box-sizing: border-box;
}

.bg-image {
  background-image: url("bibi.jpg");
  filter: blur(2px);
  -webkit-filter: blur(2px);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  color: red;
font-size: 30px;
background: #1111;;
padding: 15px;
border-radius: 30px;
}
.fa-user{
color: red;
font-size: 30px;
background: #1111;
padding: 15px;
border-radius: 30px;
}
.bg-text {
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 10px;
  text-align: center;
}
h1{
  color: red;;
}

footer {
  display: block;
  background-color: #8E9297;
}
.fa-home {
color: red;
font-size: 30px;
background: #1111;;
padding: 15px;
border-radius: 30px;
}
.fa-files-o
{
  color: red;
font-size: 30px;
background: #1111;;
padding: 15px;
border-radius: 30px;
}
.fa-shipping-fast
{
color: red;
font-size: 30px;
background: #1111;;
padding: 15px;
border-radius: 30px;
}
.fa-address-book
{
color: red;
font-size: 30px;
background: #1111;;
padding: 15px;
border-radius: 30px;
}
.glyphicon-thumbs-up
{
color: red;
font-size: 30px;
background: #1111;
padding: 15px;
border-radius: 30px;
}
.fa-user{
color: red;
font-size: 30px;
background: #1111;
padding: 15px;
border-radius: 30px;
}
.fa-bars{
color: red;
font-size: 30px;
background: #1111;
padding: 15px;
border-radius: 30px;
}
.fa-envelope{
color: red;
font-size: 30px;
background: #1111;
padding: 15px;
border-radius: 30px;
}
.fa-cog{
color: #E3E3E3;
font-size: 40px;
background: #8E9297;
padding: 10px;
border-radius: 40px;
}
h2{
   text-align: justify;
  text-justify: inter-word;
  color: #E3E3E3;
}
</style>
<body >
<div class="bg-image"></div>
<div class="bg-text">
    <br><br><br>
  <h1 >Welcome to Tech Event Management System</h1>
  <h2>Event management is the application of project management to the creation and development of
      large-scale events such as festivals, conferences, ceremonies, weddings, formal parties,
       concerts, or conventions. It involves studying the brand, identifying
       its target audience, devising the event concept, and coordinating the technical aspects before actually
       launching the event..</h2>
</div>

<footer>
   <div>
     <p>©2016 to 2019 Tech Event Mangament Disclaimer| Help Line 4747-4747-4747</p>
   </div>
</footer>
</body>
</html>
