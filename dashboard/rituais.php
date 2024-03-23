<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modo Caverna | Desafio</title>
    <!-- STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- GLOBAL CSS -->
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="main">
        <div class="wrapper">
            <div class="heading">
                <div class="container">
                    <div class="logo">
                        <a href="./"><img src="../assets/images/logo.svg"></a>
                    </div>
                    <div class="menu">
                    <?php include_once '../includes/menu.php'; ?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="defaultPage2">
                    <div class="conteudoPage">
                        <h1>Rituais</h1>
                        
                        <div class="ritual">
                            <div>
                                <span>☀️ Ritual Matinal</span>
                                <div class="createBlockMatinal" data-bs-toggle="modal" data-bs-target="#modalRitualMatinal">
                                    <span>Criar bloco</span>
                                </div>

                                <div class="ritualBlockAddMatinal">
                                    
                                </div>

                                <div class="metasRitual">
                                    <span>🎯 Metas do Ritual Matinal</span>
                                    <ul>
                                        <li>- Beber 1 litro de água</li>
                                        <li>- Aumentar a energia para ativar o Flow</li>
                                    </ul>
                                </div>
                            </div>

                            <div>
                                <span>🌙 Ritual Noturno</span>
                                <div class="createBlockNoturno" data-bs-toggle="modal" data-bs-target="#modalRitualNoturno">
                                    <span>Criar bloco</span>
                                </div>
                                <div class="ritualBlockAddNoturno">
                                    
                                </div>

                                <div class="metasRitual">
                                    <span>🎯 Metas do Ritual Matinal</span>
                                    <ul>
                                        <li>- Dormir com clareza do amanhã</li>
                                        <li>- Dormir com a tranquilidade de que fiz tudo o que podia ter feito</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODALS -->
    <div class="globalModals">
        <?php include_once '../modals/ritualMatinal.php'; ?>
        <?php include_once '../modals/ritualNoturno.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/functionsRitualMatinal.js"></script>
    <script src="../assets/js/functionsRitualNoturno.js"></script>
</body>
</html>