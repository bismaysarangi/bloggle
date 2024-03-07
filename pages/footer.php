<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <?php 
        include_once './utils/utils.php';
        import_css('./footer.css');
    ?>
</head>
<body>
    <div class="footer-content">
        <div class="footer-logo">
            <h1>BLOGGLE</h1>
            <span>Discover, Share, Blog with Bloggle!</span>
        </div>
        <div class="footer-pages-links">
            <h3>QUICK LINKS</h3>
            <div class="home-page"><a href="#">Home</a></div>
            <div class="login-page"><a href="#">Sign up/Log in</a></div>
            <div class="post-page"><a href="#">Post</a></div>
            <div class="search-page"><a href="#">Search</a></div>
            <div class="credits-page"><a href="#">Credits</a></div>
        </div>
    </div>
    <div class="footer-ending-line">
        Designed and Developed with 💙 by Team Bloggle
    </div>
</body>
</html>