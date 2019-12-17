<?php

/**
 * This function starts the activation
 */
function run_trainingen_activate() {
    // clear the permalinks after the post type has been registered
    
    $PluginThemeFiles = [
		[ ELEARN_ROOT . '/themeInstallFiles/single-trainingen.php', "/single-trainingen.php" ],
		[ ELEARN_ROOT . '/themeInstallFiles/archive-trainingen.php', "/archive-trainingen.php"],
	];
	
	for ( $i = 0; $i < count( $PluginThemeFiles ); $i++) {
		if ( file_exists( $PluginThemeFiles[$i][0]) ) {
			$themeFile = get_stylesheet_directory() . $PluginThemeFiles[$i][1];
// 			if ( !file_exists($themeFile) ) {
				$themeFileHandle = fopen($themeFile, "w") or die("Unable to open file!");
				$themeFileContents = file_get_contents($PluginThemeFiles[$i][0]);

				fwrite($themeFileHandle, $themeFileContents);
				fclose($themeFileHandle);
// 			}
		}
	}
    
    // create the db
    $trainingen__activate = new Trainingen_activate();
}

/**
 * this class creates the required tables for the plugin
 */
class Trainingen_activate {
    public function __construct() {
        $this->DataHandler = new PfxN_DataHandler();
        $this->createTrainTable();
    }
    
    /**
     * this function creates the categorie table
     */
    private function createTrainTable() {
		$SQL = "
           CREATE TABLE IF EXISTS `wp_Trainingen` (
                `train_ID` INT UNSIGNED NOT NULL,
				`paraf1`  VARCHAR(1700) NULL,
				`paraf2`  VARCHAR(1700) NULL,
				`paraf3`  VARCHAR(1700) NULL,
				`paraf4`  VARCHAR(1700) NULL,
				`paraf5`  VARCHAR(1700) NULL,
				`paraf6`  VARCHAR(1700) NULL,
				`paraf7`  VARCHAR(1700) NULL,
				`title2`  VARCHAR(50)   NULL,
				`title3`  VARCHAR(50)   NULL,
				`title4`  VARCHAR(50)   NULL,
				`title5`  VARCHAR(50)   NULL,
				`title6`  VARCHAR(50)   NULL,
				`title7`  VARCHAR(50)   NULL,
				`hoofdTrain` INT NULL,
				`inspiratie`  TEXT NULL,
				`achtergrond` TEXT NULL,
				`trainID` VARCHAR(300)  NULL,
                PRIMARY KEY (`train_ID`),
                UNIQUE INDEX `train_ID_UNIQUE` (`train_ID` ASC))
            ENGINE = InnoDB;
		";
        
		$e = $this->DataHandler->create($SQL);		
    }
}

?>