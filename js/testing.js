let student = {
    name:"Gijsje",
    number:"2",
    age:"18"
};

console.log(`The age of ${student.name} is ${student.age} jaar`);

let pet = {
    name:"Pixel",
    type:"Dog",
    age:4,
    cutenessFactor:10,
    gender:"girl",
    pronoun:"she",
    alive:true,
    hungry:true,
    eat:function () {
        console.log(`Hello im ${this.name}!`);
        if(this.alive) {
            if(this.hungry) {
                console.log(`Please give ${this.name} food, ${this.pronoun} is hungry`);
                this.hungry = false
            } else {
                console.log(`${this.name} is not hungry`);
            }
        }
    }
};

console.log(`My ${pet.type}'s name is ${pet.name} and ${pet.pronoun} is ${pet.age} years old`);

pet.eat();


let dish = {
    name:"pizza",
    toppings:["cheese","salami"],
    scores:[4,5,2.5,2,2,2,10.5,10],
    highestScore:0,
    showName:function() {
        return `Gerecht: ${this.name}`
    },
    showHighestScore:function() {
        return Math.max.apply(null, this.scores)
    },
    showHighestScore2:function() {
        for(let i = 0;  i < this.scores.length; i++){
            if(this.scores[i] > this.highestScore) {
                this.highestScore = this.scores[i]
            }
            return this.scores[i]
        }
    }
};


console.log(dish.showName());
console.log(dish.showHighestScore());
console.log(dish.showHighestScore2());
console.log(dish.highestScore);


const header = document.getElementById("title");
header.innerHTML = "jo waddap";
console.log(header);

const headers =
    document.getElementById("h2");
console.log(headers[0].innerHTML);

const alternativeHeader =
    document.querySelector("#title");
alternativeHeader.innerHTML = "Al mijn asdasd";

const allItems =
    document.getElementsByClassName("bon");

const alternativeItems =
    document.querySelectorAll(".bon");




