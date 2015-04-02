
<div>
<form action="<?php echo $host;?>/settings/changepassword" method="POST">
    <!-- Base -->
    <div class="title"><label style="text-transform: uppercase;font-size: 13px;"> Gestione utenti </label></div>
    <div>
        <div style="padding: 10px 0px 15px 0px;">
            <div style="float:left;margin-right: 20px">
                <label style="text-transform: uppercase;font-size: 12px;">User</label><br>
                <select name="username">
                    <option value="">Seleziona un utente</option>
                    <?php
                    /* while($riga = $admins->fetch_assoc())
                     {
                         echo "<option value='".$riga['username']."'>".ucfirst($riga['username'])."</option>";
                     */
                    ?>
                </select>
                <div class="suggest">*selezionare l'utente per cambiare la password</div>
            </div>
            <div style="float:left;margin-right: 20px">

            </div>
            <div>

            </div>
        </div>
        <div style="padding: 0px 0px 20px 0px;">
            <div>

             </div>
        </div>
    </div>
    <!-- Base fine -->
    <table border="0" class="adapt">
        <tboby>
            <tr>
                <td colspan="2">
                    <br>
                    <div class="title"><h3> Gestione utenti </h3> </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="title"> Cambia Password </div>
                </td>
            </tr>
            <tr>
                <td width="170">
                    <div class="labels">
                        User
                    </div>
                </td>
                <td width="280">
                    <div class="values">
                        <select name="username">
                            <option value="">Seleziona un utente</option>
                           <?php
                           /* while($riga = $admins->fetch_assoc())
                            {
                                echo "<option value='".$riga['username']."'>".ucfirst($riga['username'])."</option>";
                            */
                            ?>
                        </select>
                        <div class="suggest">*selezionare l'utente per cambiare la password</div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="labels" style="margin-bottom: 0;">
                        Password
                    </div>
                </td>
                <td>
                    <div class="values" style="margin-bottom: 0;">
                        <input size="20" type="password" value="" name="password[]" />
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="labels">
                        Ripeti Password
                    </div>
                </td>
                <td>
                    <div class="values">
                        <input size="20" type="password" value="" name="password[]" />
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div style="text-align: right;">
                        <input style="width: 60px;" type="submit" value="Modifica" name="modifica"/>
                    </div>
                </td>
            </tr>
        </tboby>
    </table>
</form>
<form action="<?php echo $host;?>/settings/adduser" method="POST">
    <table border="0" class="adapt">
        <tr>
            <td colspan="2">
                <div class="title"> Aggiungi Utente </div>
            </td>
        </tr>
        <tr>
            <td width="170">
                <div class="labels">
                    Username
                </div>
            </td>
            <td width="280">
                <div class="values">
                    <input size="30" type="text" value="" name="username" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="labels" style="margin-bottom: 0;">
                    Password
                </div>
            </td>
            <td>
                <div class="values" style="margin-bottom: 0;">
                    <input size="20" type="password" value="" name="password[]" />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="labels">
                    Ripeti Password
                </div>
            </td>
            <td>
                <div class="values">
                    <input size="20" type="password" value="" name="password[]" />

                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div style="text-align: right;">
                    <input style="width: 60px;" type="submit" value="Aggiungi" name="aggiungi"/>
                </div>
            </td>
        </tr>
    </table>
</form>
</div>