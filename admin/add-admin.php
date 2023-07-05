<?php 
include('partials/menu.php');
?>
<div class="main-content">
    <div class="wrapper"> 
        <h1>Add Admin   </h1>
        <br><br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full name</td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="Username" placeholder="Your username">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="passowrd" name="password" placeholder="Enter your passowrd">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add admin" class="btn-secondary">

                    </td>
                </tr>
            </table>

        </form>
    </div>

</div>
<?php 
include('partials/footer.php');
?>