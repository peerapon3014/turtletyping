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
    <link rel="stylesheet" href="/css/user-admin.css">
</head>

<body>
    <div class="page">
        <div class="sidebar">
            <a href="{{url('/turtleTyping')}}"><h3>TurrleTyping</h3></a>

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
                <a href="{{ url('admin-lesson') }}">
                <div class="sidebar-items ">
                    <div class="sidebar-icon">
                    <i class="fas fa-book-open"></i>
                    </div>
                    <p>Lesson</p>
                </div>
                </a>
                <a href="{{ url('user') }}">
                <div class="sidebar-items sidebar-items-active">
                    <div class="sidebar-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <p>User</p>
                </div>
                </a>
                <a href="{{ url('admin') }}">
                    <div class="sidebar-items">
                        <div class="sidebar-icon">
                            <i class="fas fa-user-gear"></i>
                        </div>
                        <p>Admin</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="content">
            <div class="content-navbar">
                <div class="content-search">
                    <input type="text" placeholder="Search">
                </div>
                <a href="{{url('user/profile')}}">
                    <div class="content-profile">
                    {{-- <div><h5>{{$users}}@admin</h5></div> --}}
                        <!-- <div class="content-profile-img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg/800px-Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg"
                                alt="">
                        </div> -->
                </a>
            </div>
        </div>
        <div class="content-page">
        <h1>EditUser</h1>
        
        <div><a href="#">
          <!-- <button type="button" class="btn btn-primary">addword
          <i class="fa-sharp fa-solid fa-circle-plus"></i>
          </button> -->
        </a>
        </div>
        <div class="content-table">
            <form action="{{ url('update-user/'.$users->id) }}" method="post">
                @csrf
                @method("PUT") 
                <table>
                     <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>role</th>
                        
            
                        </tr>

                    </thead>
                    <tbody>
                
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>
                                <input type="text" name="name" class="from-control" placeholder=""
                                required value ="{{$users->name}}" >
                            </td>
                            <td>
                                <input type="text" name="email" class="from-control" placeholder=""
                                required value ="{{$users->email}}" >
                            </td>
                            <td>
                                <select class="form-select form-select-sm" name="role"
                                    aria-label=".form-select-sm example"  >
                                    <!-- <option selected>เลือกภาษา</option> -->
                                    <option value="0" @if($users->is_admin==0)selected @endif>User</option>
                                    <option value="1" @if($users->is_admin==1)selected @endif>Admin</option>
                                </select>
                            </td>
                    </tbody>
          </table>
          <input class="btn btn-primary" type="submit" value="Update">
        </form>
        </div>
            <div class="content-add">
         </div>
</div>
</div>
    </div>

</body>

</body>

</html>
