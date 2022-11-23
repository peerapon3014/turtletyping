<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1920, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>lessonTypingTEST</title>
    <link rel="stylesheet" href="{{asset('css/typingStyle.css')}} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>


    <header>
        <div class="header">
            <div class="nav">
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm16 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm80-176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V144zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM160 336c0-8.8 7.2-16 16-16H400c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V336zM272 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM256 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM368 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM352 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V240zM464 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM448 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16z" />
                    </svg>
                    <a href="/lesson">TurtleTyping</a>
                </div>
                <div class="menu">
                    <ul>
                        <li><button><a href="/turtleTyping"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm16 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm80-176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V144zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM160 336c0-8.8 7.2-16 16-16H400c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V336zM272 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM256 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM368 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM352 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V240zM464 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM448 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16z" />
                                    </svg></a></button>
                        </li>
                        <li><button><a href="/lesson"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C87.5 32 35.1 48.6 9 59.9c-5.6 2.4-9 8-9 14V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V73.9c0-6.1-3.4-11.6-9-14C540.9 48.6 488.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z" />
                                    </svg></a></button>
                        </li>
                        <li><button><a href="/profile"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                    </svg></a></button>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </header>



    <div class="popup">
        <div class="popupbox">
            <div class="popupcontent">
                <div class="popupcontent_">
                    <div class="wpm"><span>100</span></div>
                    <div class="acc"><span><b>100</b>%</span></div>
                    <div class="raw"><span>100</span></div>
                    <div class="time_"><span><b>30</b>s</span></div>
                </div>
                <div class="restart">
                    <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H464c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L386.3 160z" />
                        </svg></button>
                </div>
            </div>

        </div>
    </div>



    <div class="wrapper">
        <input type="text" class="input-field">
        <div class="content-box">
            <div class="content">
                <div class="time">
                    time:<span>30</span>s
                </div>
            </div>
            <div class="typing-text">
                <p id="p"></p>
            </div>
            <div class="restart">
                <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H464c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L386.3 160z" />
                    </svg></button>
            </div>
        </div>
    </div>
    <form action="/turtleTyping/create" method="post">
        @csrf
        <input type="text" id="inpwpm" name="wpm" value="0" hidden>
        <input type="text" id="inpacc" name="acc" value="0" hidden>
        <input type="text" id="inpraw" name="raw" value="0" hidden>
        <input type="submit" id="submit" value="" hidden>
    </form>




    <script>

        

        const paragraphs = '{{$lessonpart->content}}';


        const typingText = document.querySelector(".typing-text p"),
        inpField = document.querySelector(".wrapper .input-field"),
        tryAgainBtn = document.querySelectorAll(".restart button"),
        timeTag = document.querySelector(".time span"),
        // mistakeTag = document.querySelector(".mistake span"),
        wpmTag = document.querySelector(".wpm span"),
        accTag = document.querySelector(".acc span b"),
        rawTag = document.querySelector(".raw span");


        var timer,
        maxTime = 10000,
        maxWords = 100,
        timeLeft = maxTime,
        charIndex = mistakes = isTyping = mistakesCount = wpm = raw = acc = 0;



        function loadParagraph() {
            typingText.innerHTML = "";
            paragraphs.split("").forEach(char => {
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

            if (charIndex < characters.length - 1 && timeLeft > 0) {
                if (!isTyping) {
                    timer = setInterval(initTimer, 1000);
                    isTyping = true;
                }
                if (typedChar == null) {
                    if (charIndex > 0) {
                        charIndex--;
                        if (characters[charIndex].classList.contains("incorrect")) {
                            mistakes--;
                        }
                        characters[charIndex].classList.remove("correct", "incorrect");
                    }
                } else {
                    if (characters[charIndex].innerText == typedChar) {
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
                console.log("mistake:" + mistakes);
                console.log("mistakecount: " + mistakesCount);
                console.log("charIndex:" + charIndex);

                if (document.querySelector('.active').getBoundingClientRect().top > 450) {
                    // alert('move!');
                    const p = document.getElementById('p');
                    const margin = parseFloat(p.style.marginTop || '0em');
                    p.style.marginTop = (margin - 1.8) + 'em';
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

                console.log(wpm);
                console.log(acc);
                console.log(raw);

                document.getElementById('inpwpm').value = wpm;
                document.getElementById('inpacc').value = acc;
                document.getElementById('inpraw').value = raw;
                // document.getElementById('submit').click();



                // $.ajaxSetup({
                //   headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //   }
                // });
                // $.ajax({
                // //   url: "{{url('/turtleTyping/create')}}",
                //   url: "http://127.0.0.1:8000/turtleTyping/create",
                //   method: "post",
                //   data: {
                //     "_token": "{{ csrf_token() }}",
                //     wpm: wpm,
                //     acc: acc,
                //     raw: raw
                //   },
                //   success:function(result){
                //     console.log(result);
                //   }
                // });



            }
        }

        function initTimer() {
            if (timeLeft > 0) {
                timeLeft--;
                timeTag.innerText = timeLeft;
                wpm = Math.round(((charIndex - mistakes) / 5) / (maxTime - timeLeft) * 60);
                wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
                raw = Math.round((charIndex / 5) / (maxTime - timeLeft) * 60);
                acc = (((charIndex - mistakesCount) / charIndex) * 100).toFixed();
                wpmTag.innerText = wpm;
                accTag.innerText = acc;
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
            document.getElementById('submit').click();
        }

        loadParagraph();
        inpField.addEventListener("input", initTyping);
        for (let i = 0; i < tryAgainBtn.length; i++) {
            tryAgainBtn[i].addEventListener("click", resetGame);
        }
    </script>
</body>

</html>