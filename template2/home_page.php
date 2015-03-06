<?php




global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "home";

?>
<!DOCTYPE html>
<html lang="it">

<head>

    <link href="<?php echo $url;?>images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta charset="ansi">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Enrico Aleandri">

    <title>Advancia Technology srl</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>

</head>

<body id="page-top" class="index">

<?php
    initConfig::getInstance() -> getIncluder() -> includePage("navbar");
?>
<br><br><br>



<!-- Home Section -->
<section class="success"  id="home">
    <div class="container">
        <div>
            <div id="main">
                <div id="content" class="left">
                    <div class="highlight">
                        <h3>ADVANCIA TECHNOLOGY</h3>

                        <p>
                            <font color="#C00000">Advancia Technology</font> &egrave; una societ&agrave; di Servizi Professionali, System Integration ed Application Management, 					specializzata nella progettazione e nell'implementazione di soluzioni basate sui nuovi canali di comunicazione.
                            <font color="#C00000">Advancia Technology</font> progetta e realizza soluzioni volte ad ottimizzare i processi aziendali, utilizzando tecnologie innovative, 					in grado di abilitare la comunicazione tra clienti, partner, fornitori e collaboratori
                        </p>
                        <p>
                            <strong>Il contesto di riferimento.</strong>
                            <br />					La veloce evoluzione dei mezzi di comunicazione impone alle aziende un nuovo modo di comunicare e fare business, basato sulla 					capacit&agrave;  di scambiare informazioni in tempo reale con tutti gli attori coinvolti nella catena del valore.
                        </p>
                        <p>
                            <strong>Il modello organizzativo.</strong>
                            <br />					Il modello organizzativo di
                            <font color="#C00000">Advancia Technology</font> si basa su una struttura di professionisti in ambito ITC e su una vasta rete di alliance tra 					societ&agrave;  focalizzate per linee di offerta. Questo modello coniuga la capacit&agrave;  progettuale ed organizzativa di un'entit&agrave;  di grandi
                            dimensioni con la flessibilit&agrave; , la specializzazione e il dinamismo delle piccole strutture.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section id="chisiamo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>CHI SIAMO</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div>
            <div class="slider">
                <ul>
                    <li>
                        <div class="item">
                            <img src="<?php echo $url;?>images/slider11.png" alt="" />
                        </div>
                    </li>
                </ul>
            </div>
            <div id="main">
                <div id="content" class="left">
                    <div class="highlight">
                        Caratteristiche distintive di
                        <font color="#C00000">Advancia Technology</font> sono:
                        <ul>
                            <li>una struttura flessibile, in grado di anticipare le evoluzioni del mercato, i nuovi modelli organizzativi e l'innovazione tecnologica</li>
                            <li>un management di grande esperienza e fortemente orientato a generare profitto</li>
                            <li>un team di professionisti che, utilizzando una metodologia di progetto solida e specializzata, lavorano insieme per ottenere risultati rapidi ed eccellenti</li>
                            <li>una metodologia di delivery di provato successo e scalabilit&agrave;</li>
                            <li>capacità di instaurare relazioni di lungo termine con grandi aziende industriali e bancarie</li>
                            <li>partnership consolidate con i principali attori mondiali nel settore ICT</li>
                        </ul>
                        <br />
                        <font color="#C00000">Advancia Technology</font> &egrave; un'azienda in forte espansione specializzata nell'ambito dell'Information Technology in grado di fornire supporto e consulenza su progetti nell'ambito di applicazioni:
                        <img src="<?php echo $url;?>/images/nostri_numeri.png" alt="" class="right" />
                        <ul>
                            <li>Data Warehousing - Business Intelligence</li>
                            <li>Oracle - Business Objetcs XI - Cognos</li>
                            <li>Software Development - J2EE - .NET</li>
                            <li>Enterprise Applications</li>
                        </ul>
                        <br />
                    </div>
                </div>

                <div class="cl"></div>
            </div>
        </div>
    </div>
</section>

