<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #FFB6D9;
        }
        
        .container {
            margin-top: 100px;
            background-color: #FFCCFF;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #660000;
            border-color: #000000;
        }
        
        .btn-primary:hover {
            background-color: #003333;
            border-color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>INVENTORY SYSTEM</h1>
    <style>
        .text-center {
            font-family: "Lucida Console", "Courier New", monospace;
            color: #222831; 
            font-size: 50px;
            margin-bottom: 20px;
        }
    </style>
        </div>
        
        <form action="compute.php" method="post">
            <div class="mb-3">
                <label for="productname" class="form-label">Product Name</label>
                <input type="text" name="productname" id="productname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label">Quantity</label>
                <input type="number" name="qty" id="qty" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="out" class="form-label">Out</label>
                <input type="number" name="out" id="out" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Calculate</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
