<?php
/**
 * Created by PhpStorm.
 * User: Enrico
 * Date: 19/02/15
 * Time: 1.42
 */

global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");

?>
<!DOCTYPE html>
<html lang="it-IT">
<head>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("header");
    ?>
    <title>Outsourcing - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>


    <style>
        .outsourcing ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .outsourcing p
        {
            font-size: 12px;
            color: #606060;
            line-height: 18px;
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
        <div class="outsourcing who_we_are  col_04">
            <h1>OutSourcing</h1>
            <div style="display:inline-block">
                <span style="float: left;width: 60%;">
                    <p>
                        L’azienda si occupa di progettazione e sviluppo di software sia in proprio che per conto di altre società
                        operanti nello stesso settore.
                        In tutte le fasi di lavoro, dalla progettazione allo sviluppo al test, il team Solvedo si avvale delle
                        moderne tecniche di gestione del progetto quali RUP, Scrum e XP.
                        Le attività di outsourcing si svolgono presso la sede operativa Solvedo provvista di un’infrastruttura
                        tecnologica costituita da server con S.O. VMWare vSphere con un
                        forte grado di flessibilità rispetto alle più svariate esigenze di progetto.
                        L’accesso all’infrastruttura è protetto da un firewall evoluto con tecnologia BSD e l’affidabilità e
                        sicurezza dei dati sono garantite da un backup automatico su server NAS con tecnologia RAID5.
                        Nell’ambito delle proprie attività Solvedo utilizza abitualmente le seguenti tecnologie di base:
                    </p>
                    <ul>
                        <li><b>WebServer: Apache, Tomcat, Jetty
                        <li><b>DBMS:</b> Oracle, MySql, PostgreSQL, DB2, Firebird, Caché, MS SQL Server</li>
                        <li><b>Application Server: </b>JBoss, BEA Weblogic</li>
                        <li><b>Linguaggi:</b> Java-J2EE, JavaScript, PL/SQL, Perl, C/C++, C#, Visual Basic, Python</li>
                        <li><b>Presentation:</b> Swing, JSP, JSF, Vaadin, Wicket, ZK, jQuery, Struts2, Spring MVC, GWT, ICEFaces</li>
                        <li><b>Librerie:</b> Hibernate, iBatis, Spring, Glue, CXF, JackRabbit, iReport, Crystal Report</li>
                        <li><b> CMS:</b> Joomla, WordPress (multisite), Drupal, Magento, Liferay</li>
                        <li><b>O.S.:</b> Windows (tutti), Linux (Debian e derivate, Red Hat e derivate)</li>
                        <li><b>Development Tools:</b> TOS (Talend Open Studio), Pentaho Data Integration (Kattle), TOAD, Squirrel, SQL Developer</li>
                    </ul>
                    <p>
                        In tutte le fasi di lavoro, dalla progettazione allo sviluppo al test, il team Advancia si avvale
                        delle moderne tecniche di gestione del progetto quali RUP, Scrum e XP, anche attraverso l’uso di
                        strumenti evoluti come, ad esempio, i prodotti Atlassian Jira e Confluence nonché dei più usati
                        strumenti open-source di supporto:
                    </p>
                    <ul>
                        <li>SVN/CVS per il versionamento del codice</li>
                        <li>Eclipse, MS Visual Studio, NetBeans per lo sviluppo</li>
                        <li>Hudson, Artifactory, Maven per la continuous integration</li>
                        <li>Visual Paradigm/Enterprise Architect per la modellazione</li>
                    </ul>
                    <p>
                        Le attività di outsourcing si svolgono presso la sede operativa Solvedo provvista di un’infrastruttura
                        tecnologica costituita da server con S.O. VMWare
                        vSphere con un forte grado di flessibilità rispetto alle più svariate esigenze di progetto.
                        L’accesso all’infrastruttura è protetto da un firewall evoluto con tecnologia BSD e l’affidabilità e
                        sicurezza dei dati sono garantite da un backup automatico su server NAS con tecnologia RAID5.
                    </p>
                <p>
                    Qui di seguito riportiamo alcuni esempi tra le applicazioni più richieste e di maggior interesse:
                </p>
                    <ul>
                        <li>applicazioni Android personalizzate</li>
                        <li>applicazioni Android di Gioco</li>
                        <li>applicazioni Android Multimediali</li>
                        <li>applicazioni Android per le aziende</li>
                    </ul>
                <p>
                    Il motivo per cui Advancia Technology ha deciso di investire nella tecnologia Android,
                    rova risposta nei dati resi noti da un'importante società di analisi di mercato che,
                    nel primo quadrimestre del 2011, ha rilevato una crescita del 19% dei dispositivi Mobile,
                    sopratutto smartphone, in cui Android si impone come sistema operativo di punta.
                </p>
                </span>
                <span style="float: right;"><img style="width: 400px;" src="<?php echo $url;?>images/outsourcing-300x193.jpg" alt="OutSourcing"/></span>
            </div>
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


