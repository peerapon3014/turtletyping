

const words = 'about|above|add|after|again|air|all|almost|along|also|always|America|an|and|animal|another|answer|any|are|around|as|ask|at|away|back|be|because|been|before|began|begin|being|below|between|big|book|both|boy|but|by|call|came|can|car|carry|change|children|city|close|come|could|country|cut|day|did|different|do|does|down|each|earth|eat|end|enough|even|every|example|eye|face|family|far|father|feet|few|find|first|follow|food|for|form|found|four|from|get|girl|give|go|good|got|great|group|grow|had|hand|hard|has|have|he|head|hear|help|her|here|high|him|his|home|house|how|idea|if|important|in|Indian|into|is|it|its|it|just|keep|kind|know|land|large|last|later|learn|leave|left|let|letter|life|light|like|line|list|little|live|long|look|made|make|man|many|may|me|mean|men|might|mile|miss|more|most|mother|mountain|move|much|must|my|name|near|need|never|new|next|night|no|not|now|number|of|off|often|oil|old|on|once|one|only|open|or|other|our|out|over|own|page|paper|part|people|picture|place|plant|play|point|put|question|quick|quickly|quite|read|really|right|river|run|said|same|saw|say|school|sea|second|see|seem|sentence|set|she|should|show|side|small|so|some|something|sometimes|song|soon|sound|spell|start|state|still|stop|story|study|such|take|talk|tell|than|that|the|their|them|then|there|these|they|thing|think|this|those|thought|three|through|time|to|together|too|took|tree|try|turn|two|under|until|up|us|use|very|walk|want|was|watch|water|way|we|well|went|were|what|when|where|which|while|white|who|why|will|with|without|word|work|world|would|write|year|you|young|your'.split('|');

const wordsCount = words.length;
const gameTime = 30 * 1000;
window.timer = null;
window.gameStart = null;

function addClass(el,name){
    el.className += ' '+name;
}
function removeClass(el,name){
    el.className = el.className.replace(name,'')
}

function randomWord(){
    const randomIndex = Math.ceil(Math.random() * wordsCount);
    return words[randomIndex];
}

function formatWord(word){      
    return `<div class="word"><span class="letter">${word.split('').join('</span><span class="letter">')}</span></div>`;
}

function newGame(){
    document.getElementById('words').innerHTML='';
    for(let i = 0; i < 200; i++){
        document.getElementById('words').innerHTML += formatWord(randomWord())
    }
    addClass(document.querySelector(".word"),'current');
    addClass(document.querySelector('.letter'),'current');
    window.gameStart= null;
}

function getWPM(){
    const words = [...document.querySelectorAll('.word')];
    const lastTypedWord = document.querySelector('.word.current');
    const lastTypedWordIndex = words.indexOf(lastTypedWord);
    const typedWords = words.slice(0,lastTypedWordIndex);
    const correctWords = typedWords.filter(word => {
        const letters = [...word.children];
        const incorrectLetters = letters.filter(letter => letter.className.includes('incorrect'));
        const correctLetters = letters.filter(letter => letter.className.includes('correct'));
        return incorrectLetters.length === 0 && correctLetters.length === letters.length
    });
    return correctWords.length / gameTime * 60000;
}

function gameOver(){
    clearInterval(window.timer);
    addClass(document.getElementById('game'),'over');
    const resut = getWPM();
    document.getElementById('time').innerHTML = `WPM: ${getWPM()}`;

}

