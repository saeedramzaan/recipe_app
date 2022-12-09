<?php

include 'display.php';
$displayObj = new Display();

$cart_items = $displayObj->showAll();
  
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Recipe App</title>

    <link rel="stylesheet" href="style.css">

</head>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</head>

<body style="background-color: #cac4c4;">


    <form method="post" id="formId">
        <div class="center">
            <div class="myTabs" style="width: 100%;">
                <div class="tabsTitle">
                    <a class="tabButton active" onclick='get_week(this)' id="week1">Week 1</a>
                    <a class="tabButton" onclick='get_week(this)' id="week2">Week 2</a>
                    <a class="tabButton" onclick='get_week(this)' id="week3">Week 3</a>
                    <a class="tabButton" onclick='get_week(this)' id="week4">Week 4</a>
                </div>
                <div class="tabsContent">
                    <div class="tabContent">
                        <div class="tabsTitle">

                            <div class="tabButton active">
                                <div class="row d-flex justify-content-center cls">
                                    <input type="hidden" name="getid" id="getid">
                                    <input type="hidden" name="get_week" id="get_week">
                                    <?php
                                                    for ($i = 1; $i <=7; $i++) {

                                                    ?>

                                    <div class="col-sm-1">
                                        <div style="display:flex; flex-direction: column" class="numberCircle">
                                            <span id=<?php echo $i ?> onclick='get_span(this)'>
                                                <?php echo $i ?>
                                            </span>
                                            <input type="checkbox" name="checkId[]" value="<?php echo $i ?>"
                                                id="checkId<?php echo $i?>">
                                        </div>
                                    </div>
                                    <?php }?>

                                </div>

                            </div>

                            <div class="tabButton"></div>
                            <div class="tabButton"></div>
                            <div class="tabButton"></div>
                        </div>

                    </div>
                    <div class="tabContent">
                        <div class="tabsTitle">
                            <div class="tabButton"></div>

                            <div class="tabButton active">
                                <div class="row d-flex justify-content-center cls">

                                    <?php
                                                    for ($i = 8; $i <=14; $i++) {

                                                    ?>

                                    <div class="col-sm-1">
                                        <div style="display:flex; flex-direction: column" class="numberCircle">
                                            <span id=<?php echo $i ?> onclick='get_span(this)'>
                                                <?php echo $i ?>
                                            </span>
                                            <input type="checkbox" name="checkId[]" value="<?php echo $i ?>"
                                                id="checkId<?php echo $i?>">
                                        </div>
                                    </div>
                                    <?php }?>

                                </div>

                            </div>

                            <div class="tabButton"></div>
                            <div class="tabButton"></div>
                        </div>

                    </div>
                    <div class="tabContent">
                        <div class="tabsTitle">
                            <div class="tabButton"></div>
                            <div class="tabButton"></div>
                            <div class="tabButton active">
                                <div class="row d-flex justify-content-center cls">

                                    <?php
                                                    for ($i = 15; $i <=21; $i++) {

                                                    ?>

                                    <div class="col-sm-1">
                                        <div style="display:flex; flex-direction: column" class="numberCircle">
                                            <span id=<?php echo $i ?> onclick='get_span(this)'>
                                                <?php echo $i ?>
                                            </span>
                                            <input type="checkbox" name="checkId[]" value="<?php echo $i ?>"
                                                id="checkId<?php echo $i?>">
                                        </div>
                                    </div>
                                    <?php }?>

                                </div>

                            </div>


                            <div class="tabButton"></div>
                        </div>
                    </div>
                    <div class="tabContent">
                        <div class="tabsTitle">
                            <div class="tabButton cont"></div>
                            <div class="tabButton cont"></div>
                            <div class="tabButton cont"></div>
                            <div class="tabButton active">
                                <div class="row d-flex justify-content-center cls">

                                    <?php
                                                    for ($i = 22; $i <=30; $i++) {

                                                    ?>

                                    <div class="col-sm-1">
                                        <div style="display:flex; flex-direction: column" class="numberCircle">
                                            <span id=<?php echo $i ?> onclick='get_span(this)'>
                                                <?php echo $i ?>
                                            </span>
                                            <input type="checkbox" name="checkId[]" value="<?php echo $i ?>"
                                                id="checkId<?php echo $i?>">
                                        </div>
                                    </div>
                                    <?php }?>

                                </div>

                            </div>



                        </div>
                    </div>

                </div>
            </div>

        </div>
        
        <div class="row">
        
              
            
                <a href="#" class="previous round">&#8249;</a>
                <a href="#" class="next round">&#8250;</a>

                <div class="divDay" id="divDay"></div>


                <button type="submit" class="btn btn-outline-primary mt-3" id="save-project-btn">MARK DAY AS
                    COMPLETE</button>


            
        </div>

    </form>

    <div class="container">
        <div class="row">

            <?php

foreach ($cart_items as $item) {
    ?>

            <div class="col-lg-4">
                <div class="card" style="width: auto;">
                    <h6 style="position: absolute; left:0; top:5px; border-radius: 10px;">
                        <?php echo $item['category']; ?>
                    </h6>
                    <div style="margin-top: 33px;">
                        <div class="btn"
                            style="width:150px; height: 35px;  position: absolute; right:0;  background-color: tomato; margin:10px">
                            120 Minute Total</div>
                        <img class="card-img-top" src="src/image/img.jpg" alt="Card image cap">
                        <div class="card-body">

                            <div class="col-sm-12">
                                <h6 style="font-size:12px;"><b>
                                        <?php echo $item['name']; ?>
                                    </b></h6>
                            </div>

                            <div class="row">

                                <div class="col-md-6 col-lg-3 col-3">

                                    <b style="font-size:x-small;"> Calories </b>
                                    <p> <small>
                                            <?php echo $item['calories']; ?>
                                        </small></p>

                                </div>

                                <div class="col-md-6 col-lg-3 col-3">
                                    <b style="font-size:x-small;"> Fat </b>
                                    <p> <small>
                                            <?php echo $item['fat'] ?>
                                        </small> </p>
                                </div>

                                <div class="col-md-6 col-lg-3 col-3">
                                    <b style="font-size:x-small;"> Protein </b>
                                    <p> <small>
                                            <?php echo $item['protein'] ?>
                                        </small> </p>
                                </div>

                                <div class="col-md-6 col-lg-3 col-3">
                                    <b style="font-size:x-small;"> Net Carbs </b>
                                    <p> <small>
                                            <?php echo $item['netcarbs'] ?>
                                        </small> </p>
                                </div>



                            </div>

                        </div>

                        <div class="card-body">
                            <div class="row">




                                <div class="col-6">
                                    <div class="box">
                                        <img src="src/image/search.png" alt="">
                                        <button class="btn" style="padding-left:20px; width: 135px;">View
                                            Recipe</button>
                                    </div>


                                </div>

                                <div class="col-6" style="display: flex;">


                                    <div class="box">
                                        <img src="src/image/like.png" alt="">
                                        <button class="btn"></button>
                                    </div>

                                    <div class="box" style=" transform: rotate(180deg);">
                                        <img src="src/image/like.png" alt="" style="margin-left: 20px;">
                                        <button class="btn"></button>
                                    </div>

                                    <div class="mid">
                                        <div class="mid-inner">
                                                <button type="submit">&raquo;</button>
                                                <button type="submit">&laquo;</button>
                                        </div>
                                </div>


                                </div>
                            </div>

                      

</div>
</div>
</div>
</div>
</div>

</div>
<?php }?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>


  


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="scripts.js"></script>
</body>

</html>

