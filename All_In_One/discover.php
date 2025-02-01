<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Teams</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2,
        h3 {
            margin-bottom: 20px;
        }

        .matchup {
            padding: 10px;
            margin-bottom: 10px;
            background-color: #e9ecef;
            border-radius: 5px;
        }

        .bye-team {
            font-weight: bold;
            color: #dc3545;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center">إجراء قرعة الفرق</h2>
        <!-- نموذج إدخال أسماء الفرق -->
        <form method="post">
            <div class="mb-3">
                <label for="teams" class="form-label">أدخل أسماء الفرق (كل اسم في سطر جديد):</label>
                <textarea name="teams" id="teams" class="form-control" rows="5" placeholder="ادخل اسماء الفرق هنا..." required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">إجراء القرعة</button>
        </form>

        <hr>

        <?php
        // التأكد من أن النموذج قد تم إرساله
        if (isset($_POST['submit'])) {
            // التحقق من أن حقل الفرق موجود وتم إدخال البيانات
            if (!isset($_POST['teams']) || empty(trim($_POST['teams']))) {
                echo '<div class="alert alert-danger">الرجاء إدخال اسمين أو أكثر!</div>';
                exit;
            }

            // الحصول على أسماء الفرق من النموذج
            $teams = array_filter(explode("\n", trim($_POST['teams']))); // تقسيم الفرق على أساس السطر الجديد والتأكد من عدم وجود أسطر فارغة
            $num_teams = count($teams);

            // التحقق من أن هناك فرق كافية
            if ($num_teams < 2) {
                echo '<div class="alert alert-danger">الرجاء إدخال اسمين أو أكثر!</div>';
                exit;
            }

            // خلط الفرق بشكل عشوائي
            shuffle($teams);

            // إذا كان عدد الفرق فردي وأكبر من 3
            if ($num_teams % 2 !== 0 && $num_teams > 3) {
                $bye_team = array_pop($teams); // تأهل الفريق الأخير في القائمة
                echo "<h3 class='bye-team text-center'>الفريق المتأهل تلقائيًا: <strong>$bye_team</strong></h3>";
                echo "<h3 class='text-center'>الفريق المتأهل سيواجه الفائز من المواجهة الأولى</h3>";
            }

            // عرض المواجهات
            echo "<h2>القرعة:</h2>";
            for ($i = 0; $i < count($teams); $i += 2) {
                if (isset($teams[$i + 1])) {
                    echo "<div class='matchup'><strong>" . $teams[$i] . "</strong> VS <strong>" . $teams[$i + 1] . "</strong></div>";
                } else {
                    echo "<div class='matchup'>" . $teams[$i] . " <span class='bye-team'>متأهل تلقائيًا للجولة التالية</span></div>";
                }
            }

            // في حالة عدد الفرق فردي وأكبر من 3، الفريق المتأهل سيواجه الفائز من المواجهة الأولى
            if (isset($bye_team) && $num_teams > 3) {
                echo "<h3 class='text-center mt-4'>الفريق <strong>$bye_team</strong> سيواجه الفائز من المباراة الأولى</h3>";
            }

            // في حالة عدد الفرق فردي وأقل من 4، يحتاج الفريق المتأهل تلقائيًا إلى مواجهة لاحقًا
            if (isset($bye_team) && $num_teams <= 3) {
                echo "<h3 class='text-center mt-4'>الفريق <strong>$bye_team</strong> سيواجه الفائز في الجولة التالية</h3>";
            }
        }
        ?>
    </div>

    <!-- Bootstrap JS (optional, if you need Bootstrap features that rely on JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>