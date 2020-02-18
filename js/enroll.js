
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
    $.ajax({
        url: 'php/getData.php',
        type: 'POST',
        data: { day: e },
        success: function (data) {
            var json = $.parseJSON(data);
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
                    var y = row.insertCell(-1);
                    y.innerHTML = v;
                    if (c == 5) {
                        y = row.insertCell(-1);
                        if (v != 0) {
                            var btn = document.createElement('input');
                            btn.type = "button";
                            btn.className = "btn btn-primary";
                            btn.value = "Enroll";
                            btn.id = "enroll";
                            btn.onclick = (function () {
                                var t = document.getElementById('Classes').rows[i + 1].cells[0].innerHTML;
                                $.ajax({
                                    url: 'php/enrollCust.php',
                                    type: 'POST',
                                    data: { id: t },
                                    success: function (data) {
                                        if (data == 1) {
                                            var pl = document.getElementById('Classes').rows[i + 1].cells[5];
                                            var num = document.getElementById('Classes').rows[i + 1].cells[5].innerHTML;
                                            pl.innerHTML = num - 1;
                                        }
                                    }
                                });
                            });
                            y.appendChild(btn);
                        }
                        y = row.insertCell(-1);
                        var img = document.createElement('img');
                        img.src = "images/bar.jpg";
                        img.style = "width:100px; height:100px; margin-top:-2px;";
                        y.appendChild(img);
                    }

                    c++;

                });
            });
        }
    });
}
