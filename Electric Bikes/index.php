<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Electric Bikes/css/style.css">
        <script src="../Electric Bikes/js/javascript.js"></script>
        <title>Electric Bikes</title>
      </head>
<body>

    <h2 style="text-align:center">Electric Bikes</h2>

    <div class="row">
        <div class="column">
            <img src="../Electric Bikes/image/1.png" style="width:100%" onclick="openModal();currentSlide(1)"
                class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="../Electric Bikes/image/2.png" style="width:100%" onclick="openModal();currentSlide(2)"
                class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="../Electric Bikes/image/3.png" style="width:100%" onclick="openModal();currentSlide(3)"
                class="hover-shadow cursor">
        </div>
        <div class="column">
            <img src="../Electric Bikes/image/4.png" style="width:100%" onclick="openModal();currentSlide(4)"
                class="hover-shadow cursor">
        </div>
    </div>

    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="../Electric Bikes/image/1.png" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="../Electric Bikes/image/2.png" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="../Electric Bikes/image/3.png" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="../Electric Bikes/image/4.png" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>

            <div class="column">
                <img class="demo cursor" src="../Electric Bikes/image/1.png" style="width:100%"
                    onclick="currentSlide(1)" alt="Komaki Ranger electric bike">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Electric Bikes/image/2.png" style="width:100%"
                    onclick="currentSlide(2)" alt="Kalk INK race">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Electric Bikes/image/3.png" style="width:100%"
                    onclick="currentSlide(3)" alt="Silence S02 Low Speed electric scooter">
            </div>
            <div class="column">
                <img class="demo cursor" src="../Electric Bikes/image/4.png" style="width:100%"
                    onclick="currentSlide(4)" alt="Oben Rorr">
            </div>
        </div>
    </div>
    <?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $state = $_POST['state'];
    $question = $_POST['question'];
    
$servername = "localhost";
$username = "root";
$password = "";
$database = "bikes"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("The Server was not connect successfully".mysqli_connect_error());

} 
else {
$sql = "INSERT INTO `info` (`NAME`, `NUMBER`, `STATE`, `QUESTION`) VALUES ('$name', '$number', '$state', '$question');";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("The form was not submit successfully".mysqli_connect_error());
}
}
}
?>
    <div class="form-body ">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Enquiry Form</h3>
                        <p>Fill in the data below.</p>
                        <form class="requires-validation" method="post" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>

                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="number" placeholder="Phone Number"
                                        required>

                                    <div class="col-md-12">
                                        <select class="form-select mt-3" name="state" required>
                                            <option selected disabled value="">State</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                            </option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                        <div class="col-md-12">
                                            <input class="form-control" type="textarea" name="question"
                                                placeholder="Question" required>

                                            <div class="form-button mt-3">
                                                <button id="submit" type="submit"
                                                    class="btn btn-primary">Submit</button>
                                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>