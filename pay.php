<?php
$apiKey = 'your_instasend_api_key';
$apiSecret = 'your_instasend_api_secret';
$amount = $_POST['gift']; // The selected gift amount
$phone = '2547XXXXXXXX'; // Customer's phone number in international format

$url = "https://api.instasend.co/send"; // Instasend API endpoint

$data = array(
    "api_key" => $apiKey,
    "api_secret" => $apiSecret,
    "phone" => $phone,
    "amount" => $amount,
    "currency" => "KES", // Assuming you're using Kenyan Shillings
    "callback_url" => "https://yourdomain.com/callback"
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

$response = curl_exec($ch);
curl_close($ch);

echo $response; // You can parse this and handle success or error
?>





<?php
$callbackData = file_get_contents('php://input');
$response = json_decode($callbackData, true);

if ($response['status'] == 'success') {
    $amount = $response['amount'];
    $phone = $response['phone'];
    // Store this information or confirm the gift was sent
    // e.g., you can insert the data into a MySQL database
} else {
    // Handle failed payment
}
?>