
 
var myVar;
function startTimer() {
  myVar = setInterval(function(){myTimer()},1000);
  timelimit = maxtimelimit;
}
function myTimer() {
  if (timelimit > 0) {
    curmin=Math.floor(timelimit/60);
    cursec=timelimit%60;
    if (curmin!=0) { curtime=curmin+" minutes and "+cursec+" seconds left"; }
              else { curtime=cursec+" seconds left"; }
    $_('timeleft').innerHTML = curtime;
  } else {
    $_('timeleft').innerHTML = 'Out of Time';
    checkAnswer();
  }
  timelimit--;
}


var pos=0, choice, correct = 0, rscore = 0;
var maxtimelimit = 120, timelimit = maxtimelimit;  // 20 seconds per question


/*var questions = [
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
    [ "Which numbers are odd?", "12", "14", "3", "1","A" ],
];*/

var questionOrder = [];
function setQuestionOrder() {
  questionOrder.length = 0;
  for (var i=0; i<questions.length; i++) { questionOrder.push(i); }
  questionOrder.sort(randOrd);   // alert(questionOrder);  // shuffle display order
  
}

function $_(IDS) { return document.getElementById(IDS); }
function randOrd() { return (Math.round(Math.random())-0.5); }
function renderResults(){
  var test = $_("test");
  test.innerHTML = "<h2>You got "+correct+" of "+questions.length+" questions correct</h2>";
  $_("test_status").innerHTML = "Test Completed";
  $_('timeleft').innerHTML = '';
  test.innerHTML += '<button onclick="location.reload()">Re-test</a> ';
  setQuestionOrder();
  correct = 0;
  //clearInterval(myVar);
  return false;
}
function renderQuestion() {
  var test = $_("test");
  $_("test_status").innerHTML = "Question "+(pos+1)+" of "+questions.length;
  if (rscore != 0) { $_("test_status").innerHTML += '<br>Currently: '+(correct/rscore*100).toFixed(0)+'% correct'; }
 console.log(questions);
  var question = questions[0].question;
  var chA = questions[0].A;
  var chB = questions[0].B;
  var chC = questions[0].C;
  var chD = questions[0].D;
  test.innerHTML = "<h3>"+question+"</h3>";
  test.innerHTML += "<label><input type='checkbox' name='choices' value='A'> "+chA+"</label><br>";
  test.innerHTML += "<label><input type='checkbox' name='choices' value='B'> "+chB+"</label><br>";
  test.innerHTML += "<label><input type='checkbox' name='choices' value='C'> "+chC+"</label><br>";
  test.innerHTML += "<label><input type='checkbox' name='choices' value='D'> "+chD+"</label><br><br>";
  test.innerHTML += "<button onclick='checkAnswer()'>Submit Answer</button>";

  //timelimit = maxtimelimit;
  //clearInterval(myVar);
  //startTimer();
}

function checkAnswer(){
  var choices =document.getElementsByName("choices");
  for (var i=0; i<choices.length; i++) {
    if (choices[i].checked) { choice = choices[i].value; }
  }
  rscore++;
    if (choice == questions[0].Answer) { correct++; }
  pos++;  
  //posn = questionOrder[pos];
  if (pos < questions.length) { renderQuestion(); } 
  else { renderResults(); }
}

window.onload = function() {
 setQuestionOrder();
  renderQuestion();
  startTimer(); 
}

