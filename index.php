<html>

<head>
    <meta charset="UTF-8">
    <title>Haber-Bosch-Verfahren</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway:300,400&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }
        
        header #navbar {
            transition: .2s;
        }
        
        .carousel-item {
            background-color: rgb(61, 61, 61);
            color: white;
            padding: 5% 20%;
            height: 600px;
            border: 0;
        }
        
        .carousel-item img {
            filter: brightness(0) invert(1);
            width: 50px;
        }
        
        section {
            padding: 120px 0;
            display: block;
        }
        
        section h2 {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
        }
        
        section hr {
            margin: 20px auto;
            width: 4%;
            background-color: black;
        }

        #nitrogen-cycle {
            padding-left: 100px;
            padding-right: 100px;
        }
        
        .carousel-indicators li {
            height: auto;
            width: auto;
            text-indent: 1px;
            border: 0;
            background-color: transparent;
            color: white;
        }
        
        .carousel-item table {
            color: white;
        }
        
        .jumbotron {
            background-color: rgba(0, 0, 0, 0.1);
        }
        
        #process img {
            padding: 25px;
            
        }
        
        footer {
            width: 100%;
            
            background-color: rgba(0, 0, 0, 0.8);
            margin-top: 100px;
            padding: 25px;
            overflow: hidden;
            position: relative;
        }

        footer img {
            width: 40%;
            margin: 50px auto;
            border-radius: 10px;
        }
        /* 
        .contact-icons i {
            font-size: 2.75rem;
            display: inline-block;
            margin: 0 25px;
            cursor: pointer;
            transition: .2s;
        }
        .contact-icons i:hover {}
        */
        
        .impressum {
          
        }
        
        #profile img {
            width: 20%;
        }
        
        @media (max-width: 992px) {
            #profile {
                text-align: center;
            }
            #profile img {
                width: 50%;
                margin: 25px 0;
            }
            footer {
                overflow: scroll;
            }
        }
    </style>

</head>

