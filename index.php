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