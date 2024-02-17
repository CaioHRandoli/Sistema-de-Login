<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="styleDashboard.css">
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                    <h2>Randoli</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="listar-usuario.php">
                    <span class="material-symbols-outlined">person</span>
                    <h3>Clientes</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Pedidos</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">show_chart</span>
                    <h3>Análises</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">mail</span>
                    <h3>Mensagens</h3>
                    <span class="message-count">64</span>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">inventory</span>
                    <h3>Produtos</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">report</span>
                    <h3>Relatórios</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Configurações</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">add</span>
                    <h3>Adicionar Produtos</h3>
                </a>
                <a href="logout.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Sair</h3>
                </a>
            </div>
        </aside>
        <!----------------- FIM DO ASIDE ----------------->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-outlined">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total de Vendas</h3>
                            <h1>R$25.000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">últimas 24 horas</small>
                </div>
                <!----------------- FIM DAS VENDAS ----------------->
                <div class="expenses">
                    <span class="material-symbols-outlined">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total de Despesas</h3>
                            <h1>R$14.160</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">últimas 24 horas</small>
                </div>
                <!----------------- FIM DAS DESPESAS ----------------->
                <div class="income">
                    <span class="material-symbols-outlined">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total de Renda</h3>
                            <h1>R$10.840</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">últimas 24 horas</small>
                </div>
                <!----------------- FIM DA RENDA ----------------->
            </div>
            <!----------------- FIM DAS INSIGHTS ----------------->
            <div class="recent-orders">
                <h2>Pedidos Recentes</h2>
                <table>
                    <thread>
                        <tr>
                            <th>Nome do Produto</th>
                            <th>ID do Produto</th>
                            <th>Pagamento</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thread>
                    <tbody>
                        <!----------------- O TEXTO ABAIXO FOI COMENTADO, POIS
                                            FOI USADO JAVASCRIPT PARA INSERIR OS PRODUTOS ----------------->
                        <!--<tr>
                            <td>Iphone 15</td>
                            <td>14541</td>
                            <td>Cartão</td>
                            <td class="warning">Pendente</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                        <tr>
                            <td>PlayStation 5</td>
                            <td>17842</td>
                            <td>Pix</td>
                            <td class="success">Concluído</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                        <tr>
                            <td>Jogo The Last of Us Part I</td>
                            <td>14941</td>
                            <td>Cartão</td>
                            <td class="warning">Pendente</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                        <tr>
                            <td>Jogo The Last of Us Part II</td>
                            <td>19531</td>
                            <td>Pix</td>
                            <td class="success">Concluído</td>
                            <td class="primary">Detalhes</td>
                        </tr>
                        <tr>
                            <td>Controle DualSense PS5</td>
                            <td>15541</td>
                            <td>Cartão</td>
                            <td class="danger">Cancelado</td>
                            <td class="primary">Detalhes</td>
                        </tr>-->
                    </tbody>
                </table>
                <a href="#">Mostrar todos</a>
            </div>
        </main>
        <!-----------------FIM DA MAIN ----------------->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-outlined active">light_mode</span>
                    <span class="material-symbols-outlined">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <?php
                        print "<p>Olá, <b>" . $_SESSION["nome"] . "</b></p>";
                        ?>
                        <small clas="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="./img/profile-1.jpg" alt="profile-photo">
                    </div>
                </div>
            </div>
            <!----------------- FIM DO TOP ----------------->
            <div class="recent-updates">
                <h2>Atualizações Recentes</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./img/profile-2.jpg" alt="profile-2">
                        </div>
                        <div class="message">
                            <p><b>Júlio </b>recebeu seu pedido Jogo The Last of Us Part II</p>
                            <small class="text-muted">Há 2 minutos</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./img/profile-3.jpg" alt="profile-3">
                        </div>
                        <div class="message">
                            <p><b>Henrique </b>recebeu seu pedido Arduino MEGA</p>
                            <small class="text-muted">Há 19 minutos</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./img/profile-4.jpg" alt="profile-4">
                        </div>
                        <div class="message">
                            <p><b>Fernanda </b>recebeu seu pedido Kaiak Aventura Feminino Desodorante Colônia</p>
                            <small class="text-muted">Há 52 minutos</small>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------- FIM DAS ATUALIZAÇÕES RECENTES ----------------->
            <div class="sales-analytics">
                <h2>Análise de Vendas</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Pedidos Realizados</h3>
                            <small class="text-muted">últimas 24 horas</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3458</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="material-symbols-outlined">local_mall</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Pedidos Cancelados</h3>
                            <small class="text-muted">últimas 24 horas</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1154</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Novos Pedidos</h3>
                            <small class="text-muted">últimas 24 horas</small>
                        </div>
                        <h5 class="success">+28%</h5>
                        <h3>874</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <div>
                        <span class="material-symbols-outlined">add</span>
                        <h3>Adicionar Produtos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="orders.js"></script>
    <script src="script.js"></script>
</body>

</html>