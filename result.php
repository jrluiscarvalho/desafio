<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="library/result.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <h1>Resultado</h1>
        </div>
        <form id="form_result" class>
            <div class="form-group col-lg-8 col-md-8">
                <label for="object">Object:</label>
                <input class="form-control" type="text" name="object" id="object">
            </div>
            <div class="form-group col-lg-8 col-md-8">
                <label for="status">Status:</label>
                <input class="form-control" type="text" name="status" id="status">
            </div>
            <div class="form-group col-lg-8 col-md-8">
                <label for="refuse_reason">Refuse Reason:</label>
                <input class="form-control" type="text" name="refuse_reason" id="refuse_reason">
            </div>
            <div class="form-group col-lg-8 col-md-8">
                <label for="amount">Amount:</label>
                <input class="form-control" type="text" name="amount" id="amount">
            </div>
            <div class="form-group col-lg-8 col-md-8">
                <label for="card_holder_name">Card Holder Name:</label>
                <input class="form-control" type="text" name="card_holder_name" id="card_holder_name">
            </div>
            <div class="form-group col-lg-8 col-md-8">
                <h2>Split Rules</h2>
            </div>
            <div class="form-group col-lg-8 col-md-8">
                <label for="split_rules_parts">Split Rules Parts:</label>
                <input class="form-control" type="text" name="split_rules_parts" id="split_rules_parts">
            </div>
            <div id="split_rules_parts">
            </div>
            <div class="form-group col-lg-8 col-md-8">
            </div>
        </form>
    </div>
</body>
</html>