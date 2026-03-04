
<?php
// 學生資料（方便修改）
$student_name = "江丞恩";
$course_name  = "多媒體程式設計預期";
$student_id   = "U1131055";

// 學習目標
$goals = [
    "了解多媒體的基本概念，包含文字、圖片、音訊、視訊與動畫的種類與應用",
    "學會使用 HTML5 的 audio 與 video 標籤，在網頁中嵌入多媒體內容",
    "掌握 CSS 動畫與 JavaScript 互動技術，製作具有視覺效果的動態網頁",
    "熟悉影像處理基礎概念，了解解析度、色彩模式與常見圖片格式的差異",
    "完成一個整合文字、圖片、音訊與影片的多媒體網頁作品集",
];


?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($course_name) ?> - <?= htmlspecialchars($student_name) ?> </title>
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
        <p><?= htmlspecialchars($student_name) ?> </p>
    </header>

    

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


    <!-- 頁尾 footer -->
    <footer>
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($student_name) ?> ｜ <?= htmlspecialchars($course_name) ?>課程作業</p>
    </footer>

</body>
</html>