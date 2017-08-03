function showImages() {
    var i = document.getElementsByTagName('img');
    i[0].style.opacity = 1;
    i[1].style.opacity = 1;
}

function hideImages() {
    var i = document.getElementsByTagName('img');
    i[0].style.opacity = 0;
    i[1].style.opacity = 0;
}

function verify_code() {
    var code = document.getElementById('code').value;
    $.ajax({
        url: "../assets/functions/verify_code.php",
        data: {
            code: code
        },
        type: 'post',
        success: function (output) {
            var e = document.getElementById('code');
            e.style.color = 'white';
            if (output == "red") {
                e.style.backgroundColor = '#cd2626';
            } else {
                e.style.backgroundColor = '#1a8c8c';
                document.getElementById('type').value = output;
            }
        }
    });
}

function verify_form() {
    if (document.getElementById('type').value == 1 || document.getElementById('type').value == 4) {
        document.getElementById('form').action = "assets/functions/verify_registration.php";
        return true;
    }
    else {
        alert("Please check your unique code. It is either incorrect or has already been used. For any discrepencies, please contact UPES ACM/ACM-W Chapter representatives.");
        return false;
    }
}
