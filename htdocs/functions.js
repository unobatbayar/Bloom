function Contact() {
  var members = [" Steven Lua", " Larisa Budaeva", " Uno Batbayar", " Leare Song", " Bach Adylbekov"]; 
  var icon = '<span uk-icon="grid"></span>';
  return icon + members;
}

function talk() {
  var input = document.getElementById("input").value;
  input = input.toLowerCase();
  var space = "<br>";
  var exceptions = ["Sorry, please ask again", "Would you like to change the language?",
   "Do you need emergency treatment?", "How are you feeling?", 
   "Please tell me your symptoms", "Please do not worry", "Everything will be fine",
   "Please teach me", "I didn't catch that"]; 
  var num = Math.floor((Math.random() * 5) + 1);

  document.getElementById("input").value = "";

  //User 
  document.getElementById("output").innerHTML += "You: " + "<span class='uk-label'>" + input + "</span>"+ space;

  //Bot
  if (input in data) document.getElementById("output").innerHTML += "Dr. Botson: " + "<span class='uk-label uk-label-success'>" + data[input]+ "</span>"+ space;
  else document.getElementById("output").innerHTML += "Dr. Boston: " + "<span class='uk-label uk-label-success'>" + exceptions[num] + "</span>"+ space;
}
//HashSet
data = {
  "hello" : "Hi, how are you?",
  "change" : "Would you like to change the language?",
  "help" : "Please call: Europe - 112, Africa - 10111, North America - 911, Syria - 999",
  "hi" : "Hello",
  "how are you?" : "good",
  "ok" : ":)",
  "مرحبا": "كيف حالكم",

};