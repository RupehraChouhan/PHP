<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <script src="js/login.js"></script>
</head>
<body>
    <nav class="navigation-bar light">
        <div class="navigation-bar-content">
            <a href="index.php" class="element"> Home </a>
            <span class="element-divider"></span>
            <a href="stories.php" class="element"> Story </a>
            <span class="element-divider"></span>
            <a href="parties.php" class="element"> Party </a>
            <span class="element-divider"></span>
            <a href="group.php" class="element"> Groups </a>
            <span class="element-divider"></span>
            <a href="post.php" class="element"> Post </a>
            <span class="element-divider"></span>
            <a href="about_us.php" class="element"> About Us </a>
            <span class="element-divider"></span>
            <div class="element input-element">
                <form>
                    <div class="input-control text">
                        <input type="text" placeholder="Search...">
                        <button class="btn-search"></button>
                    </div>
                </form>
            </div>
            <span class="element-divider"></span>
            <?php
                session_start();
                if(isset($_SESSION['username'])&&$_SESSION['username']!=null)
                {
                    echo "<a class='element'> Welcome! ".$_SESSION['username']." </a>" ;
                    echo "<div class='element place-right'>
                            <a class='dropdown-toggle' href='#'>
                            <span class='icon-cog'></span>
                        </a>
                        <ul class='dropdown-menu place-right' data-role='dropdown'>
                            <li><a href='#'>Settings</a></li>
                            <li><a href='#'>Edit Profile</a></li>
                            <li><a href='#'>Contacts</a></li>
                            <li><a href='account/logout.php'>Log Out</a></li>
                        </ul>
                    </div>";

                }
                else
                    echo"<span class='element-divider place-right'></span>
                            <button onclick ='login()' id='login' class='element image-button image-left place-right'>
                                Log In / Sign Up
                            <img src='Assets/default_user.png' />
                        </button>";
            ?>
        </div>
    </nav>
</body>
</html>
