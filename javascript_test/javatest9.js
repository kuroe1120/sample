//課題１
let apple = {
  name: "りんご",
  color: "red",
  weight: 270,
  height: 7.7,
}
let orange = {
  name: "みかん",
  color: "orange",
  weight: 260,
  height: 5.5,
}

let grape = {
  name: "ぶどう",
  color: "purple",
  weight: 375,
  height: 13.4,
}

//課題２

let fruit = [apple, orange, grape];

//課題３

var fweight = [];

for (var i = 0 ; i < fruit.length; i++) {
  fweight.push(fruit[i].weight);
}

let total = fweight.reduce(function(sum, element){
  return sum + element;
});

console.log(total + "g");
