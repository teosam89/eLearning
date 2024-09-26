<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odemy FAQ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<div class="upper">
        <div class="logo">
            <span>Odemy</span>          
        </div>
        <div class="function">
            <ul class="upper-function">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Browse Course</a></li>
                <li><a href="#" onclick="openView()">Shopping Cart</a></li>
                <li class="upper-function-active"><a href="#">FAQS</a></li>
            </ul>
        </div>
        <div class="account">
            <a data-login="Login" href="login-login.html"><svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="#000000"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg></a>
        </div>
    </div>

    <div class="section-FAQ">
    <div class="section-FAQ-topic">
        <h2>Frequently Ask Question</h2>
    </div>
    <div class="section-FAQ-content">
        <div class="section-FAQ-image">
            <img src="https://conocimiento.blob.core.windows.net/conocimiento/2023/Comerciales/Compartido/CP_Impuesto_Saneamiento/drex___que_es_el_impuesto_por_saneamiento_ambiental__custom.png" width="200px">
        </div>
        <div class="section-FAQ-text">
            <details class="bar">
                <summary>What is Odemy?</summary>
                <?php
                echo"
                <p>Odemy is an innovative online learning platform built to provide accessible, high-quality education. It offers a wide range of courses, allowing individuals to gain new skills and knowledge from the comfort of their homes. With a user-friendly interface and engaging multimedia content, Odemy makes learning an interactive and enjoyable experience.</p>
                "?>
            </details>
            <details class="bar">
                <summary>How does Odemy work?</summary>
                <?php
                echo"
                <p>Odemy works by offering on-demand courses that users can access anytime, anywhere. Learners can browse through a diverse catalog of courses across various subjects, enroll in the courses they find interesting, and learn at their own pace. The platform is designed for flexibility and convenience, making it easy to balance education with personal and professional commitments.</p>
                "?>
            </details>
            <details class="bar">
                <summary>What types of courses are offered on Odemy?</summary>
                <?php
                echo"
                <p>Odemy offers a comprehensive range of courses, from IT and computer science to personal development and creative skills. Courses are created in collaboration with industry experts, ensuring they are up-to-date and aligned with current market demands. Whether you're looking to upskill in a professional area or pursue a personal passion, Odemy has courses to meet your learning goals.</p>
                "?>
            </details>
            <details class="bar">
                <summary>Do I receive a certificate after completing a course?</summary>
                <?php
                echo"
                <p>Yes, upon successfully completing a course on Odemy, you will receive a certificate of completion. This certificate can be downloaded and shared, showcasing your newly acquired skills and knowledge.</p>
                "?>
            </details>
            <details class="bar">
                <summary>How can I update my account details?</summary>
                <?php
                echo"
                <p>To update your account details on Odemy, simply log into your account, navigate to the Account Settings section, and make the necessary changes. From there, you can update your personal information, email, password, and other preferences.</p>
                "?>
            </details>
        </div>
    </div>
    <div class="contact">
    <span onclick="openSupport()">Click me to contact support</span>
    <div class="contact-info">
    <?php
    $account = $email = $gender = $feedback = $problem = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $account = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $feedback = test_input($_POST["comment"]);
        $problem = test_input($_POST["problem-category"]);

        if (isset($_POST["gender"])) {
            $gender = test_input($_POST["gender"]);
        } else {
            $gender = "Not specified";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Feedback Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        User Account: <input type="text" name="name" required>
        <br><br>
        E-mail: <input type="email" name="email" required>
        <br><br>
        Problem Category: <select name="problem-category" required>
            <option value="Techniques Issue">Techniques Issue</option>
            <option value="Request Refund">Request Refund</option>
            <option value="Assistant Support">Assistant Support</option>
        </select>
        <br><br>
        Problem Details: <textarea name="comment" rows="5" cols="40" required></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <div class="form-submit">
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    </div>

    <div class="feedback" style="<?php echo ($_SERVER["REQUEST_METHOD"] == "POST") ? 'display: block;' : 'display: none;'; ?>">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Feedback Form:</h2>";
        echo "User Account: " . $account . "<br>";
        echo "E-mail: " . $email . "<br>";
        echo "Problem Category: " . $problem . "<br>";
        echo "Problem Details: " . $feedback . "<br>";
        echo "Gender: " . $gender . "<br>";
    }
    ?>
    </div>
</div>
</div>

    <div class="blur-overlay"></div>
    <div class="shopping-cart">
        <div class="shopping-cart-nav">
            <span class="shopping-cart-icon"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFF"><path d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z"/></svg>&nbsp;Shopping Cart</span>
            <span class="shopping-cart-close"><a href="#" onclick="closeView(); return false;"><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFFFFF"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></span>
        </div>
        <table>
            <thead>
                <tr class="shopping-cart-title">
                    <th class="shopping-cart-title-product">Product Detail</th>
                    <th class="shopping-cart-title-course">Course</th>
                    <th class="shopping-cart-title-category">Category</th>
                    <th class="shopping-cart-title-quantity">Quantity</th>
                    <th class="shopping-cart-title-price">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr class="shopping-cart-product">
                    <td>
                        <img src="https://media.licdn.com/dms/image/D4E12AQHfSWXTymm4VA/article-cover_image-shrink_600_2000/0/1695299723277?e=2147483647&v=beta&t=k0oOD_n5zjaGevp72SKt4vFaW7DvHtrwbdIyb2eP0GA" width="220px" height="150px">
                    </td>
                    <td>
                        <div class="shopping-cart-product-content">
                            <h4>Completed HTML&CSS</h4>
                            <p>Learn HTML and CSS with our beginner-friendly course, featuring interactive lessons and hands-on projects to help you build responsive, modern websites.</p>
                        </div>
                    </td>
                    <td><h3>Frontend Learning</h3></td>
                    <td><input type="number"></td>
                    <td><h3>RM22.99</h3></td>
                </tr>
                <tr class="shopping-cart-product">
                    <td>
                        <img src="https://chisellabs.com/glossary/wp-content/uploads/2021/06/What-is-an-API.png" width="220px" height="150px">
                        </td>
                        <td>
                        <div class="shopping-cart-product-content">
                            <h4>API</h4>
                            <p>Explore APIs with our course, teaching you to integrate external data, master RESTful APIs, HTTP methods, and authentication, through hands-on projects for backend and full-stack development.</p>
                        </div>
                    </td>
                    <td><h3>Backend Learning</h3></td>
                    <td><input type="number"></td>
                    <td><h3>RM18.99</h3></td>
                </tr>
            </tbody>
        </table>
        <div class="shopping-cart-checkout">
            <span>Checkout</span>
        </div>
    </div>
</body>
<script src="odemyJasFAQ.js"></script>
</html>