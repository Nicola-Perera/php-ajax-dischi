<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<?php

// header
    require __DIR__ . '/../components/header.php';
?>

<!-- main -->
<main>
    <div id="app">
    <div class="cards container">
            <div class="card" v-for="song in discs">
                <div class="song">
                    <img :src="song.poster" alt="song poster">
                        <h2>{{ song.title }}</h2>
                        <div class="song_content">
                            <div>
                                <h4>{{ song.author }}</h4>
                                <h4>{{ song.year }}</h4>
                            </div>
                        </div>
                </div>
            </div>
        </div> 
    </div>
</main>
    
<!-- axios -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>

<!-- vue -->
<script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>

<!-- js -->
<script src="../assets/js/app.js"></script>
</body>
</html>