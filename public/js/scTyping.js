const paragraphs = 'about|above|add|after|again|air|all|almost|along|also|always|America|an|and|animal|another|answer|any|are|around|as|ask|at|away|back|be|because|been|before|began|begin|being|below|between|big|book|both|boy|but|by|call|came|can|car|carry|change|children|city|close|come|could|country|cut|day|did|different|do|does|down|each|earth|eat|end|enough|even|every|example|eye|face|family|far|father|feet|few|find|first|follow|food|for|form|found|four|from|get|girl|give|go|good|got|great|group|grow|had|hand|hard|has|have|he|head|hear|help|her|here|high|him|his|home|house|how|idea|if|important|in|Indian|into|is|it|its|it|just|keep|kind|know|land|large|last|later|learn|leave|left|let|letter|life|light|like|line|list|little|live|long|look|made|make|man|many|may|me|mean|men|might|mile|miss|more|most|mother|mountain|move|much|must|my|name|near|need|never|new|next|night|no|not|now|number|of|off|often|oil|old|on|once|one|only|open|or|other|our|out|over|own|page|paper|part|people|picture|place|plant|play|point|put|question|quick|quickly|quite|read|really|right|river|run|said|same|saw|say|school|sea|second|see|seem|sentence|set|she|should|show|side|small|so|some|something|sometimes|song|soon|sound|spell|start|state|still|stop|story|study|such|take|talk|tell|than|that|the|their|them|then|there|these|they|thing|think|this|those|thought|three|through|time|to|together|too|took|tree|try|turn|two|under|until|up|us|use|very|walk|want|was|watch|water|way|we|well|went|were|what|when|where|which|while|white|who|why|will|with|without|word|work|world|would|write|year|you|young|your'.split('|');



const typingText = document.querySelector(".typing-text p"),
inpField = document.querySelector(".wrapper .input-field"),
tryAgainBtn = document.querySelectorAll(".restart button"),
timeTag = document.querySelector(".time span"),
// mistakeTag = document.querySelector(".mistake span"),
wpmTag = document.querySelector(".wpm span"),
accTag = document.querySelector(".acc span b"),
rawTag = document.querySelector(".raw span");


var timer,
maxTime = 0,
maxWords = 0,
timeLeft = maxTime,
charIndex = mistakes = isTyping = mistakesCount = wpm = raw = acc = 0;


for(let i=0; i< document.getElementsByName('mode').length; i++ ){
    
    document.getElementById('time').click();
    document.getElementsByName('mode')[i].onclick = function(){
        if (document.getElementById('time').checked) {
            document.getElementById('optTime').style.display = "flex";
            document.getElementById('optWords').style.display = "none";
            maxWords = 200;
            maxTime = 30;
            document.getElementById('optTime').onchange = function(){
                maxTime = document.getElementById('optTime').value;
                timeTag.innerText = maxTime;
            }
            timeTag.innerText = document.getElementById('optTime').value;
            loadParagraph();
            clearInterval(timer);
            timeLeft = maxTime;
            console.log('time!!');
        }if (document.getElementById('words').checked) {
            document.getElementById('optWords').style.display = "flex";
            document.getElementById('optTime').style.display = "none";
            document.getElementById('optWords')[1].click();
            maxWords = 25;
            maxTime = 800;
            timeLeft = maxTime;
            console.log("maxTime"+maxTime);
            console.log("timeleft"+timeLeft);
            document.getElementById('optWords').onchange = function(){
                maxWords = document.getElementById('optWords').value;
                loadParagraph();
            } 
            timeLeft = maxTime;
            loadParagraph();
            console.log('words!!');
            
        }
        // else{
        //     console.log("what the fuck!?");
        // }
    }
}


