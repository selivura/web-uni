<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <?php
$phone = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = htmlspecialchars($_POST['phone']);
    }
}
?>
    <div class="preloader" id="preloader"> LOADING...</div>

<script>
    function closepreloader()
    {
        fadeOut("preloader");
    }
    window.addEventListener("load",function(){
        setTimeout(closepreloader, 2000);
    });
    function forceClosePreloader()
    {
        document.getElementById("preloader").hidden = true;
    }
    function fadeOut(element) 
    {
        var el = document.getElementById(element);
        el.style.opacity = 1;
        setInterval(function() 
        {
            var opacity = el.style.opacity;
            if (opacity > 0) 
            {
                opacity -= 0.05;
                el.style.opacity = opacity;
            }
            if(opacity <= 0)
            {
                el.hidden = true;
            }
        }, 50);
    }
</script>

        <header class="header_section">
            <p1 class="header_topleft">Сладкий сундук</p1>
            <section class="header_adress">
                <img class="header_adress_img" src="img/adress_img.png">
                <p class="header_adress_text">ул. Пушкина д. Колотушкина</p>
            </section>
            <section class="header_phone">
                <img class="header_phone_img" src="img/phone_img.png">
                <section class="header_phone_text">
                    <p1 class="header_phone_top">1 (234) 567-89-10</p1>
                    <p2 class="header_phone_bottom">Ежедневно с 9:00 до 20:00</p2>
                </section>
            </section>
        </header>

        <section class="main">
            <div class="main_upper_panel">
                <span>ВКУСНЕЙШИЕ</span>
            </div>
            <h1 class="main_text">
                Пирожные и капкейки от 150 ₽/шт. с доставкой по Санкт-Петербургу
            </h1>
            <h2 class="main_offer">
                Приготовим за 3 часа в день заказа. Доставка на авто в холодильнике.
            </h2>
            <section class="main_offer_bottom">
                <button class="main_button">Перейти в каталог</button>
                <p1 class="main_offer_catalog">9 различных видов на выбор</p1>
            </section>
        </section>
        <section class="catalog">

<h1 class="catalog_h1"> Для любых событий и дорогих вам людей </h1>

<ul class="catalog_list">
    <li class = "catalog_elem">
            <img class="catalog_image" src="img/catalog_img/img_0.png">
            <section class="catalog_text_and_button">
                <h1 class="catalog_name_text">Кремовый замок</h1>
                <p1 class="catalog_desc_text">Нежный крем любого цвета на выбор, вафельная основа</p1>
                <p2 class="catalog_price">150 ₽/шт.</p2>
                <button class="catalog_button"> Заказать</button>
            </section>
    </li>
    <li class = "catalog_elem">
        <img class="catalog_image" src="img/catalog_img/img_1.png">
        <section class="catalog_text_and_button">
            <h1 class="catalog_name_text">Малиновый рай</h1>
            <p1 class="catalog_desc_text">Воздушный крем, темная основа и ягода малины</p1>
            <p2 class="catalog_price">150 ₽/шт.</p2>
            <button class="catalog_button"> Заказать</button>
        </section>
    </li>
    <li class = "catalog_elem">
        <img class="catalog_image" src="img/catalog_img/img_2.png">
        <section class="catalog_text_and_button">
            <h1 class="catalog_name_text">Фейерверк</h1>
            <p1 class="catalog_desc_text">Разноцветные крем, с бисквитной основой</p1>
            <p2 class="catalog_price">150 ₽/шт.</p2>
            <button class="catalog_button"> Заказать</button>
        </section>
    </li>
    <li class = "catalog_elem">
        <img class="catalog_image" src="img/catalog_img/img_3.png">
        <section class="catalog_text_and_button">
            <h1 class="catalog_name_text">Щоколадный мир</h1>
            <p1 class="catalog_desc_text">Ореховая стружка, нежный крем и шоколадная основа</p1>
            <p2 class="catalog_price">150 ₽/шт.</p2>
            <button class="catalog_button"> Заказать</button>
        </section>
