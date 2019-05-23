@extends('layouts.app')

<!-- Welcome - Login-SignUp -->
@section('content')
<div class="jumbotron text-center">
  <h1 class="display-4">
    COMP710
    <br> Assessment 1 - Part 2 </h1>
  <p class="lead">Web Application Development using Laravel Framework, <br>This is the functional framework for the BossCuts website.</p>
  <hr class="my-4">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Category</th>
        <th scope="col" class="text-left">Description</th>
        <th scope="col">Link</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Performance</th>
        <td class="text-left">100 users should be able to login into your website at same time.</td>
        <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
      <tr>
        <th scope="row">Security</th>
        <td class="text-left">Website must be safe against common vulnerabilities like:
          <br>
          <ul>
            <li>1) SQL Injections.</li>
            <li>2) Broken Authentication.</li>
            <li>3) XSS and XSRF Vulnerabilities.</li>
          </ul>
        </td>
        <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
      <tr>
        <th scope="row">Testability</th>
        <td class="text-left">Test driven development approach must be followed.
          <br>All major controller functions and views must have a test case.</td>
          <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
    </tbody>
  </table>

  <hr class="my-4">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col" class="text-left">Component</th>
        <th scope="col">Marking</th>
        <th scope="col">Link</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" class="text-left">Authentication and Authorization<br> User roles and accounts.
        </th>
        <td class="text-center">10 marks</td>
        <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
      <tr>
        <th scope="row" class="text-left">Proper Implementation of the MVC architecture.<br> Includes (not limited to):
          <ul>
            <li>Eloquent ORM and Migrations</li>
            <li>Proper use of controller, views and models</li>
          </ul>
        </th>
        <td class="text-center">40 Marks
        </td>
        <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
      <tr>
        <th scope="row" class="text-left">Test Driven Development <br> Use of test cases for major components of your website, like:<br>
          <ul>
            <li>Controller functions and views</li>
          </ul>
        </th>
        <td class="text-center">20 marks</td>
        <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
      <tr>
        <th scope="row" class="text-left">Security and Performance<br> Safety from Injections, XSS and CSRF vulnerabilities.<br>
          <ul>
            <li>(These will be tested by the tutor) </li>
          </ul>

          Performance testing results to be added in your presentation. <br>
          <ul>
            <li>(use JMeter or any performance testing tool.
              <ul>
                <li> (It must handle 100 concurrent users)</li>
              </ul>
            </li>
          </ul>
        </th>
        <td class="text-center">20 Marks</td>
        <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
      <tr>
        <th scope="row" class="text-left">Usability and Design. Includes (not limited to): User friendly design, logic content flow, good navigation, visual appeal
        </th>
        <td class="text-center">10 Marks</td>
        <td><button type="button" class="btn btn-outline-success">Click Here</button></td>
      </tr>
    </tbody>
  </table>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
<!--
<div class="jumbotron text-center">
  <h1>Welcome To Laravel!</h1>
  <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
  <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
-->
@endsection




<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    
  </div>
</div>