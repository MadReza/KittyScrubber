page_id = 1; //Use PHP GET to grab the current page fromt he URL and put it into a variable for page_id to use

function leftArrowPressed() {
    document.location = 'jratx.ga/scrubby/page' + page_id - 1;
}

function rightArrowPressed() {
    document.location = 'jratx.ga/scrubby/page' + page_id + 1;
}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    switch (evt.keyCode) {
        case 37:
            leftArrowPressed();
            break;
        case 39:
            rightArrowPressed();
            break;
    }
};