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
            (1, 1, 'Sprinkled', '1.29', '1 Piece'),
            (1, 1, 'Chocolate', '1.49', '1 Piece'),
            (1, 1, 'Maple', '1.49', '1 Piece'),
            (2, 2, 'Dunkaccino', '1.69', 'Small'),
            (3, 3, 'Steak Long Jim', '2.29', 'Steak Wrap'),

            (1, 1, 'Slice of Turkey', '1.29', 'Small'),
            (1, 1, 'Water', '0.10', '1 Glass'),
            (1, 1, 'Meatloaf', '1.49', 'Small'),
            (2, 2, 'Orange juice', '1.69', '1 Glass'),
            (3, 3, 'Apple juice', '2.29', '1 Glass'),

            (1, 1, 'Slice of chicken', '1.29', 'Small'),
            (1, 1, 'Granberry juice', '0.10', '1 Glass'),
            (1, 1, 'Grilled beef', '1.49', 'Small'),
            (2, 2, 'Cola cola', '1.69', '1 Glass'),
            (3, 3, 'Pepsi', '2.29', '1 Glass'),

            (1, 1, 'Chicken Breast', '1.29', 'Small'),
            (1, 1, 'Sisi', '0.10', '1 Glass'),
            (1, 1, 'Grilled Duck', '1.49', 'Small'),
            (2, 2, 'Redbull', '1.69', '1 Can'),
            (3, 3, 'Fanta', '2.29', '1 Glass'),

            (1, 1, 'Chicken Delux', '1.29', 'Small'),
            (1, 1, 'Heijneken', '0.10', '1 Glass'),
            (1, 1, 'Grilled Deer', '1.49', 'Small'),
            (2, 2, 'Monster', '1.69', '1 Can'),
            (3, 3, 'Cola light', '2.29', '1 Glass'),

            (1, 1, 'Hot coffee', '1.29', '1 Cup'),
            (1, 1, 'Maple syrup', '1.49', '1 Jar'),
            (1, 1, 'Apple pie', '1.49', '1 Piece'),
            (2, 2, 'Steak n go', '1.69', 'Small'),
            (3, 3, 'Milk', '2.29', '1 Glass');
        ";

        $localConn = $this->conn->prepare($sql);
        $localConn->execute();
    }

    function __destruct() {
        $this->conn = NULL;
    }
}


?>
