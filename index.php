<!DOCTYPE html>
<html lang="en-CA">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fraser Lands Gallery</title>

        <!-- ==== SOCIAL META ==== -->
            <?php // include __DIR__ . '/metatags.php'; ?>

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
            
            <!-- ==== HEADER IMG  |  set in main.css ==== -->
                <div class="header-image"></div>

            <div class="logo is-flex flex-centers">
                <a href="index.html">
                    <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1998.03 765.17">
                        <g id="Layer_1-2"><g><g>
                            <path d="M584.4,263.88v21.99h-63.4v48.46h49.43v21.99h-49.43v71.87h-24.5v-164.31h87.9Z"/>
                            <path d="M684.77,428.19l-34.39-65.72h-18.7v65.72h-24.5v-164.31h51.58c11.46,0,21.17,2.21,29.12,6.62,7.95,4.41,13.9,10.32,17.84,17.73,3.94,7.41,5.91,15.68,5.91,24.82,0,10.72-2.83,20.45-8.49,29.2-5.66,8.75-14.37,14.7-26.11,17.85l36.97,68.09h-29.23Zm-53.09-87.23h27.08c9.17,0,16.08-2.52,20.74-7.57,4.66-5.04,6.98-11.82,6.98-20.33s-2.29-15.17-6.88-19.98c-4.59-4.81-11.53-7.21-20.85-7.21h-27.08v55.08Z"/>
                            <path d="M833.06,394.62h-62.54l-10.75,33.57h-25.57l53.51-164.54h28.37l53.51,164.54h-25.79l-10.75-33.57Zm-6.88-21.99l-24.29-76.36-24.5,76.36h48.79Z"/>
                            <path d="M914.94,424.05c-8.03-3.86-14.33-9.34-18.91-16.43-4.59-7.09-6.88-15.37-6.88-24.82h26.22c.57,7.09,3.12,12.93,7.63,17.49,4.51,4.57,10.85,6.86,19.02,6.86s15.04-2.25,19.77-6.74c4.73-4.49,7.09-10.28,7.09-17.38,0-5.51-1.47-10.01-4.4-13.47-2.94-3.46-6.59-6.15-10.96-8.04-4.37-1.89-10.42-3.94-18.16-6.15-9.75-2.84-17.66-5.71-23.75-8.63-6.09-2.92-11.28-7.45-15.58-13.59-4.3-6.15-6.45-14.34-6.45-24.59,0-9.46,2.15-17.73,6.45-24.82,4.3-7.09,10.32-12.53,18.05-16.31,7.74-3.78,16.69-5.67,26.86-5.67,14.47,0,26.33,3.98,35.57,11.94,9.24,7.96,14.37,18.88,15.37,32.74h-27.08c-.43-5.99-3.01-11.11-7.74-15.37s-10.96-6.38-18.7-6.38c-7.02,0-12.76,1.97-17.2,5.91-4.44,3.94-6.66,9.62-6.66,17.02,0,5.05,1.4,9.18,4.19,12.41,2.79,3.23,6.34,5.79,10.64,7.68,4.3,1.89,10.17,3.94,17.62,6.15,9.88,3,17.94,5.99,24.18,8.98,6.23,3,11.53,7.61,15.9,13.83,4.37,6.23,6.56,14.54,6.56,24.94,0,8.36-2.04,16.24-6.12,23.64-4.08,7.41-10.03,13.36-17.84,17.85-7.81,4.49-17.01,6.74-27.62,6.74-10.03,0-19.06-1.93-27.08-5.79Z"/>
                            <path d="M1047.12,285.63v48.23h51.58v21.99h-51.58v50.36h58.03v21.99h-82.53v-164.54h82.53v21.99h-58.03Z"/>
                            <path d="M1212.82,428.19l-34.39-65.72h-18.7v65.72h-24.5v-164.31h51.58c11.46,0,21.17,2.21,29.12,6.62,7.95,4.41,13.9,10.32,17.84,17.73,3.94,7.41,5.91,15.68,5.91,24.82,0,10.72-2.83,20.45-8.49,29.2-5.66,8.75-14.37,14.7-26.11,17.85l36.97,68.09h-29.23Zm-53.08-87.23h27.08c9.17,0,16.08-2.52,20.74-7.57,4.66-5.04,6.98-11.82,6.98-20.33s-2.29-15.17-6.88-19.98c-4.59-4.81-11.53-7.21-20.85-7.21h-27.08v55.08Z"/>
                            <path d="M1351.44,406.44h50.51v21.75h-75.01v-164.31h24.5v142.55Z"/>
                            <path d="M1512.41,394.62h-62.54l-10.75,33.57h-25.57l53.51-164.54h28.37l53.51,164.54h-25.79l-10.74-33.57Zm-6.88-21.99l-24.29-76.36-24.5,76.36h48.79Z"/>
                            <path d="M1694.87,428.19h-24.5l-73.72-122.7v122.7h-24.5v-164.54h24.5l73.72,122.46v-122.46h24.5v164.54Z"/>
                            <path d="M1817.7,273.93c11.96,6.7,21.2,16.31,27.72,28.84,6.52,12.53,9.78,27.15,9.78,43.85s-3.26,31.21-9.78,43.5c-6.52,12.29-15.76,21.71-27.72,28.25-11.97,6.54-25.9,9.81-41.8,9.81h-48.79v-164.31h48.79c15.9,0,29.84,3.35,41.8,10.05Zm-1.61,116.67c9.31-10.4,13.97-25.06,13.97-43.97s-4.66-33.96-13.97-44.68c-9.32-10.72-22.71-16.07-40.19-16.07h-24.29v120.33h24.29c17.48,0,30.87-5.2,40.19-15.6Z"/>
                            <path d="M1901.62,424.05c-8.03-3.86-14.33-9.34-18.91-16.43-4.59-7.09-6.88-15.37-6.88-24.82h26.22c.57,7.09,3.12,12.93,7.63,17.49,4.52,4.57,10.86,6.86,19.02,6.86s15.04-2.25,19.77-6.74c4.73-4.49,7.09-10.28,7.09-17.38,0-5.51-1.47-10.01-4.4-13.47-2.94-3.46-6.59-6.15-10.96-8.04-4.37-1.89-10.42-3.94-18.16-6.15-9.74-2.84-17.66-5.71-23.75-8.63-6.09-2.92-11.28-7.45-15.58-13.59-4.3-6.15-6.45-14.34-6.45-24.59,0-9.46,2.15-17.73,6.45-24.82,4.3-7.09,10.31-12.53,18.05-16.31,7.74-3.78,16.69-5.67,26.86-5.67,14.47,0,26.33,3.98,35.57,11.94,9.24,7.96,14.36,18.88,15.37,32.74h-27.08c-.43-5.99-3.01-11.11-7.74-15.37-4.73-4.26-10.96-6.38-18.7-6.38-7.02,0-12.75,1.97-17.19,5.91-4.44,3.94-6.66,9.62-6.66,17.02,0,5.05,1.4,9.18,4.19,12.41,2.79,3.23,6.34,5.79,10.64,7.68,4.3,1.89,10.17,3.94,17.62,6.15,9.89,3,17.94,5.99,24.18,8.98,6.24,3,11.53,7.61,15.9,13.83,4.37,6.23,6.56,14.54,6.56,24.94,0,8.36-2.04,16.24-6.12,23.64-4.08,7.41-10.03,13.36-17.84,17.85-7.81,4.49-17.01,6.74-27.62,6.74-10.03,0-19.06-1.93-27.08-5.79Z"/>
                            <path d="M818.36,524.86c-2.51-5.94-6.67-10.68-12.47-14.22-5.81-3.54-12.68-5.3-20.62-5.3-6.94,0-13.21,1.47-18.8,4.4-5.6,2.93-10.03,7.11-13.29,12.52-3.26,5.42-4.89,11.73-4.89,18.96s1.63,13.54,4.89,18.96c3.26,5.41,7.69,9.57,13.29,12.47,5.6,2.9,11.87,4.34,18.8,4.34s12.74-1.35,18.18-4.06c5.43-2.71,9.78-6.56,13.04-11.57,3.26-5,5.05-10.85,5.39-17.55h-39.24v-4.29h45.01v3.38c-.25,7.37-2.22,13.99-5.89,19.86-3.68,5.87-8.69,10.46-15.04,13.77-6.35,3.31-13.5,4.96-21.44,4.96s-15.42-1.71-21.94-5.13c-6.52-3.42-11.62-8.2-15.3-14.33-3.68-6.13-5.52-13.07-5.52-20.82s1.84-14.8,5.52-20.93c3.68-6.13,8.77-10.91,15.3-14.33,6.52-3.42,13.83-5.13,21.94-5.13,9.44,0,17.62,2.13,24.51,6.38s11.93,10.14,15.11,17.66h-6.52Z"/>
                            <path d="M981.72,560.4h-41.75l-8.4,20.31h-6.14l32.35-77.4h6.27l32.22,77.4h-6.14l-8.4-20.31Zm-1.75-4.29l-19.06-46.15-19.18,46.15h38.24Z"/>
                            <path d="M1103.2,576.42h32.72v4.29h-38.36v-79.21h5.64v74.92Z"/>
                            <path d="M1241.48,576.42h32.72v4.29h-38.36v-79.21h5.64v74.92Z"/>
                            <path d="M1379.76,505.79v33.06h35.1v4.29h-35.1v33.29h38.87v4.29h-44.51v-79.21h44.51v4.29h-38.87Z"/>
                            <path d="M1570.33,580.71l-22.57-33.74h-19.31v33.74h-5.64v-79.21h24.19c9.78,0,17.11,2.07,22,6.21,4.89,4.14,7.33,9.63,7.33,16.47,0,6.09-1.9,11.11-5.7,15.06-3.8,3.95-9.34,6.38-16.61,7.28l23.07,34.19h-6.77Zm-41.87-38.03h18.8c7.77,0,13.58-1.69,17.43-5.08,3.84-3.39,5.77-7.86,5.77-13.43,0-12.11-7.82-18.16-23.45-18.16h-18.55v36.67Z"/>
                            <path d="M1734.56,501.5l-27.71,47.16v32.04h-5.64v-32.04l-27.96-47.16h6.4l24.32,42.43,24.2-42.43h6.39Z"/></g>
                            <path d="M1996.46,742.38c-54.39-16.4-109.8-29.82-165.82-40.14-140.23-25.84-283.12-35.02-425.55-37.49-213.45-4.01-427.34,4.53-640.37,15.94-95.61,5.78-199.11,10.91-294.43,14.97-69.31,3.19-270.98-2.37-279.07-10.46s267.53-75.9,299.36-86.3c140.24-45.85,18.38-63.71-13.48-72.82-56.64-16.18-70.12-53.94-78.21-75.51-10.59-28.23-12.93-107.08-16.89-213.44-.44-11.79-1.05-24.51-1.77-37.71-.41-7.4,5.26-13.77,12.66-14.12,14.99-.7,29.94-2.27,44.77-4.72l74.63-8.01c7.07-.27,12.74-5.96,12.98-13.03l.28-8.32c.25-7.45-5.59-13.69-13.04-13.94-43.82-6.33-85.34-10.1-125.27-12.06-6.76-.33-12.19-5.66-12.68-12.41-3.97-54.41-7.91-101.02-8.05-109.01-.14-7.99-17.5-1.09-28.49,.49-8.34,1.2-10.58-4.51-14.99,.26-2.48,2.68,3.21,49.16,8.61,104.22,.77,7.88-5.44,14.72-13.36,14.7-40-.1-78.68,1.3-116.79,3.32-2.22-.07-4.31,.38-6.16,1.25-7,3.27-9.34,12.13-5.39,18.77l10.46,17.57c.4,.68,.8,1.37,1.08,2.11,2.41,6.47,19.67,18.48,25.92,18.24l97.99,.6c7.11,.04,12.95,5.64,13.3,12.74,.69,13.68,1.08,26.72,1.02,38.56-.35,80.39-4.56,195.48-5.58,211.23-5.39,83.61,105.18,99.79,99.79,115.97-4.59,13.78-175.55,47.91-244.37,62.14-42.37,9.37-85.2,17.22-125.67,34.91-21.69,9.41-81.71,40.57-58.79,59.38,59.33,37.76,296.83,49.87,388.36,43.15,113.26-8.31,221.07-12.16,334.24-21.07,279.5-21.64,567-47.36,847.25-39.28,63.28,1.83,126.71,4.93,189.75,11.04,76.77,7.41,154.56,19.56,230.57,32.54,1.12,.25,2.28-.37,2.63-1.51,.35-1.16-.31-2.39-1.47-2.74Z"/>
                        </g></g>
                    </svg>
                </a>  
            </div>
            
            <!-- ==== GLOABL NAVIGATION ==== -->
                <div class="is-flex flex-centers" id="top-gn">
                    <div id="flc-logo-box">
                        <a href="https://fraserlands.ca/" target="_blank" alt="See Latest Gallery">
                            <img src="" id="flclogo">
                        </a>
                    </div>
                    <div>
                        <ul class="gn is-flex">
                            <li><a href="#galleryhd" alt="See Latest Gallery">Gallery</a></li>
                            <li><a href="#about" alt="About the Fraser Lands Gallery">About</a></li>
                        </ul>
                    </div>
                </div>
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
                                        <div class="aside--image" tabindex="0" aria-live="polite" aria-atomic="true" aria-label="Read More"></div>
                                    </div>

                                <!-- ==== DESCRIPTION BOTTOM ==== -->
                                    <div class="aside--details" tabindex="0" aria-live="polite" aria-atomic="true" aria-label="Read More"></div>

                                <!-- ==== CLOSE & TOP FUNCTION BUTTONS ==== -->
                                    <p class="close"><span>&#10540;</span></p>
                                    <a href="#" id="toplink" class="is-flex">back to top</a>
                            </aside>
                    </div>
                </section>

        <!-- ==== ABOUT ==== -->
            <section id="about" class="is-flex flex-centers">
                <div class="about-img">
                    <img src="images/aurie-image.jpg" alt="">
                </div>
                <div class="about-text">
                    <h2 class="head-font">About Us</h2>
                    <p>About us filler text! Donec pellentesque sapien diam, non lobortis tortor tristique luctus. Aliquam et dictum felis. Suspendisse iaculis tempus arcu quis volutpat. Duis accumsan pharetra nulla eu ullamcorper. Donec et tincidunt diam. Suspendisse venenatis purus eu ultricies gravida. Duis at nunc mi. Vivamus vitae libero feugiat, pretium nisl non, semper urna. Suspendisse cursus felis eu vulputate malesuada. Nunc tincidunt velit ut hendrerit tempor.</p>
                </div>
            </section>
        </main>
        <footer class="footer is-flex flex-centers">
            <p>&copy; 2022 Fraser Lands Gallery</p>
                <div>
                    <ul class="social is-flex">
                        <li><a href="" class="fa fa-facebook" target="_blank"></a></li>
                        <li><a href="" class="fa fa-instagram" target="_blank"></a></li>
                    </ul>
                </div>
        </footer>

        <!-- ==== SCRIPT CALLS ==== -->
            
            <!-- == JQUERY == -->
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