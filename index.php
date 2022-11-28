<!--    19 pieces 
        ADD ARTIST BIOS PAGE (18)
        [for YC Chan, in 2, comics + nativity] -->

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
            <!-- ==== LANDING SECTION  |  /galleries/TAGhead.php==== -->
                <?php include __DIR__ . '/galleries/christmas22/christmas22head.php'; ?>

            <!-- ==== CURRENT GALLERY ==== -->
                    
                <section id="galleryhd" class="is-flex">
                    <!-- ==== FILTERS ==== -->
                        <?php include __DIR__ . '/filters.php'; ?>
                    <div class="gallery-wrap">
                        <div role="main" id="gallery">

                        <!-- ==== ISOTOPE/GALLERY GRID  |  /galleries/TAG/TAG##grid.php -->
                            <?php include __DIR__ . '/galleries/christmas22/christmas22grid.php'; ?>
                        </div>

                        <!-- ==== ASIDE PANEL ==== -->
                            <aside role="complementary" id="panel" class="christmas22-panel" aria-hidden="true" aria-expanded="false">

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
                    
                    <p class="insta-call">Share your thoughts on your favourite artworks with us! Use the hashtag <a class="hyperlink" href="https://www.instagram.com/explore/tags/fraserlandsgallery/" target="_blank">#FraserLandsGallery</a> on Instagram.</p>
                    
                </section>

        <!-- ==== ABOUT ==== -->
            <section id="ack" class="is-flex flex-centers">
                <!-- <h3>Land Acknowledgement</h3> -->
                    <div class="italics land-ack">
                        <p>Fraser Lands Gallery would like to acknowledge that we are seated on the unceded traditional territories of the Musqueam, Squamish and Tsleil-Waututh Nations and their People.</p>
                        <p>The term unceded means that the land we reside on was never legally given up by its original inhabitants, the First Nations peoples, through treaty or other agreement.</p>
                        <p>We, Fraser Lands Gallery, recognize this truth alongside the Indigenous peoples who have occupied and stewarded this land since time immemorial.</p>
                    </div>
            </section>
            <section id="about" class="is-flex flex-centers">
                <div class="about-img">
                    <img src="images/aurie-image.jpg" alt="">
                </div>
                <div class="about-text">
                    <h3 class="head-font">About Us</h3>
                    <p>Fraser Lands Gallery is an arts ministry which creates opportunities for our church community to interact with and explore God through art, and provides another means of outreach to our neighbours. The Gallery is always looking for artists to join their team and create artworks for exhibitions and art shows within the Church space, if you are interested, please email <a href="mailto:gallery@fraserlands.ca" class="hyperlink force-dark" target="_blank">us</a> for more details.</p>
                </div>
            </section>
        </main>
        <?php include __DIR__ . '/footer.php'; ?>

        <!-- ==== ADDITIONAL SCRIPTS ==== -->

            <!-- == IMAGES LOADED == -->
                <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

            <!-- == ISOTOPE == -->
                <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
                <script>
                    var grid = document.querySelector('.grid');
                    var iso;

                    // flatten object by concatting values
                    function concatValues( obj ) {
                        var value = '';
                        for ( var prop in obj ) {
                            value += obj[ prop ];
                        }
                        return value;
                    }
                
                    imagesLoaded( grid, function() {
                    // init Isotope after all images have loaded
                        iso = new Isotope( grid, {
                            itemSelector: '.grid-item',
                            filter: '*',
                            percentPosition: true,
                            layoutMode: 'masonry',
                        });
                    });

                
                    // ==== FILTER DROPDOWNS
                        function galDrop() {
                            document.getElementById("gal-list").classList.toggle("show-options");
                            document.getElementById("gal-select").classList.toggle("close-selector");
                        }

                        function medDrop() {
                            document.getElementById("med-list").classList.toggle("show-options");
                            document.getElementById("med-select").classList.toggle("sel-selector");
                        }

                        // Close the dropdown menu if the user clicks outside of it
                            window.onclick = function(event) {
                                if (!event.target.matches('.gal-select')) {
                                    var dropdowns = document.getElementsByClassName("fil-gal");
                                    var selector = document.getElementsByClassName("gal-select");
                                    var i;
                                    for (i = 0; i < dropdowns.length; i++) {
                                    var openDropdown = dropdowns[i];
                                    if (openDropdown.classList.contains('show-options')) {
                                        openDropdown.classList.remove('show-options');
                                    }
                                    }
                                    for (i = 0; i < selector.length; i++) {
                                    var closeSelector = selector[i];
                                    if (closeSelector.classList.contains('close-selector')) {
                                        closeSelector.classList.remove('close-selector');
                                    }
                                    }
                                }
                            }
                </script>
    </body>
</html>