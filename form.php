<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>React To Reactions | Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div class="signupcontainer">
	<div class = "register">
        <h2>Personal Information</h2>
        <form method="post" id="registerform" action="">       
        <label for="Name"> Name </label><br>
        <input type="text" name="Name" id="Name" placeholder="Name"><br><br>
        <label for="mobile_no"> Mobile Number </label><br>
        <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile number"><br><br> 
        <label for="email_id"> Email </label><br>
        <input type="email" name="email_id" id="email_id" placeholder="Email"><br><br>
        <label for="dob">Date of Birth</label><br>
		<input type="date" id="dob" name="dob"><br><br>
        <label for="gender"> Gender </label><br>
        <select id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        <label for="bloodgroup">Blood Group</label><br>
        <select name="bloodgroup" id="bloodgroup">
            <option value="ap">A+</option>
            <option value="an">A-</option>
            <option value="bp">B+</option>
            <option value="bn">B-</option>
            <option value="abp">AB+</option>
            <option value="abn">AB-</option>
            <option value="op">O+</option>
            <option value="on">O-</option>
        </select><br><br>
        <label> Medical History </label><br><br>
        <table class="medicalhistory">
        <tr>
        	<td><input type="checkbox" id="bloodpressure" name='medicalhistory[]' value="bloodpressure"></td>
			<td><label for="bloodpressure">High BP</label></td>
			<td><input type="checkbox" id="hypertension" name='medicalhistory[]' value="hypertension"></td>
			<td><label for="hypertension">Hypertension</label></td>
			<td><input type="checkbox" id="asthma" name='medicalhistory[]' value="asthma"></td>
            <td><label for="asthma">Asthma</label></td>
            <td><input type="checkbox" id="diabetes" name='medicalhistory[]' value="diabetes"></td>
            <td><label for="diabetes">Diabetes</label></td>
            <td><input type="checkbox" id="cholestrol" name='medicalhistory[]' value="cholestrol"></td>
			<td><label for="cholestrol">Cholestrol</label></td>
        </tr>
        </table><br>
        <label for="anyother">Any Other</label><br>
        <input type="text" name='medicalhistory[]' id="anyother"><br><br>
        <label for="medication">Any ongoing Medication</label><br>
        <input type="text" name="medication" id="medication" placeholder="Medication"><br><br>
        <h2>Medicine Information</h2>
            <label for="medicinename">Medicine Name</label><br>
            <input type="text" name="medicinename" id="medicinename"><br><br>
            <label for="symptoms">Symptoms or Illness for which you took the medicine</label><br>
            <input type="text" name="symptoms" id="symptoms" placeholder="symptoms"><br><br>
            <label for="duration">Duration for which medicine was taken</label><br>
            <input type="number" name="duration" id="duration">Days<br><br>
            <label> Medical History </label><br><br>
            <table class="sideeffects">
            <tr>
                <td><input type="checkbox" id="constipation" name='sideeffects[]' value="constipation"></td>
                <td><label for="constipation">Constipation</label></td>
                <td><input type="checkbox" id="rash" name='sideeffects[]' value="rash"></td>
                <td><label for="rash">Skin Rash</label></td>
                <td><input type="checkbox" id="diarrhea" name='sideeffects[]' value="diarrhea"></td>
                <td><label for="diarrhea">Diarrhea</label></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="headache" name='sideeffects[]' value="headache"></td>
                <td><label for="headache">Headache</label></td>
                <td><input type="checkbox" id="insomnia" name='sideeffects[]' value="insomnia"></td>
                <td><label for="insomnia">Insomnia</label></td>
                <td><input type="checkbox" id="nausea" name='sideeffects[]' value="nausea"></td>
                <td><label for="nausea">Nausea</label></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="dizz" name='sideeffects[]' value="dizz"></td>
                <td><label for="dizz">Dizziness</label></td>
                <td><input type="checkbox" id="drowse" name='sideeffects[]' value="drowse"></td>
                <td><label for="drowse">Drowsiness</label></td>
                <td><input type="checkbox" id="drymouth" name='sideeffects[]' value="drymouth"></td>
                <td><label for="drymouth">Dry Mouth</label></td>
            </tr>
            </table><br>
            <label for="anyothersideeffect">Any Other</label><br>
            <input type="text" name='sideeffects[]' id="anyothersideeffect"><br><br>
            <label for="comments">Any comments you would like to pass on to the Doctor</label><br>
            <input type="text" name="comments" id="comments" placeholder="comments"><br><br>
        <input type="submit" name="submit" value="Submit" id ="sub">
        <?php
            if(isset($_REQUEST['submit']))
            {
                echo "<script>alert('Details sent to Doctor.')</script>";
            }
        ?>
      </form>
      <a href="index.php"><- Go Back</a> 
      </div>
	</div>
</body>
</html>