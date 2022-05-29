<?php

    session_start(); 

    $xml = new XMLWriter();
    $xml->openUri('test.xml');
    $xml->startDocument('1.0', 'utf-8');
    $xml->writeElement('foo', 'bar');

?> 


