<?php include_once("config/variaveis.php"); ?> 
<!-- aqui funciona o caminho relativo, não precisa usar o __DIR__ etc -->

<header>
    <div class="navbar border-bottom border-white bg-dark">
        <h1 id="logo"><?php echo $nomeSistema;?></h1>
        <nav>
            <ul class="nav">
                <?php if(isset($usuario) && $usuario != []) { ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Olá, <?php echo $usuario['nome']; ?> </a>
                    </li>
                    <li class="nav-item">
                        <a href="sair.php" class="nav-link">Sair</a>
                    </li>
                    
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Cadastrar</a>
                    </li>
                <?php } ?>
            </ul>
        </nav>
    </div>

    <nav class="d-flex justify-content-center bg-secondary">
        <ul class="nav">
            <?php if(isset($usuario) && $usuario != []) { ?>
                <?php foreach($categorias as $categoria){ ?> 
                    <li class="nav-item mx-2">
                        <a href="#" class="nav-link text-white"><?php echo $categoria ?></a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </nav>
</header>