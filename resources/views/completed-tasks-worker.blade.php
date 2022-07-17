<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    @include('layouts/include/assets-css')
    <title>Completed Tasks</title>
</head>

    <body class="bg-light">
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
                                        <h3 class="mb-0  text-white">Completed tasks</h3>
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
                                            <h4 class="mb-0">My tasks</h4>
                                        </div>
                                        <div class="icon-shape icon-md bg-light-primary text-primary
                          rounded-2">
                                            <i class="fa-solid fa-list-check fs-4"></i>
                                        </div>
                                    </div>
                                    <!-- project number -->
                                    <div>
                                        <h1 class="fw-bold">12</h1>
    
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                    </div>
                    <!-- row  -->
                    <div class="row mt-6">
                        <div class="col-md-12 col-12">
                            <!-- card  -->
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header bg-white  py-4">
                                    <h4 class="mb-0">Completed tasks</h4>
                                </div>
                                <!-- table  -->
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Name </th>
                                                <th>Status</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Worker</th>
                                                <th>Project</th>
                                                <th>Project Manager</th>
                                                <th>Description</th>
                                                <th>Edit</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>

                                            
                                            @foreach ($task as $t) 
                                                
                                           
                                            <tr>
                                         
                                            <td>{{$t->name}}</td>
                                            <td class="text-primary">{{$t->status}} <i class="fa-solid fa-check"></i></td>
                                            <td>{{$t->startDate}}</td>
                                            <td>{{$t->endDate}}</td>
                                            <td>{{$t->user['name']}}</td>
                                            <td>{{$t->project['name']}}</td>
                                            <td>{{$t->project->user['name']}}</td>
                                            <td>{{substr($t->bio,0,15)."..."}}</td>
                                            <th ><a class="btn btn-primary" href="{{route('task.edit',$t->id)}}">Edit</a></th>
                                          
                                       
                                       
                                            </tr> 
                                           
                                            @endforeach
                                            
                                </tbody>
                                </table> 
                                <br>
                                {{ $task->links() }}
                            </div>
                            <!-- card footer  -->
    
                        </div>
                        <!-- iowejfiowe jofjiewj oiwej oiwej oifwejo ifjweoij fo -->   
                        <br>
    <br>
    <br>
                    </div>
    
    @include('layouts/include/assets-js')
 
</body>

</html>