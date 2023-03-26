let count = 1;

var increase = document.querySelector('#increase');
var decrease = document.querySelector('#decrease');

increase.onclick = function(){
    count++;
    document.querySelector(".quantity-text").innerHTML = count;
}

decrease.onclick = function(){
    count--;
    if(count < 1){
        count = 1;
    }
    document.querySelector(".quantity-text").innerHTML = count;
}