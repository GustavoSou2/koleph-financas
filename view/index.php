<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Gustavo Antonio de Souza" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="copyright" content="© 2020 Gustavo de Souza" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./layout/style/indexStyle.css">
    <title>Koleph | Finanças</title>
</head>

<body>
    <!-- Header -->
    <header>
        <!-- navbar > menu -->
        <i class="fa fa-bars"></i>
        <nav class="menu">
            <div id="container-menu">
                <ul id="menu-content">
                    <li class="item-menu"><a href="#" class="link-item-menu">Perfil</a></li>
                    <li class="item-menu"><a href="#" class="link-item-menu">Início</a></li>
                    <li class="item-menu"><a href="#" class="link-item-menu">Contas</a></li>
                    <li class="item-menu"><a href="#" class="link-item-menu">Planos</a></li>
                    <li class="item-menu"><a href="#" class="link-item-menu">Relatório</a></li>
                    <li class="item-menu"><a href="#" class="link-item-menu">Sair</a></li>
                </ul>
            </div>
        </nav>

        <!-- container logo --left -->
        <div id="container-logo">
            <a href="#" id="logo">Koleph</a>
        </div>

        <!-- container name user -->
        <div id="container-name-user">
            <span id="name-content-user">Cláudio</span>
        </div>
    </header>
    <div id="container-element-content">
        <main>
            <section id="content-elements">

                <!-- Container cards of mode -->
                <div id="overflow-x-container-cards">
                    <div id="container-cards-categ">
                        <div class="card desp">
                            <span class="add-account">
                                <i class="fa fa-plus"></i>Adicionar despesa
                            </span>
                        </div>
                        <div class="card dep">
                            <span class="add-account">
                                <i class="fa fa-level-up"></i>Adicionar deposito
                            </span>
                        </div>
                        <div class="card deb">
                            <span class="add-account">
                                <i class="fa fa-level-down"></i>Debitar deposito
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Container search -->
                <div id="container-search-desp">
                    <label for="search-content" id="case-input-search"> <i class="fa fa-search"></i>
                        <input type="search" name="inp_search" id="search-content" maxlength="45">
                    </label>
                </div>

                <!-- Cards the desp -->
                <div id="container-info-desp">
                    <div class="sub-container-elements">
                        <span class="title-element-desp">Carro</span>
                        <div class="container-description-desp">
                            <span class="category-desp ret">Retirada</span>

                            <span class="qtde-desp">- R$43.90 </span>


                            <div class="hidden-config-icon">
                                <i class="fa fa-cog"></i>
                            </div>

                        </div>
                    </div>
                    <div class="sub-container-elements">
                        <span class="title-element-desp">Casa</span>
                        <div class="container-description-desp">
                            <span class="category-desp ret">Retirada</span>

                            <span class="qtde-desp">- R$1203.20 </span>

                            <div class="hidden-config-icon">
                                <i class="fa fa-cog"></i>
                            </div>
                        </div>
                    </div>
                    <div class="sub-container-elements">
                        <span class="title-element-desp">Carro</span>
                        <div class="container-description-desp">
                            <span class="category-desp adep">Acrescimo</span>

                            <span class="qtde-desp">+ R$9203.90 </span>

                            <div class="hidden-config-icon">
                                <i class="fa fa-cog"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </main>
        <aside>
            <section id="container-element-description-user">
                <!-- qtde money user -->
                <div id="container-total-money">
                    <span id="total-title">Total</span>
                    <span id="money-user-description">
                        R$ 3.364,00
                    </span>
                </div>

                <!-- notes user -->
                <section id="notes-desp">
                </section>
            </section>

        </aside>
    </div>
</body>

</html>