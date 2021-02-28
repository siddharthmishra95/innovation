@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">



        <section class="content">

            <!-- Basic Forms -->
             <div class="box">
               <div class="box-header with-border">
                 <h4 class="box-title">Update User</h4>

               </div>
               <!-- /.box-header -->
               <div class="box-body">
                 <div class="row">
                   <div class="col">
                       <form method="POST" action=" {{ route('users.update', $editData->id)}} ">
                        @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>User Role <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="usertype" id="select" required class="form-control">
                                                        <option value="" selected="" disabled="">Select Role</option>
                                                        <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected" : "") }} >Admin</option>
                                                        <option value="Team Lead" {{ ($editData->usertype == "Team Lead" ? "selected" : "") }} >Team Lead</option>
                                                        <option value="Recruiter"  {{ ($editData->usertype == "Recruiter" ? "selected" : "") }} >Recruiter</option>
                                                        <option value="Accounts"  {{ ($editData->usertype == "Accounts" ? "selected" : "") }} >Accounts</option>
                                                        <option value="HR"  {{ ($editData->usertype == "HR" ? "selected" : "") }} >HR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!----End Col-md-6-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>User Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" value=" {{ $editData->name }} " required="" >
                                                </div>

                                            </div>
                                        </div>
                                    </div><!----End Row------>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>User Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" value=" {{ $editData->email }} " class="form-control" required="" >
                                                </div>

                                            </div>
                                        </div> <!----End Col-md-6-->
                                        <div class="col-md-6">

                                        </div>
                                    </div><!----End Row------>

                                </div>
                            </div>

                           <div class="text-xs-right">

                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">

                           </div>
                       </form>

                   </div>
                   <!-- /.col -->
                 </div>
                 <!-- /.row -->
               </div>
               <!-- /.box-body -->
             </div>
             <!-- /.box -->

           </section>


    </div>
</div>

@endsection
