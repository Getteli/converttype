document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
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

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // rolar, menu
  $(".about").click(function() {
    $('html, body').animate({
    scrollTop: $("#about").offset().top
    }, 860);
  });
  $(".begin").click(function() {
    $('html, body').animate({
    scrollTop: $("#begin").offset().top
    }, 860);
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

    $("#div_input_file").addClass( "none" );
    $("#div_input_file").addClass( "disabled" );
    $("#lb_input_file").addClass( "none" );
    $("#lb_input_file").addClass( "disabled" );
    $("#input_file").addClass( "none" );
    $("#div_file").addClass( "none" );
    $("#input_file").addClass( "disabled" );
    $('#input_file').removeAttr('required');
  });

  // $("#320").on( "click", function() {
  //   $("#320").addClass( "selectedlink" );
  //   $("#256").removeClass( "selectedlink" );
  //   $("#192").removeClass( "selectedlink" );
  //   $("#128").removeClass( "selectedlink" );
  // });
  // $("#256").on( "click", function() {
  //   $("#256").addClass( "selectedlink" );
  //   $("#320").removeClass( "selectedlink" );
  //   $("#192").removeClass( "selectedlink" );
  //   $("#128").removeClass( "selectedlink" );
  // });
  // $("#192").on( "click", function() {
  //   $("#192").addClass( "selectedlink" );
  //   $("#256").removeClass( "selectedlink" );
  //   $("#320").removeClass( "selectedlink" );
  //   $("#128").removeClass( "selectedlink" );
  // });
  // $("#128").on( "click", function() {
  //   $("#128").addClass( "selectedlink" );
  //   $("#256").removeClass( "selectedlink" );
  //   $("#192").removeClass( "selectedlink" );
  //   $("#320").removeClass( "selectedlink" );
  // });

  $('.sel').click(function(){
    $("#convert_to").html($(this).html());
    $("#convert_to2").html($(this).html());
    switch ( $(this).data("target") ) {
      case 1: // audio
        $("#t_input").addClass( "disabledtext" );
        $("#t_url").removeClass( "disabledtext" );
        $("#t_url").trigger("click");
        $("#type").val(1);
        break;
      case 2: // video
        $("#t_url").addClass( "disabledtext" );
        $("#t_input").removeClass( "disabledtext" );
        $("#t_input").trigger("click");
        $("#type").val(2);
        break;
    }
  });

  // ao clicar em converter, pega todas as configuracoes e executa o que tiver e como tiver que executar
  $("#btn_convert").on( "click", function() {
    $("#btn_convert").addClass("disabled");

    var type = $("#type").val();
    switch (type) {
      case '1': // audio
          // verifica o tipo de input para impedir o processo, se tiver vazio
          if ($( "#t_url" ).hasClass( "selectedlink" ))
          {
            if( !$("#input_url").val() ) {
              $("#btn_convert").removeClass("disabled");
              $("#input_url").focus();
              return;
            }
            // se tudo certo, executa o metodo
            converter_modo_2();
          }
          else if ($( "#t_input" ).hasClass( "selectedlink" ))
          {
            if( !$("#input_file").val() ) {
              $("#btn_convert").removeClass("disabled");
              $("#input_file").focus();
              return;
            }
          }
        break;
      case '2': // video
        break;
        // e por ai vai, adicionando mais cases e verificando os 2 inputs
     }
     $("#btn_convert").removeClass("disabled");
  });

  $(".btncontact").on('click', function(e){
		$(".btncontact").addClass("disabled");

		e.preventDefault(); // avoid to execute the actual submit of the form.
		var form = $("#formcontact").serialize();
		var url = "_assets/scripts/send.php";
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

  // -------------------------- MODOS DE CONVERTER -----------------------------

  // esse modo converte apenas video do youtube, mas abre o link para outro site
  function converter_modo_1(){
    var stringUrl;
    var url;
    var v;
    stringUrl = document.getElementById('input_url').value;
    url = new URL(stringUrl);
    v = url.searchParams.get("v");
    window.open("https://www.yt-download.org/api/button/mp3/"+v);
  }

  // esse modo de converter, usa um link de outro site, que pega pela url todos os links de opcoes para baixar
  // de diversos tipos que o youtube esteja permitindo para aquela video.
  function converter_modo_2() {
    $("#containerafter").empty().append();
    var form = document.getElementById('input_url').value;
		var url = "_assets/scripts/index.min.php";
		$.ajax({
			type: "POST",
			url: url,
			data: form, // serializes the form's elements.
			success: function (data) {
        $("#desc_ca").removeClass("none");
        $("#containerafter").append(data);
			},
			error: function (data) {
        $("#containerafter").append("Error");
			}
		});
  }
});
