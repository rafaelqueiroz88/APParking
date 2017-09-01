<?php
    $database = new Database();
    $db = $database->getConnection();
    $home = new HomeModel($db);
    include "./Model/EstabelecimentoModel.php";
    $estabelecimentos = new Estabelecimentos($db);
    $estados = new Estados($db);
    $cidades = new Cidades($db);
    
    if(!isset($_SESSION["cnpj"]))
    {
        header("location:./?page=Admin");
    }
    if($_POST)
    {
        $localizacao = new Localizacoes($db);
        $localizacao->estadoID = $_POST["estado"];
        $localizacao->cidadeID = $_POST["cidade"];
        $localizacao->endereco = $_POST["endereco"];
        $localizacao->cep = $_POST["cep"];
        $localizacao->bairro = $_POST["bairro"];
        $localizacao->estabelecimentoID = $_POST["estabelecimento_id"];
        if($localizacao->Cadastrar())
        {
            $localizacao->AvisoSucesso();
        }
        else
        {
            $localizacao->AvisoFalha();
        }
    }
?>
            <div class="container">
				<div class="row section">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h2 align="center"><?php $home->VerTituloSite(); ?></h2>
					</div>
                </div>
                <div class="row section">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h3>cadastrar endereço</h3>
					</div>
                </div>
                <hr/>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h4>Legenda</h4>
					</div>
                </div>
                <div class="row">
					<div class="col-xs-12 col-xs-2 col-sm-2 col-md-1">
						<b class="obrigatoriedade">*</b>
					</div>
					<div class="col-xs-12 col-xs-8 col-sm-5 col-md-2">
						Informação obrigatória
					</div>
                </div>
                <hr/>
                <fieldset>
					<legend>dados</legend>
                </fieldset>
                <form class="form-horizontal" action="./?pagina=Admin&acao=CadastroEndereco" method="post">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
							<div class="form-group ">
								<label for="estado" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Estado</label>
								<div class="col-sm-8 col-md-9">
                                    <select class="form-control" id="estado" name="estado" required/>
                                        <?php
                                            $estados->ListarEstadosSelect();
                                        ?>
                                    </select>
								</div>
							</div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
                            <div class="form-group ">
                                <label for="cidade" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Cidade</label>
                                <div class="col-sm-8 col-md-9">
                                    <select class='form-control' id='cidade' name='cidade' disabled required>
                                        <option disabled selected>Selecione um Estado</option>
                                    </select>
                                    <small>É necessário escolher um estado para habilitar a escolha da cidade</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
                            <div class="form-group ">
                                <label for="endereco" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Endereço</label>
                                <div class="col-sm-8 col-md-9">
                                    <input type="text" class="form-control" id="endereco" name="endereco" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
                            <div class="form-group ">
                                <label for="bairro" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>Bairro</label>
                                <div class="col-sm-8 col-md-9">
                                    <input type="text" class="form-control" id="bairro" name="bairro" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-6">
                            <div class="form-group ">
                                <label for="cep" class="col-sm-4 col-md-3 control-label"><b class="obrigatoriedade">*</b>CEP</label>
                                <div class="col-sm-8 col-md-9">
                                    <input type="text" class="form-control" id="cep" name="cep" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Informação auxiliar-->
                    <input type="hidden" 
                        name="estabelecimento_id" 
                        value="<?php $estabelecimentos->BuscarEstabelecimentoCNPJ($_SESSION["cnpj"]); ?>"
                        required
                    />
                    <!-- -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-offset-4 col-md-5">
                            <p>
                                <button class="btn btn-primary btn-large btn-block">
                                    <span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar
                                </button>
                            </p>                            
                        </div>
                    </div>
                </form>
                <hr/>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h4>Legenda</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-xs-2 col-sm-2 col-md-1">
                        <b class="obrigatoriedade">*</b>
                    </div>
                    <div class="col-xs-12 col-xs-8 col-sm-5 col-md-2">
                        Informação obrigatória
                    </div>
                </div>
                <hr/>
            </div>