<body>

    <!--Kopf & Navigation-->
    <header class="p-3 bg-light" id="header">
        <div id="heading" class="text-center">
            <h1>Haber-Bosch-Verfahren</h1>
            <p>von Anton, Leander und Zlatko</p>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#heading">Start</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#nitrogen-cycle">Stickstoffkreislauf</a>
                        <a class="nav-item nav-link" href="#characteristics" id="link-characteristics">Reaktionstoffe</a>
                        <a class="nav-item nav-link" href="#profile">Haber & Bosch</a>
                        <a class="nav-item nav-link" href="#process">Verfahren</a>
                        <a class="nav-item nav-link" href="#simulation">Simulation</a>
                        <a class="nav-item nav-link" href="#consequences">Folgen</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">

        <!--Natürlicher Stickstoffkreislauf-->
        <section id="nitrogen-cycle">
            <h2>Natürlicher Stickstoffkreislauf</h2>
            <hr>
            <p>
                Bestimmte <strong>Bakterien</strong> (u.a. Cyanobakterien und Knöllchenbakterien, letztere leben symbiotisch in den Wurzeln mancher Pflanzen) binden, mithilfe von Enzymen, den <strong>Luftstickstoff</strong> in Form von <strong>Ammoniak</strong>. Dieses wird darauf von anderen Bakterien zu <strong>Nitrit- und Nitrat-Ionen</strong> oxidiert (=Nitrifikation).
            </p>
            <p>
                Die im Wasser gelösten Ammonium-, Nitrit- und Nitrat-Ionen werden von <strong>Pflanzen</strong> aufgenommen und zu <strong>Aminosäuren</strong> verarbeitet. Aus diesen bilden sie <strong>pflanzliches Eiweiß</strong>.
            </p>
            <p>
                Die pflanzlichen Eiweiße werden von <strong>Tieren</strong> aufgenommen und von diesen zu körpereigenen <strong>organischen Stickstoffverbindungen</strong> umgewandelt.
            </p>
            <p>
                Tote organische Substanz, wie Ausscheidungen von Tieren oder tote Lebewesen, werden von <strong>Bakterien und Pilzen</strong> zersetzt, wobei diese die organischen Stickstoffverbindungen wieder in anorganische Verbindungen wie <strong>Ammoniak, Nitrat und Nitrit</strong> umwandeln.
            </p>
            <br/>
            <p>
                Bei diesem Kreislauf kann neben gasförmigem Ammoniak auch das Treibhausgas Distickstoffmonoxid (Lachgas) entweichen. Durch die industrielle Ammoniakgewinnung entsteht ein Überschuss an Stickstoffverbindungen, die nicht von den Pflanzen aufgenommen werden können. Die Folge sind klima- und umweltschädliche Effekte aufgrund erhöhter N<sub>2</sub>O-Emissionen als auch Nitratgehalte in den Gewässern.
            </p>
        </section>

        <!--Reaktionsstoffe-->
       <?php include "./items/carousel.html"; ?>

        <!--Profile-->
        <section id="profile">
            <h2>Haber und Bosch</h2>
            <hr>

            <div class="jumbotron ">
                <div class="container">
                    <div class="d-lg-flex justify-content-between">
                        <div>
                            <h1 class="display-5">Fritz Haber</h1>
                            <p class="lead">Fritz Haber war ein deutscher Chemiker und Nobelpreisträger für Chemie.</p>

                            <p class="mt-5"><b>Geboren:</b> 9. Dezember 1868, <i>Wroclaw, Polen</i></p>
                            <p><b>Gestorben:</b> 29. Januar 1934, <i>Basel, Schweiz</i></p>
                        </div>
                        <img src="img/Fritz_Haber.png">
                    </div>
                    <div class="d-lg-flex justify-content-between mt-5">
                        <img src="img/Carl_Bosch.jpg">
                        <div>
                            <h1 class="display-5">Carl Bosch</h1>
                            <p class="lead">Carl Bosch war ein deutscher Chemiker, Techniker und Industrieller.</p>

                            <p class="mt-5"><b>Geboren:</b> 27. August 1874, <i>Köln, Deutschland</i></p>
                            <p><b>Gestorben:</b> 26. April 1940, <i>Heidelberg, Deutschland</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Verfahren-->
       <?php include "./items/process.html"; ?>

        <!--Simulation-->
        <section id="simulation">
            <h2>Simulation</h2>
            <hr>
            <p class="lead text-center">Teste und interagiere mit der Reaktion des Haber-Bosch-Verfahrens</p>
            <iframe src="https://scratch.mit.edu/projects/343941459/embed" allowtransparency="true" width="100%" height="750" frameborder="0" scrolling="no" allowfullscreen></iframe>
            <p class="lead text-center" style="margin-top: 20;">Die Simulation befindet sich leider noch in Arbeit.</p>
        </section>

        <!--Folgen-->
        <section id="consequences">
            <h2>Folgen</h2>
            <hr>
            <h5>...auf Binnengewässer</h4>
            <p>
                Wenn Düngemittel verwendet werden, kann überschüssiger Dünger durch Auswaschung und aus Oberflächenabschwemmungen in Flüsse, Seen und Bäche gelangen. Eine der Hauptwirkungen dieses Düngers ist die Eutrophierung von Süßwasser, d.h. eine starke Erhöhung des Nährstoffgehaltes in Form von Stickstoff. Dabei führt der Nährstoffüberfluss zu einer übermäßigen Vermehrung von Algen und Cyanobakterien, deren Wachstum vorher durch die Verfügbarkeit von Stickstoff begrenzt war. Nach dem Absterben dieser Algen werden die Überreste von Bakterien abgebaut, welche dafür einen Großteil des Sauerstoffs verbrauchen. Ohne diesen Sauerstoff können viele Arten nicht mehr überleben und sterben ebenfalls ab. Zusätzlich werden bei der Zersetzung der Algenreste toxische Kohlenwasserstoffe wie Methan freigesetzt. In Extremfällen kommt es zum Umkippen des Gewässers, wobei es vollständig tot ist.
            </p>
            <br>
            <h5>...auf das Grundwasser</h4>
            <p>
                Das Nitrat, welches von den Pflanzen nicht aufgenommen wird, gelangt ins Grundwasser und damit auch in unser Trinkwasser. Da sich aus Nitrat gesundheitsschädliches Nitrit und Nitrosamine bilden können,  gibt es einen vorgeschriebenen Nitrat-Grenzwert für Trinkwasser. Dieser beträgt in Deutschland und Österreich 50 mg/l und in der Schweiz 25 mg/l und wird laut Umweltbundesamt aktuell in 18% des deutschen Grundwassers überschritten. Für die Trinkwassergewinnung wird das belastete Wasser mit nitratarmem Wasser verdünnt, außerdem können tiefere Brunnen gegraben werden, da das Grundwasser mit zunehmender Tiefe weniger verunreinigt ist. 2016 reichte die EU-Kommission aufgrund der Nichteinhaltung der Grenzwerte eine Klage gegen Deutschland ein. Nach der Veröffentlichung der Klage verabschiedete die Bundesregierung ein neues Düngegesetz und eine neue Düngeverordnung, diese sind seit 2017 in Kraft. 
            </p>
            <br>
            <h5>...auf die Gesundheit des Menschen</h5>
            <p>
            Ammoniak, welcher in die Atmosphäre gerät, wandelt sich in Feinstaub um. Dieser trägt erheblich zur Luftverschmutzung bei und ist Ursache für Herzkreislauf- und Atemwegserkrankungen. Zudem reduziert er Lungenfunktion und verursacht Krebs. Jedes Jahr kommt es daher zu mehr als 47.000 vorzeitigen Todesfällen durch die Feinstaubbelastung. Ebenso gefährlich ist das Nitrat aus welchem sich Nitrit bilden kann. Dieses verbindet sich mit Hämoglobin und beeinträchtigt die Sauerstoffzufuhr, was besonders für Säuglinge lebensgefährlich werden kann. Außerdem wird Nitrit von bestimmten Bakterien im Darm zu krebserregenden Nitrosaminen umgewandelt werden. 
            </p>
        </section>

    </div>

        <footer class="">
            <div class="text-white text-center">
               
                    <h1 class="display-4" style="font-size: 3rem;">Diese Website ist im Zuge eines Schulprojektes entstanden
                    </h1>

                    <img src="./img/Group-Img.jpg">

                <div class="impressum">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#impressum">
                    Impressum & Datenschutzerklärung
                </button>
                </div>

            </div>
        </footer>

        <!--Datenschutzerklärung & Impressum-->
      <?php include "./items/dsv.html"; ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript">
            window.setTimeout(function() {
                document.cookie = "_lcp3=a; Path=/; expires=Mon Mar 20 2034 13:02:58"
            }, 1000);

            window.onscroll = function() {
                myFunction()
            };

            // Get the navbar
            var navbar = document.getElementById("navbar");

            // Get the offset position of the navbar
            var sticky = navbar.offsetTop;

            // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("fixed-top");
                    navbar.classList.remove("navbar-light");
                    navbar.classList.remove("bg-light");
                    navbar.classList.add("bg-dark");
                    navbar.classList.add("navbar-dark");
                } else {
                    navbar.classList.remove("fixed-top");
                    navbar.classList.remove("bg-dark");
                    navbar.classList.remove("navbar-dark");
                    navbar.classList.add("navbar-light");
                    navbar.classList.add("bg-light");
                }
                /*
                if ($("section").offset().top <= window.pageYOffset) {
                    let id = $(this).attr("id");
                    console.log($(this));
                   
                     $("#navbar li").removeClass("active");
                     
                     $("#link-" + id).addClass("active");
                    
                }
                */
            }
        </script>
</body>

</html>