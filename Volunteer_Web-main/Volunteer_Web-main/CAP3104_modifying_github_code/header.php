<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Homepage</title>
    <link rel="stylesheet" href="General_style_sheet.css">
</head>
<body class = "light-mode">
<nav>
    <div class ="nav-left">
        <table>
            <tbody>
            <tr>
                <td>
                    <a href = "index.php" target = _self title = "Link to the Home page">Home</a>
                </td>
                <td>
                    <a href = "Volunteer_Page.php" target = _self title = "Link to the Volunteering page">Volunteer Link</a>
                </td>
                <td>
                    <a href = "GetHelp_Page.php" target = _self title = "Link to the Get Help page">Get help</a>
                </td>
            </tr>
            </tbody>

        </table>
    </div>
    <div class="nav-right">
        <table>
            <tbody>
            <tr>
                <td>
                    <?php
                    if (isset($_SESSION['userId']))
                    {
                        echo "<a href = 'profile.php' target = _self title = 'Profile Page'>Profile Page</a>";
                        echo "<a href = 'includes/logout.inc.php' target = _self title = 'Logout'>Log out</a>";
                    }
                    else
                    {
                        echo "<a href = 'login.php' target = _self title = 'Link to the Login page'>Sign Up/Log In</a>";
                    }
                    ?>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</nav>