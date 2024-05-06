<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header -->
    <?php include('header.php'); ?>

    <!-- contents -->
    <article class="container">

        <!-- first view -->
        <section class="firstView">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide slide1" id="slide1"></div>
                    <div class="swiper-slide slide2" id="slide2"></div>
                    <div class="swiper-slide slide3" id="slide3"></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev">
                    <img src="./img/slide-btn-prev.svg" alt="前へ">
                </div>
                <div class="swiper-button-next">
                    <img src="./img/slide-btn-next.svg" alt="次へ">
                </div>
            </div>
        </section>

        <!-- catch copy -->
        <section id="catchCopy" class="catchCopySection">
            <h1 class="catchCopySectionTitle">今年も始まる<span class="catchCopyRed">夏祭り</span></h1>
        </section>

        <!-- schedule -->
        <section id="schedule" class="scheduleSection">
            <h1 class="scheduleSectionTitle">スケジュール</h1>
            <div class="scheduleCategory">
                <div id="scheduleBox1" class="scheduleBox active">
                    <h2 class="scheduleTitle">9月1日</h2>
                </div>
                <div id="scheduleBox2" class="scheduleBox">
                    <h2 class="scheduleTitle">9月2日</h2>
                </div>
                <div id="scheduleBox3" class="scheduleBox">
                    <h2 class="scheduleTitle">9月3日</h2>
                </div>
            </div>
            <div class="scheduleDescription">
                <p id="scheduleDescriptionText1" class="scheduleDescriptionText active">9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容 9月1日の内容</p>
                <p id="scheduleDescriptionText2" class="scheduleDescriptionText">9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容 9月2日の内容</p>
                <p id="scheduleDescriptionText3" class="scheduleDescriptionText">9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容 9月3日の内容</p>
            </div>
        </section>

    </article>

    <!-- footer -->
    <?php include('footer.php'); ?>

    <!-- script -->
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>