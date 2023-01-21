// ==== SET GALLERY SPEC CSS FILE

    var logochristmas22 = "#182945",
        logoeaster23    = "#5c3e56";

    function setCSS(tag) {
        var galStyle        = document.querySelector("#gal-css"),
            pathfinder      = document.querySelectorAll("path"),
            setlogo         = eval('logo' + tag);

        // set master gal css
            galStyle.setAttribute('href','styles/gallery-styles/' + tag + '.css');

        // set site logo colour
            for (var i=0; i < pathfinder.length; i++) {
            pathfinder[i].setAttribute('fill',setlogo);
        };
        
        console.log('settest ' + tag);
    }

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