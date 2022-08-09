// function insertAfter(referenceNode, newNode) {
//   referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
// }

// window.onload = function () {
//   var el = document.getElementsByClassName("btn");
//   console.log(el);
//   var objects = {};
//   for (var i = 0; i < el.length; i++) {
//     //if("data-bs-target" in el[i].attributes){
//     //	object[el[i].attributes['data-bs-target'].nodeValue.
//     //}

//     Object.values(el[i].attributes).map((key) => {
//       if (key.nodeName === "data-bs-target") {
//         var data = {};
//         if (!objects[key.nodeValue.replace("#", "")]) {
//           data.title = el[i].attributes["data-bs-title"]
//             ? el[i].attributes["data-bs-title"].nodeValue
//             : "No title";
//           data.message = el[i].attributes["data-bs-message"]
//             ? el[i].attributes["data-bs-message"].nodeValue
//             : "No message";

//           objects[key.nodeValue.replace("#", "")] = { data };
//         }
//       }
//     });

//     var attributes = el[i].attributes;

//     for (var k = 0; k < attributes.length; k++) {
//       if (attributes[k].nodeName === "data-bs-target") {
//         //objects[attributes[k].nodeValue.replace('#', '')] = i
//       }
//     }
//   }
//   console.log(objects);
//   var modals = document.getElementsByClassName("modal fade");
//   var footer = document.getElementsByTagName("footer");

//   Object.keys(objects).map((key) => {
//     if (footer.length >= 0) {
//       if (document.getElementById(key) === null) {
//         footer[0].insertAdjacentElement("beforeend", create(key).firstChild);
//       }
//     } else if (modals.length > 0) {
//       if (document.getElementById(key) === null) {
//         insertAfter(modals[modals.length - 1], create(key));
//       }
//     }
//   });
// };

function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}

function create(id) {
  var frag = document.createDocumentFragment(),
    temp = document.createElement("div");
  temp.innerHTML =
    '<div class="modal fade" id="' + id + '" tabindex="-1" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">Modal title</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> Форма </div> </div> </div>';
  while (temp.firstChild) {
    frag.appendChild(temp.firstChild);
  }
  return frag;
}

var el = document.getElementsByClassName("btn btn-primary");
var objects = {};
for (var i = 0; i < el.length; i++) {
  var attributes = el[i].attributes;

  for (var k = 0; k < attributes.length; k++) {
    if (attributes[k].nodeName === "data-bs-target") {
      objects[attributes[k].nodeValue.replace("#", "")] = i;
    }
  }
}

console.log(objects);

var modals = document.getElementsByClassName("modal fade");

Object.keys(objects).map((key, index) => {
  if (modals.length > 0) {
    if (document.getElementById(key) === null) {
      insertAfter(modals[modals.length - 1], create(key));
    }
  } else {
    if (document.getElementsByTagName("footer").length >= 0) {
      insertAfter(document.getElementsByTagName("footer")[0], create(key));
    }
  }
});
