<?php
    $navList = [
        'スケジュール' => './index.html#schedule',
        'アクセス' => './index.html#access',
        '席予約' => './index.html#reservation'
    ];
?>

<header>
    <div class="headerInner">
        <div class="siteLogo">
            <a href="/"><img src="img/logo.png" alt="Dummy"></a>
        </div>
        <nav class="siteNav">
            <ul class="navList">
                <?php foreach ($navList as $key => $value) : ?>
                    <li class="navListItem"><a href="<?php echo $value; ?>" class="navListLink"><?php echo $key; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <!-- humburger menu -->
            <button class="humburgerMenuButton" id="humburgerMenuButton">
                <span class="bar barTop"></span>
                <span class="bar barMiddle"></span>
                <span class="bar barBottom"></span>
            </button>
        </nav>
    </div>
</header>
