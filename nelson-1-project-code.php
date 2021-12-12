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
  $date = $_POST["date"];
  $subtotal = ($adult * 35) + ($child * 30);
  $salesTax = $subtotal * TAX;
  if (($adult + $child) < 6 ) {
    $fee = ($adult + $child)*1;
  }
  else {
    $fee = ($adult + $child)*0.5;
  }
  $totalCost = $subtotal + $salesTax + $fee;
  echo ("<p>Thank you <b> ${name} </b> at <b> ${phone} </b>.  Details of your total cost <b>$" . number_format($totalCost, 2) . "</b> are shown below:</p>");
  echo ("<ul>");
  echo("<li>Adult Tickets : ${adult}</li>");
  echo("<li>Child Tickets : ${child}</li>");
  echo("<li>Date : ${date}</li>");
  echo("<li>Sub-total: $" . number_format($subtotal, 2) . "</li>");
  echo("<li>Sales Tax : $" . number_format($salesTax,2). "</li>");
  echo("<li>Fee : $" . number_format($fee,2). "</li>");
  echo("</ul>");
  echo("<h3>Total: $". number_format($totalCost, 2). "<h3>");
  print("<br>");
  echo("<a href='nelson-1-project-form.html'>return to form<a>");
  ?>
</body>

</html>