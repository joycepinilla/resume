function EnterName() {
    var name = prompt("hi, what's your name?");
    var isNum = !isNaN(Number(name));
    if (!isNum) {
      alert("thanks for visiting my page, " + name + "! I hope you enjoy your visit :)");
    } else {
      alert("you didn't tell me your name :(");
    }
    return name;
  }
  console.log(EnterName());