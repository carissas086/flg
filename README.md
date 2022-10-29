**CURRENT GALLERY TAG: christmas22**

__1 page__
__0 galleries__
__0 artworks__


# Fraser Lands Gallery, v0.9

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
  
- Create the following in '/galleries':
  - _TAG_ (this houses all the files for that gallery EXCEPT the gallery stylesheet)
  - _TAG_ artwork (this houses all the artwork partials)
  - _TAG_ grid.php (this will call all the artwork partials)
  - _TAG_ head.php (this will replace the landing header)
- Set the following:
  - Landing section partial on '**index.php:78**'
  - New grid partial on '**index.php:89**'
- Add a new stylesheet for the gallery in '/styles/gallery-styles' with the name '**_TAG_.css**'
  - Add stylesheet in '/galleries/**galleryspecstyles.php**'
- Set new OG Metatags in '**metatags.php**'
  - Change the description on **line 5**
  - Change the image on **line 6** and it's dimensions on **lines 7 & 8**

#### ADDING TO THE GRID
- Duplicate the artwork partial template at '**/desk/tag##.php**' and move to the gallery's artwork folder
- Rename: _TAG_##.php
- Add tags on **line2**
  - g-_TAG_ (for the gallery filter)
  - m-_MEDIUM_ (for the artwork medium filter, see below for full list)
- Add partial ID to comments on **lines 1 & 7**
- Add partial ID on **line4**
- Adjust the maximum grid size in '**functions.js:5**'
- Add gallery classes as needed (common list below)
- Edit content (see section below for more information)
- Delete **unnecessary code pieces**
- Go to '_TAG_ grid.php'
- Add partial at the following directory: '**/_TAG_artwork/_TAG_##**'

##### Note regarding Partial ID

Please note that it is IMPERATIVE that the numbers **DO NOT SKIP**, and DO NOT RESET between galleries at present. Failure to do so will affect the gallery control functions. See the last id assignment on '**functions.js:5**'

##### Editing Gallery Partials

The partial template is set up to be editable as such:
- Thumbnail Image (& alt tag) : **line 5**
- Full Image (& alt tag) : **line 11**
  - Remove class 'video' when video/audio element not used on **line 4**
- Video : **line 13**
- Title : **line20**
- Artwork Author : **line21**
- Artwork Medium : span on **line21**
- Paragraph Blurbs : within empty p tag as on **line22**
- Verse References
  - within p tag as on **line 24**
  - with verse number in the sup tag on **line 24**
  - with the reference in a p tag as on **line 25**
- Hyperlinks : within a span tag as demontrated on **line33**

All text that **is not** in English, please tag using the appropriate language attribute. If within paragraph text, use span as on **line 34**. Shortlist of language codes are:
- Catalan : ca
- Chinese Simplified : zh-Hans
- Chinese Traditional : zh-Hant
- French : fr
- Hebrew : he
- Korean : ko
- Latin : la
- Malay : ms
- Spanish : es
- Tagalog : tl

Gallery Classes of Note:
- _TAG_ header (line 20)
- _TAG_ byline (line 21)

Reminder: after partial editing is complete, **delete unnecessary sections**.

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

- **URGENT** Video on mobile
- **URGENT** Hosting on actual domain
- Social Meta Tags
- 3D artwork showcase capability (likely through Spline)
- Gallery archive (to be possibly set out in global navigation)

---
Problems/questions/comments: reach out to carissaso@gmail.com.
