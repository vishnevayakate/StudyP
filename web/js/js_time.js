//document.write('Вы запустили скрипт js_time.js');
var now = new Date();
// convert date to a string in UTC timezone format:
//var today = new Date();
//console.log(new Date());
//2020-05-26 13:22:45
//document.getElementById('js_time').innerText=new Date();
document.getElementById('js_time').innerText=now.getFullYear()+'-'+now.getMonth() +'-'+now.getDate()+' '+now.getHours()+':'+now.getMinutes()+':'+now.getSeconds();
// Output: Wed, 21 Jun 2017 09:13:01 GMT