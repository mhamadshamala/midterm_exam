<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>My Tickets - Laravel Issue Tracker</title>

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
      integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"
    />

    <!-- Styles -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
      crossorigin="anonymous"
    />

    <style>
      body {
        font-family: "Lato";
      }

      .fa-btn {
        margin-right: 6px;
      }
    </style>
  </head>
  <body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <!-- Collapsed Hamburger -->
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#app-navbar-collapse"
          >
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand" href="http://localhost:8000">
            SupportTicket
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            <li><a href="#">My Tickets</a></li>
            <li><a href="#">Open Ticket</a></li>
            <li class="dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                role="button"
                aria-expanded="false"
              >
                test <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="#"
                    ><i class="fa fa-btn fa-sign-out"></i>Logout</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-ticket"> My Tickets</i>
            </div>

            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Shipping</td>
                    <td>
                      <a href="http://localhost:8000/show_ticket">
                        #8254 - Ticket 1
                      </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-19 07:54:15</td>
                  </tr>
                  <tr>
                    <td>Technical</td>
                    <td>
                      <a href="http://localhost:8000/show_ticket">
                        #2011 - Ticket 2
                      </a>
                    </td>
                    <td><span class="label label-danger">Close</span></td>
                    <td>2021-11-20 07:55:13</td>
                  </tr>
                  <tr>
                    <td>Technical</td>
                    <td>
                      <a href="http://localhost:8000/show_ticket">
                        #4213 - Ticket 3
                      </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-20 08:01:29</td>
                  </tr>
                  <tr>
                    <td>Shipping</td>
                    <td>
                      <a href="http://localhost:8000/show_ticket">
                        #1234 - Task 4
                      </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-22 08:02:21</td>
                  </tr>
                  <tr>
                    <td>Technical</td>
                    <td>
                      <a href="http://localhost:8000/show_ticket">
                        #6334 - Ticket 5
                      </a>
                    </td>
                    <td><span class="label label-danger">Close</span></td>
                    <td>2021-11-23 09:06:18</td>
                  </tr>
                  <tr>
                    <td>Sales</td>
                    <td>
                      <a href="http://localhost:8000/show_ticket">
                        #2123 - Ticket 6
                      </a>
                    </td>
                    <td><span class="label label-success">Open</span></td>
                    <td>2021-11-23 09:06:54</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScripts -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
      integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
