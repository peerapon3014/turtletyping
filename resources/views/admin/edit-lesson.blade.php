 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/edit-lesson.css">
</head>

<body>

    <div class="page">

        <div class="sidebar">
            <h3>TurrleTyping</h3>

            <div class="sidebar-main">
                <p class="cg">MENU</p>
                <div class="hr"></div>
                <a href="{{ url('admin-word') }}">
                    <div class="sidebar-items ">
                        <div class="sidebar-icon">
                            <i class="fas fa-house"></i>
                        </div>
                        <p>Word</p>
                    </div>
                </a>
                <div class="sidebar-items sidebar-items-active">
                    <div class="sidebar-icon">
                        <i class="fas fa-house"></i>
                    </div>
                    <p>Lesson</p>
                </div>
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

            


        </div>
        <div class="content">

            <div class="content-navbar">
                <div class="content-search">
                    <input type="text" placeholder="Search">
                </div>
                <div class="content-profile">

                    <!-- <div class="content-profile-img">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg/800px-Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg"
                            alt="">
                    </div> -->
                </div>
            </div>
            <div class="content-page">
                @if (session('message'))
                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                @endif
                <div class="card-header mb-5">
                    <h2>แก้ไขบทเรียน</h2>
                    <div class="card-body mt-4 ">
                    <div class="card-body mt-4 ">
                        <form action="{{ url('/update-lesson/'.$lessons->id) }}" method="post">
                            @csrf
                            @method("PUT") 

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">ชื่อบทเรียน</label>
                                    <input type="text" class="form-control mt-1" id="inputEmail4" value="{{$lessons->name}}" name="name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 mt-3" >
                                    <label for="inputCity">Content</label>
                                    <textarea type="textarea" class="form-control mt-1" id="inputCity" rows="4" name="content">{{$lessons->content}}</textarea>
                                </div>
                                <div class="form-group col-md-6 mt-3">
                                    <label for="inputState">ภาษา</label>
                                    <select id="inputState" class="form-control mt-1" name="language_id" values="{{$lessons->language_id}}">
                                        <option value="1" @if($lessons->language_id==1)selected @endif >ไทย</option>
                                        <option value="2" @if($lessons->language_id==2)selected @endif>อังกฤษ</option>
                                    </select>&nbsp&nbsp
                                    <label for="inputState">&nbsp&nbsp&nbsp&nbspบทเรียน</label>
                                    <input type="number" class="form-control mt-1" id="inputAddress2"
                                    name="lessontitle_id" value="{{$lessons->lessontitle_id}}" min=1 max=20 style="width:300px" required>
                                </div>                      
                            </div>      
                            <input type="submit" class="btn btn-primary mt-3" value="บันทึก">    
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