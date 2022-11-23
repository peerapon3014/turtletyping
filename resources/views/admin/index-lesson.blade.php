<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/index-admin.css">
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
        <a href="{{ url('admin-lesson') }}">
        <div class="sidebar-items sidebar-items-active">
          <div class="sidebar-icon">
            <i class="fa-solid fa-book-open"></i>
          </div>
          <p>Lesson</p>
        </div>
        </a>
        <a href="{{ url('user') }}">
        <div class="sidebar-items">
          <div class="sidebar-icon">
            <i class="fa-solid fa-user"></i>
          </div>
          <p>User</p>
        </div>
        </a>
        <a href="{{ url('user') }}">
          <div href="{{ url('user') }}" class="sidebar-items " >
              <div class="sidebar-icon">
                  <i class="fa-solid fa-user-gear" ></i>
              </div>
              <p>Admin</p>
          </div>
      </a>
      </div>


    </div>
    <div class="content">
      @if (session('message'))
        <div class="atert alert-success">{{session('message')}}</div>
      @endif
      <div class="content-navbar">
        <div class="content-search">
          <input type="text" placeholder="Search">
        </div>
        <a href="/dashboard">
        <div class="content-profile">
          <div><h5>{{$user}}@admin</h5></div>
          {{-- <div class="content-profile-img"> --}}
            {{-- <img src="{{asset('/storage/'.$user->profile_photo_path) }}" alt=""> --}}
           {{-- <img src="{{asset('/storage/profile-photos/'.$lessons->profile_photo_path.Auth::user()->image)}}" alt="" >  --}}
          {{-- </div> --}}
          
        </div>
      </a>
      </div>
      <div class="content-page">
        <h1>Word</h1>
        <div class="content-news">
          <div class="content-news-items content-news-head">
            <h1>จำนวนบทเรียนทั้งหมด: {{$countLesson}} บทเรียน</h1>

          </div>
          <div class="content-news-items content-news-sub">
            
            <h1>จำนวนคำทั้งหมด: {{$countWord}} คำ</h1>
          </div>
        </div>
        <div><a href="/add-lesson">
          <button type="button" class="btn btn-primary">Add Lesson
          <i class="fa-sharp fa-solid fa-circle-plus"></i>
          </button>
        </a>
        </div>
        <div class="content-table">
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>name</th>
                <th>content</th>
                <th>Language</th>
                <th>LessonTitle</th>
                <th>Created</th>
                <th>Update</th>
                <th>Manage</th>
              </tr>

            </thead>
            <tbody>
            @foreach($lessons as $lesson)
              <tr>
                <td>{{$lesson->id}}</td>
                <td>{{$lesson->name}}</td>
                <td>{{$lesson->content}}</td>
                <td>{{$lesson->language->lang}}</td>
                <td>{{$lesson->lessontitle->name}}</td>
                <td>{{$lesson->created_at}}</td>
                <td>{{$lesson->updated_at}}</td>
                <td>
                  <div>
                    <a href="{{url('edit-lesson/'.$lesson->id) }}">
                    <button class="btn btn-warning" >
                    
                      <i class="fas fa-edit"></i>
                    </button> 
                    </a>
                    <button class="btn btn-danger">
                    <a href="/destroyLesson/{{$lesson->id}}">
                      <i class="fas fa-trash"></i>
                    </a>
                    </button>
                  </div>
                </td>
                @endforeach

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>

</body>

</html>
