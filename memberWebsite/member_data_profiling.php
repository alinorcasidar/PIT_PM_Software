<?php require_once 'member_controller/member_db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="assets/member_css/style.css?v=<?= filemtime('assets/member_css/style.css'); ?>"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body>
<?php require_once 'member_component/navbar.php' ?>

    <div class="hero-page">
    <div class="two-col context">

        </div>
        <div class="two-col cards">
        <div class="card">
            <h2>Add Project</h2>
            <form action="controller/add_event.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="Project Name" required>
                <input type="date" name="event_date" placeholder="Project Date" required>
                <textarea name="description" placeholder="Project Description" style="height: 300px" required></textarea>
                <input type="file" name="pictures" accept="image/*" required>
                <input type="submit" class="button" value="Add Project">
            </form>
        </div>
        </div>
    </div>
</body>
</html>