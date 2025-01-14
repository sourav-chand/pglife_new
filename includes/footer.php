<!-- <div class="footer">
    <div class="page-container footer-container">
        <div class="footer-cities">
            <div class="footer-city">
                <a href="property_list.php?city=Rahul_foundation">PG in Rahul Foundation</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php?city=NSHM">PG in NSHM</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php?city=Bengal_college">PG in Bengal collge</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php?city=BC_roy">PG in BC Roy collge</a>
            </div>
        </div>
    </div>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"> -->
    <style>
        .footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 60px 0;
        }
        
        .footer h5 {
            color: #3498db;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #3498db;
        }
        
        .social-icons {
            margin-top: 20px;
        }
        
        .social-icons a {
            color: #ecf0f1;
            margin-right: 15px;
            font-size: 20px;
            transition: color 0.3s;
        }
        
        .social-icons a:hover {
            color: #3498db;
        }
        
        .form-control {
            background-color: rgba(236, 240, 241, 0.1);
            border: 1px solid rgba(236, 240, 241, 0.2);
            color: #ecf0f1;
        }
        
        .form-control:focus {
            background-color: rgba(236, 240, 241, 0.2);
            border-color: #3498db;
            color: #ecf0f1;
        }
        
        .btn-primary {
            background-color: #3498db;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
        }
        
        .footer-bottom {
            background-color: #243342;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-md-3 mb-4">
                <h5>About Us</h5>
                <p>We are dedicated to providing the best service to our customers and maintaining long-lasting relationships.</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Important Links -->
            <div class="col-md-3 mb-4">
                <h5>Important Links</h5>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="col-md-3 mb-4">
                <h5>Contact Us</h5>
                <form id="contactForm">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="3" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>


</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script>
    // Contact Form Submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        // Here you would typically send the data to your server
        alert('Thank you for your message! We will get back to you soon.');
        this.reset();
    });

    // Newsletter Subscription
    document.getElementById('newsletterForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        // Here you would typically send the email to your server
        alert('Thank you for subscribing to our newsletter!');
        this.reset();
    });
</script>

</body>
</html>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
