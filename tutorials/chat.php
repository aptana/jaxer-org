<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'Jaxer Chat Walkthough'; ?>
<?php include('../includes/header.php'); ?>

<h3>
This sample ships with code updated for Jaxer 1.0 and Aptana Studio 1.2 and is a good sources of information but the tutorial has not yet been revised to match.
</h3>

		<h2>Contents</h2>
		
		<ul>
			<li><a href="#Introduction">Introduction</a><ul>
				<li><a href="#Viewing_the_sample_application">Viewing the sample application </a></li>
				<li><a href="#Creating_a_new_account">Creating a new account</a></li></ul></li>
			<li><a href="#What_just_happened.3F">What just happened</a><ul>				 
				<li><a href="#Jaxer_page_lifecycle">Jaxer page lifecycle</a></li></ul></li>
			<li><a href="#Initial_page_load">Initial page load</a><ul>				
				<li><a href="#Processing_details">Processing details</a></li></ul></li>
			<li><a href="#Callbacks_made_easy">Callbacks made easy</a><ul>
				<li><a href="#On_the_client">On the client</a></li>
				<li><a href="#On_the_server">On the server</a></li></ul></li>
			<li><a href="#Inside_the_Jaxer_chat_application">Inside the Jaxer chat application</a><ul>
				<li><a href="#Architectural_distinction">Architectural distinction</a></li>
				<li><a href="#Side-by-side_comparison">Side-by-side comparision</a></li></ul></li>
			<li><a href="#Jaxer_runat_and_proxy_reference">Jaxer runat and proxy reference</a><ul>
				<li><a href="#Basic_runat_values">Basic runat values</a></li>
				<li><a href="#Advanced_runat_values">Advanced runat values</a></li>
				<li><a href="#Programmatic_runat_configuration">Programmatic runat configuration</a></li>
				<li><a href="#Recommended_style">Recommended style</a></li>
				<li><a href="#Alternate_Syntax">Alternate syntax</a></li></ul></li>
			<li><a href="#.3Cjaxer:include.3E_reference">jaxer:include reference</a><ul>
				<li><a href="#Why_use_server-side_includes.3F">Why use server-side includes?</a></li></ul></li>
		</ul>
		
		<a name="Introduction"></a>
		<h2>Introduction</h2>
        <p>
            Your Jaxer installation includes a demo of an online multi-room chat application. This demo application includes much of the major functionality that you would find in a typical online chat app:
        </p>
        <ul>
            <li>
                Creating a new user account
            </li>
            <li>
                Logging in to chat
            </li>
            <li>
                Creating a new chat room
            </li>
            <li>
                Entering a chat room
            </li>
            <li>
                Chatting with other users
            </li>
            <li>
                Exiting a chat room
            </li>
            <li>
                Logging out of chat
            </li>
        </ul>
        <p>
            This section briefly explains how the demo chat application works from a user perspective. After learning how a user would use chat, you'll learn about the Jaxer architecture and how to use it to create an application similar to chat.
        </p>
       
        <a name="Viewing_the_sample_application"></a>
		<h3>Viewing the sample application</h3>
        <p>
            Your Jaxer installation (whether as a standalone Jaxer Package or in Aptana Studio) includes this simple chat application.
        </p>
        <p>
            To access the chat application from within Aptana Studio:
        </p>
        <p>
            <ol>
        </p>
        <li>
            In the Samples View, expand the <b>Aptana Jaxer</b>
            folder.
        </li>
        <li>
            Select the <b>chat</b>
            example.
        </li>
        <li>
        Click either the <b>Preview Sample</b>
        button <img src="<?php print WEB_ROOT; ?>/images/iconPreviewSample.png"/>to do a quick preview of the sample, or click the <b>Import Sample</b>
        button <img src="<?php print WEB_ROOT; ?>/images//iconImportSample.png"/>to import the sample as a project into your workspace.
        </ol> To access the chat application from a standalone Jaxer Package installation:
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
                Click the <b>Chat</b>
                link.
            </li>
            <p>
        </ol>
    </p>
    <p>
        You can now experiment with creating new users, new chat rooms, and chatting in the demo application (shown below):
    </p>
    <p>
        <img src="<?php print WEB_ROOT; ?>/images/ChatDefaultScreen.png"/>
    </p>
   
    <a name="Creating a new_account"></a>
	<h3>Creating a new account</h3>
    <p>
        As with many web applications, new chat users need to create new accounts before they can log into and use chat.
        To create a new user account:
    </p>
    <ol>
        <li>
            On the main chat screen, click the <b>Create new account…</b>
            link to go to the new account screen.
            <p>
                <img src="<?php print WEB_ROOT; ?>/images/ChatNewUser.png"/>
            </p>
        </li>
        <li>
            On the new account screen, type your user information:
            <ol>
                <li>
                    In the <b>New username</b>
                    field, type your username.
                </li>
                <li>
                    In the <b>New password</b>
                    field, type your password (at least 6 characters).
                </li>
                <li>
                    In the <b>Confirm</b>
                    password field, re-type your password.
                </li>
            </ol>
        </li>
        <li>
            Click the <b>Create</b>
            button to create your new account.
        </li>
    </ol>
    <p>
        The Jaxer chat room creates your new account and automatically logs you in to chat.
    </p>
 
    <a name="What_just_happened.3F"></a>
	<h2>What just happened?</h2>
    <p>
        When you request the chat application's page, and when you login, a series of events takes place. Some of these events happen during page preparation, some happen locally in your browser, and some involve communicating back to the Jaxer server and &mdash; through the Jaxer server framework &mdash; to the database and the file system.
    </p>

    <a name="Jaxer_page_lifecycle"></a>
	<h3>Jaxer page lifecycle</h3>
    <p>
        The following diagram shows a simple overview of the Jaxer page processing chain:
    </p>
    <p>
        <img src="<?php print WEB_ROOT; ?>/images/JaxerProcess-Normal.png"/>
    </p>
    <p>
        <b>Lifecycle events</b>
    </p>
    <p>
        The following list describes what happens when Jaxer processes a web page:
    </p>
    <ol>
        <li>
            The client (browser) sends a request to Apache, which either handles the request itself or delegates it to a handler such as PHP, Ruby, Java, etc.
        </li>
        <li>
            Apache either retrieves the static HTML document from disk, or receives a dynamic HTML document from the handler.
        </li>
        <li>
            Jaxer acts as an output (post-process) filter that receives the document from Apache, and starts to parse and execute it, just as a browser would, but on the server side. The DOM is created, JavaScript code designated to run on the server is executed, and so on until the entire document is consumed.
        </li>
        <li>
            The result is a DOM modified by the Jaxer Framework and by the developer: in particular, server-side client-callable functions are automatically replaced by proxies. Some important side-effects include storing designated JavaScript functions as callbacks and persisting session-type data.
        </li>
        <li>
            The new DOM is serialized (without any server-side JavaScript) as a new HTML document and streamed out to the client as usual.
        </li>
        <li>
            The client receives the HTML document and the processing continues, recreating the DOM from the provided HTML and this time executing the client-side JavaScript remaining on the page as normal.
        </li>
    </ol>
    <p>
        The client-side JavaScript served to the browser may contain proxy function stubs, that correspond to (and have the same name as) certain server-side functions tagged by the developer to be callable from the client. By using the proxy architecture, Jaxer is able to provide powerful server-side capabilities accessible from the client in an entirely native and seamless manner.
    </p>
    <p>
        The next section examines these events in more detail.
    </p>

    <a name="Initial_page_load"></a>
	<h2>Initial page load</h2>
    <p>
        The initial page load processing for Jaxer is similar to other web architectures, in that the request to the browser is passed though both a web server (in this case Apache) and an Application server layer (in this case the Jaxer apache handler/filter) before being presented to the client browser.
    </p>

    <a name="Processing_details"></a>
	<h3>Processing details</h3>
    <p>
        <b>Preparing the database schema</b>
    </p>
    <p>
        When the Jaxer server receives the page to process, several behind the scenes actions take place, among them:
    </p>
    <ul>
        <li>
            Jaxer performs any server side activity, such as database access.
        </li>
        <li>
            The page is automatically instrumented with server callback capabilities by binding certain client functionality to server-side scripts. 
        </li>
    </ul>
    <p>
        The enabling mechanism for controlling the server callback functionality is the runat attribute, an additional attribute that Jaxer recognizes on in-line or external 
        <tt>
            script
        </tt>
        tags. 
    </p>
    <p>
        Even without the presence of 
        <tt>
            runat
        </tt>
        attributes on your 
        <tt>
            script
        </tt>
        tags, Jaxer will still take certain actions on you code, such as persisting session-type data and inserting the 
        <tt>
            Aptana
        </tt>
        namespace object into the DOM.
    </p>
    <p>
        Examine the code of the first page of HTML sent, <b>index.html</b>, to see what it does: 
    </p>
    <p>
        The first 
        <tt>
            script
        </tt>
        tag loads the file <b>setup.js</b>.
    </p>
