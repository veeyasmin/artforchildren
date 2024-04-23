<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
        <meta charset="utf-8">
        <title>Black Goose Bistro Summer Menu</title>
        <link href='http://fonts.googleapis.com/css?family=Marko+One' rel='stylesheet' type='text/css'>
 <style>
              body{background-color: rgb(255, 254, 232);} 
              
        header{
            padding:60px;
            text-align: center;
            background:#fffae1;
            padding: 20px;
  margin-top: 20px;
           
            }
        img { 
            border-radius: 25px;
        float: right;
        margin: 12px;
}  
.center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 90%;  
        }

        h1{
            text-align: center; 
font-family: serif; 
font-weight: normal; 
text-transform: uppercase;
margin-top: 30px;
        }

    h2{color: #291601; 
font-size: 2.5em;
text-align: center;}
h3{
    color: #fffae1;
    font-size:.5em;
}
h4{
    color: #291601;
    font-size:.1.5em;
    text-align: left top;
}
    .navbar {
  overflow: hidden;
  background-color: #327a81;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #fff(27, 12, 12); opacity:40%;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
    


footer {
  background-color: #327a81;
  color: #fff rgb(51, 51, 51)rgb(212, 116, 177)rgb(212, 116, 150)rgb(145, 68, 95)rgb(68, 145, 109)rgb(145, 83, 68)rgb(63, 30, 22);
  text-align: center;
  padding: 20px;
  margin-top: 20px;
}

footer p {
  margin-top: 10px;
}
.table-users { border-radius: 10px;  max-width: calc(100%- 2em); margin: 1em auto; overflow: hidden; width: 700px;} 
        table{width: 100%;}
         table td, table th {  border: 0px solid #d0d0d0; color:rgb(0, 0, 0); padding: 10px;}
        table td { text-align: center; vertical-align: middle;} 
        table td:last-child{ font-size: 0.95em; line-height: 1.4; text-align: left; }
        table th{ background-color: rgb(255, 254, 232); font-weight: 300;}
         table tr:nth-child(2n) {background-color: white;} 
         table tr:nth-child(2n+1) {background-color: rgb(255, 254, 232); }
         @media screen and (max-width:700px)
         { table, tr, td{display:block; left: 0; position: absolute; } td:nth-child(2):before {content: "Name"}
        tr{ padding: 10px 0; position: relative; }
    tr:first-child{display: none;} }  
    .border{
        padding:1em 1em 1em; 
    }
    p{
        color: #291601;
        font-size: large;
        margin-left: 50px;
    }
</style> 
</head>
<header>
    <h2>form recieved</h2><p>Thank you for ordering from Black Goose Bistro. We have received the following information about your order:</p>

<h2>Your Information</h2>
<ul>
<li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
<li><strong>Address:</strong> <?php print $_POST['address'] ? $_POST['address'] : '<em>empty</em>'; ?></li>
<li><strong>Telephone number:</strong> <?php print $_POST['telephone'] ? $_POST['telephone'] : '<em>empty</em>'; ?></li>
<li><strong>Email Address:</strong> <?php print $_POST['email'] ? $_POST['email'] : '<em>empty</em>'; ?></li>
</ul>
<p><strong>Tell us about yourself:</strong> <?php print $_POST['instructions'] ? $_POST['instructions'] : '<em>empty</em>'; ?></p>

<h2>Your form</h2>
<?php if (!isset($_POST['crust']) && !isset($_POST['toppings']) && !isset($_POST['pizzas'])) { ?>
<em>Sorry, we did not receive your information. <a href="../artforchildren.html">Try again.</a></em>
<?php } 
  else { ?>
    <ul>
    <li><strong>Crust:</strong> <?php print isset($_POST['crust']) && $_POST['crust'] ? $_POST['crust'] : '<em>empty</em>'; ?></li>
    <li><strong>Toppings:</strong> <?php
      print $toppings;
      if ($toppings_problem) { ?>
        <span style="color:red">*</span>
     <?php } ?></li>
    <li><strong>Number:</strong> <?php print isset($_POST['pizzas']) && $_POST['pizzas'] ? $_POST['pizzas'] : '<em>empty</em>'; ?></li>
    </ul>
<?php  }
if ($toppings_problem) { ?>
  <hr />
  <p>&nbsp;</p>
<?php } ?>

<p class="disclaimer"><small>This site is for educational purposes only. No pizzas will show up at your door.</small></p>

</body>
</html>