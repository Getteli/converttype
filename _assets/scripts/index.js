$(document).ready(function(){
  // navbar menu mobile
  const ElemensDropdownMenuMobile = document.querySelectorAll(".sidenav");
  const InstanceDropdownMenuMobile = M.Sidenav.init(ElemensDropdownMenuMobile,{
      edge: "right",
      draggable: true,
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
    $('#input_file').attr('required', 'true');

    $("#input_url").addClass( "none" );
    $("#input_url").addClass( "disabled" );
    $('#input_url').removeAttr('required');
  });
  $("#t_url").on( "click", function() {
    $("#t_url").addClass( "selectedlink" );
    $("#t_input").removeClass( "selectedlink" );

    $("#input_url").removeClass( "none" );
    $("#input_url").removeClass( "disabled" );
    $('#input_url').attr('required', 'true');

    $("#div_input_file").addClass( "none" );
    $("#div_input_file").addClass( "disabled" );
    $("#lb_input_file").addClass( "none" );
    $("#lb_input_file").addClass( "disabled" );
    $("#input_file").addClass( "none" );
    $("#input_file").addClass( "disabled" );
    $('#input_file').removeAttr('required');
  });
  $("#320").on( "click", function() {
    $("#320").addClass( "selectedlink" );
    $("#256").removeClass( "selectedlink" );
    $("#192").removeClass( "selectedlink" );
    $("#128").removeClass( "selectedlink" );
  });
  $("#256").on( "click", function() {
    $("#256").addClass( "selectedlink" );
    $("#320").removeClass( "selectedlink" );
    $("#192").removeClass( "selectedlink" );
    $("#128").removeClass( "selectedlink" );
  });
  $("#192").on( "click", function() {
    $("#192").addClass( "selectedlink" );
    $("#256").removeClass( "selectedlink" );
    $("#320").removeClass( "selectedlink" );
    $("#128").removeClass( "selectedlink" );
  });
  $("#128").on( "click", function() {
    $("#128").addClass( "selectedlink" );
    $("#256").removeClass( "selectedlink" );
    $("#192").removeClass( "selectedlink" );
    $("#320").removeClass( "selectedlink" );
  });
  $(".mp3").on( "click", function() {
    $("#convert_to").html("PARA MP3");
    $("#convert_to2").html("PARA MP3");
    $("#type").val(1);
  });
  $(".mp4").on( "click", function() {
    $("#convert_to").html("PARA MP4");
    $("#convert_to2").html("PARA MP4");
    $("#type").val(2);
  });

  // ao clicar em converter, pega todas as configuracoes e executa o que tiver e como tiver que executar
  $("#btn_convert").on( "click", function() {
    $("#btn_convert").addClass("disabled");

    var type = $("#type").val();
    switch (type) {
      case '1': // video p/ audio
          // verifica o tipo de input para impedir o processo, se tiver vazio
          if ($( "#t_url" ).hasClass( "selectedlink" ))
          {
            if( !$("#input_url").val() ) {
              $("#btn_convert").removeClass("disabled");
              $("#input_url").focus();
              return;
            }
          }
          else if ($( "#t_input" ).hasClass( "selectedlink" ))
          {
            if( !$("#input_file").val() ) {
              $("#btn_convert").removeClass("disabled");
              $("#input_file").focus();
              return;
            }
          }
          converter_modo_2();
        break;
      case '2':
          // alert("é mp4");
        break;
     }
     $("#btn_convert").removeClass("disabled");
  });

  // modos de converter

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
    var form = document.getElementById('input_url').value;
		var url = "../_assets/scripts/index.min.php";
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
