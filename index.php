<?php

include 'display.php';
$displayObj = new Display();

$cart_items = $displayObj->showAll();
  

include 'header.php';
?>

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

                                    <input type="hidden" name="getItems" id="getItems" value="breakfast,lunch,dinner">
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
        
    </form>

    <div class="container" style="padding: 30px 0">

        <div class="row">
            <div class="col">
                <div id="parent">
                    <a href="#" class="previous round oneLine">&#8249;</a>
                    <div class="divDay oneLine" id="divDay">Day</div>
                    <a href="#" class="next round oneLine">&#8250;</a>
                </div>
            </div>

            <div class="col d-flex justify-content-end">
                <button type="submit" class="btn btn-labeled btn-success" id="save-project-btn"><i
                        class="fa fa-check"></i>MARK DAY AS
                    </i>COMPLETE</button>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">

            <?php

foreach ($cart_items as $item) {
    ?>

            <div class="col-lg-4">
                <div class="card" style="width: auto; margin-top: 33px;">
                    <h6 class="category">
                        <?php echo $item['category']; ?>
                    </h6>
                    <div style="margin-top: 33px;">
                        <div class="btn btn_time">
                            <?php echo $item['time']; ?>
                        </div>
                        <img class="card-img-top" src="<?php echo $item['image']; ?>" alt="Card image cap">
                        <div class="card-body">

                            <div class="col-sm-12">
                                <h6 class="d-flex justify-content-center" style="font-size:12px;"><b>
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
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <?php }?>


            <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script type="text/javascript" src="src/scripts.js"></script>


            <style>




            </style>


</body>

</html>