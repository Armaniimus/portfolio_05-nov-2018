<?php 
    class PfxN_Trainingen_Controller {
        /**
         * this function initializes the settings for the upload.
         */
        public function __construct() {
            $this->model = new PfxN_Trainingen_Support_Model();
            $this->Trainingen_Model = new PfxN_Trainingen_Model();
			
            //get less info
            $trainArray = explode('?', $_POST['train']);
            
            $trainID = array_shift($trainArray);
            $_POST['trainID'] = $trainID;
            
            $trainSlug = array_shift($trainArray);
            $_POST['trainSlug'] = $trainSlug;
            
			
			if (!isset ($_POST['paraf1']) ){
				$_POST['paraf1'] = "";
			}
			if (!isset ($_POST['paraf2']) ){
				$_POST['paraf2'] = "";
			}
			if (!isset ($_POST['paraf3']) ){
				$_POST['paraf3'] = "";
			}
			if (!isset ($_POST['paraf4']) ){
				$_POST['paraf4'] = "";
			}
			if (!isset ($_POST['paraf5']) ){
				$_POST['paraf5'] = "";
			}
			if (!isset ($_POST['paraf6']) ){
				$_POST['paraf6'] = "";
			}
			if (!isset ($_POST['paraf7']) ){
				$_POST['paraf7'] = "";
			}
			
			
			if (!isset ($_POST['title1']) ){
				$_POST['title1'] = "";
			}
			if (!isset ($_POST['title2']) ){
				$_POST['title2'] = "";
			}
			if (!isset ($_POST['title3']) ){
				$_POST['title3'] = "";
			}
			if (!isset ($_POST['title4']) ){
				$_POST['title4'] = "";
			}
			if (!isset ($_POST['title5']) ){
				$_POST['title5'] = "";
			}
			if (!isset ($_POST['title6']) ){
				$_POST['title6'] = "";
			}
			if (!isset ($_POST['title7']) ){
				$_POST['title7'] = "";
			}
			
            if (isset ($_POST['op']) && $_POST['op'] == 'update') {
                $this->update( $trainSlug, $trainID );
                
            } else {
                $this->view( $trainSlug, $trainID );  
            }
        }
        
        /**
         * this function controls the view
         */
        private function view($slug, $ID ) {
            $select = $this->model->selectLess();
           
			if ($select === false) {
                $message = "
                <b>Notitie</b><br>
                De gekozen combinatie samen bevat geen lessen.<br>
                Selecteer aub een andere combinatie<br>";
                
            } elseif ($slug !== NULL){			
				if ($array = $this->Trainingen_Model->readTrain($ID)) {
					$paraf1 = $array['paraf1'];
					$paraf2 = $array['paraf2'];
					$paraf3 = $array['paraf3'];
					$paraf4 = $array['paraf4'];
					$paraf5 = $array['paraf5'];
					$paraf6 = $array['paraf6'];
					$paraf7 = $array['paraf7'];
					
					$title2 = $array['title2'];
					$title3 = $array['title3'];
					$title4 = $array['title4'];
					$title5 = $array['title5'];
					$title6 = $array['title6'];
					$title7 = $array['title7'];
					
					$trainerIDS = $array['trainID'];
					$hoofdTrain = $array['hoofdTrain'];
				} else {
					$paraf1 = '';
					$paraf2 = '';
					$paraf3 = '';
					$paraf4 = '';
					$paraf5 = '';
					$paraf6 = '';
					$paraf7 = '';
					
					$title2 = '';
					$title3 = '';
					$title4 = '';
					$title5 = '';
					$title6 = '';
					$title7 = '';
					
					$trainerIDS = '';
					$hoofdTrain = '';
				}
				
				$trainerIDS = explode(',', $trainerIDS);				
				$checkBoxes = $this->checkboxConstructor($trainerIDS);
				
				$trainerOptions = $this->hoofdTrainOptionConstructor( $hoofdTrain );
				
				$content = ELEARN_ROOT . '/view/EditTraining-form.php';
            } 
            require_once(ELEARN_ROOT . '/view/EditTraining.php');
        }
        
        private function update( $trainSlug, $trainID ) {			
            $paraf1 = $_POST['paraf1'];
			$paraf2 = $_POST['paraf2'];
			$paraf3 = $_POST['paraf3'];
			$paraf4 = $_POST['paraf4'];
			$paraf5 = $_POST['paraf5'];
			$paraf6 = $_POST['paraf6'];
			$paraf7 = $_POST['paraf7'];
			
			$title2 = $_POST['title2'];
			$title3 = $_POST['title3'];
			$title4 = $_POST['title4'];
			$title5 = $_POST['title5'];
			$title6 = $_POST['title6'];
			$title7 = $_POST['title7'];
			
			$trainerIDS = $this->trainersCompressor();
			$hoofdTrain = $_POST['hoofdTrain'];
			
            $this->Trainingen_Model->public_updateTrain(
				[
					'training_ID' 	=> $trainID,
					
				 	'paraf1'		=> $paraf1,
					'paraf2'		=> $paraf2,
					'paraf3'		=> $paraf3,
					'paraf4'		=> $paraf4,
					'paraf5'		=> $paraf5,
					'paraf6'		=> $paraf6,
					'paraf7' 		=> $paraf7,
					
					'title2' 		=> $title2,
					'title3' 		=> $title3,
					'title4' 		=> $title4,
					'title5' 		=> $title5,
					'title6' 		=> $title6,
					'title7' 		=> $title7,
					
					'trainer_IDS' 	=> $trainerIDS,
					'hoofdTrain'	=> $hoofdTrain,
				]
			);
            $this->view( $trainSlug, $trainID );
        }
        
		private function checkboxConstructor($checkedArray) {
			$array = TRAINERS_ARRAY;
			
			$total = count($array);
			$rest = $total % 3;
			$itemsPerRow = ceil($total / 3);
			
			$itemCount = 0;
			$htmlConstruct = "";
			
			for ($i=0; $i<3; $i++) {
				$extraItem = 0;
				if ($rest > $i) {
					$extraItem = 1;
				}
				
				$checkBoxes = "";
				for ($ii=0; $ii<$itemsPerRow + $extraItem; $ii++) {
					$checked = '';
					if ( in_array($array[$itemCount]["id"] , $checkedArray) ) {
						$checked = "checked";
					}
					
					$checkBoxes .= "<input id='checkboxes-$itemCount' type='checkbox' name='checkbox$itemCount' value='" . $array[$itemCount]["id"] . "' $checked>";
					$checkBoxes .= "<label for='checkboxes-$itemCount'>" . $array[$itemCount]["name"] . "</label><br>";
					
					$itemCount++;
				}
				$htmlConstruct .= "<div class='col-4'>" . $checkBoxes . "</div>";
			}
			return "<div class='row' style='width: 75%'>" . $htmlConstruct . "</div>";
		}
		
		private function hoofdTrainOptionConstructor($ID = NULL) {
			$array = TRAINERS_ARRAY;
			
			$options = "<option>----</option>";
			for($i=0; $i<count($array); $i++) {
				$itemID 	= $array[$i]["id"];
				$itemName 	= $array[$i]["name"];
				
				$selected = '';
				if ( (INT)$ID === (INT)$itemID) {
					$selected = "selected";
				}
				$options .= "<option value='$itemID' $selected>$itemName</option>";				
			}
			return $options;
		}
		
		private function trainersCompressor() {
			$max = count(TRAINERS_ARRAY);
			$i = 0;
			$trainerIds = "";
			while($i <= $max) {
				if ( isset( $_POST["checkbox$i"] ) ) {
					if ($trainerIds == "") {
						$trainerIds .= $_POST["checkbox$i"];
					} else {
						$trainerIds .= "," . $_POST["checkbox$i"];
					}
				}
				
				$i++;
			}
			return $trainerIds;
		}
    }
?>