<textarea name="code" class="html">
<script type="text/javascript" src="jaxer-include/setup.js" runat="server"></script>
</textarea>
    <p>
        The 
        <tt>
            runat
        </tt>
        attribute provided to the 
        <tt>
            script
        </tt>
        tag tells the Jaxer server that the contents of this script should execute server side and not be presented to the client browser. This means that if you view the source on the index page after it loads in your browser, you will not see any of the contents of the <b>setup.js</b>
        file (shown below).
    </p>
<textarea name="code" class="javascript">
	(function() {
	
// Jaxer 0.9.7 or earlier // if (Jaxer.application.get("isInitialized")) return;
if (Jaxer.application.isInitialized) return;

var sql;

sql = "CREATE TABLE IF NOT EXISTS users " +
	"( id INTEGER PRIMARY KEY AUTO_INCREMENT" +
	", username VARCHAR(255) NOT NULL" +
	", password VARCHAR(255) NOT NULL" +
	", created DATETIME NOT NULL" +
	", last_login DATETIME NOT NULL" +
	", UNIQUE (username)" +
	")";

Jaxer.DB.execute(sql);

sql = "CREATE TABLE IF NOT EXISTS messages " +
	"( id INTEGER PRIMARY KEY AUTO_INCREMENT" +
	", room_id INTEGER NOT NULL" +
	", sent DATETIME NOT NULL" +
	", user_id INTEGER NOT NULL" +
	", contents TEXT NOT NULL" +
	")";

Jaxer.DB.execute(sql);
// Jaxer 0.9.7 or earlier // Jaxer.application.set("isInitialized", true);
Jaxer.application.isInitialized = true;
			
})();
</textarea>

    <p>


        The script file <b>setup.js</b>
        checks the application level container object and looks for a stored variable called 
        <tt>
            isInitialized
        </tt>. If it already exists, the application has already been run and can return 
        control to the original page <b>index.html</b>. However, if the variable 
        <tt>
            isInitialized
        </tt>
        is not found, this is the first time the application has been run, and some SQL DDL is executed to bootstrap the database, which creates the required schema to run the application. After the SQL executes and the database is prepared, the 
        <tt>
            isInitialized
        </tt>
        flag is set to true, and the processing returns to the index page.
    </p>
    <p>
        You now have a schema ready for use by the application. Note that by using the Jaxer framework modules, you can accomplish all of this using only JavaScript.
    </p>
    <p>
        <b>Adding server- and client-side functionality</b>
    </p>
    <p>
        The next 
        <tt>
            script
        </tt>
        tag that you encounter uses the 
        <tt>
            runat='both'
        </tt>
        value to tell the server that the code is to be run on both the browser and the server. The server-side functions will also be cached in association with this page so that they can be used by any server-side callback functions. 
    </p>
