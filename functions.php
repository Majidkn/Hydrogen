<?php
  function remove_admin_login_header() {
      remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'remove_admin_login_header');


  @ini_set( 'upload_max_size' , '64M' );
  @ini_set( 'post_max_size', '64M');
  @ini_set( 'max_execution_time', '300' );
  add_theme_support( 'post-thumbnails' );
  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );
  function theme_settings_page()
  {
      ?>
        <style>
          .wrap *{font-family: Yekan !important;font-weight:500 !important;}
          .form-table tr{display: inline-block; width: 50%;}
        </style>
  	    <div class="wrap">
  	    <h1>تنظیمات پوسته هیدروژن</h1>
  	    <form method="post" action="options.php">
  	        <?php
  	            settings_fields("section");
  	            do_settings_sections("theme-options");
  	            submit_button();
  	        ?>
  	    </form>
  		</div>
  	<?php
  }

  function display_aboutus_element()
  {
  	?>
      	<textarea type="text" name="aboutus" id="aboutus"><?php echo get_option('aboutus'); ?></textarea>
      <?php
  }

  function display_twitter_element()
  {
  	?>
      	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
      <?php
  }

  function display_facebook_element()
  {
  	?>
      	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
      <?php
  }
  function display_instagram_element()
  {
  	?>
      	<input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
      <?php
  }
  function display_github_element()
  {
    ?>
        <input type="text" name="github_url" id="github_url" value="<?php echo get_option('github_url'); ?>" />
      <?php
  }
  function display_dribble_element()
  {
    ?>
        <input type="text" name="dribble_url" id="dribble_url" value="<?php echo get_option('dribble_url'); ?>" />
      <?php
  }
  function display_linkedin_element()
  {
    ?>
        <input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
      <?php
  }
  function display_theme_panel_fields()
  {
  	add_settings_section("section", "همه تنظیمات", null, "theme-options");
    add_settings_field("aboutus", "متن مورد نظر درباره ما", "display_aboutus_element", "theme-options", "section");
  	add_settings_field("twitter_url", "لینک پروفایل توییتر", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "لینک پروفایل فیسبوک", "display_facebook_element", "theme-options", "section");
    add_settings_field("instagram_url", "لینک پروفایل اینستاگرام", "display_instagram_element", "theme-options", "section");
    add_settings_field("github_url", "لینک پروفایل گیت هاب", "display_github_element", "theme-options", "section");
    add_settings_field("dribble_url", "لینک پروفایل دریبل", "display_dribble_element", "theme-options", "section");
    add_settings_field("linkedin_url", "لینک پروفایل لینکداین", "display_linkedin_element", "theme-options", "section");

    register_setting("section", "aboutus");
    register_setting("section", "twitter_url");
    register_setting("section", "facebook_url");
    register_setting("section", "instagram_url");
    register_setting("section", "github_url");
    register_setting("section", "dribble_url");
    register_setting("section", "linkedin_url");
  }

  add_action("admin_init", "display_theme_panel_fields");
  function add_theme_menu_item()
  {
  	add_menu_page("تنظیمات هیدروژن", "هیدروژن", "manage_options", "theme-panel", "theme_settings_page", null, 99);
  }

  add_action("admin_menu", "add_theme_menu_item");
 ?>
