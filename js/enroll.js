
const dayNames = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
function fill() {
    var date = new Date();
    var day = date.getDay();

    for (let i = day - 1; i < day + 6; i++)
        $("#selectDay").append("<option>" + dayNames[i % 7] + "</option>");

}

function passItem(el) {
    document.getElementById('show_button').style.display = 'none';
    var e = document.getElementById(el).value;
    var strSel = "The Value is: " + e;
    alert(strSel);
    var n = 0;
    for (let i = 0; i < 6; i++) {
        if (e == dayNames[i]) {
            n = i + 1;
            break;
        }
    }

    var date = new Date();
    var dayOfMonth = date.getDate();
    var dayOfWeek = date.getDay();
    var day;

    if (n < dayOfWeek) {
        day = dayOfWeek + n - 1;
    } else {
        day = n - dayOfWeek;
    }
    alert("The difference is " + day);
    $.ajax({
        url: 'getData.php',
        type: 'POST',
        data: { days: day },
        success: function (data) {
            var json = $.parseJSON(data);
            //check if json is empty,print no classes available in fancy way


            var tbody = document.createElement('tbody');
            var x = document.getElementById('Classes').appendChild(tbody);
            if ($.trim(json) == '') {
                var row = tbody.insertRow(0);
                var y = row.insertCell(0);
                y.colSpan = "6";
                y.innerHTML = "Unfortunately no classes are available";
            }
            $(json).each(function (i, val) {
                var row = tbody.insertRow(i);
                var c = 0;
                $.each(val, function (k, v) {
                    console.log(k + " : " + v);
                    var y = row.insertCell(-1);
                    y.innerHTML = v;
                    if (c == 4) {
                        y = row.insertCell(-1);
                        if (v != 0) {
                            var btn = document.createElement('input');
                            btn.type = "button";
                            btn.className = "btn btn-primary";
                            btn.value = "Enroll";
                            btn.id = "enroll";
                            btn.onclick = (function () {
                                enroll();
                            });
                            y.appendChild(btn);
                        }
                        y = row.insertCell(-1);
                        var img = document.createElement('img');
                        img.src = "bar.jpg";
                        img.style = "width:50px; height:50px; margin-top:-2px;";
                        y.appendChild(img);
                    }

                    c++;

                });
            });
            // console.log(data); // Inspect this in your console
        }
    });
}

function enroll() {
    console.log("Button Works");
}