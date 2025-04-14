<!DOCTYPE html>
<html lang="en-CA">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>

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
                    <img src="images/easter23-about-banner.jpg" alt="Illustration of Mary reaching up into a beam of light">
                </div>
                <div class="about-text">
                    <h3 class="head-font">About Us</h3>
                    <p>Fraser Lands Gallery is an arts ministry which creates opportunities for our church community to interact with and explore God through art, and provides another means of outreach to our neighbours. The Gallery is always looking for artists to join their team and create artworks for exhibitions and art shows within the Church space. If you are interested, please <a href="mailto:gallery@fraserlands.ca" class="hyperlink force-dark" target="_blank">email us</a>, or stay updated through our email newsletter.</p>
                    <div class="intro is-flex flex-centers">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeEj6MpAql6arXp1fAgr4VFtLQSP8xGxLefFW3RhMsuuW86Sg/viewform" target="blank" class="button">
                            <p>Join Our Mailing List</p>
                        </a>
                    </div>
                </div>
            </section>

        </main>

        <!-- ==== FOOTER & Scripts ==== -->
        <?php include __DIR__ . '/footer.php'; ?>

    </body>
</html>