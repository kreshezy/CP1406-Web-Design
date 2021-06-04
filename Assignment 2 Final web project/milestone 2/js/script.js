function CheckForm() {
if(lansige.xingming.value == '') {
alert('sorry! Please enter your name!');
lansige.xingming.focus();
return false;}   

if(lansige.dizhi.value == '') {
alert('sorry! Please input your province address!');
lansige.dizhi.focus();
return false;}  

if(lansige.myinformation.value == '') {
alert('Please input your detailed address!');
lansige.myinformation.focus();
return false;}      

if(lansige.shouji.value == '') {
alert('sorry! Please input your mobile phone number!');
lansige.shouji.focus();
return false;}  
var isPhone = /^([0-9]{3,4}-)?[0-9]{7,8}$/;
var isMob= /^0?1[3|4|5|8][0-9]\d{8}$/;
if(isMob.test(lansige.shouji.value)||isPhone.test(lansige.shouji.value)){
    return true;
   }
   else{
 {alert("sorry! Please enter the correct mobile phone number");
lansige.shouji.focus();
return false;}
        return false;
    }  
}
action_page.php