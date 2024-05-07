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
    <?php $prefix = './index.php'; ?>
    <?php include('header.php'); ?>

    <?php
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php');
            exit;
        }
    ?>

    <!-- contents -->
    <article class="container">
        <section class="confirmSection">
            <h1 class="confirmSectionTitle">お問い合わせ内容確認</h1>
            <table class="confirmSectionTable">
                <tr>
                    <th>お名前</th>
                    <td><?php echo htmlspecialchars($_POST['name']); ?></td>
                </tr>
                <tr>
                    <th>希望席</th>
                    <td><?php echo htmlspecialchars($_POST['seat']); ?></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><?php echo htmlspecialchars($_POST['email']); ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?php echo htmlspecialchars($_POST['tel']); ?></td>
                </tr>
                <tr>
                    <th class="confirmSectionBtnArea">
                        <button type="button" onclick="window.history.back();" class="confirmSectionBtn btnBack">戻る</button>
                        <!--
                        <form action="index.php" method="post">
                            <button type="submit" class="confirmSectionBtn btnBack">戻る</button>
                        </form>
                        -->
                    </th>
                    <td class="confirmSectionBtnArea">
                        <form action="thanks.php" method="post">
                            <input type="hidden" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <input type="hidden" name="seat" value="<?php echo htmlspecialchars($_POST['seat']); ?>">
                            <input type="hidden" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <input type="hidden" name="tel" value="<?php echo htmlspecialchars($_POST['tel']); ?>">
                            <button type="submit" class="confirmSectionBtn btnSend">送信</button>
                        </form>
                    </td>
                </tr>
            </table>
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
