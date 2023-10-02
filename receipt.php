<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Receipt Room Reserve</title>
</head>
<body>
<h1>Receipt</h1>
<div class="container">


    <?php
    include('function.php');

    $name = $_POST['name'];
    $phone = $_POST['phonenum'];
    $address = $_POST['address'];
    $membershipType = strtolower($_POST['membershiptype']);
    $membershipstatus = strtolower($_POST['statusm']);
    $roomTypes = $_POST['roomtype'];
    $price = $_POST['prices'];
    $roomDays = intval($_POST['numdays']);

    $roomTotal = 0;
    $discount = "0";
    $discountamt = 0.0;
    $roompm = 0.00;
    $prices = 0.00;


    echo "Name: " . $name . "<br><br>";
    echo "Phone Number: " . $phone . "<br><br>";
    echo "Address: " . $address . "<br><br>";


    list($prices ,$roomTotal,$roompm, $discountamt, $discount) = calculateRoomTotal($roomTypes, $roomDays, $membershipType, $prices);
    // Calculate and display room details
    if ($membershipType == 'vip') {
        echo "Membership Type: VIP Member<br><br>";
        echo "Room Type: " . $roomTypes . " Room<br><br>";
        echo "Unit Price: RM" . $roompm . ".00<br><br>";
        echo "Number of Days: " . $roomDays . " Days<br><br>";
        echo "Discount: " . $discount . "<br><br>";
        echo "Room Prices Before Discount: RM" . $roomTotal . "<br><br>";
        echo "Discount Prices: RM" . $discountamt . "<br><br>";

    } elseif ($membershipType == 'gold') {
        echo "Membership Type: GOLD Member<br><br>";
        echo "Room Type: " . $roomTypes . " Room<br><br>";
        echo "Unit Price: RM" . $roompm . ".00<br><br>";
        echo "Number of Days: " . $roomDays . " Days<br<br>";
        echo "Discount: " . $discount . "<br><br>";
        echo "Room Prices Before Discount: RM" . $roomTotal . "<br><br>";
        echo "Discount Prices: RM" . $discountamt . "<br><br>";
    } elseif ($membershipType == 'regular') {
        echo "Membership Type: Not a Member<br><br>";
        echo "Room Type: " . $roomTypes . " Room<br><br>";
        echo "Unit Price: RM" . $roompm. ".00<br><br>";
        echo "Number of Days: " . $roomDays . " Days<br><br>";
        echo "Discount: " . $discount . "<br><br>";
    } else {
        echo "Some error ocurred";
    }
    echo "Grand Total: RM" . number_format($prices, 2) . "<br><br>";
    ?>
</div>
</body>
</html>
