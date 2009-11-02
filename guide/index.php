<?php ob_start(); ?>
		<link rel="stylesheet" type="text/css" href="style/jquery.treeview.css"/>
		<link rel="stylesheet" type="text/css" href="style/guide.css"/>
		<link rel="stylesheet" type="text/css" href="style/devices.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="style/highslide.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="style/highslide-html.css"/>
		<script type="text/javascript" src="lib/jquery/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="lib/jquery/jquery.cookie.js" ></script>
		<script type="text/javascript" src="lib/jquery/jquery.treeview.js" ></script>
		<script type="text/javascript" src="lib/jquery/jquery.bigtarget.1.0.1.js"></script>
		<script type="text/javascript" src="lib/highslide/highslide-full.js"></script>
		<script type="text/javascript" src="lib/aptana/jxrGuideFull.js"></script>
<?php $head = ob_get_clean(); ?>
<?php $active = 'guide';?>
<?php include('../includes/header.php'); ?>
<div id="content">
  <table id="holdsContent" cellpadding="0" cellspacing="0">
    <tr style="padding-top:0px;">
      <td id="leftSidebar">
        <div class="guide guide-navigation">
          <div class="navigation" id="mainTOC">
            <h3 class="navigation-master">
              Jaxer Guide
            </h3>
            <ul id="navigation-tree" class="filetree bigTarget">
              <li class="area">
                <span class="file"><a href="index.php" class="published">Introduction</a></span>
              </li>
              <li class="area">
                <span class="folder"><a href="setup.php" class="published">Setup</a></span>
              </li>
              <li class="area">
                <span class="folder">Develop</span>
                <ul id="develop">
                  <li class="area">
                    <span class="folder">Application Level Concepts</span>
                    <ul>
                      <li>
                        <span class="file"><a href="develop_basics.php" class="published">Basics</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_lifecycle.php" class="published">Page Lifecycle</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_applications.php" class="published">Applications</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_requests.php" class="published">Requests and Responses</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_proxies.php" class="published">Proxy Functions</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_state.php" class="published">State and Event Handlers</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_sandbox.php" class="published">Sandbox</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_security.php" class="published">Security</a></span>
                      </li>
                    </ul>
                  </li>
                  <li class="area">
                    <span class="folder">Persistent Storage</span>
                    <ul>
                      <li>
                        <span class="file"><a href="develop_folders.php" class="published">Folders</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_files.php" class="published">Files</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_databases.php" class="published">Databases</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_working_databases.php" class="published">Working with Database Content</a></span><!--
                                <ul>
                                  <li><span class="file"><a href="develop_databases.php/#managedAccess" class="published">Managed Access</a></span></li>
                                  <li><span class="file"><a href="develop_databases.php/#perApp" class="published">Per-Application Managed Access</a></span></li>
                                  <li><span class="file"><a href="develop_databases.php/#dynamicAccess" class="published">Dynamic, Configurable Access</a></span></li>
                                  <li><span class="file"><a href="develop_databases.php/#jaxerDB" class="published">Jaxer.DB</a></span></li>
                                  <li><span class="file"><a href="develop_databases.php/#jxrResultSet" class="published">Queries That Return Data: Jaxer.DB.ResultSet</a></span></li>
                                  <li><span class="file"><a href="develop_databases.php/#dataTypes" class="published">Data Types</a></span></li>
                                </ul> -->
                      </li>
                      <li>
                        <span class="file"><a href="develop_logging.php" class="published">Logging</a></span>
                      </li>
                    </ul>
                  </li>
                  <li class="area">
                    <span class="folder">Communications</span>
                    <ul>
                      <li>
                        <span class="file"><a href="develop_web_services.php" class="published">Web Services</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_web-requests.php" class="published">Web Requests</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_urls.php" class="published">URLs</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_email.php" class="published">Email</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_sockets.php" class="published">Sockets</a></span>
                      </li>
                    </ul>
                  </li>
                  <li class="area">
                    <span class="folder">Utilities</span>
                    <ul>
                      <li>
                        <span class="file"><a href="develop_utility.php" class="published">The Utility Namespaces</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_processes.php" class="published">Processes</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_command-line.php" class="published">Command Line Interface</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_xml.php" class="published">XML</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_mozilla.php" class="published">Mozilla Features</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="develop_building_jaxer.php" class="published">Building Jaxer</a></span>
                      </li>
                    </ul>
                  </li>
                  <li class="area">
                    <span class="folder">Advanced Topics</span>
                    <ul>
                      <li>
                        <span class="file"><a href="advanced.php#nsm" class="published">Using __noSuchMethod__</a></span>
                      </li>
                      <li>
                        <span class="file"><a href="advanced.php#jExts" class="published">Writing Jaxer Extensions</a></span>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="area">
                <span class="folder">Debug</span>
                <ul id="debug">
                  <li>
                    <span class="file"><a href="debug_debug_settings.php" class="published">Debug Settings</a></span>
                  </li>
                  <li>
                    <span class="file"><a href="debug_apache.php" class="published">Apache</a></span>
                  </li>
                  <li>
                    <span class="file"><a href="debug_ssl-errors.php" class="published">SSL Errors</a></span>
                  </li>
                </ul>
              </li>
              <li class="area" style="display: none;">
                <span class="file"><a href="configure/" class="not-drafted">Configure</a></span>
              </li>
              <li class="area" style="display: none;">
                <span class="file"><a href="extend/" class="not-drafted">Extend</a></span>
              </li>
              <li class="area" style="display: none;">
                <a href="architecture/" class="not-drafted">Architecture</a>
              </li>
            </ul>
          </div>
        </div>
      </td>
      <td valign="top">
        <div id="section-container">
          <div id="section-content" class="guide guide-content devices">
            <span style="float: right;"><img src="images/jaxer-logo-icon.png" alt=""></span>
            <div>
              <h1>
                Introduction
              </h1>
            </div>
            <p>
              Jaxer is the Aptana Ajax Server, and it's also built into Aptana Studio. Jaxer allows you to execute JavaScript on the server, before the page is served or during a callback. Now you can write your entire application, or your presentation layer, using a single, familiar Ajax codebase. It's standards-based and available under an open source license. And your pages that don't use Jaxer features will be unaffected by running it through Jaxer.
            </p>
            <p>
              Rich web applications and sites deliver great value but are hard to develop, deploy, and maintain. The client side of the application or site requires careful coordination of complex DHTML, JavaScript, and CSS—Aptana Studio is designed to greatly ease the client side of this pain.
            </p>
            <div class="imgBlock">
              <span class="left"><a href="images/introduction-traditional-stack.jpg" class="highslide" onclick="return hs.expand(this);"><img src="images/introduction-traditional-stack.jpg" alt="" title="Click to enlarge"></a></span> <span><a href="images/introduction-jaxer-stack.jpg" class="highslide" onclick="return hs.expand(this);"><img src="images/introduction-jaxer-stack.jpg" alt="" title="Click to enlarge"></a></span>
              <div class="clear10">
                &nbsp;
              </div>
            </div>
            <h2>
              Power of a JavaScript Server
            </h2>
            <p>
              Jaxer completes the picture by enabling you to:
            </p>
            <ul>
              <li>Develop your entire site or application using only standards-based DHTML, JavaScript, and CSS;
              </li>
              <li>Prepare the HTML DOM on the server before the page is served, using the same techniques and libraries you would use on the client;
              </li>
              <li>Call server-side JavaScript functions directly from client-side JavaScript;
              </li>
              <li>Validate your data with the same code on either the server and the client.
              </li>
            </ul>
            <p>
              <br>
              Jaxer directly addresses the difficulties of building rich web applications and sites by providing a unified development model. You use exactly the same well-understood technologies on the client and on the server, resulting in a simpler, more efficient development process that lets web developers focus on delivering value: an entire rich web application can be written in a single HTML document.
            </p>
            <h3>
              Jaxer and Web Servers
            </h3>
            <p>
              Jaxer is not a web server and requires a properly configured Apache instance or similar to function correctly. More apt comparisons are app servers/ frameworks like PHP, Ruby on Rails and WebLogic.
            </p>
            <p>
              Jaxer's architecture has two main components: a back end server which does the real work and a framework (API) which developers can code against and extend. Their are two server-side components, the Jaxer server and mod_jaxer, an Apache module which creates a communication bridge between the web server and the Jaxer server.
            </p>
            <p style="text-align: center;">
              <a href="images/jaxer-as-a-service.png" class="highslide" onclick="return hs.expand(this);"><img class="medium-inline" src="images/jaxer-as-a-service.png" alt="Jaxer as a Service" title="Click to enlarge"></a><br>
              <span class="caption">Jaxer communicates with mod_jaxer, which is plugged into Apache</span>
            </p>
            <h2>
              The Tech Details
            </h2>
            <p>
              JavaScript functions on the client call JavaScript functions on the server to fetch database information, manage sessions or, as needed, access back-end Java business objects and network resources. The DOM can be prepared on the server using the same Ajax libraries (such as <a href="http://jquery.com">jQuery</a>, <a href="http://dojotoolkit.org/">dojo</a>, <a href="http://prototype.org/">Prototype</a>, <a href="http://developer.yahoo.com/yui">YUI</a> and <a href="http://extjs.com/">EXT JS</a>) as used on the client.
            </p>
            <p>
              Jaxer implements established web standards with no proprietary markup or protocols. Applications and sites can now be built purely on Ajax technologies end to end, or Jaxer can be used for just the presentation layer (on both client and server) that connects to an existing business logic layer programmed in, say, Java or PHP.
            </p>
            <h3>
              Jaxer fits comfortably within most IT network configurations
            </h3>
            <ul>
              <li>Apache packaging allows it to function as a complete web application/page server
              </li>
              <li>Fits into an existing web server farm
              </li>
              <li>Can be deployed as a proxy for maximal flexibility, for example, for post-processing an existing outbound HTML stream
              </li>
            </ul>
            <p>
              <br>
              Jaxer's capabilities are possible because its built on top of the Mozilla SpiderMonkey engine, the same technology used inside Firefox, and so natively supports DOM manipulation, JavaScript execution and CSS. Jaxer affords an extensible and future-proof platform for building dashboards, optimizers, and compliance filters for use by IT and marketing organizations across multiple legacy web applications.
            </p>
            <h3>
              Examples of using Jaxer as a post-processor
            </h3>
            <ul>
              <li>Intelligently instrument the outbound HTML stream for monitoring performance and user experience and behavior
              </li>
              <li>Optimize the application (for example by aggregating JavaScript and CSS files to minimize network delays)
              </li>
              <li>Enforce security and compliance requirements
              </li>
              <li>Add new capabilities that were not designed into the original application
              </li>
            </ul>
            <h2 id="scaling">
              Jaxer Scalability
            </h2>
            <p>
              The architecture of Jaxer is such that you can scale horizontally quite easily. Jaxer is multi-processed with a manager that controls all the processes, similar to how Apache manages multiple httpd processes, and this allows you to configure Jaxer to best use the resources available on a single computer. As your application's workload increases you can set up multiple Jaxer server machines to share the load. Each process is single threaded.
            </p>
            <p>
              Whether your multiple processes run on one or multiple servers in order to properly manage information storage, at the session or persistent level, you need to use a shared database resource such as central MySQL database or cluster among them. By default Jaxer uses the database for sessions, rather than cookies.
            </p>
            <p>
              Typically Jaxer and Apache instances are co-located on the same server. They may be split onto separate computers if that fits your overall architecture and performance requirements. State information, such as session data, is stored in the shared database and not in each instance so some consideration should be given to the impact this has during your application design.
            </p>
            <p style="text-align: center;">
              <a href="images/jaxer-process-architecture.png" class="highslide" onclick="return hs.expand(this);"><img class="medium-inline" src="images/jaxer-process-architecture.png" alt="Jaxer Process Architecture" title="Click to enlarge"></a><br>
              <span class="example-description">Jaxer Process Architecture</span>
            </p>
            <p>
              Good results can usually be achieved by configuring between three and 10 Jaxer instances on a single machine. One sample configuration we tested was a server with four CPU cores, the best results came by setting the minimum and maximum Jaxer processes to 64 (roughly <code>(2 * number of CPU cores)^2</code>). You can look at this formula as a (very) rough guide to finding the best setting for your configuration and tune from there. Note that our test had nothing executing on the server other than Jaxer, Apache and MySQL with the latter two only servicing requests from Jaxer.
            </p>
            <p>
              For performance testing information on Jaxer, please refer to our blog post <a href="http://www.aptana.com/jaxer/benchmarks">First Jaxer Benchmarks</a>.
            </p>
          </div>
        </div>
        <div id="example-template" style="display:none;">
          <a onclick="return showHighslide(this);" class="highslide example-link"></a>
          <div class="highslide-html-content">
            <div class="highslide-header">
              <ul>
                <li class="highslide-move">
                  <a href="#" onclick="return false">Move</a>
                </li>
                <li class="highslide-close">
                  <a href="#" onclick="return hs.close(this)">Close</a>
                </li>
              </ul>
            </div>
            <div class="highslide-body">
              <div class="example-title"></div>
              <div class="example-description"></div>
              <div class="example-body" style="overflow-y:scroll;"></div>
            </div>
            <div class="highslide-footer"></div>
            <div id="closebutton" class="highslide-overlay closebutton" onclick="return hs.close(this)" title="Close"></div>
          </div>
        </div>
      </td>
    </tr>
  </table>
</div>
<?php include('../includes/footer.php'); ?>