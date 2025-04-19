<div>
    <div class="gal-choose is-flex flex-centers">
        <p onclick="galDrop();" class="gal-select" id="gal-select">2024 Galleries</p>
        <ul class="is-flex gal-filter fil-gal" id="gal-list" data-filter-group="gallery">

        <!-- ==== ADD NEW GALLERIES ==== -->
            <li
                data-filter=".g-easter24"
                onclick="setCSS('easter24');"
                id="filter-easter24">
                Easter 2024
            </li>
            <li
                data-filter=".g-christmas24"
                onclick="setCSS('christmas24');"
                id="filter-christmas24">
                Keep Watch 2024
            </li>

        </ul>
    </div>
    <div class="mediums-list">
        <p onclick="medDrop();" class="gal-select" id="med-select">Mediums</p>
        <ul class="is-flex gal-filter fil-medium" id="med-list" data-filter-group="medium">

        <!-- ==== EDIT MEDIUMS LIST ==== -->
                <li class="is-selected" data-filter="*">All</li>
                <!-- <li data-filter=".m-arcrylic">Acrylic</li> -->
                <li data-filter=".m-comic">Comic Illustration</li>
                <!-- <li data-filter=".m-composite">Composite Photograph</li> -->
                <!-- <li data-filter=".m-drawing">Drawing</li> -->
                <!-- <li data-filter=".m-digitalart">Digital Art</li> -->
                <!-- <li data-filter=".m-marker">Marker</li> -->
                <li data-filter=".m-mixedmedia">Mixed Media</li>
                <li data-filter=".m-painting">Painting</li>
                <!-- <li data-filter=".m-pastel">Pastel</li> -->
                <!-- <li data-filter=".m-pen">Pen</li> -->
                <li data-filter=".m-photograph">Photograph</li>
                <!-- <li data-filter=".m-poetry">Poetry</li> -->
                <!-- <li data-filter=".m-quilt">Quilt</li> -->
                <!-- <li data-filter=".m-sculpture">Sculpture</li> -->
                <!-- <li data-filter=".m-shadowbox">Shadow Box</li> -->
                <!-- <li data-filter=".m-watercolour">Watercolour</li> -->
                <!-- <li data-filter=".m-writing">Writing</li> -->
                <!-- <li data-filter=".m-3d">3D Illustration</li> -->
                
        </ul>
    </div>
</div>