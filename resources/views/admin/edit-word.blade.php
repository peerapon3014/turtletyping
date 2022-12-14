<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/addword.css">
</head>

<body>

    <div class="page">

        <div class="sidebar">
            <h3>TurtleTyping</h3>

            <div class="sidebar-main">
                <p class="cg">MENU</p>
                <div class="hr"></div>
                <a href="{{url('admin-word') }}">
                    <div class="sidebar-items sidebar-items-active"  > 
                        <div class="sidebar-icon">
                            <i class="fas fa-house"></i>
                        </div>
                        <p>Word</p>
                    </div>
                </a>
                <a href="{{ url('admin-lesson') }}">
                <div class="sidebar-items " >
                    <div class="sidebar-icon">
                        <i class="fas fa-house"></i>
                    </div>
                    <p>Lesson</p>
                    </div>
                </a>
                <div class="sidebar-items">
                    <div class="sidebar-icon">
                        <i class="fas fa-house"></i>
                    </div>
                    <p>Admin</p>
                </div>
                <div class="sidebar-items">
                    <div class="sidebar-icon">
                        <i class="fas fa-house"></i>
                    </div>
                    <p>User</p>
                </div>
            </div>

        <script>  
            var e = document.getElementById("diff");
            var valued = e.value;
            var text = e.options[e.selectedIndex].text;
        </script>  
        </div>
        <div class="content">

            <div class="content-navbar">
                <div class="content-search">
                    <input type="text" placeholder="Search">
                </div>
                <div class="content-profile">
                <a href="/user/profile">
                    <!-- <div class="content-profile-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg/800px-Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg" alt="">
                    </div> -->
                    {{-- <div><h5>{{$user}}@admin</h5></div>  --}}
                </a>
                </div>
            </div>
            <div class="content-page">
                @if (session('message'))
                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                @endif
                <div class="card-header mb-5">
                    <h2>Add word</h2>
                    <div class="card-body mt-4 ">
                        <form action="{{ url('update-word/'.$words->id) }}" method="post">
                            @csrf
                            @method("PUT") 
                            <p>&nbsp ??????: <input type="text" name="words" class="from-control" placeholder=""
                                    required value ="{{$words->words}}">&nbsp&nbsp&nbsp

                                ?????????????????????: <select id="diff" class="form-select form-select-sm" name="diff"
                                            aria-label=".form-select-sm example" >{{$words->difficulties_id}} 
                                            <option value="1" @if($words->difficulties_id==1)selected @endif >????????????</option>
                                            <option value="2" @if($words->difficulties_id==2)selected @endif>?????????????????????</option>
                                            <option value="3" @if($words->difficulties_id==3)selected @endif>?????????</option>
                                         </select>&nbsp&nbsp&nbsp
                                ????????????: <select class="form-select form-select-sm" name="language"
                                    aria-label=".form-select-sm example"  >
                                    <!-- <option selected>???????????????????????????</option> -->
                                    <option value="1" @if($words->languages_id==1)selected @endif>?????????</option>
                                    <option value="2" @if($words->languages_id==2)selected @endif>??????????????????</option>
                                </select>
                               
                            </p>
                            <input class="btn btn-primary" type="submit" value="update">
                        </form>
                    </div>
                </div>
                    <div class="content-add">

                    </div>


                </div>
            </div>

</body>

</body>

</html>