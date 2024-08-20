<?php

function head($title = "")
{
    ?>
    <!DOCTYPE html>
        <html lang="en" style="background-color:lightgreen;">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <div style="min-height: 90vh;">
                <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/studentInfo.php">Students Info</a></li>
                </ul>
            <h1>Welcome / <?php echo $title ?: "Undefined !!" ?></h1>
    
    <?php
}


function footer()
{
    ?>
    
    </div>
    <div style="background-color: #888; padding: 30px 10px;">
        all rights reserved by Mr. Yaqmaei
    </div>
    
</body>
</html>


    <?php

}