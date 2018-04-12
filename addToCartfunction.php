<?php
    $mongoClient = new MongoClient();
    $db = $mongoClient->ecommerce;
    $collection = $db->customers;

    $mongoClient->close();
?>