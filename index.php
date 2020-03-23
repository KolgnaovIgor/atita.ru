<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
</head>
<body>

<?php include "elements/header.php"?>
<?php include "functions/connectDBstuff.php"?>
<?php include "functions/connectDBusersdownload.php"?>

<div class="maincontent">

    <!--Всплывающая форма отображения карточки товара-->
    <div onclick="productone('none');" id="fon_white_product"></div>
    <div class="productform" id="productform"></div>

    <div class="content" id="content">
        <p2>Подождите пожалуйста. Мы готовим для Вас выборку товаров и услуг...</p2>
    </div>
    <div class="advertising">

    </div>
</div>



<!--Подключение библиотеки jquery и файла js с функцией запроса в DB-->
<script src="ajax/jquery340.min.js" type="text/javascript"></script>
<script src="js/stuffindex.js" type="text/javascript"></script>
<script src="js/searchindex.js" type="text/javascript"></script>
<script src="js/mainsearch.js" type="text/javascript"></script>
<script src="js/product.js" type="text/javascript"></script>

<!--Скрипт внесения в переменную js данные из DB массива с множеством значений объявлений по товарам-->
<script type="text/javascript">
    let bigdate = [];
    <?php foreach ($categories as $category): ?>
    bigdate.push(["<?= $category['id'] ?>", "<?= $category['name_product'] ?>", "<?= $category['id_people'] ?>", "<?= $category['photo1'] ?>", "<?= $category['photo2'] ?>", "<?= $category['photo3'] ?>", "<?= $category['price'] ?>", "<?= $category['description'] ?>", "<?= $category['country'] ?>", "<?= $category['city'] ?>", "<?= $category['time'] ?>", "<?= $category['category'] ?>"]);
    <?php endforeach;?>
</script>

<!--Скрипт внесения в переменную js данные из DB массива с множеством значений зарегистрированных пользователей-->
<script type="text/javascript">
    let bigdatepeople = [];
    <?php foreach ($catpeople as $category): ?>
    bigdatepeople.push(["<?= $category['id'] ?>", "<?= $category['name_real'] ?>", "<?= $category['last_name_real'] ?>", "<?= $category['nic'] ?>", "<?= $category['password'] ?>", "<?= $category['phone'] ?>", "<?= $category['email'] ?>", "<?= $category['avatar'] ?>", "<?= $category['contry'] ?>", "<?= $category['city'] ?>", "<?= $category['time'] ?>"]);
    <?php endforeach;?>
</script>

<!--Функция вызова всплывающего окна над страницей: Карточка товара-->
<script type="text/javascript">
    /*Функция вывода данных на карточку товара*/
    /*$(document).ready(cartproduct());*/

    function productone(state) {
        document.getElementById('fon_white_product').style.display = state;
        document.getElementById('productform').style.display = state;
    }
</script>


<?php include "elements/footer.php"?>

</body>
</html>