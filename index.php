<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="process_payment.php" method="POST">
    <label for="gifts">Choose a gift:</label>
    <select name="gift" id="gifts">
        <option value="flowers">$10 - Flowers</option>
        <option value="card">$5 - Card</option>
        <option value="balloon">$15 - Balloons</option>
    </select>
    <input type="submit" value="Send Gift">
</form>
</body>
</html>