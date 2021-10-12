<?php
include('config/constants.php');

include('partials/header.php');
include('partials/menu.php');
?>

<!--=============== 主要區塊 ===============-->
<main class="main main__bg">
    <!--=============== BANNER ===============-->


    <v-carousel
        height="800"
        hide-delimiter-background
        show-arrows-on-hover
    >
      <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="item.src"
        reverse-transition="fade-transition"
        transition="fade-transition"
      ></v-carousel-item>
    </v-carousel>



    <!--=============== 新聞資訊 ===============-->
    <section class="home section news__container">
        <div class="home__container news__container grid">
            <div class="home__title">新聞資訊</div>
        </div>
        
        <?php
        $news__title__1 = "10/6 外貿協會駐美國舊金山辦事處舉行國慶晚宴: 筑波醫電獲邀代表展示防疫成果";
        $news__text__1 = "外貿協會駐舊金山辦事處於10月6日晚間假美國舊金山灣區福斯特市皇冠假日酒店，舉行中華民國110年國慶酒會，共有超過500位以上的貴賓。筑波醫電受邀將防疫雙星使用於晚宴廳出入口，並展示國產防疫系統研發成果。";
        
        $news__title__2 = "9/15 科技部政風主管蒞臨新竹生醫園區參訪 筑波醫電受邀展示防疫成果";
        $news__text__2 = "科技部政風主管今15日率同仁參訪新竹生醫園區，筑波醫電榮幸受邀展示兩項AI防疫產品「AI雙眼龍熱像儀、O-Ring淨手機」，並分享近期在國內的防疫成效。";

        $news__title__3 = "9/10 新竹馬偕醫院導入筑波醫電智慧眼科系統：看得健100";
        $news__text__3 = "看得健100可以與任何檢查儀器串接，自動接收數據並上傳平板，方便醫師在診間即時查看。搭配Uniiform手寫系統，書寫診斷後立即上傳，達到病歷數位化。";

        $news__title__4 = "9/5 台中榮民總醫院與筑波醫電 簽署太赫茲及AI應用合作備忘錄";
        $news__text__4 = "台中榮總與筑波醫電舉行合作備忘錄簽約典禮。未來雙方將共同進行太赫茲(Terahertz)及AI醫療技術應用開發，推動醫療檢測與人工智慧醫療，應用在疾病預防與提升醫療服務品質。";
        ?>
        <div class="news__center">
            <div class="news__container grid">

                <?php
                for($news__count=1; $news__count<5; $news__count++)
                {
                    $news__title__ = "news__title__".$news__count;
                    $news__text__ = "news__text__".$news__count;
                    ?>

                    <div class="news__sub__container grid">
                        <div class="news__content__outter">

                            <div class="news__top">
                                <div class="news__icon">
                                    <img src="<?php echo IMGURL ?>news.png" alt="">
                                </div>

                                <div class="news__title">
                                    <p class="news__title__text"><?php echo $$news__title__; ?></p>
                                </div>
                            </div>

                            <div class="news__mid">
                                <div class="news__img__<?php echo $news__count ?>"></div>
                            </div>

                            <div class="news__bottom">
                                <div class="news__textBox">
                                    <p class="news__textBox__text"><?php echo $$news__text__ ?></p>
                                </div>
                            </div>

                            <div class="news__end">
                                <input type="button" value="了解更多" class="moreInfo__btn">
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <br><br><br>


    <!--=============== 最新消息 ===============-->
    <section class="home section news__container">
        <div class="home__container news__container grid">
            <div class="home__title">最新消息</div>
        </div>
        
        <?php
        $info__title__1 = "10/08 員榮醫院來訪";
        $info__title__2 = "10/1 監察院陳菊院長來訪";
        $info__title__3 = "10/14-10/16台灣國際醫療暨健康照護展(展位號#T0830)";
        $info__title__4 = "9/23 台北榮總來訪";
        ?>

        <div class="news__center">
            <div class="news__container grid">

                <?php
                for($info__count=1; $info__count<5; $info__count++)
                {
                    $info__title__ = "info__title__".$info__count;
                    ?>

                    <div class="info__sub__container grid">
                        <div class="news__content__outter">

                            <div class="news__top">
                                <div class="news__icon">
                                    <img src="<?php echo IMGURL ?>news.png" alt="">
                                </div>

                                <div class="news__title">
                                    <p class="news__title__text"><?php echo $$info__title__; ?></p>
                                </div>
                            </div>

                            <div class="news__mid">
                                <div class="info__img__<?php echo $info__count ?>"></div>
                            </div>

                            <div class="news__end">
                                <input type="button" value="了解更多" class="moreInfo__btn">
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>


    <div class="home__banner__container">
        <div class="footer__banner">
        
            <div class="footer__banner__sub">
                <img src="<?php echo IMGURL ?>footer.jpg" alt="">
            </div>

        </div>
    </div>

</main>


<?php include('partials/footer.php'); ?>