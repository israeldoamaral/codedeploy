<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página PHP com layout da imagem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>
                <a href="#">Home</a>
            </h1>
            <nav>
                <ul>
                    <li><a href="#" class="btn btn-primary">Pulo de Gato</a></li>
                    <li><a href="#" class="btn btn-primary">Banco de Dados</a></li>
                    <li><a href="#" class="btn btn-primary">Imagens</a></li>
                    <li><a href="#" class="btn btn-primary">S3</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <section class="meta-data">
                <h2>Meta-Data</h2>
                <ul>
                <?php
                $url = "http://169.254.169.254/latest/meta-data/instance-id";
                $instance_id = file_get_contents($url);
                echo "<h1><font color='green'>Instance ID: <b>" . $instance_id . "</b><br/></font></h1>";
                ?>
                </ul>
            </section>
           
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Copyright &copy; 2024 - Todos os direitos reservados</p>
        </div>
    </footer>
</body>
</html>

