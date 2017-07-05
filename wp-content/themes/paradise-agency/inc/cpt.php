<?php
/**
 * Created by PhpStorm.
 * User: frank
 * Date: 27/04/2017
 * Time: 05:57 PM
 */
function create_team_post_type() {
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => 'Team',
                'singular_name' => 'Team',
                'add_new' => 'Agregar Nueva',
                'add_new_item' => 'Agregar Nuevas Team',
                'edit_item' => 'Edit Team',
                'new_item' => 'Nuevo Team',
                'view_item' => 'Ver Team',
                'search_items' => 'Buscar Perfiles',
                'not_found' =>  'Nada encontrado',
                'not_found_in_trash' => 'Nada encontrado en la basura',
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => array('slug'=>'team','with_front'=>FALSE),
            'capability_type' => 'post',
            'hierarchical' => true,
            'has_archive'=>true,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','excerpt','post‐formats','author'),
            'show_in_rest' => true,
            'rest_base'          => 'books-api',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'taxonomies'          => array( 'category'),

        )
    );
}
add_action( 'init', 'create_team_post_type' );

function add_team_meta_boxes() {
    add_meta_box("team_services_meta", "Datos", "add_contact_services_team_meta_box", "Team", "normal", "low");
}
function add_contact_services_team_meta_box()
{
    global $post;
    //$custom = get_post_custom( $post->ID );
    ?>
    <ul class="nav nav-pills">
        <li>
            <p>
                <label>Role</label><br />

                <input type="text" size="50%" name="role" value="<?php echo $value = get_post_meta( $post->ID, 'role', true );  ?>">
            </p>
        </li>
        <li>
            <p>
                <label>Facebook Profile</label><br />

                <input type="text" size="50%" name="fb" value="<?php echo $value = get_post_meta( $post->ID, 'fb', true );  ?>">
            </p>
        </li>
        <li>
            <p>
                <label>twitter Profile</label><br />

                <input type="text" size="50%" name="tw" value="<?php echo $value = get_post_meta( $post->ID, 'tw', true );  ?>">
            </p>
        </li>
        <li>
            <p>
                <label>linkedin Profile</label><br />

                <input type="text" size="50%" name="lk" value="<?php echo $value = get_post_meta( $post->ID, 'lk', true );  ?>">
            </p>
        </li>
        <li>
            <p>
                <label>instagram Profile</label><br />

                <input type="text" size="50%" name="in" value="<?php echo $value = get_post_meta( $post->ID, 'in', true );  ?>">
            </p>

        </li>
        <li>
            <p>
                <label>Youtube channel</label><br />

                <input type="text" size="50%" name="yt" value="<?php echo $value = get_post_meta( $post->ID, 'yt', true );  ?>">
            </p>
        </li>
        <li>
            <p>
                <label>Pinterest</label><br />

                <input type="text" size="50%" name="pt" value="<?php echo $value = get_post_meta( $post->ID, 'pt', true );  ?>">
            </p>
        </li>
        <li>
            <p>
                <label>Email</label><br />

                <input type="text" size="50%" name="em" value="<?php echo $value = get_post_meta( $post->ID, 'em', true );  ?>">
            </p>
        </li>

    </ul>
    <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_team_custom_fields()
{
    global $post;

    if ($post) {


        update_post_meta($post->ID, "role", @$_POST["role"]);
        update_post_meta($post->ID, "fb", @$_POST["fb"]);
        update_post_meta($post->ID, "tw", @$_POST["tw"]);
        update_post_meta($post->ID, "lk", @$_POST["lk"]);
        update_post_meta($post->ID, "in", @$_POST["in"]);
        update_post_meta($post->ID, "yt", @$_POST["yt"]);
        update_post_meta($post->ID, "pt", @$_POST["pt"]);
        update_post_meta($post->ID, "em", @$_POST["em"]);

    }
}
add_action( 'admin_init', 'add_team_meta_boxes' );
add_action( 'save_post_team', 'save_team_custom_fields' );



function create_videos_post_type() {
    register_post_type( 'videos',
        array(
            'labels' => array(
                'name' => 'Videos',
                'singular_name' => 'Video',
                'add_new' => 'Agregar Nuevo',
                'add_new_item' => 'Agregar Nuevos videos',
                'edit_item' => 'Edit Video',
                'new_item' => 'Nuevo Video',
                'view_item' => 'Ver Video',
                'search_items' => 'Buscar Perfiles',
                'not_found' =>  'Nada encontrado',
                'not_found_in_trash' => 'Nada encontrado en la basura',
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => array('slug'=>'videos','with_front'=>FALSE),
            'capability_type' => 'post',
            'hierarchical' => true,
            'has_archive'=>true,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','excerpt','post‐formats','author'),
            'taxonomies'          =>  array( 'category'),

        )
    );
}
add_action( 'init', 'create_videos_post_type' );

function add_videos_meta_boxes() {
    add_meta_box("videos_services_meta", "Datos", "add_contact_services_videos_meta_box", "Videos", "normal", "low");
}
function add_contact_services_videos_meta_box()
{
    global $post;
    //$custom = get_post_custom( $post->ID );
    ?>
    <ul class="nav nav-pills">
        <li>
            <p>
                <label>Copy code url Sample  https://www.youtube.com/(3A4P_T3ukpo) this part </label><br />

                <input type="text" size="50%" name="code" value="<?php echo $value = get_post_meta( $post->ID, 'code', true );  ?>">
            </p>
        </li>
    </ul>
    <?php
}

function save_videos_custom_fields()
{
    global $post;

    if ($post) {


        update_post_meta($post->ID, "code", @$_POST["code"]);

    }
}
add_action( 'admin_init', 'add_videos_meta_boxes' );
add_action( 'save_post_videos', 'save_videos_custom_fields' );

//--------------------------gallerias-------------------------------------------------------------------

function create_galerias_post_type() {
    register_post_type( 'galerias',
        array(
            'labels' => array(
                'name' => 'Galerias',
                'singular_name' => 'Galeria',
                'add_new' => 'Agregar Nuevo',
                'add_new_item' => 'Agregar Nuevos Galerias',
                'edit_item' => 'Edit galeria',
                'new_item' => 'Nuevo Galeria',
                'view_item' => 'Ver galeria',
                'search_items' => 'Buscar Perfiles',
                'not_found' =>  'Nada encontrado',
                'not_found_in_trash' => 'Nada encontrado en la basura',
                'parent_item_colon' => ''
            ),

            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            //'menu_icon' => get_stylesheet_directory_uri() . '/yourimage.png',
            'rewrite' => array('slug'=>'galleries','with_front'=>FALSE),
            'capability_type' => 'post',
            'hierarchical' => true,
            'has_archive'=>true,
            'menu_position' => null,
            'supports' => array('title','editor','thumbnail','excerpt','post‐formats','author'),
            'taxonomies'          =>  array( 'category'),

        )
    );
}
add_action( 'init', 'create_galerias_post_type' );

function add_galerias_meta_boxes() {
    add_meta_box("videos_services_meta", "Datos", "add_contact_services_galerias_meta_box", "Galerias", "normal", "low");
}
function add_contact_services_galerias_meta_box()
{
    global $post;
    //$custom = get_post_custom( $post->ID );
    ?>
    <ul class="nav nav-pills">
        <li>
            <p>
                <label>Copy shorcode here</label><br />
                <?php global $post;
                $custom = get_post_custom( $post->ID );?>

                <textarea name="gal_code" rows="4" cols="50" value="<?php echo $value = get_post_meta( $post->ID, 'gal_code', true ); ?>"><?= @$custom["gal_code"][0] ?></textarea></p>
            </p>
        </li>
    </ul>
    <?php
}

function save_galerias_custom_fields()
{
    global $post;

    if ($post) {


        update_post_meta($post->ID, "gal_code", @$_POST["gal_code"]);

    }
}
add_action( 'admin_init', 'add_galerias_meta_boxes' );
add_action( 'save_post_galerias', 'save_galerias_custom_fields' );


flush_rewrite_rules();

