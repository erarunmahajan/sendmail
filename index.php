<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
</head>
<body>
<form action="confirmationContactUsToUser.php" class="form" id="contact-form" method="post" >

<div class="controls">

    <div class="row">

        <div class="col-md-6">
            <div class="form-group">
                <input id="form_name" type="text" name="name" placeholder="Name" required="required">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input id="form_email" type="email" name="email" placeholder="Email" required="required">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input id="form_email" type="text" name="number" placeholder="Number">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input id="form_subject" type="text" name="subject" placeholder="Subject">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit"><span>Send Message</span></button>
        </div>

    </div>                             
</div>
</form>
</body>
</html>