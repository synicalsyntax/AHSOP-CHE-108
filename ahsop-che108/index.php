<?php
$file = $_POST['file'];
//die('<h1>Web page not available</h1>The Web page at <a href="http://clin-dump.co.nf/ahsop-che108">http://clin-dump.co.nf/ahsop-che108</a> could not be found. <br><br> The error returned was: <br><br> AHSOP is currently not in session. Please return once AHSOP starts.');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta name="description" content="A collection of files for AHSOP CHE 108">
    <meta name="author" content="Cynthia Lin">
    <meta property="og:description" content="A collection of files for AHSOP CHE 108">
    <meta property="og:title" content="AHSOP CHE 108">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://clin-dump.co.nf/ahsop-che108/">
    <meta property="og:site_name" content="clin-dump.co.nf">
    <meta property="og:image" content="http://www.wallpaperup.com/uploads/wallpapers/2015/01/17/589826/big_thumb_dbd3d9099f32d8cbfc5c85cd09dc759b.jpg">
    <title>AHSOP CHE 108</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="images/favicon.ico" type="image/x-icon" rel="icon">
    <link rel="image_src" href="http://www.wallpaperup.com/uploads/wallpapers/2015/01/17/589826/big_thumb_dbd3d9099f32d8cbfc5c85cd09dc759b.jpg">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-81000503-1', 'auto');
        ga('send', 'pageview');
    </script>

