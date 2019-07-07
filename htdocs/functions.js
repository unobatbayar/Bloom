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
  if (input in data) document.getElementById("output").innerHTML += "Bloomie: " + "<span class='uk-label uk-label-success'>" + data[input]+ "</span>"+ space;
  else document.getElementById("output").innerHTML += "Bloomie: " + "<span class='uk-label uk-label-success'>" + exceptions[num] + "</span>"+ space;
}
//HashSet
data = {
  "hello" : "Hi, how are you?",
  "change" : "Would you like to change the language?",
  "help" : "Please call: Europe - 112, Africa - 10111, North America - 911, Syria - 999",
  "hi" : "Hello",
  "what" : "Sorry, I don't know",
  "how old are you?" : "42",
  "will google hire me" : "Yes",
  "hi" : "Hello",
  "what" : "Nothing",
  "i am not well": "oh sorry to hear that, <br> can you tell me what is wrong?",
  "i am not feeling well": "sorry to hear that, <br> can you tell me more?",
  "i am bleeding and swollen": "oh no, we suggest that <br> you go visit your nearest doctor",
  "who are you" : "My name is Bloomie and I am your friend <br> to help you through your pregnancy",
  "where am i" : "London",
  "i am bleeding": "oh sorry to hear that, we suggest <br>you go to your nearest clinic",
  "1 + 1" : "2",
  "one plus one" : "two",
  "stop" : "Exiting now...",
  "apple" : "Apple Inc is one of the greatest company",
  "who is john" : "A very old man",
  "how are you?" : "good",
  "ok" : ":)",
  "مرحبا": "كيف حالكم",

};