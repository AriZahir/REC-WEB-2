<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manter Aluno e Professor</title>
    <link href="./arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="./arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("./menu.php") ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Dev Web 2</h1>
        <p class="lead">Objetivo: Desenvolver aplicações WEB utilizando servidor apache, linguagem PHP, biblioteca
            jQuery, acesso a banco de dados e técnicas de orientação a objetos seguindo o padrão MVC para desenvolver
            aplicações completas.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms1.png" class="d-block w-100" alt="estudantes do instituto federal de mato grosso do sul, sentados sorrindo para camera, enquanto comem :)">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="./arquivos/imagens/ifms2.jpeg" class="d-block w-100" alt="Diretor do instituto federal de mato grosso do sul, explicando para os pais algo">
                        </div>
                        <div class="carousel-item">
                            <img src="./arquivos/imagens/ifms3.jpeg" class="d-block w-100" alt=" Servidores do instituto federal de mato grosso do sul, fazendo anotações de uma reunião">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <a href="https://www.ifms.edu.br/cursos/idiomas"><img src="./arquivos/imagens/cursos-onlines.png" class="card-img-top" alt="Logo de curos online de idioma, dos instituto Federal de Mato Grosso do sul"></a>
                    <div class="card-body">
                        <h5 class="card-title">FAÇA SUA INSCRIÇÃO !!</h5>
                        <p class="card-text">Novos cursos - confira já os cursos em seu campus 
                        <a href="https://www.ifms.edu.br/cursos/idiomas" class="btn btn-primary">Editais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>