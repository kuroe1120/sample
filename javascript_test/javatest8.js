var a = [];
for (var i= 1; i < 101; i++) {
  a.push(i);
}
let b3 = a.filter(function(a){
    return a % 3 == 0;
});
console.log(b3);

let b5 = a.filter(function(a){
    return a % 5 == 0;
});
console.log(b5);