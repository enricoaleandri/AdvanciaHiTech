<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 10/02/15
 * Time: 0.46
 */
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$activePage = "bigdata";

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>Home</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>
    <style>
        b
        {
            font-weight: bolder;
        }
    </style>
</head>
<body class="home page page-id-8 page-template page-template-template-home page-template-template-home-php regular_typo">
<script>
    jQuery("body").addClass("regular_typo");
    jQuery("body").addClass("");
</script>
<div class="wrapper">
    <!--Wrapper-->
        <?php
            initConfig::getInstance() -> getIncluder() -> includePage("bottom");
        ?>
    <div class="header col_04">
        <!--Header-->
        <div class="header_content center_parent_v">


            <?php
            initConfig::getInstance() -> getIncluder() -> includePage("menu");
            ?>
            <div class="header_tools">
                <!--Header Tools-->
                <div class="social_links">
                    <ul>
                        <li><a href="#" class="websymbols">F</a></li>
                        <li><a href="#" class="websymbols">t</a></li>
                        <li><a href="#" class="websymbols">g</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form method="get" action="#">
                        <input type="text" name="s" id="s" placeholder="Search here...">
                        <input type="submit" id="search_button" value="">
                    </form>
                </div>
            </div>
            <!--End Header Tools-->
        </div>
    </div>
    <!--End Header-->

    <div class="inner_content"><!--Inner Content-->
        <div class="sub_header col_04 w_space"><!--Sub Header-->
            <div class="sub_header_content">
                <h4><strong>Servizi</strong></h4>
            </div>
        </div><!--End Sub Header-->
        <div class="who_we_are col_04">
            <div>
                <span style="display: inline-block; width: 70%;">
                    <p class="imp_paragraph">
                        <H1>Corso di formazione gratuito Java - J2EE : finalizzato all'inserimento</H1>
                        <b>Durata:</b> 4 settimane <br/>
                        <b>N° partecipanti:</b> 8<br/>
                        <b>Titolo:</b> da Java Base alla piattaforma J2EE<br/>
                        <b>Orario:</b> full-time 9-13 / 14-18<br/>
                        <br/>
                        <b> Argomenti del corso:</b>
                        <ul>
                            <li>Programmazione ad Oggetti</li>
                            <li>Introduzione a Java</li>
                            <li>Ereditarietà - Polimorfismo</li>
                            <li>Introduzione all'architettura J2EE</li>
                            <li>JSP - Servlet</li>
                            <li>Java Beans</li>
                            <li>Modello MVC</li>
                            <li>Framework: Struts e Hibernate</li>
                        </ul>
                    <br/>
                    <p>
                        Si sottolinea che il percorso formativo di ciascun partecipante verrà personalizzato a seconda delle conoscenze tecniche iniziali.
                    </p>
                    <br/>
                    <b>Destinatari:</b>
                    <p>
                        Per partecipare all'iter di selezione è indispensabile avere almeno uno dei seguenti requisiti:
                    </p>
                    <ul>
                        <li>Laureati / Neolaureati / Laureandi in informatica, o materie tecnico-scientifiche</li>
                        <li> Diplomati in informatica</li>
                        <li>Conoscenza di almeno un linguaggio di programmazione</li>
                        <li>Cultura informatica e passione per la programmazione</li>
                    </ul>
                    <p>
                        A chi supererà brillantemente il corso si offre un ambiente di lavoro dinamico, fortemente orientato alla tecnologia, ai processi aziendali e alle soluzioni per il cliente, con l'opportunità di una crescita professionale, e la garanzia di un percorso formativo mirato e continuo.
                        Se ritieni di essere la persona giusta invia il tuo CV a <a  target="_blank" style="color: #C00000; font-weight: bold;"  href="mailto:job@advancia.it">job@advancia.it</a> specificando come oggetto: <b>CORSO JAVA</b>

                    </p>
                </span>
                <span >
                    <img src="http://www.advancia.it/it/css/images/java_logo.png" style="width: 200px;"  alt="" class="right">
                </span>
            </div>
            <br/>
            <div>
                <span style="display: inline-block; width: 70%;">
                    <p class="imp_paragraph">
                        <H1>Corso di formazione gratuito Oracle - Data Warehouse: finalizzato all'inserimento</H1><br/>
                        <b>Durata:</b> 4 settimane<br/>
                        <b>N° partecipanti:</b> 8<br/>
                        <b>Titolo:</b> Oracle - Data Warehouse<br/>
                        <b>Orario:</b> full-time 9-13 / 14-18<br/>
                        <br/>
                        <b>Argomenti del corso:</b>
                        <ul>
                            <li>Programmazione SQL e Pl-Sql</li>
                            <li>Architettura Oracle 10g - creazione e configurazione di Istanze Oracle</li>
                            <li>Strumenti di accesso al Database - Toad</li>
                            <li>Introduzione al Data Warehousing</li>
                            <li>Metodologie di Data Modeling - Star Schema e Snowflake</li>
                            <li>ETL - strategie e tecniche di implementazione</li>
                            <li>Business Intelligence</li>
                        </ul>
                        <p>
                            Si sottolinea che il percorso formativo di ciascun partecipante verrà personalizzato a seconda delle conoscenze tecniche iniziali.
                        </p>
                        <br/>
                        <b>Destinatari:</b>
                        <p>
                            Per partecipare all'iter di selezione è indispensabile avere almeno uno dei seguenti requisiti:
                        </p>
                        <ul>
                            <li>Laureati / Neolaureati / Laureandi in informatica, o materie tecnico-scientifiche</li>
                            <li>Diplomati in informatica</li>
                            <li>Conoscenza di almeno un linguaggio di programmazione</li>
                            <li>Cultura informatica e passione per la programmazione</li>
                        </ul>
                        <p>
                            A chi supererà brillantemente il corso si offre un ambiente di lavoro dinamico, fortemente orientato alla tecnologia, ai processi aziendali e alle soluzioni per il cliente, con l'opportunità di una crescita professionale, e la garanzia di un percorso formativo mirato e continuo.
                            Se ritieni di essere la persona giusta invia il tuo CV a <a  target="_blank" style="color: #C00000; font-weight: bold;"  href="mailto:job@advancia.it">job@advancia.it</a> specificando come oggetto: <b>CORSO ORACLE</b>
                            <br/>
                            </p>
                    </p>
                </span>
                <span>
                    <img src="http://www.advancia.it/it/css/images/oracle_logo.png" alt="" style="width: 200px;" class="right">
                </span>
            </div>
            <p>
                Potete richiedere altre informazioni dalla apposita pagina di <a  target="_blank" style="color: #C00000; font-weight: bold;"  href="<?php echo $host;?>/public/contact">contatto</a>.
            </p>
        </div>

    </div>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("footer");
    ?>
    <div style="clear: both;"></div>
</div>
<!--End Wrapper-->

<?php
initConfig::getInstance() -> getIncluder() -> includePage("scripts_post");
?>
</body>
</html>
