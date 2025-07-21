// get HTML page content

try {
    var html_head = document.head.innerHTML.toString();
} catch (e) {
    var html_head = "Error: document has no head";
}
try {
    var html_body = document.body.innerHTML.toString();
} catch (e) {
    var html_body = "Error: document has no body";
}
