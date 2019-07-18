$("#download").click(function() {
    $("#adv").hide("slow");
    $("#loading").show("slow");
    $.post("resources/download.php", function() {
        $("#adv").show("slow");
        $("#loading").hide("slow");
        $(".alter-h1").html("<span style='color:green'>XML Processado Com Sucesso!</span>");
        $( ".alter-p" ).html("Pressione o botão abaixo caso queira processar novamente");
        $( ".alter-btn" ).html("Baixar Novamente");
      });
  });