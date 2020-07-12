<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58848711-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-58848711-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toda vida importa. Tributo às vítimas da Covid-19 no RS</title>
    <meta name="description" content="Memorial reunindo informações sobre vítimas do coronavírus no Estado do Rio Grande do Sul">
    <meta name="author" content="Antonio Paulo Serpa Antunes">
    <meta name="twitter:card"         value="summary" />
	<meta name="twitter:creator" content="@psantunes" />
    <meta property="og:url"           content="https://jornalismodigital.jor.br/covidrs" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="Toda vida importa" />
    <meta property="og:description"   content="Tributo às vítimas da Covid-19 no Rio Grande do Sul" />
    <meta property="og:image"         content="https://jornalismodigital.jor.br/covidrs/img/card2.png" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width"         content="600" />
    <meta property="og:image:height"         content="315" />
    <link href="favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="main">


    <header>
    <section id="alert">
        <h6>Projeto encerrado em 5 de julho de 2020. <a href="#" onclick="openNav()">Saiba mais</a>.</h6>
    </section>


                <button class="openbtn" onclick="openNav()">☰</button>
                <h1>Toda vida importa.</h1>
                <h2>memorial para as vítimas da Covid-19 no Rio Grande do Sul***</h2>
    </header>



    <article>

        <div class="row">

        

        <?php
                include 'config.php';

                $sql = "select * from covidrs order by id ASC";
                $resultado = mysqli_query($connection, $sql);

                /* Mostrando os resultados em HTML */ 
                while ($line = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            echo "<div class='card'>
                            <img class='card-img-top' src='img/";
                            if (($line['avatar'] == null) && ($line['genero'] == "F" )) {
                                echo "avatarf.png";
                            } elseif (($line['avatar'] == null) && ($line['genero'] == "M" )) {
                                echo "avatarm.png";
                            } else {
                                echo $line['avatar'];
                            }
                            echo "'>
                            <div class='card-block'>
                                <h5 class='numero' data-toggle='tooltip' title='".$line['id']."ª vítima da Covid-19 no RS'>".$line['id']."</h5>
                                <h4 class='card-title mt-3'>";
                                if ($line['nome'] != null) {
                                    echo $line['nome']."</h4><div class='card-text'>";
                                    if ($line['genero'] == "F") {
                                        echo "Mulher, ";
                                    } elseif ($line['genero'] == "M") {
                                        echo "Homem, ";
                                    } else {
                                        echo "Transexual, ";
                                    }
                                    echo $line['idade']." anos, residente em ";
                                } else {
                                    if ($line['genero'] == "F") {
                                        echo "Mulher, ";
                                    } elseif ($line['genero'] == "M") {
                                        echo "Homem, ";
                                    } else {
                                        echo "Transexual, ";
                                    }
                                    
                                    echo $line['idade']." anos</h4><div class='card-text'>Residente em ";
                                }
                                echo $line['cidaderesidencia'].", faleceu ";
								if ($line['hospital'][0] == "H") {
									echo "no ";
								} elseif ($line['hospital'][0] == "U" || $line['hospital'][0] == "F") {
									echo "na ";
								} else  {
									echo "em ";
								}

                                echo $line['hospital'].", em ".$line['cidadeobito']."</div>
                            </div>
                            <div class='card-footer'>
                                <small><a href='".$line['link1']."' target='_blank'>Fonte:</small> <i class='fas fa-link' title='link'></i></a>";
                            if ($line['link2'] != NULL) {
                                echo " | <a href='".$line['link2']."' target='_blank'><i class='fas fa-link' title='link'></i></a>";
                            } 
                            echo "</div></div>";
                            $lastdate = $line['datapub'];
                        }
            mysqli_close($connection);
        ?>
            </div>
    </article>

    <aside id="mySidebar">
        <a href="javascript:void(0)" class="close" onclick="closeNav()">×</a>

        <p>A plataforma <strong>Toda vida importa</strong> foi criada pelo jornalista e desenvolvedor Antonio Paulo Antunes em 11 de abril de 2020 com o
        objetivo de ser mais um ferramenta de conscientização da população no combate a epidemia de Covid-19 no Rio Grande do Sul. Outras motivações do projeto
        estão <a href="https://www.jornalismodigital.jor.br/porque-toda-a-vida-importa-uma-contribuicao-no-combate-a-covid-19/">descritas neste post</a>.</p>
        <p>Diariamente o site era atualizado tomando como base o registro de óbitos feito pela Secretaria Estadual da Saúde nas redes sociais,
        complementada com informações divulgadas por secretarias municipais ou pela imprensa. As fotos publicadas na página foram extraídas das redes sociais
        das vítimas que tiveram seus nomes divulgados ou são reproduções de veículos de comunicação.</p>
        <p>Infelizmente, em razão da escalada dos óbitos por coronavírus no RS, a coleta de dados, que era tocado por uma única pessoa, foi encerrada, mas
        a página seguirá no ar, relembrando as primeiras 727 vítimas. Para complementar, corrigir ou solicitar a inclusão de dados de familiares ou
        conhecidos, <a href="mailto:pauloserpaantunes@gmail.com">envie um e-mail</a>.</p>



        <p>Recomendamos também o acesso aos sites <a href="https://inumeraveis.com.br/">Inumeráveis</a> e <a href="https://www.facebook.com/memorialcoronabrasil/">Memorial das Vítimas do Coronavírus no Brasil</a>.</p>
        
        <p>Última atualização em 12/7/2020.</p>

    </aside>

    
    <footer>        
        <p><small>Desenvolvido por <a href="https://jornalismodigital.jor.br/">Antonio Paulo Serpa Antunes</a>. Código-fonte disponível no <a href="https://github.com/psantunes/Covid-RS">Github</a>.</p></small>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/a827d7830e.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });

        function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("mySidebar").style.padding = "65px 15px 0 15px";
        document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("mySidebar").style.padding = "0";
        document.getElementById("main").style.marginLeft= "0";
        }
    </script>

</body>
</html>