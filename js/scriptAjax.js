$(document).ready(function () {
    $("#btnCadastrar").click(function () {

        //Objeto com as informações do formulário.
        var obj = {
            txtNome: $("#txtNome").val(),
            txtEmail: $("#txtEmail").val(),
            txtTelefone: $("#txtTelefone").val(),
			txtCep: $("#txtCep").val(),
			txtRua: $("#txtRua").val(),
			txtBairro: $("#txtBairro").val(),
			txtCidade: $("#txtCidade").val(),
			txtEstado: $("#txtEstado").val()
        };

        console.log(obj);
        //spResultado
        $.ajax({
            url: "action/UsuarioAction.php?req=1",
            type: "POST",
            dataType: "TEXT",
            //contentType: "application/json",
            data: obj,
            beforeSend: function () {
                $("#spResultado").html("Processando...");
            },
            success: function (data) {
                console.log(data);
				//Mostrado o <span id=spResultado></span> na cor vede caso 'req=1' 
				//ou vermelho em caso diferente de 1

                if (data == 1) {
                    $("#spResultado").css("color", "green");
                    $("#spResultado").html("Cadastrado.");
                } else {
                    $("#spResultado").css("color", "red");
                    $("#spResultado").html("Houve um erro ao tentar cadastrar, tente mais tarde.");
                }
            },
            error: function (error) {
                console.log(error);
            },
            complete: function () {

            }
        });

    });

    $("#btnConsultar").click(function () {
        $.ajax({
            url: "action/UsuarioAction.php?req=2",
            type: "GET",
            dataType: "TEXT",
            data: {},
            success: function (data) {
                console.log(data);
                $("#bqResultado").html(data);

                var dt = data.split("|");

                $("#txtNome").val(dt[0].split(":")[1]);
                $("#txtEmail").val(dt[1].split(":")[1]);
                $("#txtTelefone").val(dt[2].split(":")[1]);
			//	$("#txtCEP").val(dt[0].split(":")[1]);
			 //$("#txtRua").val(dt[0].split(":")[1]);
			 //   $("#txtBairro").val(dt[0].split(":")[1]);
			 //  $("#txtCidade").val(dt[0].split(":")[1]);
			 //   $("#txtEstado").val(dt[0].split(":")[1]);
				
				
            },
            error: function (error) {
                console.log(error);
            }
        });
    });


    $("#txtCep").focusout(function () {
        if ($("#txtCep").val().length >= 5) {

            var cep = $("#txtCep").val().replace("-", "");

            var url = "https://brasilapi.com.br/api/cep/v1/" + cep;
            console.log(url);
            $.ajax({
                url: url,
                type: "GET",
                dataType: "JSON",
                data: {},
                success: function (data) {
                    console.log(data);
										
                    if (data != null) {
                        $("#txtRua").val(data.street);
                      //  $("#txtLogradouro").val(data.logradouro);
                        $("#txtBairro").val(data.neighborhood);
                        $("#txtCidade").val(data.city);
                        $("#txtEstado").val(data.state);
						
						
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    });
	
});

//date("Y-m-d H:i:s").txt;