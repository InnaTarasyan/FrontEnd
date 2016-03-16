<!DOCTYPE html>
<html>
<head>

    <link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/MyStyles.css" type="text/css">


    <style>
        .carousel-content {
            position: absolute;
            bottom: 0%;
            left :0%;
            z-index: 20;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            width: 100%;


        }

        @media screen and (max-width: 1000px) {
            .imgimg{
              width: 30%;
              height: 30%;

                float:right;
                clear:right;




            }
            #item1
            {
                padding-bottom: 145px;
            }
            #item2
            {
                padding-bottom: 145px;
            }
        }

    </style>
</head>
<body style="height: 100%; padding-top: 75px;">



<div class="navbar navbar-inverse navbar-fixed-top bg6" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Project name</a>-->
            <div class="navbar-brand logo"></div>
            <!--
            <ul class="nav navbar-brand navbar-nav navbar-right">
                <li><div class="Layer_44"></div></li>
                <li><div class="Layer_43"></div></li>
                <li><div class="Layer_42"></div></li>
                <li><div class="Layer_41"></div></li>
                <li><div class="Layer_40"></div></li>
            </ul>
            -->
        </div>
        <div class="navbar-collapse collapse">
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li><div class="Layer_44"></div></li>
                    <li><div class="Layer_43"></div></li>
                    <li><div class="Layer_42"></div></li>
                    <li><div class="Layer_41"></div></li>
                    <li><div class="Layer_40"></div></li>
                </ul>
            </div>

        </div><!--/.navbar-collapse -->
    </div>
</div>




<div id="myCarousel" class="carousel slide" data-ride="carousel" >


    <div class="carousel-inner" role="listbox" >

        <div class="active item" id="item1" >
            <img src="images/gallery/new.png" alt="...">
            <?php include('top_content.php');?>

        </div>

        <div class="item" id="item2">
            <img src="images/gallery/new.png"/>
            <?php include('top_content.php');?>

        </div>


    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="jumbotron" style="background-color: rgb(244, 243, 243);">
    <div class="container">
        <br/>
        <div style="text-align:center;font-size: 40px;font-family: 'OpenSans';color: rgb(51, 51, 51);line-height: 1.2;">
            DSB Rejsetidsgaranti. Få kompensation.
        </div>
        <br/>
        <div style="
        font-size: 16px;
        font-family: 'OpenSans';
        color: rgb(102, 102, 102);
        line-height: 1.5;
        z-index: 75;
        ">
            Hvis du på en rejse er blevet forsinket mere end 30 minutter, kan du få kompensation via DSB Basis Rejsetidsgaranti, når du har rejst med DSB fjern- eller regional tog i Danmark med billet, klippekort, rejsekort eller Bus & Tog Årskort
        </div>
    </div>
</div>


