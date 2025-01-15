<?php
/**
 * Template Name: Zack Sample Page
 */
$template = file_get_contents(__DIR__ . "/vue/App.vue.js");
$styles = file_get_contents(__DIR__ . "/vue/App.css");
?>

<!DOCTYPE html>
<html>
  <head>
  <link
    href="<?php echo plugins_url( 'css/vuetify.min.css', __FILE__ ); ?>"
    rel="stylesheet"
    />
</head>
  <body>
    <div id="app"></div>
    <script src="<?php echo plugins_url( 'js/vue.global.js', __FILE__ ); ?>"></script>
    <script src="<?php echo plugins_url( 'js/vuetify.min.js', __FILE__ ); ?>"></script>
    <script type="text/x-template" id="app-template">
      <?php echo $template; ?>
    </script>
    <style scoped>
      <?php echo $styles; ?>
    </style>
    <script>
      const { createApp } = Vue;
      const { createVuetify } = Vuetify;
      const vuetify = createVuetify();
      const app = createApp({
        template: "#app-template", 
      })
        .use(vuetify)
        .mount("#app");
    </script>
  </body>
</html>