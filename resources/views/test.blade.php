<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <meta name="csrf-token" content="{{csrf_token()}}"> -->
    <style>
        
    </style>
</head>
<body>
    <form action="">
        @csrf
        <input type="text" id="number" name="countclick">
        <input type="submit" id="button">
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
    </form>
    
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous">
    </script> -->
    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>

    <!-- <script src="/js/test.js"></script> -->
    
    <script src="">
        // var count = 114;
        // jQuery(document).ready(function(){
        //     $('#button').click(function(e){
        //         e.preventDefault();
        //         alert("submit");
        //         $.ajaxSetup({
        //             headers: {
        //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //             }
        //         });
        //         $.ajax({
        //             url: "{{url('/test/create')}}",
        //             method: "post",
        //             data: {
        //                 // "_token": "{{ csrf_token() }}",
        //                 countclick: $('#number').val()
        //             },
        //             success:function(result){
        //                 console.log($('#number').val());
        //             },
        //             error: function(){
        //                 alert('error!');
        //             }
        //         });
        //     });
        //     jQuery('#button').click(function(e){
        //          e.preventDefault();
        //     });
            
        // });
        ///////////////////////////////////////////////////////

            // $(document).ready(function(){
            //     console.log('ready');
                $('#button').click(function(e){
                    e.preventDefault();
                    alert("submit");
                    // $.ajaxSetup({
                    //     headers: {
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    //     }
                    // });
                    $.ajax({
                        url: "{{route('test.create')}}",
                        method: "POST",
                        data: {
                            // "_token": "{{ csrf_token() }}",
                            'countclick': $('#number').val();
                        },
                        success:function(result){
                            console.log(result);
                        }
                    });
                });
            // });
        
        //     jQuery('#button').click(function(e){
        //          e.preventDefault();
        //     });

            ////////////////////////////////
    </script>
</body>
</html>