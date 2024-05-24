<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Seat Reservation</title>
    <link rel="stylesheet" href="sstyle.css">
</head>
<body>
    <div class="container">
        <div class="header">
        </div>
        <div class="screen"></div>
        <div class="seats">
            <?php
                $num_rows = 5;
                $num_columns = 10;
                $seat_status = array_fill(0, $num_rows, array_fill(0, $num_columns, ""));

                if (isset($_POST['reservations'])) {
                    $reservations = json_decode($_POST['reservations'], true);
                    // foreach ($reservations as $row => $cols) {
                    //     foreach ($cols as $col) {
                    //         $seat_status[$row][$col] = "red"; // Change the seat status to "red"
                    //     }
                    // }
                }

                for ($row = 0; $row < $num_rows; $row++) {
                    echo "<div class='seat-row'>";
                    for ($col = 0; $col < $num_columns; $col++) {
                        $seat_class = $seat_status[$row][$col] != "" ? $seat_status[$row][$col] : "available";
                        echo "<button class='seat $seat_class' data-row='$row' data-col='$col'></button>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </div>
    <script src="sscript.js"></script>
</body>
</html>
