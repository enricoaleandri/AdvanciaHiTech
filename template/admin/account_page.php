<?php
global $response,$activePage;
$url =  $response -> getProperty("url");
$host =  $response -> getProperty("host");
$admins = $response -> getProperty("admins");
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
    <div >
        <div style="padding: 6% 5% 3% 5%;float:left;width: 22%;" >
            <div  ng-controller="changepwdAccount">
                <form  ng-submit="submit()"  method="POST" style="width: 100%;" >
                    <div >
                        <label style="text-transform: uppercase;font-size: 12px;">Modifica utente</label><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">User </label><br>
                        <select ng-model="pwdtochange.username" required name="username" style="width:100%;height:46px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;width:200px;" >
                            <option value="" >Seleziona un utente</option>
                            <?php
                            foreach ($admins as &$user) {
                                echo "<option value='" . $user . "'>" . ucfirst($user) . "</option>";
                            }
                            ?>
                        </select><br><br>
                        <!--<div class="suggest">*selezionare un utente</div><br><br>-->
                        <label style="text-transform: uppercase;font-size: 12px;">Password (Min 3 caratteri)</label><br>
                        <input pattern=".{3,32}" ng-model="pwdtochange.password" required style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;width:98%"  type="password" value="" name="password[]" /><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">Ripeti password </label><br>
                        <input pattern=".{3,32}" ng-model="pwdtochange.repassword" required style="height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;width:98%"  type="password" value="" name="password[]" /><br><br>
                        <input type="submit" style="width: 100%" value="Modifica">
                    </div>
                    <div id="change_error_message" style="color:red;font-size:16px;width:100%;margin-top:10%" hidden>Errore, password non cambiata </div>
                    <div id="change_message" style="color:green;font-size:16px;width:100%;margin-top:10%" hidden>Password aggiornata correttamente</div>
                </form>
            </div>
        </div>
        <div style="width: 2px;height: 450px;background-color:lightgray;float:left;margin-top:2%;"></div>
        <div style="padding: 6% 5% 3% 5%;float:left;width: 22%;" >
            <div ng-controller="addAccount" >
                <form  ng-submit="submit()"  id="add_form" method="POST" style="width:100%;" >
                    <div >
                        <label style="text-transform: uppercase;font-size: 12px;">Aggiungi Utente </label><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">Username</label><br>
                        <input maxlength="10" ng-model="usertoadd.username" required style="width:98%;height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="text" value="" name="username" /><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">Password (Min 3 caratteri)</label><br>
                        <input pattern=".{3,32}" ng-model="usertoadd.password" required style="width:98%;height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="password" value="" name="password[]" /><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">Ripeti password</label><br>
                        <input pattern=".{3,32}" ng-model="usertoadd.repassword" required style="width:98%;height:40px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;" size="20" type="password" value="" name="password[]" /><br><br>
                        <input type="submit" style="width: 100%" value="Aggiungi">
                    </div>
                    <div id="add_error_message" style="color:red;font-size:16px;width:100%;margin-top:10%" hidden>Errore, utente non inserito</div>
                    <div id="add_message" style="color:green;font-size:16px;width:100%;margin-top:10%" hidden>Utente inserito correttamente</div>
                </form>
            </div>
        </div>
        <div style="width: 2px;height: 450px;background-color:lightgray;float:left;margin-top:2%;"></div>
        <div style="padding: 6% 5% 3% 5%;float:left;width: 22%;" >
            <div  ng-controller="deleteAccount" >
                <form  ng-submit="submit()" name="delete_form" id="delete_form" method="POST" style="width:100%;" >
                    <div >
                        <label style="text-transform: uppercase;font-size: 12px;">Elimina Utente</label><br><br>
                        <label style="text-transform: uppercase;font-size: 12px;">User</label><br>
                        <select ng-model="usertodelete.username" required name="username" style="width:100%;height:46px;background-color: #F3F3F3;border:none;padding:3px;font-size: 15px;width:200px;" >
                            <option value="">Selezionare un utente</option>
                            <?php
                            foreach ($admins as &$user) {
                                echo "<option value='" . $user . "'>" . ucfirst($user) . "</option>";
                            }
                            ?>
                        </select><br><br>
                       <!-- <div id="delete_error"  >*selezionare un utente</div><br><br>-->
                        <input type="submit" style="width: 100%" value="Elimina">
                    </div>
                </form>
            </div>
            <div id="delete_error_message" style="color:red;font-size:16px;width:100%;margin-top:10%" hidden>Errore, utente non eliminato</div>
            <div id="delete_message" style="color:green;font-size:16px;width:100%;margin-top:10%" hidden>Utente eliminato correttamente</div>
        </div>
    </div>
    <!-- <div style="width: 100%;height: 2px;background-color:lightgray;float:left" />-->
    <!-- Base fine -->
</div>