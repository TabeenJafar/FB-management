<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<title>Main Artboard</title>
<style>
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

/* Sidebar Styles */
.sidebar {
    width: 200px;
    height: 100vh;
    background-color: #2c3e50;
    color: white;
    position: fixed;
    left: 0;
    top: 0;
    padding-top: 20px;
}

.sidebar a {
    display: block;
    color: white;
    padding: 16px;
    text-decoration: none;
}

.sidebar a:hover {
    background-color: #34495e;
}

.sidebar .logo {
    text-align: center;
    margin-bottom: 20px;
}

/* Main Content Area */
.content {
    margin-left: 220px; /* Adjust based on sidebar width */
    padding: 20px;
}

/* Widget Styles */
.widget {
    background-color: white;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.widget h2 {
    margin-top: 0;
}

/* Match Overview Widget */
.match-overview ul {
    list-style-type: none;
    padding: 0;
}

.match-overview li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.match-overview li:last-child {
    border-bottom: none;
}

/* Incident Reporting Form */
.incident-form input[type="text"],
.incident-form input[type="time"] {
    width: calc(100% - 22px); /* Adjust for padding and border */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.incident-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Disciplinary Action & Results */
.disciplinary-action button {
    background-color: #3498db;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    margin-bottom: 10px;
    cursor: pointer;
}

.disciplinary-action button:last-child {
    background-color: #e74c3c; /* Red color for Red Card */
}

/* Recent Activity Feed */
.activity-feed ul {
    list-style-type: none;
    padding: 0;
}

.activity-feed li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.activity-feed li:last-child {
    border-bottom: none;
}
</style>
</head>
<body>

<div class="sidebar">
    <div class="logo">LOGO</div>
    <a href="#">Dashboard</a>
    <a href="#">Match Schedule</a>
    <a href="#">Incident Report</a>
    <a href="#">Displinary Action</a>
    <a href="#">Upcoming Matches</a>
    <a href="#">Submit Results</a>
    <a href="#">Match Statistics</a>
    <a href="#">Setting</a>
</div>

<div class="content">
    <div class="widget match-overview">
        <h2>Match overview Widget</h2>
        <ul>
            <li>Manchester United VS Liverpool</li>
            <li>Arsenal Tigers VS Real Madrid</li>
            <li>Sheffield United VS Barcelona</li>
        </ul>
    </div>

    <div class="widget incident-form">
        <h2>Incident Reporting Form</h2>
        <input type="text" placeholder="Player Name">
        <input type="text" placeholder="Team">
        <input type="time">
        <input type="submit" value="Submit">
    </div>

    <div class="widget disciplinary-action">
        <h2>Displinary Action & Results</h2>
        <button>Yellow Card</button>
        <button>Red Card</button>
        <h3>Match Result</h3>
        <p>Team 1: </p>
        <p>Team 2: </p>
    </div>

    <div class="widget activity-feed">
        <h2>Recent Activity Feed</h2>
        <ul>
            <li>Recent Assignments & Reports Filed</li>
            <li>submitted match results</li>
            <li>reported an incident of foul</li>
            <li>issued red card to xy player</li>
            <li>reported an incident of other irregularity</li>
            <li>submitted match results</li>
        </ul>
    </div>
</div>

</body>
</html>
=======
<div>
<action="../actions/login_user.php" method="post">
    <img src="/images/Logo.png" alt="Logo">
    <br><br>
    <input type="email" name="email" placeholder="Email" required>
    <br><br>
    <input type="password" name="password" placeholder="Password" required>
    <br><br>
    <button type="submit" value="submit">Login</button>
    <br>
    <button type="submit" value="submit">Sign up</button>
</form>
</div>
<style>
        form {
    font-family: Arial, sans-serif;
    text-align: center;
}

img {
    display: block;
    margin: 0 auto;
}

input {
    width: 100%;
    padding: 20px;
    width: 700px;
    border: 2px solid black;
    border-radius: 10px;
}

button {
    display: block;  
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0 auto;         
    padding: 10px 40px;
    background: #ccc;
    background-color: white;
    border: 0 none;
    cursor: pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border-color: solid black;
}

body,
html {
    height: 100%;
    margin: 0;
    display: grid;
    place-items: center;
    background-color: #153C57;
}

.img-container {
    place-content: center;
    padding: 40px;
    border: 2px solid #ccc;
}

.form-container {
    padding: 40px;
    border: 2px solid #ccc;
    background-color: #f9f9f9;
}

.button-container {
    place-items: center;
    padding: 40px;
    border: 2px solid #ccc;
}

</style>
>>>>>>> 0a4c3a30b2613a638ec8da35b62000c102c00d50
