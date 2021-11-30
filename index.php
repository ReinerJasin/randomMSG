<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <style>
            body,h1 {font-family: "Raleway", sans-serif; margin: 0;}
            body, html {height: 100%;}
            .bgimg {
                background-image: url('https://images.pexels.com/photos/572897/pexels-photo-572897.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
                min-height: 100%;
                background-position: center;
                background-size: cover;
            }
            .content {
                color: white;
                width: 100%;
                padding: 50px;
                text-align: center;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
            }
        </style>
    </head>

    <body>
        
    <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">

        <div class="content">

            <h1>Special message for you :</h1>
            
            <?php

                // Membaca File .txt
                $myfile = fopen("resource.txt", "r") or die("Error loading text resource!");
                $text_list = fread($myfile,filesize("resource.txt"));
                fclose($myfile);

                // echo "<br/>";

                // Split teks berdasarkan 'enter'
                $text_array = explode("\n",$text_list);
                $random = mt_rand(0,count($text_array)-1);

                // Menampilkan Random Message
                echo '<h2 class="text">"'.$text_array[$random].'"</h2>';

            ?>

        </div>
    
    </div>
    
    </body>
</html>