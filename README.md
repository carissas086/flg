**CURRENT GALLERY TAG: christmas22**

# Fraser Lands Gallery, v1

__Please note:__
- Most adjustments should only need to be made in .php partials, and in functions.js. See below for more details
- Additionally, this site employs the following:
    - jQuery 3.6.1
    - Adapted version of ['Accessible Off-Canvas Grid Gallery'](https://codepen.io/joe-watkins/pen/RPZbrW/) by [Joe Watkins](https://codepen.io/joe-watkins)
    - [Isotope](https://isotope.metafizzy.co/) by [Metafizzy](https://metafizzy.co/) with [imagesLoaded](https://imagesloaded.desandro.com/)

---

## ADJUSTING THE GALLERY

Please look to the following for gallery specific adjustments:

### GENERAL

  - To add new grid filtering options, both additional galleries and mediums:
    - edit in 'filters.php'
  - To change the colour of the FLC logo:
    - edit on 'functions.js:3'
    - **ONLY** file name is required.
    - **must be a .PNG file**
  - To change the colour of the gallery logo:
    - edit on 'functions.js:4'
  - To change the header image:
    - set .header-image url in 'main.css:135'

### GALLERY EDITS

#### **To setup new gallery** ####
  
- create the following in '/galleries':
  - _TAG_ (this houses all the files for that gallery EXCEPT the gallery stylesheet)
  - _TAG_ artwork (this houses all the artwork partials)
  - _TAG_ grid.php (this will call all the artwork partials)
  - _TAG_ head.php (this will replace the landing header)
- set the following:
  - Landing section partial on '**index.php:78**'
  - New grid partial on '**index.php:89**'
- add a new stylesheet for the gallery in '/styles/gallery-styles' with the name '**_TAG_.css**'
  - add stylesheet in '/galleries/**galleryspecstyles.php**'

#### ADDING TO THE GRID
- Duplicate the artwork partial template at '**/desk/tag##.php**' and move to the gallery's artwork folder
- Rename: _TAG_##.php
- Add tags on **line1**
  - g-_TAG_ (for the gallery filter)
  - m-_MEDIUM_ (for the artwork medium filter, see below for full list)
- Advance the partial ID on **line5**
  - please note that it is IMPERATIVE that the numbers DO NOT SKIP, and DO NOT RESET between galleries at present. Failure to do so will affect the gallery control functions. See the last id assignment on 'functions.js:5'
- Adjust the maximum grid size in '**functions.js:5**'
- Edit content (see section below for more information)
- Go to '_TAG_ grid.php'
- Add partial at the following directory: '**/_TAG_artwork/_TAG_##**'

##### Editing Gallery Partials

The partial template is set up to be editable as such:
- Thumbnail Image: line



WE ARE EDITING THE TEMPLATE AND SETTING UP THE README



After partial editing is complete, **delete unnecessary sections**.

---

## TAG & FILTER LISTS

##### Gallery Tags List

The current lists of gallery tags are as follows:
- **christmas22** (A Christmas Art Exhibit, Christmas 2022)

Gallery tag filters are generated as such: **g-_TAG_**

##### Artwork Mediums FIlter List

The current artwork mediums filters are as follows:
- m-art
- m-photography
- m-music

---

##### Next to be implemented:

- Social Meta Tags
- 3D artwork showcase capability (likely through Spline)
- Gallery archive (to be possibly set out in global navigation)

---
Problems/questions/comments: reach out to carissaso@gmail.com.