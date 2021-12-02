<!DOCTYPE html>
<html lang="en">

<head>
  <!--Name: Connor Nelson 
    Filename:  
    Blackboard Username: XXXX 
    Class Section: CTI.110.XXXX 
    Purpose:    
  -->
  <meta charset="utf-8" />
  <title>L13 Event Form </title>
  <link rel="stylesheet" href="./nelson-1-project-style.css">

</head>

<body>
  <h1>Summary Ticket Cost for Concert</h1>
  <?php
  error_reporting(0);
  $name = $_POST['name'];
  define("TAX", 0.07);
  $phone = $_POST["phone"];
  $adult = $_POST["adultTickets"];
  $child = $_POST["childTickets"];
  $subtotal = ($adult * 35) + ($child * 30);
  $totalCost = $subtotal + ($subtotal * TAX);
  echo ("<p>Thank you <b> ${name} </b> at <b> ${phone} </b>.  Details of your total cost <b>$" . number_format($totalCost, 2) . "</b> are shown below:</p>");
  echo ("<ul>");
  echo ("<li>Sub-total: $" . number_format($subtotal, 2) . "</li>");
  echo ("</ul>");
  print("<br>");
  echo("<a href='nelson-1-project-form.html'>return to form<a>");
  ?>
</body>

</html>