function changeText() {
    if (document.querySelector("#playground").innerHTML === "it changed!") {
        document.querySelector("#playground").innerHTML = "this is playground";
    }
    else {
        document.querySelector("#playground").innerHTML = "it changed!";
    }
}

function changeColor() {
    if (document.querySelector("#playground").style.color === "") {
        document.querySelector("#playground").style.color = "red";
    }
    else {
        document.querySelector("#playground").style.color = "";
    }
}

function changeBold() {
    if (document.querySelector("#playground").style.fontWeight === "") {
        document.querySelector("#playground").style.fontWeight = "bold";
    }
    else {
        document.querySelector("#playground").style.fontWeight = "";
    }
}

function changeItalic() {
    if (document.querySelector("#playground").style.fontStyle === "") {
        document.querySelector("#playground").style.fontStyle = "italic";
    }
    else {
        document.querySelector("#playground").style.fontStyle = "";
    }
}

function changeUnderline() {
    if (document.querySelector("#playground").style.textDecoration === "") {
        document.querySelector("#playground").style.textDecoration = "underline";
    }
    else {
        document.querySelector("#playground").style.textDecoration = "";
    }
}

function clickMe() {
    var click = window.confirm("Are U Human?");
    if (click === false) {
        document.querySelector("#clickme").innerHTML = "then what r u?";
    }
    else {
        var name = window.prompt("what's your name?");
        var id = window.prompt("your id?");
        document.querySelector("#clickme").innerHTML = "Hello " + name + "<br>Your ID: " + id;
    }
}

function calculate() {
    var num1 = document.querySelector("#num1").value;
    var num2 = document.querySelector("#num2").value;
    var opr = document.querySelector("#operation").options[document.querySelector("#operation").selectedIndex].value;
    document.querySelector("#num3").value = eval(num1 + opr + num2);
}

function reset() {
    document.querySelector("#num1").value = "";
    document.querySelector("#num2").value = "";
    document.querySelector("#num3").value = "";
}

$("h1").css("font-family", "arial");
$(document).keypress(function (event) {
    $("h1").text(event.key);
})
$("h1").on("mouseover", function () {
    $("h1").css("color", "purple");
})

$(document).on("keypress", function (event) {
    console.log(event.key);
})