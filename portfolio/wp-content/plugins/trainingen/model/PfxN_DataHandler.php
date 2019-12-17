<?php

    /**
     *  The purpose of this class is to control all database queries
     *  and have a namespace for them so you can easily see whats happening
     */
    class PfxN_DataHandler {
        function __construct() {
            // use wordpress constants to make the connection or throw an error
            try {
                $server = DB_HOST;
                $db = DB_NAME;
                $user = DB_USER;
                $pass = DB_PASSWORD;
                
                // Create connection
                $this->conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);

                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            } catch(PDOException $e) {
                echo "Fatale noomplug error: " . $e->getMessage();
                echo " <br> ";
                echo " <br> ";
            }
        }
    
        /**
         * @description runs the query or echo's your error
         * @param string $sql an valid sql query
         * @param array $bindings $bindings for your bound parameters
         */
        private function crud($sql, $bindings) {
            try {
                // prepare and bind
                $query = $this->conn->prepare($sql);
                if ( $query->execute($bindings) ) {
                    return $query; 
                    
                } else {
                    return false;
                }
            
            } catch(PDOException $e) {
                echo " Fatale noomplug error: " . $e->getMessage();
                echo " <br> ";
                echo " <br> ";
            }
        }
        
        /**
         * @description handles read query
         * @param string $sql an valid sql query
         * @param array $bindings (optional) default = [] $bindings for your bound parameters
         * @param boolean $multible (optional) default = true sets if you want more than 1 item
         */
        public function read($sql, $bindings = [], $multible = true) {
// 			$sql2 = "show tables";
// 			$data2 = $this->crud($sql2, []);
// 			$result2 = $data2->fetchAll(PDO::FETCH_ASSOC);
			
// 			echo "<pre>";
// 			var_dump($result2);
// 			echo "</pre>";
			
            $data = $this->crud($sql, $bindings);

            if ($multible) {
                $result = $data->fetchAll(PDO::FETCH_ASSOC);
            
            } else {
                $result = $data->fetch(PDO::FETCH_ASSOC);
            }
            
            return $result;
        }
        
        /**
         * @description handles create query
         * @param string $sql an valid sql query
         * @param array $bindings (optional) default = [] $bindings for your bound parameters
         */
        public function create($sql, $bindings = []) {
            if( $this->crud($sql, $bindings)) {
                $this->lastInsertId = $this->conn->lastInsertId();
                return TRUE;
                
            } else {
                return FALSE;
            };
        }
    
        /**
         * @description handles update query
         * @param string $sql an valid sql query
         * @param array $bindings (optional) default = [] $bindings for your bound parameters
         */
        public function update($sql, $bindings = []) {
            if( $this->crud($sql, $bindings) ) {
                return TRUE;
                
            } else {
                return FALSE;
            };
        }
        
        /**
         * @description handles delete query
         * @param string $sql an valid sql query
         * @param array $bindings (optional) default = [] $bindings for your bound parameters
         */
        public function delete($sql, $bindings = []) {
            if( $this->crud($sql, $bindings)) {
                return TRUE;
                
            } else {
                return FALSE;
            };
        }
    }

 ?>
