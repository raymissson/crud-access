<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Access Cred</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>
        <div id="app">
        </div>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

            	$("#cep").mask("99999-999",{completed:function(){
            		var cep = $(this).val().replace(/[^0-9]/, "");
            		if(cep.length != 8){
            			return false;
            		}
            		var url = "http://viacep.com.br/ws/"+cep+"/json/";

            		$.getJSON(url, function(dadosRetorno){
            			try{
            				// Preenche os campos de acordo com o retorno da pesquisa
            				$("#endereco").val(dadosRetorno.logradouro);
            				$("#bairro").val(dadosRetorno.bairro);
            				$("#cidade").val(dadosRetorno.localidade);
            				$("#uf").val(dadosRetorno.uf);
            				$("#nr_end").focus();
            			}catch(ex){}
            		});
            	}});
            });
        </script>
    </body>
</html>
