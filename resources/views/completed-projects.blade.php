<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts/include/assets-css')
    <title>Completed Projects</title>
</head>
<body>
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        @include('layouts/include/navbar')
    
        <!-- Page content -->
        <div id="page-content">
          <div class="header @@classList">
            <!-- navbar -->
            @include('layouts/include/header-navbar')
    
          </div>
          <!-- Container fluid -->
          <div class="bg-primary pt-10 pb-21"></div>
          <div class="container-fluid mt-n22 px-6">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                      <h3 class="mb-0  text-white">Completed Projects</h3>
                    </div>
                    <div>
                      <a href="{{route('adm.project.create')}}" class="btn btn-white">Create New Project</a>
                      
                 
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card ">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                      <div>
                        <h4 class="mb-0">Completed Projects</h4>
                      </div>
                      <div class="icon-shape icon-md bg-light-primary text-primary
                          rounded-2">
                        <i class="bi bi-people fs-4"></i>
                      </div>
                    </div>
                    <!-- project number -->
                    <div>
                      <h1 class="fw-bold">12</h1>
                      <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                    </div>
                  </div>
                </div>
    
              </div>
    
            </div>
            <!-- row  -->
            <div class="row mt-6 mb-6">
              <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                  <!-- card header  -->
                  <div class="card-header bg-white py-4">
                    <h4 class="mb-0">Completed Projects</h4>
                  </div>
                  <!-- table  -->
                  <div class="table-responsive">
                                
                    <table id="example11" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Project Manager</th>
                                <th scope="col">Bio</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                          @foreach ($project as $p)
                              
                         
                            <tr>
                                <td>{{$p->name}}</td>
                                <td class="text-primary">{{$p->status}} <i class="fa-solid fa-check"></i></td>
                                <td>{{$p->startDate}}</td>
                                <td>{{$p->endDate}}</td>
                                <td>{{$p->user['name']}}</td>
                                <td>{{substr($p->bio,0,15)."..."}}</td>
                                <td><a class="btn btn-primary" href="{{route('adm.project.edit',$p->id)}}">Edit</a></td>
                                
                                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$p->id}}">
                                  Delete
                                </button></td>
                                <div class="modal fade" id="staticBackdrop{{$p->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel{{$p->id}}">Delete Project</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        Are you sure you want to delete the project?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a class="btn btn-danger" href="{{route('project.destroy',$p->id)}}">DELETE</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                               {{-- <a class="btn btn-danger" href="{{route('users.destroy',$user->id)}}">DELETE</a> --}}
                            </tr>
                     @endforeach
                        </tbody>
                    </table>
                    {{ $project->links() }}
                    
                </div>
                  <!-- card footer  -->
               
                </div>
    
              </div>
            </div>
   @include('layouts/include/assets-js') 
</body>

</html>