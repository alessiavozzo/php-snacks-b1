<?php 

$matches = [
    [
        "team" => "Olimpia Milano",
        "guest" => "Cantù",
        "teamScore" => 55,
        "guestScore" => 60
    ],
    [
        "team" => "Juve",
        "guest" => "Milan",
        "teamScore" => 11,
        "guestScore" => 65
    ],
    [
        "team" => "Lazio",
        "guest" => "Roma",
        "teamScore" => 87,
        "guestScore" => 22
    ],
    [
        "team" => "Olimpia",
        "guest" => "Corfù",
        "teamScore" => 54,
        "guestScore" => 96
    ]

    ];

for($i = 0; $i < count($matches); $i++){
    $match = $matches[$i];

    echo $match["team"] . " " . "-" . " " . $match["ospite"] . " | " . $match["teamScore"] . "-" . $match["guestScore"] . "<br>";
}

?>


        