<div class="container">

    <div style="font-size: 40px;font-family: 'OpenSans';color: rgb(51, 51, 51);line-height: 1.2;text-align: center">Vi har gjort det simplet</div>
    <br/>
    <div class="row" style="text-align: center;">
        <div class="col-md-3">
            <br/>
            <div style="display: block;margin-left: auto;margin-right: auto;text-align: center;
            border-radius: 50%;background-image: -moz-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%);background-image: -webkit-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); background-image: -ms-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); height: 47px; width: 47px; ">
                <img src="images/screens/small_icons/money.png" width="30" height="30">
            </div>
            <br/>
            <div style="font-size: 24px;
        font-family: 'OpenSans';color: rgb(51, 51, 51);
        text-transform: uppercase;line-height: 1.2;">
                Kompensation
            </div>
            Når din ankomst tid er mere end 30 minutter forsinket.
            <br/>
            <img src="images/screens/screen.png" height="480"/>
        </div>
        <div class="col-md-3">
            <br/>
            <div style="display: block;margin-left: auto;margin-right: auto;text-align: center;
            border-radius: 50%; background-image: -moz-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%);background-image: -webkit-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); background-image: -ms-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); height: 47px; width: 47px; ">
                <img src="images/screens/small_icons/train.png" width="30" height="30">
            </div>
            <br/>
            <div style="font-size: 24px;font-family: 'OpenSans';color: rgb(51, 51, 51);text-transform: uppercase;line-height: 1.2;">
                Rejseoplysninger
            </div>
            Indtast oplysninger om den aktuelle rejse.
            <br/>
            <img src="images/screens/screen1.png" height="480"/>
        </div>
        <div class="col-md-3">
            <br/>
            <div style="display: block;margin-left: auto;margin-right: auto;text-align: center;
            border-radius: 50%; background-image: -moz-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%);background-image: -webkit-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); background-image: -ms-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); height: 47px; width: 47px; ">
                <img src="images/screens/small_icons/person.png" width="30" height="30">
            </div>
            <br/>
            <div style="font-size: 24px;font-family: 'OpenSans';color: rgb(51, 51, 51);text-transform: uppercase;line-height: 1.2;">
                Personoplysninger
            </div>
            Indtast dine personlige oplysninger.
            <br/><br/>
            <img src="images/screens/screen4.png" height="480"/>
        </div>
        <div class="col-md-3">
            <br/>
            <div style="display: block;margin-left: auto;margin-right: auto;text-align: center;
            border-radius: 50%; background-image: -moz-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%);background-image: -webkit-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); background-image: -ms-linear-gradient( 90deg, rgb(225,10,70) 0%, rgb(183,22,49) 100%); height: 47px; width: 47px; ">
                <img src="images/screens/small_icons/ticket.png" width="30" height="30">
            </div>
            <br/>
            <div style="font-size: 24px;font-family: 'OpenSans';color: rgb(51, 51, 51);text-transform: uppercase;line-height: 1.2;">
                Type
            </div>
            Vælg ønskede kompensationstype.
            <br/><br/>
            <img src="images/screens/screen3.png" height="480"/>
        </div>
    </div>
    <br/>
    <div class="center-block" style="text-align:center; border-style: solid;
    border-width: 1px;
    border-color: rgb(183, 22, 49);
    background-image: -moz-linear-gradient( 90deg, rgb(183,22,49) 0%, rgb(235,10,77) 100%);
    background-image: -webkit-linear-gradient( 90deg, rgb(183,22,49) 0%, rgb(235,10,77) 100%);
    background-image: -ms-linear-gradient( 90deg, rgb(183,22,49) 0%, rgb(235,10,77) 100%);
    box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.45);
    width: 277px;
    height: 67px;
    z-index: 119;
    font-size: 22px;
    font-family: 'OpenSans';
    color: rgb(255, 255, 255);
    font-weight: bold;
    text-transform: uppercase;

    ">
        <img src="images/screens/icon.png" width="18" height="31">
        Download Now
    </div>
    <br/>
</div>


<div class="jumbotron" style="background-color: rgb(17, 41, 71);color: white; text-align: center">
    <div class="container">
        <div style="
        opacity: 0.18;
        margin-top: 140px;
        "> <div style="font-size: 500px;
                font-family: 'Arial';
                color: rgb(255, 255, 255);
                line-height: 0.036;
                text-align: center;"
            >
                &#8221;
            </div>
        </div>
        <div style="position:relative;margin-top: -180px;">
            <div class="Det_er_dejligt_med_en_app_der_hjælper_med_reseg">Det er dejligt med en app der hjælper med resegaranti så simpel</div>
            <br/>
            <img src="images/testimonials/Layer 16.png" height="56">
            <br/>
            <div class="_customer">@customer</div>
        </div>


    </div>
</div>


