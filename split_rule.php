<?php
    require('pagarme-php/Pagarme.php');

    Pagarme::setApiKey('ak_test_2EwySr86NDipHLwhXGs8b9Aa3ieYxN');

    $card_hash = $_POST['card_hash'];

    $transaction = new PagarMe_Transaction(array(
        'amount' => 1000,
        'card_hash' => $card_hash,
        'customer' => array(
            'name' => 'John Appleseed',
            'document_number' => '11111111111',
            'email' => 'jappleseed@apple.com',
            'address' => array(
                'street' => 'Av. Brigadeiro Faria Lima',
                'neighborhood' => 'Jardim Paulistano',
                'zipcode' => '01452000',
                'street_number' => '2941',
                'complementary' => '8º andar'
            ),
            'phone' => array(
                'ddd' => '11',
                'number' => '30713261'
            )),
        'split_rules' => array(
        array(
            'recipient_id' => 're_cistacmcc039yyp6ess851oax',
            'charge_processing_fee' => true,
            'liable' => true,
            'percentage' => '50',

        ),

        array(
            'recipient_id' => 're_cistac5kg03c5ap6dol4kj5lo',
            'charge_processing_fee' => true,
            'liable' => true,
            'percentage' => '50',
        )
        )
    ));

    $transaction->charge();

    $status = $transaction->status; // status da transação



