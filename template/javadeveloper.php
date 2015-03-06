<?php//includo l'header del contatore e determino la pagina visualizzata$pagina = 'java_developer';if (!defined('ROOT_DIR'))	define('ROOT_DIR', '../');include(ROOT_DIR . 'cnt/cookie.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="it-IT"
    xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" />
        <link href="css/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="Database, relazionali, Apos, BITOOLS, BusinessObjects, SQL, PL-SQL, Oracle, MySQL, DB2, Java, HTML, Javascript, JSP, Servlet, Tomcat, JBoss, Webshere, Weblogic, EJB, Ajax, C++, Eclipse, J2EE, NetBeans, Toad, Data, Warehousing, Warehouse, Enterprise, C#, Asp, .net, Apache, Business, Intelligence, Objects, XI, Java, Beans, IT, Consultancy, Modello, MVC, Model, Struts, Hibernate, Cognos" />
        <meta name="description" content="Advancia Techonology divide la propria gamma di servizi in tre categorie principali: Processi (per dominare e sfruttare la tecnologia come fattore abilitante nei processi di business), Applicazioni (per progettare e realizzare soluzioni applicative verticali) e Tecnologie (per ottimizzare l'utilizzo delle tecnologie innovative e replicare soluzioni di provata efficacia)." />
        <meta name="title" content="Java Developer" />
        <title>Java Developer</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
        <!--[if IE 6]>
        <link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
        <![endif]-->
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
        <script type="text/javascript" src="js/func.js"></script>
        <script>	//script per il blink del contest	function blinkFont() {	  document.getElementById("blink").style.color="white"	  setTimeout("setblinkFont()", 500)	}	function setblinkFont()	{	  document.getElementById("blink").style.color=""	  setTimeout("blinkFont()", 500)	}	</script>
    </head>
    <body onload="blinkFont()">
        <div class="shell">
            <div class="border">
                <div id="header">
                    <a href="index.php">
                        <img src="css/images/header.png" />
                    </a>
                    <div class="socials">
                        <ul>
                            <li>
                                <a href="http://jguana.it/tw" target="_blank">Teamwork</a>
                            </li>
                            <li class="last">
                                <a class="active">ITA</a>
                                <a>ENG</a>
                            </li>
                        </ul>
                    </div>
                    <div class="cl"></div>
                </div>
                <div id="navigation">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="chisiamo.php">Chi siamo</a>
                        </li>
                        <li>
                            <a href="servizi.php">Servizi</a>
                        </li>
                        <li>
                            <a href="teamwork.php">Teamwork</a>
                        </li>
                        <li>
                            <a href="socialmarketing.php">Social Marketing</a>
                        </li>
                        <li>
                            <a href="android.php">Android</a>
                        </li>
                        <li>
                            <a href="offertaformativa.php">Offerta Formativa</a>
                        </li>
                        <li>
                            <a href="corsiformativi.php">Corsi Formativi</a>
                        </li>
                        <li>
                            <a href="lavoraconnoi.php">Lavora con noi</a>
                        </li>
                        <li>
                            <a href="contatti.php">Contattaci</a>
                        </li>
                    </ul>
                    <div class="cl"></div>
                </div>
                <div class="slider">
                    <ul>
                        <li>
                            <div class="item">
                                <div class="text">
                                    <img style="position: absolute; top: 0px; left: 120px;" src="css/images/javadeveloper.png" />
                                </div>
                                <img src="css/images/slider04.png" alt="" />
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="main">
                    <div id="content" class="left">
                        <div class="highlight">
                            <h3>Selezioni aperte per un Java Developer</h3>
                            <font color="#C00000">Advancia Technology</font> srl è in cerca di giovani neolaureati in discipline informatiche, da tutta Italia, per una selezione che si svolgerà mercoledì 4 Settembre a Viareggio (Lu).
                            <br />
                            <br />					Chi supererà la selezione diventerà il nostro prossimo Developer Java per la sede di Milano, grazie a un contratto che lo/la inserirà in modo definitivo in 
                            <font color="#C00000">Advancia Technology</font>.
                            <br />
                            <br />					Si possono candidare neolaureati e neolaureate in Informatica e Ingegneria Informatica con votazione da 104/110.
                            <br />
                            <br />					Per candidarsi, basta scrivere all'indirizzo 
                            <a href="mailto:info@advancia.it">info@advancia.it</a> indicando il riferimento "Selezione Settembre" e allegando un CV completo di "Autorizzazione al trattamento dei dati personali ai sensi del D.Lgs.196/2003 e successive modifiche".
                            <br />
                            <br />					L'offerta è da intendersi nel rispetto delle norme sulla parità di trattamento in materia di occupazione e di condizioni di lavoro (L.903/77, L.125/91, D.Lgs. 215/03 e 216/03).
                            <br />
                        </div>
                    </div>
                    <div id="sidebar" class="right">
                        <div class="banner">
                            <h3>PRODOTTI</h3>
                            <center>
                                <table cellspacing="10">
                                    <tr>
                                        <td align="center">
                                            <a href="teamwork.php">
                                                <img src="css/images/teamwork_banner.png" width="100px" height="100px" />
                                                <br />Gestionale Commesse
                                            </a>
                                        </td>
                                        <td align="center">
                                            <a href="socialmarketing.php">
                                                <img src="css/images/socialmarketing_banner.png" width="100px" height="100px" />
                                                <br />Social Marketing
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                            <br />
                        </div>
                        <div class="info">
                            <h3>INFO</h3>
                            <center>
                                <img src="css/images/logo.png" />
                            </center>
                            <address>					Advancia Technology srl
                                <br />					Ripa di Porta Ticinese, 39
                                <br />					20143 Milano (MI)
                                <br />					PI 01179050453
                                <br />
                                <a href="mailto:info@advancia.it">info@advancia.it</a>
                            </address>
                        </div>
                    </div>
                    <div class="cl"></div>
                </div>
                <div class="shadow-l"></div>
                <div class="shadow-r"></div>
                <div class="shadow-b"></div>
            </div>
            <div id="footer">
                <div class="footer-nav left">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="chisiamo.php">Chi siamo</a>
                        </li>
                        <li>
                            <a href="servizi.php">Servizi</a>
                        </li>
                        <li>
                            <a href="teamwork.php">Teamwork</a>
                        </li>
                        <li>
                            <a href="socialmarketing.php">Social Marketing</a>
                        </li>
                        <li>
                            <a href="android.php">Android</a>
                        </li>
                        <li>
                            <a href="offertaformativa.php">Offerta Formativa</a>
                        </li>
                        <li>
                            <a href="corsiformativi.php">Corsi Formativi</a>
                        </li>
                        <li>
                            <a href="lavoraconnoi.php">Lavora con noi</a>
                        </li>
                        <li>
                            <a href="http://www.advancia.it/stage/oracle">Stage</a>
                        </li>
                        <li>
                            <a href="http://www.advancia.it/repository">Repository</a>
                        </li>
                        <li class="last">
                            <a href="http://www.advancia.it/cnt/counter.php">Counter</a>
                        </li>
                    </ul>
                </div>
                <p class="copy right">Copyright © Advancia Technology 2012 | Valid CSS & HTML</p>
                <div class="cl"></div>
            </div>
        </div>
    </body>
</html>
<?php//includo il contatore//include(ROOT_DIR . 'cnt/cnt.php');?>