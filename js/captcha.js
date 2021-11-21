let code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById("captcha").innerHTML = "";
  let charsArray =
    "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  let lengthOtp = 7;
  let captcha = [];
  for (let i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    let index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  let canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 150;
  canv.height = 50;
  let ctx = canv.getContext("2d");
  ctx.font = "30px Georgia";
  ctx.fillStyle = "#000";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}

function validateCaptcha() {
  if (document.getElementById("cpatchaTextBox").value == code) {
    document.querySelector("#captchaErr").classList.add("d-none");
    return true;
  } else {
    document.querySelector("#captchaErr").classList.remove("d-none");
    return false;
  }
}
createCaptcha();