<textarea name="code" class="html">
		<script type="text/javascript" runat="both">
			
			function $(id) { return document.getElementById(id); }
			function fromTemplate(idTarget, idSource) { $(idTarget).innerHTML = $(idSource).innerHTML.replace(/(\W)\$id\=/g, "$1id="); }
			
			function showRooms(rooms)
			{
				if (rooms == null)
				{
					$("rooms").innerHTML = "(Not logged in)";
				}
				else
				{
					var htmlStrings = [];
					for (var i = 0; i < rooms.length; i++) {
						var room = rooms[i];
						var html = $("roomTemplate").innerHTML.replace(/\$(\w+)\$/g, function(match, keyword){
							return room[keyword];
						});
						htmlStrings.push(html);
					}
					$("rooms").innerHTML = "\n" + htmlStrings.join("\n") + "\n";
				}
			}
			
			
		</script>

</textarea>	
    <p>
        The functions in this script block will be needed on both the server and the client in order to populate the dynamic section of the DOM server-side for the initial page presentation, and then to update the DOM client-side as needed in response to user actions. Note that the <b>same</b>
        DOM manipulation code can be used on both client and server sides, so the DOM is consistent and the code is shorter and more maintainable.
    </p>
    <p>
        The next script we encounter is only needed server-side:
    </p>