<!-- Work With US Section -->
<section class="success"  id="lavoraconnoi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Lavora con noi</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div>
            <div id="main">
                <div id="content" class="left">
                    <div class="highlight">
                        <table style="border: 1px solid #e8e8e8; border-radius:1em; width: 100%; padding: 10px;">
                            <tr>
                                <td>
                                    <strong>
                                        <font color="#C00000">Developer TS</font>
                                    </strong>
                                    <br />
                                    <br />
                                    <font color="#C00000">Advancia Technology</font> srl sta cercando una risorsa da inserire presso le sedi di Viareggio/Massa.
                                    <br />
                                    <br />                                Il candidato svolger&agrave; attivit&agrave; di sviluppo e coordinamento.
                                    <br />                                L'inserimento sar&agrave; a tempo pieno e di lungo periodo in un contesto giovane, dinamico e stimolante per la crescita professionale.
                                    <br />
                                    <br />                                Il candidato ideale possiede le seguenti caratteristiche:
                                    <br />
                                    <ul>
                                        <li>esperienza di almeno 6 mesi/1 anno di  sviluppo in tecnologie Java/Jee</li>
                                        <li>entusiasmo per il proprio lavoro</li>
                                        <li>capacità di multitasking</li>
                                        <li>flessibilit&agrave;</li>
                                        <li>laurea breve/magistrale/vecchio ordinamento in discipline informatiche</li>
                                    </ul>
                                    <br />                                Per candidarsi, scrivere a
                                    <a href="mailto:info@advancia.it">info@advancia.it</a> includendo il riferimento "DeveloperTS". Includere una breve lettera di presentazione e allegare il CV completo di autorizzazione al trattamento dei dati personali ai sensi del D.Lgs. 196/2003.
                                    <br />
                                    <br />
                                    <font color="#C00000">Advancia Technology</font> srl &egrave; una societ&agrave; specializzata nella realizzazione di progetti ad-hoc e nella consulenza aziendale in ambito ICT, Business Intelligence e Datawarehouse.
                                    <br />
                                    <br />                                L'offerta &egrave; da intendersi nel rispetto delle norme sulla parit&agrave; di trattamento in materia di occupazione e di condizioni di lavoro (L.903/77, L.125/91, D.Lgs. 215/03 e 216/03).
                                    <br />
                                </td>
                            </tr>
                        </table>
                        <br />
                        <strong>
                            <font color="#C00000">Esperti di soluzioni Data Warehouse/BI</font>
                        </strong> (rif. DW-BI)
                        <br />					Il ruolo prevede il coinvolgimento in progetti di consulenza Applicativa e Tecnologica presso i nostri principali clienti con l'obiettivo di progettare e realizzare sistemi di DWH/BI. Il candidato ideale dovr&agrave; soddisfare i seguenti requisiti fondamentali:
                        <ul>
                            <li>Laurea tecnica possibilmente in Informatica/Ingegneria</li>
                            <li>Conoscenze di base delle architetture e dei database relazionali</li>
                            <li>Competenze di base di modellazione dati (modello logico e fisico) di un DWH e/o DataMart, di ETLM e di data Quality</li>
                            <li>Competenze di realizzazione di Presentation Layer</li>
                            <li>Buona conoscenza della lingua Inglese (scritta e parlata)</li>
                            <li>Disponibilit&agrave; a brevi trasferte in Italia e all'estero</li>
                        </ul>
                        <br />					Per la posizione in oggetto, il candidato deve aver maturato almeno 2 anni su una o pi&uacute; delle seguenti competenze tecniche:
                        <ul>
                            <li>Linguaggio di programmazione SQL / PL-SQL</li>
                            <li>Database: Oracle 9/10g, IBM DB2, Microsoft SQL Server</li>
                            <li>Procedure ETLM: IBM Data Stage, Oracle Warehouse Builder, Oracle  ODI, Business Objects Data Integrator, Cognos</li>
                            <li>Oracle BI Enterprise Edition, Oracle, SAP Business Objects XI</li>
                            <li>Oracle Hyperion, SAP OutlookSoft</li>
                        </ul>
                        <br />
                        <strong>
                            <font color="#C00000">Java Developer junior</font>
                        </strong> (rif. Java JD)
                        <br />					Il ruolo prevede il coinvolgimento in attivit&agrave; di consulenza negli ambiti della progettazione e dello sviluppo di sistemi software per progetti presso le nostre societ&agrave; clienti. Il candidato ideale  dovr&agrave; soddisfare i seguenti requisiti fondamentali:
                        <ul>
                            <li>esperienza in ambito Java e linguaggi orientati al web come HTML e Javascript</li>
                            <li>conoscenza di SQL ed esperienza con almeno un database relazionale (Oracle, MySQL, DB2, ecc.)</li>
                            <li>buona conoscenza della lingua inglese sia scritta che parlata</li>
                        </ul>
                        <br />					Costituiranno titolo preferenziale:
                        <ul>
                            <li>esperienze lavorative o di tesi su piattaforma Java Enterprise Edition (JSP, servlet, ecc.)</li>
                            <li>esperienze con web/application server (Tomcat, JBoss, Webshere, ecc.)</li>
                            <li>laurea in discipline scientifiche</li>
                        </ul>
                        <br />					Sono inoltre richieste:
                        <ul>
                            <li>una buona capacit&agrave; di analisi, di problem solving e di team working</li>
                            <li>un forte orientamento al risultato</li>
                            <li>la disponibilit&agrave; ad effettuare trasferte di breve/medio termine</li>
                        </ul>
                        <br />
                        <strong>
                            <font color="#C00000">Java Senior consultant</font>
                        </strong> (rif. Java SC)
                        <br />					Il ruolo prevede il coinvolgimento in attivit&agrave; di consulenza negli ambiti della progettazione e dello sviluppo di sistemi software per progetti presso le nostre societ&agrave; clienti. Il candidato ideale  dovr&agrave; possedere i seguenti requisiti:
                        <ul>
                            <li>esperienza pluriennale su architetture Java Enterprise Edition</li>
                            <li>esperienza in ambito web (Html, Javascript, Ajax)</li>
                            <li>esperienze con Application Server (Tomcat, JBoss, Webshere, ecc.)</li>
                            <li>esperienza con database relazionali (Oracle preferito, MySQL, DB2, ecc.)</li>
                            <li>buona conoscenza della lingua inglese sia scritta che parlata</li>
                        </ul>
                        <br />					Costituiranno titolo preferenziale:
                        <ul>
                            <li>conoscenza framework Open Source e integrazione con architetture SOA e/o ESB/EAI</li>
                            <li>conoscenza linguaggi shell scripting mondo Unix</li>
                            <li>conoscenza UML e Design Pattern</li>
                            <li>laurea in discipline scientifiche</li>
                        </ul>
                        <br />					Sono inoltre richieste:
                        <ul>
                            <li>una buona capacit&agrave; di analisi, di problem solving e di team working</li>
                            <li>un forte orientamento al risultato unitamente ad un elevato grado di autonomia</li>
                            <li>la disponibilit&agrave; ad effettuare trasferte di breve/medio termine</li>
                        </ul>
                        <br />
                        <strong>
                            <font color="#C00000">Neolaureati Technology Services</font>
                        </strong> (rif. Neo -TS)
                        <br />					Per il potenziamento della nostra struttura siamo alla ricerca di brillanti neolaureati da inserire in stage formativi sui nostri progetti offrendo l'opportunit&agrave; di acquisire la conoscenza dei pi&uacute; avanzati strumenti tecnologici oltre che una metodologia di lavoro strutturata. Lo stage &egrave; finalizzato all'assunzione a tempo indeterminato. Sono richiesti i seguenti requisiti:
                        <ul>
                            <li>il conseguimento di una laurea ad indirizzo tecnico scientifico (Ingegneria Informatica, Elettronica e delle Telecomunicazioni, Informatica, Matematica e Fisica)</li>
                            <li>ottime capacità di comunicazione e relazione</li>
                            <li>dinamicità e orientamento al risultato</li>
                            <li>flessibilit&agrave; e forte motivazione ad operare nel settore della consulenza</li>
                            <li>la conoscenza della lingua Inglese e la disponibilit&agrave; a trasferte</li>
                        </ul>
                        <br />
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section  id="contattaci">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contattaci</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div>
            <?php					if ( isset( $_POST['azione'] ) && $_POST['azione'] == 'Invia' ) {						//imposto le scelte multiple						if ($_POST['info1'] == '') $info1 = ' '; else $info1 = 'X';						if ($_POST['info2'] == '') $info2 = ' '; else $info2 = 'X';						if ($_POST['info3'] == '') $info3 = ' '; else $info3 = 'X';						if ($_POST['info4'] == '') $info4 = ' '; else $info4 = 'X';						if ($_POST['info5'] == '') $info5 = ' '; else $info5 = 'X';						if ($_POST['info6'] == '') $info6 = ' '; else $info6 = 'X';						if ($_POST['info7'] == '') $info7 = ' '; else $info7 = 'X';												$msg_adv = "E' stata inoltrata una richiesta di informazioni tramite il sito Advancia Technology.Qui di seguito le informazioni inserite:Nome: " . $_POST['nome'] . " " . $_POST['cognome'] . "Indirizzo: " . $_POST['indirizzo'] . "CAP: " . $_POST['cap'] . "Citta': " . $_POST['citta'] . "Stato: " . $_POST['stato'] . "Societa' di appartenenza: " . $_POST['societa'] . "Email: " . $_POST['email'] . "Dati facoltativi:Telefono: " . $_POST['telefono'] . "Fax: " . $_POST['fax'] . "Note:" . $_POST['note'] . "Aree di intervento su cui si richiedono maggiori informazioni:[" . $info1 . "] TeamWork[" . $info2 . "] Social Marketing[" . $info3 . "] Sviluppo applicazioni Android[" . $info4 . "] I nostri Servizi[" . $info5 . "] Offerta Formativa[" . $info6 . "] Corsi Formativi[" . $info7 . "] Lavora con NoiLo staff diAdvancia Technology";						$msg_utente = "Ciao " . $_POST['nome'] . ",hai appena inoltrato una richiesta di informazioni tramite il sito Advancia Technology.Qui di seguito le informazioni inserite:Nome: " . $_POST['nome'] . " " . $_POST['cognome'] . "Indirizzo: " . $_POST['indirizzo'] . "CAP: " . $_POST['cap'] . "Citta': " . $_POST['citta'] . "Stato: " . $_POST['stato'] . "Societa' di appartenenza: " . $_POST['societa'] . "Email: " . $_POST['email'] . "Dati facoltativi:Telefono: " . $_POST['telefono'] . "Fax: " . $_POST['fax'] . "Note:" . $_POST['note'] . "Aree di intervento su cui hai richiesto maggiori informazioni:[" . $info1 . "] TeamWork[" . $info2 . "] Social Marketing[" . $info3 . "] Sviluppo applicazioni Android[" . $info4 . "] I nostri Servizi[" . $info5 . "] Offerta Formativa[" . $info6 . "] Corsi Formativi[" . $info7 . "] Lavora con NoiLo staff diAdvancia Technology";						//invio qui la mail al sistema advancia						mail(							'info@advancia.it',							'ADV :: Richiesta Informazioni',							$msg_adv,							'From: Advancia Technology <noreply@advancia.it>'						);												//invio qui la mail all'utente						mail(							$_POST['email'],							'ADV :: Richiesta Informazioni',							$msg_utente,							'From: Advancia Technology <noreply@advancia.it>'						);					?>						<br />						La tua richiesta ad <font color="#C00000">Advancia Technology</font> &egrave; stata inoltrata correttamente. Una copia della tua richiesta &egrave; stata inoltrata all'indirizzo di posta elettronica da te fornito.						<br />					<?php					} else {					?>					Contattare <font color="#C00000">Advancia Technology</font> &egrave; semplice, basta riempire i campi qui di seguito e selezionare le aree di interesse su cui ricevere maggiori informazioni.<br />					<br />
            <form action="" method="POST">
                <table class="data_area">
                    <tr>
                        <td>							<label>Nome*</label>							<input type="text" tabindex="1" name="nome" required />						</td>
                        <td>							<label>Societ&agrave; di Appartenenza*</label>							<input type="text" tabindex="7" name="societa" required />						</td>
                    </tr>
                    <tr>
                        <td>							<label>Cognome*</label>							<input type="text" tabindex="2" name="cognome" required />						</td>
                        <td>							<label>Email*</label>							<input type="email" tabindex="8" name="email" required />						</td>
                    </tr>
                    <tr>
                        <td>							<label>Indirizzo*</label>							<input type="text" tabindex="3" name="indirizzo" required />						</td>
                        <td>							<label>Telefono</label>							<input type="text" tabindex="9" name="telefono" />						</td>
                    </tr>
                    <tr>
                        <td>							<label>CAP*</label>							<input type="text" tabindex="4" name="cap" required />						</td>
                        <td>							<label>Fax</label>							<input type="text" tabindex="10" name="fax" />						</td>
                    </tr>
                    <tr>
                        <td>							<label>Città*</label>							<input type="text" tabindex="5" name="citta" required />						</td>
                        <td rowspan="2">							<label>Note</label>							<textarea tabindex="11" name="note"></textarea>						</td>
                    </tr>
                    <tr>
                        <td>							<label>Stato*</label>							<input type="text" tabindex="6" name="stato" required />						</td>
                    </tr>
                </table>
                <br />					Su quale area di intervento si desidera ricevere informazioni?*<br />
                <table class="info_area">
                    <tr>
                        <td style="width:1px">
                            <div class="info">
                                <input type="checkbox" name="info1" value="teamwork" />
                                <label>TeamWork	</label>
                            </div>

                            <div class="info">
                                <input type="checkbox" name="info2" value="social_marketing" />
                                <label>Social Marketing	</label>
                            </div>
                            <div class="info">
                                <input type="checkbox" name="info3" value="android" />
                                <label>Sviluppo applicazioni Android	</label>
                            </div>

                            <div class="info">
                                <input type="checkbox" name="info4" value="servizi" />
                                <label>I nostri Servizi**	</label>
                            </div>

                            <div class="info">
                                <input type="checkbox" name="info5" value="offerta_formativa" />
                                <label>	Offerta Formativa** </label>
                            </div>
                            <div class="info">
                                <input type="checkbox" name="info6" value="corsi_formativi" />
                                <label>	Corsi Formativi**</label>
                            </div>
                            <div class="info">
                                <input type="checkbox" name="info7" value="lavora_con_noi" />
                                <label>	Lavora con Noi**</label>
                            </div>
                        </td>
                    </tr>
                </table>
                <br />
                <table>
                    <tr>
                        <td style="width:1px">					<input type="checkbox" name="privacy" value="" required />					</td>
                        <td style="width:500px">					Autorizzo il trattamento dei dati personali ai sensi del decreto legislativo 196/03					</td>
                    </tr>
                </table>
                <br />										<input type="submit" value="Invia" name="azione" />
            </form>
            <br />										* = I campi contrassegnati con 1 asterisco sono obbligatori.<br />					** = I campi contrassegnati con 2 asterischi richiedono da parte dell'utente maggiori informazioni nella sezione Note.										<?php					}					?>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p> Ripa di Porta Ticinese, 39<br/>
                        20143 Milano (MI) <br/></p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Company</h3>
                    Advancia Technology srl<br/>
                    Piva 01179050453 <br/>
                    Mail info@advancia.it
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Advancia.it 2015
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts_post");
?>
</body>

</html>
