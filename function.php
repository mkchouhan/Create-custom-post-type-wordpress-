add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
 $labels = array(
  'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Services', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Services', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Services', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New Services', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New Services', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Services', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Services', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Services', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Services', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Services:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No services found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No services found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'services' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'menu_icon'          => 'dashicons-cart',
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
 );

 register_post_type( 'services', $args );
}
add_action( 'init', 'create_book_tax' );

function create_book_tax() {
 register_taxonomy(
  'servicecategories',
  'services',
  array(
   'label' => __( 'Service Categories' ),
   'rewrite' => array( 'slug' => 'servicecategories' ),
   'hierarchical' => true,
  )
 );
}
