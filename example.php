<?php
$apiKey = "YOUR_API_KEY_HERE";
try {
    if (!isset($_GET['number']) || !isset($_GET['message'])) {
        throw new Exception("Missing parameters");
    }

    $number = urldecode($_GET['number']);
    $message = urldecode($_GET['message']);

    $ch = curl_init();
    if ($ch === false) {
        throw new Exception("Failed to initialize cURL");
    }

    curl_setopt($ch, CURLOPT_URL, 'https://sms.anbuinfosec.xyz/api/sms?apikey=' . $apiKey . '&mobile=' . trim($number) . '&msg=' . trim($message));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        throw new Exception("cURL error: " . curl_error($ch));
    }

    curl_close($ch);

    $responseData = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception("JSON decode error: " . json_last_error_msg());
    }

    if (isset($responseData['success']) && $responseData['success'] === true) {
        echo json_encode(["success" => true, "message" => "SMS sent successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to send SMS"]);
    }
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
