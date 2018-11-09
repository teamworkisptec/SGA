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
                            <div class="app-sidebar_user text-center"><i class="fa fa-users"></i>
                                <div>
                                    <p class="app-sidebar_user-name"><a><?php echo $admin->getNome(); ?></a></p>
                                    <p class="app-sidebar_user-designation"><a>Administrativo</a></p>
                                </div>
                            </div>
                        </ul>
                        
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a title="Inscritos" class="nav-link" id="Inscritos-tab" 
                                   data-toggle="pill" href="#Inscritos" role="tab" aria-controls="Inscritos" 
                                   aria-selected="false" aria-expanded="false">
                                   <i class="fa fa-users FontIconMenu"></i> 
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
                                    <i class="fa fa-pen-fancy FontIconMenu"></i>
                                     Matricular Estudante
                                </a>
                            </li>
                            <li>
                                <a class="has-arrow" href="Atribuicao" aria-expanded="false">
                                    <i class="fa fa-hand-pointer FontIconMenu"></i>
                                     Atribuir
                                </a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a title="DocenteATurma" href="#">Docente A Turma</a></li>
                                    <li><a title="DocenteACurso" href="#">Disciplina A Curso</a></li>
                                </ul>
                            </li>
                            <li>
                                <a title="EliminarFalta" href="#" aria-expanded="false">
                                    <i class="fa fa-eraser FontIconMenu"></i>
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
                                                   <i class="fa fa-users FontIconMenu"></i> 
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
                                                <a title="MatricularEstudante" href="#" aria-expanded="false">
                                                    <i class="fa fa-pen-fancy FontIconMenu"></i>
                                                     Matricular Estudante
                                                </a>
                                            </li>
                                            <li>
                                                <a class="has-arrow" href="Atribuicao" aria-expanded="false">
                                                    <i class="fa fa-hand-pointer FontIconMenu"></i>
                                                     Atribuir
                                                </a>
                                                <ul class="submenu-angle" aria-expanded="false">
                                                    <li><a title="DocenteATurma" href="#">Docente A Turma</a></li>
                                                    <li><a title="DocenteACurso" href="#">Disciplina A Curso</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a title="EliminarFalta" href="#" aria-expanded="false">
                                                    <i class="fa fa-eraser FontIconMenu"></i>
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
            </div>
            <!-- accordion start-->
            <div class="edu-accordion-area mg-b-15">
                <div class="container-fluid">
                    <div class="tab-content" id="v-pills-tabContent">

                        <!-- Inscritos -->    
                        <div class="tab-pane fade " id="Inscritos" role="tabpanel" aria-labelledby="Inscritos-tab">
                            <main class="app-content">
                                <div class="app-title">
                                    <div>
                                        <h1><i class="fa fa-users"></i>Inscritos</h1>
                                    </div>
                                    <ul class="app-breadcrumb breadcrumb side">
                                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                                        <li class="breadcrumb-item active">Inscritos</li>
                                    </ul>
                                </div>
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
                                                            <th scope="col">  </th>
                                                            <th scope="col">  </th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($inscritos as $inscrito ):  ?>
                                                            <?php if($inscrito->getValida()=='emespera'){ ?>
                                                            <tr>
                                                                
                                                                <td id="idInscrito"><?php echo $inscrito->getNome();?></td>
                                                                <td><?php echo $inscrito->getEmail();?></td>
                                                                <td><?php echo $inscrito->getTelefone();?></td>
                                                                <td><?php echo $inscrito->getCurso();?></td>
                                                                <td><input id="Aprovarinscrito" type="button" class="btn-click btn btn-primary waves-effect waves-light"  value="Aprovar"></td>
                                                                <td><input id="Reprovarinscrito" type="button" class="btn-click btn btn-primary waves-effect waves-light"  value="Reprovar"></td>
                                                            </tr>
                                                            <?php } endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="form-row text-center">
                                                        <div class="col-12">
                                                            <input id="Aprovarinscritos" type="button" class="btn-click btn btn-primary waves-effect waves-light"  value="Aprovar">
                                                            <input id="Reprovarinscritos" type="button" class="btn-click btn btn-primary waves-effect waves-light"  value="Reprovar">
                                                        </div>
                                                        <div class="col-6">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
                    </div>

                    <!-- Cadastrar Curso -->
                    <div class="tab-pane fade" id="Curso" role="tabpanel" aria-labelledby="Curso-tab">
                        <main class="app-content">
                                <div class="app-title">
                                    <div>
                                        <h1><i class="fa fa-clipboard-list"></i>Cadastrar</h1>
                                    </div>
                                    <ul class="app-breadcrumb breadcrumb side">
                                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                                        <li class="breadcrumb-item">Cadastrar</li>
                                        <li class="breadcrumb-item active">Curso</li>
                                    </ul>
                                </div>
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
                                                            <input id="nomeCurso" name="curso" type="text" class="form-control" placeholder="Digite o Curso...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Curso ID:</label>
                                                            <input id="idCurso" name="curso" type="text" class="form-control" placeholder="Digite o Curso...">
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
                                                        <input id="Inserir-curso" type="button" class="btn-click btn btn-primary waves-effect waves-light" value="Inserir-curso">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
                    </div>
                    <!-- Cadastrar Turma -->
                    <div class="tab-pane fade" id="Turma" role="tabpanel" aria-labelledby="Turma-tab">
                        <main class="app-content">
                                <div class="app-title">
                                    <div>
                                        <h1><i class="fa fa-clipboard-list"></i>Cadastrar</h1>
                                    </div>
                                    <ul class="app-breadcrumb breadcrumb side">
                                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                                        <li class="breadcrumb-item">Cadastrar</li>
                                        <li class="breadcrumb-item active">Turma</li>
                                    </ul>
                                </div>
                        <!-- Single pro tab review Start-->
                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a>CADASTRAR TURMA</a></li>
                                            </ul>
                                            <form class="dropzone dropzone-custom" id="demo1-upload" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 2%;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Turma Nome:</label>
                                                            <input id="turmaNome" name="turmaNome" type="text" class="form-control" placeholder="Digite Nome da Turma...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Turma Id:</label>
                                                            <input id="turmaId" name="turmaId" type="text" class="form-control" placeholder="Digite ID da Turma...">
                                                        </div>
                                                       <div class="form-group">
                                                           <label class="control-label" for="inputSuccess">Curso:</label>
                                                           <select id="selCurso" class="form-control" required="" name="selDep">
                                                                <option value="" selected="selected">    ----- </option>
                                                                <?php foreach($cursos as $curso) {?>
                                                                    <option value="<?php echo $curso->getId() ?>"><?php echo $curso->getNome(); ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <span></span>   
							</div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Periodo:</label>
                                                            <select id="periodo" class="form-control" required="" name="selDep">
                                                                <option value="" selected="selected">    ----- </option>
                                                                <option value="manha">Manha</option>
                                                                <option value="tarde">Tarde</option>
                                                                <option value="noite">Noite</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col imagem">
                                                    <i class="fa fa-graduation-cap fa-9x FontIcon"></i>
                                                    </div>
                                                </div>
                                                <div class="form-row" style="margin-top: 2%;">
                                                    <div class="col-12">
                                                        <input id="Inserir-turma" type="button" class="btn btn-primary waves-effect waves-light" value="Inserir-turma">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
                    </div>

                    <!-- Cadastrar Docente -->
                    <div class="tab-pane fade" id="Docente" role="tabpanel" aria-labelledby="Docente-tab">
                        <main class="app-content">
                                <div class="app-title">
                                    <div>
                                        <h1><i class="fa fa-clipboard-list"></i>Cadastrar</h1>
                                    </div>
                                    <ul class="app-breadcrumb breadcrumb side">
                                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                                        <li class="breadcrumb-item">Cadastrar</li>
                                        <li class="breadcrumb-item active">Docente</li>
                                    </ul>
                                </div>
                        <!-- Single pro tab review Start-->
                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a>CADASTRAR DOCENTE</a></li>
                                            </ul>
                                            <form class="dropzone dropzone-custom" id="demo1-upload" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 2%;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Nome Completo:</label>
                                                            <input id="nomeDoc" name="nomeDoc" type="text" class="form-control" placeholder="Digite o Nome Completo...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">E-mail:</label>
                                                            <input id="emailDoc" name="emailDoc" type="email" class="form-control" placeholder="Digite o Email...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="inputSuccess">Endereço:</label>
                                                            <input id="enderecoDoc" name="enderecoDoc" type="text" class="form-control" placeholder="Digite o Endereço...">
                                                        </div>
                                                    </div>
                                                    <div class="col imagem">
                                                    <i class="fa fa-graduation-cap fa-9x FontIcon"></i>
                                                    </div>
                                                </div>
                                                <div class="form-row" style="margin-top: 2%;">
                                                    <div class="col-12">
                                                        <input id="Inserir-docente" type="button" class="btn btn-primary waves-effect waves-light" value="Inserir-docente">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
                    </div>

                    <!-- Cadastrar Departamento -->
                    <div class="tab-pane fade " id="Dep" role="tabpanel" aria-labelledby="Departamento-tab">
                        <main class="app-content">
                                <div class="app-title">
                                    <div>
                                        <h1><i class="fa fa-clipboard-list"></i>Cadastrar</h1>
                                    </div>
                                    <ul class="app-breadcrumb breadcrumb side">
                                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                                        <li class="breadcrumb-item">Cadastrar</li>
                                        <li class="breadcrumb-item active">Departamento</li>
                                    </ul>
                                </div>
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
                                                        <input type="button" id="Inserir-departamento" name="submitted-departamento" class="btn-click btn btn-primary waves-effect waves-light" value="Inserir-departamento" >
                                                    </div>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
                    </div>

                    <!-- Matricular Estudante -->    
                    <div class="tab-pane fade" id="MatEst" role="tabpanel" aria-labelledby="MatEst-tab">
                        <main class="app-content">
                                <div class="app-title">
                                    <div>
                                        <h1><i class="fa fa-pen-fancy"></i>Matricular Estudante</h1>
                                    </div>
                                    <ul class="app-breadcrumb breadcrumb side">
                                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                                        <li class="breadcrumb-item active">Matricular Estudante</li>
                                    </ul>
                                </div>
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
                                                    <table id="tableMat" style="margin-top: 2%;" class="table table-hover table-dark" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
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
                                                            <?php foreach ($inscritos as $inscrito ):  ?>
                                                            <?php if($inscrito->getValida()=='yes'){ ?>
                                                            <tr>
                                                                
                                                                <td><?php echo $inscrito->getNome();?></td>
                                                                <td><?php echo $inscrito->getEmail();?></td>
                                                                <td><?php echo $inscrito->getTelefone();?></td>
                                                                <td><?php echo $inscrito->getCurso();?></td>
                                                                <td><?php echo $inscrito->getNota();?></td>
                                                            </tr>
                                                            <?php } endforeach; ?>
                                                            
                                                        </tbody>
                                                    </table>
                                                    <script>
                                                        var table = document.getElementById("tableMat"),rIndex;
                                                        for(var i = 1; i < table.rows.length; i++){
                                                            table.rows[i].onclick = function(){
                                                                rIndex = this.rowIndex;
                                                                console.log(rIndex);
                                                                
                                                                document.getElementById("nomeMat").value = this.cells[0].innerHTML;
                                                                document.getElementById("emailMat").value = this.cells[1].innerHTML;
                                                                
                                                                
                                                            }
                                                        }
                                                        
                                                    </script>
                                                    
                                                    <div class="jumbotron">
                                                        <h3 style="color:#2289db; text-align: center;" >Dados Para A Matrícula</h3>
                                                        <hr>
                                                            <form id="add-department" action="#" class="add-department">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Nome:</label>
                                                                        <input id="nomeMat" name="nomeMat" type="text" class="form-control" placeholder="Insira o Nome...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">E-mail:</label>
                                                                        <input id="emailMat" name="emailMat" type="email" class="form-control" placeholder="Insira o E-mail...">
                                                                    </div>
                                                                       
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Telefone:</label>
                                                                        <input id="telefoneMat" name="telefoneMat" type="tel" class="form-control" placeholder="Insira o Telefone...">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Endereço:</label>
                                                                        <input id="enderecoMat" name="enderecoMat" type="text" class="form-control" placeholder="Insira o Endereço...">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                
                                                                
                                                            <hr>
                                                            <form id="add-department" action="#" class="add-department">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Curso:</label>
                                                                        <select id="selMatCurso" name="cursoMat" class="form-control" required="" >
                                                                            <option value="" selected="selected">    ----- </option>
                                                                            <?php foreach($cursos as $curso) {?>
                                                                                <option id="cursoMat" value="<?php echo $curso->getId() ?>"><?php echo $curso->getNome(); ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Semestre:</label>
                                                                        <select id="selMatSemestre" name="semestreMat" class="form-control" required="" >
                                                                            <option value="" selected="selected">    ----- </option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                       
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Turma:</label>
                                                                        <select id="selMatTurma" name="turmaMat" class="form-control" required="" >
                                                                            <option value="" selected="selected">    ----- </option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="inputSuccess">Horario:</label>
                                                                        <select  name="horarioMat" class="form-control" required="" name="selDep">
                                                                            <option value="" selected="selected">    ----- </option>
                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>   
                                                                
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress" style="margin-top: 3%;">
                                                                        <input id="Inserir-matricula" type="button" class="btn btn-primary waves-effect waves-light" value="Inserir-matricula">
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
                        </main>
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