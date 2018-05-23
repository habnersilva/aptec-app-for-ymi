<?php

//Access control

// EXEMPLE OF FUNCTION TO ALLOW ACCESS USING FEATURES .   authorize_access(212);

?>

<style>
    .table-checkable tr > td:first-child{max-width:50% !important;}
    #estoque{margin-top:12px;}
    td{text-align:center;}
</style>
<!-- BEGIN CONTENT BODY -->
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container-fluid">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Logotipo
                <small></small>
            </h1>
        </div>
    </div>
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container-fluid">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="<?php echo tempurl; ?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <a href="#">Configurações</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Logotipo</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="m-heading-1 border-green m-bordered">
                        <h4><strong>Instruções de uso</strong></h4>
                        <p>Para atualizar o logotipo do painel(imagem exibida no topo esquerdo de todas as telas do painel YMI) arraste ou clique na <b>primeira</b> área pontilhada. Tamanho sugerido de 50px X 150px</p>
                        <p>Para atualizar o logotipo background(imagem exibida somente na tela de login do YMI) arraste ou clique na <b>segunda</b> área pontilhada. Tamanho sugerido de 1200px X 1080px</p>
                        <p>Ao enviar uma nova imagem, sua predecessora será apagada e não poderá ser reativada.</p>
                        <p>Para baixar a imagem do logotipo do painel, clique <a href='<?php echo $path_painel; ?>' target="_blank"><b>AQUI</b></a> e para baixar a imagem do background clique <a href='<?php echo $path_background; ?>' target="_blank"><b>AQUI</b></a>.</p>
                        <p>Realize logoff de seu usuário para visualizar a alteração.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <form class="dropzone-file-area dropzone" id="form-logo-painel">
                        <input type="hidden" name="logo" value="painel">
                        <h3 class="sbold">Envie seu logotipo do painel aqui</h3>
                        <br>
                        <h4><strong>ATENÇÃO</strong>: O arquivo deve conter a extensão <strong>PNG</strong> ou <strong>JPG</strong></h4>
                    </form>
                </div>
                <div class="col-md-6">
                    <form class="dropzone-file-area dropzone" id="form-logo-background">
                        <input type="hidden" name="logo" value="background">
                        <h3 class="sbold">Envie seu logotipo de background aqui</h3>
                        <br>
                        <h4><strong>ATENÇÃO</strong>: O arquivo deve conter a extensão <strong>PNG</strong> ou <strong>JPG</strong></h4>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<style type="text/css">

    th{
        font-size: 13px;
        text-align: center;
    }
    td{
        font-size: 12px;
        text-align: center;
    }
    .block-upload{
        border: 2px dashed red !important;
        /*cursor: no-drop;*/
    }

</style>
