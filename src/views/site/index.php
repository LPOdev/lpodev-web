<?php
/**
 * Project: lpodev-web
 * Title: index.php
 * Author: LPOdev
 * Version: 1.0 from the 13th 09 2022
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ExerciseLooper</title>
    <meta name="csrf-param" content="authenticity_token"/>
    <meta name="csrf-token"
          content="b1FCaUTd6u9RY3IpgP44v2QxYoAWBNdCyjq7aK/es1tWUTzNl6vndtBe+z50FOx2Hwq8r/URODBkKc2Lp1Xzjg=="/>
</head>

<body>
<header class="dashboard">
    <section class="container">
        <h1>Exercise<br>Looper</h1>
    </section>
</header>

<div class="container dashboard">
    <section class="row">
        <div class="column">
            <a class="button answering column" href="/exercises/answering">Take an exercise</a>
        </div>
        <div class="column">
            <a class="button managing column" href="/exercises/new">Create an exercise</a>
        </div>
        <div class="column">
            <a class="button results column" href="/exercises">Manage an exercise</a>
        </div>
    </section>
</div>

</body>
</html>