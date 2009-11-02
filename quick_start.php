<?php $sidebar = false; ?>
<?php $title = 'Quick Start';?>
<?php $active = 'quick_start';?>
<?php include('includes/header.php'); ?>
<style>
  .sidestep {
    float:right;
  }
  
  h2 {
    border-top:1px solid #ccc;
    padding-top:10px;
  }
</style>
<p style="font-size:130%">
  This page provides a quick overview of how to install Jaxer, view the Jaxer screencasts and demo applications included with Jaxer, and quickly create a simple application.
</p>
<div>
  <div class="sidenote">
    <b>Note:</b> If you are using Milestone 9 or an earlier version of Aptana Studio, uninstall your old version, then download and perform a clean install of the current version of Aptana Studio from the <a href="http://www.aptana.com/studio/download">Aptana Studio download page</a>.
  </div>
  <br style="clear:both;">
  
  <div class="sidestep">
    <img src="<?php print WEB_ROOT;?>images/step_1.png">
  </div>
  
  <h2>
    Installing Jaxer
  </h2>
  <p>
    You have the option of either installing Jaxer as a standalone web server on your computer, or using the Jaxer server that is automatically bundled with Aptana Studio.
  </p>
  <h3>
    Installing the standalone Jaxer server
  </h3>
  <p>
    <a href="<?php print WEB_ROOT;?>guide/setup.php">How to set up the standalone Jaxer server</a>
  </p>
  <h3>
    Installing Jaxer for new Aptana Studio users
  </h3>
  <p>
    If you are new to Aptana Studio, you can download a bundled version of Studio and Jaxer from the <a href="http://www.aptana.com/studio/download">Aptana Studio download page</a>.
  </p>
  <h3>
    Installing Jaxer for current Aptana Studio users
  </h3>
  <p>
    Jaxer is bundled with Aptana Studio v1.1+. To upgrade to the current version of Studio, open Studio and choose <b>Help &gt; Check for Aptana Studio Updates now</b>.
  </p>
  <div class="sidenote">
    <b>Note:</b> A quick summary of all the Jaxer features available in Studio is listed <a href="http://www.aptana.com/node/60">here</a>.
  </div>
  <div class="sidestep">
    <img src="<?php print WEB_ROOT;?>images/step_2.png">
  </div>
  <h2>
    Creating your first Jaxer application
  </h2>
  <h3>
    Standalone Jaxer Server
  </h3>
  <p>
    To create a Jaxer application if you are using the standalone Jaxer server:
  </p>
  <ol>
    <li>Create a new folder for your project under the <b>public</b> folder in your installation folder.
    </li>
    <li>Use your favorite web editor to create the HTML, CSS, and JavaScript files for your project inside the new folder.
    </li>
    <li>Preview your project in a web browser at <b>http://localhost:8081/[my_project]</b>.
    </li>
  </ol>
  <p>
    For help with building your first project, read through the code sample walkthroughs described on the <a href="http://www.aptana.com/node/15">Aptana samples page</a>.
  </p>
  <h3>
    Jaxer Server inside Aptana Studio
  </h3>
  <p>
    To quickly get up and running with Jaxer inside of Aptana Studio:
  </p>
  <ol>
    <li>Click the <b>Jaxer</b> button <img src="<?php print WEB_ROOT; ?>/images/iconJaxer.png"> on the toolbar to start the internal Jaxer Server.
      <p>
        This displays an informational dialog explaining more about Jaxer and provides a link to a complete Jaxer overview. The arrow just to the right of the Jaxer button contains a menu for Jaxer-related views and documentation.
      </p>
    </li>
    <li>Create a new general Web project in Studio:
      <ol>
        <li>From the <b>File</b> menu, select <b>New &gt; Project...</b>
        </li>
        <li>Select <b>Default Web Project</b> under <b>Aptana Projects</b> (shown below), and click the <b>Next</b> button.
        </li>
        <li>Type a name for your project, and click <b>Next</b>.
        </li>
        <li>Check the box(es) next to any JavaScript libraries that you want to include in your project and click <b>Next</b>.
        </li>
        <li>To automatically add Jaxer to support to your project (optional), click the <b>Select All</b> button on the Jaxer Support wizard page to configure this project for Jaxer development, and click <b>Next</b>.
          <p>
            <img src="<?php print WEB_ROOT; ?>/images/projectWizard.png">
          </p>
        </li>
        <li>Click the <b>Finish</b> button.
          <p>
            The wizard will now create your new project.
          </p>
        </li>
      </ol>
    </li>
  </ol>
  <ul>
    <li>Create your web page:
      <ol>
        <li>In the Project View, right-click your new project and select <b>New &gt; HTML File</b> to add an HTML file to your project.
        </li>
        <li>Copy and paste the snippet of sample HTML code below into your editor:
          <p>
            <textarea name="code" class="xml">
              
              <html>
                      <head>
                              <title>Quick Jaxer Sample</title>
                      </head>
                      <body>
                              <h3>Quick Jaxer Sample</h3>
                              <p>This demonstrates server-side DOM and JavaScript and also callbacks.</p>
                              <script runat="server-proxy">
                                      document.write("This is Jaxer version " + Jaxer.buildNumber);
                                      function getLatestVersion() {
                                              var url = "http://update.aptana.com/update/jaxer/win32/version.txt";
                                              try {
                                                      var versionString = Jaxer.Web.get(url);
                                              }
                                              catch (e) {
                                                      throw "Could not retrieve version number from " + url;
                                              }
                                              var matches = versionString.match(/\"([\S]+)\"/);
                                              return (matches && matches.length > 1) ? matches[1] : "(unknown)";
                                      }
                              </script>
                              <input type="button" value="Check Latest" onclick="alert('Latest version: ' + getLatestVersion())">
                      </body>
              </html>
            </textarea>
        </li>
        <li>Save your HTML file.
        </li>
        <li>Click the <b>Firefox</b> tab at the bottom of the HTML editor to preview your web page in the internal Firefox browser in Studio.
        </li>
      </ol>
    </li>
    <li style="list-style: none">
      <br style="clear:both;"/>
      <div class="sidestep">
        <img src="<?php print WEB_ROOT;?>images/step_3.png">
      </div>
      
      <h2>
        Viewing the Jaxer screencasts and sample applications
      </h2>
      <p>
        You can learn more about Jaxer by viewing our screencasts on aptana.tv:
      </p>
      <p>
        <a href="http://www.aptana.tv/">http://www.aptana.tv/</a>
      </p>
      <p>
        After viewing the Jaxer screencasts, another great way to learn about the capabilities of Jaxer is to view some of the included sample applications. The <a href="http://www.aptana.com/node/15">Aptana samples page</a> provides an introduction to each of the included samples.
      </p>
      <ul>
        <li>If you are an Aptana Studio user, you can learn about previewing and importing the Jaxer samples by reading the <a href="http://www.aptana.com/docs/index.php/Getting_Started_with_Jaxer_in_Aptana_Studio">Getting started with Jaxer in Aptana Studio</a> Help topic.
        </li>
        <li>If you are using the standalone Jaxer server, start your server (as described in the installation links above), and go to the Jaxer landing page in your web browser: <a href="http://localhost:8081/aptana/">http://localhost:8081/aptana/</a>. From here, click the <b>Samples and Tools</b> link on the left to browse the included samples.
        </li>
      </ul>
    </li>
  </ul>
</div>
<?php include('includes/footer.php'); ?>