<div class="container" style="background-image: url('images/map/map.png');">

    <div class="row">
        <div class="col-md-6" style="margin-top:100px;">

            <div  style="font-size: 30px;font-family: 'Arial';color: rgb(51, 51, 51);line-height: 0.6;">
                Omkring os</div><br/>
            <div style="
             font-size: 16px;font-family: 'Arial'; color: rgb(102, 102, 102);line-height: 1.5;z-index: 138;">
                Vores målsætning er at gøre DSB Rejsegaranti tilgængelig for alle på en simpel og overskuelig måde. At gøre hele ansøgning nem, så alle kan få den dispensation de er berettiget til.
            </div>

        </div>

        <div class="col-md-6" style="margin-top:100px;">

            <div style="font-size: 30px;font-family: 'Arial';color: rgb(51, 51, 51);line-height: 0.6;"> Sidste nyt</div><br/>
            <div style=" font-size: 16px;font-family: 'Arial'; color: rgb(102, 102, 102);line-height: 1.5;z-index: 138;">
                Her kan du løbende følge med i relevante nyheder angående DSB R
            </div>

        </div>

    </div>
    <div class="row" style="margin-bottom: 50px;">

        <div class="col-md-6" style="margin-top:100px;">
            <div style="font-size: 30px;font-family: 'Arial';color: rgb(51, 51, 51);line-height: 0.6;">Vores målsætning:</div><br/>
            <div style=" font-size: 16px;font-family: 'Arial'; color: rgb(102, 102, 102);line-height: 1.5;width: 512px;height: 64px;z-index: 138;">
                • Sikre kompensation<br/>
                • Simpel ansøgning<br/>
                • Flot design<br/>
                • Gratis
            </div>
        </div>
        <div class="col-md-6" style="margin-top:100px;">
            <div style="font-size: 30px;font-family: 'Arial';color: rgb(51, 51, 51);line-height: 0.6;">Blog</div><br/>

            <div style=" font-size: 16px;font-family: 'Arial'; color: rgb(102, 102, 102);line-height: 1.5;z-index: 138;">
                <div style="font-family: 'OpenSans';color: rgb(225, 10, 70);font-weight: bold;line-height:1.5">
                    <img src="images/map/icon.png" width="16" height="20">
                    DSB forsinkelser – DSB rejsegaranti kan komme i spil
                </div>
                September 29, 2015<br/>
                <div style="font-family: 'OpenSans';color: rgb(225, 10, 70);font-weight: bold;line-height:1.5">
                    <img src="images/map/icon.png" width="16" height="20">
                    DSB forsinkelser – DSB rejsegaranti kan komme i spil
                </div>
                September 29, 2015<br/>
            </div>
        </div>
    </div>

</div>

<div class="jumbotron" style="background-color: rgb(17, 41, 71);">
    <div class="container" style="font-size: 18px;
  font-family: 'OpenSans';
    color: rgb(153, 153, 153);
    line-height: 1.111;">

        <div class="row">
            <div class="col-md-3" style="margin-top: 20px;">
            <span style="font-size: 22px;">
            Omkring os
            </span>
                <br/><br/>
                E-Opinion er specialiserede indenfor<br/>
                it-outsourcing<br/>
                <br/>
                E-Opinion ApS<br/>
                Søren Frichs Vej 40A<br/>
                8230 Åbyhøj<br/>
                Mobil: 22 14 54 56<br/>
                Internet: <span style="color:rgb(255,255,255)"> E-Opinion</span><br/>
                E-mail:  <span style="color:rgb(255,255,255)"> kontakt@e-opinion.dk</span>
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
            <span style="font-size: 22px;">
            Kategori
            </span>
                <br/><br/>
                <img src="images/footer/Shape%201%20copy%202.png" width="211" height="1"><br/><br/>
            <span style="color:rgb(255,255,255)">
            DSB Rejsegaranti
            </span>
                <br/>
                <img src="images/footer/Shape%201%20copy%203.png" width="211" height="1"><br/><br/>
                Archives<br/>
                <img src="images/footer/Shape%201%20copy%202.png" width="211" height="1"><br/><br/>
                <img src="images/map/icon.png" width="16" height="20">
            <span style="color:rgb(255,255,255)">
            September 2015
            </span>
                <br/>
                <img src="images/footer/Shape%201%20copy%203.png" width="211" height="1"><br/><br/>

            </div>
            <div class="col-md-3" style="margin-top: 20px;">
            <span style="font-size: 22px;">
            DSB Rejsegaranti
            </span>
                <br/><br/>
                <div style="text-align:left;width: 173px;height: 67px;border-style: solid;border-width: 1px; border-color: rgb(29, 51, 80); border-radius: 4px;background-color: rgb(21, 38, 60);">
                    <img src="images/map/icon.png" width="16" height="20">
                    DBS Rejsegaranti<br/>
                    Download Now
                </div>

            </div>
            <div class="col-md-3" style="margin-top: 20px;">
                Søg<br/>

                <div style=" text-align: right;
                         border-style: solid;
                         border-width: 1px;
                         border-color: rgb(29, 51, 80);
                         border-radius: 4px;
                         background-color: rgb(21, 38, 60);
                         width: 227px;
                         height: 41px;"
                >
                    <img src="images/footer/icon.png" width="19" height="19">
                </div>
            </div>

        </div>

    </div>
</div>



<div id="footer" style=" background-color: rgb(1, 13, 29);">
    <div class="container" style="text-align: center;height: 57px;">
        <p class="text-muted">Copyright DSB Rejsegaranti 2015. All rights reserved.</p>
    </div>
</div>



</body>
</html>