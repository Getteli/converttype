$(document).ready(function(){
	var navlang = navigator.language || navigator.userLanguage || navigator.browserLanguage;
	var lang = (navlang.split('-')[0]).toLowerCase();
	var here = window.location.pathname;
	// need 1 in server. local is 2
	here = (here.split('/')[2]).toLowerCase();
	switch (lang) {
		case "pt":
				if(here == "pt"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		case "fr":
				if(here == "fr"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		case "es":
				if(here == "es"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		case "ja":
				if(here == "ja"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		case "ru":
				if(here == "ru"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		case "zh":
				if(here == "zh"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		case "it":
				if(here == "it"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		case "de":
				if(here == "de"){
					break;
				}else{
					window.location.replace("http://localhost/convertmidia/"+lang);
				}
			break;
		default:
			// en
			if(here == "en"){
				break;
			}else{
				window.location.replace("http://localhost/convertmidia/en");
			}
	}
});
