<?php 
include __DIR__ . "/database.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header>
<img src="img/logo.png" alt="">

    </header>
<section class="music_records">
<?php 
foreach($music_records as $album) { ?>
    <div class="cd-album">
    <img src="<?php echo $album['poster']?>" alt="<?php echo $album['title']?>">
    <h4><?php echo $album['title']?></h4>
    <p><?php echo $album['author']?></p>
    <p><?php echo $album['genre']?></p>
    <span><?php echo $album['year']?></span>

    
    </div>

<?php }  ?>

</section>
    
</body>
</html>