<html>
<title>Admin Page</title>
<link rel="stylesheet" href="adminReport.css">

<body>
    <header>
        <h1>Hospital</h1>
        <a id="accountIcon" href="#">
            <ion-icon name="person-circle-outline"></ion-icon>
        </a>
    </header>
    <?php
        if ($_SESSION['Access'] == 4) {
            echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>logout</li>
			  </a>
			  <a href='doc1.php'>
					<li>Home</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
        } else if ($_SESSION['Access'] == 1) {
            echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>logout</li>
			  </a>
			  <a href='fam.php'>
					<li>Home</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
        } else if ($_SESSION['Access'] == 3) {
            echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>logout</li>
			  </a>
			  <a href='caregiver.php'>
					<li>Home</li>
			  </a>
			  <a href='patient.php'>
					<li>patient info</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
        } else if ($_SESSION['Access'] == 2) {
            echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>logout</li>
			  </a>
			  <a href='pat.php'>
					<li>Home</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
        } else if ($_SESSION['Access'] == 6) {
            echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>logout</li>
			  </a>
			  <a href='fam.php'>
					<li>Home</li>
			  </a>
			  <a href='addRoster.php'>
					<li>roster edit</li>
			  </a>
			  <a href='payment.php'>
					<li>rpayment</li>
			  </a>
			  <a href='admin_report.php'>
					<li>reports</li>
			  </a>
			  <a href='employee.php'>
					<li>employee info</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
        } else if ($_SESSION['Access'] == 5) {
            echo "<sidebar>
		<div id='sidebarContainer'>
		  <ul id='sidebarList'>
			  <a href='login.php'>
					<li>logout</li>
			  </a>
			  <a href='fam.php'>
					<li>Home</li>
			  </a>
			  <a href='addRoster.php'>
					<li>roster edit</li>
			  </a>
			  <a href='admin_report.php'>
					<li>reports</li>
			  </a>
			  <a href='employee.php'>
					<li>employee info</li>
			  </a>
			  <a href='roster.view.php'>
					<li>Roster</li>
			  </a>
		  </ul>
		</div>
	  </sidebar>";
        }
    ?>
    <div class="flexbox-container1">
        <form action="Admin_report.php" method="POST">
            <p id="formHeader"> Missed Patient Activity </p>
            <div id="dateInput">
                <label for="Date">Date:</label>
                <input type="Date" id="Date" name="Date" placeholder="any">
                <button type="submit" action="Admin_report.php" method="POST" class="btn" value="submit" name="submit">Submit</button>
            </div>
            <table id="adminTable">
                <tr>
                    <th class="headRow" id="Morn_med" name="Morn_med" for="Morn_med">Morning Medicine</th>
                    <th class="headRow" id="Afternoon_med" name="Afternoon_med" for="Afternoon_med">Afternoon Medicine</th>
                    <th class="headRow" id="Night_med" name="Night_med" for="Night_med">Night Medicine</th>
                    <th class="headRow" id="Break" name="Break" for="Break">Breakfast</th>
                    <th class="headRow" id="Lunch" name="Lunch" for="Lunch">Lunch</th>
                    <th class="headRow" id="Dinner" name="Dinner" for="Dinner">Dinner</th>
                </tr>
            </table>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
require "function_admin.php"
?>