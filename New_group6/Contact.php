<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once 'Header.php'; ?>
    <div class="contact" runat="server">
        <!-- <h1>Contact Us</h1> -->
        <div class="contact-form" runat="server">
            <h1>Contact Us</h1>
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="email" name="email" id="email" placeholder="Email">
            <textarea name="message" id="message" placeholder="Message"></textarea>
            <input type="Submit" name="submit" id="btnSubmit">
            
        </div>
    </div>

    <div class="info" runat="server">
        <h1>More Information</h1>
        <h4> <i class='bx bxs-location-plus'></i> Location: Cebu City Branch</h4>
        <h4> <i class='bx bxs-phone'></i> Contact-Number: 09239988622</h4>
        <h4><i class='bx bxs-phone-call'></i> TelePhone-number: 777-2442</h4>
        <h4><i class='bx bxl-gmail'></i> Gmail: WattpadCebuBranch@gmail.com</h4>
        <h4><i class='bx bxl-instagram-alt'></i> Instagram: WattpadCebuBranch</h4>

    </div>

</body>

</html>
