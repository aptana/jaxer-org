<?php require_once('includes/config.php'); ?>
<?php ob_start(); ?>
		<h3>Jaxer in Aptana Studio</h3>
		<p>
		   For anyone new to Jaxer we recommend starting with
		   Jaxer in the context of Aptana Studio.  Studio
		   includes:
		   	<ul>
		   	<li>Embedded Jaxer server</li>
				<li>Jaxer API code-assist</li>
				<li>Samples</li>
				<li>Jaxer Console and Tailview</li>
				<li>Documentation</li>
				<li>API Reference</li>
			</ul>
			<a href="http://aptana.com/studio/download"><img src="<?php print WEB_ROOT;?>images/download_button.png" border="0"/></a><br />
		</p>
		<h3>Jaxer Server</h3>
		<p>
		   You can develop against and deploy the Jaxer
		   server by itself as well.
		  </p>
		  <p>After you <a href="<?php print WEB_ROOT;?>download">download</a> Jaxer, explore:
		   	<ul>
		   		<li><a href="<?php print WEB_ROOT;?>quick_start">Jaxer Install and Quick Start Guide</a></li>
				<li><a href="<?php print WEB_ROOT;?>tutorials/">Samples and Walkthroughs</a></li>
				<li><a href="<?php print WEB_ROOT;?>guide">Online Documentation</a></li>
				<li><a href="<?php print WEB_ROOT;?>api">Online API Reference</a></li>
			</ul>
			<div>
			  <a href="<?php print WEB_ROOT;?>download"><img src="<?php print WEB_ROOT;?>images/download_button.png" border="0"/></a><br />
		  </div>
		</p>
