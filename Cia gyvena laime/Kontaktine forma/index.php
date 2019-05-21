<?php
    require __DIR__ . '/src/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP forma">
    <title>Forma</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    
    <script> 
    $(function(){
        $( ".fa-bars" ).click(function(){
            $(".navigation").toggleClass("nav_visible");
        });
    });
    $(function(){
        $( ".fa-bars" ).click(function(){
            $(".container-fluid").toggleClass("body_nav_visible");
            
        });
    });
    $(function(){
        $( ".fa-search" ).click(function(){
            $(".header_search").toggleClass("header_search_visible");    
        });
    }); 
    $(function(){
        $( ".fa-search" ).click(function(){
            $(".container-fluid").toggleClass("body_nav_visible");

        });
    });
        
    </script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
   <div id ="header">
        <a ><i class="fas fa-bars"></i></a>
        <a id ="logo" href = "">Čia gyvena laimė</a>
        <a><i class="fas fa-search"></i></a> 
    </div>
    <hr>
    <div></div>
    <div class ="header_search">
        <input id = "search_aerea" type="text" name="search_value" placeholder="Įveskite tekstą ir paspauskite ENTER" autofocus>
        <a class = "fas fa-times" href = ""></a>
    </div>
    
    
    <main>
        <div class="container">
            <form id="contact" action="index.php" method="post">
                <h3>Parašykite man</h3>
                <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus></p>
                <p><input type="text" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                <p><textarea name="message" placeholder="Jūsų žinutė" required></textarea></p>
                <p><button type="submit" name="submit" id="contact-submit">Siųsti</button></p>
            </form>
        </div>

        <div id="footer">
            <table>
                <tr>
                    <td><a href = "https://www.facebook.com/" class="fab fa-facebook-f" target="_blank"></a></td> 
                    <td><a href = "https://www.instagram.com/" class="fab fa-instagram" target="_blank"></a></td>
                    <td><a href = "https://www.pinterest.com/" class="fab fa-pinterest" target="_blank"></a></td>
                    <td><a href = "https://github.com/" class="fab fa-github" target="_blank"></a></td>
                </tr>
            </table>    
        </div>

        <div class="navigation">
            <ul class="navigation_list">
                <li><a class="fas fa-times" href = ""></a></li>
                <li><a class="list_item" href = "">Receptai</a></li>
                <li><a class="list_item" href = "">Gėlės</a></li>
                <li><a class="list_item" href = "">Vaikai</a></li>
                <li><a class="list_item" href = "">Laisvalaikis</a></li>
                <li><a class="list_item" href = "">Parašykite man</a></li>
            </ul>  
        </div> 
    </main>
    
</body>

</html>
