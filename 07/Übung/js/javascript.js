function Menue () {
  if (typeof window.pageYOffset == "number") {
    if (NS4) {
      getElement("id", "Nav").top = window.pageYOffset + 50;
    } else {
      getElement("id", "Nav").style.top = window.pageYOffset + 50;
    }
  } else {
    if (typeof document.body.scrollTop == "number")
      getElement("id", "Nav").style.top = document.body.scrollTop + 50;
  }
  if (OP)
    getElement("id", "NavLinks").style.pixelTop = NavLinksPos;
  if (NS4) {
    getElement("id", "Nav").visibility = "show";
  } else {
    getElement("id", "Nav").style.visibility = "visible";
  }
}

function noMenue () {
  if (NS4) {
    getElement("id", "Nav").visibility = "hide";
  } else {
    getElement("id", "Nav").style.visibility = "hidden";
  }
}

function handleMove (ev) {
  if (!ev)
    ev = window.event;
  var mausposition = ev.pageX ? ev.pageX : ev.clientX;
  if (mausposition < 20) {
      Menue();
  } else {
    if (mausposition > 250) {
      noMenue();
    }
  }
}

function Event_init () {
  if (document.addEventListener) {
    document.addEventListener("mousemove", handleMove, true);
  } else {
    if (NS4) {
      document.captureEvents(Event.MOUSEMOVE);
      document.onmousemove = handleMove;
    } else {
      document.body.onmousemove = handleMove;
    }
  }
  if (OP) {
    NavLinksPos = 42; // Position des Bereiches NavLinks
    getElement("id", "NavLinks").style.pixelTop = NavLinksPos;
  }
}