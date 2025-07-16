<?php

if(isset($_POST['send']))

{   
    $reasons = $_POST['reasons'];
    $name = $_POST['fullname'];
    $email = $_POST['emailadd'];
    $contact = $_POST['contact'];
    $msg = $_POST['message'];
    $msg = wordwrap($msg,80);
    $outputs ="Reasons: ".$reasons."\r\nFull Name: ".$name."\r\nEmail Address: ".$email."\r\nContact Number: ".$contact."\r\nMessage: ".$msg."";
    
    if(mail("communication.department@pom.ae","Sinyar Hospitality Contact Form",$outputs))
    { 
        
        echo ($lang == "en" ? '<script type="text/javascript">alert("We appreciate you getting in touch with us. One of our colleagues will get back to you shortly. Have a great day!");</script>' : '<script type="text/javascript">alert("نحن نقدر لك التواصل معنا. سنعود إليك قريبًا. . نتمنى لك يوماً سعيداً!");</script>') ;  

    } else { 
        echo '<script type="text/javascript">alert("Something went wrong, Please try again!")</script>'; 
    }

    echo "<meta http-equiv='refresh' content='0'>";
    exit;
}

?>

<form method='post'>
	<div class="form-group">
        <input type='hidden' name='reasons' id="reasons"  
        oninvalid="this.setCustomValidity('<?php echo ($lang == "en" ? "This is a required field" : "الرجاء ملئ جميع الفراغات") ?>')"
        oninput="setCustomValidity('')" required>
      <div class="dropdown">
            <a href="#" id='mainlink' class="form-control dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo ($lang == "en" ? "Reasons" : "الموضوع") ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                <li class="menu-item">
                    <a value='I am a supplier' id='menulink1'><?php echo ($lang == "en" ? "I am a Supplier" : "أنا مورد") ?></a>
                </li>
                <li class="menu-item">
                    <a value='I am a client'  id='menulink2'><?php echo ($lang == "en" ? "I am a Client" : "أنا عميل") ?></a>
                </li>
                <li class="menu-item">
                    <a value='I am an Applicant' id='menulink3'><?php echo ($lang == "en" ? "I am an Applicant" : "أنا مقدم طلب") ?></a>
                </li>
            </ul>
        </div>

        <input  type="text" name="fullname" class="form-control" placeholder="<?php echo ($lang == "en" ? "Full Name" : "الإسم بالكامل") ?>" 
        oninvalid="this.setCustomValidity('<?php echo ($lang == "en" ? "This is a required field" : "الرجاء ملئ جميع الفراغات") ?>')"
        oninput="setCustomValidity('')" required>
        <input  type="email" name="emailadd" class="form-control" placeholder="<?php echo ($lang == "en" ? "Email Address" : "عنوان البريد الإلكتروني") ?>" 
         oninvalid="this.setCustomValidity('<?php echo ($lang == "en" ? "This is a required field" : "الرجاء ملئ جميع الفراغات") ?>')"
        oninput="setCustomValidity('')" required>
        <input  type="tel" name="contact" class="form-control" placeholder="<?php echo ($lang == "en" ? "Contact Number" : "رقم الإتصال") ?>" oninvalid="this.setCustomValidity('<?php echo ($lang == "en" ? "This is a required field" : "الرجاء ملئ جميع الفراغات") ?>')"
        oninput="setCustomValidity('')"  required>
        <textarea name="contact" class="form-control" placeholder="<?php echo ($lang == "en" ? "Message" : "الرسالة") ?>" oninvalid="this.setCustomValidity('<?php echo ($lang == "en" ? "This is a required field" : "الرجاء ملئ جميع الفراغات") ?>')"
        oninput="setCustomValidity('')" required></textarea>
        <input type='submit' name='send' class="send-now-btn" value='<?php echo ($lang == "en" ? "Submit" : "أرسل ") ?>'>
	</div>
</form>

