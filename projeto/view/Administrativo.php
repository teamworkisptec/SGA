<!doctype html>
<html class="no-js" lang="en">
    <?php
        include 'header.php';
    ?>

    <body>
        <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Start Left menu area -->
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <i class="fa fa-graduation-cap fa-4x"><a class="" style=" color: #006DF0; font-family: 'Roboto', sans-serif; font-size: 40px;">SGU</a></i>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar" style="margin-top: 20%;">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu">
                            <h1 style="margin-left: 25%; color: #006DF0; font-family: 'Roboto', sans-serif; font-size: 20px;">
                                <?php echo $admin->getNome() ;?>
                            </h1>
                            <h1 style="margin-left: 10%; color: #006DF0; font-family: 'Roboto', sans-serif; font-size: 20px;">
                                ADMINISTRATIVO
                            </h1>
                            <hr>
                        </ul>
                        
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a title="Inscritos" class="nav-link" id="Inscritos-tab" 
                                   data-toggle="pill" href="#Inscritos" role="tab" aria-controls="Inscritos" 
                                   aria-selected="false" aria-expanded="false">
                                   <i class="fas fa-users FontIconMenu"></i> 
                                    Inscritos
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="#">
                                   <i class="fa fa-clipboard-list FontIconMenu"></i> 
                                    Cadastrar
                                </a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Departamento" class="nav-link" id="Departamento-tab" 
                                           data-toggle="pill" href="#Dep" role="tab" aria-controls="Dep" aria-selected="false">
                                           Departamento</a>
                                    </li>

                                    <li><a title="Curso" class="nav-link" id="Curso-tab" data-toggle="pill" 
                                           href="#Curso" role="tab" aria-controls="Curso" aria-selected="false">
                                           Curso</a>
                                    </li>
                                    <li><a title="Turma" class="nav-link" id="Turma-tab" data-toggle="pill" 
                                           href="#Turma" role="tab" aria-controls="Turma" aria-selected="false">
                                           Turma</a>
                                    </li>
                                    <li><a title="Docente" class="nav-link" id="Docente-tab" data-toggle="pill" 
                                           href="#Docente" role="tab" aria-controls="Docente" aria-selected="false">
                                           Docente</a></li>
                                </ul>
                            </li>
                            <li>
                                <a title="MatricularEstudante" class="nav-link" id="MatEst-tab" data-toggle="pill" 
                                   href="#MatEst" role="tab" aria-controls="MatEst" aria-selected="false" aria-expanded="false">
                                    <i class="fas fa-pen-fancy FontIconMenu"></i>
                                     Matricular Estudante
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="Atribuicao" aria-expanded="false">
                                    <i class="fas fa-hand-pointer FontIconMenu"></i>
                                     Atribuir
                                </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="DocenteATurma" href="#">Docente A Turma</a></li>
                                    <li><a title="DocenteACurso" href="#">Disciplina A Curso</a></li>
                                </ul>
                            </li>
                            <li>
                                <a title="EliminarFalta" href="#" aria-expanded="false">
                                    <i class="fas fa-eraser FontIconMenu"></i>
                                     Eliminar Falta
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="#"><img class="main-logo" src="content/img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="fa fa-bars"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li>
                                                <a title="Inscritos" class="nav-link" id="Inscritos-tab" 
                                                   data-toggle="pill" href="#Inscritos" role="tab" aria-controls="Inscritos" 
                                                   aria-selected="false" aria-expanded="false">
                                                   <i class="fas fa-users FontIconMenu"></i> 
                                                    Inscritos
                                                </a>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="#">
                                                   <i class="fas fa-clipboard-list FontIconMenu"></i>
                                                    Cadastrar
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="true">
                                                    <li><a title="Departamento" class="nav-link" id="Departamento-tab" 
                                                           data-toggle="pill" href="#Dep" role="tab" aria-controls="Dep" aria-selected="false">
                                                           Departamento</a>
                                                    </li>

                                                    <li><a title="Curso" class="nav-link" id="Curso-tab" data-toggle="pill" 
                                                           href="#Curso" role="tab" aria-controls="Curso" aria-selected="false">
                                                           Curso</a>
                                                    </li>
                                                    <li><a title="Turma" class="nav-link" id="Turma-tab" data-toggle="pill" 
                                                           href="#Turma" role="tab" aria-controls="Turma" aria-selected="false">
                                                           Turma</a>
                                                    </li>
                                                    <li><a title="Docente" class="nav-link" id="Docente-tab" data-toggle="pill" 
                                                           href="#Docente" role="tab" aria-controls="Docente" aria-selected="false">
                                                           Docente</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a title="MatricularEstudante" href="#" aria-expanded="false">
                                                    <i class="fas fa-pen-fancy FontIconMenu"></i>
                                                     Matricular Estudante
                                                </a>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="Atribuicao" aria-expanded="false">
                                                    <i class="fas fa-hand-pointer FontIconMenu"></i>
                                                     Atribuir
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="DocenteATurma" href="#">Docente A Turma</a></li>
                                                    <li><a title="DocenteACurso" href="#">Disciplina A Curso</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a title="EliminarFalta" href="#" aria-expanded="false">
                                                    <i class="fas fa-eraser FontIconMenu"></i>
                                                     Eliminar Falta
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list single-page-breadcome">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="breadcome-heading">
                                                <form role="search" class="sr-input-func">
                                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="breadcome-menu">
                                                <li><a style="color: #006DF0;"><h1>Área Administrativa</h1></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- accordion start-->
            <div class="edu-accordion-area mg-b-15">
                <div class="container-fluid">
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- Inscritos -->    
                        <div class="tab-pane fade " id="Inscritos" role="tabpanel" aria-labelledby="Inscritos-tab">

                        <!-- Tabela Dos Inscritos -->
                        <div class="data-table-area mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="sparkline13-list">
                                            <div class="sparkline13-hd">
                                                <ul id="myTabedu1" class="tab-review-design">
                                                    <li class="active"><a>lISTA DOS INSCRITOS</a></li>
                                                </ul>
                                            </div>
                                            <div class="sparkline13-graph" style="margin-top: 2%;">
                                                <div class="datatable-dashv1-list custom-datatable-overright">
                                                    <table id="table" style="margin-top: 2%;" class="table table-hover table-dark" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                        <thead class="theadTab">
                                                          <tr>
                                                            <th scope="col">Nome</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Telefone</th>
                                                            <th scope="col">Curso</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($inscritos as $inscrito ):  ?>
                                                            <tr>
                                                                <td><?php echo $inscrito->getNome();?></td>
                                                                <td><?php echo $inscrito->getEmail();?></td>
                                                                <td><?php echo $inscrito->getTelefone();?></td>
                                                                <td><?php echo $inscrito->getCurso();?></td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="form-row text-center">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Aprovar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cadastrar Curso -->
                    <div class="tab-pane fade" id="Curso" role="tabpanel" aria-labelledby="Curso-tab">
                        <!-- Single pro tab review Start-->
                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a>CADASTRAR CURSO</a></li>
                                            </ul>
                                            <form class="dropzone dropzone-custom" id="demo1-upload" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 2%;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Curso:</label>
                                                            <input name="curso" type="text" class="form-control" placeholder="Digite o Curso...">
                                                        </div>
                                                        
                                                            
                                                       <div class="form-group">
                                                           <select id="selDep" class="form-control" required="" name="selDep">
                                                                <option value="" selected="selected">    ----- </option>
                                                                <?php foreach($departamentos as $depar) {?>
                                                                    <option value="<?php echo $depar->getId() ?>"><?php echo $depar->getNome(); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <span></span>   
							</div>
                                                        
                                                    </div>
                                                    <div class="col imagem">
                                                    <i class="fa fa-graduation-cap fa-9x FontIcon"></i>
                                                    </div>
                                                </div>
                                                <div class="form-row" style="margin-top: 2%;">
                                                    <div class="col-12">
                                                        <input type="button" class="btn btn-primary waves-effect waves-light" value="Inserir-curso">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cadastrar Turma -->
                    <div class="tab-pane fade" id="Turma" role="tabpanel" aria-labelledby="Turma-tab">
                        <!-- Single pro tab review Start-->
                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a>CADASTRAR TURMA</a></li>
                                            </ul>
                                            <form class="dropzone dropzone-custom" id="demo1-upload">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 2%;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Curso:</label>
                                                            <input name="curso" type="text" class="form-control" placeholder="Digite o Curso...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Periodo:</label>
                                                            <input name="periodo" type="text" class="form-control" placeholder="Digite O Periodo...">
                                                        </div>
                                                    </div>
                                                    <div class="col imagem">
                                                    <i class="fa fa-graduation-cap fa-9x FontIcon"></i>
                                                    </div>
                                                </div>
                                                <div class="form-row" style="margin-top: 2%;">
                                                    <div class="col-12">
                                                        <input type="button" class="btn btn-primary waves-effect waves-light" value="Inserir-turma">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cadastrar Docente -->
                    <div class="tab-pane fade" id="Docente" role="tabpanel" aria-labelledby="Docente-tab">
                        <!-- Single pro tab review Start-->
                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a>CADASTRAR DOCENTE</a></li>
                                            </ul>
                                            <form class="dropzone dropzone-custom" id="demo1-upload">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 2%;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Nome Completo:</label>
                                                            <input name="nome" type="text" class="form-control" placeholder="Digite o Nome Completo...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">E-mail:</label>
                                                            <input name="email" type="email" class="form-control" placeholder="Digite o Email...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Endereço:</label>
                                                            <input name="endereço" type="text" class="form-control" placeholder="Digite o Endereço...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Estado:</label>
                                                            <input name="estado" type="text" class="form-control" placeholder="Digite o Estado...">
                                                        </div>
                                                    </div>
                                                    <div class="col imagem">
                                                    <i class="fa fa-graduation-cap fa-9x FontIcon"></i>
                                                    </div>
                                                </div>
                                                <div class="form-row" style="margin-top: 2%;">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Inserir</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cadastrar Departamento -->
                    <div class="tab-pane fade " id="Dep" role="tabpanel" aria-labelledby="Departamento-tab">
                        <!-- Single pro tab review Start-->
                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a>CADASTRAR DEPARTAMENTO</a></li>
                                            </ul>
                                            <form class="dropzone dropzone-custom" id="demo1-upload" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 2%;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Departamento:</label>
                                                            <input id="nomeDep" name="nome" type="text" class="form-control" placeholder="Digite o Departamento">
                                                        </div>
                                                    </div>
                                                    <div class="col imagem">
                                                    <i class="fa fa-graduation-cap fa-9x FontIcon"></i>
                                                    </div>
                                                </div>
                                                <div class="form-row" >
                                                    <div class="col-12">
                                                        <input type="button"  name="submitted-departamento" class="btn btn-primary waves-effect waves-light" value="Inserir-departamento" >
                                                    </div>
                                                    
                                                </div>
                                            </form>
<script type="text/javascript" >
          
    
    
</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matricular Estudante -->    
                    <div class="tab-pane fade" id="MatEst" role="tabpanel" aria-labelledby="MatEst-tab">

                        <!-- Tabela Dos Inscritos -->
                        <div class="data-table-area mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="sparkline13-list">
                                            <div class="sparkline13-hd">
                                                <ul id="myTabedu1" class="tab-review-design">
                                                    <li class="active"><a>lISTA DOS INSCRITOS APROVADOS</a></li>
                                                </ul>
                                            </div>
                                            <div class="sparkline13-graph" style="margin-top: 2%;">
                                                <div class="datatable-dashv1-list custom-datatable-overright">
                                                    <table id="table" style="margin-top: 2%;" class="table table-hover table-dark" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                        <thead class="theadTab">
                                                            <tr>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Telefone</th>
                                                                <th scope="col">Curso</th>
                                                                <th scope="col">Nota</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                                <th>3</th>
                                                                <td>Larry the Bird</td>
                                                                <td>@twitter</td>
                                                                <td>@twitter</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="jumbotron">
                                                        <h3 style="color:#2289db; text-align: center;" >Dados Para A Matrícula</h3>
                                                        <hr>
                                                            <form id="add-department" action="#" class="add-department">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Nome:</label>
                                                                        <input name="Nome" type="text" class="form-control" placeholder="Insira o Nome...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">E-mail:</label>
                                                                        <input name="E-mail" type="email" class="form-control" placeholder="Insira o E-mail...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Ano:</label>
                                                                        <input name="Ano" type="number" class="form-control" placeholder="Insira o Ano...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Endereço:</label>
                                                                        <input name="Endereco" type="text" class="form-control" placeholder="Insira o Endereço...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Curso:</label>
                                                                        <input name="Curso" type="text" class="form-control" placeholder="Insira o Curso...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Turma:</label>
                                                                        <input name="Turma" type="text" class="form-control" placeholder="Insira a Turma...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress" style="margin-top: 3%;">
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Matricular</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <!-- accordion End-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>