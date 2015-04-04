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
<div >
    <form action="<?php echo $host;?>/settings/update/" id="settings_form"  enctype="multipart/form-data"  method="POST">
        <!-- Base -->
        <div class="title"><label style="text-transform: uppercase;font-size: 13px;"> Base </label></div>
        <div>
            <div style="padding: 10px 10px 15px 10px;width: 100%">
                <div style="float:left;margin-right: 30px">
                    <label style="text-transform: uppercase;font-size: 12px;">Mail contatti</label><br>
                    <input type="hidden" value="<?php echo "admin_mail"; ?>" name="keys[]" />
                    <input style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" placeholder="info@advancia.it" size="30" type="text" value="<?php echo $settings['comunication_mail'] ;?>" name="values[]" />
                </div>
                <div style="float:left;margin-right: 30px">
                    <label style="text-transform: uppercase;font-size: 12px;">Mail CV</label><br>
                    <input type="hidden" value="<?php echo "admin_number"; ?>" name="keys[]" />
                    <input style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="job@advancia.it" size="30" type="text" value="<?php echo $settings['job_mail'] ;?>" name="values[]" />
                </div>
                <div>
                    <label style="text-transform: uppercase;font-size: 12px;">Numero </label><br>
                    <input type="hidden" value="<?php echo "admin_page_fb_label"; ?>" name="keys[]" />
                    <input style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="00 12 123 456" size="30" type="text" value="<?php echo $settings['comunication_number'] ;?>" name="values[]" />
                </div>
            </div>
            <div style="padding: 0px 10px 20px 10px;width: 100%">
                <div>
                    <label style="text-transform: uppercase;font-size: 12px;">Link FB page</label><br>
                    <input type="hidden" value="<?php echo "admin_page_fb"; ?>" name="keys[]" />
                    <input style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;"  placeholder="www.facebook.it/advancia" size="30" type="text" value="<?php echo $settings['admin_page_fb'] ;?>" name="values[]" />
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
                    <label style="text-transform: uppercase;font-size: 12px;" >Meta-tag Principali (Separati da Comma ';')</label><br />
                    <input type="hidden" value="<?php echo "meta_tag"; ?>" name="keys[]" />
                    <input type="hidden" id="meta_tag_value" value="<?php echo $settings['meta_tag']; ?>" name="values[]" />
                    <textarea style="background-color: #F3F3F3;border:none;padding:3px;font-size: 15px; resize:none;width: 100%" name="meta_tag" id="meta_tag" cols="100" rows="5"> <?php echo $settings['meta_tag']; ?></textarea>
                </div>
            </div>
            <div style="padding: 0px 10px 20px 10px;">
                <div>
                    <label style="text-transform: uppercase;font-size: 12px;" >Google Analytics</label><br />
                    <input type="hidden" value="<?php echo "google_analytics_javascript"; ?>" name="keys[]" />
                    <input type="hidden" id="google_analytics_javascript_value" value="<?php echo $settings['google_analytics_javascript']; ?>" name="values[]" />
                    <textarea style="background-color: #F3F3F3;border:none;padding:3px;font-size: 15px; resize:none;width: 100%" name="google_analytics_javascript" id="google_analytics_javascript" cols="100" rows="5"><?php echo $settings['google_analytics_javascript']; ?> </textarea>
                </div>
            </div>
        </div>
        <!-- AVANZATE FINE -->
        <br>
        <input type="submit" style="width: 20%;float: right;padding-right: 10px;" value="Salva" >
    </form>
</div>