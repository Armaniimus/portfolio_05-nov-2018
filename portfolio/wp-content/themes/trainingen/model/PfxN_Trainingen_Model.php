<?php
    class PfxN_Trainingen_Model {
        public function __construct() {
            $this->DataHandler = new PfxN_DataHandler();
        }
        
        public function public_updateTrain( $array) {
			
//             $bool = $this->checkLessExistence($trainingID);
			$bool = $this->checkLessExistence( $array["training_ID"] );
            
			if ( $bool ) {
				$this->updateTrain($array);
			} else {
				$this->createTrain($array);
			}
        }
        
        public function checkLessExistence($trainID) {
            if ( $this->existTrain($trainID) ) {
                return true;
                
            } else {
                return false;
            }
        }
		
        private function updateTrain($array) {
            $SQL = 'UPDATE `wp_Trainingen`
			SET paraf1 = :paraf1, 
				paraf2 = :paraf2, 
				paraf3 = :paraf3, 
				paraf4 = :paraf4, 
				paraf5 = :paraf5, 
				paraf6 = :paraf6, 
				paraf7 = :paraf7, 
				title2 = :title2, 
				title3 = :title3, 
				title4 = :title4, 
				title5 = :title5, 
				title6 = :title6, 
				title7 = :title7, 
				trainID = :trainer_IDS,
				hoofdTrain = :hoofdTrain
			WHERE train_ID = :training_ID;';
            
            return $this->DataHandler->create($SQL, $array);
        }
		
        private function createTrain($array) {
            $SQL = 'INSERT INTO `wp_Trainingen`(
				train_ID,
				paraf1,
				paraf2,
				paraf3,
				paraf4,
				paraf5,
				paraf6,
				paraf7,
				title2,
				title3,
				title4,
				title5,
				title6,
				title7,
				trainID,
				hoofdTrain
			) 
            VALUES (
				:training_ID,
				:paraf1,
				:paraf2,
				:paraf3,
				:paraf4,
				:paraf5,
				:paraf6,
				:paraf7,
				:title2,
				:title3,
				:title4,
				:title5,
				:title6,
				:title7,
				:trainer_IDS,
				:hoofdTrain
			)';
            
            return $this->DataHandler->update($SQL, $array);
        }
        
//         private function removePremiumLess($lessID) {
//             if ( existTrain($trainID) ) {
//                 $this->deleteLess($lessID);
//             }
//         }
        
        private function existTrain($trainID) {
            $SQL = 'SELECT train_id FROM `wp_Trainingen`
            WHERE train_ID = :trainID';
            
            $train = $this->DataHandler->read($SQL, [
                'trainID' => $trainID
            ], false);
            
            return $train;
        }
		
		public function readTrain($trainID) {
            $SQL = 'SELECT * FROM `wp_Trainingen`
            WHERE train_ID = :trainID';
            
            $less = $this->DataHandler->read($SQL, [
                'trainID' => $trainID
            ], false);
            
            return $less;
        }
		
		public function readAllTrain($INStatement) {
            $SQL = 'SELECT train_ID FROM `wp_Trainingen`
            WHERE train_ID IN ' . $INStatement;
			
            $train = $this->DataHandler->read($SQL);
            
            return $train;
        }
        
//         private function deleteLess($lessID) {
//             $SQL = 'DELETE FROM `wp_Elearning_Premium_lessen` 
//             WHERE less_ID = :lessID';
            
//             return $this->DataHandler->delete($SQL, [
//                 'lessID' => $lessID,
//             ]);
//         }
        
//         private function createLess($trainID) {
//             $SQL = 'INSERT INTO `wp_Trainingen`(`train_ID`) 
//             VALUES (:trainID)';
            
//             return $this->DataHandler->create($SQL, [
//                 'trainID' => $trainID
//             ]);
//         }
        
        
    }