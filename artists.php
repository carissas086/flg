<!DOCTYPE html>
<html lang="en-CA">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meet the Artists</title>

        <!-- ==== SOCIAL META ==== -->
            <!-- UPDATE FOR THIS PAGE -->
            <?php include __DIR__ . '/metatags.php'; ?>

        <!-- ==== STYLESHEETS ==== -->
            <link rel="stylesheet" href="https://use.typekit.net/kqc7bpl.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- ==== General Styles ==== -->
                <link rel="stylesheet" href="styles/reset.css">
                <link rel="stylesheet" href="styles/main.css">
                <link rel="stylesheet" href="styles/gallery.css">

            <!-- ==== Gallery Specific Styles ==== -->
                <?php include __DIR__ . '/galleries/galleryspecstyles.php'; ?>

        <!-- ==== FAVICON LINKS ==== -->
            <?php include __DIR__ . '/favicons.php'; ?>
    </head>
    <body>
        <header>
            <?php include __DIR__ . '/header.php'; ?>
        </header>
        <main>
            <section class="intro is-flex flex-centers christmas22-intro-img">
                <div class="gallery-header is-flex flex-centers christmass22-header">
                    <h1 class="christmas22-title">Meet the Artists!</h1>
                </div>
            </section>
            <section>
                
            </section>



            
            <a href="index.php#galleryhd" class="button">
                <p>View Latest Gallery</p>
            </a>
        </main>
        <footer>
            
        </footer>

        <!-- ==== SCRIPT CALLS ==== -->
            
            <script
                src="https://code.jquery.com/jquery-3.6.1.js"
                integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
                crossorigin="anonymous">
            </script>

        <!-- ==
            SLIDE GALLERY : https://codepen.io/joe-watkins/pen/RPZbrW/
            ISOTOPE FILTER
            LOGO COLOUR FUNCTION
        == -->
            <script src="scripts/functions.js"></script>
    </body>
</html>