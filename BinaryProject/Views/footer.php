</body>
<footer>
    <!--   <div class="container">-->
    <?php if ($_SESSION['connectedUser'] != null) { ?> <p id="balanceFooter" class="balanceFooter">
        Credits: <?php echo unserialize($_SESSION['connectedUser'])->getBalance(); ?> </p>"
    <?php } ?>
    <!--   </div>-->
</footer>

<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="Views/Assets/js/login.js" type="text/javascript"></script>
<script src="Views/Assets/js/home.js" type="text/javascript"></script>
<script src="Views/Assets/js/navbar.js" type="text/javascript"></script>
<script src="Views/Assets/js/tournaments.js" type="text/javascript"></script>
</html>