<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 //$myArray = new stdClass();
 $Professions = array(
    array(
        "ProffessionNo" => "1",
        "ProffessionType" => "Technology",
        "ProffessionName" => "Programmer",
        "SalaryMonth" => "₱ 43,371",
        "Requirements" => "Graduate any field of IT"
    ),
    array(
        "ProffessionNo" => "2",
        "ProffessionType" => "Military",
        "ProffessionName" => "Air Force Pilot",
        "SalaryMonth" => "₱ 38,844 to ₱ 67,499",
        "Requirements" => "Must have a Baccalaureate Degree from any government-recognized institution. Must have a height of at least 152.4 cm (5' 0”) for both male and female. Not less than 21 y/o or not a day older than 29 y/o upon admission for training (born from 01 August 1987 to 01 August 1995)"
    ),
    array(
        "ProffessionNo" => "3",
        "ProffessionType" => "Medicine",
        "ProffessionName" => "Anesthesiologist",
        "SalaryMonth" => "₱ 145,000",
        "Requirements" => "Complete a four-year bachelors' degree, a four-year medical degree, and four years of residency."
    ),
    array(
        "ProffessionNo" => "4",
        "ProffessionType" => "Law",
        "ProffessionName" => "Mergers and Acquisitions Attorney",
        "SalaryMonth" => "₱ 50,000 to ₱ 60,000",
        "Requirements" => "A bachelor's degree in accounting, finance, or a related field coupled with several years of experience in investment banking."
    ),
    array(
        "ProffessionNo" => "5",
        "ProffessionType" => "Engineer",
        "ProffessionName" => "Electrical Engineer",
        "SalaryMonth" => "₱ 56,000",
        "Requirements" => "Bachelor's degree in electrical engineering, electronics engineering, or a related engineering field."
    )
);
    

    echo json_encode(array("Proffessions" => $Professions))
    //$myJSON = json_encode($Professions);
    //echo $myJSON;
?>