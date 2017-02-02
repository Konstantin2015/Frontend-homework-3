<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/test.css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif" rel="stylesheet">
    <title>Test</title>
</head>
<body>
<section class="wrapper">
    <h1>quoete request</h1>
    <form class="forms col-md-10" action="send.php" method="post" >
        <fieldset class="data">
            <p>
                <label for="first-name">First name*</label>
                <input name="name" class="field name" id="first-name" type="text" required>
            </p>
            <p>
                <label for="last-name">Last name*</label>
                <input name="surname" class="field surname" id="last-name" type="text" required>
            </p>
            <p>
                <label for="company-name">Company name*</label>
                <input name="company" class="field surname" id="company-name" type="text" required>
            </p>
            <div class="container-company">
                <p><b>Company address*</b></p>
                <div class="contact-address">
                    <p>
                        <label for="street">Street</label>
                        <input name="street" class="city" id="street" type="text" required>
                    </p>
                    <p>
                        <label for="your-city">City</label>
                        <input name="city" class="city" id="your-city" type="text" required>
                    </p>
                    <p>
                        <label for="state">State</label>
                        <input name="state" class="city" id="state" type="text" required>
                    </p>
                    <p>
                        <label for="your-country">Country</label>
                        <input name="country" class="country" id="your-country" type="text" >
                    </p>
                    <p>
                        <label for="code">ZipCode</label>
                        <input name="zipcode" class="country" id="code" type="text" >
                    </p>
                </div>
            </div>
            <div class="checkbox">
                <p>Region of Distribution Interest*<br>
                    ( Select all that applies )</p>
                <ul class="checkbox-cont">
                    <li><input name="North" class=""  id="north" type="checkbox" checked><label for="north">North America</label></li>
                    <li><input name="Middle" class="" id="middle" type="checkbox"><label for="middle">Middle East</label></li>
                    <li><input name="Latin" class="" id="latin" type="checkbox"><label for="latin">Latin America</label></li>
                </ul>
            </div>
            <div class="cont-interest">
                <label for="country-of-interest">
                    <p>Country of Interest<br>
                        <span class="mini-text">Please indicate country in which you intend to sell.
                                Please note the export agreementat
                                the end of this page
                        </span></p>
                </label>
                <input name="country-of-interest" class="" id="country-of-interest" type="text" >
            </div>
            <div class="notes">
                <p><label class="rrr">Additional Notes</label></p>
                <p><textarea class="textarea-wrapp" rows="3" cols="45" name="mess"></textarea></p>
            </div>
            <button class="btn-send col-md-10" type="submit" name="submit" value="send">Send</button>
        </fieldset>
    </form>

</section>
</body>
<!----------------------------------------------------------->

<!----------------------------------------------------------->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="js/lib//jquery-3.1.1.min.js"></script>
<script src="js/lib/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</html>
