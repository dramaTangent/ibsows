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
                <div class="windows">
                    <?php include("./html/windows.html"); ?>
                </div>
            </div>
            
            <div class="taskBar">
               <?php include("./html/taskBar.html"); ?>
            </div>
        </div>
        
        
    </body>
</html>