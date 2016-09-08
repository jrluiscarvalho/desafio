<?php

    require("pagarme-php/Pagarme.php");
    Pagarme::setApiKey("ak_test_2EwySr86NDipHLwhXGs8b9Aa3ieYxN");

    $account = new Pagarme_Bank_Account(array(
        "bank_code" => "341",
        "agencia" => "0932",
        "agencia_dv" => "5",
        "conta" => "58054",
        "conta_dv" => "1",
        "document_number" => "26268738888",
        "legal_name" => "Luis Junior"
    ));
    $account->create();