<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Reservation</title>
</head>
<body>

<h2>Room Booking</h2>
<form method="post" action="receipt.php">
    <label for="name">Customer Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="phonenum">Phone Number:</label><br>
    <input type="tel" id="phonenum" name="phonenum"required><br><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" cols="30"required></textarea><br><br>

    <label >Membership Status:</label> <label >Yes</label>
    <input type="radio" id="yes" name="statusm" required>
    <label >No</label>
    <input type="radio" id="no" name="statusm" required><br><br>

    <label for="membershiptype">Membership Type:</label><br>
    <select id="membershiptype" name="membershiptype">
        <option value="">Choose One</option>
        <option value="regular">non-Membership</option>
        <option value="gold">Gold</option>
        <option value="vip">VIP</option>
    </select><br><br>

    <label for="roomtype">Unit Price per Night:</label><br>
    <select id="prices" name="prices">
        <option value="">Choose One</option>
        <option value="100"> Deluxe Room Rm 100</option>
        <option value="150"> Business Room RM 150</option>
        <option value="200"> Suite RM 200</option>
    </select><br><br>


    <label for="numdays">Number Of Days:</label><br>
    <input type="number" id="numdays" name="numdays" width = "50px" min="1" max="31"><br><br>

    <input type="submit" value="Book Room">

</form>


</body>
</html>