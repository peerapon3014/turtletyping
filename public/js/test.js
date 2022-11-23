// for(let i=0; i<document.getElementById('testclick').legth;i++){
//     document.getElementById("testclick").onclick = function(){
//     click += 1;
//     console.log(click);
// }

// }



// timeLeft = 3;

// function countdown() {
// 	timeLeft--;
// 	document.getElementById("time").innerHTML = String( timeLeft );
// 	if (timeLeft > 0) {
// 		setTimeout(countdown, 1000);
// 	}
// };



// if(timeLeft>0){
//     console.log(timeLeft);
//     document.getElementById("testclick").onclick = function(){
//     click += 1;
//     console.log(click);
//     }
// }else{  
//     clearInterval(setTimeout(countdown, 1000));
// }

// setTimeout(countdown, 1000);

/////////////////////////////////////////////////////////


// var img = document.getElementById("img");
// var button = document.getElementById("button");

// var timer = false;
// var count = 0;
// var t;

// button.addEventListener("click", function() {
//     timer = true;
//     count = 0;
//     t = setTimeout(function() {
//         // alert("Clicks on img: " + count);
//         console.log('finish!!!!')

//         $(document).ready(function(){
//             $.ajex({
//                 method:"post",
//                 url:"{{url(/test/create)}}",
//                 data:{
//                     "count":count
//                 }
//             });
//         });



//     }, 10000);
// });

// img.addEventListener("click", function() {
//     if(timer) {
//         count++;
//         console.log("click:"+count);
//     }
// });

/////////////

// $(document).ready(function () {
//     $.ajex({
//         method: "post",
//         url: "{{url(/test/create)}}",
//         data: {
//             "count": 10
//         }
//     });
// });

///////////////////////////////////////////////////////

// let count = 4569;

// $('#button').click(function(e){
//     e.preventDefault();
//     alert("submit");
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         url: "/test/create",
//         method: "post",
//         data: {
//             "_token": "{{ csrf_token() }}",
//             'countclick': count
//         },
//         success:function(result){
//             console.log(result);
//         }
//     });
// });
// jQuery('#button').click(function(e){
//      e.preventDefault();
// });

