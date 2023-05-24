<?php
ob_start();
session_start();
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
        <form method="POST">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Question <i class="fas fa-question"></i></th>
                        <th>Bad <i class="far fa-frown"></i></th>
                        <th>Good <i class="far fa-smile"></i></th>
                        <th>Very Good <i class="far fa-smile-beam"></i></th>
                        <th>Excellent <i class="far fa-laugh-beam"></i> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Are you satisfied with the level of hygiene?</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault" value="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault" value="10">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the prices of services?</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault" value="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault" value="10">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the nursing service?</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault" value="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault" value="10">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied at the level of doctors?</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault" value="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault" value="10">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the quiet in the hospital?</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault" value="0">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault" value="3">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault" value="5">
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault" value="10">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"> <button class="btn btn-primary">
                                Send
                            </button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php
    if($_POST){
       $_SESSION['review']=$_POST;
      header('Location: Review.php');
    }
    ob_end_flush();
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>