<textarea name="code" class="html">
<script type="text/javascript" src="jaxer-include/_authentication.js" runat="server"></script> 
</textarea>
  <p>
        The script <b>_authentication.js</b>
        contains some functions for use both now during page preparation and later during callbacks. These functions will be cached automatically by using 
        <tt>
            runat='server'
        </tt>. (If you know you won't need them during callbacks, and you'd like to optimize performance and memory a bit, you can use 
        <tt>
            runat='server-nocache'
        </tt>
        instead.)
    </p>
<textarea name="code" class="html">
function getAuthenticatedUser()
{
	// Jaxer 0.9.7 or earlier // var username = Jaxer.session.get("username");
	var username = Jaxer.session.username;
	if (typeof username == "undefined") return null;
	var rs = Jaxer.DB.execute("SELECT * FROM users WHERE username = ?", [username]);
	if (rs.rows.length == 0)
	{
		return null;
	}
	return rs.rows[0];
}

function makeAuthenticated(user)
{
	// Jaxer 0.9.7 or earlier //	Jaxer.session.set("username", user.username);
	Jaxer.session.username = user.username;
}

function initAuthentication()
{
	try
	{
		var user = getAuthenticatedUser();
		if (user)
		{
			fromTemplate('loginComponent', 'loginAuthenticated');
			$('authenticatedUsername').innerHTML = user.username;
			Jaxer.clientData.isAuthenticated = true;
		}
		else
		{
			fromTemplate('loginComponent', 'loginRequest');
			Jaxer.clientData.isAuthenticated = false;
		}
	}
	catch (e)
	{
		Jaxer.Log.error("Error trying to get authenticated user: " + e);
	}
}

</textarea>
    <p>
        This code was encapsulated in an external .js file since it will be used on multiple pages where authentication is needed, guaranteeing that the same logic will be used consistently. Note that it only runs on the server, and in fact cannot be called from client-side JavaScript functions, for security reasons. Next we'll see an example of code that should be called from the client.
    </p>
    <p>
        <b>Specifying where your code runs</b>
    </p>
    <p>
        This really gets to the power of the Jaxer architecture: by being able to specify whether the code runs on the server or the client or both, and allowing the server-side functions to be seamlessly called from the client, we can build highly consistent code that crosses the client/server boundary with little effort, thus avoiding the requirement in other web stacks to use templating constructs, emit JavaScript from a different language, create handler pages for your server-side callbacks, etc. In Jaxer it is <b>all</b>
        DOM and JavaScript.
    </p>
    <p>
        The next 
        <tt>
            script
        </tt>
        is an in-line script with a 
        <tt>
            runat
        </tt>
        attribute set to execute on the server. 
    </p>
<textarea name="code" class="html">		<script type="text/javascript" runat="server">
			
			function getRooms()
			{
				var user = getAuthenticatedUser();
				if (user == null) return null;
				var rs = Jaxer.DB.execute("SELECT MIN(sent) AS started, MAX(sent) AS last, room_id FROM messages GROUP BY room_id");
				// Fix up dates because SQLite does not (reliably?) return the declared column type on aggregates
				for (var i=0, len = rs.rows.length; i<len; i++)
				{
					var row = rs.rows[i];
					if (typeof row.started == "number") row.started = formatShortDate(new Date(row.started));
					if (typeof row.last == "number") row.last = formatShortDate(new Date(row.last));
				}
				return rs.rows;
			}
			getRooms.proxy = true;
			
			function numericPad(num,width)
			{
				return num > Math.pow(10,width) ? num.toString() : (Math.pow(10,width) + num).toString().substring(1);
			}

			function formatShortDate(dt)
			{	
				var dd = numericPad(dt.getDate(),2);
				var mm = numericPad(dt.getMonth()+1,2);
				var yr = numericPad(dt.getFullYear(),2);
				
				var hr = numericPad(dt.getHours(),2);
				var mn = numericPad(dt.getMinutes(),2);
				var ss = numericPad(dt.getSeconds(),2);
				
				return [dd,mm,yr].join("/") + " " + [hr,mn,ss].join(":");
			}
			
			function prepareDOM()
			{
				var rooms = getRooms();
				showRooms(rooms);
			}
			
		</script>
