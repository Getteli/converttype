// impede o click com botão direito no site
// document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
$(document).ready(function(){
	// navbar e menu mobile
	const ElemensDropdown = document.querySelectorAll(".dropdown-trigger");
	const InstanceDropdown = M.Dropdown.init(ElemensDropdown,{
		coverTrigger: false,
	});
	const ElemensDropdownMenuMobile = document.querySelectorAll(".sidenav");
	const InstanceDropdownMenuMobile = M.Sidenav.init(ElemensDropdownMenuMobile,{
		edge: "right",
		draggable: true,
	});

	// carrega o elemento do select por conta do materialize
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('select');
		var instances = M.FormSelect.init(elems, options);
	});

	// escolher as configuracoes/opcoes
	$("#t_input").on( "click", function() {
		$("#t_input").addClass( "selectedlink" );
		$("#t_url").removeClass( "selectedlink" );

		$("#div_input_file").removeClass( "none" );
		$("#div_input_file").removeClass( "disabled" );
		$("#lb_input_file").removeClass( "none" );
		$("#lb_input_file").removeClass( "disabled" );
		$("#input_file").removeClass( "none" );
		$("#input_file").removeClass( "disabled" );
		$("#div_file").removeClass( "none" );
		$('#input_file').attr('required', 'true');
		// por enquanto libera o video e deixa o pdf bloq ao clicar no upload
		$("#selecttype_video").removeClass( "none" );
		$("#selecttype_doc").addClass( "none" );
		$("#input_file").attr("accept", ".avi,.mp4,.wmv,.mov,.webm,.ogv,.mkv,.flv,.3g2,.3gp,video/*");
		
		switch ($("#type").val()) {
			case '1':
				$("#optgv").addClass( "none" );
				$("#optga").removeClass( "none" );
				break;
			case '2':
				$("#optgv").removeClass( "none" );
				$("#optga").addClass( "none" );
				break;
		}

		$("#input_url").addClass( "none" );
		$("#input_url").addClass( "disabled" );
		$("#div_descconvertinput").addClass( "none" );
		$("#div_url").addClass( "none" );
		$('#input_url').removeAttr('required');
	});

	$("#t_url").on( "click", function() {
		$("#t_url").addClass( "selectedlink" );
		$("#t_input").removeClass( "selectedlink" );

		$("#input_url").removeClass( "none" );
		$("#input_url").removeClass( "disabled" );
		$("#div_descconvertinput").removeClass( "none" );
		$("#div_url").removeClass( "none" );
		$('#input_url').attr('required', 'true');
		// por enquanto libera o video e deixa o pdf bloq ao clicar no upload
		$("#selecttype_video").addClass( "none" );
		$("#selecttype_doc").addClass( "none" );

		$("#div_input_file").addClass( "none" );
		$("#div_input_file").addClass( "disabled" );
		$("#lb_input_file").addClass( "none" );
		$("#lb_input_file").addClass( "disabled" );
		$("#input_file").addClass( "none" );
		$("#div_file").addClass( "none" );
		$("#input_file").addClass( "disabled" );
		$('#input_file').removeAttr('required');
	});

	$('.sel').click(function(){
		$("#convert_to").html($(this).html());
		$("#convert_to2").html($(this).html());
		switch ( $(this).data("target") ) {
			case 1: // audio
				$("#t_url").trigger("click");
				$("#t_input").removeClass( "disabledtext" );
				$("#t_url").removeClass( "disabledtext" );
				$("#type").val(1);
				break;
			case 2: // video
				$("#t_input").trigger("click");
				$("#t_url").addClass( "disabledtext" );
				$("#t_input").removeClass( "disabledtext" );
				$("#selecttype_video").removeClass( "none" );
				$("#selecttype_doc").addClass( "none" );
				$("#type").val(2);
				$("#input_file").attr("accept", ".avi,.mp4,.wmv,.mov,.webm,.ogv,.mkv,.flv,.3g2,.3gp,video/*");
				$("#optgv").removeClass( "none" );
				$("#optga").addClass( "none" );
				break;
			case 3: // img
				$("#t_input").trigger("click");
				$("#t_url").addClass( "disabledtext" );
				$("#t_input").removeClass( "disabledtext" );
				$("#selecttype_video").addClass( "none" );
				$("#selecttype_doc").removeClass( "none" );
				$("#optgi").removeClass( "none" );
				$("#optgd").addClass( "none" );
				$("#type").val(3);
				$("#input_file").attr("accept", ".png,.jpg,.svg");
				break;
			case 5: // doc
			$("#t_input").trigger("click");
			$("#t_url").addClass( "disabledtext" );
			$("#t_input").removeClass( "disabledtext" );
			$("#selecttype_video").addClass( "none" );
			$("#selecttype_doc").removeClass( "none" );
			$("#optgi").addClass( "none" );
			$("#optgd").removeClass( "none" );
			$("#type").val(5);
			$("#input_file").attr("accept", ".doc,.docx,.pdf,.xls,.xlsx,.html");
			break;
		}
	});

	// ao clicar em converter, pega todas as configuracoes e executa o que tiver e como tiver que executar
	$("#btn_convert").on( "click", function() {
		effect_in();
		setTimeout(function() {
			var type = $("#type").val();
			switch (type) {
				case '1': // audio
					// verifica o tipo de input para impedir o processo, se tiver vazio
					if ($( "#t_url" ).hasClass( "selectedlink" ))
					{
						if( !$("#input_url").val() ) {
							effect_out();
							$("#input_url").focus();
							return;
						}
						// se tudo certo, executa o metodo
						// converter_modo_2(); // nao funcionando
						converter_modo_1();
					}
					else if ($( "#t_input" ).hasClass( "selectedlink" ))
					{
						if( !$("#input_file").val() ) {
							effect_out();
							$("#input_file").focus();
							return;
						}
						// se tudo certo, executa o metodo
						converter_modo_4();
					}
				break;
				case '2': // video
				// verifica o tipo de input para impedir o processo, se tiver vazio
				if ($( "#t_url" ).hasClass( "selectedlink" ))
				{
					if( !$("#input_url").val() ) {
					effect_out();
					$("#input_url").focus();
					return;
					}
				}
				else if ($( "#t_input" ).hasClass( "selectedlink" ))
				{
					if( !$("#input_file").val() ) {
					effect_out();
					$("#input_file").focus();
					return;
					}
				}
				// se tudo certo, executa o metodo
				converter_modo_4();
				break;
				case '3': // imagem
					// verifica o tipo de input para impedir o processo, se tiver vazio
					if ($( "#t_url" ).hasClass( "selectedlink" ))
					{
						if( !$("#input_url").val() ) {
							effect_out();
							$("#input_url").focus();
							return;
						}
					}
					else if ($( "#t_input" ).hasClass( "selectedlink" ))
					{
						if( !$("#input_file").val() ) {
							effect_out();
							$("#input_file").focus();
							return;
						}
					}
					// se tudo certo, executa o metodo
					converter_modo_3();
				break;
				case '5': // doc
					// verifica o tipo de input para impedir o processo, se tiver vazio
					if ($( "#t_url" ).hasClass( "selectedlink" ))
					{
						if( !$("#input_url").val() ) {
							effect_out();
							$("#input_url").focus();
							return;
						}
					}
					else if ($( "#t_input" ).hasClass( "selectedlink" ))
					{
						if( !$("#input_file").val() ) {
							effect_out();
							$("#input_file").focus();
							return;
						}
					}
					// se tudo certo, executa o metodo
					converter_modo_5();
				break;
			}
		}, 1000);
	});

	// efeitos do botão desabilitando e habilitando	
	function effect_in()
	{
		$("#btn_convert").addClass("disabled");
		$("#load").removeClass("none");
	}

	function effect_out()
	{
		$("#btn_convert").removeClass("disabled");
		$("#load").addClass("none");
	}

	// metodo de enviar o formulario
	$(".btncontact").on('click', function(e){
		$(".btncontact").addClass("disabled");

		e.preventDefault(); // avoid to execute the actual submit of the form.
		var form = $("#formcontact").serialize();
		var url = "assets/scripts/send.php";
		$.ajax({
			type: "POST",
			url: url,
			data: form, // serializes the form's elements.
			success: function (data) {
		$("#check").removeClass( "none" );
		$('#formcontact').trigger("reset");
				$(".btncontact").removeClass("disabled");
			},
			error: function (data) {
		$("#close").removeClass( "none" );
				$(".btncontact").removeClass("disabled");
			}
		});
	});

	// ao clicar em baixar o arquivo convertido, apaga do servidor e faz todos os efeitos necessarios
	$("#btn_download_filesaved").on('click', function(){
		setTimeout(function() {
			var attr = $("#btn_download_filesaved").attr('download');

			if (typeof attr !== typeof undefined && attr !== false) {
				form = $("#btn_download_filesaved").attr("download");
			}else{
				form = $("#btn_download_filesaved").data("target");
			}

			var url = "assets/scripts/deletefile.php";
			$.ajax({
				type: "POST",
				url: url,
				data: form, // serializes the form's elements.
				success: function (data) {
					$("#containerafter").empty().append();
					$("#btn_download_filesaved").addClass("none");
				},
				error: function (data) {
					alert("erro");
				}
			});
		}, 700);
	});

	$("#input_file").change(function(e){
		// pega a ext do arquivo que subiu
		const name = e.target.files[0].name;
		const lastDot = name.lastIndexOf('.');
		const fileName = name.substring(0, lastDot);
		const ext = name.substring(lastDot + 1);

		switch (ext) {
			case "docx":
			// permite
				$("#op_pdf").removeClass( "none" );
				$("#op_doc").removeClass( "none" );
				$("#op_rtf").removeClass( "none" );
				$("#op_html").removeClass( "none" );
			// nao permite
				$("#op_txt").addClass( "none" );
				$("#op_xls").addClass( "none" );
				$("#op_xlsx").addClass( "none" );
				$("#op_csv").addClass( "none" );
				$("#op_docx").addClass( "none" );
				break;
			case "doc":
			// permite
				$("#op_pdf").removeClass( "none" );
				$("#op_docx").removeClass( "none" );
			// nao permite
				$("#op_txt").addClass( "none" );
				$("#op_xls").addClass( "none" );
				$("#op_xlsx").addClass( "none" );
				$("#op_csv").addClass( "none" );
				$("#op_docx").addClass( "none" );
				$("#op_rtf").addClass( "none" );
				$("#op_html").addClass( "none" );
				break;
			case "pdf":
			// permite
				$("#op_docx").removeClass( "none" );
			// nao permite
				$("#op_txt").addClass( "none" );
				$("#op_xls").addClass( "none" );
				$("#op_xlsx").addClass( "none" );
				$("#op_csv").addClass( "none" );
				$("#op_doc").addClass( "none" );
				$("#op_rtf").addClass( "none" );
				$("#op_html").addClass( "none" );
				$("#op_pdf").addClass( "none" );
				break;
			case "html":
			// permite
				$("#op_pdf").removeClass( "none" );
			// nao permite
				$("#op_txt").addClass( "none" );
				$("#op_xls").addClass( "none" );
				$("#op_xlsx").addClass( "none" );
				$("#op_csv").addClass( "none" );
				$("#op_docx").addClass( "none" );
				$("#op_rtf").addClass( "none" );
				$("#op_html").addClass( "none" );
				$("#op_doc").addClass( "none" );
				break;
			case "xls":
			// permite
				$("#op_csv").removeClass( "none" );
				$("#op_pdf").removeClass( "none" );
				$("#op_xlsx").removeClass( "none" );
			// nao permite
				$("#op_txt").addClass( "none" );
				$("#op_xls").addClass( "none" );
				$("#op_docx").addClass( "none" );
				$("#op_rtf").addClass( "none" );
				$("#op_html").addClass( "none" );
				$("#op_doc").addClass( "none" );
				break;
			case "xlsx":
			// permite
				$("#op_xls").removeClass( "none" );
				$("#op_pdf").removeClass( "none" );
				$("#op_html").removeClass( "none" );
			// nao permite
				$("#op_txt").addClass( "none" );
				$("#op_csv").addClass( "none" );
				$("#op_docx").addClass( "none" );
				$("#op_rtf").addClass( "none" );
				$("#op_xlsx").addClass( "none" );
				$("#op_doc").addClass( "none" );
				break;
		}
	});

	// -------------------------- MODOS DE CONVERTER -----------------------------

	/**
	 * esse modo converte apenas video do youtube, mas abre o link para outro site
	 * @return void
	 */
	function converter_modo_1(){
		var stringUrl;
		var url;
		var v;
		stringUrl = document.getElementById('input_url').value;
		url = new URL(stringUrl);
		v = url.searchParams.get("v");
		window.open("https://www.yt-download.org/api/button/mp3/"+v);
	}

	/**
	 * esse modo de converter, usa um link de outro site, que pega pela url todos os links de opcoes para baixar
	 * de diversos tipos que o youtube esteja permitindo para aquela video
	 * @return view
	 */
	function converter_modo_2() {
		$("#containerafter").empty().append();
		var form = document.getElementById('input_url').value;
			var url = "assets/scripts/yt_any.min.php";
			$.ajax({
				type: "POST",
				url: url,
				data: form, // serializes the form's elements.
				success: function (data) {
					$("#desc_ca").removeClass("none");
					$("#containerafter").append(data);
					effect_out();
				},
				error: function (data) {
					$("#containerafter").append("Error");
					effect_out();
				}
			});
	}

	/**
	 * esse modo converte imagem para outro formato de imagem
	 * @return void
	 */
	function converter_modo_3() {
		$("#containerafter").empty().append();

		var formData = new FormData();
		formData.append('file', $('#input_file')[0].files[0]);
		// cria outro select pra img ou pega o optg de doc?
		var url = "assets/scripts/img_any.min.php?selecttype_doc="+$("#selecttype_doc").val();
		$.ajax({
			url : url,
			type : 'POST',
			data : formData,
			processData: false,  // tell jQuery not to process the data
			contentType: false,  // tell jQuery not to set contentType
			success : function(data) {
				// alert(data);
				var datadownload = "assets/usr_download/" + data;
				$("#btn_download_filesaved").removeClass("none");
				$("#btn_download_filesaved").attr('href', datadownload);
				$("#btn_download_filesaved").attr('download', data);
				effect_out();
			}
		});
	}

	/**
	 * converte video usando o online-videoconverter, e faz uma volta pra pegar o link do download
	 * @return void
	 */
	function converter_modo_4() {
		var formData = new FormData();
		formData.append('file', $('#input_file')[0].files[0]);
		var url = "assets/scripts/video_any.min.php?selecttype_video="+$("#selecttype_video").val();
		$.ajax({
			url : url,
			type : 'POST',
			data:  formData,
			contentType: false,
			dataType: "json",
			cache: false,
			processData: false,
			complete : function(data) {
				if (data != "error") {
					var dados = JSON.parse(data.responseText);
					$("#btn_download_filesaved").removeClass("none");
					$("#btn_download_filesaved").attr('href', dados.link);
					$("#btn_download_filesaved").attr('target', '_blank');
					$("#btn_download_filesaved").attr('data-target', dados.name);
					$("#btn_download_filesaved").removeAttr('download');
					effect_out();
				}
			}
		});
	}

	/**
	 * esse modo de converter, pega um ms office (doc, docx, xls ?) que o usuario subiu
	 * e converte para um o formato selecionad
	 * @return void
	 */
	function converter_modo_5() {
		// add o url para o action do form e envia
		var url = "public/msoffice_any.min.php?selecttype_doc="+$("#selecttype_doc").val();
		$("#formconv").attr("action", url);
		$("#formconv").submit();
	}
});

