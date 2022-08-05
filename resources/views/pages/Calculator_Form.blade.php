<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link href="{{asset('frontend/a1/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/a1/css/forumcss1.css')}}" rel="stylesheet">


</head>
<body>



<!-- Form HTML Part Start -->

<div class="form-body">
<div class="row">
<div class="form-holder">
  <div class="form-content">
      <div class="form-items">
          <h3>Simple Calculator Form</h3>
          <p>Fill in the data below.</p>
            <div class="box-content">
<form class="requires-validation" action="{{url('/cal')}}" method="post">
{{ csrf_field()}}
<fieldset>
              <!-- Operand A Field -->
              <div class="col-md-12">
                 <input class="form-control" type="text" name="A" placeholder="A Value " required>
              </div>

              <!-- operand B Field -->

              <div class="col-md-12">
                  <input class="form-control" type="text" name="B" placeholder="B Value" required>
              </div>

              <!-- Option select menu for operatot -->

             <div class="col-md-12">
                  <select class="form-control" name="op">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                  </select>
                  
             </div>

             <!-- Orginal Result Insert Page -->


             <div class="col-md-12">
                  <input class="form-control" type="text" name="C" placeholder="C Value" required>
              </div>

               <!-- Submit Button  -->


             <div class="form-button mt-3">

                  <button id="submit" type="submit" class="btn btn-primary">Calculate</button>
              </div>
              </fieldset>
          </form>
      </div>
  </div>
</div>
</div>
    </div>

 <!-- Bootstrap js insert -->

<script src="{{asset('frontend/a1/js/bootstrap.min.js')}}"></script>
</body>
</html>