</textarea>    <p>
        One of the contained functions 
        <tt>
            getRooms()
        </tt>
        adds a Jaxer-specific property on the function, 
        <tt>
            getRooms.proxy = true;
        </tt>
        so it can be called from the browser. We could have used an alternate syntax: 
        <tt>
            getRooms.runat = "server-proxy";
        </tt>.
    </p>
    <p>
        The 
        <tt>
            prepareDom()
        </tt>
        function is invoked later on the page by being bound to the special Jaxer event 
        <tt>
            onserverload
        </tt>. This event is fired when the server has completed loading of the page and has a DOM available for manipulation by JavaScript code.
    </p>
    <p>
        The 
        <tt>
            onserverload
        </tt>
        event is the server-side equivalent of the traditional client side 
        <tt>
            onload
        </tt>.
    </p>
<textarea name="code" class="html"><body onserverload="initAuthentication(); prepareDOM()"> </textarea>   <p>
        At this point the authentication is initialized, and the 
        <tt>
            prepareDom()
        </tt>
        function is called. This will insert rows displaying any existing chat rooms into the DOM contents of the home page before sending the page to the client. It does this by querying the database table messages (lines 7-9) and returning a distinct set of rooms as well as information on when each room was opened and when the last message was posted. This content also contains a hyperlink to enter the chatroom (shown below).
    </p>
    <p>
        <img src="<?php print WEB_ROOT; ?>/images/ChatRecentChatRooms.png"/>
    </p>
    <p>
        Now let's turn to the callback mechanism used by the Jaxer chat app.
    </p>

    <a name="Callbacks_made_easy"></a>
	<h2>Callbacks made easy</h2>
    <p>
        When you enter the application for the first time, no room will be listed and you will have to create a new room.
    </p>
    <p>
        However, before you can create any new rooms, you first have to login to chat. If this is your first chat visit, you will need to create a new account before you can login.
    </p>
    <p>
        The next two sections discuss what happens on both the client and the server when you login to chat (assuming that you already have an account created). Here is a detailed diagram of the process flow:
    </p>
    <p>
        <img src="<?php print WEB_ROOT; ?>/images/JaxerProcess-Callback.png"/>
    </p>

    <a name="On_the_client"></a>
	<h3>On the client</h3>
    <p>
        The chat login process make extensive use of callbacks from the client to the server to provide the services required to authenticate users. The following code demonstrates some of the unique capabilites of the Jaxer server with respect to remote function invocation or callbacks.
    </p>
    <p>
        The 
        <tt>
            login
        </tt>
        function (located in <b>_login.js</b>) invokes a local (client-side) function 
        <tt>
            checkCredentials(username, password)
        </tt>
        which is the proxy for the previously-shown server-side 
        <tt>
            checkCredentials
        </tt>
        function.
    </p>
<textarea name="code" class="javascript">function login()
{
	var username = $('username').value;
	var password = $('password').value;
	var username = checkCredentials(username, password);
	if (username != "")
	{
		fromTemplate('loginComponent', 'loginAuthenticated');
		setTimeout("$('authenticatedUsername').innerHTML = '" + username + "'", 0);
		changeAuthentication(true);
	}
	else
	{
		$('loginMessage').innerHTML = "Sorry, try again";
	}
}
login.runat = "client";
 </textarea>   <p>
    <a name="On_the_server"></a>
	<h3>On the server</h3>
    <p>
        The 
        <tt>
            checkCredentials
        </tt>
        function can only truly execute on the server, but since it's marked to be proxied, the client will also get a function called 
        <tt>
            checkCredentials
        </tt>
        (shown above) which simply provides a remote wrapper for the server code. Internally it does this by serializing its arguments to a JSON format and passing them to the server, where they are deserialized and the server-side function is invoked. When the server-side function completes, its result is serialized to JSON and then passed back to the client, where it's deserialized and returned as the result of the proxy as if the proxy function had carried out the processing. 
    </p>
