<?php

   
    $sayi=htmlspecialchars(trim($_POST['sayi']));
    if (strlen($sayi)==0) {
        echo "Boş değer gönderilemez!";
        exit;
    }
    echo "Girilen Sayi: ".$sayi;
    echo "<br>";
    uceBolunme($sayi);
    function uceBolunme($sayi)
    {
        if($sayi%3==0)
        {
            echo "Girdiğiniz sayı 3'e bölünür.";    
        }
        else
        {
            while($sayi%3!=0)
            {
                $sayi++;
            }
            echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı ".$sayi."'dır";
        }
    }



?>