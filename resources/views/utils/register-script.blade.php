<script>
    $(document).ready(function(){

        function getDataFormRegister(){
            let username = $("#txtUsername").val();
            let email = $("#txtEmail").val();
            let password = $("#txtPassword").val();
            let passwordAgain = $("#txtPasswordAgain").val();

            return { username, email, password, passwordAgain }
        }

        $("#register-btn").click(function(){
            let data = getDataFormRegister();

            $.ajax({
                method: "POST",
                url: "/api/register",
                data: data,
                dataType : 'json',
                success : function(resp){
                    window.location.href = '/login';
                },
                error:function (err) {
                    console.log(err)
                }
            })
        })
    })

</script>