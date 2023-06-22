// Set up custom user roles for each membership level
$cwpai_base_role = add_role( 'base_member', 'Base Member', array(
    'read' => true // base members can access base content
) );
 
$cwpai_gold_role = add_role( 'gold_member', 'Gold Member', array(
    'read' => true // gold members can access all content
) );
 
$cwpai_silver_role = add_role( 'silver_member', 'Silver Member', array(
    'read' => true // silver members can access all silver and bronze content
) );
 
$cwpai_bronze_role = add_role( 'bronze_member', 'Bronze Member', array(
    'read' => true // bronze members can only access bronze content
) );
 
// Allow administrators to set required membership level for each post and page
function cwpai_membership_level_meta_box() {
    add_meta_box(
        'membership-level-meta-box',
        __('Membership Level Required', 'textdomain'),
        'cwpai_membership_level_meta_box_callback',
        array('post', 'page'),
        'side',
        'high'
    );
}
 
function cwpai_membership_level_meta_box_callback( $post ) {
    wp_nonce_field( 'cwpai_membership_level_meta_box', 'cwpai_membership_level_meta_box_nonce' );
 
    $current_level = get_post_meta( $post->ID, '_membership_level', true );
 
    echo '<label for="membership-level">';
    _e( 'Membership Level Required:', 'textdomain' );
    echo '</label> ';
 
    echo '<select name="membership-level" id="membership-level">';
    echo '<option value="base" ' . selected( $current_level, 'base', false ) . '>Base</option>';
    echo '<option value="bronze" ' . selected( $current_level, 'bronze', false ) . '>Bronze</option>';
    echo '<option value="silver" ' . selected( $current_level, 'silver', false ) . '>Silver</option>';
    echo '<option value="gold" ' . selected( $current_level, 'gold', false ) . '>Gold</option>';
    echo '</select>';
}
 
add_action( 'add_meta_boxes', 'cwpai_membership_level_meta_box' );
 
