<?php
function adminer_object() {
    // required to run any plugin
    include_once "./plugins/plugin.php";
    
    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }
    
    // enable extra drivers just by including them
    //~ include "./plugins/drivers/simpledb.php";
    
    $plugins = array(
        // specify enabled plugins here
		//new  AdminerDatabaseHide(),
		new AdminerDumpXml(),
		new AdminerTinymce(),
		new AdminerFileUpload("data/"),
		new AdminerSlugify(),
		new AdminerTranslation(),
		new AdminerForeignSystem(),
		new AdminerEditTextarea(),
		new AdminerStructComments(),
		new AdminerJsonColumn(),
		/*
		new AdminerLoginServers([
			filter_input(INPUT_SERVER, 'HTTP_HOST') => filter_input(INPUT_SERVER, 'SERVER_NAME')
		]),*/
		new AdminerEnumTypes(),
		new PasswordProtection(),
    );
    
    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */
    
    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include "../adminer-4.8.1.php";
?>
