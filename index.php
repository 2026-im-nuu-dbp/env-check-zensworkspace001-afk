
<?php
// 學生資料（方便修改）
$student_name = "王小明";
$course_name  = "多媒體程式設計";
$student_id   = "U1131055";

// 學習目標
$goals = [
    "了解多媒體的基本概念，包含文字、圖片、音訊、視訊與動畫的種類與應用",
    "學會使用 HTML5 的 audio 與 video 標籤，在網頁中嵌入多媒體內容",
    "掌握 CSS 動畫與 JavaScript 互動技術，製作具有視覺效果的動態網頁",
    "熟悉影像處理基礎概念，了解解析度、色彩模式與常見圖片格式的差異",
    "完成一個整合文字、圖片、音訊與影片的多媒體網頁作品集",
];

// 商品資料
$products = [
    ["id" => 1, "name" => "藍芽耳機",   "price" => 1200],
    ["id" => 2, "name" => "無線滑鼠",   "price" =>  599],
    ["id" => 3, "name" => "機械鍵盤",   "price" => 2800],
    ["id" => 4, "name" => "USB 集線器", "price" =>  450],
];
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($course_name) ?> - <?= htmlspecialchars($student_name) ?>的第一個網頁</title>
    <style>
        body { font-family: "Microsoft JhengHei", sans-serif; line-height: 1.6; margin: 0; padding: 0; background-color: #f0f2f5; }

        /* 頁首 */
        header { background: #333; color: white; padding: 1rem; text-align: center; }
        header p { margin: 0; font-size: 0.95rem; color: #ccc; }

        /* 導覽區 */
        nav { background: #444; color: white; padding: 0.5rem; text-align: center; }
        nav a { color: white; margin: 0 10px; text-decoration: none; }
        nav a:hover { text-decoration: underline; }

        /* 主體容器 */
        .container { display: flex; max-width: 1000px; margin: 20px auto; gap: 20px; padding: 0 10px; }
        main { flex: 3; }
        aside { flex: 1; background: #ddd; padding: 15px; border-radius: 8px; align-self: flex-start; }

        section { background: white; padding: 20px; margin-bottom: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        section h2 { color: #333; border-bottom: 2px solid #007bff; padding-bottom: 8px; }

        /* 表格 */
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }

        /* 插圖 */
        .img-box { text-align: center; margin: 15px 0; }
        .img-box img { max-width: 100%; border-radius: 8px; border: 2px solid #ccc; }
        .img-box p { font-size: 0.85rem; color: #888; margin-top: 5px; }

        /* 學習目標清單 */
        .goals { list-style: none; padding: 0; }
        .goals li { padding: 8px 12px; margin-bottom: 8px; background: #eef4ff; border-left: 4px solid #007bff; border-radius: 4px; }
        .goals li::before { content: "✅ "; }

        /* 頁尾 */
        footer { background: #333; color: white; text-align: center; padding: 10px; margin-top: 20px; }
    </style>
</head>
<body>

    <!-- 頁首 header -->
    <header>
        <h1><?= htmlspecialchars($course_name) ?></h1>
        <p><?= htmlspecialchars($student_name) ?> 的第一個網頁</p>
    </header>

    <!-- 導覽區 nav -->
    <nav>
        <a href="#">首頁</a>
        <a href="#">學習目標</a>
        <a href="#">商品列表</a>
        <a href="#">聯絡我</a>
    </nav>

    <!-- 主體容器 -->
    <div class="container">

        <!-- 主體 main -->
        <main>

            <!-- 第一區：學習目標 -->
            <section>
                <h2><?= htmlspecialchars($student_name) ?>的學習目標</h2>
                <p>以下是本學期<?= htmlspecialchars($course_name) ?>課程的學習目標，希望透過實作練習，逐步掌握網頁多媒體整合技術。</p>
                <ul class="goals">
                    <?php foreach ($goals as $goal): ?>
                        <li><?= htmlspecialchars($goal) ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <!-- 第二區：插圖 img -->
            <section>
                <h2>學習環境介紹</h2>
                <p>本課程使用 <strong>Laragon</strong> 作為本機開發環境，整合 Apache、MySQL 與 PHP，方便在自己的電腦上練習網頁開發。</p>
                <div class="img-box">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/320px-PHP-logo.svg.png" alt="PHP Logo">
                    <p>圖：PHP 程式語言標誌</p>
                </div>
                <p>開發工具：VS Code 編輯器 + Laragon 伺服器 + HeidiSQL 資料庫管理工具。</p>
            </section>

            <!-- 第三區：商品表格 -->
            <section>
                <h2>商品列表</h2>
                <p>以下是商品資料表的範例資料，共三欄（編號、品名、價格），<?= count($products) ?> 筆資料：</p>
                <table>
                    <thead>
                        <tr>
                            <th>編號</th>
                            <th>品名</th>
                            <th>價格（元）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= htmlspecialchars($product['id']) ?></td>
                                <td><?= htmlspecialchars($product['name']) ?></td>
                                <td><?= number_format($product['price']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>

        </main>

        <!-- 側欄 aside -->
        <aside>
            <h3>📌 課程資訊</h3>
            <p>課程名稱：<?= htmlspecialchars($course_name) ?></p>
            <p>學生姓名：<?= htmlspecialchars($student_name) ?></p>
            <p>學號：<?= htmlspecialchars($student_id) ?></p>
            <hr>
            <h3>🔗 快速連結</h3>
            <p><a href="#">作業繳交系統</a></p>
            <p><a href="#">課程講義下載</a></p>
            <p><a href="#">phpMyAdmin</a></p>
            <hr>
            <h3>📅 進度</h3>
            <p>第 1 週：HTML 基礎 ✅</p>
            <p>第 2 週：CSS 排版 ✅</p>
            <p>第 3 週：PHP 入門 🔄</p>
            <p>第 4 週：多媒體整合 ⏳</p>
        </aside>

    </div>

    <!-- 頁尾 footer -->
    <footer>
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($student_name) ?> ｜ <?= htmlspecialchars($course_name) ?>課程作業</p>
    </footer>

</body>
</html>