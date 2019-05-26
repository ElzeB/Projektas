<!DOCTYPE html>
<html lang="lt">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ČIA GYVENA LAIMĖ</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
        
        $(function(){
            $( "#tik_maistas" ).click(function(){
                $("#geles, #vaikai, #laisvalaikis, .navigation").hide(100);
            });
        });
        
        $(function(){
            $( "#tik_geles" ).click(function(){
                $(" #vaikai, #maistas, .navigation").hide(100);
            });
        });
        
        $(function(){
            $( "#tik_vaikai" ).click(function(){
                $("#geles, #laisvalaikis, #maistas, .navigation").hide(100);
            });
        });
        
        $(function(){
            $( "#tik_laisvalaikis" ).click(function(){
                $(" #geles, #vaikai, #maistas, .navigation").hide(100);
            });
        });
        
	</script>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    <div id = "header">
        <div><a class="fas fa-bars"></a></div>
        <div><a id ="logo" href="index.php">Čia gyvena laimė</a></div>
        <div><a class="fas fa-search"></a></div>
    </div>
    
    <div class ="header_search">
        <input id = "search_aerea" type="text" name="search_value" placeholder="Įveskite tekstą ir paspauskite ENTER" autofocus>
        <a class = "fas fa-times" href = ""></a>
    </div>
    
    <div class="container-fluid">
        <div class="row ">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                         <img src="nuotraukos/avocado.jpg" alt="avocado">
                            <a href="Sumustiniai.html" class="overlay">
                                <div class="info">Nuostabiausi sumuštiniai</div>
                            </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/bread.jpg" alt="bread">
                            <a href="Sourdough_duona.html" class="overlay">
                                <div class="info" >Sourdough duona</div>
                            </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/oats.jpg" alt="oats">
                            <a href="Avizu_kruopu_kose.html" class="overlay">
                                <div class="info" >Avižų kruopų košė</div>
                            </a>
                        </div>
                    </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/pancakes.jpg" alt="pancakes">
                            <a href="Aviziniai_blynai.html" class="overlay">
                                <div class="info" >Avižiniai blynai</div>
                            </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/scones.jpg" alt="scones">
                            <a href="Scones.html" class="overlay">
                                <div class="info" >Angliški "Scones"</div>
                            </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/borzoi.jpg" alt="dog">
                            <a href="Suo.html" class="overlay">
                                <div class="info" >Šuo tavo gyvenime</div>
                            </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/cereal.jpg" alt="cereal">
                            <a href="Pusryciai_darzelyje.html" class="overlay">
                                <div class="info" >Pusryčiai darželyje</div>
                            </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/eggs.jpg" alt="eggs">
                            <a href="Pusryciai_darzelyje.html" class="overlay">
                                <div class="info" >Gyvenimas kaime</div>
                            </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="hovereffect">
                        <img src="nuotraukos/monstera.jpg" alt="monstera">
                            <a href="Pusryciai_darzelyje.html" class="overlay">
                                <div class="info" >Kambariniai augalai</div>
                            </a>
                    </div>
                </div>
            </div>
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
    </div>
    <div class="navigation">
        <ul class="navigation_list">
            <li><a class="fas fa-times" href = ""></a></li>
            <li><a class="list_item" href="Kategorijos/Receptai.html">Receptai</a></li>
            <li><a class="list_item" href="Kategorijos/Vaikai.html">Vaikai</a></li>
            <li><a class="list_item" href="Kategorijos/Laisvalaikis.html">Laisvalaikis</a></li>
            <li><a class="list_item" href = "Kontaktine_forma/index.php">Parašykite man</a></li>
        </ul>  
    </div> 

</body>
    
</html>