document.getElementById("game").addEventListener('keyup',ev => {
    const key = ev.key;
    const currentWord = document.querySelector('.word.current')
    const currentLetter = document.querySelector('.letter.current');
    const expected =  currentLetter?.innerHTML || ' ';
    const isLetter =  key.length === 1 && key !== ' ';
    const isSpace = key === ' ';
    const isBackspace = key === 'Backspace';
    const isFirstLetter = currentLetter === currentWord.firstChild;
    const isExtra = document.querySelector('.letter.incorrect.extra');

    if(document.querySelector('#game.over')){
        return;
    }

    console.log({key,expected});

    // countdown time
    if(!window.timer && isLetter) {
        // alert("time start!!!");
        window.timer = setInterval(() => {
            if (!window.gameStart) {
                window.gameStart = (new Date()).getTime();
            }
            const currentTime = (new Date()).getTime();
            const msPassed = currentTime - window.gameStart;
            const sPasssed = Math.round(msPassed / 1000);
            const sLeft = (gameTime / 1000) - sPasssed;
            if(sLeft <= 0){
                gameOver();
                return;
            }
            document.getElementById('time').innerHTML = sLeft + '';
        }, 1000);
    }


    if(isLetter){
        if(currentLetter){
            addClass(currentLetter, key === expected ? 'correct' : 'incorrect' );
            removeClass(currentLetter, 'current');
            if(currentLetter.nextSibling){
                addClass(currentLetter.nextSibling, 'current');
            }   
        }else{
            const incorrectLetter = document.createElement('span');
            incorrectLetter.innerHTML = key;
            incorrectLetter.className = 'letter incorrect extra';
            currentWord.appendChild(incorrectLetter);
        }
    }
    
    if(isSpace){
        if(expected != ' '){
            const letterToInvalidate = [...document.querySelectorAll('.word.current .letter:not(.correct)')];
            letterToInvalidate.forEach(letter => {
                addClass(letter, 'incorrect');
            });
        }
        removeClass(currentWord, 'current');
        addClass(currentWord.nextSibling, 'current');
        if(currentLetter){
            removeClass(currentLetter, 'current');
        }
        addClass(currentWord.nextSibling.firstChild, 'current');
    }

    if(isBackspace){
        if(currentLetter && isFirstLetter){
            removeClass(currentWord,'current');
            addClass(currentWord.previousSibling,'current');
            removeClass(currentLetter,'current');
            addClass(currentWord.previousSibling.lastChild,'current');
            removeClass(currentWord.previousSibling.lastChild,'incorrect');
            removeClass(currentWord.previousSibling.lastChild,'correct');
            // element.remove(currentWord.lastChild,'letter incorrect extra');
        }
        if(currentLetter && !isFirstLetter){
            removeClass(currentLetter,'current');
            addClass(currentLetter.previousSibling,'current');
            removeClass(currentLetter.previousSibling,'incorrect');
            removeClass(currentLetter.previousSibling,'correct');
            // element.remove(currentLetter.lastChild,'letter incorrect extra');
        }
        if(!currentLetter){
            addClass(currentWord.lastChild,'current');
            removeClass(currentWord.lastChild,'incorrect');
            removeClass(currentWord.lastChild,'correct');
            // element.remove(currentWord.lastChild,'letter incorrect extra');
        }
        if(isExtra){
            // const isExtra = document.querySelector('.letter.incorrect.extra');
            // currentWord.removeChild(idocument.querySelector(lastChild,'.letter.incorrect.extra'));
            currentWord.removeChild(isExtra);
        }
    }

    //move line /word
    if(currentWord.getBoundingClientRect().top > 350){
        // alert('move!');
        const words = document.getElementById('words');
        const margin = parseFloat(words.style.marginTop || '0em');
        words.style.marginTop = (margin - 1.85) + 'em';
    }

    // move cursor
    const nextLetter = document.querySelector('.letter.current');
    const nextWord = document.querySelector('.word.current');
    const cursor = document.getElementById('cursor');
    cursor.style.top = (nextLetter || nextWord).getBoundingClientRect().top + 2 + 'px' ;
    cursor.style.left = (nextLetter || nextWord).getBoundingClientRect()[nextLetter ? 'left' : 'right'] + 'px' ;

    

})

document.getElementById('newGameBtn').addEventListener('click',()=>{
    gameOver();
    newGame();
});

newGame();