<textarea name="code" class="javascript">function checkCredentials(username, password)
{
	var rs = Jaxer.DB.execute("SELECT * FROM users WHERE username = ? AND password = ?",
		[username, password]);
	if (rs.rows.length == 0)
	{
		return "";
	}
	var user = rs.rows[0];
	makeAuthenticated(user);
	return user.username;
}
checkCredentials.proxy = true;
 </textarea>   <p>
        One point worth noting is that this is not asynchronous, and the client will wait for the response. For every server-side function to be proxied Jaxer adds a method to the function for asynchronous remote invocation. , for example 
        <tt>
            checkCredentials
        </tt>
        and 
        <tt>
            checkCredentials.async()
        </tt>.
    </p>
    <p>
        This callback architecture is the key to providing the seamless client server communications without any of the complexity of the more traditional XHR techniques nomally associated with Ajax functionality. With Jaxer it is all just Javascript and the boundary between client and server can be smooth and simple.
    </p>

    <a name="Inside_the_Jaxer_chat_application"></a>
	<h2>Inside the Jaxer chat application</h2>
    <p>
        You should now be familiar with the functionality of the Jaxer chat application. The next section discusses some of the key technical differences between how a typical web application is constructed and the way the demo chat application uses the unique capabilities of the Jaxer Server.
    </p>

    <a name="Architectural_distinction"></a>
	<h3>Architectural distinction</h3>
    <p>
        The main architectural difference of the Jaxer server from other page composition engines, such as PHP, JSP and ASP, is that both the client side and server side use essentially the same platform. This means that you can use familiar DOM manipulation techniques with standard JavaScript tools and libraries on both the client and server side. As a developer, you benefit from this approach by no longer having to deal with complex paradigms, such as emitting JavaScript from Java. Using Jaxer, you can even invoke server-side functionality directly from the client in a completely seamless manner.
    </p>
    <p>
        The Jaxer server wraps typical server-side functionality within a tightly controlled namespace (the 
        <tt>
            Jaxer
        </tt>
        object) to prevent variable and scope conflict with other Javascript libraries and tools.
    </p>

    <a name="Side-by-side_comparison"></a>
	<h3>Side-by-side comparison</h3>
    <p>
        The following diagram illustrates how Jaxer can replace the common server technologies of most dynamic web applications.
    </p>
    <p>
        <img src="<?php print WEB_ROOT; ?>/images/ComparativeStack.png"/>
    </p>
    <p>
        With the Jaxer server, you can perform all the usual activities associated with web applications, such as database access, session management, error logging and file system access.
    </p>
    <p>
        In the next few sections of this document, you will learn about some of the unique features of the Jaxer Server 
		and examine at how they were implemented for the Jaxer chat application.
    </p>

    <a name="Jaxer_runat_proxy_reference"></a>
	<h2>Jaxer runat and proxy reference</h2>
    <p>
        One of the initial differences you will notice between the Jaxer source and typical web applications is the addition of the 
        <tt>
            runat
        </tt>
        attributes to the script tags in the HTML markup. These attributes tell the Jaxer server how to manage the script code. Because the server can run JavaScript on the server-side, client-side, or both, and can inject proxies into the client, this meta information instructs the server how to handle the scripts appropriately.
    </p>

    <a name="Basic_runat_values"></a>
	<h3>Basic 
        <tt>
            runat
        </tt>
        values
    </h3>
    <p>
        The following table describes the standard 
        <tt>
            runat
        </tt>
        attributes that are applied to the &lt;script&gt; tag. 
    </p>
    <table>
        <tr>
            <th>
                value
            </th>
            <th>
                description
            </th>
        </tr>
        <tr>
            <td>
                client
            </td>
            <td>
                <p>
                    The functions and code contained in the script block will run in the client browser only. This functions exactly as a regular script block. This is the default value of the 
                    <tt>
                        runat
                    </tt>
                    attribute, so usually you'll omit it for 
                    <tt>
                        script
                    </tt>
                    blocks intended for the client. Its main use is to override the 
                    <tt>
                        runat
                    </tt>
                    attribute of a specific function within a server-side 
                    <tt>
                        script
                    </tt>
                    block. <i>Note: if a 
                        <tt>
                            script
                        </tt>
                        block has 
                        <tt>
                            runat = "client"
                        </tt>
                        (or no 
                        <tt>
                            runat
                        </tt>
                        attribute), it will not run at all server-side, so you cannot override the 
                        <tt>
                            runat
                        </tt>
                        behaviors of individual functions from within this block.
                    </i>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                server
            </td>
            <td>
                <p>
                    The functions and code contained in the script will run on the server only. 
                    Any functions defined within the script block will be cached in association with this page.  
                    These functions are not directly callable from the client, but they can be called during callback processing by other server-side functions. 
                    These script blocks will not be presented to the client browser.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                both
            </td>
            <td>
                <p>
                    The functions and code contained in the script will run on both the client and the server. 
                    Any functions defined within the script block will be cached in association with this page.  
                    The server-side functions are not directly callable from the client, but they can be called during callback processing by other server-side functions. 
                </p>
            </td>
        </tr>
    </table>
    <p>
        <b>Example</b>
        The following code snippet is an excerpt from the index.html page in the Jaxer chat application folder. 
        This example shows an external script being included on the page for server-side-only execution.
    </p>
