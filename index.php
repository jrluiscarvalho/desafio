<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://assets.pagar.me/js/pagarme.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="library/creditCard.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Dados do Cartão</h1>
        </div>
        <form id="payment_form" action="http://localhost/desafio/split_rule.php" method="POST">
            <div class="form-group col-lg-8 col-md-8">
                <label for="card_number">Número do Cartão: </label>
                <input class="form-control" type="text" id="card_number"/>
            </div>
            <br/>
            <div class="form-group col-lg-8 col-md-8">
                <label for="card_holder_name">Nome (como escrito no cartão): </label>
                <input class="form-control" type="text" id="card_holder_name"/>
            </div>
            <br/>
            <div class="form-group col-lg-8 col-md-8">
                <label for="card_expiration_month">Mês de expiração: </label>
                <input class="form-control" type="text" id="card_expiration_month"/>
            </div>
            <br/>
            <div class="form-group col-lg-8 col-md-8">
                <label for="card_expiration_year">Ano de expiração: </label>
                <input class="form-control" type="text" id="card_expiration_year"/>
            </div>
            <br/>
            <div class="form-group col-lg-8 col-md-8">
                <label for="card_cvv">Código de segurança: </label>
                <input class="form-control" type="text" id="card_cvv"/>
            </div>
            <br/>
            <div id="field_errors">
            </div>
            <br/>
            <div class="form-group col-lg-8 col-md-8">
            <input class="btn btn-primary" type="submit"></input>
            </div>
        </form>
    </div>
</body>
</html>