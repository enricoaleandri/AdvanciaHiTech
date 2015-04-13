<?php
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
    <title>Business Intelligence - Advancia</title>

    <?php
    initConfig::getInstance() -> getIncluder() -> includePage("scripts");
    ?>

    <style>
        .bi ul
        {
            list-style-type: circle;
            margin: 0;
            padding: 10px 0px 10px 20px;;
            font-size: 12px;
            color: #606060;
            line-height: 18px;
        }
        .bi p
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

                <?php
                initConfig::getInstance() -> getIncluder() -> includePage("social_button");
                ?>
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
        <div class="bi who_we_are col_04">
            <h1>Business intelligence</h1>
            <p class="imp_paragraph" style="text-align: justify;">
                Il team di Advanica Technology si occupa di Business Intelligence (BI) da oltre 15 anni;
                il nostro obiettivo primario è quello di lavorare in simbiosi con le vostre esigenze,
                studiando in profondità il vostro business per analizzare,
                proporre e condividere con voi le migliori soluzioni.
                L'integrazione di dati provenienti da svariate sorgenti, in formati eterogenei,
                in uno strumento flessibile che permetta alle aziende una migliore gestione
                dell'informazione: questo è ciò che l'accoppiata formata da Data Warehouse e
                Business Intelligence si prepone come obiettivo.
                Advancia Technology è in grado di soddisfare queste esigenze avvalendosi
                dell'ottima conoscenza ed esperienza sui vari prodotti presenti sul
                mercato ed in particolare degli strumenti della suite
            </p>
            <br><br>
            <!-- Image -->
		<span style="width: 27.5%;display: inline-block;">
            <img src="<?php echo $url;?>images/bi-300x193.png" alt="Business Intelligence" />
		</span>
            <!-- End Image -->
            <!-- Celle -->
		    <span style="width: 72%;display: inline-block;">
                <table class="table_bi">
                    <thead>
                    <tr>
                        <th>BIG DATA</th>
                        <th>DATA WAREHOUSING</th>
                        <th>BUSINESS INTELLIGENCE AND ANALYTICS</th>
                        <th>DATA MANAGEMENT</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr >
                        <td style="width:15%;padding:2px;"><br>Managing big data<br><br> Hadoop framework<br><br> Big data technologies<br><br> NoSQL and NewSQL<br><br> Big data analytics<br><br></td>
                        <td style="width:20%;padding:2px;"><br>Enterprise data integration<br><br> Modern data warehousing<br><br>Virtualized data architectures <br><br></td>
                        <td style="width:25%;padding:2px;"><br>Business intelligence architecture <br><br> Performance management<br><br>Performance dashboards<br><br>Performance scorecards<br><br> Data visualization<br><br> Data exploration, discovery and analysis <br><br></td>
                        <td style="width:33%;padding:2px;"><br>Enterprise data architectures<br><br>Best practices for building a data-driven organization<br><br>Data governance and data quality management<br><br>Data design and modeling, dimensional modeling<br><br> Data consolidation, federation, and virtualization<br><br></td>
                    </tr>
                    </tbody>
                </table>
            </span>
            <!-- fine celle -->
            <br/><br>
            <div style="padding: 3px;margin: 25px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;-ms-box-sizing: border-box;box-sizing: border-box;background: #C00000;position: relative; width: 96%;display: table;"></div>
            <!-- Tecnologie -->
            <h1>Tecnologie</h1>
            <p class="imp_paragraph" >I clienti di Advanica Technology possono quindi contare su un mix di competenze che coprono ambiti diversi e sono fra loro complementari:</p><br>
            <div style="width:100%;height:180px;">
                <div style="width:20%;float:left;margin-left:3%;">
                    <p> BIG DATA <br><br>Hadoop e MapReduce Framework, Apache HiveCloudera, Oracle<p>
                </div >
                <div style="width:2px;height:100%;background-color:lightgrey;margin-left:2.5%;margin-right:2.5%;float:left;"></div>
                <div style="width:20%;float:left;">
                    <p >
                        DATA WAREHOUSING<br><br>
                        Oracle Warehouse Builder, Oracle Data Integrator, Pentaho Etl, Ibm InfoSphere DataStage,
                        Informatica PowerCenter, Microsoft Integration Services, SAP  BusinessObjects Data Integrator
                    <p>
                </div >
                <div style="width:2px;height:100%;background-color:lightgrey;margin-left:2.5%;margin-right:2.5%;float:left;"></div>
                <div style="width:20%;float:left;">
                    <p>
                        BUSINESS INTELLIGENCE <br><br>
                        Oracle’s Business Intelligence Foundation Suite, IBM Cognos, Jasprsoft,
                        Microstrategy, Pentaho, Qlikview, SAP BusinessObject BI
                    <p>
                </div >
                <div style="width:2px;height:100%;background-color:lightgrey;margin-left:2.5%;margin-right:2.5%;float:left;"></div>
                <div style="width:20%;float:left;">
                    <p >
                        DATABASE <br><br>
                        Oracle, DB2, Informix, MS SQL, PostgreSQL, Oracle MySQL Framework
                    <p>
                </div >
           </div>
            <!-- Fine Tecnologie -->
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
