<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <style>
    #cercle {
        width: 40px;
        height: 40px;
        border-radius: 20px;
        background: green;
    }
    </style>
    <title></title>
</head>

<body>
    <?php $db = new PDO('mysql:host=localhost;dbname=books', 'root', '');

    $stmt = $db->prepare('SELECT  name FROM Place ORDER BY rand() LIMIT 12');

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);?>

    <?php $i=0?>

    <?php foreach ($result as $key => $value): ?>

        <?php if ($i < 7)
        {
            $i++;
        }?>

        <?php if ($i == 7)
        {
            $i=13;
        }?>

        <?php if ($i > 6 && $i<14)
        {
            $i--;
        }?>



        <button type="button" class="btn btn-primary mt-5 ml-5">
            <h1><?php echo $i?></h1>
            <h1><?php  echo $value['name']?></h1>
            <br/>
            <img src="table.png" alt="table" style="height:175px;weight:175px;">
        </button>

    <?php endforeach; ?>

    <br/>
    <div class="tas" style="text-align:center;height:25px;weight:50px;">
        <button type="button" class="btn btn-danger mt-5 ml-5"onclick='window.location.reload(false)' >
            Tirage au sort
        </button>
    </div>

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>