<textarea name="code" class="html"><script type="text/javascript" src="jaxer-include/_login.js" runat="server"></script></textarea>
    <a name="Advanced_runat_values"></a>
	<h3>Advanced 
        <tt>
            runat
        </tt>
        values
    </h3>
    <p>
        The following runat values can also be used on the script tags. We expect most use cases would be covered by the basic attributes shown above.
    </p>
    <table>
        <tr>
            <th>
                value
            </th>
            <th>
                description
            </th>
        </tr>
        <tr>
            <td>
                server-proxy
            </td>
            <td>
                Same as the basic 'server' target except ALL the functions will be proxied by default
            </td>
        </tr>
        <tr>
            <td>
                server-nocache
            </td>
            <td>
                Same as the basic 'server' target except NONE of the functions will be cached by default
            </td>
        </tr>
        <tr>
            <td>
                both-proxy
            </td>
            <td>
                Same as the basic 'both' target except ALL the functions will be proxied by default
            </td>
        </tr>
        <tr>
            <td>
                both-nocache
            </td>
            <td>
                Same as the basic 'both' target except NONE of the functions will be cached by default
            </td>
        </tr>
    </table>

    <a name="Programmatic_runat_configuration"></a>

	<h3>Programmatic 
        <tt>
            runat
        </tt>
        configuration
    </h3>
    <p>
        Jaxer is aware of some special function object properties that can be declared on individual function objects to control how they are managed. When these are specified, the property value will override the containing script block's 
        <tt>
            runat
        </tt>
        setting for the individual function. This allows more granular control and prevents the need to break scripts out into separate blocks or files depending on their desired 
        <tt>
            runat
        </tt>
        value.
    </p>
    <table>
        <tr>
            <th>
                property
            </th>
            <th>
                description
            </th>
        </tr>
        <tr>
            <td>
                proxy
            </td>
            <td>
                <p>
                    Server-side functions can be declared to be proxied so they are callable from the client side. This is achieved by specifying a 
                    <tt>
                        proxy
                    </tt>
                    property on the function object. The possible values for this property are 
                    <tt>
                        true
                    </tt>
                    or 
                    <tt>
                        false
                    </tt>. This is only required for enabling the proxying of the function. By default, in a 
                    <tt>
                        &lt;script runat="server"&gt;
                    </tt>
                    block, the functions are not proxied. Note that if a function is not proxied, it isn't just that proxies are not inserted into the client to facilitate calling it: it's actually marked as not callable on the server, so hacking the client to try to call the function on the server will not work.
                </p>
            </td>
        </tr>
        <tr>
            <td>
                runat
            </td>
            <td>
                <p>
                    Takes the same values as the 
                    <tt>
                        &lt;script&gt;
                    </tt>
                    tag 
                    <tt>
                        runat
                    </tt>
                    attributes.
                </p>
            </td>
        </tr>
    </table>
    <p>
        <b>Example</b>
    </p>
    <p>
        The <b>_login.js</b>
        file referenced in the example above contains some functions that explicitly override the 
        <tt>
            runat='server'
        </tt>
        directive specified on the script tag used to load the file.
    </p>
    <p>
        In this snippet the function will proxied:
    </p>
<textarea name="code" class="javascript">function removeCredentials()
{
	// Jaxer 0.9.7 or earlier // Jaxer.session.remove("username");
	delete Jaxer.session.username;
}
removeCredentials.proxy = true;    </textarea><p>
        In this snippet the function will run client side:
    </p>
<textarea name="code" class="javascript">function validate(validationFunction, candidate)
{
	if (candidate == "") return; // Not done filling this out, perhaps
	var error = validationFunction(candidate);
	if (error != "")
	{
		alert(error);
	}
}
validate.runat = "client";</textarea>
    <a name="Recommended_style"></a>
	<h3>Recommended style</h3>
    <p>
        The following illustrates one simple way of using the 
        <tt>
            runat
        </tt>
        and 
        <tt>
            proxy
        </tt>
        options 
        in a typical code scenario. We choose to group all the server-side code in one 
        <tt>
            script
        </tt>
        block, and explicitly designate a subset of function to be proxied. Then all client-side code 
        goes in a different 
        <tt>
            script
        </tt>
        block (where there isn't even the option of programatically 
        changing it by setting a different 
        <tt>
            runat
        </tt>
        or 
        <tt>
            proxy
        </tt>
        value). 
        Of course you may choose a different way of organizing your code if that makes more sense.
        And for large amounts of code, it may also make sense to extract the code into (reusable)
        external JavaScript files.
    </p>
