<!-------------------- Footer -------------------->

<div class="container-fluid footer">
    <div class="row justify-content-evenly px-lg-5">
        <div class="col-lg-3 col-md-4 p-4">
            <h3 class="fw-bold fs-3 mb-3"><img src="Images/Logo.png" class="img-fluid me-2" style="width: 45px; height: auto;"><?php echo $setting_r['site_title'] ?></h3>
            <p>
                <?php echo $setting_r['site_about'] ?>
            </p>

        </div>
        <div class="col-lg-3 col-md-4  p-4 footer-links">
            <h4 class="mb-3">Quick Links</h4>
            <a href="index.php" class="d-inline-block mb-2 text-light text-decoration-none">Home</a> <br>
            <a href="about.php" class="d-inline-block  mb-2 text-light text-decoration-none">About</a> <br>
            <a href="rooms.php" class="d-inline-block  mb-2 text-light text-decoration-none">Rooms</a> <br>
            <a href="facilities.php" class="d-inline-block  mb-2 text-light text-decoration-none">Facilities</a> <br>
            <a href="gallery.php" class="d-inline-block  mb-2 text-light text-decoration-none">Gallery</a> <br>
            <a href="contact.php" class="d-inline-block  mb-2 text-light text-decoration-none">Contact us</a>
        </div>
        <div class="col-lg-3 col-md-4  p-4">
            <h4 class="mb-0">Contact us</h4>
            <br>
            <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-3 text-decoration-none text-light"><i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn1']?></a> <br>          
            <a href="tel: +<?php echo $contact_r['pn2']?>" class="d-inline-block mb-3 text-decoration-none text-light"><i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn2']?></a> <br>
            <a href="<?php echo $contact_r['email']?>" target="_blank" class="d-inline-block text-decoration-none text-light mb-4"><i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']?></a>
        </div>
        <div class="col-lg-3 col-md-4  p-4">
            <h4 class="mb-3">Follow us</h4>
            <?php
                if($contact_r["tw"] != "") {
                    echo <<<data
                    <a href="$contact_r[tw]" target="_blank" class="d-inline-block mb-3 text-light text-decoration-none">
                        <i class="bi bi-twitter me-1"></i> Twitter
                    </a>
                    data;
                }
            ?>
            <br>
            <a href="<?php echo $contact_r['fb']?>" target="_blank" class="d-inline-block mb-3 text-light text-decoration-none"><i class="bi bi-facebook me-1"></i> Facebook</a> <br>
            <a href="<?php echo $contact_r['insta']?>" target="_blank" class="d-inline-block mb-3 text-light text-decoration-none"><i class="bi bi-instagram me-1"></i> Instagram</a>

        </div>
    </div>
</div>

    <h6 class="copyright text-center text-white p-3 m-0">© 2025 <?php echo $setting_r['site_title'] ?> Hotel. All Rights Reserved</h6>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navigation Bar Active -->
<script>

    function setActive()
    {
        let navbar = document.getElementById("nav-bar");
        let a_tags = navbar.getElementsByTagName("a");

        for(let i=0; i<a_tags.length; i++)
        {
            let file = a_tags[i].href.split("/").pop();
            let file_name = file.split(".")[0];

            if(document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add("active");
            }
        }
    }

    function alert(type, msg, position='body') {
        let bs_class = (type == "success") ? "alert-success" : "alert-danger";
        let element = document.createElement("div");
        element.innerHTML = `
            <div class="alert alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        if(position=='body') {
            document.body.append(element);
            element.classList.add('custom-alert');
        }
        else {
            document.getElementById(position).appendChild(element);
        }

        setTimeout(remAlert, 3000);
    }

    function remAlert() {
        document.getElementsByClassName('alert')[0].remove();
    }

    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit', (e) => {
        e.preventDefault();

        let data = new FormData();

        data.append('name', register_form.elements['name'].value);
        data.append('email', register_form.elements['email'].value);
        data.append('phonenum', register_form.elements['phonenum'].value);
        data.append('address', register_form.elements['address'].value);
        data.append('dob', register_form.elements['dob'].value);
        data.append('pass', register_form.elements['pass'].value);
        data.append('cpass', register_form.elements['cpass'].value);
        data.append('register', '');

        var myModal = document.getElementById("registerModal")
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);

        xhr.onload = function() {
            if(this.responseText == 'pass_mismatch') {
                alert('error', "Password Mismatch!");
            }
            else if(this.responseText == 'email_already') {
                alert('error', "Email is already registered!");
            }
            else if(this.responseText == 'phone_already') {
                alert('error', "Phone Number is already registered!");
            }
            else if(this.responseText == 'ins_failed') {
                alert('error', "Registration Failed! Server Down!");
            }
            else {
                alert('success', "Registration Successful!");
                register_form.reset();
            }
        }
        
        xhr.send(data);
    });


    let login_form = document.getElementById('login-form');

    login_form.addEventListener('submit', (e) => {
        e.preventDefault();

        let data = new FormData();

        data.append('email_mob', login_form.elements['email_mob'].value);
        data.append('pass', login_form.elements['pass'].value);
        data.append('login', '');

        var myModal = document.getElementById("loginModal")
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);

        xhr.onload = function() {
            if(this.responseText == 'inv_email_mob') {
                alert('error', "You have not registered!");
            }
            else if(this.responseText == 'invalid_pass') {
                alert('error', "Incorrect Password!");
            }
            else {
                let fileurl = window.location.href.split('/').pop().split('?').shift();
                if(fileurl == 'room_details.php') {
                    window.location = window.location.href;
                }
                else {
                    window.location = window.location.pathname;
                }
            }
        }
        
        xhr.send(data);
    });


    function checkLoginToBook(status,room_id) {
        if(status) {
            window.location.href='confirm_booking.php?id='+room_id;
        }
        else {
            alert('error', 'Please Login to Book Room!');
        }
    }

    setActive();

</script>