<!doctype HTML>
<html lang="pt-br">

<head>
    <title>Form</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
</head>

<body>
    <div class="container">
        <h1>
            Form with php and ajax 
        </h1>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="txtNome">Nome completo</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Nome completo">
                </div>
            </div>
		     
        </div>
		
		<div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="txtEmail">E-mail</label>
                    <input type="email" class="form-control" id="txtEmail" placeholder="E-mail principal">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="txtTelefone">Telefone</label>
                    <input type="text" class="form-control" id="txtTelefone" placeholder="(00) 00000-0000">
                </div>
            </div>
        </div>
		
		<div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="txtCep">CEP</label>
                    <input type="text" class="form-control" id="txtCep" placeholder="">
                </div>
            </div>

           

            <div class="col-6">
                <div class="form-group">
                    <label for="txtRua">Rua</label>
                    <input type="text" class="form-control" id="txtRua">
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label for="txtBairro">Bairro</label>
                    <input type="text" class="form-control" id="txtBairro">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="txtCidade">Cidade</label>
                    <input type="text" class="form-control" id="txtCidade">
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="txtEstado">Estado</label>
                    <input type="text" class="form-control" id="txtEstado">
                </div>
            </div>
        </div>

		
		

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <button id="btnCadastrar" class="btn btn-info">Cadastrar</button>
                    <span id=spResultado></span>
                </div>
            </div>
        </div>
		
		
        <!--CONSULTA-->
        <div class="card">
            <div class="card-header">
                <button id="btnConsultar" class="btn btn-success">Consultar</button>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0" id=bqResultado></blockquote>
            </div>
        </div>
    </div>
</body>
<footer> 

 <script src="js/jquery-3.2.1.min.js"></script>
 <script src="js/scriptAjax.js"></script>

</footer>

</html>