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
                    <input id="com_mail" type="hidden" ng-init="keys[0]='comunication_mail'" ng-model="keys[0]" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" placeholder="info@advancia.it" ng-model="values[0]" ng-init="values[0]='<?php echo $settings['comunication_mail'] ;?>'"  size="30" type="text"  name="values[]" />
                </div>
                <div style="float:left;margin-right: 30px">
                    <label style="text-transform: uppercase;font-size: 12px;">Mail CV</label><br>
                    <input id="job_mail" type="hidden" ng-init="keys[1]='job_mail'" ng-model="keys[1]" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="job@advancia.it" ng-model="values[1]" ng-init="values[1]='<?php echo $settings['job_mail'] ;?>'"  size="30" type="text"  name="values[]" />
                </div>
                <div>
                    <label style="text-transform: uppercase;font-size: 12px;">Numero </label><br>
                    <input id="numero" type="hidden" ng-init="keys[2]='comunication_number'" ng-model="keys[2]" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="00 12 123 456" size="30" type="text" ng-model="values[2]" ng-init="values[2]='<?php echo $settings['comunication_number'] ;?>'"  name="values[]" />
                </div>
            </div>
            <div style="padding: 0px 10px 20px 10px;width: 100%">
                <div style="float:left;margin-right: 30px">
                    <label style="text-transform: uppercase;font-size: 12px;">Link FB page</label><br>
                    <input id="link_fb" type="hidden" ng-init="keys[3]='fb_link_page'" ng-model="keys[3]" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="www.facebook.it/advancia" size="30" type="text" ng-init="values[3]='<?php echo $settings['fb_link_page'] ;?>'" ng-model="values[3]" name="values[]" />
                </div>
                <div ">
                    <label style="text-transform: uppercase;font-size: 12px;">Link Twitter page</label><br>
                    <input id="link_twitter" type="hidden" ng-init="keys[4]='twitter_link_page'" ng-model="keys[4]" name="keys[]" />
                    <input maxlength="1000" style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="www.twitter.com/advancia" size="30" type="text" ng-init="values[4]='<?php echo $settings['twitter_link_page'] ;?>'" ng-model="values[4]" name="values[]" />
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
                    <input type="hidden" ng-model="keys[5]" ng-init="keys[5]='meta_tag'" />
                    <textarea maxlength="1000" style="background-color: #F3F3F3;border:none;padding:3px;font-size: 15px; resize:none;width: 100%" ng-model="values[5]" ng-init="values[5]='<?php echo $settings['meta_tag']; ?>'" id="meta_tag_value" cols="100" rows="5"> <?php echo $settings['meta_tag']; ?></textarea>
                </div>
            </div>
            <div style="padding: 0px 10px 20px 10px;">
                <div>
                    <label style="text-transform: uppercase;font-size: 12px;" >Google Analytics</label><br />
                    <input type="hidden"  ng-model="keys[6]"  ng-init="keys[6]='google_analytics_javascript'" name="values[]" />
                    <textarea maxlength="1000" style="background-color: #F3F3F3;border:none;padding:3px;font-size: 15px; resize:none;width: 100%" ng-model="values[6]" ng-init="values[6]='<?php echo $settings['google_analytics_javascript']; ?>'" id="google_analytics_javascript_value" cols="100" rows="5"><?php echo $settings['google_analytics_javascript']; ?> </textarea>
                </div>
            </div>
        </div>
        <!-- AVANZATE FINE -->
        <br>
        <input type="submit" style="width: 20%;float: right;padding-right: 10px;" value="Salva" >
    </form>
<div id="error_message" style="color:red;font-size:16px;padding:10px;" ng-show="error" >Errore, impostazioni non aggiornate</div>
<div id="message" style="color:green;font-size:16px;padding:10px;" ng-show="success" >Impostazioni aggiornate correttamente</div>
</div>