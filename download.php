<?php $title = 'Download';?>
<?php $active = 'download';?>
<?php include('includes/header.php'); ?>

  <?php

  // fetch xml feed
  $strWin = "1.0.3.4547"; //fetch_url("http://update.aptana.com/update/jaxer/win32/version.txt");
  $strMac = "1.0.3.4547"; ///fetch_url("http://update.aptana.com/update/jaxer/mac/version.txt");
  $strLinux = "1.0.3.4547"; //fetch_url("http://update.aptana.com/update/jaxer/ubu32/version.txt");

  $strWin = str_replace("!define JAXER_BUILD_ID ", "", $strWin) ;
  $strWin = str_replace("\"", "", $strWin) ;

  $strMac = str_replace("!define JAXER_BUILD_ID ", "", $strMac) ;
  $strMac = str_replace("\"", "", $strMac) ;

  $strLinux = str_replace("!define JAXER_BUILD_ID ", "", $strLinux) ;
  $strLinux = str_replace("\"", "", $strLinux) ;

  ?>
  <div id="download_area">

  <p>Jaxer is a new kind of server, the world's first Ajax Server. Jaxer is free and open source, and enables the developer to create rich web applications by unifying the development model across the client/server boundary.</p>

  <div style="margin-top:10px;border:1px solid #CCCCFF;background-color: #FFFFEE"><p style="padding-left:10px;margin-bottom:3px;">The Jaxer Package download is a "sandboxed", self-contained package with its own Apache HTTP server, no additional configuration is required.</p>
  <P style="padding-left:10px;margin-bottom:3px;">
  Users of previous beta releases should replace their existing install with the latest version.</P>
  </div>

  <div style="margin-top:10px;padding: 20px 20px 5px 20px;background-color:white;border:1px solid #CCCCFF">

  <img src="<?php print WEB_ROOT; ?>images/windows_download_small.gif" style="float:left"/><h3>Download Jaxer for Windows </h3>
  <b>build <?php print $strWin; ?> Stable Release</b>
  <ul style="margin-left:20px;">
  <li style="margin-left:20px;">
  <a href="http://update.aptana.com/jaxer-standalone/latest/win32/Jaxer_package_withApache.zip?version=<?php print $strWin; ?>&cb=1000">Download the Jaxer Package with self-contained Apache (.zip)</a>
  <i>Built for XP or Vista.</i>
  </li>
  <li style="margin-left:20px;">
  <a href="http://update.aptana.com/jaxer-standalone/latest/win32/Jaxer_update.zip?version=<?php print $strWin; ?>">Download the latest update for your current Jaxer (.zip)</a>.
  </li>
  </ul>
  </div>

  <div style="margin-top:10px;padding: 20px 20px 5px 20px;background-color:white;border:1px solid #CCCCFF">

  <img src="<?php print WEB_ROOT; ?>images/macos-universal.gif" style="float:right"/>
  <img src="<?php print WEB_ROOT; ?>images/apple_download_small.gif" style="float:left"/><h3>Download Jaxer for Mac OS X</h3>
  <b>build <?php print $strMac; ?> Stable Release</b>
  <ul style="margin-left:20px;">
  <li style="margin-left:20px;">
  <a href="http://update.aptana.com/jaxer-standalone/latest/mac/Jaxer_package_withApache.dmg?version=<?php print $strMac; ?>&cb=1000">Download the Jaxer Package with self-contained Apache (.dmg)</a>
  <i>Built for OSX on Intel or G4 hardware</i> 
  </li>
  <li style="margin-left:20px;">
  <a href="http://update.aptana.com/jaxer-standalone/latest/mac/Jaxer_update.zip?version=<?php print $strMac; ?>&cb=1000">Download the latest update for your current Jaxer (.zip)</a>.
  </li>
  </ul>
  </div>

  <div style="margin-top:10px;padding: 20px 20px 5px 20px;background-color:white;border:1px solid #CCCCFF">

  <img src="<?php print WEB_ROOT; ?>images/linux_download_small.gif" style="float:left"><h3>Download Jaxer for Linux/Solaris</h3>
  <b>build <?php print $strLinux; ?> Stable Release</b>
  <ul style="margin-left:20px;">
  <BR>

  <li style="margin-left:20px;">
  <a href=" http://update.aptana.com/jaxer-standalone/latest/linux32/Jaxer_package_withApache.tar.gz?version=<?php print $strLinux; ?>&cb=1000">Download the latest Linux 32bit Jaxer (.tar.gz)</a>. 
  <i>Built for Debian- or Fedora-type distributions (e.g. Ubuntu).</i> 
  </li>

  <li style="margin-left:20px;">
  <a href="http://update.aptana.com/jaxer-standalone/latest/linux64/Jaxer_package_withApache.tar.gz?version=<?php print $strLinux; ?>&cb=1000">Download the Linux 64bit Jaxer (.tar.gz)</a>. 
  <i>Built for Debian- or Fedora-type distributions (e.g. Ubuntu).</i> 
  </li>

  <li style="margin-left:20px;">
  <a href="http://update.aptana.com/jaxer-standalone/latest/solaris/Jaxer_package_withApache.tar.gz?version=<?php print $strLinux; ?>&cb=1000">Download the Solaris Jaxer (.tar.gz)</a>. 
  <i>Built for OpenSolaris on x86</i> 
  <P>See the <a href="http://www.aptana.com/jaxer/linux" target="_blank">Jaxer for Linux page</a> and the <a href='http://www.aptana.com/docs/index.php/Migrating_from_Jaxer_beta'>Migrating from Jaxer Beta</a> document for further information.</P>
  </li>

  <li style="margin-left:20px; margin-top:10px">
  <a href="http://update.aptana.com/jaxer-standalone/latest/linux32/Jaxer_update.tar.gz?version=<?php print $strLinux; ?>&cb=1000">Download the latest update for your current Linux 32bit Jaxer (.tar.gz)</a>.
  </li>

  <li style="margin-left:20px; margin-top:10px">
  <a href="http://update.aptana.com/jaxer-standalone/latest/linux64/Jaxer_update.tar.gz?version=<?php print $strLinux; ?>&cb=1000">Download the latest update for your current Linux 64bit Jaxer (.tar.gz)</a>.
  </li>

  <li style="margin-left:20px; margin-top:10px">
  <a href="http://update.aptana.com/jaxer-standalone/latest/solaris/Jaxer_update.tar.gz?version=<?php print $strLinux; ?>&cb=1000">Download the latest update for your current Solaris Jaxer (.tar.gz)</a>.
  </li>

  </ul>
  </div>

  <p style="padding:5px; border:1px solid #CCCCCC; background-color: #FFFFEE"><a href="http://aptana.com/node/60">Jaxer is also bundled in Aptana Studio, starting with Studio version 1.1</a><p>

  <hr />

  <a name="source"></a>
  <div style="margin-top:20px;padding: 20px 20px 5px 20px;background-color:white;border:1px solid #CCCCFF">
  <h3>Download Jaxer Sources (Win/Mac/Linux/Solaris)</h3>
  <p>Jaxer is made available under the terms of the GPL. The source here includes the complete contents for building Jaxer, Jaxer Manager, and the Apache module<p>
  <ul>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-1.0.3.4547.tgz">Jaxer Source (.tgz, 56.6MB, version 4547)</a>
  <!--Coming soon &mdash; Jaxer Source (.tgz, XXX MB, version 4547)-->
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-1.0.3.4547.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 4547)</a>
  <!--Coming soon &mdash; Jaxer Connectors Source (.tgz, XXX MB, version 4547)-->
  </li>
  </ul>
  <hr />
  <p>Source Notes/Locations of important components:
  <ul>
  <li><b>Mod_jaxer:</b>Apache-modules/mod_jaxer</li>
  <li><b>JaxerManager:</b> Manager/</li>
  <li><b>Majority of Aptana code related with Mozilla:</b> Mozilla/Aptana</li>
  <li><b>tellJaxerManager:</b> utils/tellManager</li>
  </ul>
  <hr />
  <p>Source code for previous versions</p>
  <ul>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-1.0.0.4310.tgz">Jaxer Source (.tgz, 53.2MB, version 4310)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-1.0.0.4310.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 4310)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-1.0.0.4147.tgz">Jaxer Source (.tgz, 53.2MB, version 4147)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-1.0.0.4147.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 4147)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-1.0.0.4109.tgz">Jaxer Source (.tgz, 53.2MB, version 4109)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-1.0.0.4109.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 4109)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-1.0.0.3989.tgz">Jaxer Source (.tgz, 53.2MB, version 3989)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-1.0.0.3989.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 3989)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-1.0.0.3674.tgz">Jaxer Source (.tgz, 53.0MB, version 3674)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-1.0.0.3674.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 3674)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-0.9.7.2472.tgz">Jaxer Source (.tgz, 50.3MB, version 2472)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-0.9.7.2472.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 2472)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-0.9.6.2428.tgz">Jaxer Source (.tgz, 50.3MB, version 2428)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-0.9.6.2428.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 2428)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-0.9.5.2371.tgz">Jaxer Source (.tgz, 50.3MB, version 2371)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-0.9.5.2371.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 2371)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-0.9.4.2191.tgz">Jaxer Source (.tgz, 47.5MB, version 2191)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-0.9.4.2191.tgz">Jaxer Connectors Source (.tgz, 1.5MB, version 2191)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-2156.zip">Jaxer Source (.zip, 65MB, version 2156)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-2156.zip">Jaxer Connectors Source (.zip, 1.7MB, version 2156)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-2109.zip">Jaxer Source (.zip, 65MB, version 2109)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/connectors-2109.zip">Jaxer Connectors Source (.zip, 1.7MB, version 2109)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-2012.zip">Jaxer Source (.zip, 65MB, version 2012)</a>
  </li>
  <li>
  <a href="http://aptana-releases.s3.amazonaws.com/jaxer-src/jaxer-1903.zip">Jaxer Source (.zip, 65MB, version 1903)</a>
  </li>
  </ul>
  </div>
<?php include('includes/footer.php'); ?>
