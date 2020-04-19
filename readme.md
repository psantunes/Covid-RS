# Toda Vida Importa

Página criada para conscientizar a população para a gravidade da Covid-19, mostrando que as vítimas do coronavírus não são apenas números dentro de uma estatística. O site reúne informações sobre as vítimas no Rio Grande do Sul.

O site foi criado e é mantido por Antonio Paulo Serpa Antunes, jornalista e estudante de Tecnologia em Sistemas para Internet do IFRS.

## Projeto

O site foi desenvolvido ao longo de três dias, incluindo a pesquisa e coleta de dados dos primeiros 16 óbitos. Com o objetivo de colocar rapidamente a página optou-se por um desenvolvimento classico: com a criação de um banco de dados em MySQL e um único script PHP que exibe os cards em HTML. Para construção rápida dos cards, adotou-se o Bootstrap.

## Banco de Dados

O banco de dados possui uma única tabela, cujos campos estão descritos no arquvio sql/create.sql. O id dos registros também é o número de ordem dos óbitos, de forma que o registro de óbitos no BD precisa ser sequencial.

A conexão com o banco precisa ser setada num arquivo config.php.

## Desenvolvimento Futuro

O site deve ganhar um formulário para receber informações dos familiares das vítimas.

Uma página de cadastro de óbitos ainda deverá ser criada (atualmente o cadastro é feito diretamente no banco).

Dados adicionais como a data dos óbitos ou as comorbidades das vítimas estão sendo armazenadas no banco de dados e futuramente poderão ser reunidas em tabelas e gráficos para fins estatísticos.
