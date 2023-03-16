<div class="background h-75  d-flex justify-content-center align-items-center">
    <div class="container mb-5 pb-5">
      <div class="screen">
        <div class="screen-header">
          <div class="screen-header-left">
            <div class="screen-header-button close"></div>
            <div class="screen-header-button maximize"></div>
            <div class="screen-header-button minimize"></div>
          </div>
          <div class="screen-header-right">
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
            <div class="screen-header-ellipsis"></div>
          </div>
        </div>
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>CONTACT</span>
              <span>US</span>
            </div>
            <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <form method="POST" action="{{route('contactsubmit')}}">
                @csrf
              <div class="app-form-group">
                <input class="app-form-control" type="text" name='name' placeholder="NAME">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" type="email" name='email' placeholder="EMAIL">
              </div>

              <div class="app-form-group message">
                <textarea required class="app-form-control" placeholder="MESSAGE" name='text'  cols="30" rows="10"></textarea>
              </div>
              <div class="app-form-group buttons">
                <button class="app-form-button">CANCEL</button>
                <button class="app-form-button" type="submit" ng-click="showAlert()">SEND</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>