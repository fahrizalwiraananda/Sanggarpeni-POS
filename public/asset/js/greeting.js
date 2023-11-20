var myDate = new Date();
var hrs = myDate.getHours();

var greet;

if (hrs < 4)
greet = 'Waktunya Istirahat';
else if (hrs >= 4 && hrs <= 11)
greet = 'Selamat Pagi';
else if (hrs >= 11 && hrs <= 15)
greet = 'Selamat Siang';
else if (hrs >= 15 && hrs <= 17)
greet = 'Selamat Sore';
else if (hrs >= 17 && hrs <= 24)
greet = 'Selamat Malam';

document.getElementById('greetings').innerHTML = greet;
