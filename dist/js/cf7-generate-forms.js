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
