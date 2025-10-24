<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XV4BT3 - Projects</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/img/noFilter.png" type="image/png">
</head>
<body>
    <nav class="nav">
        <div class="nav-inner">
            <a href="index.php" class="logo">XV4BT3</a>
            <div>
                <a href="index.php">Home</a>
                <a href="sub_site/projects.php">Projects</a>
                <a href="sub_site/portfolio.php">Portfolio</a>
                <a href="sub_site/contact.php">Contact</a>
            </div>
        </div>
    </nav>

    <main>
        <h1>My Projects</h1>
        
        <section>
            <h2>PHP Web Applications</h2>
            <div class="project-card">
                <h3>Project Name</h3>
                <p>Description of your PHP project. What problems did it solve? What technologies did you use?</p>
                <a href="#" class="btn">View Project</a>
            </div>
        </section>

        <section>
            <h2>Lua Game Scripts</h2>
            <div class="project-card">
                <h3>Script Name</h3>
                <p>Description of your Lua/Luau project. What game features or mechanics did you implement?</p>
                <a href="#" class="btn">View Code</a>
            </div>
        </section>
    </main>

    <footer>
        &copy; <?php echo date('Y'); ?> XV4BT3 | Built with PHP, HTML & Lua
    </footer>
</body>
</html>