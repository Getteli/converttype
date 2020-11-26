$(document).ready(function(){
	var navlang = navigator.language || navigator.userLanguage || navigator.browserLanguage;
	var lang = (navlang.split('-')[0]).toLowerCase();
	switch (lang) {
		case "pt":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		case "fr":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		case "es":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		case "ja":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		case "ru":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		case "zh":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		case "it":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		case "de":
				window.location.replace("http://localhost/convertmidia/"+lang);
			break;
		default:
			// en
			window.location.replace("http://localhost/convertmidia/en");
			break;
	}
});
