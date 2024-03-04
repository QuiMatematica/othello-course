function setCookie(name, value, expire) {
  document.cookie = name + "=" + escape(value) +
    ((expire == null) ? "" : ("; expires=" + expire.toGMTString()));
}

function getCookie(name) {
  if (document.cookie.length > 0) {
    var search = name + "=";
    offset = document.cookie.indexOf(search);
    if (offset != -1) {
      offset += search.length;
      end = document.cookie.indexOf(";", offset);
      if (end == -1) end = document.cookie.length;
      return unescape(document.cookie.substring(offset, end));
    }
  }
  return null;
}

function onIndexLoad(page) {
  var today = new Date();
  var expires = new Date();
  expires.setTime(today.getTime() + 1000*60*60*24*365);
  setCookie("OthelloIndex", page, expires);
}

function gotoIndex() {
  index = getCookie("OthelloIndex");
  window.location = (index != null) ? index : "index0.html";
}