/**
 * funcao que inicia o translate do google
 * @return void
 */
function googleTranslateElementInit() {
	new google.translate.TranslateElement({
		// pageLanguage: "en",
		// layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
	}, 'google_translate_element');
}

// pega a linguagem do navegador do cliente
let navlang = navigator.language || navigator.userLanguage || navigator.browserLanguage;
let langNav = (String)(navlang.split('-')[0]).toLowerCase();
// url do navegador
let url = window.location.href;
let lang = null;

// pega o parametro da url, q vai ser a linguagem se tiver
let arr = url.split('/');
// provavalmente no servidor esse index mude para 3
let langUrl = arr[4];

// verifica se a url ja tem linguagem, se nao pega a do navegador, e popula a variavel e muda a url
if (langUrl != '') {
	lang = langUrl;
}
else
{
	lang = langNav;
	window.history.replaceState(null, null, ""+lang);
}

// se mudar o idioma, muda tambem a url
$(document).on('change', '.goog-te-combo', function(e){
	window.history.replaceState(null, null, ""+e.target.value);
});

// depois de 1s, para carregar o resto do site, faz a mudança da linguagem  
setTimeout(() => {
	// pega o elemento select dos idiomas
	let a = document.querySelector("#google_translate_element select");
	// coloca a linguagem no select
	a.value = lang;
	// dispara o evento para mudar a linguagem
	a.dispatchEvent(new Event('change'));
}, 2000);