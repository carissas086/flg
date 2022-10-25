var $parent = $('#gallery'),
	$aside = $("#panel"),
	$asideTarget = $aside.find(".aside--details"),
	$asideImgTarget = $aside.find(".aside--image"),
	$asideClose = $aside.find(".close"),
	$tilesParent = $(".grid"),
	$tiles = $tilesParent.find(".tile"),
	cntlNext = document.querySelector(".cntl-next"),
	cntlPrev = document.querySelector(".cntl-prev"),
	slideClass = "show-detail";

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
	if (curr == '1') {
		cntlPrev.setAttribute('data-id','flg1');
		cntlNext.setAttribute('data-id','flg2');
		return;
	} else {
		cntlPrev.setAttribute('data-id','flg' + setPrev.toString());
	};

	// ==== SET MAX GALLERY ITEMS
	if(curr == '4') {
		cntlPrev.setAttribute('data-id','flg' + setPrev.toString());
		cntlNext.setAttribute('data-id',thisId);
		return;
	} else {
		cntlNext.setAttribute('data-id','flg' + setNext.toString());
	};
};

// kill aside
$asideClose.on("click", function (e) {
	e.preventDefault();
	$asideTarget.html("");
	$asideImgTarget.html("");
	killAside();
});

// load data to aside
function loadTileData(target) {
	var $this = $(target),

	itemHtml = $this.find(".aside-img").html();
	$asideImgTarget.html(itemHtml);
	itemHtml = $this.find(".details").html();
	$asideTarget.html(itemHtml);

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

// kill aside
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