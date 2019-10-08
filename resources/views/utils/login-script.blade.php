<script>
    $(document).ready(function(){

       const getData = () => {
           let username = $('#username').val();
           let password = $('#password').val();

           return { username, password };
       }

       $('#btnLogin').on('click', function (e) {
           e.preventDefault();
           let data = getData();

           if(data.username && data.password){
                $.ajax({
                    type: 'post',
                    url: '/api/login',
                    data: data,
                    success: function(res){
                        if(!res.error){
                            window.location.href = '/admin'
                        }else{
                            alert('Thong tin khong dung')
                        }

                    },
                    error: function(error){
                        console.log('error')
                    }
                })
           }else{
               alert('Vui long nhap thong tin day du')
           }
       })
    })

</script>