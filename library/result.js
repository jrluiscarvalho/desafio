$(document).ready(function(){

    $.getJSON('https://api.pagar.me/1/transactions?api_key=ak_test_2EwySr86NDipHLwhXGs8b9Aa3ieYxN', function(data){

        //var form = $("#form_result");

        console.log(data);
        $("#form_result #object").val(data[0].object);
        $("#form_result #status").val(data[0].status);
        $("#form_result #refuse_reason").val(data[0].refuse_reason);
        $("#form_result #amount").val(data[0].amount);
        $("#form_result #card_holder_name").val(data[0].card_holder_name);
        $("#form_result #split_rules_parts").val(data[0].split_rules.length);


        var content='';

        for(var i = 0; i <  data[0].split_rules.length; i++){

            var split_rules_percentage = data[0].split_rules[i].percentage;
            var split_rules_amount = data[0].split_rules[i].percentage * (data[0].amount   / 100);

            content +=
                '<div class="form-group col-lg-8 col-md-8">'+
                    '<label for="split_rules_percentage">Split Rules Percentage ' + (i+1) +':</label>'+
                    '<input class="form-control" type="text" name="split_rules_percentage" id="split_rules_percentage" value="'+split_rules_percentage+'">'+
                '</div>';


            content +=
                '<div class="form-group col-lg-8 col-md-8">'+
                    '<label for="split_rules_amount">Split Rules Amount ' + (i+1) +':</label>'+
                    '<input class="form-control" type="text" name="split_rules_amount" id="split_rules_amount" value="'+split_rules_amount+'">'+
                '</div>';

            /*content += 'split_rules_percentage ' ': <input type="text" name="split_rules_percentage" id="split_rules_percentage" value="'+split_rules_percentage+'"><br/>';

            content += 'split_rules_amount ' + (i+1) + ': <input type="text" name="split_rules_amount" id="split_rules_amount" value="'+split_rules_amount+'"><br/>';*/


        }
        console.log(content);
        $("#form_result #split_rules_parts").html(content);


    });

});