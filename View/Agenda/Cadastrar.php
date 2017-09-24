<?php
    $home = new HomeModel();
    include "./Model/OcorrenciaModel.php";
    include "./Model/EstabelecimentoModel.php";
	$database = new Database();
    $db = $database->getConnection();
	$estabelecimentos = new Estabelecimentos($db);
	$estabelecimentos->VerDetalhesEstabelecimento();
	if(!isset($_SESSION["login_admin"]))
	{
		header("location:./?page=Index");
    }
    if($_POST)
    {
        $ocorrencias = new OcorrenciaModel($db);
        $ocorrencias->estabelecimentoID = $_POST["estabelecimento"];
        $ocorrencias->tipoSolicitacao = $_POST["evento"];
        $ocorrencias->tipoOcorrencia = isset($_POST["ocorrencia_s"]) ? $_POST["ocorrencia_s"] : $_POST["ocorrencia_h"];
        $ocorrencias->descricao = $_POST["descricao_texto"];
        $ocorrencias->nivelUrgencia = $_POST["urgencia"];
        if($ocorrencias->CadastrarOcorrencia())
        {
            $ocorrencias->AvisoSucesso();
        }
        else
        {
            $ocorrencias->AvisoFalha();
        }
    }
?>

        <div class="container">
            <div class="row">
                <div class="col s12 m12 center">
                    <h2><?php echo $home->VerTituloSite(); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 center">
                    <p>
                        <h3>
                            <?php
                                echo $estabelecimentos->nomeFantasia;
                            ?>
                        </h3>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12">
                    <p>
                        <h5>solicitação de manutenção</h5>
                    </p>
                    <hr/>
                </div>
            </div>
            <form action="?pagina=SolicitarReparo" method="post">
                <input type="hidden" name="estabelecimento" value="<?php echo $estabelecimentos->estabelecimentoID; ?>">
                <div class="row">
                    <div class="input-field">
                        <div class="col s12 offset-m2 m8">
                            <p class="flow-text">
                                Tipo de solicitação
                            </p>
                            <select name="evento" id="evento" required>
                                <option disabled selected>Tipo de solicitação</option>
                                <option value="software">Manutenção de Software</option>
                                <option value="hardware">Manutenção de Hardware</option>
                            </select>
                        </div>
                    </div>
                </div>                
                <div id="ocorrencia_soft" hidden>
                    <div class="row">
                        <div class="input-field">
                            <div class="col s12 offset-m2 m8">
                                <p class="flow-text">
                                    Tipo de ocorrência
                                </p>
                                <select name="ocorrencia_s" id="ocorrencia_s">
                                    <option disabled selected>Tipo de ocorrência</option>
                                    <option value="Manutenção em Software">Manutenção em Software</option>
                                    <option value="Melhoria de Software">Melhoria de Software</option>
                                    <option value="Atualização de Software">Atualização de Software</option>
                                    <option value="Outros">Outros</option>
                                </select>
                                <p>
                                    <small>
                                        Informe uma ocorrência
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ocorrencia_hard" hidden>
                    <div class="row">
                        <div class="input-field">
                            <div class="col s12 offset-m2 m8">
                                <p class="flow-text">
                                    Tipo de ocorrência
                                </p>
                                <select name="ocorrencia_h" id="ocorrencia_h">
                                    <option disabled selected>Tipo de ocorrência</option>
                                    <option value="Manutenção de equipamentos">Manutenção de equipamentos</option>
                                    <option value="Manutenção de cancelas">Manutenção de cancelas</option>
                                    <option value="Expansão de area">Expansão de area</option>
                                    <option value="Outros">Outros</option>
                                </select>
                                <p>
                                    <small>
                                        Informe uma ocorrência
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="descricao" hidden>
                    <div class="row">
                        <div class="input-field col s12 offset-m2 m8">
                            <p class="flow-text">
                                Descrição da ocorrência
                            </p>
                            <textarea name="descricao_texto" id="descricao_texto" class="caixa_texto"></textarea>                            
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col s12 offset-m2 m8">
                        <p class="flow-text">
                            Urgência
                        </p>
                        <p class="range-field">
                            <input type="range" id="urgencia" min="1" value="1" max="5" name="urgencia"/>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 offset-m2 m8">
                        <h6>Níveis de urgência</h6>
                        <p>
                            <small>
                                1 - Posso aguardar algum tempo (agende uma data para mim)
                            </small>
                        </p>
                        <p>
                            <small>
                                2 - Posso aguardar por pouco tempo (no máximo um mês)
                            </small>
                        </p>
                        <p>
                            <small>
                                3 - Preciso o quanto antes (no máximo uma quinzena)
                            </small>
                        </p>
                        <p>
                            <small>
                                4 - Preciso com urgência (no máximo uma semana)
                            </small>
                        </p>
                        <p>
                            <small>
                                5 - Muito urgente (preciso de atendimento o quanto antes)
                            </small>
                        </p>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 center">
                        <button id="enviar" class="waves-effect waves-light btn" disabled>
                            <i class="material-icons right">send</i>
                            enviar solicitação
                        </button>
                    </div>
                </div>
            </form>
        </div>
