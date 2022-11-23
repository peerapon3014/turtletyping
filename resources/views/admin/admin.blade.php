<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/user-admin.css">
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
                <div class="sidebar-items ">
                    <div class="sidebar-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <p>User</p>
                </div>
                </a>
                <a href="{{ url('admin') }}">
                    <div class="sidebar-items sidebar-items-active">
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
                    <div><h5>{{$user}}@admin</h5></div>
                        <!-- <div class="content-profile-img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg/800px-Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg"
                                alt="">
                        </div> -->
                </a>
            </div>
        </div>
        <div class="content-page">
        <h1>Admin</h1>
        
        <div><a href="#">
          <!-- <button type="button" class="btn btn-primary">addword
          <i class="fa-sharp fa-solid fa-circle-plus"></i>
          </button> -->
        </a>
        </div>
        <div class="content-table">
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>user</th>
                <th>role</th>
                <th>Created</th>
                <th>Update</th>
                <th>Manage</th>
              </tr>

            </thead>
            <tbody>
            @foreach($admins as $admin)
              <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>@if($admin->is_admin==1)admin
                    @else user
                    @endif
                </td>
                <td>{{$admin->created_at}}</td>
                <td>{{$admin->updated_at}}</td>
                <td>
                  <div>
                    <button class="btn btn-warning" >
                    <a href="{{url('edit-admin/'.$admin->id) }}">
                      <i class="fas fa-edit"></i>
                    </a>
                    </button> 
                    <button class="btn btn-danger">
                    {{-- <a href="/destroy/{{$admin->id}}"> --}}
                      <i class="fas fa-trash"></i>
                    {{-- </a> --}}
                    </button>
                  </div>
                </td>
                @endforeach

            </tbody>
          </table>
        </div>
            <div class="content-add">
         </div>
</div>
</div>
    </div>

</body>

</body>

</html>
