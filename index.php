<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/materialize.min.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <header>
      <jdoc:include type="modules" name="position-7" />
      <ul id="slide-out" class="side-nav fixed">
        <li><a href="#!">First Sidebar Link</a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      </header>
      <content>
        <div class="container">
          <div class="row">
            <jdoc:include type="component" />
            <div style="width:100%;height:2000px;color:blue;"></div>
          </div>
        </div>
      </content>
       <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/materialize.min.js"></script>
      <script>
        $(".button-collapse").sideNav();
      </script>
    </body>
  </html>
