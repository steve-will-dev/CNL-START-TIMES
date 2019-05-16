var el = document.getElementById('timecode');
el.addEventListener('keyup', function () {
    this.value = space(this.value, 2);
})

var el = document.getElementById('timecode1');
el.addEventListener('keyup', function () {
    this.value = space(this.value, 2);
})

var el = document.getElementById('timecode2');
el.addEventListener('keyup', function () {
    this.value = space(this.value, 2);
})

function space(str, after) {
    if (str.length <= 10) {
    after = after || 2;
    var v = str.replace(/[^\dA-Z]/g, ''),
        reg = new RegExp(".{" + after + "}", "g");
    return v.replace(reg, function (a) {
        return a + ':';
    });
} else{
    return a;
}
}
