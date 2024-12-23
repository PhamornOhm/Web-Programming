<?php
$classRoomData =[

    "Mon" =>[
        10 => "Preparation for Careers",
        11 => "Preparation for Careers",
        13 =>  "Web Programming",
        14 => "Web Programming",
        15 => "Web Programming",
        16 => "Web Programming",
        17 => "Web Programming",
    ],
    "Tue" =>[
        9 => "Data Analyte",
        10 => "Data Analyte",
        11 => "Data Analyte",
        16 => "Data Analyte",
    ],
    "Wed" =>[
        13 => "Data Analyte",
        14 => "Data Analyte",   
        15 => "Data Analyte",
        16 => "Data Analyte",
    ],
    "Thu" =>"",
    "Fri" =>"",
    "Sat" =>"",
    "Sun" =>"",
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <nav>
        <li><a href="#">Home</a></li>
        <li><a href="#">Detail</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </nav>
    <br>  <br>



    <table border="2" style="width: 100%;">
        <thead bgcolor="#666666	">
        <tr >
            <th class="Fontc">Day/Time</th>
            <th class="Fontc">8.00-9.00</th>
            <th class="Fontc">9.00-10.00</th>
            <th class="Fontc">10.00-11.00</th>
            <th class="Fontc">11.00-12.00</th>
            <th class="Fontc">12.00-13.00</th>
            <th class="Fontc">13.00-14.00</th>
            <th class="Fontc">14.00-15.00</th>
            <th class="Fontc">15.00-16.00</th>
            <th class="Fontc">16.00-17.00</th>
        </tr>
    </thead>
  

 


    <tbody>
        <?php foreach ($classRoomData as $day => $subject){ ?>
        <tr>
            <th><?php echo $day ?> </th>
            <?php for($i=8; $i<17;$i++){ ?>
            
                <td class="day1"> 
                    
                <?php echo !empty($subject[$i])? $subject[$i] : ""?>
            </td>
            <?php } ?>
         
        </tr>

        <?php } ?>


    </tbody> 



    </table>








    <br>  <br> <br>
    <footer>Copyright 2024</footer>






</body>
</html>