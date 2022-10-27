<div>
    <div class="gal-choose is-flex flex-centers">
        <p onclick="galDrop();" class="gal-select" id="gal-select">Galleries</p>
        <ul class="is-flex gal-filter fil-gal" id="gal-list" data-filter-group="gallery">

        <!-- ==== ADD NEW GLALERIES ==== -->
            <li data-filter=".g-christmas22">Christmas 2022</li>
            <li data-filter=".g-easter23">Easter 2023</li>

        </ul>
    </div>
    <div class="mediums-list">
        <p onclick="medDrop();" class="gal-select" id="med-select">Mediums</p>
        <ul class="is-flex gal-filter fil-medium" id="med-list" data-filter-group="medium">

        <!-- ==== EDIT MEDIUMS LIST ==== -->
                <li class="is-selected" data-filter="*">All</li>
                <li data-filter=".m-art">Art</li>
                <li data-filter=".m-photograph">Photograph</li>
                <li data-filter=".m-music">Music</li>
                
        </ul>
    </div>
</div>