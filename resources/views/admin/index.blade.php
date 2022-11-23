<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard1</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/index-admin.css">
</head>

<body>
  <div class="page">
    <div class="sidebar">
      <h3>TurtleTyping</h3>

      <div class="sidebar-main">
        <p class="cg">MENU</p>
        <div class="hr"></div>
        <a href="#">
        <div class="sidebar-items sidebar-items-active">
          <div class="sidebar-icon">
            <i class="fas fa-house"></i>
          </div>
          <p>Word</p>
        </div>
        </a>
        <a href="{{ url('admin-lesson') }}">
        <div class="sidebar-items ">
          <div class="sidebar-icon">
            <i class="fa-solid fa-book-open"></i>          
          </div>
          <p>Lesson</p>
         </div>
        </a>
        <a href="{{ url('user') }}">
          <div href="{{ url('user') }}" class="sidebar-items " >
              <div class="sidebar-icon">
                <i class="fa-solid fa-user"></i>             
               </div>
          <p>User</p>
          </div>
      </a>
      </div>
      <a href="{{ url('admin') }}">
      <div class="sidebar-items">
        <div class="sidebar-icon">
          <i class="fa-solid fa-user-gear"></i>
        </div>
        <p>Admin</p>
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
        <a href="/user/profile">
        <div class="content-profile">
        <div><h5>{{$user}}@admin</h5></div>
          <!-- <div class="content-profile-img">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg/800px-Deadpool_2_Japan_Premiere_Red_Carpet_Ryan_Reynolds_%28cropped%29.jpg" alt="">
          </div> -->
        </div>
      </a>
      </div>
      <div class="content-page">
        <h1>Word</h1>
        <div class="content-news">
          <div class="content-news-items content-news-head">
            <h1>จำนวนคำทั้งหมด: {{$countWord}} คำ</h1>


          </div>
          <div class="content-news-items content-news-sub">
            <h1>จำนวนบทเรียนทั้งหมด: {{$countLesson}} บทเรียน</h1>
          </div>
        </div>
        <div><a href="/add-word">
          <button type="button" class="btn btn-primary">Addword
          <i class="fa-sharp fa-solid fa-circle-plus"></i>
          </button>
        </a>
        </div>
        <div class="content-table">
          <table>
            <thead>
              <tr>
                <th>id</th>
                <th>Word</th>
                <th>Difficulty</th>
                <th>Language</th>
                <th>Create By</th>
                <th>Created</th>
                <th>Update</th>
                <th>Manage</th>
              </tr>

            </thead>
            <tbody>
            
            @foreach($words as $word)
              <tr>
                <td>{{$word->id}}</td>
                <td>{{$word->words}}</td>
                <td>{{$word->difficulty->diff}}</td>
                <td>{{$word->language->lang}}</td>
                
                <td>{{$word->created_by}}</td>
                <td>{{$word->created_at}}</td>
                <td>{{$word->updated_at}}</td>
                <td>
                  <div>
                    <button class="btn btn-warning" >
                    <a href="{{url('edit-word/'.$word->id) }}">
                      <i class="fas fa-edit"></i>
                    </a>
                    </button> 
                    <button class="btn btn-danger">
                    <a href="/destroy/{{$word->id}}">
                      <i class="fas fa-trash"></i>
                    </a>
                    </button>
                  </div>
                </td>
                @endforeach

            </tbody>
          </table>
        </div>
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

</body>

</body>

</html>
