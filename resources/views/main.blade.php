<!DOCTYPE html>
<html>
    <head>
        <title>Cake</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
        <script src="/plugins/jquery.min.js"></script>
        <script src="/plugins/colorbox/jquery.colorbox-min.js"></script>
        <script>
            $(function(){
                $("a.mainphoto").mainphoto({current:"Фото {current} из {total}"});
            });
            </script>
        
    </head>
    
    <body>
        
        <div class= "header">
        <div><img id= "headerphoto" onclick="window.location.reload(this)" src="logolab5.png" alt="logo" width="100" ></div>
        <div id="Home"  onclick="change(this)" onmouseover="bigHeader(this)" onmouseout="smallHeader(this)">Home</div>
        <div id="About" onclick="change(this)" onmouseover="bigHeader(this)" onmouseout="smallHeader(this)">About</div>
        <div id="Hobby"  onclick="change(this)" onmouseover="bigHeader(this)" onmouseout="smallHeader(this)">Hobby</div>
        <div id="contacts" onclick="change(this)" onmouseover="bigHeader(this)" v>Contacts</div>
        </div>
        <a class="mainphoto"  id = "mainphoto"  href="4316-removebg-preview.png">
            <img id ="img" src = "4316-removebg-preview.png"  alt="1page" width="350">
      
        </a>
        <div class ="maintext">
            <h1 id = "welcome">Welcome to my sweet site!</h1>
            <p id="par" >My name is Saparkul Toktan. I am 2nd course student of SDU. I'm a programmer.</p>
           
         
        </div>
        </div>
        <div class="input">
            <form method="get" action="test.php"> 
            <input type="text" name="user" placeholder="Full name" /> 
            <input type="text" name="number" placeholder="Number" /> 
            <input type="submit" value="Send"> 
            </form> 
        </div>

        <script type="text/javascript" src="lab3.js"></script>
        

    </body>
    
</html>