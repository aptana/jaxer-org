<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'Using javascript libraries during callbacks'; ?>
<?php include('../includes/header.php'); ?>
  <P>Ok, here's a simple code sample that demonstrates how to load jQuery and use it in a server callback.</P>

  <P>The key to understanding what is happening with this, is to understand when the jaxer server instantiates a DOM.</P>

  <P>Let's review, the flow from disk to browser is roughly this.</P>

  <OL>
  <Li>Get the page from disk</Li>
  <Li>Spin up the server process and load the page. at this point you have a DOM(1) on the server that has not been passed to the client.</Li>
  <Li>Complete the page processing (cache functions, run js etc) and serialize the DOM(1) to the client.</Li>
  <Li>Client gets the page and renders its own DOM(2).</Li>
  <Li>Client requests callback function</Li>
  <Li>Jaxer creates environment for callback to execute within (including a DOM(3))</Li>
  <Li>Callback runs and returns.</Li>
  </OL>
  <P>NOTE.</P>
  DOM(1) exists on the server during the page processing and is then discarded.<BR/>
  DOM(2) exists on the client and can be dynamically changed <BR/>
  DOM(3) exists on the server for the duration of the callback. it has no knowledge of the DOM inside the client browser or the DOM created during initial page processing.<BR/>
  <P></P>
  <B>It is important to understand these DOMs are not connected, in any way that would allow changes to be synchronized between them.</B>

  <P>So this means that when we do a callback, we have to ensure that the environment is setup the way that we want it. To do this we have the
  special 'oncallback()' function that can be defined on a page.</P>

  <P>To get the jQuery library to be avaailable during a callback we specify the 'autoload=true' attribute on the src tag, this means that when a callback is made to the page the jaxer instance will load that library into it's DOM before any callback processing takes place.</P>

  <textarea name="code" class="html">
          <script src='jquery-compressed.js' runat='server' autoload='true'></script>
          <script runat='server'>

              Jaxer.Log.info("");
              Jaxer.Log.info(Jaxer.request.current.url);

              document.getElementById('sandbox').innerHTML = "<B>Inserted by the server</B>";

              /*
               * oncallback is a 'special' function name that is run in the context of
               * a callback prior to the requested data being exec'd.
               */
              function oncallback()
              {
                  Jaxer.Log.info("Setting up environment for the callback");

                  if (typeof $ == 'undefined') 
                  {
                      Jaxer.Log.info("jQuery not loaded");
                  }
                  else 
                  {
                      Jaxer.Log.info("jQuery already loaded.");
                  }

              }

          </script>
          <script runat='server-proxy'>

              function doCallback(msg)
              {
                  Jaxer.Log.info(msg + ": OK I'm in the callback...");

                  // put something in the dom 
                  document.getElementsByTagName('BODY')[0].innerHTML = "<h1 id='test'>this was set during the " + msg + " callback</h1>"

                  // use jquery to access the DOM node we inserted
                  domCheck = $('#test').text();

                  Jaxer.Log.info(msg + ": ...callback completed");

                  // return the CONTENTS of the DOM node to the client.
                  return domCheck;
              }
          </script>
          <script runat='client'>
              document.getElementById('sandbox').innerHTML = doCallback('first');
              document.getElementById('sandbox').innerHTML = doCallback('second');
          </script>
  </textarea>

  <P>So when you run this code you should see something like the following in the log</P>
  <PRE>
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] http://127.0.0.1:8000/index.html
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] Setting up environment for the callback
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] jQuery already loaded.
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] first: OK I'm in the callback...
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] first: ...callback completed
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] Setting up environment for the callback
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] jQuery already loaded.
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] second: OK I'm in the callback...
  19:06:31 06/05/2008 [  4676] [INFO] [JS Framework] [framework.] second: ...callback completed
  </PRE>
<?php include('../includes/footer.php'); ?>