<?php $sidebar = ob_get_clean(); ?>
<?php $active = 'home';?>
<?php include('includes/header.php'); ?>
  <h1>Create entire apps using JavaScript and Ajax</h1>
  <p>Use the same ubiquitous set of languages you find in the Web browser, on the server to build full apps or presentation tiers faster and more easily.</p>

   <style>
   	.code_image {
   		border:solid 1px #cccccc;
  		border-left: solid 2px #333333;
  		margin-top:10px;
  		margin-bottom:10px;
  		padding-top:10px;s
  		padding-bottom:10px;
  		width:575px;
   	}
   	
   	.thumbnail {
   	  float:left;
   	  margin-right:15px;
   	}
   </style>

   <div id="tabwrapper" class="clearfix">
     <div id="tabcontent">

       <!--// CONTAINER FOR OVERVIEW TAB //-->

       <div id="content_overview" class="content_container">
         <h2 class="content_intro">Use the APIs and standards you already know</h2>


  	  <div class="screencast clearfix">
           <div class="thumbnail">
                <a href="http://tv.aptana.com/videos/introduction-to-jaxer-10?ref=topic&refId=2"><img src="<?php print WEB_ROOT;?>images/jaxer.jpg" /></a><br/>
                <a href="http://tv.aptana.com/videos/introduction-to-jaxer-10?ref=topic&refId=2" class="watch">Watch screencast</a>
              </div>
           <div class="description">
             <!-- <h3>High Performance and Scalabe</h3> -->
             <p>HTML, JavaScript, and CSS are all native 
  			 to Jaxer, as are XMLHttpRequests, JSON, and DOM scripting.  
  			 And as a server it offers access to databases, files, and networking, 
  			 as well as logging, process management, scalability, security, 
  			 integration APIs, and extensibility. 
  			</p>
  			<p>
               Jaxer is licensed under the GPL, and leverages the ubiquitous 
  			 Mozilla engine that is used in Firefox 3, which means that 
  			 Jaxer is fully compatible with the latest JavaScript 
  			 standards, including access to all of the features you are 
  			 familiar with - from Date to Math to window and document, 
  			 and even JavaScript 1.5, 1.7, and 1.8 - they're all there. 
  			 If you know JavaScript and HTML, you can already build 
  			 Jaxer applications.
  		  </p>
           </div>
         </div>


  	  <div class="freetext clearfix">

           <div class="description">
             <h3>Database, file, and socket access from JavaScript</h3>
             <p>
  			 With Jaxer, your JavaScript gains full access to databases such as MySQL or the integrated SQLite database. Rich filesystem I/O as well as low-level network socket access are available to you all directly in JavaScript on the server. And you can call those server functions seamlessly from the client - exposing only the ones consistent with your security requirements.			                

  			<div class="code_image"><img src="<?php print WEB_ROOT; ?>images//Picture+4_0.png" alt="" /></div>

             </p>
           </div>
         </div>

  	  <div class="freetext clearfix">

           <div class="description">
             <h3>Share validation code on the browser and server</h3>
             <p>
               With Jaxer, you can also tag any function or block of functions to run on both the server and the browser. Developers can write logic once, and it can be executed from either location. One ideal use of this is data validation. Validate your forms on the client to provide instant user feedback, and once the form is successfully submitted, validate it again on the server to ensure its integrity, using the exact same logic - no more code rewriting, and no getting them out of sync and possibly opening security holes.

  			<div class="code_image"><img src="<?php print WEB_ROOT; ?>images//Picture+3_0.png" alt="" /></div>

             </p>
           </div>
         </div>


  	  <div class="freetext clearfix">

           <div class="description">
             <h3>Easily create RESTful JSON data services</h3>
             <p>
               Not surprisingly, JSON is native to Jaxer, so creating
  			RESTful JSON services to provide data to Ajax, Adobe Flash, 
  			Adobe Flex and even Microsoft Silverlight clients 
  			is dead easy.

  			<div class="code_image"><img src="<?php print WEB_ROOT; ?>images//Picture+6.png" alt="" /></div>

             </p>
           </div>
         </div>

  		<div class="freetext clearfix">

  		<div class="description">
             <h3>Directly call server-side functions from the browser</h3>
             <p>
               No need to write cumbersome XML HTTP requests with Jaxer (though you can!).  Instead
  			you can "proxy" your scripts by setting "runat=server-proxy".  Then you call the function
  			in the HTML page just as you would any other client-side function but Jaxer executes it on the server
  			and returns the result to the client. All of the data marshaling and communications are 
  			handled transparently for you.  And to enable asynchronous communications, just 
  			prepend "Async" to the function name and specify a callback function.


  			<div class="code_image"><img src="<?php print WEB_ROOT; ?>images//Picture+2_0.png" alt="" /></div>

             </p>
           </div>
         </div>

  	  <div class="freetext clearfix">

           <div class="description">
             <h3>Full DOM and JavaScript on the server</h3>
             <p>
  			Because Jaxer is a full Ajax server, you can not only run JavaScript on the server using the same techniques you've mastered in the browser, but you can also manipulate the DOM in the APIs you already use. 			                

  			<div class="code_image"><img src="<?php print WEB_ROOT; ?>images//Picture+2.png" alt="" /></div>

             </p>
           </div>
         </div>

  	  <div class="freetext clearfix">

           <div class="description">
             <h3>Use your favorite Ajax libraries server-side</h3>
             <p>
  			Run jQuery, dojo, Ext JS, prototype, scriptaculous and other Ajax libraries on Jaxer to manipulate the HTML page and DOM before the page gets sent to the browser and those libraries can be used again.  Customize content or forms server-side based on user profiles, optimize app performance by aggregating external scripts, CSS, and even images into single HTTP requests, generate pages optimized for devices that do not support Ajax, or flatten pages for search engine optimizations.			                

  			<div class="code_image"><img src="<?php print WEB_ROOT; ?>images//Picture+1.png" alt="" /></div>

             </p>
           </div>
         </div>	

  	  <div class="freetext clearfix">

           <div class="description">
             <h3>Manipulate, mashup and morph any existing HTML page</h3>
             <p>
             	Consume and transform content from HTML pages written in other languages like PHP, Python, Ruby on Rails, .NET or Java.
               Jaxer includes a rich framework for many useful tasks on the server, including accessing local or remote web resources and services without cross-domain security restrictions that a browser might impose, or rewriting HTML pages generated by other platforms.

  			<div class="code_image"><img src="<?php print WEB_ROOT; ?>images//Picture+6.png" alt="" /></div>

             </p>
           </div>
         </div>



       </div>
  	<!--// CONTAINER FOR THE HOW JAXER WORKS TAB //-->

       <div id="content_how" class="content_container">
         <h2 class="content_intro">A Browser's Engine Running on the Server</h2>			  
  	  <div class="freetext">
  		  <div class="description">				

  				<p>Jaxer's core engine is based on the same 
  				   Mozilla engine that you'll find in the popular Mozilla 
  				   Firefox browser.  This means that the execution environment
  				   you use on both the client and the server are the same.  
  				   It's Ajax all the way through and through.
  				   That means you only need one set of languages -- the
  				   languages that are native to the browser -- to create
  				   entire applications.</p>

  				   <p>Read on for a short summary of how Jaxer works, 
  				   or go deep in this 
  				   <a href="/node/150">Jaxer Architectural Overview</a>.</p>

         <h2 class="content_intro">Lifecycle of a HTML page with Jaxer</h2>			  

  				<div class="code_image" style="text-align:center;"><img src="<?php print WEB_ROOT; ?>images//page_flow_diagram.png" /></div>

  				<ul>
  					<li>
  					<b>Step 1.</b>
  					Jaxer executes the JavaScript functions that are set to runat="server" or
  					runat="both".  These functions might call databases, file systems, 
  					communicate across network sockets, or get session data.  And since the
  					server-side engine has a HTML document object model (DOM) just like the 
  					browser, the HTML page can be manipulated through standard DOM APIs and
  					your favorite Ajax libraries.  Jaxer also has session objects that
  					you can use to persist data for users during a session or transaction.
  					Any functions set to runat="server" are stripped from what gets sent to the 
  					browser.<br />&nbsp;
  					</li>

  					<li>
  					<b>Step 2.</b>
  					After Jaxer sends the resulting HTML page to the browser, the browser
  					interprets the page and executes the JavaScript within it.  If you included
  					JavaScript functions tagged to runat="server-proxy", then Jaxer
  					automatically strips out the bodies of those functions and replaces it
  					with a new functions by the same name that know how to invoke 
  					the original function on the server using Ajax calls
  					and return the result either synchronously or asynchronously. Best of
  					all you need not write any Ajax communications yourself.  This is all done 
  					for you.  
  					Any functions not tagged with a runat attribute or set to runat="client" or runat="both"
  					are processed by the browser.<br />&nbsp;
  					</li>

  					<li>
  					<b>Step 3.</b>
  					Any functions you set to runat="server-proxy" can now be called from the 
  					client.  All you do is call the function as if it were running on the client, 
  					and Jaxer, automatically via XHR communications with the server, marshalls
  					the parameters to the server where the function executes (calling databases, 
  					getting info from the session data, etc...) and returns the result to the
  					browser.  To make Jaxer the ultimate in ease, you can invoke these "server-proxy" functions either synchronously 
  					or asynchronously.
  					</li>
  				</ul>
  				</p>

  				  <h2 class="content_intro">A whole app in a HTML page?</h2>
  				<p>
  				By default Jaxer processes .html files on the server before sending them on to the server.
  				You can configure Jaxer to process other files extensions as well, or even
  				set Jaxer up to provide RESTful JSON services to other apps -- even non-Ajax apps.
  				This means that you could create a whole app in a single HTML page if you
  				wanted, though multiple files is still the best practice for more extensive
  				applications and team development processes.
  				  </p>

  	      </div>
        </div>

  	 </div> 

    	<!--// CONTAINER FOR THE BENCHMARKS TAB //-->

       <div id="content_benchmarks" class="content_container">
        <h2 class="content_intro">Jaxer performs in the range of PHP and Ruby on Rails</h2>			  
  	  <div class="freetext">
  		  <div class="description">				

  				<p>
  				   Jaxer 1.0 is ready for full-scale application deployments and
  				   while our plans are to continue to boost performance with each
  				   release, initial studies show that Jaxer performs in the range
  				   of the widely used PHP and Ruby on Rails application platforms.
  				</p>

  				<div class="code_image" style="text-align:center;"><img src="<?php print WEB_ROOT; ?>/images/jaxer_benchmarks0_individuals_2.png" /></div>

  				<p>
  				  See for yourself.  <a href="<?php print WEB_ROOT;?>benchmarks">Get all the details</a> behind the benchmark data above.
  				</p>

  	      </div>
        </div>

  	 </div> 

  </div>

  
<?php include('includes/footer.php'); ?>