@extends('layouts.default')

@section('title' , 'Homepage')

@section('content')
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Information</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="name" class="form-control" id="exampleInputName" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <label for="exampleInputBirthday">Birthday</label>
                  <br>
                  <input type="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputAge">Age</label>
                    <input type="age" class="form-control" id="exampleInputAge" placeholder="Enter your age">
                </div>
                <div class="form-group">
                    <label for="exampleInputGender">Gender</label>
                    <br>
                    <input type="radio" id="gender_b" name="gender" value="ชาย">
                    <label for="gender_b">Male</label>
                    <input type="radio" id="gender_g" name="gender" value="หญิง">
                    <label for="gender_g">Female</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Picture input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose picture</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputAdress">Address</label>
                    <input type="address" class="form-control" id="exampleInputAdress" placeholder="Enter your address">
                </div>
                <div class="form-group">
                    <label for="exampleInputColor">Color</label>
                    <select id="colors" class="form-control" name="colors" size="1">
                        <option value="none">None</option>
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="red">Red</option>
                        <option value="violet">Violet</option>
                        <option value="blue">Blue</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputMusic">Music</label>
                    <select id="music" class="form-control" name="music" size="1">
                        <option value="none">None</option>
                        <option value="pop">Pop</option>
                        <option value="jazz">Jazz</option>
                        <option value="classic">Classic</option>
                        <option value="randb">R&B</option>
                        <option value="hiphop">Hip hop</option>
                    </select>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
@endsection
