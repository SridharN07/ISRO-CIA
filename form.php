<?php
include('config.php');

if(isset($_POST['fname']) && isset($_POST['lname']))  {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $qualification = $_POST["qualification"];
    $contact = $_POST["contact"];
    $nationality = $_POST["nationality"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO registration (FirstName, LastName, DateOfBirth, Qualification, Contact, Nationality, Email, Password) VALUES ('$fname', '$lname','$dob','$qualification','$contact','$nationality','$email','$password')";
    
    if($con->query($sql) === true) {
        header("Location: thanks.html");
        exit();
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Learning Program</title>
    <link rel="icon" href="./Styles/Images/Favicon/favicon.ico">
    <link rel="stylesheet" href="./Styles/animation.css">
    <link rel="stylesheet" href="./Styles/form.css">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<style>
   
</style>
<body>
    <body>  
        <section>
            <form id="userForm" action="form.php" method="POST">
            <div class="form-box">
                <div class="form-value">
                        <img id="logo" class="logo" src="./Styles/Images/Logos/ISRO.png">
                        <h2>Student Learning Program</h2>
                        <div class="inputbox">
                            <ion-icon name="person-circle-outline"></ion-icon>
                            <input type="text" id="fname" name="fname" required>
                            <label for="fname">First Name</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="people-circle-outline"></ion-icon>
                            <input type="text" id="lname" name="lname" required> 
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="inputbox">
                            <input type="date" id="dob" name="dob" required> 
                            <label for="dob">Date Of Birth</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="school-outline"></ion-icon>
                            <input type="text" name="qualification" id="qualification" required>
                            <label for="qualification">Qualification</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="accessibility-outline"></ion-icon>
                            <input type="number" id="contact" name="contact" required>
                            <label for="contact">Contact No</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="people-circle-outline"></ion-icon>
                            <input list="nationalities" name="nationality" id="nationality" required>
                            <label for="nationality">Nationality</label>
                        </div>
                        <datalist id="nationalities">
                            <option value="Afghan"></option>
                            <option value="Albanian"></option>
                            <option value="Algerian"></option>
                            <option value="American"></option>
                            <option value="Andorran"></option>
                            <option value="Angolan"></option>
                            <option value="Antiguan"></option>
                            <option value="Argentinean"></option>
                            <option value="Armenian"></option>
                            <option value="Australian"></option>
                            <option value="Austrian"></option>
                            <option value="Azerbaijani"></option>
                            <option value="Bahamian"></option>
                            <option value="Bahraini"></option>
                            <option value="Bangladeshi"></option>
                            <option value="Barbadian"></option>
                            <option value="Barbudan"></option>
                            <option value="Batswana"></option>
                            <option value="Belarusian"></option>
                            <option value="Belgian"></option>
                            <option value="Belizean"></option>
                            <option value="Beninese"></option>
                            <option value="Bhutanese"></option>
                            <option value="Bolivian"></option>
                            <option value="Bosnian"></option>
                            <option value="Brazilian"></option>
                            <option value="British"></option>
                            <option value="Bruneian"></option>
                            <option value="Bulgarian"></option>
                            <option value="Burkinabe"></option>
                            <option value="Burmese"></option>
                            <option value="Burundian"></option>
                            <option value="Cambodian"></option>
                            <option value="Cameroonian"></option>
                            <option value="Canadian"></option>
                            <option value="Cape Verdean"></option>
                            <option value="Central African"></option>
                            <option value="Chadian"></option>
                            <option value="Chilean"></option>
                            <option value="Chinese"></option>
                            <option value="Colombian"></option>
                            <option value="Comoran"></option>
                            <option value="Congolese"></option>
                            <option value="Costa Rican"></option>
                            <option value="Croatian"></option>
                            <option value="Cuban"></option>
                            <option value="Cypriot"></option>
                            <option value="Czech"></option>
                            <option value="Danish"></option>
                            <option value="Djiboutian"></option>
                            <option value="Dominican"></option>
                            <option value="Dutch"></option>
                            <option value="East Timorese"></option>
                            <option value="Ecuadorean"></option>
                            <option value="Egyptian"></option>
                            <option value="Emirati"></option>
                            <option value="Equatorial Guinean"></option>
                            <option value="Eritrean"></option>
                            <option value="Estonian"></option>
                            <option value="Ethiopian"></option>
                            <option value="Fijian"></option>
                            <option value="Filipino"></option>
                            <option value="Finnish"></option>
                            <option value="French"></option>
                            <option value="Gabonese"></option>
                            <option value="Gambian"></option>
                            <option value="Georgian"></option>
                            <option value="German"></option>
                            <option value="Ghanaian"></option>
                            <option value="Greek"></option>
                            <option value="Grenadian"></option>
                            <option value="Guatemalan"></option>
                            <option value="Guinea-Bissauan"></option>
                            <option value="Guinean"></option>
                            <option value="Guyanese"></option>
                            <option value="Haitian"></option>
                            <option value="Herzegovinian"></option>
                            <option value="Honduran"></option>
                            <option value="Hungarian"></option>
                            <option value="I-Kiribati"></option>
                            <option value="Icelander"></option>
                            <option value="Indian"></option>
                            <option value="Indonesian"></option>
                            <option value="Iranian"></option>
                            <option value="Iraqi"></option>
                            <option value="Irish"></option>
                            <option value="Israeli"></option>
                            <option value="Italian"></option>
                            <option value="Ivorian"></option>
                            <option value="Jamaican"></option>
                            <option value="Japanese"></option>
                            <option value="Jordanian"></option>
                            <option value="Kazakhstani"></option>
                            <option value="Kenyan"></option>
                            <option value="Kittian and Nevisian"></option>
                            <option value="Kuwaiti"></option>
                            <option value="Kyrgyz"></option>
                            <option value="Laotian"></option>
                            <option value="Latvian"></option>
                            <option value="Lebanese"></option>
                            <option value="Liberian"></option>
                            <option value="Libyan"></option>
                            <option value="Liechtensteiner"></option>
                            <option value="Lithuanian"></option>
                            <option value="Luxembourger"></option>
                            <option value="Macedonian"></option>
                            <option value="Malagasy"></option>
                            <option value="Malawian"></option>
                            <option value="Malaysian"></option>
                            <option value="Maldivan"></option>
                            <option value="Malian"></option>
                            <option value="Maltese"></option>
                            <option value="Marshallese"></option>
                            <option value="Mauritanian"></option>
                            <option value="Mauritian"></option>
                            <option value="Mexican"></option>
                            <option value="Micronesian"></option>
                            <option value="Moldovan"></option>
                            <option value="Monacan"></option>
                            <option value="Mongolian"></option>
                            <option value="Moroccan"></option>
                            <option value="Mosotho"></option>
                            <option value="Motswana"></option>
                            <option value="Mozambican"></option>
                            <option value="Namibian"></option>
                            <option value="Nauruan"></option>
                            <option value="Nepalese"></option>
                            <option value="New Zealander"></option>
                            <option value="Nicaraguan"></option>
                            <option value="Nigerian"></option>
                            <option value="Nigerien"></option>
                            <option value="North Korean"></option>
                            <option value="Northern Irish"></option>
                            <option value="Norwegian"></option>
                            <option value="Omani"></option>
                            <option value="Pakistani"></option>
                            <option value="Palauan"></option>
                            <option value="Panamanian"></option>
                            <option value="Papua New Guinean"></option>
                            <option value="Paraguayan"></option>
                            <option value="Peruvian"></option>
                            <option value="Polish"></option>
                            <option value="Portuguese"></option>
                            <option value="Qatari"></option>
                            <option value="Romanian"></option>
                            <option value="Russian"></option>
                            <option value="Rwandan"></option>
                            <option value="Saint Lucian"></option>
                            <option value="Salvadoran"></option>
                            <option value="Samoan"></option>
                            <option value="San Marinese"></option>
                            <option value="Sao Tomean"></option>
                            <option value="Saudi"></option>
                            <option value="Scottish"></option>
                            <option value="Senegalese"></option>
                            <option value="Serbian"></option>
                            <option value="Seychellois"></option>
                            <option value="Sierra Leonean"></option>
                            <option value="Singaporean"></option>
                            <option value="Slovakian"></option>
                            <option value="Slovenian"></option>
                            <option value="Solomon Islander"></option>
                            <option value="Somali"></option>
                            <option value="South African"></option>
                            <option value="South Korean"></option>
                            <option value="Spanish"></option>
                            <option value="Sri Lankan"></option>
                            <option value="Sudanese"></option>
                            <option value="Surinamer"></option>
                            <option value="Swazi"></option>
                            <option value="Swedish"></option>
                            <option value="Swiss"></option>
                            <option value="Syrian"></option>
                            <option value="Taiwanese"></option>
                            <option value="Tajik"></option>
                            <option value="Tanzanian"></option>
                            <option value="Thai"></option>
                            <option value="Togolese"></option>
                            <option value="Tongan"></option>
                            <option value="Trinidadian or Tobagonian"></option>
                            <option value="Tunisian"></option>
                            <option value="Turkish"></option>
                            <option value="Tuvaluan"></option>
                            <option value="Ugandan"></option>
                            <option value="Ukrainian"></option>
                            <option value="Uruguayan"></option>
                            <option value="Uzbekistani"></option>
                            <option value="Uzbekistani"></option>
                            <option value="Vanuatuan"></option>
                            <option value="Venezuelan"></option>
                            <option value="Vietnamese"></option>
                            <option value="Yemeni"></option>
                            <option value="Zambian"></option>
                            <option value="Zimbabwean"></option>
                          </datalist>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email ID</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="finger-print-outline"></ion-icon>
                            <input type="password" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="key-outline"></ion-icon>
                            <input type="password" id="retype-password" name="retype-password" required>
                            <label for="retype-password">Retype Password</label>
                        </div>
                        <button type="button" style="margin-bottom: 10px;" onclick="showConfirmation()">Submit</button>
                        <button type="reset">Reset</button>
                        </div>
                    </form>
                </div>
                
        <div class="confirmation-box" id="confirmationBox">
            <img id="logo" class="logo" src="./Styles/Images/Logos/ISRO.png">
            <h3>Confirm Your Details</h3>
            <p><strong>First Name:</strong> <span id="confirmFname"></span></p>
            <p><strong>Last Name:</strong> <span id="confirmLname"></span></p>
            <p><strong>Date Of Birth:</strong> <span id="confirmDob"></span></p>
            <p><strong>Qualification:</strong> <span id="confirmQualification"></span></p>
            <p><strong>Contact No:</strong> <span id="confirmContact"></span></p>
            <p><strong>Nationality:</strong> <span id="confirmNationality"></span></p>
            <p><strong>Email ID:</strong> <span id="confirmEmail"></span></p>
            <div class="buttons">
                <button type="button" onclick="submitForm()">Confirm</button>
                <button type="button" onclick="editForm()">Edit</button>
            </div>
        </div>
    
        </section>

    </body>

    <script>
        function showConfirmation() {


            document.getElementById('confirmFname').innerText = document.getElementById('fname').value;
            document.getElementById('confirmLname').innerText = document.getElementById('lname').value;
            document.getElementById('confirmDob').innerText = document.getElementById('dob').value;
            document.getElementById('confirmQualification').innerText = document.getElementById('qualification').value;
            document.getElementById('confirmContact').innerText = document.getElementById('contact').value;
            document.getElementById('confirmNationality').innerText = document.getElementById('nationality').value;
            document.getElementById('confirmEmail').innerText = document.getElementById('email').value;


            document.getElementById('userForm').style.display = 'none';
            document.getElementById('confirmationBox').style.display = 'block';




        }

        function editForm() {
            document.getElementById('confirmationBox').style.display = 'none';
            document.getElementById('userForm').style.display = 'block';
        }

        function submitForm() {
            document.getElementById('userForm').submit();
        }
    </script>
</body>
</html>
