<?php
    session_start();
    include('config.php');
    $result = mysqli_query($mysqli, 'SELECT * FROM profile WHERE username = "'.$_SESSION['username'].'"; ');
    $user = mysqli_fetch_array($result);
    $name = $user['name'];
    $username = $user['username'];
    $website = $user['website'];
    $bio = $user['bio'];
    $email = $user['email'];
    $phonenumber = $user['phone'];
    $gender = $user['gender'];

    if(isset($_POST['Submit'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $website = $_POST['website'];
        $bio = $_POST['bio'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $gender = $_POST['gender'];
        $result = mysqli_query($mysqli, 'UPDATE profile SET username="'.$username.'", email="'.$email.'", name="'.$name.'", website="'.$website.'", bio="'.$bio.'", phone="'.$phonenumber.'", gender="'.$gender.'"; ');
        // header('location: profile.php');
        // echo 'UPDATE profile SET email="'.$email.'", name="'.$name.'", website="'.$website.'", bio="'.$bio.'", phone="'.$phonenumber.'", gender="'.$gender.'" WHERE username = "'.$_SESSION['username'].'"; '; 
    }

    // echo $user['name'];
    // if(isset($_POST['Submit'])){
    //     $name = $_POST['name'];
    //     $username = $_POST['email'];
    //     $website = $_POST['website'];
    //     $bio = $_POST['bio'];
    //     $email = $_POST['email'];
    //     $phonenumber = $_POST['phonenumber'];
    //     $gender = $_POST['gender'];
    // }
    // else{
    //     $name = "";
    //     $username = $_SESSION['username'];
    //     $website = "";
    //     $bio = "";
    //     $email = $_SESSION['email'];
    //     $phonenumber = "";
    //     $gender = "";
    // }
   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.php" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="images/avatar.jpg" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $_SESSION['username']; ?></h4>
            </header>
            <form action="edit-profile.php" method="post" class="edit-profile__form">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input id="full-name" type="text" class="form__input" name="name" value="<?php echo $name; ?>" />
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input id="user-name" type="text" class="form__input" value="<?php echo $username;?>" name="username" />
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input id="website" type="text" class="form__input" name="website" value="<?php echo $website; ?>"/>
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea id="bio" name="bio"><?php echo $bio;?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input id="email" type="email" class="form__input" value="<?php echo $email;?>" name="email"/>
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input id="phone" type="tel" class="form__input" name="phonenumber" value="<?php echo $phonenumber; ?>"/>
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="cant">Can't remember</option>
                    </select>
                </div>
                <input type="submit" value="Submit" name="Submit">
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>
</body>
</html>