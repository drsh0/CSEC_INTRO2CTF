<!DOCTYPE html>

<html>
    <head>
        <title>My Second Webpage</title>
        <style>
            nav {
                background-color: aquamarine;
            }
            ul, li{
                text-decoration: none;
                display: inline;
                margin-right: 30px;
            }
            .main-body {
                margin: auto;
                text-align: center;
            }

            body {
                height: 100vh;
                margin:0;

            }
        </style>
    </head>
   
    <body oncontextmenu="return false">
        <nav class="nav">
            <ul class="nav-links">
                <li> <a href="/?page=home.html">Home</a></li>
                <li><a href="/?page=about.html">About</a></li>
            </ul>
        </nav>

        <div class="main-body">
            <h1>My Third Webpage</h1>
            <img src="5328995.jpg" >
            <p></p>
            <?php 
                if (isset($_GET['page']) && $_GET['page'] != '') {
                    exec('cat pages/' . $_GET['page'], $content);
                    $content = implode("\n", $content);
                    echo $content;
                } else {
                    echo "You got my sauce once now twice but you'll never get the sauce again, I have put MORE measures in place so you can't get my secret sauce! Not storing my secret sauce on the index file anymore";
                }
            ?>
        </div>
    </body>
</html>
