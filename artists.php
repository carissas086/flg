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

        <!-- ==== SCRIPTS FOR CALLS ==== -->
            <script type="text/javascript" src="scripts/openscripts.js"></script>
            
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
                <!-- ==== EVERY ARTISTS NEEDS A UNIQUE ID ==== -->

                <div class="is-flex" id="art01">
                    <img src="images/aurie-image.jpg" style="width: 100px">
                    <div>
                        <h4>Name Surname</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis est vestibulum malesuada dapibus. Fusce imperdiet quam sed diam blandit, id varius libero luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas gravida urna nunc, ac molestie justo molestie id. Nunc feugiat pulvinar tortor, viverra placerat nisi gravida eget. Mauris massa arcu, convallis sollicitudin suscipit id, accumsan in nulla.</p>
                    </div>
                </div>

                <div class="artists-list">
                    <ul class="is-flex artist-filter fil-art" id="art-list" data-filter-group="artist">

                    <!-- ==== EDIT ARTISTS LIST ==== -->
                            <!-- <li class="is-selected" data-filter="*">All</li> -->
                            <img
                            data-filter=".a-001"
                            onclick="setArt('a001');"
                            src="images/Allison-chen_2211.jpg"
                            style="width: 100px">
                            
                    </ul>
                </div>

                <section id="landing">
                    <?php include __DIR__ . '/artists/allisonchen.php'; ?>

                    VVV

                    <div class="intro gallery-header is-flex flex-centers visually-hidden" id="a100">
                        <h4 class="head-font">Allison Chen</h4>
                    </div>

                </section>

                <!-- FULL GRID -->


            </section>



            
            <!-- <a href="index.php#galleryhd" class="button">
                <p>View Latest Gallery</p>
            </a> -->

        </main>

        <!-- ==== FOOTER & SCRIPTS ==== -->
        <?php include __DIR__ . '/footer.php'; ?>
        <?php include __DIR__ . '/indexScripts.php'; ?>

    </body>
</html>