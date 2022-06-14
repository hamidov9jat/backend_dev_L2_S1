<?php

include_once "connect_db.inc";

global $dbh;

$handle = fopen("./MOCK_DATA_generator_customers_withSemicolonForImportOrPDOinsert - Copy.csv", "r");

$row_value = fgetcsv($handle, 1000, ';');

$query = "INSERT INTO `customers` (customer_id, customerTitle, customerLastname, customerFirstname,
                         customerStreetAddress, customerStreetAddress2, customerZipCode,
                         customerCity, customerPhone, customerEmail, customerRegisterDate)
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$statement = $dbh->prepare($query);


while ($row_value = fgetcsv($handle, 1000, ';')) {
    list($customer_id, $customerTitle, $customerLastname, $customerFirstname,
        $customerStreetAddress, $customerStreetAddress2, $customerZipCode,
        $customerCity, $customerPhone, $customerEmail, $customerRegisterDate) = $row_value;
    $statement->execute();
}

//$statement->execute();