<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    <div class="container">
        <form method="POST">
        <div class="row">
            <div class="col-md-6">
                <select class="js-example-basic-multiple form-control" name="n[]" multiple="multiple"  >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="js-example-basic-multiple form-control" name="s[]" multiple="multiple"  >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="js-example-basic-multiple form-control" name="t[]" multiple="multiple"  >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit">Submit</button>
        </form>
        <?php
        
        if(isset($_POST['submit'])){
            $n = $_POST['n'];
            $s = $_POST['s'];
            $t = $_POST['t'];
            echo "<pre>";
            print_r($n);
            echo "</hr>";
            print_r($s);
            echo "</hr>";
            print_r($t);
            echo "</pre>";
        }
        ?>
    </div>
</body>
</html>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            allowClear: true,
            closeOnSelect: false,
            placeholder: "Please select role",
        });
    });
</script>