<textarea name="code" class="html"><script type="text/javascript" runat="server"> 
	function setPassword(username, newPassword)
	{
		// put code in here to directly set the password of a given username
		// this code should not be callable from the client
	} 
	
	function changePassword(username, oldPassword, newPassword){
		// put code in here to first verify the submitted password,
		// and then -- if successful -- call setPassword to actually make changes
		// this code should be callable from the client
	}
	changePassword.proxy = true; 
</script> 
	
<script type="text/javascript"> 
	function submitPassword()
	{
		// put client-side code here to grab the username and old and new passwords
		// and call changePassword on the server
	} 
</script>
</textarea>    <a name="Alternate_Syntax"></a>
	<h3>Alternate Syntax</h3>
    <p>
        Jaxer provides a useful convenience array inside the Jaxer namespace to allow the proxy functions to be declared in a single group within your Javascript code:
    </p>
    <div class="csh">
        <pre class="javascript">Jaxer.<span style="color: #006600;">proxies</span> = <span style="color: #66cc66;">&#91;</span>myFunc1, myFunc2, <span style="color: #3366CC;">&quot;myFunction&quot;</span><span style="color: #66cc66;">&#93;</span>; 
<span style="color: #009900; font-style: italic;">// ...</span>
Jaxer.<span style="color: #006600;">proxies</span>.<span style="color: #006600;">push</span><span style="color: #66cc66;">&#40;</span>myFunc3, <span style="color: #3366CC;">&quot;myFunction4&quot;</span><span style="color: #66cc66;">&#41;</span>;</pre>
    </div>
    <p>
        The value of Jaxer.proxies at the end of server-side page processing (i.e. when proxies are about to be inserted) determines which server-side functions will have their 
        <tt>
            proxy
        </tt>
        property be set to 
        <tt>
            true
        </tt>. You can also use this to remove all proxied functions by setting the value to 
        <tt>
            null
        </tt>.
    </p>
    <p>
        <i>Note: 
            <tt>
                Jaxer.proxies
            </tt>
            is NOT a complete collection of the functions being proxied by the server, it is just a convenient way to express the 
            <tt>
                myFunc.proxy = true;
            </tt>
            syntax for multiple function references.
        </i>
    </p>

    <a name=".3Cjaxer:include.3E_reference"></a>
	<h2>&lt;jaxer:include&gt; reference</h2>
    <p>
        Jaxer provides several special 
        <tt>
            &lt;jaxer:include&gt;
        </tt>
        tags for implementing server-side include statements.
    </p>

    <a name="Why_use_server-side_includes.3F"></a>
	<h3>Why use server-side includes?</h3>
    <p>
        If you are managing a web site that has more than a few pages, you may find that making changes to all those pages can be tedious, particularly if you are trying to maintain a standard functionality or look across all of your pages.
    </p>
    <p>
        Using an include file for a header and/or a footer can reduce the burden of these updates. You just have to make one footer file, and then include it into each page with the include SSI command. The 
        <tt>
            &lt;jaxer:include&gt;
        </tt>
        element can determine what file to include by the specified 
        <tt>
            src
        </tt>
        attribute. The value of the 
        <tt>
            src
        </tt>
        attribute should be a URL relative to the document being served, or an absolute URL starting with a / representing the web server's document root. Alternatively, you can use a 
        <tt>
            path
        </tt>
        attribute instead of the 

        <tt>
            src
        </tt>
        attribute; its value is an absolute path in the filesystem. In any case, the included file must be on the same server as the page being served.
    </p>

    <p>
        Jaxer also provides 
        <tt>
            Jaxer.load(src)
        </tt>
        to programatically load and evaluate (server-side) a JavaScript file.
    </p>
    <p>
        <b>Examples</b>
    </p>
    <p>
        The following examples show how to include a file from the server's local file system as part 
        of the current document. 
    </p>
	<p>From within the HTML of the document.</p>
<textarea name="code" class="html"><jaxer:include src="_login.html"></aptana:include></textarea>
	<p>From within a Javascript file.</p>
<textarea name="code" class="javascript">Jaxer.load("setup.js");</textarea>
    <p>
        This functionality is similar to the php 
        <tt>
            include
        </tt>
        directive or the Apache 
        <tt>
            #include
        </tt>
        functionality.
    </p>
<?php include('../includes/footer.php'); ?>