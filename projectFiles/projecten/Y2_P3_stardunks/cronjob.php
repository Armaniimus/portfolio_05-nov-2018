<?php
require_once 'config.php';
$ResetController = new Cronjob(DB_NAME, DB_USERNAME, DB_PASS, DB_SERVER_ADRESS, DB_TYPE);

/**
 *
 */
class Cronjob {

    function __construct($dbName, $username, $pass, $serverAdress, $dbType) {
        $this->conn = new PDO("$dbType:host=$serverAdress;dbname=$dbName", $username, $pass);

        $sql =
            "DELETE FROM `products` WHERE 1=1;

            ALTER TABLE `products`
            MODIFY `product_id` int(11) AUTO_INCREMENT, AUTO_INCREMENT=1;

            INSERT INTO `products` (`product_type_code`, `supplier_id`, `product_name`, `product_price`, `other_product_details`) VALUES
            (1, 1, 'sprinkled', '1.29', '1 pc'),
            (1, 1, 'Chocolate', '1.49', '1 pc'),
            (1, 1, 'Maple', '1.49', '1 pc'),
            (2, 2, 'Dunkaccino', '1.69', 'Small'),
            (3, 3, 'Steak Long Jim', '2.29', 'Steak Wrap');
        ";

        $localConn = $this->conn->prepare($sql);
        $localConn->execute();
    }

    function __destruct() {
        $this->conn = NULL;
    }
}


?>
