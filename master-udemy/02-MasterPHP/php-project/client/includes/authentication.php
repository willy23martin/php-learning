<aside id="sidebar">
    <!--Register-->
    <div id="register" class="nav-block">
        <?php
        /*if (isset($_SESSION['validationErrors'])):
            var_dump($_SESSION['validationErrors']);
        endif;*/
        ?>  
        <h3>Register</h3>
        <form action="./../../../02-MasterPHP/php-project/authentication/register.php" method="post">
            <table aria-colspan="1">
                <tr>
                    <td>
                        <label for="name">Name:</label><br>
                    </td>
                    <td>
                        <input type="text" id="registrationName" name="name" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cellphone">Cellphone:</label><br />
                    </td>
                    <td>
                        <input type="text" id="registrationCellphone" name="cellphone" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label><br />
                    </td>
                    <td>
                        <input type="text" id="registrationEmail" name="email" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:</label><br />
                    </td>
                    <td>
                        <input type="password" id="registrationPassword" autocomplete="off" name="password"/><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Register" name="submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!--Login-->
    <div id="login" class="nav-block">
        <h3>Login</h3>
        <form action="./../../../../../master-udemy/02-MasterPHP/php-project/authentication/login.php" method="post">
            <table aria-colspan="1">
                <tr>
                    <td>
                        <label for="email">Email:</label><br />
                    </td>
                    <td>
                        <input type="text" id="email" name="email" /><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password:</label><br />
                    </td>
                    <td>
                        <input type="password" id="password" autocomplete="off" name="password"/><br />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Login" name="submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</aside>

