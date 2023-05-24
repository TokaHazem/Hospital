<?php
session_start();
$tel = $_SESSION['phone'];
$review = $_SESSION['review'];
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/css/all.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Question <i class="fas fa-question"></i></th>
                    <th>Reviews</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Are you satisfied with the level of hygiene?</td>
                    <td>
                        <?php
                        switch ($review['q1']) {
                            case '0':
                                echo 'Bad <i class="far fa-frown"></i>';
                                break;
                            case '3':
                                echo 'Good <i class="far fa-smile"></i>';
                                break;
                            case '5':
                                echo 'Very Good <i class="far fa-smile-beam"></i>';
                                break;
                            case '10':
                                echo 'Excellent <i class="far fa-laugh-beam"></i>';
                                break;
                        }

                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Are you satisfied with the prices of services?</td>
                    <td>
                        <?php
                        switch ($review['q2']) {
                            case '0':
                                echo 'Bad <i class="far fa-frown"></i>';
                                break;
                            case '3':
                                echo 'Good <i class="far fa-smile"></i>';
                                break;
                            case '5':
                                echo 'Very Good <i class="far fa-smile-beam"></i>';
                                break;
                            case '10':
                                echo 'Excellent <i class="far fa-laugh-beam"></i>';
                                break;
                        }

                        ?>
                    </td>

                </tr>
                <tr>
                    <td>Are you satisfied with the nursing service?</td>
                    <td>
                        <?php
                        switch ($review['q3']) {
                            case '0':
                                echo 'Bad <i class="far fa-frown"></i>';
                                break;
                            case '3':
                                echo 'Good <i class="far fa-smile"></i>';
                                break;
                            case '5':
                                echo 'Very Good <i class="far fa-smile-beam"></i>';
                                break;
                            case '10':
                                echo 'Excellent <i class="far fa-laugh-beam"></i>';
                                break;
                        }

                        ?>
                    </td>

                </tr>
                <tr>
                    <td>Are you satisfied at the level of doctors?</td>
                    <td>
                        <?php
                        switch ($review['q4']) {
                            case '0':
                                echo 'Bad <i class="far fa-frown"></i>';
                                break;
                            case '3':
                                echo 'Good <i class="far fa-smile"></i>';
                                break;
                            case '5':
                                echo 'Very Good <i class="far fa-smile-beam"></i>';
                                break;
                            case '10':
                                echo 'Excellent <i class="far fa-laugh-beam"></i>';
                                break;
                        }

                        ?>
                    </td>

                </tr>
                <tr>
                    <td>Are you satisfied with the quiet in the hospital?</td>
                    <td>
                        <?php
                        switch ($review['q5']) {
                            case '0':
                                echo 'Bad <i class="far fa-frown"></i>';
                                break;
                            case '3':
                                echo 'Good <i class="far fa-smile"></i>';
                                break;
                            case '5':
                                echo 'Very Good <i class="far fa-smile-beam"></i>';
                                break;
                            case '10':
                                echo 'Excellent <i class="far fa-laugh-beam"></i>';
                                break;
                        }

                        ?>
                    </td>
                </tr>
                <tr class="table-dark">
                    <th>Total Review</th>
                    <td>
                        <?php
                        $sum = 0;
                        $sum = array_sum($review);
                        $percentage = $sum / 20;
                        if ($percentage >= 0.85) {
                            echo 'Excellent <i class="far fa-laugh-beam"></i>';
                        } elseif ($percentage < 0.85 && $percentage >= 0.75) {
                            echo 'Very Good <i class="far fa-smile-beam"></i>';
                        } elseif ($percentage < 0.75 && $percentage >= 0.65) {
                            echo 'Good <i class="far fa-smile"></i>';
                        } elseif ($percentage < 0.65) {
                            echo 'Bad <i class="far fa-frown"></i>';
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        if ($sum < 25) {
            echo '<p style="text-align:center"> <b> We will call you later on this phone :' . $tel . '</b>  </p> ';
        } else {
            echo '<p style="text-align:center"> <b> Many Thanks</b> <i class="far fa-laugh-beam"></i> </p> ';
        }
        session_unset();
        session_destroy();
        ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>