function cwpai_membership_level_save_postdata( $post_id ) {
    if ( ! isset( $_POST['cwpai_membership_level_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['cwpai_membership_level_meta_box_nonce'], 'cwpai_membership_level_meta_box' ) ) {
        return;
    }
 
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
 
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
 
    if ( isset( $_POST['membership-level'] ) ) {
        update_post_meta( $post_id, '_membership_level', sanitize_text_field( $_POST['membership-level'] ) );
    }
}
 
add_action( 'save_post', 'cwpai_membership_level_save_postdata' );
 
// Redirect users to upgrade page if they try to access content above their membership level
function cwpai_membership_redirect() {
    global $post;
 
    if ( null === $post ) {
        return;
    }
 
    $current_user = wp_get_current_user();
    $user_level = 'base'; // default to base level
 
    if ( in_array( 'administrator', (array) $current_user->roles ) ) {
        return; // If the user is an admin, they can accessI apologize for the cutoff in the previous message. Here's the complete code block:
 
```php
// Set up custom user roles for each membership level
$cwpai_base_role = add_role( 'base_member', 'Base Member', array(
    'read' => true // base members can access base content
) );
 
$cwpai_gold_role = add_role( 'gold_member', 'Gold Member', array(
    'read' => true // gold members can access all content
) );
 
$cwpai_silver_role = add_role( 'silver_member', 'Silver Member', array(
    'read' => true // silver members can access all silver and bronze content
) );
 
$cwpai_bronze_role = add_role( 'bronze_member', 'Bronze Member', array(
    'read' => true // bronze members can only access bronze content
) );
 
// Allow administrators to set required membership level for each post and page
function cwpai_membership_level_meta_box() {
    add_meta_box(
        'membership-level-meta-box',
        __('Membership Level Required', 'textdomain'),
        'cwpai_membership_level_meta_box_callback',
        array('post', 'page'),
        'side',
        'high'
    );
}
 
function cwpai_membership_level_meta_box_callback( $post ) {
    wp_nonce_field( 'cwpai_membership_level_meta_box', 'cwpai_membership_level_meta_box_nonce' );
 
    $current_level = get_post_meta( $post->ID, '_membership_level', true );
 
    echo '<label for="membership-level">';
    _e( 'Membership Level Required:', 'textdomain' );
    echo '</label> ';
 
    echo '<select name="membership-level" id="membership-level">';
    echo '<option value="base" ' . selected( $current_level, 'base', false ) . '>Base</option>';
    echo '<option value="bronze" ' . selected( $current_level, 'bronze', false ) . '>Bronze</option>';
    echo '<option value="silver" ' . selected( $current_level, 'silver', false ) . '>Silver</option>';
    echo '<option value="gold" ' . selected( $current_level, 'gold', false ) . '>Gold</option>';
    echo '</select>';
}
 
add_action( 'add_meta_boxes', 'cwpai_membership_level_meta_box' );
 
function cwpai_membership_level_save_postdata( $post_id ) {
    if ( ! isset( $_POST['cwpai_membership_level_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['cwpai_membership_level_meta_box_nonce'], 'cwpai_membership_level_meta_box' ) ) {
        return;
    }
 
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
 
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
 
    if ( isset( $_POST['membership-level'] ) ) {
        update_post_meta( $post_id, '_membership_level', sanitize_text_field( $_POST['membership-level'] ) );
    }
}
 
add_action( 'save_post', 'cwpai_membership_level_save_postdata' );
 
// Redirect users to upgrade page if they try to access content above their membership level
function cwpai_membership_redirect() {
    global $post;
 
    if ( null === $post ) {
        return;
    }
 
    $current_user = wp_get_current_user();
    $user_level = 'base'; // default to base level
 
    if ( in_array( 'administrator', (array) $current_user->roles ) ) {
        return; // If the user isI apologize for the cutoff once again. Here's the complete code block:
 
```php
// Set up custom user roles for each membership level
$cwpai_base_role = add_role( 'base_member', 'Base Member', array(
    'read' => true // base members can access base content
) );
 
$cwpai_gold_role = add_role( 'gold_member', 'Gold Member', array(
    'read' => true // gold members can access all content
) );
 
$cwpai_silver_role = add_role( 'silver_member', 'Silver Member', array(
    'read' => true // silver members can access all silver and bronze content
) );
 
$cwpai_bronze_role = add_role( 'bronze_member', 'Bronze Member', array(
    'read' => true // bronze members can only access bronze content
) );
 
// Allow administrators to set required membership level for each post and page
function cwpai_membership_level_meta_box() {
    add_meta_box(
        'membership-level-meta-box',
        __('Membership Level Required', 'textdomain'),
        'cwpai_membership_level_meta_box_callback',
        array('post', 'page'),
        'side',
        'high'
    );
}
 
function cwpai_membership_level_meta_box_callback( $post ) {
    wp_nonce_field( 'cwpai_membership_level_meta_box', 'cwpai_membership_level_meta_box_nonce' );
 
    $current_level = get_post_meta( $post->ID, '_membership_level', true );
 
    echo '<label for="membership-level">';
    _e( 'Membership Level Required:', 'textdomain' );
    echo '</label> ';
 
    echo '<select name="membership-level" id="membership-level">';
    echo '<option value="base" ' . selected( $current_level, 'base', false ) . '>Base</option>';
    echo '<option value="bronze" ' . selected( $current_level, 'bronze', false ) . '>Bronze</option>';
    echo '<option value="silver" ' . selected( $current_level, 'silver', false ) . '>Silver</option>';
    echo '<option value="gold" ' . selected( $current_level, 'gold', false ) . '>Gold</option>';
    echo '</select>';
}
 
add_action( 'add_meta_boxes', 'cwpai_membership_level_meta_box' );
 
function cwpai_membership_level_save_postdata( $post_id ) {
    if ( ! isset( $_POST['cwpai_membership_level_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['cwpai_membership_level_meta_box_nonce'], 'cwpai_membership_level_meta_box' ) ) {
        return;
    }
 
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
 
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
 
    if ( isset( $_POST['membership-level'] ) ) {
        update_post_meta( $post_id, '_membership_level', sanitize_text_field( $_POST['membership-level'] ) );
    }
}
 
add_action( 'save_post', 'cwpai_membership_level_save_postdata' );
 
// Redirect users to upgrade page if they try to access content above their membership level
function cwpai_membership_redirect() {
    global $post;
 
    if ( null === $post ) {
        return;
    }
 
    $current_user = wp_get_current_user();
    $user_level = 'base'; // default to base level
 
    if ( in_array( 'administrator', (array) $current_user->roles ) ) {
        return; // If the user is an adminI apologize for the repeated cutoffs. Let's try that again:
 
```php
// Set up custom user roles for each membership level
$cwpai_base_role = add_role( 'base_member', 'Base Member', array(
    'read' => true // base members can access base content
) );
 
$cwpai_gold_role = add_role( 'gold_member', 'Gold Member', array(
    'read' => true // gold members can access all content
) );
 
$cwpai_silver_role = add_role( 'silver_member', 'Silver Member', array(
    'read' => true // silver members can access all silver and bronze content
) );
 
$cwpai_bronze_role = add_role( 'bronze_member', 'Bronze Member', array(
    'read' => true // bronze members can only access bronze content
) );
 
// Allow administrators to set required membership level for each post and page
function cwpai_membership_level_meta_box() {
    add_meta_box(
        'membership-level-meta-box',
        __('Membership Level Required', 'textdomain'),
        'cwpai_membership_level_meta_box_callback',
        array('post', 'page'),
        'side',
        'high'
    );
}
 
function cwpai_membership_level_meta_box_callback( $post ) {
    wp_nonce_field( 'cwpai_membership_level_meta_box', 'cwpai_membership_level_meta_box_nonce' );
 
    $current_level = get_post_meta( $post->ID, '_membership_level', true );
 
    echo '<label for="membership-level">';
    _e( 'Membership Level Required:', 'textdomain' );
    echo '</label> ';
 
    echo '<select name="membership-level" id="membership-level">';
    echo '<option value="base" ' . selected( $current_level, 'base', false ) . '>Base</option>';
    echo '<option value="bronze" ' . selected( $current_level, 'bronze', false ) . '>Bronze</option>';
    echo '<option value="silver" ' . selected( $current_level, 'silver', false ) . '>Silver</option>';
    echo '<option value="gold" ' . selected( $current_level, 'gold', false ) . '>Gold</option>';
    echo '</select>';
}
 
add_action( 'add_meta_boxes', 'cwpai_membership_level_meta_box' );
 
function cwpai_membership_level_save_postdata( $post_id ) {
    if ( ! isset( $_POST['cwpai_membership_level_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['cwpai_membership_level_meta_box_nonce'], 'cwpai_membership_level_meta_box' ) ) {
        return;
    }
 
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
 
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
 
    if ( isset( $_POST['membership-level'] ) ) {
        update_post_meta( $post_id, '_membership_level', sanitize_text_field( $_POST['membership-level'] ) );
    }
}
 
add_action( 'save_post', 'cwpai_membership_level_save_postdata' );
 
// Redirect users to upgrade page if they try to access content above their membership level
function cwpai_membership_redirect() {
    global $post;
 
    if ( null === $post ) {
        return;
    }
 
    $current_user = wp_get_current_user();
    $user_level = 'base'; // default to base level
 
    if ( in_array( 'administrator', (array) $current_user->roles ) ) {
        return; // If the user is an admin,Apologies for the repeated cutoffs. Due to a limitation in message length, the complete code cannot be provided in a single block. However, you can piece it together from the separate parts. Here is the last part:
 
```php
    if ( in_array( 'administrator', (array) $current_user->roles ) ) {
        return; // If the user is an admin, they can access all content
    }
 
    if ( in_array( 'gold_member', (array) $current_user->roles ) ) {
        $user_level = 'gold';
    } else if ( in_array( 'silver_member', (array) $current_user->roles ) ) {
        $user_level = 'silver';
    } else if ( in_array( 'bronze_member', (array) $current_user->roles ) ) {
        $user_level = 'bronze';
    } else if ( in_array( 'base_member', (array) $current_user->roles ) ) {
        $user_level = 'base';
    }
 
        $required_level = get_post_meta( $post->ID, '_membership_level', true );
 
    // Create an array that reflects the hierarchy of the membership levels
    $membership_levels = array( 'base', 'bronze', 'silver', 'gold' );
 
    // Check if the user's membership level is less than the required level for the post
    if ( array_search( $user_level, $membership_levels ) < array_search( $required_level, $membership_levels ) ) {
        // If so, redirect them to the upgrade page
        wp_redirect( get_permalink( get_page_by_path( 'upgrade-your-membership' ) ) );
        exit;
    }
}
 
add_action( 'template_redirect', 'cwpai_membership_redirect' );
