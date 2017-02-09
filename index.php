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
        
        <script src="scripts/functions.js"></script>
        <script src="scripts/animations.js"></script>
        <script>
            var file=childNodesToArray(document.getElementsByClassName("files")[0].childNodes);
            var windows=childNodesToArray(document.getElementsByClassName("windows")[0].childNodes);
            
            
            
            file[1].addEventListener("click",function(){
                fade(windows[1],null,0,1);
                var exitButton=childNodesToArray(windows[1].childNodes[1].childNodes[1].childNodes[1].childNodes[3].childNodes[1].childNodes);
                exitButton[0].addEventListener("click",function(){
                    fade(windows[1],null,1,0); 
                });
            });
            file[3].addEventListener("click",function(){
                fade(windows[0],null,0,1);
                var exitButton=childNodesToArray(windows[0].childNodes[1].childNodes[1].childNodes[1].childNodes[3].childNodes[1].childNodes);
                exitButton[0].addEventListener("click",function(){
                    fade(windows[0],function(){windows[0].style.display="none"},1,0); 
                });
            });
        </script>
    </body>
</html>