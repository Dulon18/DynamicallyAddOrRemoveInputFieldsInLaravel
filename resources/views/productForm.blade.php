<!DOCTYPE html>

<html>

<head>

          <title>Add/remove multiple input fields dynamically</title>

          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
                    crossorigin="anonymous">

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>

<body>



          <div class="container">

                    <h2 class=" text-center m-3 fw-bold text-success">Add / <span class="text-danger">Remove</span>
                              Multiple
                              input
                              fields
                              Dynamically
                              with
                              Laravel
                    </h2>

                    <form action="{{ route('storemoreProduct') }}" method="POST">

                              @csrf
                              @if ($errors->any())

                              <div class="alert alert-danger">

                                        <ul>

                                                  @foreach ($errors->all() as $error)

                                                  <li>{{ $error }}</li>

                                                  @endforeach

                                        </ul>

                              </div>

                              @endif



                              @if (Session::has('success'))

                              <div class="alert alert-success text-center">

                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                                        <p>{{ Session::get('success') }}</p>

                              </div>

                              @endif



                              <table class="table table-bordered" id="dynamicTable">

                                        <tr>

                                                  <th class="text-center"> Product Name</th>

                                                  <th class="text-center">Product Qty</th>

                                                  <th class=" text-center">Price</th>

                                                  <th class=" text-center">Action</th>

                                        </tr>

                                        <tr>

                                                  <td><input type=" text" name="addProduct[0][name]"
                                                                      placeholder="Enter your Name"
                                                                      class="form-control" />
                                                  </td>

                                                  <td><input type="text" name="addProduct[0][qty]"
                                                                      placeholder="Enter your Qty"
                                                                      class="form-control" /></td>

                                                  <td><input type="text" name="addProduct[0][price]"
                                                                      placeholder="Enter your Price"
                                                                      class="form-control" /></td>

                                                  <td class="text-center"><button type=" button" name="add" id="add"
                                                                      class="btn btn-success">Add More</button></td>

                                        </tr>

                              </table>



                              <button type="submit" class="btn btn-success">Save</button>

                    </form>

          </div>



          <script type="text/javascript">
          var i = 0;



          $("#add").click(function() {



                    ++i



                    $("#dynamicTable").append('<tr><td><input type="text" name="addProduct[' + i +
                              '][name]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addProduct[' +
                              i +
                              '][qty]" placeholder="Enter your Qty" class="form-control" /></td><td><input type="text" name="addProduct[' +
                              i +
                              '][price]" placeholder="Enter your Price" class="form-control" /></td ><td class="text-center"><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
                    );

          });



          $(document).on('click', '.remove-tr', function() {

                    $(this).parents('tr').remove();

          });
          </script>



</body>

</html>