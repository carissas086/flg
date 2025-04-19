<!DOCTYPE html>
<html lang="en-CA">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fraser Lands Gallery</title>

        <!-- ==== SOCIAL META ==== -->
            <?php include __DIR__ . '/metatags.php'; ?>

        <!-- ==== STYLESHEETS ==== -->
            <link rel="stylesheet" href="https://use.typekit.net/kqc7bpl.css">
            <link rel="stylesheet" href="https://use.typekit.net/aqc7yqk.css">
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

            <!-- ==== LANDING SECTION  |  /galleries/TAG/TAGhead.php==== -->
            <section id="landing">
                <?php include __DIR__ . '/galleries/easter25/easter25head.php'; ?>
            </section>
                

                <section id="galleryhd" class="is-flex">

                    <!-- ==== FILTERS ==== -->
                        <?php include __DIR__ . '/filters.php'; ?>

                    <!-- ==== CURRENT GALLERY ==== -->
                        <div class="gallery-wrap">
                            <div role="main" id="gallery">

                            <!-- ==== ISOTOPE/GALLERY GRID  |  /galleries/TAG/TAG##grid.php -->
                                <section class="grid">
                                    <?php include __DIR__ . '/galleries/easter25/easter25grid.php'; ?>
                                </section>
                            </div>

                            <!-- ==== ASIDE PANEL ==== -->
                                <aside role="complementary" id="panel" class="pullout-panel" aria-hidden="true" aria-expanded="false">

                                    <!-- ==== IMAGE TOP ==== -->
                                        <div id="panel-top" class="is-flex flex-centers">
                                            <div class="gallery-control-box is-flex">
                                                <div class="cntl-prev gallery-control is-flex flex-centers">
                                                    <p>&lt;</p>
                                                </div>
                                                <div class="cntl-next gallery-control is-flex flex-centers">
                                                    <p>&gt;</p>
                                                </div>
                                            </div>
                                            <div class="aside--image" tabindex="0" aria-live="polite" aria-atomic="true" aria-label="Artwork"></div>
                                        </div>

                                    <!-- ==== DESCRIPTION BOTTOM ==== -->
                                        <div class="aside--details" tabindex="0" aria-live="polite" aria-atomic="true" aria-label="Read More"></div>

                                    <!-- ==== CLOSE & TOP FUNCTION BUTTONS ==== -->
                                        <p class="close"><span>&#10540;</span></p>
                                        <a href="#" id="toplink" class="is-flex">back to top</a>
                                </aside>
                        </div>

                    <p class="insta-call">Stay updated on the latest with the gallery by <a class="hyperlink" href="about.php" target="_blank">joining</a> our mailing list!</p>
                    
                </section>

        </main>

        <!-- ==== FOOTER & Scripts ==== -->
        <?php include __DIR__ . '/footer.php'; ?>
        <?php include __DIR__ . '/indexScripts.php'; ?>

    </body>
</html>