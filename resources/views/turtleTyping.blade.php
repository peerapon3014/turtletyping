<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1920, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>TurtleTyping</title> 
    <link rel="stylesheet" href="{{asset('css/typingStyle.css')}} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script> -->
</head>

<body>


    <header>
        <div class="header">
            <div class="nav">
                <div class="logo">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path
                            d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm16 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm80-176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V144zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM160 336c0-8.8 7.2-16 16-16H400c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V336zM272 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM256 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM368 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM352 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V240zM464 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM448 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16z" />
                    </svg> -->
                    <svg version="1.2" baseProfile="tiny" id="_x31_" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 256 175"
                        xml:space="preserve">
                        <path d="M185,29.7v0.2l15-12.6c-11.4-6.1-23.9-9.5-37.5-9.5s-26.2,3.4-37.1,9.3l15,12.6L185,29.7L185,29.7z M105.1,93.2
	                        c-24.7,0-45,20.3-45,45v4.5l0,0c0.2,9.5,7.9,17,17.4,17s17.2-7.5,17.4-17l0,0v-4.5c0-5.7,4.5-10.1,10.1-10.1
                            c9.7,0,17.6-7.9,17.6-17.6S114.8,93.2,105.1,93.2z M221.9,92.8c-9.7,0-17.6,7.9-17.6,17.6v32.4l0,0c0.4,9.3,7.9,16.8,17.4,16.8
                            s17-7.5,17.4-16.8l0,0v-32.7C239.3,100.5,231.4,92.8,221.9,92.8z M252.7,101.9c0-4.3-1.4-8.5-3.4-12c-2.2,1.6-4.7,2.6-7.7,2.6
                            c4.1,4.9,6.5,11,6.5,17.6v5.5C251.3,111.8,252.7,107,252.7,101.9z M131.7,110.6c0,5.7-1.8,10.7-4.7,15c11.6,2.6,23.5,4.1,35.7,4.1
                            c11.4,0,22.1-1.2,32.7-3.4v-16c0-6.5,2.4-12.6,6.3-17h-76.5C129,98,131.7,103.9,131.7,110.6z M125,93.4L125,93.4c0.2,0,0-0.2,0-0.2
                            V93.4z M245.8,79.6c0-2.4-2-4.7-4.5-4.7h-0.6c-3.4-21.7-15.4-40.6-32.7-52.5l-17.6,14.8c9.7,11.4,16.4,24.1,20.3,37.9h-9.5
                            c-4.3-13-11.4-25.6-21.5-35.9h-32.9c-10.1,10.5-17,22.7-21.5,35.9h-9.5c3.9-13.4,10.3-26,19.9-36.9l-18.5-15.6
                            c-17,12.2-29.4,30.8-32.7,52.5h-1.2c-2.4,0-4.5,2-4.5,4.5c0,2.4,2,4.5,4.5,4.5h157.8C243.8,84.1,245.8,82,245.8,79.6z M81.6,89.5
                            c-4.9-0.6-8.9-4.7-8.9-9.9v-8.9c0-18.7-15-33.9-33.9-33.9c-18.7,0-33.9,15-33.9,33.9v8.9c0,4.9,4.1,8.9,8.9,8.9h24.5
                            c2.2,11.4,8.5,20.7,17.6,27.4C61.1,104.3,70.2,95.2,81.6,89.5z M24.2,64.4c-3,0-5.7-2.4-5.7-5.7c0-3,2.4-5.7,5.7-5.7
                            s5.7,2.4,5.7,5.7C29.8,61.9,27.4,64.4,24.2,64.4z" />
                    </svg>
                    <a href="/turtleTyping"> TurtleTyping</a>
                </div>
                <div class="menu">
                    <ul>
                        <li><button class="a"><a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm16 64h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm80-176c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V144zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zM160 336c0-8.8 7.2-16 16-16H400c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V336zM272 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM256 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM368 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM352 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H368c-8.8 0-16-7.2-16-16V240zM464 128h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16zM448 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V240zm16 80h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H464c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16z" />
                                    </svg></a></button>
                        </li>
                        <li><button class="b"><a href="/lesson"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5V78.6c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C87.5 32 35.1 48.6 9 59.9c-5.6 2.4-9 8-9 14V454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5V73.9c0-6.1-3.4-11.6-9-14C540.9 48.6 488.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11V456c0 11.4 11.7 19.3 22.4 15.5z" />
                                    </svg></a></button>
                        </li>
                        <li><button class="c"><a href="/profile"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                    </svg></a></button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="option">
                <div class="mode">
                    <h4 class="label">mode</h4>
                    <input type="radio" name="mode" id="time" value="time" checked><label for="time"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M176 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h16V98.4C92.3 113.8 16 200 16 304c0 114.9 93.1 208 208 208s208-93.1 208-208c0-41.8-12.3-80.7-33.5-113.2l24.1-24.1c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L355.7 143c-28.1-23-62.2-38.8-99.7-44.6V64h16c17.7 0 32-14.3 32-32s-14.3-32-32-32H224 176zm72 192V320c0 13.3-10.7 24-24 24s-24-10.7-24-24V192c0-13.3 10.7-24 24-24s24 10.7 24 24z" />
                        </svg>time</label>
                    <input type="radio" name="mode" id="words" value="words"><label for="words"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M253.5 51.7C248.6 39.8 236.9 32 224 32s-24.6 7.8-29.5 19.7l-120 288-40 96c-6.8 16.3 .9 35 17.2 41.8s35-.9 41.8-17.2L125.3 384H322.7l31.8 76.3c6.8 16.3 25.5 24 41.8 17.2s24-25.5 17.2-41.8l-40-96-120-288zM296 320H152l72-172.8L296 320z" />
                        </svg></svg>words</label>
                    <select name="" id="optTime">
                        <option value="15">15s</option>
                        <option value="30" selected>30s</option>
                        <option value="60">60s</option>
                        <option value="120">120s</option>
                    </select>
                    <select name="" id="optWords">
                        <option value="15">15</option>
                        <option value="25" selected>25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="diff">
                    <h4 class="label">difficulty</h4>
                    <select name="" id="optdiff">
                        @foreach($diff as $diff)
                        <option value="{{$diff->id}}">{{$diff->diff}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="lang">
                    <h4 class="label">language</h4>
                    <select name="" id="optlang">
                        @foreach($lang as $lang)
                        <option value="{{$lang->id}}">{{$lang->lang}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </header>



    <div class="popup">
        <div class="popupbox">
            <div class="popupcontent">
                <div class="popupcontent_">
                    <div class="wpm">
                        <p>wpm</p>
                        <span>100</span></div>
                    <div class="acc">
                        <p>acc</p>
                        <span><b>100</b>%</span></div>
                    <div class="raw">
                        <p>raw wpm</p>
                        <span>100</span></div>
                    <div class="time_">
                        <p>mode</p>
                        <span><b></b>s</span></div>
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
                    Times : <span>30</span>s
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
    <form>
        @csrf
        <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
        <input type="text" id="inpwpm" name="wpm" value="0" hidden>
        <input type="text" id="inpacc" name="acc" value="0" hidden>
        <input type="text" id="inpraw" name="raw" value="0" hidden>
        <input type="submit" id="submit" value="" hidden>
    </form>



    <script>
    // const paragraphs =
    //     'about|above|add|after|again|air|all|almost|along|also|always|America|an|and|animal|another|answer|any|are|around|as|ask|at|away|back|be|because|been|before|began|begin|being|below|between|big|book|both|boy|but|by|call|came|can|car|carry|change|children|city|close|come|could|country|cut|day|did|different|do|does|down|each|earth|eat|end|enough|even|every|example|eye|face|family|far|father|feet|few|find|first|follow|food|for|form|found|four|from|get|girl|give|go|good|got|great|group|grow|had|hand|hard|has|have|he|head|hear|help|her|here|high|him|his|home|house|how|idea|if|important|in|Indian|into|is|it|its|it|just|keep|kind|know|land|large|last|later|learn|leave|left|let|letter|life|light|like|line|list|little|live|long|look|made|make|man|many|may|me|mean|men|might|mile|miss|more|most|mother|mountain|move|much|must|my|name|near|need|never|new|next|night|no|not|now|number|of|off|often|oil|old|on|once|one|only|open|or|other|our|out|over|own|page|paper|part|people|picture|place|plant|play|point|put|question|quick|quickly|quite|read|really|right|river|run|said|same|saw|say|school|sea|second|see|seem|sentence|set|she|should|show|side|small|so|some|something|sometimes|song|soon|sound|spell|start|state|still|stop|story|study|such|take|talk|tell|than|that|the|their|them|then|there|these|they|thing|think|this|those|thought|three|through|time|to|together|too|took|tree|try|turn|two|under|until|up|us|use|very|walk|want|was|watch|water|way|we|well|went|were|what|when|where|which|while|white|who|why|will|with|without|word|work|world|would|write|year|you|young|your'
    //     .split('|');

    var paragraphs = '@foreach($word as $words){{$words->words}} @endforeach'.split(' ');
    // paragraphs = [];


    $(document).ready(function() {
        $("#optdiff").on('change', function() {
            var lang = $("#optlang").val();
            var diff = $(this).val();
            $.ajax({
                url: "{{route('opt')}}",
                type: "get",
                data: {
                    "diff": diff,
                    "lang": lang
                },
                success: function(data) {
                    var word = data.words;
                    paragraphs = [];
                    for (let i = 0; i < word.length; i++) {

                        paragraphs.push(word[i].words);
                    }

                    loadParagraph();

                }
            });

        });
        $("#optlang").on('change', function() {
            var lang = $(this).val();
            var diff = $("#optdiff").val();
            $.ajax({
                url: "{{route('opt')}}",
                type: "get",
                data: {
                    "diff": diff,
                    "lang": lang
                },
                success: function(data) {
                    var word = data.words;
                    paragraphs = [];
                    for (let i = 0; i < word.length; i++) {

                        paragraphs.push(word[i].words);
                    }

                    loadParagraph();

                }
            });

        });

    });



    // paragraphs.split(' ');
    // console.log(paragraphs);


    const typingText = document.querySelector(".typing-text p"),
        inpField = document.querySelector(".wrapper .input-field"),
        tryAgainBtn = document.querySelectorAll(".restart button"),
        timeTag = document.querySelector(".time span"),
        // mistakeTag = document.querySelector(".mistake span"),
        wpmTag = document.querySelector(".wpm span"),
        accTag = document.querySelector(".acc span b"),
        rawTag = document.querySelector(".raw span"),
        timeTag_ = document.querySelector(".time_ span b");


    var timer,
        maxTime = 0,
        maxWords = 0,
        timeLeft = maxTime,
        charIndex = mistakes = isTyping = mistakesCount = wpm = raw = acc = 0;


    for (let i = 0; i < document.getElementsByName('mode').length; i++) {

        document.getElementById('time').click();
        document.getElementsByName('mode')[i].onclick = function() {
            if (document.getElementById('time').checked) {
                document.getElementById('optTime').style.display = "flex";
                document.getElementById('optWords').style.display = "none";
                document.getElementsByClassName('time')[0].style.display = "flex";
                maxWords = 200;
                maxTime = 30;
                document.getElementById('optTime').onchange = function() {
                    maxTime = document.getElementById('optTime').value;
                    timeTag.innerText = maxTime;
                    timeLeft = maxTime
                    loadParagraph();
                    clearInterval(timer);
                }
                timeTag.innerText = document.getElementById('optTime').value;
                loadParagraph();
                clearInterval(timer);
                timeLeft = maxTime;
                console.log('time!!');

            }
            if (document.getElementById('words').checked) {
                document.getElementById('optWords').style.display = "flex";
                document.getElementById('optTime').style.display = "none";
                document.getElementsByClassName('time')[0].style.display = "none";
                document.getElementById('optWords')[1].click();
                maxWords = 25;
                maxTime = 800;
                timeLeft = maxTime;
                console.log("maxTime" + maxTime);
                console.log("timeleft" + timeLeft);
                document.getElementById('optWords').onchange = function() {
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
        for (let i = 0; i < maxWords; i++) {
            const randomWord = Math.floor(Math.random() * paragraphs.length);
            prg += paragraphs[randomWord] + ' ';
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

            $(document).ready(function() {
                var lang = $("#optlang").val();
                var diff = $("#optdiff").val();
                $.ajax({
                    url: '{{route("create")}}',
                    type: 'post',
                    data: {
                        _token: $("#csrf").val(),
                        user_id: {{$userid}},
                        difficulty_id: diff,
                        language_id: lang,
                        wpm: wpm,
                        acc: acc,
                        raw: raw
                    },
                    success: function(data) {
                        console.log(data);
                    }
                });
            });


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
            timeTag_.innerHTML = document.getElementById('optTime').value;
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
    </script>
</body>

</html>