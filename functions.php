<?php #require_once ( get_template_directory() . '/redirect-options.php' ); ?>
<?php
add_action('admin_init', 'redirect_options_init');
add_action('admin_menu', 'redirect_options_page');

function redirect_options_init(){
    register_setting( 'redirect_options_options', 'redirect_options', 'redirect_validate');
}


function redirect_options_page() {
    add_options_page('Redirect Theme Options', 'Redirect Options', 'manage_options', 'sdf',  'redirect_options_page_do');
}



function redirect_options_page_do() {
?>
<div class="wrap">
    <h2>Redirect Theme Option Options</h2>
<p><strong>Note:</strong> You <em>must</em> include <span class="code">http://</span> at the beginning of your URL, otherwise it will not work correctly.</p>
    <form method="post" action="options.php">
      <?php settings_fields('redirect_options_options'); ?>
      <?php $options = get_option('redirect_options'); ?>
      <table class="form-table">
        <tr valign="top"><th scope="row">Redirect URL<th>
          <td><input type="text" name="redirect_options[url]" value="<?php echo $options['url']; ?>" /></td>
        </tr>
      </table>
      <p class="submit">
      <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
      </p>
    </form>
  </div>
<?php
}
function redirect_validate($input) {
    // Our first value is either 0 or 1
     $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
  
       // Say our second option must be safe text with no HTML tags
         $input['sometext'] =  wp_filter_nohtml_kses($input['sometext']);
  
           return $input;
          }
  
