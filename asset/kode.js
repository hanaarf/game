

const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });

         
         $("#SIGNUPFORM").submit( (e) => {
          e.preventDefault();
          var form = $("#SIGNUPFORM").serialize();
          
          $.ajax({
            url : "ajax.php",
            method: 'post',
            data: form,
            success: function(res) {
              if(res === 'success'){
                Swal.fire({
                  icon: 'success',
                  title: 'succes',
                  text: 'Register Successfully',
                  timer: 2000,
                  showConfirmButton: true,
                  confirmButtonColor:'#444444',
                  iconColor: '#444444',
                })
        
                setInterval(function(){
                  location.reload()
                  },2000)
                
        
              }else {
                Swal.fire({
                  icon: 'error',
                  title: 'Something went wrong',
                  text: res,
                  timer: 3000,
                  showConfirmButton: true,
                  confirmButtonColor:'#444444',
                  iconColor: '#444444',
                })
        
              }
                $("#SIGNUPFORM")[0].reset();
                
             }
          })
        })
        
        
        $("#LoginForm").submit( (e) => {
          e.preventDefault();
          
          var form_login = $("#LoginForm").serialize();
          $.ajax({
             url : "ajax.php",
             method: 'POST',
             data: form_login,
             success: function(res) {
                var data = $.parseJSON(res);
                var name = document.querySelector('#usn').value;
                if (data.status == 'success'){
        
                  Swal.fire({
                    icon: 'success',
                    title: 'Login Success',
                    text: 'Nice one',
                    html:
                    '<b>Welcome back, '+ name ,
                    timer: 5000,
                    showConfirmButton: false,
                    didOpen: () => {
                      
                      timerInterval = setInterval(() => {
                        Swal.getHtmlContainer().querySelector('strong')
                        .textContent = (Swal.getTimerLeft() / 1000)
                        .toFixed(0)
                      }, 100)
                    },
                    willClose: () => {
                      clearInterval(timerInterval)
                    }
                  })
                }else if (data.status == 'errors')  {
                  Swal.fire({
                    icon: 'error',
                    title: 'Something Went Wrong',
                    text: 'Fill Out The Form',
                    timer: 3000,
                    showConfirmButton: true,
                  })
                  return false;
                } else {
                  Swal.fire({
                    icon: 'error',
                    title: 'Something Went Wrong',
                    text: 'Your Password Not Match',
                    timer: 3000,
                    showConfirmButton: true,
                  })
                  return false;
                }
        
        
                setInterval(function(){
                location.href = "game.php"
                },5000)
              }
            })
          })
          