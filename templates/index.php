<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Task4</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 col-sm-offset-6 col-md-6 col-md-offset-2 main">
            <h1 class="page-header">Table</h1>
            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                      <h4>MYSQL</h4>
                    <span class="text-muted">table</span>
                </div>
            </div>
            <table class="table-bordered">
                    <tr>
                        <td>key</td>
                        <td>data </td>
                    </tr>
                <?foreach($allRes as $val):?>
                    <tr>
                        <td><?echo $val->key?></td>
                        <td><?echo $val->data?></td>
                    </tr>
                <?endforeach;?>
            </table>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->

</body>
</html>
