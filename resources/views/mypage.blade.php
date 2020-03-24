<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>my page</h1>

    <ul>
        <?php 
            foreach($person_list as $person){    
        ?>
            <li><?php echo $person; ?></li>

            <?php } ?>
    </ul>

</body>
</html>