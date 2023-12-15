
<?php
 
 $quran = array("Al-Fatiha" => "In the name of Allah, the Most Gracious, the Most Merciful.",
                "Al-Baqarah 255" => "Allah! There is no deity except Him, the Ever-Living, the Sustainer of existence.",
                "Al-Imran 185" => "Every soul will taste death, and you will only be given your full compensation on the Day of Resurrection. So, he who is drawn away from the Fire and admitted to Paradise has attained [his desire]. And what is the life of this world except the enjoyment of delusion.",
                "An-Nisa 135" => "O you who have believed, be persistently standing firm in justice, witnesses for Allah, even if it be against yourselves or parents and relatives. Whether one is rich or poor, Allah is more worthy of both. So follow not [personal] inclination, lest you not be just. And if you distort [your testimony] or refuse [to give it], then indeed Allah is ever, with what you do, Acquainted.",
                "Al-Ma'idah 3" => "This day I have perfected for you your religion and completed My favor upon you and have approved for you Islam as religion.",
                "Al-Anfal 2" => "Indeed, the believers are those whose hearts tremble when Allah is mentioned, and when His verses are recited to them, it increases them in faith; and upon their Lord they rely.",
                "Al-Baqarah 197" => "And take provisions, but indeed, the best provision is Taqwa. So fear Me, O you who are understanding.",
                "Al-Hadid 3" => "And He is with you wherever you are. And Allah, of what you do, is Seeing.",
                "Al-Baqarah 286" => "Allah does not burden a soul beyond that it can bear...",
                "Al-Imran 110" => "You are the best nation produced [as an example] for mankind. You enjoin what is right and forbid what is wrong and believe in Allah.",
            );



$randomVerse = array_rand($quran);


$quranicVerse = $quran[$randomVerse];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qoute</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="quote_wrapper">

    <h1 > Quran for Motivation </h1>
    <div class="quote">
        <?php  echo " [ $quranicVerse ]" ;?>
    </div>
    

</div>

</body>
</html>