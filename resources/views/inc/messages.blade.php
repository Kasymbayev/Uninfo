@if(session()->has('success'))
    <script type="text/javascript">
        $(function(){
            alertify.set('notifier','position', 'top-center');
            alertify.notify(" {!! session()->get('success')  !!}", 'success').setHeader('Успех');
            alertify.success("{!! session()->get('success')  !!}");
        });
    </script>

@elseif(session()->has('error'))
    <script type="text/javascript">
        $(function(){
            alertify.set('notifier','position', 'top-center');
            alertify.notify(" {!! session()->get('error')  !!} ", 'error').setHeader('Ошибка');
            alertify.error("{!! session()->get('error')  !!}");
        });
    </script>
@endif

