<?php
/**
 * Custom Post Type Generator Class
 */

class OOP_CPT_Generator {

  /**
   * Post type Singular Name & array of labels/supports
   * @var mixed
   */
  public $cpt_name;
  public $cpt_args;

  /**
   * Constructor for the OOP_CPT_Generator class
   *
   * @param var     $cpt_name   [post type singular name]
   * @param array   $cpt_args   [array of lables and post type options]
   */
 	function __construct( $cpt_name, $cpt_args = array() ) {
     /**
      * convert " " into "_" and make the CPT name lowercase
      */
      $this->cpt_name = str_replace( ' ', '_', strtolower($cpt_name));
      $this->cpt_args = (array)$cpt_args;

      /**
       * Add the OOP_CPT_Register hook to the init add_action
       */
       add_action( 'init', array( $this, 'OOP_CPT_Register' ) );
 	}

  /**
   * Function to register the Post Type on the init add action.
   */
  function OOP_CPT_Register() {
      /**
       * singluar post type label
       * @var var
       */
<<<<<<< HEAD
       $label_single = ucwords($this->cpt_name);
=======
 			$label_single = ucwords($this->cpt_name);
>>>>>>> 251f03fe35ff427f1d37c91d31dedaebabcc8d3d
       /**
        * plular post type label
        * @var var
        */
<<<<<<< HEAD
        $label_plular = $label_single.'s';

        $args = array(
          'labels'              => array(
=======
 			$label_plular = $label_single.'s';

 			$args = array(
 				'labels'              => array(
>>>>>>> 251f03fe35ff427f1d37c91d31dedaebabcc8d3d
 					'name'                => __( "$label_plular", 'oth-framework' ),
 					'singular_name'       => __( "$label_single", 'oth-framework' ),
 					'add_new'             => _x( "Add New $label_single", 'oth-framework' ),
 					'add_new_item'        => __( "Add New $label_single", 'oth-framework' ),
 					'edit_item'           => __( "Edit $label_single", 'oth-framework' ),
 					'new_item'            => __( "New $label_single", 'oth-framework' ),
 					'view_item'           => __( "View $label_single", 'oth-framework' ),
 					'search_items'        => __( "Search $label_plular", 'oth-framework' ),
 					'not_found'           => __( "No $label_plular found", 'oth-framework' ),
 					'not_found_in_trash'  => __( "No $label_plular found in Trash", 'oth-framework' ),
 					'parent_item_colon'   => __( "Parent $label_single :", 'oth-framework' ),
 					'menu_name'           => __( "$label_plular", 'oth-framework' ),
<<<<<<< HEAD
         ),
=======
 					),
>>>>>>> 251f03fe35ff427f1d37c91d31dedaebabcc8d3d
 				'hierarchical'        => false,
 				'public'              => true,
 				'supports'            => array('title', 'editor', 'thumbnail'),
 				'taxonomies'          => array( 'category', 'post_tag' ),
 			);
 			$args = array_merge( $args, $this->cpt_args );
 			register_post_type( $this->cpt_name, $args );

 	}

 }
?>
