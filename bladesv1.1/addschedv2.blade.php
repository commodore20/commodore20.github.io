<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon-16x16.png"
    />
    <link rel="manifest" href="images/site.webmanifest" />
    <link rel="stylesheet" href="css/simple-sidebar.css" />
    <link rel="stylesheet" href="css/globalstyle.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Stylesheet font montserrat-->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <!--New stylesheet Rubik font-->
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap"
      rel="stylesheet"
    />
    <!-- Poppins font-->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Bootstrap CDN CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!-- Do Not forget to Copy the Script  -->

    <title>MeDPulse | Add Slots</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <form action="">
            <div class="table-responsive">
              <table class="table table-bordered" id="item_table">
                <tr>
                  <th>Day</th>
                  <th>Time</th>
                  <th>
                    <button
                      type="button"
                      name="add"
                      class="btn btn-success btn-sm add"
                    >
                      <span class="fa fa-plus"></span>
                    </button>

                    <!-- <select
                      name="day_available[]"
                      class="form-control day_available"
                      ><option value="">Select Day</option
                      ><option value="Monday">Monday</option
                      ><option value="Tuesday">Tuesday</option
                      ><option value="Wednesday">Wednesday</option
                      ><option value="Thursday">Thursday</option
                      ><option value="Friday">Friday</option></select
                    > -->
                    <!-- <select name="start_time[]" class="form-control start_time"
                      ><option value="1">8:00-8:30</option
                      ><option value="2">9:00-9:30</option
                      ><option value="3">10:00-10:30</option></select
                    > -->
                  </th>
                </tr>
              </table>
              <div class="text-center">
                <button class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Your Scripts here-->
    <!-- Scripts must always be below after the content to avoid laggy loading-->

    <!--Fullcalendar JS-->
    <script src="plugins/fullcalendar-4.4.2/packages/core/main.js"></script>
    <script src="plugins/fullcalendar-4.4.2/packages/daygrid/main.js"></script>
    <script src="plugins/fullcalendar-4.4.2/packages/bootstrap/main.min.js"></script>

    <!-- Timegrid and List JS-->
    <script src="plugins/fullcalendar-4.4.2/packages/timegrid/main.min.js"></script>
    <script src="plugins/fullcalendar-4.4.2/packages/list/main.min.js"></script>
    <!-- Interaction JS-->
    <script src="plugins/fullcalendar-4.4.2/packages/interaction/main.min.js"></script>
    <!-- Sweetalert CDN JS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- JQuery JS-->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <!-- Popper JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS-->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script>
      $(document).ready(function () {
        $(document).on("click", ".add", function () {
          var html = "";
          html += "<tr>";
          html +=
            '<td> <select name="day_available[]" class="form-control day_available"><option value="">Select Day</option><option value="Monday">Monday</option><option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option></select></td>';
          html +=
            '<td> <select name="start_time[]" class="form-control start_time"><option value="">Select Time</option><option value="1">8:00-8:30</option><option value="2">9:00-9:30</option><option value="3">10:00-10:30</option></select></td>';
          html +=
            '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fa fa-minus"></span></button></td></tr>';
          $("#item_table").append(html);
        });

        $(document).on("click", ".remove", function () {
          $(this).closest("tr").remove();
        });

        $("#insert_form").on("submit", function (event) {
          event.preventDefault();
          var error = "";
          $(".day_available").each(function () {
            var count = 1;
            if ($(this).val() == "") {
              error += "<p>Enter Item Name at " + count + " Row</p>";
              return false;
            }
            count = count + 1;
          });

          $(".start_time").each(function () {
            var count = 1;
            if ($(this).val() == "") {
              error += "<p>Enter Item Quantity at " + count + " Row</p>";
              return false;
            }
            count = count + 1;
          });

          $(".item_unit").each(function () {
            var count = 1;
            if ($(this).val() == "") {
              error += "<p>Select Unit at " + count + " Row</p>";
              return false;
            }
            count = count + 1;
          });
          var form_data = $(this).serialize();
          if (error == "") {
            $.ajax({
              url: "insert.php",
              method: "POST",
              data: form_data,
              success: function (data) {
                if (data == "ok") {
                  $("#item_table").find("tr:gt(0)").remove();
                  $("#error").html(
                    '<div class="alert alert-success">Item Details Saved</div>'
                  );
                }
              },
            });
          } else {
            $("#error").html(
              '<div class="alert alert-danger">' + error + "</div>"
            );
          }
        });
      });
    </script>
  </body>
</html>
