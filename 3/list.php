<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' type="text/css" href="css/css.css">

    <title>Document</title>
</head>

<body>
    <?php $json = file_get_contents('./json.json');
        $object = json_decode($json);

    ?>
    <div class="container">
        <div class="row">
            <?php foreach($object as $key=>$val){
                        for($i=1;count($val)>$i;$i++){
                    ?>


            <div class="col-md-3">
                <img align="center" src="<?=$val[$i]->img;?>" class="img-fluid">
                <h6 style='font-size: 12px;'><?=$val[$i]->name?></h6>
                <span class='price'><?=$val[$i]->price;?> &#8399;</span>
                <div>
                    <img class="img" src='images/button.png' class="btn btn-primary" data-toggle="modal"
                        data-target="#exampleModalLong">
                </div>
            </div>

            <?php
             }
            }?>
        </div>
    </div>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Заказать</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id='form' method="post" action='post.php'>
                        <label>Имя-<input name='names' type='text'></label>
                        <label>Телефон-<input type="text" name='call'></label>
                        <label>Email-<input type='email' name='email'></label>
                        <label>Название товара-<input type="text" name='prodct'></label>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="submit" name='posting' class="btn btn-primary">Заказать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>


</html>