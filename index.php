<!DOCTYPE html>
<html>
    <head>
        <title>IBSOWS 10.11</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/grid.css" type="text/css">
        <link rel="stylesheet" href="css/media.css" type="text/css" media="screen">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="desktop">
            <div class="playGround">
                <div class="startMenu">
                    <?php include("./html/startMenu.html");?>
                </div>
                <div class="files">
                    <?php include("./html/files.html"); ?>
                </div>
                <div class="gadFiles">
                    <?php include("./html/gadFiles.html"); ?>
                </div>
                <div class="windows">
                    <?php include("./html/windows.html"); ?>
                </div>
                <div class="underWindow">
                    <?php include("./html/underWindow.html"); ?>
                </div>
            </div>
            
            <div class="taskBar">
               <?php include("./html/taskBar.html"); ?>
            </div>
        </div>
        
        <script src="http://code.interactjs.io/v1.2.6/interact.js"></script>
        <script src="scripts/functions.js"></script>
        <script src="scripts/animations.js"></script>
        <script src="scripts/drag.js"></script>
    </body>
</html>