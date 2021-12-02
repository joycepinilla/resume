(function () {
  const name = prompt("hi! what's your name?")
  const date = new Date()
  const hour = date.getHours()

  let greeting;
  let bye;

  if (hour >= 5 && hour < 12) {
    greeting = 'good morning,'
    bye = 'enjoy your morning!'
  } else if (hour >= 12 && hour < 18) {
    greeting = 'good afternoon,'
    bye = 'enjoy your afternoon!'
  } else {
    greeting = 'good evening,'
    bye = 'enjoy your night!'
  }

  alert(`${greeting} ${name}! 
  thanks for visiting my page, ${bye}`)
}());