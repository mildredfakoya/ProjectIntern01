<?php
require_once "nav_loggedin.php";
 ?>
<body class="c_body">
    <div class="wrapper">
        <h2>Contact Us</h2>
        <div id="error_message"></div>

        <form id="myform" onsubmit="return validation()" >
            <div class="input_field">
                <input type="text" placeholder="Name" id="name">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Subject" id="subject">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Phone" id="phone">
            </div>
            <div class="input_field">
                <input type="text" placeholder="Email" id="email">
            </div>
            <div class="input_field">
                <textarea id="message" placeholder="Message" ></textarea>
            </div>
            <div class="butn">
                <input type="submit">
            </div>
        </form>

    </div>
    <script src="scripts/contact.js"></script>
</body>
<?php
require_once "footer.php";
 ?>