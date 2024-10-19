<style>
    .sidebar a{
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
    :root {
        --accent-color: #ddd0c0;
        --gradient-color: #a7957d;
    }

    .sidebar {
        position: fixed;
        width: 240px;
        right: -240px; /* Change this to position the sidebar on the right */
        height: 100%;
        background-color: #fff;
        transition: all 0.5s ease;
        z-index: 1000; /* Ensure it's on top */
    }

    .sidebar header {
        font-size: 28px;
        color: #353535;
        line-height: 70px;
        text-align: center;
        background-color: #fff;
        user-select: none;
        font-family: 'Lato', sans-serif;
    }

    .sidebar {
        list-style-type: none; /* Remove default list styling */
        padding: 0; /* Remove padding */
    }

    .sidebar a {
        display: block;
        height: 65px;
        width: 100%;
        color: #353535;
        line-height: 65px;
        padding-left: 30px;
        box-sizing: border-box;
        border-left: 5px solid transparent;
        font-family: 'Lato', sans-serif;
        transition: all 0.5s ease;
    }

    .sidebar a.active,
    .sidebar a:hover {
        border-left: 5px solid var(--accent-color);
        color: black;
        background: linear-gradient(to left, var(--accent-color), var(--gradient-color));
    }

    .sidebar a i {
        font-size: 23px;
        margin-right: 16px;
    }

    .sidebar a span {
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    #check {
        display: none;
    }

    label #btn{
        position: absolute;
        right: 5px; /* Keep this to align the buttons to the right */
        cursor: pointer;
        color: #fff;
        border-radius: 5px;
        margin: 25px 0px 0px 0px; /* Adjusted to remove horizontal margins */
        font-size: 29px;
        background-color: #A7957D;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
                    inset -7px -7px 10px 0px rgba(0, 0, 0, .1),
                    3.5px 3.5px 20px 0px rgba(0, 0, 0, .1),
                    2px 2px 5px 0px rgba(0, 0, 0, .1);
        height: 45px;
        width: 45px;
        text-align: center;
        line-height: 45px;
        transition: all 0.5s ease;
    }

    #check:checked ~ .sidebar {
        right: 0; /* Change this to show the sidebar from the right */
    }

    #check:checked ~ label #btn {
        margin-right: 245px;
        opacity: 0;
        visibility: hidden;
    }

    #check:checked ~ label #cancel {
        margin-right: 245px;
        opacity: 1;
        visibility: visible;
    }

    .sidebar > a.active,
    .sidebar > a:hover:nth-child(even) {
        --accent-color: #cfc4b5;
        --gradient-color: #a7957d;
    }

    .sidebar a.active,
    .sidebar > a:hover:nth-child(odd) {
        --accent-color: #e0d8cc;
        --gradient-color: #c3b5a2;
    }

    .sidebar h2 {
        position: relative;
        text-align: center;
        color: #353535;
        font-size: 60px;
        font-family: 'Lato', sans-serif;
        margin: 0;
        color: #a759f5;
    }

    .sidebar p {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        text-align: center;
        font-size: 30px;
        color: #d6adff;
        margin: 0;
    }
        @media (max-width: 1111px) {
            .hide-on-mobile2{
                font-size: 20px !important;
            }
            .img-logo2{
                width: 50px !important;
                height: 50px !important;
            }
        }
        @media (max-width: 554px) {
            .hide-on-mobile2{
                display: none !important;
            }
        }

    </style>



<div class="navbar">
    <div class="title-header" onclick="location='member_index.php'" style="cursor: pointer; position:relative; left: 50px;">
        <img class="img-logo2" src="member_assets/img/sta_ana_logo.png" alt="Logo">
        <h2 style="position:relative; top: 8px; left: 10px;" class="hide-on-mobile2">
            SANGGUNIANG KABATAAN<br>
            <span>Sta Cruz, Tagologoan, Misamis Oriental</span>
        </h2>
    </div>
    <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    <ul class="links">
    <?php if (!isset($_SESSION['user_id'])): ?>
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_index.php" class="<?= $current_page == 'member_index.php' ? 'active' : '' ?>">Home</a>
        </li>
    <?php endif; ?>
        <?php if (isset($_SESSION['user_id'])): ?>
            <li class="hide-on-mobile" style="font-family: 'Open Sans';">
                <a href="member_home.php" class="<?= $current_page == 'member_home.php' ? 'active' : '' ?>">Home</a>
            </li>
        <?php endif; ?>
        <li class="hide-on-mobile"  style="font-family: 'Open Sans';">
            <a href="member_about.php" class="<?= $current_page == 'member_about.php' ? 'active' : '' ?>">About</a>
        </li>
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_projects.php" class="<?= $current_page == 'member_projects.php' ? 'active' : '' ?>">Projects</a>
        </li>
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_contact.php" class="<?= $current_page == 'member_contact.php' ? 'active' : '' ?>">Contact</a>
        </li>

        <!-- Check if the user is logged in -->
    <?php if (isset($_SESSION['user_id'])): ?>
        
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_logout.php">Logout</a>
        </li>
    <?php endif; ?>

    
<div class="show-on-mobile1">
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
    </label>



        <div class="sidebar">
            <header>Menu</header>
                <?php if (!isset($_SESSION['user_id'])): ?>
                        <a href="member_index.php" class="<?= $current_page == 'member_index.php' ? 'active' : '' ?>">
                            <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                <?php endif; ?>
                <a href="member_home.php" class="<?= $current_page == 'member_home.php' ? 'active' : '' ?>">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Home</span>
                    </a>
                    <a href="member_about.php" class="<?= $current_page == 'member_about.php' ? 'active' : '' ?>">
                        <i class="fas fa-chart-bar"></i>
                        <span>About</span>
                    </a>
                    <a href="member_projects.php" class="<?= $current_page == 'member_projects.php' ? 'active' : '' ?>">
                        <i class="fas fa-project-diagram"></i>
                        <span>Projects</span>
                    </a>
                
                <?php if (isset($_SESSION['user_id'])): ?>
                        <a href="member_contact.php" class="<?= $current_page == 'member_contact.php' ? 'active' : '' ?>">
                            <i class="fas fa-envelope"></i>
                            <span>Contact</span>
                        </a>
                        <a href="member_logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                <?php endif; ?>
                <!-- Close Menu button -->
                <a href="#" class="close-sidebar" onclick="document.getElementById('check').checked = false;">
                    <i class="fas fa-times"></i>
                    <span>Close Menu</span>
                </a>
        </div>
    </div>
</div>