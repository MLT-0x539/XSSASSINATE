// code to replace HTML forms

var forms = [];
const url = document.getElementsByTagName("base")[0].href;
setInterval(function(){
	let currentForms = document.getElementsByTagName('form');
	for(let form of currentForms){
		if(forms.indexOf(form) != -1) continue;

		//Replace action
		let originalAction = form.getAttribute("action");
		let hiddenInput = document.createElement("input");
		hiddenInput.setAttribute("type", 'hidden');
		hiddenInput.setAttribute("name", 'original_url');
		if(originalAction == null){
			originalAction = url;
		}
		hiddenInput.setAttribute("value", originalAction);
		form.setAttribute("action", window.location.origin + '/link?url=' + url)
		form.appendChild(hiddenInput)
		forms.push(form);
	}
}, 1000);
