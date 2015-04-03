<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$settings = initConfig::getInstance()->getSettings();
$admin = new adminDAO();
?>

<div>
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
    <!-- Base -->
    <div class="title"><label style="text-transform: uppercase;font-size: 13px;"> Gestione utenti </label></div>
    <div>
        <div style="padding: 40px 0px 0px 0px;">
            <form action="<?php echo $host;?>/settings/changepassword/" method="POST">
                <div style="float:left;margin-right: 44px;">
                    <label style="text-transform: uppercase;font-size: 12px;">Modifica utente</label><br><br>
                    <label style="text-transform: uppercase;font-size: 12px;">User</label><br>
                    <select required name="username" style="height:50px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;width:200px;" >
                        <option value="" >Seleziona un utente</option>
                        <?php
                        $admins= $admin->getAllAdmin();
                         while($riga = $admins->fetch_assoc()) {
                             echo "<option value='" . $riga['username'] . "'>" . ucfirst($riga['username']) . "</option>";
                         }
                        ?>
                    </select><br><br>
                    <div class="suggest">*selezionare un utente</div><br><br>
                    <label style="text-transform: uppercase;font-size: 12px;">Password</label><br>
                    <input required style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="password" value="" name="password[]" /><br><br>
                    <label style="text-transform: uppercase;font-size: 12px;">Ripeti password</label><br>
                    <input required style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="password" value="" name="password[]" /><br><br>
                    <input type="submit" style="width: 100%" value="Modifica">
                </div>
            </form>
        </div>
        <div style="width: 2px;height: 470px;background-color:lightgray;float:left"/>
        <div style="padding: 0px 0px 0px 0px;">
            <div>
                <form action="<?php echo $host;?>/settings/adduser/" id="add_form" method="POST">
                    <div style="float:left;margin-right: 44px;margin-left: 44px;">
                        <label style="text-transform: uppercase;font-size: 12px;">Aggiungi Utente </label><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">Username</label><br>
                        <input required style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="text" value="" name="username" /><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">Password</label><br>
                        <input required style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="password" value="" name="password[]" /><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">Ripeti password</label><br>
                        <input required style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="password" value="" name="password[]" /><br><br>
                       <input type="submit" style="width: 100%" value="Aggiungi">
                    </div>
                </form>
            </div>
        </div>
        <div style="width: 2px;height: 470px;background-color:lightgray;float:left"/>
        <div style="padding: 0px 0px 0px 0px;">
            <div>
                <form action="<?php echo $host;?>/settings/deleteuser/" id="delete_form" method="POST">
                    <div style="float:left;margin-right: 100px;margin-left: 44px;">
                        <label style="text-transform: uppercase;font-size: 12px;">Elimina Utente </label><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">User</label><br>
                        <select required name="username" style="height:50px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;width:200px;" >
                            <option value="">Selezionare un utente</option>
                            <?php
                            $admins= $admin->getAllAdmin();
                            while($riga = $admins->fetch_assoc()) {
                                echo "<option value='" . $riga['username'] . "'>" . ucfirst($riga['username']) . "</option>";
                            }
                            ?>
                        </select><br><br>
                        <div id="delete_error"  >*selezionare un utente</div><br><br>
                        <input type="submit" style="width: 100%" value="Elimina">
                    </div>
                    <div id="delete_error_message" style="color:red;font-size:16px;" hidden>Errore: utente non eliminato</div><br><br>
                    <div id="delete_message" style="color:green;font-size:16px;width: 100%" hidden>Utente eliminato correttamente</div><br><br>
                </form>
            </div>
        </div>
    </div>
    <!-- Base fine -->
</div>