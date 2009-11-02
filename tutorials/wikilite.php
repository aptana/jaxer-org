<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'Jaxer WikiLite Walkthrough'; ?>
<?php include('../includes/header.php'); ?>
  <h3>
  This sample ships with code updated for Jaxer 1.0 and Aptana Studio 1.2 and is a good sources of information but the tutorial has not yet been revised to match.
  </h3>

  		<h2>Contents</h2>
  		<ul>			<li><a href="#Introduction">Introduction</a></li>
  			<li><a href="#Viewing_the_sample_application">Viewing the sample application</a></li>
  			<li><a href="#About_the_client-side_WikiLite_code">About the client-side WikiLite code</a><ul>
  				<li><a href="#Style_information">Style information</a></li>
  				<li><a href="#The_body_area">The <tt>body</tt> area</a></li>
  				<li><a href="#Client-side_scripting">Client-side scripting</a><ul>
  					<li><a href="#init.28.29">init()</a></li>
  					<li><a href="#setEditing.28.29">setEditing()</a></li>
  					<li><a href="#.24.28.29">$()</a></li>
  					<li><a href="#editOrSave.28.29">editOrSave()</a></li>
  					<li><a href="#checkValid.28.29">checkValid()</a></li></ul></li>
  				<li><a href="#Server-side_scripting">Server-side scripting</a><ul>
  					<li><a href="#Determining_which_functions_run_where">Determining which functions run where</a></li></ul></li>
  				<li><a href="#Server-side_functions">Server-side functions</a><ul>
  					<li><a href="#readAndFill.28.29">readAndFill()</a></li>
  					<li><a href="#getFilePath.28.29">getFilePath()</a></li>
  					<li><a href="#save.28contents.29">save(contents)</a></li></ul></li></ul></li>
  			<li><a href="#Testing_the_WikiLite_application">Testing the WikiLite application</a><ul>
  				<li><a href="#Editing_and_saving_text">Editing and saving text</a></li>
  				<li><a href="#Validating_the_text_area_contents">Validating the text area contents</a></li></ul></li>
  			<li><a href="#Complete_WikiLite_application_code">Complete WikiLite application code</a></li>
  		</ul>

          <a name="Introduction"></a>
          <h2>Introduction</h2>
          <p>
              Your Jaxer installation includes an example of a very basic Wiki web application. This simple application allows you to enable text editing, write a few text characters, save your text to a file, and reload your data into the web page when you re-enter or refresh the page.
          </p>
          <p>
              The diagram below shows the basic flow of this application.
          </p>
          <p>
              <img src="<?php print WEB_ROOT; ?>/images/wikiLiteOverview.png"/>
          </p>
          <p>
              This application consists of a single HTML file (<b>WikiLite/index.html</b>) that contains style information and a bit of JavaScript. Open this page in Aptana Studio to follow along as the following sections walk you through the application code.
          </p>

          <a name="Viewing_the_sample_application"></a>
          <h2>Viewing the sample application</h2>
          <p>
              Your Jaxer installation (whether as a standalone Jaxer Package or in Aptana Studio) includes the WikiLite application.
          </p>
          <p>
              To access the WikiLite application from within Aptana Studio:
          </p>
          <p>
              <ol>
          </p>
          <li>
              In the Samples View, expand the <b>Aptana Jaxer</b>
              folder.
          </li>
          <li>
              Select the <b>WikiLite</b>
              example.
          </li>
          <li>
          Click either the <b>Preview Sample</b>
          button <img src="<?php print WEB_ROOT; ?>/images/iconPreviewSample.png" />to do a quick preview of the sample, or click the <b>Import Sample</b>
          button <img src="<?php print WEB_ROOT; ?>/images/iconImportSample.png" />to import the sample as a project into your workspace.
          </ol> To access the WikiLite application from a standalone Jaxer Package installation:
          <ol>
              <li>
                  Navigate to your Jaxer installation folder, and double-click the <b>StartServers.bat</b>
                  file.
              </li>
              <li>
                  In your web browser, navigate to the following URL: <a href="http://localhost:8081/aptana/" class='external free' title="http://localhost:8081/aptana/" rel="nofollow">http://localhost:8081/aptana/</a>
              </li>
              <li>
                  From the column on the left, click the <b>Apps and Tools</b>
                  link.
              </li>
              <li>
                  Click the <b>WikiLite</b>
                  link.
              </li>
              <p>
          </ol>
      </p>

      <a name="About_the_client-side_WikiLite_code"></a>
      <h2>About the client-side WikiLite code</h2>
      <p>
          Before we what happens on the server with the WikiLite application, let's take a look at the client-side code, including how the web page is laid out.
      </p>

      <a name="Style_information"></a>
      <h3>Style information</h3>
      <p>
          The 
          <tt>
              head
          </tt>
          tag of this web page contains some basic CSS styling, contained in a set of 
          <tt>
              style
          </tt>
          tags:
      </p>
  <textarea name="code" class="html">		<style>
  			html {
  				height: 95%;
  				width: 99%;
  				padding: 0;
  				margin: 0;
  			}

  			#contents {
  				width: 100%;
  				height: 95%;
  			}

  			#editOrSave {
  				width: 100%;
  			}

  			.readonly {
  				font: 8pt verdana;
  				background-color: #f0f0ff;
  				border: none;
  				padding: 8px;
  			}

  			#applicationContent {
  				height: 90%;
  			}
  		</style>
  </textarea>    <p>
          This styling formats the text area slightly differently than the rest of the page. The 
          <tt>
              .readonly
          </tt>
          class displays the 
          <tt>
              textarea
          </tt>
          with a different font and background color when the page is in read-only mode.
      </p>

      <a name="The_body_area"></a>
      <h3>The 
          <tt>
              body
          </tt>
          area
      </h3>
      <p>
          The applicationContent DIV in the BODY consists of a single text area and an input button:
      </p>
  <textarea name="code" class="html">
  			<input type="button" id="editOrSave" onclick="editOrSave()">
  			<textarea id="contents">&lt;/textarea>
  </textarea>    <p>
          The 
          <tt>
              textarea
          </tt>
          holds the contents of the wiki, and the 
          <tt>
              input
          </tt>
          button has an 
          <tt>
              onclick
          </tt>
          event handler that toggles the "edit" functionality on when the page is read-only. The button also saves the textarea contents when the page is in "edit" mode.
      </p>
      <p>
          <b>Note:</b>
          The 
          <tt>
              body
          </tt>
          tag also has an 
          <tt>
              onserverload
          </tt>
          event handler. We'll discuss the functionality of this event handler later on in this article.
      </p>

      <a name="Client-side_scripting"></a>
      <h3>Client-side scripting</h3>
      <p>
          The 
          <tt>
              head
          </tt>
          tag contains a 
          <tt>
              script
          </tt>
          tag with the JavaScript for the WikiLite application. Five of the functions in this 
          <tt>
              script
          </tt>
          tag perform client-side functionality:
      </p>
      <ul>
          <li>
              <tt>
                  init()
              </tt>
          </li>
          <li>
              <tt>
                  setEditing()
              </tt>
          </li>
          <li>
              <tt>
                  $()
              </tt>
          </li>
          <li>
              <tt>
                  editOrSave()
              </tt>
          </li>
          <li>
              <tt>
                  checkValid()
              </tt>
          </li>
      </ul>

      <a name="init.28.29"></a>
      <h4>
          <tt>init()</h4>
      <p>
      The &lt;tt&gt;init()
      </tt>
      function is called when the page loads. It sets the page to read-only mode on the page load. It also calls the 
      <tt>
          readAndFill()
      </tt>
      function, which reads the contents of a file and displays them in the 
      <tt>
          textarea
      </tt>
      on this page. We'll discuss this in more depth later on in this article.
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Set the initial editing state to false and read in the last saved
  			 * value of the 'wiki'
  			 */
  			function init()
  			{
  				setEditing(false);
  				readAndFill();
  			}
  </textarea>
  <a name="setEditing.28.29"></a>
  <h4>
      <tt>
          setEditing()
      </tt>
  </h4>
  <p>
      The 
      <tt>
          setEditing() function sets the mode (read-only or read-write) of the contents area by using the &lt;tt&gt;readOnly
      </tt>
      and 
      <tt>
          className
      </tt>
      attributes of "contents". If the "contents" are not "editable", the "contents" are then "readonly". 
  </p>
  <p>
      This function also sets the  value of the 
      <tt>
          editOrSave
      </tt>
      button. If the "contents" are read-only, the button reads "edit". If the "contents" are "editable", the button reads "save", and the function sets the focus to the "contents" area, so that a user can easily type something in the 
      <tt>
          textarea
      </tt>.
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Set the editing state of the textarea as well as the label of the action button
  			 */
  			function setEditing(editable)
  			{
  				$("contents").readOnly = !editable;
  				$("contents").className = editable ? "" : "readonly";
  				$("editOrSave").value = editable ? "save" : "edit"; // set the button label
  				if (editable)
  				{
  					$("contents").focus();
  				}
  			}
  </textarea>
  <a name=".24.28.29"></a>
  <h4>
      <tt>
          $()
      </tt>
  </h4>
  <p>
      The 
      <tt>
          $()
      </tt>
      function is a simple helper function to get elements by ID. If you were coding this on your own, you could choose to use the 
      <tt>
          $()
      </tt>
      function of your favorite Ajax library.
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Easy access to a named element in the DOM
  			 */
  			function $(id)
  			{
  				return document.getElementById(id);
  			}

  </textarea><a name="editOrSave.28.29"></a>
  <h4>
      <tt>
          editOrSave()
      </tt>
  </h4>
  <p>
      The 
      <tt>
          editOrSave()
      </tt>
      function first determines if you are already in edit mode or not. If you are in edit mode, it does a quick validation check on the contents of the text area, and if these validate, saves the contents and re-sets the page to read-only mode. 
  </p>
  <p>
      If the contents are not valid, 
      <tt>
          editOrSave()
      </tt>
      throws an alert containing a message describing the error.
  </p>
  <p>
      If you are not in edit mode, 
      <tt>
          editOrSave()
      </tt>
      simply toggles off the read-only mode for the contents 
      <tt>
          textarea
      </tt>. 
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Depending on the state of the editing text area, either save the contents to the
  			 * server or go into edit mode.
  			 */
  			function editOrSave()
  			{
  				var isEditing = !$("contents").readOnly;
  				if (isEditing) // try to save and get out of edit mode
  				{
  					try
  					{
  						var contents = $("contents").value;
  						checkValid(contents);
  						save(contents);
  						setEditing(false);
  					}
  					catch (e)
  					{
  						alert(e);
  					}
  				}
  				else // go into edit mode
  				{
  					setEditing(true);
  				}
  			}
  </textarea>
  <a name="checkValid.28.29"></a>
  <h4>
      <tt>
          checkValid()
      </tt>
  </h4>
  <p>
      The 
      <tt>
          checkValid()
      </tt>
      function does a quick validation check on the number of characters input into "contents". If a user types more than 10000, it throws an error message saying "Too long!".
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Check to make sure our wiki entry isn't too long, this is arbitrary
  			 */
  			function checkValid(contents)
  			{
  				if (contents.length > 10000)
  				{
  					throw "Too long!";
  				}
  			}
  </textarea>
  <a name="Server-side_scripting"></a>
  <h3>Server-side scripting</h3>
  <p>
      Now that you have a basic idea of how the page is set up and how it functions, we'll examine how this page interacts with the Jaxer server. By adding server-side functionality, we're able to save the text that you type into "contents" and have it persist from one session to another.
  </p>
  <p>
      Since we'll be running our JavaScript on the server, we need to specify this in our 
      <tt>
          script
      </tt>
      tag. If you look at the 
      <tt>
          script
      </tt>
      tag in our sample code, you'll see that we've added a 
      <tt>
          runat="server"
      </tt>
      attribute:
  </p>
  <textarea name="code" class="html">
  	&lt;script type="text/javascript" runat="server">
  </textarea>
  	<a name="Determining_which_functions_run_where"></a>
  <h4>Determining which functions run where</h4>
  <p>
      Out of the functions described in the above section, we'll need several of them to be available both on the client and on the server. On line 54, we set the 
      <tt>
          setEditing
      </tt>
      function to be available to be run on both:
  </p>
  <div class="csh">
      <pre class="javascript">setEditing.<span style="color: #006600;">runat</span> = <span style="color: #3366CC;">&quot;both&quot;</span>;</pre>
  </div>
  <p>
      We need this function available both on the server when we prepare the page and on the client when the user toggles editing mode on and off.
  </p>
  <p>
      On line 60, we set the 
      <tt>
          $()
      </tt>
      function to run at both:
  </p>
  <div class="csh">
      <pre class="javascript">$.<span style="color: #006600;">runat</span> = <span style="color: #3366CC;">&quot;both&quot;</span>;</pre>
  </div>
  <p>
      This is so that we can perform various Ajax functionality and DOM manipulation on both the front and back end of the application.
  </p>
  <p>
      On line 93, we also set the 
      <tt>
          checkValid
      </tt>
      function to run at both:
  </p>
  <div class="csh">
      <pre class="javascript">checkValid.<span style="color: #006600;">runat</span> = <span style="color: #3366CC;">&quot;both&quot;</span>;</pre>
  </div>
  <p>
      We need to be able to validate the contents on both the client and the server. The client performs an initial check, but the server validation catches anything not caught by the client.
  </p>
  <p>
      Because the 
      <tt>
          editOrSave
      </tt>
      function is only applicable to the client, we set its 
      <tt>
          runat
      </tt>
      value to "client"only.
  </p>
  <div class="csh">
      <pre class="javascript">editOrSave.<span style="color: #006600;">runat</span> = <span style="color: #3366CC;">&quot;client&quot;</span>;</pre>
  </div>
  <p>
      Finally, remember the 
      <tt>
          init()
      </tt>
      function that was attached to an event handler in the 
      <tt>
          body
      </tt>
      tag? We want the page to be initialized when the server loads, so this is when we specify for 
      <tt>
          init()
      </tt>
      to be called:
  </p>
  <div class="csh">
      <pre class="html4strict"><span style="color: #009900;"><a href="http://december.com/html/4/element/body.html"><span style="color: #000000; font-weight: bold;">&lt;body</span></a> onserverload=<span style="color: #ff0000;">&quot;init()&quot;</span><span style="color: #000000; font-weight: bold;">&gt;</span></span></pre>
  </div>

  <a name="Server-side_functions"></a>
  <h3>Server-side functions</h3>
  <p>
      The WikiLite application has three functions that are specific to server-side functionality:
  </p>
  <ul>
      <li>
          <tt>
              readAndFill()
          </tt>
      </li>
      <li>
          <tt>
              getFilePath()
          </tt>
      </li>
      <li>
          <tt>
              save(contents)
          </tt>
      </li>
  </ul>

  <a name="readAndFill.28.29"></a>
  <h4>
      <tt>
          readAndFill()
      </tt>
  </h4>
  <p>
      The 
      <tt>
          readAndFill()
      </tt>
      function gets the contents of a file that is obtained by calling the 
      <tt>
          getFilePath
      </tt>
      function. It checks if a file exists at the filepath, and if the file exists, gets the file contents and sets the value "contents" to those file contents. If the file does not exist, 
      <tt>
          readAndFill()
      </tt>
      leaves "contents" blank.
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Open up the file we're using to save data and read in its contents
  			 * and set that to the value of the textarea.
  			 */
  			function readAndFill()
  			{
  				var filePath = getFilePath();
  				var fileExists = Jaxer.File.exists(filePath);
  				$("contents").value = fileExists ? Jaxer.File.read(filePath) : "";
  			}

  </textarea><a name="getFilePath.28.29"></a>
  <h4>
      <tt>
          getFilePath()
      </tt>
  </h4>
  <p>
      The 
      <tt>
          getFilePath()
      </tt>
      function returns the "contents.txt" file. (This has been hard-coded for the sake of the demo application):
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Return the filename of the file that will persist our wiki contents
  			 */
  			function getFilePath()
  			{
  				return "contents.txt";
  			}
  </textarea>
  <a name="save.28contents.29"></a>
  <h4>
      <tt>
          save(contents)
      </tt>
  </h4>
  <p>
      The 
      <tt>
          save(contents)
      </tt>
      function normalizes newline characters for Windows and Mac and then does an additional validation check on the contents. 
      <tt>
          save
      </tt>
      then finally writes "contents" to the file at 
      <tt>
          getFilePath
      </tt>.
  </p>
  <textarea name="code" class="javascript">			/*
  			 * Do the actual saving of the text that was entered.
  			 */
  			function save(contents)
  			{
  				contents = contents.replace(/\r\n/g, "\n"); // normalize newlines for Windows/IE;
  				contents = contents.replace(/\r/g, "\n"); // normalize newlines for Mac;
  				checkValid(contents);
  				Jaxer.File.write(getFilePath(), contents);
  			}
  			// Because we want this function available to the client as well, we set its 'proxy'
  			// value to 'true'
  			save.proxy = true;
  </textarea><p>
      <br/>
      We set the proxy value of this function to "true" so that the function can be called from the client, but the contents are actually saved on the server.
  </p>
  <div class="csh">
      <pre class="javascript">save.<span style="color: #006600;">proxy</span> = <span style="color: #003366; font-weight: bold;">true</span>;</pre>
  </div>

  <a name="Testing_the_WikiLite_application"></a>
  <h2>Testing the WikiLite application</h2>
  <p>
      This section walks you through a few quick tests to see how the functionality of the WikiLite application works. You'll add some text to the page, save that text to a file on the server, and perform a validation check both on the client and then on the server.
  </p>

  <a name="Editing_and_saving_text"></a>
  <h3>Editing and saving text</h3>
  <p>
      To test the functionality of the WikiLite application:
  </p>
  <p>
      <ol>
  </p>
  <li>
      With the <b>index.html</b>
      file for the WikiLite application open, click the Firefox tab to preview the application in <b>Firefox</b>. The preview should look like the screen below.
      <p>
          When the page loads, the 
          <tt>
              onserverload
          </tt>
          event triggers the 
          <tt>
              init()
          </tt>
          function, which in turn calls the 
          <tt>
              setEditing
          </tt>
          function to set the text area to read-only. The 
          <tt>
              init()
          </tt>
          function also calls 
          <tt>
              readAndFill
          </tt>
          which reads the contents of a remote file (if it exists) and fills the text area with those contents .
      </p>
      <p>
          <img src="<?php print WEB_ROOT; ?>/images/wikiLite1.png"/>
      </p>
  </li>
  <li>
      Click the <b>edit</b>
      button.
      <p>
          WikiLite enables the text area for typing, which switches from a blue background to a white background. It also changes the name of the button from "edit" to "save". These events happen as a result of calling the 
          <tt>
              editOrSave
          </tt>
          function.
      </p>
  </li>
  <li>
      In the text area, type a few characters, and click the <b>save</b>
      button.
      <p>
          Clicking <b>save</b>
          calls 
          <tt>
              editOrSave
          </tt>
          again and toggles edit mode off. It also calls the 
          <tt>
              save
          </tt>
          function, which normalizes whitespace, validates the text contents, and writes the contents to a file on the Jaxer server.
      </p>
  </li>
  <p>
  </ol>
  </p>

  <a name="Validating_the_text_area_contents"></a>
  <h3>Validating the text area contents</h3>
  <p>
      The 
      <tt>
          checkValid
      </tt>
      function checks whether the text entered into "contents" meets its validity criteria. As currently written, the text must simply be less than 10000 characters. This function is run on the client when it is called by the 
      <tt>
          editOrSave
      </tt>
      function, and it is also run on the server when it is called by the 
      <tt>
          save
      </tt>
      function. To test this function yourself, you can make a couple of minor changes to the code.
  </p>
  <p>
      To test validity checking on the client:
  </p>
  <p>
      <ol>
  </p>
  <li>
      Go to the 
      <tt>
          checkValid
      </tt>
      function in <b>index.html</b>.
  </li>
  <li>
      Change the length limit from 10000 to 10 (shown below):
      <p>
  <textarea name="code" class="javascript"> 			/*
  			 * Check to make sure our wiki entry isn't too long, this is arbitrary
  			 */
  			function checkValid(contents)
  			{
  				if (contents.length > 10)
  				{
  					throw "Too long!";
  				}
  			}
  </textarea>    </p>
  </li>
  <li>
      Test the client-side validation:
      <ol>
          <li>
              Click the Firefox preview tab to preview the page in Firefox.
          </li>
          <li>
              Click the <b>edit</b>
              button to toggle on edit mode.
          </li>
          <li>
              In the text area, type over 10 characters of text.
          </li>
          <li>
              Click the <b>save</b>
              button.
              <p>
                  The WikiLite app displays a "Too long!" error telling you that the text that you entered is too long.
              </p>
          </li>
      </ol>
  </li>
  <p>
  </ol>
  </p>
  <p>
      To test validity on the server:
  </p>
  <p>
      <ol>
  </p>
  <li>
      Leave the 
      <tt>
          checkValid
      </tt>
      function with the modification that you made above.
  </li>
  <li>
  Comment out the validity check on the client-side:
  <ol>
      <li>
          Go to the 
          <tt>
              editOrSave
          </tt>
          function (line 63).
      </li>
      <li>
          Comment out line 13 (as shown below), where the 
          <tt>
              checkValid
          </tt>
          function is called (shown below):
          <p>
  <textarea name="code" class="javascript">			/*
  			 * Depending on the state of the editing text area, either save the contents to the
  			 * server or go into edit mode.
  			 */
  			function editOrSave()
  			{
  				var isEditing = !$("contents").readOnly;
  				if (isEditing) // try to save and get out of edit mode
  				{
  					try
  					{
  						var contents = $("contents").value;
  						checkValid(contents);
  						save(contents);
  						setEditing(false);
  					}
  					catch (e)
  					{
  						alert(e);
  					}
  				}
  				else // go into edit mode
  				{
  					setEditing(true);
  				}
  			}
  </textarea>        
  </p>
      </li>
      <li>
          Test the client-side validation:
          <ol>
              <li>
                  Click the Firefox preview tab to preview the page in Firefox.
              </li>
              <li>
                  Click the <b>edit</b>
                  button to toggle on edit mode.
              </li>
              <li>
                  In the text area, type over 10 characters of text.
              </li>
              <li>
                  Click the <b>save</b>
                  button.
                  <p>
                      The WikiLite app displays a "Too long!" server error telling you that the text that you entered is too long.
                  </p>
              </li>
          </ol>
      </li>
      <p>
  </ol>
  </p>

  <a name="Complete_WikiLite_application_code"></a>
  <h2>Complete WikiLite application code</h2>
  <p>
      The following code sample is the entire page of code for the WikiLite application:
  </p>
  <textarea name="code" class="html">
  	<html>
  	<head>
  		<title>WikiLite</title>
  		<link rel='stylesheet' type='text/css' href='css/index.css'>

  		<style>
  			html {
  				height: 95%;
  				width: 99%;
  				padding: 0;
  				margin: 0;
  			}

  			#contents {
  				width: 100%;
  				height: 95%;
  			}

  			#editOrSave {
  				width: 100%;
  			}

  			.readonly {
  				font: 8pt verdana;
  				background-color: #f0f0ff;
  				border: none;
  				padding: 8px;
  			}

  			#applicationContent {
  				height: 90%;
  			}
  		</style>

  		<!-- This script block is a standard script block and runs on the browser only -->
  		<script type="text/javascript">
  			/*
  			 * Depending on the state of the editing text area, either save the contents to the
  			 * server or go into edit mode.
  			 */
  			function editOrSave()
  			{
  				var isEditing = !$("contents").readOnly;
  				if (isEditing) // try to save and get out of edit mode
  				{
  					try
  					{
  						var contents = $("contents").value;
  						checkValid(contents);
  						save(contents);
  						setEditing(false);
  					}
  					catch (e)
  					{
  						alert(e);
  					}
  				}
  				else // go into edit mode
  				{
  					setEditing(true);
  				}
  			}
  		</script>

  		<!-- This script block will execute only on the server because of the
  			runat="server" attributes. -->
  		<script type="text/javascript" runat="server">

  			/*
  			 * Set the initial editing state to false and read in the last saved
  			 * value of the 'wiki'
  			 */
  			function init()
  			{
  				setEditing(false);
  				readAndFill();
  			}

  			/*
  			 * Open up the file we're using to save data and read in its contents
  			 * and set that to the value of the textarea.
  			 */
  			function readAndFill()
  			{
  				var filePath = getFilePath();
  				var fileExists = Jaxer.File.exists(filePath);
  				$("contents").value = fileExists ? Jaxer.File.read(filePath) : "";
  			}

  			/*
  			 * Return the filename of the file that will persist our wiki contents
  			 */
  			function getFilePath()
  			{
  				return "contents.txt";
  			}

  			/*
  			 * Do the actual saving of the text that was entered.
  			 */
  			function save(contents)
  			{
  				contents = contents.replace(/\r\n/g, "\n"); // normalize newlines for Windows/IE;
  				contents = contents.replace(/\r/g, "\n"); // normalize newlines for Mac;
  				checkValid(contents);
  				Jaxer.File.write(getFilePath(), contents);
  			}
  			// Because we want this function available to the client as well, we set its 'proxy'
  			// value to 'true'
  			save.proxy = true;

  		</script>

  		<!-- This script block will be available on both client and server since the 
  			runat attribute is set to 'both'. -->
  		<script type="text/javascript" runat="both">
  			/*
  			 * Easy access to a named element in the DOM
  			 */
  			function $(id)
  			{
  				return document.getElementById(id);
  			}

  			/*
  			 * Set the editing state of the textarea as well as the label of the action button
  			 */
  			function setEditing(editable)
  			{
  				$("contents").readOnly = !editable;
  				$("contents").className = editable ? "" : "readonly";
  				$("editOrSave").value = editable ? "save" : "edit"; // set the button label
  				if (editable)
  				{
  					$("contents").focus();
  				}
  			}

  			/*
  			 * Check to make sure our wiki entry isn't too long, this is arbitrary
  			 */
  			function checkValid(contents)
  			{
  				if (contents.length > 10000)
  				{
  					throw "Too long!";
  				}
  			}
  		</script>

  	</head>

  	<!-- We set a new attribute on the body tag: 'onserverload'. It works just like 'onload', but
  			on the server-side. When Jaxer is done loading the page, the function specified will
  			be executed. You can have both onserverload and onload, for server and client, 
  			respectively. -->
  	<body onserverload="init()">
  		<script type="text/javascript" src="lib/wz_tooltip.js"></script>
  		<div id='sampleDescription'>
  			An extremely lightweight single-page Wiki, just an editable box that persists to a file
  		</div>
  		<div id='sampleSource'>
  		<li><a href="/aptana/tools/sourceViewer/index.html?filename=../../samples/wikilite/index.html" target="_blank">Main page</a></li>
  		</div>

  		<div id='sampleHeader'>
  			<div class='sampleTitle'>
  				<img src='images/page_edit.png'/> WikiLite
  			</div>
  			<div id='rightFloat'>
  				<img src ='images/information.png' class='sampleDescription' onmouseover="TagToTip('sampleDescription', CLICKCLOSE, true, STICKY, true, WIDTH, 300, TITLE, 'Sample info')"/>
  				<span id='sourceButton'><img src ='images/html.png' 	   id='sampleSourceLink'  onmouseover="TagToTip('sampleSource', STICKY, true, CLOSEBTN, true,  TITLE, 'View Source Code')"/></span>
  			</div>
  		</div>

  		<div id='applicationContent'>
  			<input type="button" id="editOrSave" onclick="editOrSave()">
  			<textarea id="contents">&lt;/textarea>
  		</div>

  		<div id='sampleFooter'>
  		</div>
  			<script runat='server'>
  				if (Jaxer.System.executableFolder.match('com.aptana.ide.framework.jaxer')) {
  					document.getElementById('sampleSource').innerHTML="";
  					document.getElementById('sourceButton').innerHTML="";
  				}
  			</script>
  	</body>

  </html>
  </textarea>
  </ol>  
<?php include('../includes/footer.php'); ?>
