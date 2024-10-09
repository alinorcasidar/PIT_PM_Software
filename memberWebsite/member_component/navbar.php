<div class="navbar">
    <div class="title-header" onclick="location='member_index.php'" style="cursor: pointer; position:relative; left: 50px;">
        <img src="member_assets/img/sta_ana_logo.png" alt="Logo">
        <h2 style="position:relative; top: 8px; left: 10px;" class="hide-on-mobile">
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
        <li class="hide-on-mobile"  style="font-family: 'Open Sans';">
            <a href="member_data_profiling.php" class="<?= $current_page == 'member_data_profiling.php' ? 'active' : '' ?>">Data Profiling</a>
        </li>
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_planner.php" class="<?= $current_page == 'member_planner.php' ? 'active' : '' ?>">Planner</a>
        </li>
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_projects.php" class="<?= $current_page == 'member_projects.php' ? 'active' : '' ?>">Projects</a>
        </li>

        <!-- Check if the user is logged in -->
    <?php if (isset($_SESSION['user_id'])): ?>
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_contact.php" class="<?= $current_page == 'member_contact.php' ? 'active' : '' ?>">Contact</a>
        </li>
        <li class="hide-on-mobile" style="font-family: 'Open Sans';">
            <a href="member_logout.php">Logout</a>
        </li>
    <?php endif; ?>

    
        <li class="show-on-mobile">
            <a href="#!" onclick="document.querySelector('.sidenav').classList.toggle('active')">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
            </a>
        </li>
    </ul>
</div>

<div class="sidenav">
    <h3>Navigation</h3>

    <ul class="links">
    <?php if (!isset($_SESSION['user_id'])): ?>
        <li>
            <a href="member_index.php" class="<?= $current_page == 'member_index.php' ? 'active' : '' ?>">Home</a>
        </li>
    <?php endif; ?>
        <li>
            <a href="member_data_profiling.php" class="<?= $current_page == 'member_data_profiling.php' ? 'active' : '' ?>">Data Profiling</a>
        </li>
        <li>
            <a href="planner.php" class="<?= $current_page == 'planner.php' ? 'active' : '' ?>">Planner</a>
        </li>
        <li>
            <a href="member_projects.php" class="<?= $current_page == 'member_projects.php' ? 'active' : '' ?>">Projects</a>
        </li>

        <!-- Check if the user is logged in -->
    <?php if (isset($_SESSION['user_id'])): ?>
        <li>
            <a href="member_contact.php" class="<?= $current_page == 'member_contact.php' ? 'active' : '' ?>">Contact</a>
        </li>
        <li>
            <a href="member_logout.php">Logout</a>
        </li>
    <?php endif; ?>
        <li>
            <a href="#!" onclick="document.querySelector('.sidenav').classList.toggle('active')">Close Menu</a>
        </li>
    </ul>
</div>