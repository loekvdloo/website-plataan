<div id="id01" class="modal">
    <div class="modal-content animate" >

            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="assets/img/coollogo_com-15727867.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <form method="post" action="inlog.php">
                    <label for="gebruikersnaam"><b>Gebruikersnaam:</b></label>
                    <input type="text" placeholder="Gebruikersnaam" name="gebruikersnaam" required>

                    <label for="wachtwoord"><b>Wachtwoord:</b></label>
                    <input type="password" placeholder="Wachtwoord" name="wachtwoord" required>

                    <button type="submit">Login</button>
                </form>
                <div class="signin">
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <a href="signup.php">Sign Up</a>


                </div>


            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
                    Cancel
                </button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>


    </div>

</div>

