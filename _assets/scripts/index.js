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
    var type = $("#type").val();
    switch (type) {
      case '1':
          alert("é mp3");
          if ($( "#320" ).hasClass( "selectedlink" )) {
            alert("é em 320 kbps");
          }
          else if ($( "#256" ).hasClass( "selectedlink" ))
          {
            alert("é em 256 kbps");
          }
          else if ($( "#192" ).hasClass( "selectedlink" ))
          {
            alert("é em 192 kbps");
          }
          else if ($( "#128" ).hasClass( "selectedlink" ))
          {
            alert("é em 128 kbps");
          }
          // tipo 1, convert mas abre um link
          converter_modo_1();
        break;
      case '2':
          alert("é mp4");
        break;
    }
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
});
