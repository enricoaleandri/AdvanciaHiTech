<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$settings = initConfig::getInstance()->getSettings();

?>
<style type="text/css">
    input[type=submit] {
        width: 80%;
        height: 40px;
        background: rgb(192, 0, 0);
        border: none;
        display: table-cell;
        font-size: 14px;
        color: #fff;
        text-transform: uppercase;
        cursor: pointer;
    }
</style>
<div ng-controller="updateConfig" >
    <form ng-submit="submit()" id="settings_form"  enctype="multipart/form-data"  method="POST">
        <!-- Base -->
        <div class="title"><label style="text-transform: uppercase;font-size: 13px;"> Base </label></div>
        <div>
            <div style="padding: 10px 10px 15px 10px;width: 100%">
                <div style="float:left;margin-right: 30px">
                    <label style="text-transform: uppercase;font-size: 12px;">Mail contatti</label><br>
                    <input id="com_mail" type="hidden" value="<?php echo $settings['comunication_mail'] ;?>" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" placeholder="info@advancia.it" size="30" type="text" ng-model="updateconfig.comunication_mail"  name="values[]" />
                </div>
                <div style="float:left;margin-right: 30px">
                    <label style="text-transform: uppercase;font-size: 12px;">Mail CV</label><br>
                    <input id="job_mail" type="hidden" value="<?php echo $settings['job_mail'] ;?>" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="job@advancia.it" size="30" type="text"  ng-model="updateconfig.job_mail" name="values[]" />
                </div>
                <div>
                    <label style="text-transform: uppercase;font-size: 12px;">Numero </label><br>
                    <input id="numero" type="hidden" value="<?php echo $settings['comunication_number'] ;?>" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="00 12 123 456" size="30" type="text"  ng-model="updateconfig.comunication_number" name="values[]" />
                </div>
            </div>
            <div style="padding: 0px 10px 20px 10px;width: 100%">
                <div style="float:left;margin-right: 30px">
                    <label style="text-transform: uppercase;font-size: 12px;">Link FB page</label><br>
                    <input id="link_fb" type="hidden" value="<?php echo $settings['fb_link_page'] ;?>" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="www.facebook.it/advancia" size="30" type="text"  ng-model="updateconfig.fb_link_page" name="values[]" />
                </div>
                <div ">
                    <label style="text-transform: uppercase;font-size: 12px;">Link Twitter page</label><br>
                    <input id="link_twitter" type="hidden" value="<?php echo $settings['twitter_link_page']; ?>" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="www.twitter.com/advancia" size="30" type="text"  ng-model="updateconfig.twitter_link_page" name="values[]" />
                </div>
            </div>
        </div>
        <!-- Base fine -->

        <!-- Avanzate -->
        <br>
        <div class="title"><label style="text-transform: uppercase;font-size: 13px;"> Avanzate</label></div>
        <div>
            <div style="padding: 10px 10px 15px 10px;">
                <div >
                    <label style="text-transform: uppercase;font-size: 12px;" >Meta-tag Principali ( Separati da Comma ';' )</label><br />
                    <input type="hidden" ng-model="updateconfig.meta_tag" name="values[]" />
                    <textarea maxlength="1000" style="background-color: #F3F3F3;border:none;padding:3px;font-size: 15px; resize:none;width: 100%" id="meta_tag_value" cols="100" rows="5"> <?php echo $settings['meta_tag']; ?></textarea>
                </div>
            </div>
            <div style="padding: 0px 10px 20px 10px;">
                <div>
                    <label style="text-transform: uppercase;font-size: 12px;" >Google Analytics</label><br />
                    <input type="hidden"  ng-model="updateconfig.google_analytics_javascript" name="values[]" />
                    <textarea maxlength="1000" style="background-color: #F3F3F3;border:none;padding:3px;font-size: 15px; resize:none;width: 100%" id="google_analytics_javascript_value" cols="100" rows="5"><?php echo $settings['google_analytics_javascript']; ?> </textarea>
                </div>
            </div>
        </div>
        <!-- AVANZATE FINE -->
        <br>
        <input type="submit" style="width: 20%;float: right;padding-right: 10px;" value="Salva" >
    </form>
<div id="error_message" style="color:red;font-size:16px;padding:10px;" hidden>Errore, impostazioni non aggiornate</div>
<div id="message" style="color:green;font-size:16px;padding:10px;" hidden>Impostazioni aggiornate correttamente</div>
</div>