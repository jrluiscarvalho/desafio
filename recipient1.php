<?php

/*criando recebedor 1*/
    require("pagarme-php/Pagarme.php");
    Pagarme::setApiKey("ak_test_2EwySr86NDipHLwhXGs8b9Aa3ieYxN");

    $recipient = new PagarMe_Recipient(array(
        "transfer_interval" => "weekly",
        "transfer_day" => 5,
        "transfer_enabled" => true,
        "automatic_anticipation_enabled" => true,
        "anticipatable_volume_percentage" => 85,
        "bank_account_id" => 16558452
    ));
    $recipient ->create();
