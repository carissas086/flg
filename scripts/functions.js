// ==== THINGS TO EDIT ====

	var logoFile	= "FLC-logo-cut",
		logocolour	= "#603B40",
		galleryMax	= "48",				// slow set for fall23
		currGal		= "fall23",
		latestGal	= "fall23";

// =====================
// ======== FIN ========
// =====================

$(document).ready(function() {

	var $parent		= $('#gallery'),
	$aside			= $("#panel"),
	$asideTarget	= $aside.find(".aside--details"),
	$asideImgTarget	= $aside.find(".aside--image"),
	$asideClose		= $aside.find(".close"),
	$tilesParent	= $(".grid"),
	$tiles			= $tilesParent.find(".tile"),
	cntlNext		= document.querySelector(".cntl-next"),
	cntlPrev		= document.querySelector(".cntl-prev"),
	slideClass		= "show-detail",
	galList			= $('#gal-list').attr('data-filter-group');

	// ==== GALLERY FUNCTIONS
	// tile click

		$tiles.on("click", function (e) {
			setControlIds(this);

			e.preventDefault();
			e.stopPropagation();
			if (!$("html").hasClass(slideClass)) {
				$tiles.removeClass("active");
				$(this).addClass("active");
				$(this).attr("aria-expanded", "true");
				loadTileData($(this));
				$aside.addClass("visible");
			} else {
				killAside();
				$(this).attr("aria-expanded", "false");
			}

			// ==== puts aside to the top
			
				scrollaside();
	});

	// gallery control funtion

		$(".gallery-control").on("click", function () {
			const thisId = this.getAttribute('data-id');
			setControlIds(this);

			$asideTarget.html("");
			loadTileData($("#" + thisId));
		});

	// set control function targets

		function setControlIds(target) {

			let curr;
			let thisId = target.getAttribute('data-id');

			if (thisId == null) {
				curr = target.getAttribute('id');
			} else {
				curr = thisId;
			}

			var setId = curr.replace("flg","");

			// ==== sets current id +1
				var setNext = Number(setId) + 1;
			// ==== sets current id -1
				var setPrev = Number(setId) - 1;
				
			// ==== STOP AT MIN GALLERY ITEMS
			
				if (setId == '1') {
					cntlPrev.setAttribute('data-id','flg1');
					cntlNext.setAttribute('data-id','flg2');
					return;
				} else {
					cntlPrev.setAttribute('data-id','flg' + setPrev.toString());
				};

			// ==== SET MAX GALLERY ITEMS

				if(setId == galleryMax) {
					cntlPrev.setAttribute('data-id','flg' + setPrev.toString());
					cntlNext.setAttribute('data-id','flg' + galleryMax);
				} else {
					cntlNext.setAttribute('data-id','flg' + setNext.toString());
				};

			// PIGGYBACK for setting CSS

				var trackId = Number(setId);

				if (trackId >= 1 && trackId <= 23) {
					exSetGal('christmas22');
				} else if (trackId >= 24 && trackId <= 34) {
					exSetGal('easter23');
				} else if (trackId >= 35 && trackId <= 47) {
					exSetGal('aug23');
				} else if (trackId >= 48 && trackId <= 49) {
					exSetGal('fall23');
				} else {
					return;
				}

				function exSetGal(galTag) {
					setCSS(galTag);
					filters[galList] = '.g-' + galTag;
					var filterValue = concatValues(filters);
					$tilesParent.isotope({
						filter: filterValue,
					});
					$("#gal-list").find('.is-selected').removeClass('is-selected');
					$("#gal-list").find('#filter-' + galTag).addClass('is-selected');
				}

		};

	// load data to aside

		function loadTileData(target) {
			var $this = $(target);

			itemHtml = $this.find(".aside-img").html();
			$asideImgTarget.html(itemHtml);
			itemHtml = $this.find(".details").html();
			$asideTarget.html(itemHtml);

			if ($this.hasClass("video")) {
				$('.gallery-control-box').addClass("topper");
			} else {
				$('.gallery-control-box').removeClass("topper");
			}

			showAside();
		}

	// show/hide aside

		function showAside() {
			if (!$("html").hasClass(slideClass)) {
				$("html").toggleClass(slideClass);
				$aside.attr("aria-hidden", "false");
				focusCloseButton();
			}
		}

	// kill aside

		$asideClose.on("click", function (e) {
			e.preventDefault();
			$asideTarget.html("");
			$asideImgTarget.html("");
			killAside();
		});

	// handle esc key

		window.addEventListener(
			"keyup",
			function (e) {
				// grab key pressed
				var code = e.keyCode ? e.keyCode : e.which;

				// escape
				if (code === 27) {
					killAside();
				}
			},
			false
		);

	// handle body click to close off-canvas

	$parent.on("click", function (e) {
			if ($("html").hasClass(slideClass)) {
				e.preventDefault();
				e.stopPropagation();
				killAside();
			}
		});

	// kill function

		function killAside() {

			if ($("html").hasClass(slideClass)) {
				$("html").removeClass(slideClass);
				$aside.removeClass("visible");
				sendFocusBack();
				$aside.attr("aria-hidden", "true");
				$tiles.attr("aria-expanded", "false");
			}
		}

	// send focus to close button

		function focusCloseButton() {
			$asideClose.focus();
		}

	// send focus back to item that triggered event

		function sendFocusBack() {
			$(".active").focus();
		}

	// back to top link

		$("#toplink").on("click", function (e) {
			e.preventDefault();
			e.stopPropagation();
			scrollaside();
		});

		function scrollaside () {
			document.querySelector('#panel').scrollTo(0,0);
		}

	// ==== ISOTOPE FILTERING FUNCTION

		var filters ={};

		$('.gal-filter').on('click', 'li', function() {
			var $this = $(this);
			var $buttonGroup = $this.parents('.gal-filter');
			var filterGroup = $buttonGroup.attr('data-filter-group');

			filters[filterGroup] = $this.attr('data-filter');

			var filterValue = concatValues(filters);

			$tilesParent.isotope({
				filter: filterValue,
			});

			function concatValues(obj) {
				var value = '';
				for (var prop in obj) {
					value += obj[prop];
				}
				return value;
			}
		});

		// == selected styling
			$('.gal-filter').each( function( i, buttonGroup ) {
				var $buttonGroup = $( buttonGroup );
				$buttonGroup.on( 'click', 'li', function() {
				$buttonGroup.find('.is-selected').removeClass('is-selected');
				$( this ).addClass('is-selected');
				});
			});		

	// ==== AUTO FUNCTIONS
	
		// set gallery logo colour
			$("path").attr('fill', logocolour);
		
		// set flc logo file
			const logoFull = 'images/' + logoFile + '.png';
			$("#flclogo").attr('src', logoFull);

		// set landing & gallery select
			document.querySelector("#" + currGal).classList.remove("visually-hidden");
			$(".latest").attr('onclick',"setCSS('" + latestGal + "');");

			$('.latest').on('click', 'p', function() {
				var resetOn		= "filter-" + latestGal;

				$tilesParent.isotope({
					filter: '.g-' + latestGal,
				});

				// gallery selected indicator
					$("#gal-list").find('.is-selected').removeClass('is-selected');
					$("#gal-list").find('#' + resetOn).addClass('is-selected');
			});
			
		// auto select current gallery
			window.addEventListener("load", () => {

				filters[galList] = '.g-' + currGal;
				var filterValue = concatValues(filters);
				$tilesParent.isotope({
					filter: filterValue,
				});

			});
});
