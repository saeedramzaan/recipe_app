// Date active 
 $(document).ready(function () {

    $('span').click(function (e) {

        $('span').removeClass('active1');
        $(this).addClass('active1');
    });
});

// Get Date 
let get_span = (ele) => {

    let li = document.getElementById(ele.id);

    document.getElementById('getid').value = ele.id;
    document.getElementById('divDay').innerHTML = "Day " + ele.id;
}

// Get Week 
let get_week = (ele) => {
    let week = document.getElementById(ele.id);
    document.getElementById('get_week').value = ele.id;
}

// tab code  
$(".tabContent").children(".tabsContent").parent().addClass("submain");

$(".tabsTitle > .tabButton").click(function () {
    var $elemnt = $(this),
        $indis = $(this).index(),
        $tab = $elemnt.siblings(),
        $content = $tab.parent().siblings().children();

    $tab.removeClass("active");
    $elemnt.addClass("active");

    $content.removeClass("active");
    $content.eq($indis).addClass("active");
});

// Save Function 
$("#save-project-btn").click(function (event) {

    event.preventDefault();

    let spanId = $('#getid').val();
    let form = $("#formId");
    let data = {
        checkId: $("#checkId").val(),
        getid: $("#getid").val(),
    };
 
    if(spanId !== ""){
    let checkBox = document.getElementById('checkId' + spanId);
    checkBox.checked = true;
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "route.php",
        type: "POST",
        data: form.serialize(),
        // cache: false,
        dataType: 'json',

        success: function (res) {

            if (res.status == false) {
                $("#save-project-btn").prop('disabled', false);
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: res.message,
                    footer: ''
                })
            } else {
              
                Swal.fire({
                    icon: 'info',
                    title: 'Hey',
                    text: res.message,
                    footer: ''
                })

            }
        },
        error: function (response) {

        }
    });
})