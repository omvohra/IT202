<?php

$ini = @parse_ini_file(".env");

if($ini && isset($ini["DB_URL"])){
    //load local .env file
    $url = $ini["DB_URL"];
    $db_url = parse_url($url);
}
else{
    //load from heroku env variables
    $url = getenv("DB_URL");
    $db_url = parse_url($url);
    
}
//attempts to handle a failure where parse_url doesn't parse properly (usually happens when special characters are included)
if (!$db_url || count($db_url) === 0) {
    $matches;
    $pattern = "/mysql:\/\/(\w+):(\w+)@([^:]+):(\d+)\/(\w+)/i";
    preg_match($pattern, $url, $matches);
    if(count($matches) === 0){
        echo "Error Malformed Database password variable.\n";
        exit();
    }

    if(!is_array($db_url)) $db_url=[];
    $db_url["host"] = $matches[3];
    $db_url["user"] = $matches[1];
    $db_url["pass"] = $matches[2];
    $db_url["path"] = "/" . $matches[5];
}
if (count($db_url) === 1) {
    echo "SETUP ERROR: Missing Database Setup Information. Contact developer of this app.\n";
    exit();
} else {
    if(isset($db_url["user"]) == false || isset($db_url["pass"]) == false) {
        echo "SETUP ERROR. Make sure password does NOT begin with a special character: ?#\"\\'/";
        exit();
    } else {
        $dbuser = $db_url["user"];
        $dbhost   = $db_url["host"];
        $dbpass = $db_url["pass"];
        $dbdatabase       = substr($db_url["path"],1);
    }
}
?>

