<?php require_once('config.php'); ?>
<html>
  <head>
    <title><?php print isset($title) ? $title.': Aptana Jaxer' : 'Aptana Jaxer - The Javascript Server';?></title>
    <?php print isset($head) ? $head : '';?>
    <link rel="stylesheet" href="<?php print WEB_ROOT;?>stylesheets/screen.css"/>
		<link rel="stylesheet" type="text/css" href="<?php print WEB_ROOT;?>guide/lib/sh/styles/shCore.css">
		<link rel="stylesheet" type="text/css" href="<?php print WEB_ROOT;?>guide/lib/sh/styles/shThemeDefault.css">
		<script type="text/javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shCore.js"></script>
		<script type="text/javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shLegacy.js"></script> 
		<script type="text/javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shBrushCss.js"></script>
		<script type="text/javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shBrushJScript.js"></script>
		<script type="text/javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shBrushSql.js"></script>
		<script type="text/javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shBrushBash.js"></script>
		<script type="text/javascript" src="<?php print WEB_ROOT;?>guide/lib/sh/scripts/shBrushXml.js"></script>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <ul id="navigation">
          <li><a href="<?php print WEB_ROOT;?>"<?php print isset($active) && $active == 'home' ? ' class="active"' : '';?>>Home</a></li>
          <li><a href="<?php print WEB_ROOT;?>quick_start"<?php print isset($active) && $active == 'quick_start' ? ' class="active"' : '';?>>Quick Start</a></li>
          <li><a href="<?php print WEB_ROOT;?>guide/"<?php print isset($active) && $active == 'guide' ? ' class="active"' : '';?>>Guide</a></li>
          <li><a href="<?php print WEB_ROOT;?>tutorials/"<?php print isset($active) && $active == 'tutorials' ? ' class="active"' : '';?>>Tutorials</a></li>
          <li><a href="<?php print WEB_ROOT;?>api/">API</a></li>
          <li><a href="http://tv.aptana.com/topics/aptana-jaxer">Screencasts</a></li>
          <li><a href="http://forums.aptana.com/index.php?c=12">Forums</a></li>
          <li><a href="<?php print WEB_ROOT;?>contribute"<?php print isset($active) && $active == 'contribute' ? ' class="active"' : '';?>>Contribute</a></li>
          <li><a href="<?php print WEB_ROOT;?>download"<?php print isset($active) && $active == 'download' ? ' class="active"' : '';?>>Download</a></li>
        </ul>
      </div>
      <div id="main">
        <?php if(isset($sidebar) && $sidebar): include('sidebar.php'); endif;?>
        <?php print isset($title) ? '<h1>'.$title.'</h1>' : '';?>
