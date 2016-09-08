$(document).ready(function(){

    PagarMe.encryption_key = "ek_test_nkruulWna9vpQJwRxJJjdunAI42Mjp";

    var form = $("#payment_form");

    form.submit(function(event){

        var creditCard = new PagarMe.creditCard();
        creditCard.cardHolderName = $("#payment_form #card_holder_name").val();
        creditCard.cardExpirationMonth = $("#payment_form #card_expiration_month").val();
        creditCard.cardExpirationYear = $("#payment_form #card_expiration_year").val();
        creditCard.cardNumber = $("#payment_form #card_number").val();
        creditCard.cardCVV = $("#payment_form #card_cvv").val();

        var fieldErrors = creditCard.fieldErrors();

        var hasErrors = false;
        for(var field in fieldErrors) {hasErrors = true; break;}

        if (hasErrors) {
            console.log(fieldErrors);
        }else{
            creditCard.generateHash(function(cardHash){
                form.append($('<input type="hidden" name="card_hash">').val(cardHash));
                form.get(0).submit();
            });
        }

        return false;


    });


});