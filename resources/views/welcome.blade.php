@extends('page.master')
@section('content')
<div class="row">
  <div class="col-md-12">

  </div>
  <div class="col-md-12">

  </div>
</div>
<div class="row">

    <div class="col-md-12">
            <div class="content text-center">

                          <div class="links">
                            <button onclick="tt()" type="button" class="btn btn-primary btn-lg">
            <span> Login wi Facebook</span>
          </button>

                          </div>
                     </div>


@endsection

@section('js')
          <script language="JavaScript" type="text/javascript">
          window.fbAsyncInit = function() {
              FB.init({
                appId            : '1257729320962377',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.8'
              });
              FB.AppEvents.logPageView();
            };

            (function(d, s, id){
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) {return;}
               js = d.createElement(s); js.id = id;
               js.src = "//connect.facebook.net/en_US/sdk.js";
               fjs.parentNode.insertBefore(js, fjs);
             }(document, 'script', 'facebook-jssdk'));

          function tt() {
            FB.login(processLoginClick, {scope:'public_profile,email,user_friends', return_scopes: true});
          }

                  function processLoginClick (response) {
                      var uid = response.authResponse.userID;
                      var access_token = response.authResponse.accessToken;
                      var permissions = response.authResponse.grantedScopes;
                      var data = { uid:uid,
                                   access_token:access_token,
                                   _token:'{{ csrf_token() }}', // this is important for Laravel to receive the data
                                   permissions:permissions
                                 };
                      postData("{{ url('/login') }}", data, "post");
                  }
                  function postData(url, data, method)
                  {
                      method = method || "post";
                      var form = document.createElement("form");
                      form.setAttribute("method", method);
                      form.setAttribute("action", url);
                      for(var key in data) {
                          if(data.hasOwnProperty(key))
                          {
                              var hiddenField = document.createElement("input");
                              hiddenField.setAttribute("type", "hidden");
                              hiddenField.setAttribute("name", key);
                              hiddenField.setAttribute("value", data[key]);
                              form.appendChild(hiddenField);
                           }
                      }
                      document.body.appendChild(form);
                      form.submit();
                  }


                  </script>

@endsection
