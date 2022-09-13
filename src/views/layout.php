<?php
/**
 * Project: lpodev-web
 * Title: layout.php
 * Author: LPOdev
 * Version: 1.0 from the 13th 09 2022
 */
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LPOdev Portofolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/stylesheet.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<nav
        class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0">
        <a href="/home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">LPOdev</a>
    </div>
    <div>
        <a href="/home" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Home</a>
        <a href="/one" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">About</a>
        <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Blog</a>
        <a href="/three" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Contact</a>
    </div>
</nav>

<?= $content ?>
</body>

</html>