</head>
<?php
    if (file_exists('images/'.$file.'.pdf')) {
        if ($file == "textbook") {
            echo '<body onLoad="alert(\'This is a large file! Please wait for it to load.\')">';
        } else {
        echo '<body>';
        }
?>
    <main>
        <nav class="teal accent-4" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="index.php" class="brand-logo center"><i class="mdi mdi-test-tube white-text" style="font-size: 3.5rem"></i></a>
            </div>
        </nav>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <div class="container hide-on-med-and-down">
            <br><br>
            <?php
            if ($file == "textbook") {
                echo '<iframe src="https://drive.google.com/file/d/0B5R0-s9kyH_Zd0VROGtyZUtRaFE/preview" style="width:100%;height:1200px;" type="application/pdf" width="100%" height="1200px"><h4 class="header center teal-text text-accent-4">Unsupported Browser</h4><p class="light">Unfortunately, your browser does not support PDF files. Please revisit this page on a different device or browser, such as Firefox or Google Chrome.</p></iframe>';
            } else {
                echo '<object data="images/' . $file . '.pdf" type="application/pdf" width="100%" height="1200px"><h4 class="header center teal-text text-accent-4">Unsupported Browser</h4><p class="light">Unfortunately, your browser does not support PDF files. Please revisit this page on a different device or browser, such as Firefox or Google Chrome.</p></object>';
            }
            ?>
        </div>
        <div class="container hide-on-large-only">
            <br><br>
            <?php
            if ($file == "textbook") {
                echo '<iframe src="https://drive.google.com/file/d/0B5R0-s9kyH_Zd0VROGtyZUtRaFE/preview" style="width:100%;height:1200px;" type="application/pdf" width="100%" height="1200px"><h4 class="header center teal-text text-accent-4">Unsupported Browser</h4><p class="light">Unfortunately, your browser does not support PDF files. Please revisit this page on a different device or browser, such as Firefox or Google Chrome.</p></iframe>';
            } else {
                echo '<iframe src="http://docs.google.com/gview?url=http://clin-dump.co.nf/ahsop-che108/images/'.$file.'.pdf&embedded=true" style="width:100%;height:1200px;" frameborder="0"><h4 class="header center teal-text text-accent-4">Unsupported Browser</h4><p class="light">Unfortunately, your browser does not support PDF files. Please revisit this page on a different device or browser, such as Firefox or Google Chrome.</p></iframe>';
            }
            ?>
        </div>
    </main>
    <footer class="page-footer teal lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l6 m8 s12">
                    <h5 class="white-text">AHSOP CHE 108</h5>
                    <p class="grey-text text-lighten-4">A collection of files for AHSOP CHE 108</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col l10 s8 m10">
                        <a href="http://cynthialin.co.nf/" class="white-text">© Cynthia Lin | 2016</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>

</html>
<?php
    } else {
?>
      <!DOCTYPE HTML>
      <html>

      <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
          <meta name="description" content="A collection of files for AHSOP CHE 108">
          <meta name="author" content="Cynthia Lin">
          <meta property="og:description" content="A collection of files for AHSOP CHE 108">
          <meta property="og:title" content="AHSOP CHE 108">
          <meta property="og:type" content="website">
          <meta property="og:url" content="http://clin-dump.co.nf/ahsop-che108/">
          <meta property="og:site_name" content="clin-dump.co.nf">
          <meta property="og:image" content="http://www.wallpaperup.com/uploads/wallpapers/2015/01/17/589826/big_thumb_dbd3d9099f32d8cbfc5c85cd09dc759b.jpg">
          <title>AHSOP CHE 108</title>

          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
          <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
          <link href="images/favicon.ico" type="image/x-icon" rel="icon">
          <link rel="image_src" href="http://www.wallpaperup.com/uploads/wallpapers/2015/01/17/589826/big_thumb_dbd3d9099f32d8cbfc5c85cd09dc759b.jpg">

          <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
          <script type="text/javascript" src="js/init.js"></script>
          <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-81000503-1', 'auto');
              ga('send', 'pageview');
          </script>
      </head>
      <body>
          <main>
              <nav class="teal accent-4" role="navigation">
                  <div class="nav-wrapper container">
                      <a id="logo-container" href="index.php" class="brand-logo center"><i class="mdi mdi-test-tube white-text" style="font-size: 3.5rem"></i></a>
                  </div>
              </nav>
              <div id="preloader">
                  <div id="status">&nbsp;</div>
              </div>
              <div class="container">
                  <br><br>
                  <h4 class="header center teal-text text-accent-4">File Not Found</h4>
                  <p class="light center">The requested file could not be found.</p>
              </div>
          </main>
          <footer class="page-footer teal lighten-1">
              <div class="container">
                  <div class="row">
                      <div class="col l6 m8 s12">
                          <h5 class="white-text">AHSOP CHE 108</h5>
                          <p class="grey-text text-lighten-4">A collection of files for AHSOP CHE 108</p>
                      </div>
                  </div>
              </div>
              <div class="footer-copyright">
                  <div class="container">
                      <div class="row center">
                          <div class="col l6 m6 s6">
                              <a target="_blank" href="http://cynthialin.co.nf/" class="white-text">© Cynthia Lin | 2016</a>
                          </div>
                          <div class="col l6 m6 s6">
                              <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png"></a>
                          </div>
                      </div>
                  </div>
              </div>
          </footer>
      </body>

      </html>
      <?php
    }
} else {
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta name="description" content="A collection of files for AHSOP CHE 108">
    <meta name="author" content="Cynthia Lin">
    <meta property="og:description" content="A collection of files for AHSOP CHE 108">
    <meta property="og:title" content="AHSOP CHE 108">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://clin-dump.co.nf/ahsop-che108/">
    <meta property="og:site_name" content="clin-dump.co.nf">
    <meta property="og:image" content="http://www.wallpaperup.com/uploads/wallpapers/2015/01/17/589826/big_thumb_dbd3d9099f32d8cbfc5c85cd09dc759b.jpg">
    <title>AHSOP CHE 108</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="images/favicon.ico" type="image/x-icon" rel="icon">
    <link rel="image_src" href="http://www.wallpaperup.com/uploads/wallpapers/2015/01/17/589826/big_thumb_dbd3d9099f32d8cbfc5c85cd09dc759b.jpg">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-81000503-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <main>
        <nav class="teal accent-4" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="index.php" class="brand-logo center"><i class="mdi mdi-test-tube white-text" style="font-size: 3.5rem"></i></a>
            </div>
        </nav>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <div class="container">
            <br><br>
            <img class="responsive-img" src="images/index-banner.jpg">
            <br><br>
            <h3 class="header center teal-text text-accent-4">CHE 108</h3>
            <form method="POST" action="index.php ">
                <div class="row center">
                    <div class="input-field col s12 m8 offset-m2 l8 offset-l2">
                        <select name="file" id="file">
                            <option value="textbook">Textbook</option>
                            <option value="SolutionsManual">Solutions Manual</option>
                            <optgroup label="Final Exam">
                                <option value="practiceexam">Practice Exam</option>
                                <option value="practiceanswerkey">Practice Answer Key</option>
                            </optgroup>
                            <optgroup label="Syllabuses">
                                <option value="syllabus2016">Syllabus 2016</option>
                                <option value="2016LabMW">Lab Syllabus Monday/Wednesday 2016</option>
                                <option value="2016LabTT">Lab Syllabus Tuesday/Thursday 2016</option>
                            </optgroup>
                            <optgroup label="Lecture Presentations">
                                <option value="chapter2">Chapter 2</option>
                                <option value="chapter2.2">Chapter 2 Part 2</option>
                                <option value="chapter3">Chapter 3</option>
                                <option value="chapter4">Chapter 4</option>
                                <option value="chapter4.5">Chapter 4 & 5</option>
                                <option value="chapter6.7">Chapter 6 & 7</option>
                                <option value="chapter8">Chapter 8</option>
                                <option value="chapter9.10">Chapter 9 & 10</option>
                                <option value="chapter10h">Chapter 10 (Hess's Law)</option>
                                <option value="chapter11em">Chapter 11 (Electromagnetic Radiation)</option>
                                <option value="chapter11q">Chapter 11 (Atomic Theory)</option>
                                <option value="chapter12b">Chapter 12 (Bonding)</option>
                                <option value="chapter12l">Chapter 12 (Lewis Structures)</option>
                                <option value="chapter13">Chapter 13</option>
                                <option value="chapter14">Chapter 14</option>
                                <option value="chapter15">Chapter 15</option>
                                <option value="chapter16">Chapter 16</option>
                                <option value="chapter17">Chapter 17</option>
                            </optgroup>
                        </select>
                        <label>Select a File</label>
                    </div>
                </div>
                <div class="row center">
                    <br>
                    <button class="btn waves-effect waves-light teal lighten-2" type="submit" name="action">Submit &nbsp; <i class="mdi mdi-send white-text"></i></button>
                </div>
            </form>
            <br>
        </div>
    </main>
    <footer class="page-footer teal lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l6 m8 s12">
                    <h5 class="white-text">AHSOP CHE 108</h5>
                    <p class="grey-text text-lighten-4">A collection of files for AHSOP CHE 108</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row center">
                    <div class="col l6 m6 s6">
                        <a target="_blank" href="http://cynthialin.co.nf/" class="white-text">© Cynthia Lin | 2016</a>
                    </div>
                    <div class="col l6 m6 s6">
                        <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/80x15.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<?
}
?>
