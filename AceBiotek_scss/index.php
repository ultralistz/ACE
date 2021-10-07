<?php

include('config/constants.php');

include('partials/header.php');
include('partials/menu.php');

?>


<main class="main main__bg">
    <div class="home__banner__container">
        <div class="slider__container">
        
            <div class="slider">
                <div class="slides">

                    <input type="radio" name="radio__btn" id="radio1">
                    <input type="radio" name="radio__btn" id="radio2">
                    <input type="radio" name="radio__btn" id="radio3">
                    <input type="radio" name="radio__btn" id="radio4">

                    <div class="slide first">
                        <img src="<?php echo IMGURL ?>1.jpg" alt="">
                    </div>

                    <div class="slide">
                        <img src="<?php echo IMGURL ?>2.jpg" alt="">
                    </div>

                    <div class="slide">
                        <img src="<?php echo IMGURL ?>3.jpg" alt="">
                    </div>

                    <div class="navigation__auto">
                        <div class="auto__btn1"></div>
                        <div class="auto__btn2"></div>
                        <div class="auto__btn3"></div>
                        <div class="auto__btn4"></div>
                    </div>
                </div>

                <div class="navigation__manual">
                    <label for="radio1" class="manual__btn"></label>
                    <label for="radio2" class="manual__btn"></label>
                    <label for="radio3" class="manual__btn"></label>
                </div>
            </div>
        </div>
    </div>

    <section class="home section" id="home">
    </section>

</main>






<?php include('partials/footer.php'); ?>