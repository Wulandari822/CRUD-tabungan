<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">

<div class="container wrapper" style="width: 50%;">
    <div class="row cart-head">
        <div class="container">
            <div class="row">
                <p></p>
            </div>
            <div class="row">
                <p></p>
            </div>
        </div>
    </div>
    <div class="row cart-body">
        <form class="form-horizontal" method="POST" action="{{route('index')}}">
            @csrf
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6 ">
              
            </div>


            <div style="text-align: center; justify-items: center;">

                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading"><b> TABUNGAN ONLINE</div>
                    <div class="panel-body">
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                          <center>
                            <div class="span1"></div>
                            <div class="col-md-6 col-xs-12 mt-4">
                                <strong>Money:</strong>
                                <input type="text" id="uang" name="uang" class="form-control"  value="" />
                            </div>
                            <br>
                            <div class="span1"></div>
                            <div class="col-md-6 col-xs-12">
                <label class="visually-hidden" for="inlineFormSelectPref">Select Type</label>
                <select name="action" class="form-select" id="inlineFormSelectPref">
                    <option hidden selected>Choose...</option>
                    <option value="Take">Take Money</option>
                    <option value="Add">Add Money</option>
                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-submit-fix mt-4 ">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


