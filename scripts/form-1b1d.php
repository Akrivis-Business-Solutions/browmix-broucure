<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Browmix enquiry',
    'email_message' => 'You have a new form submission from akrivis.org',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'akrivisbusinesssolutions@gmail.com',
    'to' => 'akrivisbusinesssolutions@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>