<!-- 
    Stampare a schermo una decina di dischi musicali (vedi screenshot).
    Utilizzare: Html, JS, VueJS, PHP 
-->
<?php
$songs = 'https://flynn.boolean.careers/exercises/api/array/music';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
</head>
<body>

<!-- header -->
    <?php require __DIR__ . '/components/head.php'; ?>

<!-- main -->
    <?php require __DIR__ . '/components/main.php'; ?>

<!-- footer -->
    <?php require __DIR__ . '/components/footer.php'; ?>
    
<!-- axios -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
<!-- vue -->
<script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
</body>
</html>