</li>
<li class = "catalog_elem">
    <img class="catalog_image" src="img/catalog_img/img_4.png">
    <section class="catalog_text_and_button">
        <h1 class="catalog_name_text">Слезы дракона</h1>
        <p1 class="catalog_desc_text">Нежный крем любого цвета на выбор, вафельная основа</p1>
        <p2 class="catalog_price">150 ₽/шт.</p2>
        <button class="catalog_button"> Заказать</button>
    </section>
</li>
</li>
<li class = "catalog_elem">
<img class="catalog_image" src="img/catalog_img/img_5.png">
<section class="catalog_text_and_button">
    <h1 class="catalog_name_text">Летняя фантазия</h1>
    <p1 class="catalog_desc_text">Украшения в форме сердец, для любимого человека</p1>
    <p2 class="catalog_price">150 ₽/шт.</p2>
    <button class="catalog_button"> Заказать</button>
</section>
</li>
<li class = "catalog_elem">
<img class="catalog_image" src="img/catalog_img/img_6.png">
<section class="catalog_text_and_button">
    <h1 class="catalog_name_text">Мыс безумия</h1>
    <p1 class="catalog_desc_text">Разноцветная основа, стружка и нежный крем</p1>
    <p2 class="catalog_price">150 ₽/шт.</p2>
    <button class="catalog_button"> Заказать</button>
</section>
</li>
<li class = "catalog_elem">
<img class="catalog_image" src="img/catalog_img/img_7.png">
<section class="catalog_text_and_button">
    <h1 class="catalog_name_text">Облачная сказка</h1>
    <p1 class="catalog_desc_text">Светлая основа, нежный крем со стружкой сверху</p1>
    <p2 class="catalog_price">150 ₽/шт.</p2>
    <button class="catalog_button"> Заказать</button>
</section>
</li>
<li class = "catalog_elem">
<img class="catalog_image" src="img/catalog_img/img_8.png">
<section class="catalog_text_and_button">
    <h1 class="catalog_name_text">Темный рыцарь</h1>
    <p1 class="catalog_desc_text">Тёмная основа, нежный крем и вкусные шарики</p1>
    <p2 class="catalog_price">150 ₽/шт.</p2>
    <button class="catalog_button"> Заказать</button>
</section>
</ul>
        <section class="form_main">
            <img src="img/cloud_end.png">
            <div class="form_block">
                <div class="form_heading">
                    <h1 class="form_h1">Чтобы сделать заказ, укажите ваш телефон</h1>
                    <h1 class="form_h2">Мы перезвоним в течение 15 минут, чтобы уточнить ваши пожелания</h1>
                </div>
                <form action="" method="POST" class="form_fields_checkbox">
                    <div class="form_fields">
                        <input class="form_field" type="tel" name="phone" pattern="[+]{1}[0-9]{11}" placeholder="Номер телефона (+12345678901)" required>
                        <button type="submit" class="form_submit">Сделать заказ</button>
                    </div>
                    <div class="form_checkbox">
                        <input type="checkbox" id="personal_data" required>
                        <label class="form_label" for="personal_data">Нажимая на кнопку, вы соглашаетесь с <u>условиями обработки персональных данных</u></label>
                    </div>
                </form>
            </div>
        </section>

        <div id="modal" class="modal">
            <div class="modal_content">
                    <p>Ваш номер телефона: <span id="phone-number"><?php echo $phone; ?></span></p>
                <button class="modal_button" onclick="closeModal()">Закрыть</button>
            </div>
        </div>

        <script>
            <?php if ($phone): ?>
                window.addEventListener("load", function() {
                    document.getElementById("modal").style.display = "block";
                    forceClosePreloader();
                    
                });
            <?php endif; ?>

            function closeModal() {
                document.getElementById("modal").style.display = "none";
            }
        </script>
    </body>
</html>
