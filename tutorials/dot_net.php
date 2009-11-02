<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'Jaxer and .NET: Image Rotation Example using C# and JS'; ?>
<?php include('../includes/header.php'); ?>
  One of our users asked about extending Jaxer to do some image processing. He wanted to extend Jaxer using a language he had been already using for some of his back-end work, in this case, Microsoft's C# language which is part of .NET.

  <p>

  I quickly launched my VMWare Fusion into Vista, gulp, and proceeded to run Microsoft's Visual Studio 2008. This posting won't be a tutorial on how to write C#, but i'll just go over some of the basics of setting up a simple C#-based COM object that can be used from within Jaxer.

  <p>

  The first thing to note is that to register COM objects in Vista, you need to be Administrator, so just launch Visual Studio as Administrator using the right-click menu 'Run as Administrator'. Once you have Visual Studio running, start by creating a new 'Class Library' project.

  <p>

  <img src="<?php print WEB_ROOT; ?>/images/CreateProj.png">

  <p>

  Once you've created the project, right-click on the project and go to the Properties menu, we'll want to make this object a COM-visible one.

  <p>

  <img src="<?php print WEB_ROOT; ?>/images/AdjustProps.png">

  <p>

  In the 'Build' section of the properties, scroll to the bottom and check the 'Register for COM Interop' checkbox. This will make your object visible to other languages as a COM object.

  <p>

  <img src="<?php print WEB_ROOT; ?>/images/RegisterForCOM.png">

  <p>

  The next thing you'll need to do is open your 'AssemblyInfo.cs' file, which is usually in your Properties folder of your project. Be sure to change the 'false' value to 'true' for the 'ComVisible' setting:

  <p>

  <img src="<?php print WEB_ROOT; ?>/images/ComVisible.png">

  <p>

  Now that you've done that, you can just create a COM object the 'usual' way. The complete project is attached, so you can take a look there. The image processing code was borrowed from the following online tutorial: http://blog.paranoidferret.com/index.php/2007/06/13/csharp-tutorial-image-editing-rotate/

  <p>

  <img src="<?php print WEB_ROOT; ?>/images/COMObject.png">

  <p>

  Once you've got your object compiled, using it from within Jaxer is super-easy! You can just use the COMObject function to create a wrapped instance of the native object and then just use functions and properties on it just as if it were native JavaScript.

  <p>

  So here is the very short HTML file and JavaScript code running server-side via Jaxer that creates the COM object, loads our image, rotates it via the input field in the HTML form, and then saves it back as a new image. The communications from JS to .NET happens very quickly and as you can see, was super-simple to set up.

  <p>

  <textarea name="code" class="html" cols='150' rows='15'>
  <html>
       <body>
           <script runat="server-proxy">

               function rotate(angle)
               {
                   var img = COMObject("ImageProcessor.ImageProcessing");

                   img.LoadImage(Jaxer.request.documentRoot + "/photo.jpg");
                   img.RotateImage(angle);
                   img.SaveImage(Jaxer.request.documentRoot + "/new.jpg");
               }

           </script>
           <input id="angle">
           <input type="button" value="Rotate"
                          onclick="rotate(document.getElementById('angle').value);
                                  document.getElementById('img').src =
                                  document.getElementById('img').src + '?' + new Date()">
           <br/>
           <img id='img' src="new.jpg">
       </body>
  </html>
  </textarea>

  <p>

  Here's a screenshot of the image being rotated:

  <p>

  <img src="<?php print WEB_ROOT; ?>/images/Final.png">

  <p>

  What's really cool is that you can write anything you like in C#/VB.NET and easily access it via JavaScript in Jaxer. Note how in my sample, the onclick event for the button calls the server-side JavaScript function directly, which in turn calls the .NET COM object. That is, you can bind browser-side buttons directly to back-end .NET COM objects, all in JavaScript through Jaxer!
<?php include('../includes/footer.php'); ?>
