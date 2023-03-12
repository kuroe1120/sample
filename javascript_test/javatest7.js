var add = function(p1, p2) {
    let p = p1 * p2 / 2;
    return p;
}
console.log(add(4, 5));

(function (q1,q2) {
    var q = q1 * q2 / 2;
    console.log(q);
})(12,11);