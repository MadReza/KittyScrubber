/*function leftArrowPressed() {
    document.location = window.location.href;
    page = ((page + pageCount + 1) % pageCount) + 1;
}

function rightArrowPressed() {
    document.location = window.location.href;
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
*/
(function() {
    "use strict";

    var page = 1;
    var pageCount = 3;

    display("Starting page: " + page);
    document.getElementById("btnPrev").onclick = function() {
      page = ((page + pageCount + 1) % pageCount) + 1;
      display("previous, page now " + page);
    };
    document.getElementById("btnNext").onclick = function() {
      page = (page % pageCount) + 1;
      display("next, page now " + page);
    };

    function display(msg) {
      var p = document.createElement('p');
      p.innerHTML = String(msg);
      document.body.appendChild(p);
    }
  })();