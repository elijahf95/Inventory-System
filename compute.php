<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productname = $_POST['productname'];
    $qty = (int)$_POST['qty'];
    $out = (int)$_POST['out'];

    class Compute {
        public $out;
        public $qty;
        public $productname;

        public function computation($out, $qty, $productname) {
            $this->out = $out;
            $this->qty = $qty;
            $this->productname = $productname;
        }

        public function subtract($num1, $num2) {
            return $num1 - $num2;
        }

        public function displayproduct() {
            return $this->productname;
        }
    }

    $compute = new Compute();
    $compute->computation($out, $qty, $productname); // Initialize the properties
    $balance = $compute->subtract($qty, $out);
    $display = $compute->displayproduct();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #FFB6D9;
        }
        
        .container {
            background-color: #FFCCFF;
            margin-top: 100px;
        }
        
        .title-name {
            font-family: "Lucida Console", "Courier New", monospace;
            color: #222831;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }
        .result-box {
            border-color: #fff;
            text-align: center;
        }
        
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class = "title-name">
        <h1>INVENTORY SYSTEM RESULT</h1>
        </div>


        <?php
        if (isset($balance) && isset($display)) {
            echo "<div class='result-box'>";
            echo "<h2>Product Name: " . htmlspecialchars($display) . "</h2>";
            echo "<h2>Balance: " . htmlspecialchars($balance) . "</h2>";
            echo "</div>";
        } else {
            echo "<div class='result-box'>";
            echo "<h2>No computation results available.</h2>";
            echo "</div>";
        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
