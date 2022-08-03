function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

window.onload = function () {
  var el = document.getElementsByClassName("btn");
  console.log(el);
  var objects = {};
  for (var i = 0; i < el.length; i++) {
    //if("data-bs-target" in el[i].attributes){
    //	object[el[i].attributes['data-bs-target'].nodeValue.
    //}

    Object.values(el[i].attributes).map((key) => {
      if (key.nodeName === "data-bs-target") {
        var data = {};
        if (!objects[key.nodeValue.replace("#", "")]) {
          data.title = el[i].attributes["data-bs-title"]
            ? el[i].attributes["data-bs-title"].nodeValue
            : "No title";
          data.message = el[i].attributes["data-bs-message"]
            ? el[i].attributes["data-bs-message"].nodeValue
            : "No message";

          objects[key.nodeValue.replace("#", "")] = { data };
        }
      }
    });

    var attributes = el[i].attributes;

    for (var k = 0; k < attributes.length; k++) {
      if (attributes[k].nodeName === "data-bs-target") {
        //objects[attributes[k].nodeValue.replace('#', '')] = i
      }
    }
  }
  console.log(objects);
  var modals = document.getElementsByClassName("modal fade");
  var footer = document.getElementsByTagName("footer");

  Object.keys(objects).map((key) => {
    if (footer.length >= 0) {
      if (document.getElementById(key) === null) {
        footer[0].insertAdjacentElement("beforeend", create(key).firstChild);
      }
    } else if (modals.length > 0) {
      if (document.getElementById(key) === null) {
        insertAfter(modals[modals.length - 1], create(key));
      }
    }
  });
};

var ajax = {};
ajax.x = function () {
  if (typeof XMLHttpRequest !== "undefined") {
    return new XMLHttpRequest();
  }
  var versions = [
    "MSXML2.XmlHttp.6.0",
    "MSXML2.XmlHttp.5.0",
    "MSXML2.XmlHttp.4.0",
    "MSXML2.XmlHttp.3.0",
    "MSXML2.XmlHttp.2.0",
    "Microsoft.XmlHttp",
  ];

  var xhr;
  for (var i = 0; i < versions.length; i++) {
    try {
      xhr = new ActiveXObject(versions[i]);
      break;
    } catch (e) {}
  }
  return xhr;
};

ajax.send = function (url, callback, method, data, async) {
  if (async === undefined) {
    async = true;
  }
  var x = ajax.x();
  x.open(method, url, async);
  x.onreadystatechange = function () {
    if (x.readyState == 4) {
      callback(x.responseText);
    }
  };
  if (method == "POST") {
    x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  }
  x.send(data);
};

ajax.get = function (url, data, callback, async) {
  var query = [];
  for (var key in data) {
    query.push(encodeURIComponent(key) + "=" + encodeURIComponent(data[key]));
  }
  ajax.send(
    url + (query.length ? "?" + query.join("&") : ""),
    callback,
    "GET",
    null,
    async
  );
};

ajax.post = function (url, data, callback, async) {
  var query = [];
  for (var key in data) {
    query.push(encodeURIComponent(key) + "=" + encodeURIComponent(data[key]));
  }
  ajax.send(url, callback, "POST", query.join("&"), async);
};

// ------

function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function create(id) {
  var frag = document.createDocumentFragment(),
    temp = document.createElement("div");
  temp.innerHTML =
    '<div class="modal fade" id="' +
    id +
    '" tabindex="-1" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">Modal title</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> Форма </div> </div> </div>';
  while (temp.firstChild) {
    frag.appendChild(temp.firstChild);
  }
  return frag;
}

window.onload = function () {
  var el = document.getElementsByClassName("btn");
  console.log(el);
  var objects = {};

  ajax.post(
    "/wp-admin/admin-ajax.php",
    {
      action: "my_action_popup_cf7",
      id: 887,
    },
    (data) => {
      console.log(data);
    }
  );
  for (var i = 0; i < el.length; i++) {
    //if("data-bs-target" in el[i].attributes){
    //	object[el[i].attributes['data-bs-target'].nodeValue.
    //}

    Object.values(el[i].attributes).map((key) => {
      if (key.nodeName === "data-bs-target") {
        var data = {};
        if (!objects[key.nodeValue.replace("#", "")]) {
          data.title = el[i].attributes["data-bs-title"]
            ? el[i].attributes["data-bs-title"].nodeValue
            : "No title";
          data.message = el[i].attributes["data-bs-message"]
            ? el[i].attributes["data-bs-message"].nodeValue
            : "No message";

          objects[key.nodeValue.replace("#", "")] = { data };
        }
      }
    });

    var attributes = el[i].attributes;

    for (var k = 0; k < attributes.length; k++) {
      if (attributes[k].nodeName === "data-bs-target") {
        //objects[attributes[k].nodeValue.replace('#', '')] = i
      }
    }
  }
  console.log(objects);
  var modals = document.getElementsByClassName("modal fade");
  var footer = document.getElementsByTagName("footer");

  Object.keys(objects).map((key) => {
    if (footer.length >= 0) {
      if (document.getElementById(key) === null) {
        footer[0].insertAdjacentElement("beforeend", create(key).firstChild);
      }
    } else if (modals.length > 0) {
      if (document.getElementById(key) === null) {
        insertAfter(modals[modals.length - 1], create(key));
      }
    }
  });
};
