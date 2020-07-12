
alert('hekej');
//Getting member names
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
var member1 = getParameterByName('para1');
var member2 = getParameterByName('para2');
var member3 = getParameterByName('para3');

document.getElementById("param1").innerHTML = member1;
document.getElementById("param2").innerHTML = member2;
document.getElementById("param3").innerHTML = member3;

alert('hekej');


//Getting Leader
document.getElementById("customRadio3").value = member3;

const rbs = document.querySelectorAll('input[name="member1"]');
let selectedValue;
for (const rb of rbs) {
    if (rb.checked) {
        selectedValue = rb.value;
        break;
    }
}

if (selectedValue === member1) {
    document.getElementById("mem2").value = member2;
    document.getElementById("mem3").value = member3;
}
else if (selectedValue === member2) {
    document.getElementById("mem2").value = member1;
    document.getElementById("mem3").value = member3;
}
else if (selectedValue === member3) {
    document.getElementById("mem2").value = member1;
    document.getElementById("mem3").value = member2;
}