<?php
    include_once 'header.php';
?>
<br><br>
<body>
	<link href="../static/contact-form.css" rel="stylesheet">
    <link href="../static/mystyle.css" rel="stylesheet">
<div class="fcf-body">

    <div id="fcf-form">
    <h3 class="fcf-h3">Contact Us</h3>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
        
        <div class="fcf-form-group">
            <label for="Name" class="fcf-label">Name: </label>
            <div class="fcf-input-group">
                <input type="text" id="Name" name="Name" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">E-mail address: </label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Message" class="fcf-label">Message:</label>
            <div class="fcf-input-group">
                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" >
            <label for="message">Captcha (spam protection code) </label>
            <input id="6_letters_code" name="6_letters_code" type="text">
        </div>

        <div class="fcf-form-group">
            <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Submit</button>
        </div>

    </form>
    </div>

</div>
</body>