function loadParagraph() {
    let prg = '';
    for(let i =0; i < maxWords; i++){
        const randomWord = Math.floor(Math.random() * paragraphs.length);
        prg += paragraphs[randomWord]+' ';
    }
    typingText.innerHTML = "";
    prg.split("").forEach(char => {
        let span = `<span>${char}</span>`
        typingText.innerHTML += span;
    });
    typingText.querySelectorAll("span")[0].classList.add("active");
    document.addEventListener("keydown", () => inpField.focus());
    typingText.addEventListener("click", () => inpField.focus());
}

function initTyping() {
    let characters = typingText.querySelectorAll("span");
    let typedChar = inpField.value.split("")[charIndex];

    if(charIndex < characters.length - 1 && timeLeft > 0) {
        if(!isTyping) {
            timer = setInterval(initTimer, 1000);
            isTyping = true;
        }
        if(typedChar == null) {
            if(charIndex > 0) {
                charIndex--;
                if(characters[charIndex].classList.contains("incorrect")) {
                    mistakes--;
                }
                characters[charIndex].classList.remove("correct", "incorrect");
            }
        } else {
            if(characters[charIndex].innerText == typedChar) {
                characters[charIndex].classList.add("correct");
            } else {
                mistakes++;
                mistakesCount++;
                characters[charIndex].classList.add("incorrect");
            }
            charIndex++;
        }
        characters.forEach(span => span.classList.remove("active"));
        characters[charIndex].classList.add("active");

        // wpm = Math.round(((charIndex - mistakes)  / 5) / (maxTime - timeLeft) * 60);
        // wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
        
        // wpmTag.innerText = wpm;
        // console.log(wpm);
        // mistakeTag.innerText = mistakes;
        // console.log("ifTyping="+wpm);
        // accTag.innerText = ((charIndex - mistakesCount) / charIndex) * 100;
        console.log("mistake:"+mistakes);
        console.log("mistakecount: "+mistakesCount);
        console.log("charIndex:"+charIndex);

        if(document.querySelector('.active').getBoundingClientRect().top > 450){   
            // alert('move!');
            const p = document.getElementById('p');
            const margin = parseFloat(p.style.marginTop || '0em');
            p.style.marginTop = (margin - 1.8 ) + 'em';
        }

    } else {
        clearInterval(timer);
        inpField.value = "";
        // end
        // wpmTag.innerText = wpm;
        // accTag.innerText = ((charIndex - mistakesCount) / charIndex) * 100;
        // console.log("elseTyping="+wpm);
        document.getElementsByClassName('popup')[0].style.display = "flex";
        document.getElementsByClassName('wrapper')[0].style.display = "none";

        console.long(wpm);
            console.long(acc);
            console.long(raw);

    }   
}

function initTimer() {
    if(timeLeft > 0) {
        timeLeft--;
        timeTag.innerText = timeLeft;
        wpm = Math.round(((charIndex - mistakes)  / 5) / (maxTime - timeLeft) * 60);
        wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
        raw = Math.round((charIndex / 5) / (maxTime - timeLeft) * 60);
        wpmTag.innerText = wpm;
        accTag.innerText = (((charIndex - mistakesCount) / charIndex) * 100).toFixed();
        rawTag.innerHTML = raw;
        // console.log("timer="+wpm);
    } else {
        clearInterval(timer);
        // document.getElementsByClassName('popup')[0].style.display = "flex";
        // document.getElementsByClassName('wrapper')[0].style.display = "none";

    }
}

function resetGame() {
    loadParagraph();
    clearInterval(timer);
    document.getElementById('p').style.marginTop = '0';
    timeLeft = maxTime;
    charIndex = mistakes = isTyping = mistakesCount = 0;
    inpField.value = "";
    timeTag.innerText = timeLeft;
    wpmTag.innerText = 0;
    // mistakeTag.innerText = 0;
    accTag.innerText = 0;

    document.getElementsByClassName('popup')[0].style.display = "none";
    document.getElementsByClassName('wrapper')[0].style.display = "flex";
}



loadParagraph();
inpField.addEventListener("input", initTyping);
for (let i = 0; i < tryAgainBtn.length; i++) {
    tryAgainBtn[i].addEventListener("click", resetGame);
  }
