# Toda Vida Importa

Página criada para conscientizar a população para a gravidade da Covid-19, mostrando que as vítimas do coronavírus não são apenas números dentro de uma estatística. O site reúne informações sobre as vítimas no Rio Grande do Sul.

O site foi criado e é mantido por Antonio Paulo Serpa Antunes, jornalista e estudante de Tecnologia em Sistemas para Internet do IFRS.


## Projeto

O site foi desenvolvido ao longo de três dias, incluindo a pesquisa e coleta de dados dos primeiros 16 óbitos. Com o objetivo de colocar rapidamente a página optou-se por um desenvolvimento classico: com a criação de um banco de dados em MySQL e um único script PHP que exibe os cards em HTML. Para construção rápida dos cards, adotou-se o Bootstrap.

## Banco de Dados

O banco de dados possui uma única tabela, cujos campos estão descritos no arquvio sql/create.sql. O id dos registros também é o número de ordem dos óbitos, de forma que o registro de óbitos no BD precisa ser sequencial.

A conexão com o banco precisa ser setada num arquivo config.php.

## Desenvolvimento Futuro

O site previa outras duas fases de desenvolvimento: uma área de administração, que permitiria o CRUD dos dados, e uma ferramenta de busca e filtro de óbitos, para facilitar a consulta aos dados.

Informações adicionais, como a data dos óbitos ou as comorbidades das vítimas, quando disponíveis, também foram armazenados no banco de dados para uso futuro com fins estatísticos.

## Encerramento do projeto

Infelizmente, o projeto teve que ser descontinuidado em julho de 2020, em razão de outros compromissos pessoais e da escalada de óbidos por Covid-19 no Rio Grande do Sul.
