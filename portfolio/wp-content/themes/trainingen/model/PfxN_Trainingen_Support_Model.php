<?php
/**
 * this model controls the flow of the admin settings page
 */
class PfxN_Trainingen_Support_Model {
    public function __construct() {
        $this->DataHandler = new PfxN_DataHandler();
    }
    
    /**
    * this method is used to get the lesson select
    * @return String an html select element.
    */
    public function selectLess() {
        $train_slug = $_POST['trainSlug'];
        
        $outputArray = [];
        
        $args = [
            'post_type' => 'trainingen',
            'posts_per_page' => -1,
        ];
        
        // The Query
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) {
        	while ( $the_query->have_posts() ) {
        		// increment the post;
        		$the_query->the_post();
        		
				global $post;
				$post_title = $post->post_title;
				$post_id = $post->ID;
				$outputArray[$post_title] = $post_id;
            }
        } else {
            return FALSE;
        }
    
        return $this->createSelectContents($outputArray, $train_slug);
    }
    
    /**
     * this function is used to extract slugs from the input array of wp objects
     * @param   $inputArray   Array     an array of wp objects
     * @return                Array     an Array of slugs and id's
     */
    private function extractWpObject(array $inputArray) {
        $outputArray = [];
        foreach ($inputArray as $value) {
            $outputArray[$value->slug] = $value->cat_ID;
        }
        return $outputArray;
    }
    
    /**
     * this method is used to create the contents for an HTML selectbox.
     * @param $inputArray   Array   an array of slugs and id's
     * @param $selectedSlug String  an slug to identify the selected item
     */
    private function createSelectContents(array $inputArray, $selectedSlug = null) {
        if ($selected != null) {
            $output = '<option value="-1">----</option>';
        } else {
            $output = '<option selected value="-1">----</option>';
        }
        
        foreach($inputArray as $slug => $id) {
            $selected = '';
            if ($selectedSlug == $slug) {
                $selected = 'selected';
            }
            
            $output .= "<option $selected value='$id?$slug'>$slug</option>";
        }
        
        return $output;
    }
}
?>